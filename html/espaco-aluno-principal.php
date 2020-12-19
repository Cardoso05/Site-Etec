<?php
session_start();
    if((!isset ($_SESSION['login'])) and (!isset ($_SESSION['senha'])))
    {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('Location:administracao-entrar.html');
    }

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
        <link rel="stylesheet" type="text/css" href="../css/espaco-aluno-principal.css">

        <!-- Title -->
        <title>ETEC JRM</title>
        <link rel="icon" type="imagem/png" href="../img/img-inicial/icone-link/icone.png" />

        <!-- JavaScript -->
        <script src="../js/auto-scroll.js" type="text/javascript"></script>

    </head>

    <body>

        <!-- JavaScript -->
        <script src="../js/subir-topo.js" type="text/javascript"></script>
        <script src="../js/description.js" type="text/javascript"></script>

        <header>

            <!--Navbar-->
            <nav class="navbar navbar-expand-lg sombra-nav">

                <!-- Logo -->
                <a class="navbar-brand" id="logo" href="index.html"><img src="../img/img-inicial/navbar/menu-logo.png" alt="Logo Etec JRM"></a>
    
                <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    
                    <span class="navbar-toggler-icon"></span>
    
                </button>
    
                <!-- Links do menu-->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
                    <ul class="navbar-nav ml-auto">

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
                        
                            <a class="nav-link font-menu-links" href="espaco-aluno-principal.php">ESPAÇO ALUNO</a>
                            
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

        <!-- Conteudo da Pagina-->
        <div class="container conteudo-pagina">

            <div id="img-logo-sobre">

                <img src="../img/img-espaco-aluno/logo/logo.png">

            </div>

            <div>

                <h1 class="titulo-1">Aqui você encontra oque você precisa no seu dia a dia na Etec</h1>

            </div>

            <div class="botoes-tela-grande">
            
                <div class="row">

                    <div class="botao col-md-4">

                        <img src="../img/img-espaco-aluno/botoes/estagios.png"></a>

                    </div>

                    <div class="botao col-md-4">

                        <a href="https://drive.google.com/file/d/16fuKKc9xHQWS5E8i0hCGlvSp3Hqu0JDr/view"><img src="../img/img-espaco-aluno/botoes/laboratorio.png"></a>

                    </div>

                    <div class="botao col-md-4">

                        <a href="#"><img src="../img/img-espaco-aluno/botoes/estudio.png"></a>

                    </div>

                </div>

                <div class="row">

                    <div class="botao col-md-4">

                        <a href="https://siga.cps.sp.gov.br/aluno/loginEtec.aspx"><img src="../img/img-espaco-aluno/botoes/nsa.png"></a>

                    </div>
                        
                    <div class="botao col-md-4">

                        <a href="#"><img src="../img/img-espaco-aluno/botoes/projeto.png"></a>

                    </div>
                    
                    <div class="botao col-md-4">

                        <a href="#"><img src="../img/img-espaco-aluno/botoes/secretaria.png"></a>

                    </div>

                </div>

            </div>

            <div class="botoes-tela-media">

                <div class="row">

                    <div class="botao col-sm-6">

                        <img src="../img/img-espaco-aluno/botoes/estagios.png">

                    </div>

                    <div class="botao col-sm-6">

                        <img src="../img/img-espaco-aluno/botoes/estudio.png">

                    </div>

                </div>

                <div class="row">

                    <div class="botao col-sm-6">

                        <img src="../img/img-espaco-aluno/botoes/laboratorio.png">

                    </div>

                    <div class="botao col-sm-6">

                        <img src="../img/img-espaco-aluno/botoes/nsa.png">

                    </div>

                </div>

                <div class="row">

                    <div class="botao col-sm-6">

                        <img src="../img/img-espaco-aluno/botoes/projeto.png">

                    </div>
                    
                    <div class="botao col-sm-6">

                        <img src="../img/img-espaco-aluno/botoes/secretaria.png">

                    </div>

                </div>

            </div>

            <div class="botoes-tela-pequeno">

                <div class="row">

                    <div class="botao col">

                        <img src="../img/img-espaco-aluno/botoes/estagios.png">

                    </div>

                    <div class="botao col">

                        <img src="../img/img-espaco-aluno/botoes/estudio.png">

                    </div>
                
                    <div class="botao col">

                        <img src="../img/img-espaco-aluno/botoes/laboratorio.png">

                    </div>

                    <div class="botao col">

                        <img src="../img/img-espaco-aluno/botoes/nsa.png">

                    </div>
                
                    <div class="botao col">

                        <img src="../img/img-espaco-aluno/botoes/projeto.png">

                    </div>
                    
                    <div class="botao col">

                        <img src="../img/img-espaco-aluno/botoes/secretaria.png">

                    </div>

                </div>

            </div>

            <div>

                <h1 class="titulo-2">Os alunos da ETEC JRM contam com colegas que os representam e discutem assuntos de interesse comum, junto ao NPI. <a href="#">Confira aqui</a></h1>

            </div>

            <div>
            
                <div class="procedimentos">

                    <h2 class="titulo-3">PROCEDIMENTOS PARA A RETIRADA DE EQUIPAMENTOS</h2>

                    <p class="texto-2">A ETEC JRM disponibiliza para todos os alunos, equipamentos para uso na realização das atividades solicitadas pelos professores.</br>
                    Para solicitar a retirada de um equipamento, siga os passos a seguir:</br>

                    1º Passo: Reserva-se o equipamento no almoxarifado técnico;</br>

                    2º Passo: Preencher formulário <a href="#"> (Clique para acessar o formulário em PDF);</a></br>
                    ​O formulário deve ser usado toda vez que retirarem algum equipamento da escola para gravação externa​.</br>
                    Este formulário deve ser entregue para o ​​​almoxarife no dia da retirada do equipamento com as devidas assinaturas, faltando assinaturas ​não existe liberação.</br>

                    <p class="margin-texto">A data de devolução do equipamento é preenchida pelo ​​almoxarife​, no entanto, fique ligado pois os equipamentos normalmente devem ser devolvidos no dia seguinte​ a sua retirada, exceto para retiradas as sexta-feira​, quando o equipamento será devolvido no próximo dia útil.</p></br></p>

                </div>

            </div>

            <div>

                <h2 class="titulo-4">CONTROLE DE ENTRADA</h2>

                <div class="texto-2">

                    <p class="texto-2">Para a entrada de pessoas externas/convidados na escola, trazida por alunos para realização de atividades, é necessária a utilização do Formulário de Autorização de Entrada (clique aqui para acessar o formulário em PDF).</br>

                    O documento deve ser preenchido e entregue na Diretoria de Serviços ou para o Coordenador do curso, devidamente preenchido e assinado, com antecedência de 1 (uma) semana da data de realização da atividade/visita.</p></br>

                </div>

            </div>

            <div>

                <a href="espaco-aluno.php"><button class="botao-entrar-pequeno nav-link">Horario Aulas</button></a>

            </div>

            <div>

                <form  id="form" name="form" method="POST" action="../php/logout.php">
                    <br>

                    <button type="submit" name="incluir" value="incluir" id="incluir" class="botao-entrar-pequeno">Logout</button>
                
                </form>

            </div>
            
        </div>
       
        <!-- Rodapé -->
        <footer>

            <div class="rodape1 row">

                <div class="img-cps col-md-3">

                    <img src="../img/img-espaco-aluno/rodape/centro-paula-souza/centro-paula-souza.png" alt="Centro Paula Souza" class="cps">

                </div>

                <div class="endereco col-md-3">

                    <h6 class="titulo-endereco">Endereço</h6>

                    <p class="texto-endereco">São Paulo/SP</br>
                    Broonklin novo</br>
                    Avenida Chucri Zaidan, 40</br>
                    </p>

                </div>

                <div class="contato col-md-3">

                    <h6 class="titulo-contrato">Contato</h6>
                    <p class="texto-contato">São Paulo/SP</br>
                    Broonklin novo</br>
                    Avenida Chucri Zaidan, 40</br>     
                    </p>

                </div>

                <div class="col-md-3 redes-contato">

                    <div class="redes-sociais-rodape">

                        <img src="../img/img-espaco-aluno/rodape/redes-sociais/google-icone.png" alt="">

                        <img src="../img/img-espaco-aluno/rodape/redes-sociais/youtube-icone.png" alt="">

                        <img src="../img/img-espaco-aluno/rodape/redes-sociais/twitter-icone.png" alt="">

                        <img src="../img/img-espaco-aluno/rodape/redes-sociais/instagran-icone.png" alt="">

                        <img src="../img/img-espaco-aluno/rodape/redes-sociais/facebook-icone.png" alt="">

                    </div>

                    <div>

                        <a href="fale-conosco.html"><button class="botao-entrar-pequeno nav-link">CONTATO</button></a>

                    </div>

                </div>

            </div>

            <div class="rodape-menor">

                <div class="rodape1-menor row">

                    <div class="endereco-menor col-sm-6">

                        <h6 class="titulo-endereco-menor">Endereço</h6>

                        <p class="texto-endereco-menor">São Paulo/SP</br>
                        Broonklin novo</br>
                        Avenida Chucri Zaidan, 40</br>
                        </p>

                    </div>
        
                    <div class="contato-menor col-sm-6">

                        <h6 class="titulo-contrato-menor">Meios de contato</h6>

                        <p class="texto-contato-menor">Email: contato@jrmetec.com.br</br>
                        Telefone: 5103-2085</br>     
                        </p>

                    </div>

                </div>

            </div>

            <div class="etec-footer">

                <h3 class="footer">© 2019 ETEC JORNALISTA ROBERTO MARINHO. ALL RIGHTS RESERVED</h3>

            </div>

        </footer>

        <!-- Bootstrap -->
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
         
    </body>

</html>