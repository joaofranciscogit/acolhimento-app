<?php

require_once './App/Config/Class.php';

// Configurações do Módulo
define('CONFIG', [
    'config_modulo'   => 'login',
    'config_title'    => 'Login',
    'config_detail'   => 'Tela de Login.',
    'config_icone'    => 'fas fa-lock'
]);

$useHelper->authLoginController(BASE . 'page/auth/login-auth-page');

// Requisita o componente de login
require_once './App/Shared/Auth/LoginAuthShared.php';

?>

<section class="container d-flex flex-column vh-100">
    <div class="row align-items-center justify-content-center g-0 h-lg-100 py-8">
        <div class="col-lg-5 col-md-8 py-8 py-xl-0" style="width: 370px;">
            <!-- Card -->
            <div class="card shadow">
                <!-- Corpo do Card -->
                <div class="card-body d-flex flex-column p-3">
                    <div class="mt-3 mb-3">
                        <div class="text-center">
                            <img src="<?php echo BASE; ?>App/Logo/logo.png" width="50px;">
                        </div>
                        <div class="text-center mt-3">
                            <h4 class="fw-bold text-center" style="font-size: 14px;">CACAJ - Centro de Acolhimento Arnaldo Janssen</h4>
                            <span>Acesso Restrito - Fazer Login</span>
                        </div>
                    </div>
                    <!-- Formulário de Login -->
                    <form id="loginForm" class="needs-validation" novalidate="">
                        <!-- Campo de Email -->
                        <div class="mb-3 position-relative">
                            <label for="loginEmail" class="form-label" style="font-size: 13px;">Email do Usuário</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="email" id="loginEmail" class="form-control" name="loginEmail" placeholder="Email" required="">
                            </div>
                            <div class="invalid-feedback">Adicione o seu Email.</div>
                        </div>
                        <!-- Campo de Senha -->
                        <div class="mb-3 position-relative">
                            <label for="loginSenha" class="form-label" style="font-size: 13px;">Senha</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" id="loginSenha" class="form-control" name="loginSenha" placeholder="Senha" required="">
                                <button class="btn btn-outline-secondary" type="button" id="togglePassword" style="border-color: #CBD5E1; background-color: #CBD5E1">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                            <div class="invalid-feedback">Adicione a Senha.</div>
                        </div>
                        <!-- Botão de Enviar -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Entrar no Sistema</button>
                        </div>
                        <div id="erroId"></div>
                        <div class="mt-4 text-center">
                            <a href="<?php echo BASE; ?>page/site/main-site-page">Voltar a Página Inicial</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Script de Login -->
<script>
    // Mostrar/Ocultar Senha
    document.getElementById('togglePassword').addEventListener('click', function () {
        const passwordInput = document.getElementById('loginSenha');
        const icon = this.querySelector('i');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });

    document.getElementById('loginForm').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevenir o comportamento padrão do formulário

        // Captura dos dados do formulário
        const email = document.getElementById('loginEmail').value;
        const senha = document.getElementById('loginSenha').value;

        console.log(email, senha);

        // Validação dos campos obrigatórios
        if (!email || !senha) {
            console.log('Por favor, preencha todos os campos.');
            return;
        }

        showLoader();

        axios.post('<?php echo BASE . 'service/auth/login-auth-service'; ?>', {
            email: email,
            senha: senha
        })
        .then(function (response) {
            // Processar a resposta de sucesso
            console.log('Login realizado com sucesso!', response);
            console.log(response.data.success);
            if (response.status == 200) {
                go('<?php echo BASE . 'page/app/painel-app-page'; ?>?codigo=' + response.data.codigo);
            }
        })
        .catch(function (error) {
            // Exibir mensagem de erro
            console.error('Ocorreu um erro durante o login:', error);
            hideLoader();
            const erroMessage = document.getElementById('erroId');
            erroMessage.innerHTML = `<p class="text-danger mt-4"><strong>Email ou senha incorretos.</strong> Por favor, verifique suas credenciais e tente novamente.</p>`;
        });
    });
</script>

<?php

// Requisita o componente de fim do login
require_once './App/Shared/Auth/LoginEndAuthShared.php';

?>
