<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="shortcut icon" href="../_assets/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../_style/style.css">
    <style>
        body{
            height: 100vh;
        }
        .login{
            height: 125vh;
        }
    </style>
</head>
<body>
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="card formulario">
                        <div class="card-body">
                            <h2 style="text-align: center; font-weight: bold;">Tela de Cadastro</h3>
                        </div>
                        <div class="card-body">
                            <form action="operador_de_banco/gravarusuario.php" method="POST" onsubmit="return validarForm()">
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="nome" class="form-label">Nome</label>
                                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Seu nome" required pattern="[A-Za-z0-9]+" oninput="this.value = this.value.replace(/[^a-zA-ZÀ-ÖØ-öø-ÿ]+/, '');" onblur="verificado(this, this.value, 1);">
                                    </div>
                                    <div class="col mb-3">
                                        <label for="sobrenome" class="form-label">Sobrenome</label>
                                        <input type="text" name="sobrenome" id="sobrenome" class="form-control" placeholder="Seu Sobrenome" required pattern="[A-Za-z ]+" oninput="this.value = this.value.replace(/[^a-zA-ZÀ-ÖØ-öø-ÿ ]+/, '');" onblur="verificado(this, this.value, 1);">
                                    </div>
                                </div>
                                <small id="userValidation" class="hide" style="margin-top: 0; color: rgba(255, 0, 0, 0.678);">
                                    Usuário já cadastrado!
                                </small>
                                <br>
                                <div>
                                    <label for="usernameaemail" class="form-label">Username e Email</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                        <input type="text" class="form-control" placeholder="Nome de usuário" aria-label="Username" aria-describedby="basic-addon1" name="usuario" id="usuario" required pattern="[A-Za-z0-9._<>`´À-ÖØ-öø-ÿ ]+" onblur="buscarUser(this.value)" oninput="var element = document.querySelector('#userValidation'); element.classList.add('hide');">
                                    </div>
                                </div>
                                <div>
                                    <div class="input-group mb-3">
                                        <input type="text" name="email" id="email" class="form-control" placeholder="Seu email" aria-label="Your email" aria-describedby="basic-addon2" required pattern="[A-Za-z0-9]+" oninput="this.value = this.value.replace(/[^a-zA-Z0-9]+/, '');" onblur="verificado(this, this.value, 1);">
                                        
                                        <select name="dominio" class="form-select" id="inputGroupSelection01" title="@youremail" required> 
                                            <option value="@domain.com" selected>@domain.com</option>
                                            <option value="@gmail.com">@gmail.com</option>
                                            <option value="@gmail.com.br">@gmail.com.br</option>
                                            <option value="@yahoo.com">@yahoo.com</option>
                                            <option value="@yahoo.com.br">@yahoo.com.br</option>
                                            <option value="@hotmail.com">@hotmail.com</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <label for="senha" class="form-label">Nova Senha</label>
                                    <br>
                                    <small id="passwordHelpBlock" class="form-text text-muted" style="font-size: 12px;">
                                        &nbsp; Sua senha deve ter entre 8 e 20 caracteres, os quais devem ser letras e números, sem espaços, caracteres especiais ou emojis.
                                    </small>
                                    <div class="input-group mb-3">
                                        <input type="password" name="senha" id="senha" class="form-control" placeholder="Insira a Senha" aria-described="basic-addon2" required pattern="[A-Za-z0-9]+" required minlength="8" oninput="this.value = this.value.replace(/[^a-zA-Z0-9]+/, '');verificado(document.querySelector('#passwordHelpBlock'), this.value, 2);" onblur="verificado(this, this.value, 1);">
                                    </div>
                                </div>
                                <div>
                                    <label for="senha" class="form-label">Confirme a Senha</label>
                                    <div class="input-group mb-3">
                                        <input type="password" id="confirmarSenha" name="confirmaSenha" class="form-control" placeholder="Repita a Senha" aria-described="basic-addon2" required pattern="[A-Za-z0-9]+" oninput="verificaSenha(this.value);" onblur="verificado(this, this.value, 1); verificaSenha(this.value);">
                                    </div>
                                    <small id="passwordValidation" class="hide" style="margin-top: 0; color: rgba(255, 0, 0, 0.678);">
                                        As senhas devem coincidir!
                                    </small>
                                </div>
                                <br>
                                <div>
                                    <div class="form-check">
                                        <input type="checkbox" name="verificacao" id="gridCheck" class="form-check-input" required>
                                        <label for="gridCheck" class="form-check-label">Concordo com os termos de serviço do site</label>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <div class="col-lg-12" style="text-align: right;">
                                        <a href="../index.html" class="btn btn-outline-danger">Cancelar</a>
                                        <button type="submit" class="btn btn-outline-primary">Cadastrar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../_scriptjs/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        function buscarUser(usuario){
            var validador = document.querySelector("#userValidation");
            $.ajax({
                type: "POST",
                url: "operador_de_banco/consulta.php", // Nome do arquivo PHP que irá processar a solicitação
                data: { usuario: usuario }, // Envia o valor da variável "usuario" para o PHP
                success: function(response) {
                    var resposta = response; // A resposta do PHP será exibida no console
                    //console.log(resposta);
                    if(resposta === "false"){
                        validador.classList.remove("hide");
                        verificado(document.querySelector("#usuario"), "", 1);

                    } else{
                        validador.classList.add("hide");
                        verificado(document.querySelector("#usuario"), usuario, 1);
                    }
                }
            });
        }
        function validarForm() {
            var nome = document.getElementById("nome").value;
            var sobrenome = document.getElementById("sobrenome").value;
            var usuario = document.getElementById("usuario").value;
            var email = document.getElementById("email").value;
            var senha = document.getElementById("senha").value;
            var confirmSenha = document.getElementById("confirmarSenha").value;

            if (nome.length < 1 || sobrenome.length < 4 || usuario.length < 4 || email.length < 1) {
                alert("Por favor, preencha todos os campos corretamente.");
                return false;
            }
            if(senha.length < 8 || senha != confirmSenha){
                alert("Verique se a senha e sua confirmação são iguais.");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>