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
        <link rel="stylesheet" type="text/css" href="../css/administracao-entrar.css">

        <!-- Title -->
        <title>ETEC JRM</title>
        <link rel="icon" type="imagem/png" href="../img/img-inicial/icone-link/icone.png" />
        <script src="../js/validar.js"></script>

    </head>

    <body>

        <header>
            <!--Navbar-->
            <nav class="navbar navbar-expand-lg sombra-nav">

                <!-- logo -->
                <a class="navbar-brand" id="logo" href="index.php"><img src="../img/img-inicial/navbar/menu-logo.png" alt="Logo Etec JRM"></a>

                <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                </button>

            </nav>
   
        </header>
        
        <div class="formulario">

            <div class="margem-logo-formulario">

                <img class="logo-formulario" src="../img/img-fale-conosco/logo/logo.png"> 

            </div>

            <h3 class="text-center texto-1">ENTRAR</h3>       

            <form  id="form" name="form" method="POST" action="../php/login.php">

                <div>

                    <input type="text" name="login" id="login" placeholder=" *Login" class="nome-formulario validation" data-required="Campo Obrigatório">

                </div>

                <div>

                    <input type="password" name="senha" id="senha" placeholder=" *Senha" class="senha-formulario" data-required="Campo Obrigatório">

                </div>

                <div>

                    <button type="submit" name="entrar" value="entrar" id="entrar" class="botao"  onclick="return validarLogin()">Enviar</button>

                </div>
                
            </form>

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

                        <a href="fale-conosco.php"><button class="botao-entrar-pequeno nav-link">CONTATO</button></a>

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