<script>
    document.addEventListener("DOMContentLoaded", function () {
        const generalSearch = document.getElementById('generalSearch');
        const recordsPerPageSelect = document.getElementById('recordsPerPage');
        const columnFilters = document.querySelectorAll('.columnFilter');
        const sortIcons = document.querySelectorAll('.sort-icon');
        const table = document.getElementById('dataTable');
        const rows = Array.from(table.querySelectorAll('tbody tr'));
        const pagination = document.getElementById('pagination');

        let currentPage = 1;
        let recordsPerPage = parseInt(recordsPerPageSelect.value);
        let columnFilterValues = {};
        let sortState = { column: null, order: null };

        // Atualizar a exibição da tabela com base na página e limite de registros
        function renderTable() {
            let filteredRows = rows.filter(row => {
                return Object.entries(columnFilterValues).every(([column, value]) => {
                    const cell = row.children[column].textContent.toLowerCase();
                    return cell.includes(value);
                });
            });

            if (sortState.column !== null) {
                filteredRows.sort((a, b) => {
                    const valA = a.children[sortState.column].textContent.trim().toLowerCase();
                    const valB = b.children[sortState.column].textContent.trim().toLowerCase();
                    return sortState.order === 'asc'
                        ? valA.localeCompare(valB)
                        : valB.localeCompare(valA);
                });
            }

            const start = (currentPage - 1) * recordsPerPage;
            const end = start + recordsPerPage;

            rows.forEach(row => row.style.display = 'none');
            filteredRows.slice(start, end).forEach(row => row.style.display = '');

            updatePagination(filteredRows.length);
        }

        // Atualizar os botões de paginação
        function updatePagination(totalRows) {
            const totalPages = Math.ceil(totalRows / recordsPerPage);
            pagination.innerHTML = '';

            for (let i = 1; i <= totalPages; i++) {
                const li = document.createElement('li');
                li.className = `page-item ${i === currentPage ? 'active' : ''}`;
                li.innerHTML = `<a href="#" class="page-link">${i}</a>`;
                li.addEventListener('click', (e) => {
                    e.preventDefault();
                    currentPage = i;
                    renderTable();
                });
                pagination.appendChild(li);
            }
        }

        // Filtragem Geral
        generalSearch.addEventListener('input', function () {
            const query = this.value.toLowerCase();
            columnFilterValues = {};
            columnFilters.forEach(filter => filter.value = '');
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(query) ? '' : 'none';
            });
            updatePagination(rows.filter(row => row.style.display !== 'none').length);
        });

        // Filtragem por Coluna
        columnFilters.forEach(filter => {
            filter.addEventListener('input', function () {
                const column = this.dataset.column;
                const value = this.value.toLowerCase();
                columnFilterValues[column] = value;

                generalSearch.value = '';
                currentPage = 1;
                renderTable();
            });
        });

        // Ordenação por Coluna
        sortIcons.forEach(icon => {
            icon.addEventListener('click', function () {
                const column = parseInt(this.dataset.column);
                const order = this.dataset.order;

                sortState = { column, order };
                this.dataset.order = order === 'asc' ? 'desc' : 'asc';
                this.querySelector('i').className = `fas fa-sort-${order === 'asc' ? 'up' : 'down'}`;

                renderTable();
            });
        });

        // Atualizar limite de registros por página
        recordsPerPageSelect.addEventListener('change', function () {
            recordsPerPage = parseInt(this.value);
            currentPage = 1;
            renderTable();
        });

        // Renderizar tabela inicial
        renderTable();
    });
</script>



