
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Metas -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site da Etec Jornalista Roberto Marinho">
        <meta name="keywords" content="Etec, Jrm, Jornalista Roberto Marinho, Trabalho Escolar">
        <meta name="author" content="Matheus Cardoso | mathues.antonio24@etec.sp.gov.br">
        <!-- Bootstrap Css -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- Css -->
        <link rel="stylesheet" type="text/css" href="../css/administracao-cadastro.css">
        <!-- Title -->
        <title>ETEC JRM</title>
        <link rel="icon" type="imagem/png" href="../img/img-inicial/icone-link/icone.png" />
        <script src="../js/validar.js"></script>
    </head>
    <body>

        <header>
            <!--Navbar-->
            <nav class="navbar navbar-expand-lg sombra-nav">

                <a class="navbar-brand" id="logo" href="index.html"><img src="../img/img-inicial/navbar/menu-logo.png" alt="Logo Etec JRM"></a>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                    <a href="administracao-entrar.html"><button class="botao-entrar nav-link">Entrar</button></a>
                    </li>
                </ul>
            </nav>
   
        </header>
        <div>                    
            <a href="administracao-entrar.html"><button class="botao-entrar-pequeno nav-link">Entrar</button></a>
        </div>
        <div class="formulario">
        <div class="margem-logo-formulario">
        <img class="logo-formulario" src="../img/img-fale-conosco/logo/logo.png"> 
        </div>
        <h3 class="text-center texto-1">CADASTRE-SE</h3>          
            <form  id="form" name="form" method="POST" action="../php/config.php">
                <div>
                    <input type="text" name="nome" id="nome" placeholder=" *Nome Completo" class="nome-formulario validation" data-required="Campo Obrigatório">
                </div>
                <div>
                    <input type="text" name="login" id="login" placeholder=" *Login" class="nome-formulario validation" data-required="Campo Obrigatório">
                </div>
                <div>
                    <input type="text" name="email" id="email" placeholder=" *Email" class="email-formulario" data-required="Campo Obrigatório">
                </div>
                <div>
                    <input type="password" name="senha" id="senha" placeholder=" *Senha" class="senha-formulario" data-required="Campo Obrigatório">
                </div>
                <div>
                    <input type="password" name="confirmarsenha" id="confirmarsenha" placeholder=" *Confirmar senha" class="senha-formulario" data-required="Campo Obrigatório">
                </div>
                <div>
                    <button type="submit" name="incluir" value="incluir" id="incluir" class="botao" onclick="return validarCadastro()">Enviar</button>
                </div>
            </form>
        </div>

        <!-- Centro Paula Souza -->
        <div class="centro-paula-souza">
            <img class="img-fluid" src="../img/img-inicial/centro paula souza/logo-cps.png">
        </div>
        <!-- Rodapé -->
        <footer>
            <img class="img-fluid rodape" src="../img/img-inicial/rodape/denuncie.png">
        </footer>
        
       <!-- Bootstrap -->
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>





</html>