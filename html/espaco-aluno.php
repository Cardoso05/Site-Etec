<?php
session_start();
    if((!isset ($_SESSION['login'])) and (!isset ($_SESSION['senha'])))
    {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('Locantion:administracao-entrar.html');
    }

    $logado = $_SESSION['login'];
?>
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
        <link rel="stylesheet" type="text/css" href="../css/espaço-aluno.css">
        <!-- Title -->
        <title>ETEC JRM</title>
        <link rel="icon" type="imagem/png" href="../img/img-inicial/icone-link/icone.png" />
        <script src="../js/auto-scroll.js" type="text/javascript"></script>
    </head>
    <body>
        <script src="../js/subir-topo.js" type="text/javascript"></script>
        <script src="../js/description.js" type="text/javascript"></script>
        <header>
            <!--Navbar-->
            <nav class="navbar navbar-expand-lg sombra-nav">

                <a class="navbar-brand" id="logo" href="index.html"><img src="../img/img-inicial/navbar/menu-logo.png" alt="Logo Etec JRM"></a>
    
                <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    
                <span class="navbar-toggler-icon"></span>
    
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
                    <ul class="navbar-nav ml-auto">
                        <!-- Links do menu-->
                        <li class="nav-item active">
                        <a class="nav-link font-menu-links" href="index.html">INÍCIO<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                                <a class="nav-link font-menu-links" href="sobre.html">SOBRE</a>
                        </li>
                        <li class="nav-item ">
                        <a class="nav-link font-menu-links" href="cursos.html#cursos-tecnicos">CURSOS TÉCNICOS</a>
                        </li>
                        <li class="nav-item ">
                        <a class="nav-link font-menu-links" href="espacoaluno.html">ESPAÇO ALUNO</a>
                        </li>
                        <li class="nav-item ">
                                <a class="nav-link font-menu-links margin-contato" href="fale-conosco.html">FALE CONOSCO</a>
                        </li>
                    </ul>
    
    
                </div>
    
            </nav>
            <!-- Redes Sociais -->
            <div class="rede-sociais">

                <div class="icone-redes-sociais">
                    <a href="https://plus.google.com/109665194998368685817" target="_blank"><img src="../img/img-acolhimento/redes-sociais/google-icone.png" alt="google icone"></a>
                </div>

                <div class="icone-redes-sociais">
                    <a href="https://www.youtube.com/user/etecjrm253" target="_blank"><img src="../img/img-acolhimento/redes-sociais/youtube-icone.png" alt="youtube icone"></a>
                </div>

                <div class="icone-redes-sociais"> 
                    <a href="https://twitter.com/etecjrm253" target="_blank"><img src="../img/img-acolhimento/redes-sociais/twitter-icone.png" alt="twitter icone"></a>
                </div>

                <div class="icone-redes-sociais">
                    <a href="https://www.instagram.com/etecjrm253/" target="_blank"><img src="../img/img-acolhimento/redes-sociais/instagran-icone.png" alt="instagran icone"></a>
                </div>

                <div class="icone-redes-sociais">
                    <a href="https://www.facebook.com/etecjrm" target="_blank"><img src="../img/img-acolhimento/redes-sociais/facebook-icone.png" alt="facebook icone"></a>
                </div>

            </div>   
        </header>
        <div class="container conteudo-pagina">

            <h1 class="titulo-1">HORARIOS DAS AULAS</h1>
            
            <div>


                <ul class="nav nav-tabs">

                    <li class="botao">

                        <a class="underline" data-toggle="pill" href="#manha" ><button class="btn botao-cursos" onclick="return description()"><h2 class="titulo-cursos">Manhã</h2></button></a>

                    </li>


                    <li class="botao">
                        <a class="underline" data-toggle="pill" href="#tarde" ><button class="btn botao-cursos botao-cursos" onclick="return description()"><h2 class="titulo-cursos">Tarde</h2></button></a>
                    </li>
                
                    <li class="botao">
                        <a href="#noite" class="underline" data-toggle="pill"><button class="btn botao-cursos" onclick="return description()"><h2 class="titulo-cursos">Noite</h2></button></a>
                    </li>


                    

                    <li class="botao">
                        <a href="#novotec-manha" class="underline" data-toggle="pill"><button class="btn botao-cursos" onclick="return description()"><h2 class="titulo-cursos">NOVOTEC - MANHÃ</h2></button></a>
                    </li>

                

                    <li class="botao">
                        <a href="#novotec-tarde" class="underline" data-toggle="pill"><button class="btn botao-cursos" onclick="return description()"><h2 class="titulo-cursos">NOVOTEC - TARDE</h2></button></a>
                    </li>


                    
                    <li class="botao">
                        <a href="#novotec-noite" class="underline" data-toggle="pill"><button class="btn botao-cursos" onclick="return description()"><h2 class="titulo-cursos">NOVOTEC - NOITE</h2></button></a>
                    </li>
                    
                </ul> 

            </div>


            <div class="container tab-content" id="cursos">
                 
                
              
                <div id="manha" class="tab-pane fade img-horario">
                    <img  src="../img/img-horario-aulas/manha.png" alt="horario-manhã">
                </div>
                <div id="tarde" class="tab-pane fade img-horario">
                    <img src="../img/img-horario-aulas/tarde.png" alt="horario-tarde">
                </div>
                <div id="noite"  class="tab-pane fade img-horario">
                    <img src="../img/img-horario-aulas/noite.png" alt="horario-noite">
                </div> 
                <div id="novotec-manha"  class="tab-pane fade img-horario">
                <img src="../img/img-horario-aulas/novotec-manha.png" alt="horario-novotec-manha">
                </div>
                <div id="novotec-tarde"  class="tab-pane fade img-horario">
                   <img src="../img/img-horario-aulas/novotec-tarde.png" alt="horario-novotec-tarde">
                </div>
                <div id="novotec-noite" class="tab-pane fade img-horario">
                    <img src="../img/img-horario-aulas/manha.png" alt="horario-manhã">
                </div>    
            </div>



        </div>
        
        <!-- Centro Paula Souza -->
        <div class="centro-paula-souza">
            <img class="img-fluid" src="../img/img-inicial/centro paula souza/logo-cps.png">
        </div>
        <!-- Rodapé -->
        <footer>
            <img id="rodape1" class="img-fluid rodape" src="../img/img-inicial/rodape/denuncie.png">
        </footer>
        <!-- Bootstrap -->
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>





</html>