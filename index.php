<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <?php include("conexao.php"); ?>
    
    <title>Eyes | Login</title>
</head>
<body>
    <nav class="nav-tabs">
        <ul class="nav justify-content-center">
            <li class="nav-item">
            <a class="nav-link active" href="#">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Cadastro</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://github.com/Felipesco/eyes">Saiba Mais</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">CVE Store</a>
        </li>
        </ul>
    </nav>

    <div class="container-fluid" style="margin-top: 2%;">
        <div class="row justify-content-around">
            <div class="col-4">
                Login
            </div>
            <div class="col-4">
                <form method="POST" action="cadastro.php" onsubmit="return valida_form_cadastro(this)">
                    <div class="form-group row" >
                        <label for="formGroupExampleInput">
                            Nome
                        </label>
                        <input class="form-control" placeholder="Nome" type="text" name="nomeUser" id="nomeUser">
                    </div>

                    <div class="form-group row" >
                        <label for="formGroupExampleInput">
                            E-mail
                        </label>
                        <input class="form-control" placeholder="exemplo@exemplo.com" type="email" name="emailUser" id="emailUser">
                    </div>

                    <div class="form-group row" >
                        <label for="formGroupExampleInput">
                            Senha
                        </label>
                        <input class="form-control" type="password" name="senhaUser" id="senhaUser">
                    </div>

                    <div class="form-group row" >
                        <label for="formGroupExampleInput">
                            Telefone
                        </label>
                        <input class="form-control" placeholder="123456789" type="number" name="telefoneUser" id="telefoneUser">
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn" style="background-color: 	#008000; color: #ffffff;" >Cadastrar</button>
                        <button type="reset" class="btn" style="background-color: red; color: #ffffff; margin-left: 5%;">Limpar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>





    <script language='javascript' type='text/javascript'> 
        function valida_form_cadastro(){
            if (document.getElementById("emailUser").value == ""){
                alert('Preencha o campo de E-mail')
            }
            else if (document.getElementById("senhaUser").value == ""){
                alert('Preencha o campo de Senha')
            }
            else if (document.getElementById("senhaUser").value.length < 3 ){
                alert('Senha Muito Fraca \nEscolha uma senha com no minímo 4 caracteres')
            }
        }
    </script>

    <!--Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>