<script>
    document.addEventListener("DOMContentLoaded", function () {
        const generalSearch = document.getElementById('generalSearch');
        const recordsPerPageSelect = document.getElementById('recordsPerPage');
        const columnFilters = document.querySelectorAll('.columnFilter');
        const sortIcons = document.querySelectorAll('.sort-icon');
        const downloadVisible = document.getElementById('downloadVisible');
        const downloadAll = document.getElementById('downloadAll');
        const table = document.getElementById('dataTable');
        const rows = Array.from(table.querySelectorAll('tbody tr'));

        let currentPage = 1;
        let recordsPerPage = parseInt(recordsPerPageSelect.value);

        // Função para coletar dados visíveis
        function getVisibleData() {
            const visibleRows = rows.filter(row => row.style.display !== 'none');
            return visibleRows.map(row => Array.from(row.children).map(cell => cell.textContent));
        }

        // Função para coletar todos os dados
        function getAllData() {
            return rows.map(row => Array.from(row.children).map(cell => cell.textContent));
        }

        // Função para gerar e baixar o Excel
        function downloadExcel(data, fileName) {
            const ws = XLSX.utils.aoa_to_sheet(data);
            const wb = XLSX.utils.book_new();
            XLSX.utils.book_append_sheet(wb, ws, "Registros");
            XLSX.writeFile(wb, fileName);
        }

        // Função para obter cabeçalhos dinâmicos da tabela
        function getTableHeaders() {
            const headers = [];
            const headerElements = document.querySelectorAll('table thead th'); // Altere o seletor conforme necessário
            headerElements.forEach(header => headers.push(header.textContent.trim()));
            return headers;
        }

        // Evento: Download dos registros visíveis
        downloadVisible.addEventListener('click', () => {
            const visibleData = getVisibleData(); // Função que retorna os dados visíveis da tabela
            const headers = getTableHeaders();
            visibleData.unshift(headers); // Adiciona os cabeçalhos dinamicamente
            downloadExcel(visibleData, 'registros_visiveis.xlsx');
        });

        // Evento: Download de todos os registros
        downloadAll.addEventListener('click', () => {
            const allData = getAllData(); // Função que retorna todos os dados
            const headers = getTableHeaders();
            allData.unshift(headers); // Adiciona os cabeçalhos dinamicamente
            downloadExcel(allData, 'registros_totais.xlsx');
        });


        // Adicionar bibliotecas necessárias
        const script = document.createElement('script');
        script.src = "https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js";
        document.body.appendChild(script);
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const recordsPerPageSelect = document.getElementById('recordsPerPage');
        const pagination = document.getElementById('pagination');
        const table = document.getElementById('dataTable');
        const rows = Array.from(table.querySelectorAll('tbody tr'));

        let currentPage = 1;
        let recordsPerPage = parseInt(recordsPerPageSelect.value);

        // Função para exibir os registros da página atual
        function displayTable() {
            const start = (currentPage - 1) * recordsPerPage;
            const end = start + recordsPerPage;

            rows.forEach((row, index) => {
                row.style.display = index >= start && index < end ? '' : 'none';
            });

            updatePagination();
        }

        // Função para atualizar os botões de paginação
        function updatePagination() {
            const totalRecords = rows.length;
            const totalPages = Math.ceil(totalRecords / recordsPerPage);
            pagination.innerHTML = '';

            if (totalPages <= 1) return;

            const addPageButton = (page, text, isActive = false, isDisabled = false) => {
                const li = document.createElement('li');
                li.className = `page-item ${isActive ? 'active' : ''} ${isDisabled ? 'disabled' : ''}`;
                li.innerHTML = `<button class="page-link">${text}</button>`;
                if (!isDisabled) {
                    li.addEventListener('click', () => {
                        currentPage = page;
                        displayTable();
                    });
                }
                pagination.appendChild(li);
            };

       

            // Botão: Voltar
            if (currentPage > 1) {
                addPageButton(currentPage - 1, '<i class="fas fa-chevron-left"></i>');
            }

            // Páginas intermediárias
            const range = 3; // Número de páginas ao redor da página atual
            let startPage = Math.max(1, currentPage - range);
            let endPage = Math.min(totalPages, currentPage + range);

            if (startPage > 1) {
                addPageButton(1, '1');
                if (startPage > 2) {
                    addPageButton(null, '<i class="fas fa-ellipsis"></i>', false, true);
                }
            }

            for (let i = startPage; i <= endPage; i++) {
                addPageButton(i, i, currentPage === i);
            }

            if (endPage < totalPages) {
                if (endPage < totalPages - 1) {
                    addPageButton(null, '<i class="fas fa-ellipsis"></i>', false, true);
                }
                addPageButton(totalPages, totalPages);
            }

            // Botão: Avançar
            if (currentPage < totalPages) {
                addPageButton(currentPage + 1, '<i class="fas fa-chevron-right"></i>');
            }

            // Botão: Última Página
            if (currentPage < totalPages) {
                addPageButton(totalPages, '<i class="fas fa-angles-right"></i>');
            }
        }

        // Atualizar ao alterar o número de registros por página
        recordsPerPageSelect.addEventListener('change', () => {
            recordsPerPage = parseInt(recordsPerPageSelect.value);
            currentPage = 1; // Reinicia na primeira página
            displayTable();
        });

        // Inicializar a tabela
        displayTable();
    });
</script>