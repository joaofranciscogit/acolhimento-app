<?php

require_once './App/Config/Class.php';

// Configurações do Módulo
define('CONFIG', [
    'config_modulo'   => 'login',
    'config_title'    => 'Login',
    'config_detail'   => 'Tela de Login.',
    'config_icone'    => 'fas fa-lock'
]);

$useHelper->authLoginController(BASE.'page/auth/login-auth-page');


// Requisita o componente de login
require_once './App/Shared/LoginShared.php';
?>


    <section class="container d-flex flex-column vh-100">
        <div class="row align-items-center justify-content-center g-0 h-lg-100 py-8">
            <div class="col-lg-5 col-md-8 py-8 py-xl-0">
                <!-- Card -->
                <div class="card shadow">
                    <!-- Corpo do Card -->
                    <div class="card-body p-6 d-flex flex-column gap-4">
                        <div>
                            <div class="d-flex flex-column gap-1 text-center">
                                <h1 style="font-size: 75px;" class="fw-bold">HGM</h1>
                                <h2 class="mb-0 fw-bold text-center">Hospital Geral do Moxico</h2>
                                <span>Acesso Restrito - Fazer Login</span>
                            </div>
                        </div>
                        <!-- Formulário de Login -->
                        <form id="loginForm" class="needs-validation" novalidate="">
                            <!-- Campo de Email -->
                            <div class="mb-3">
                                <label for="loginEmail" class="form-label">Email do Usuário</label>
                                <input type="email" id="loginEmail" class="form-control" name="loginEmail" placeholder="Email" required="">
                                <div class="invalid-feedback">Adicione o seu Email.</div>
                            </div>
                            <!-- Campo de Senha -->
                            <div class="mb-3">
                                <label for="loginSenha" class="form-label">Senha</label>
                                <input type="password" id="loginSenha" class="form-control" name="loginSenha" placeholder="Senha" required="">
                                <div class="invalid-feedback">Adicione a Senha.</div>
                            </div>
                            <!-- Botão de Enviar -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Entrar no Sistema</button>
                            </div>
                            <div id="erroId"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Script de Login -->
    <script>

        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();  // Prevenir o comportamento padrão do formulário
            
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
           
            axios.post('<?php echo BASE.'service/auth/login-auth-service'; ?>', {
                email: email,
                senha: senha
            })
            .then(function(response) {
                // Processar a resposta de sucesso
                console.log('Login realizado com sucesso!', response);
                console.log(response.data.success);
                if (response.status == 200) {
                    go('<?php echo BASE.'page/main/painel-main-page'; ?>?codigo=' + response.data.codigo);
                }
            })
            .catch(function(error) {
                // Exibir mensagem de erro
                console.error('Ocorreu um erro durante o login:', error);
                console.log('----------> 400');
                    hideLoader();
                    const erroMessage = document.getElementById('erroId');
                    erroMessage.innerHTML = `<p class="text-danger mt-4"><strong>Email ou senha incorretos.</strong> Por favor, verifique suas credenciais e tente novamente.</p>`;
            });
        });

    </script>



<?php
// Requisita o componente de fim do login
require_once './App/Shared/LoginEndShared.php';
?>
