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
        <link rel="stylesheet" type="text/css" href="../css/cursos.css">

        <!-- Title -->
        <title>ETEC JRM</title>
        <link rel="icon" type="imagem/png" href="../img/img-inicial/icone-link/icone.png" />
        <script src="../js/auto-scroll.js" type="text/javascript"></script>

    </head>

    <body>
        <!-- JavaScript -->
        <script src="../js/subir-topo.js" type="text/javascript"></script>

        <script src="../js/description.js" type="text/javascript"></script>

        <header>

            <!--Navbar-->
            <nav class="navbar navbar-expand-lg sombra-nav">

                <a class="navbar-brand" id="logo" href="index.php"><img src="../img/img-inicial/navbar/menu-logo.png" alt="Logo Etec JRM"></a>
    
                <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    
                    <span class="navbar-toggler-icon"></span>
    
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
                    <ul class="navbar-nav ml-auto">

                        <!-- Links do menu-->
                        <li class="nav-item active">
                        
                            <a class="nav-link font-menu-links" href="index.php">INÍCIO<span class="sr-only">(current)</span></a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link font-menu-links" href="sobre.php">SOBRE</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link font-menu-links" href="cursos.php#cursos-tecnicos">CURSOS TÉCNICOS</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link font-menu-links" href="espaco-aluno-principal.php">ESPAÇO ALUNO</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link font-menu-links margin-contato" href="fale-conosco.php">FALE CONOSCO</a>

                        </li>

                    </ul>
    
    
                </div>
    
            </nav>
            <!-- Fim Navbar -->

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

        <!-- Conteudo da Página -->
        <div class="container conteudo-pagina">

            <h1 class="titulo-1">Cursos Técnicos</h1>
            
            <div>

                <ul class="nav nav-tabs">

                    <li class="nav-item display-none">

                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#cursos-tecnicos" role="tab" aria-controls="pills-home" aria-selected="true"></a>

                    </li>

                    <li class="botao">

                        <a class="underline" data-toggle="pill" href="#multimidia" ><button class="btn botao-cursos" onclick="return description()"><h2 class="titulo-cursos">Técnico Multimidia</h2></button></a>

                    </li>


                    <li class="botao">

                        <a target="_blank" class="underline" data-toggle="pill" href="#audio-video" ><button class="btn botao-cursos botao-cursos" onclick="return description()"><h2 class="titulo-cursos">Técnico em produção de áudio e vídeo</h2></button></a>

                    </li>
                
                    <li class="botao">

                        <a href="#comunicacao-visual" class="underline" data-toggle="pill"><button class="btn botao-cursos" onclick="return description()"><h2 class="titulo-cursos">Ensino médio com habilitação técnica profissional em comunicação visual</h2></button></a>

                    </li>

                    <li class="botao">

                        <a href="#informatica-internet" class="underline" data-toggle="pill"><button class="btn botao-cursos" onclick="return description()"><h2 class="titulo-cursos">Ensino médio com habulitação técnica profissional em informática para internet</h2></button></a>

                    </li>
            
                    <li class="botao">

                        <a href="#jogos-digitais" class="underline" data-toggle="pill"><button class="btn botao-cursos" onclick="return description()"><h2 class="titulo-cursos">Ensino médio com habulitação técnica profissional em programação de jogos digitais</h2></button></a>

                    </li>

                    <li class="botao">

                        <a href="#marketing" class="underline" data-toggle="pill"><button class="btn botao-cursos" onclick="return description()"><h2 class="titulo-cursos">Ensino médio com habilitação técnica profissional em marketing</h2></button></a>

                    </li>
                    
                </ul> 

            </div>


            <div class="container tab-content" id="cursos">
                 
                
                <div id="cursos-tecnicos" class="tab-pane fade show active">

                    <h3 class="titulo-2">CURSOS TÉCNICOS </h3>

                    <p class="texto-curso">Os Cursos Técnicos oferecidos pela Etec JRM – Multimídia e Produção de Áudio e Vídeo - são GRATUITOS.</br>
                    Para cursar é necessário passar por um Processo Seletivo – VESTIBULINHO – que acontece geralmente duas vezes ao ano, com o período de inscrição entre o final de Abril e começo de Maio e entre o final de Setembro e começo de Outubro. É importante acompanhar as informações aqui no site</p>

                    <h3 class="titulo-3">A ETEC JRM oferece quatro opções de cursos técnicos:</h3>

                    <p class="texto-curso">

                        <strong>Técnico</strong> em Multimídia: 3 Módulos (3 Semestres)</br>
                        <strong>Técnico</strong> em Produção de Áudio e Vídeo: 4 Módulos (4 Semestres)</br>
                        O requisito para fazer um dos cursos modulares em nossa Etec é que o candidato esteja matriculado no 2º Ano do Ensino Médio ou ter o Ensino Médio concluído.</br>

                        <strong>Ensino Médio</strong> com Habilitação Profissional de Técnico em Informática para Internet: 3 Anos</br>
                        
                        <strong>Ensino Médio</strong> com Habilitação Profissional de Técnico em Marketing: 3 Anos</br>
                        
                        <strong>Ensino Médio</strong> com Habilitação Técnica Profissional em Comunicação Visual: 3 Anos</br>
                        
                        <strong>Ensino Médio</strong> com Habilitação Técnica Profissional em Comunicação Visual: 3 Anos</br>

                        <strong>Ensino Médio</strong> com Habilitação Técnica Profissional em Programação de Jogos Digitais: 3 Anos</br>

                        O requisito para fazer um dos cursos de Ensino Médio com Habilitação Técnica Profissional em nossa Etec é que o candidato tenha o Ensino Fundamental Completo.
                    
                    </p>

                    <div class="margin">

                        <a href="#" id="subirTopo" class="titulo-3 .voltar-ao-topo">Clique para ver os cursos</a>

                    </div>

                </div>

                <div id="multimidia" class="tab-pane fade">

                    <h3 class="titulo-2" id="titulo-multimidia">Técnico em Multimídia</h3>

                    <p class="texto-curso">O TÉCNICO EM MULTIMÍDIA é o profissional que desenvolve comunicação visual em meios eletrônicos, organiza e prepara arquivos digitais que podem compor telas para sistemas de comunicação para diferentes finalidades. Aplica técnicas de tratamento de imagens estáticas e em movimento que complementam estruturas de navegação em mídias digitais. Executa atualização de sites, portais e páginas da web. Elabora textos técnicos de acordo com os fundamentos e com a terminologia da área profissional.</p>

                    <h3 class="titulo-3">Mercado de trabalho</h3>

                    <p class="texto-curso">O mercado de trabalho do TÉCNICO EM MULTIMÍDIA é amplo, abrange diversas áreas da comunicação audiovisual, como cinema digital, TV interativa, vídeo e animação. Atua na concepção de roteiros, desenhos de produção, edição e efeitos especiais em empresas de comunicação – rádio e televisão – novas mídias e espaços alternativos de interação social, lazer e cultura. Poderá desenvolver trabalhos em portais de Internet, produtoras de multimídia, escritórios de criação publicitária e de comunicação, editoras de jornais e revistas on-line.</p>

                    <h3 class="titulo-3">Registro Profissional</h3>

                    <p class="texto-curso">O aluno formado no curso Técnico em Multimídia recebe um REGISTRO PROFISSIONAL que o habilita a trabalhar em diversas áreas. Conheça aqui quais são elas.</br>
                        Coordenador do curso: Professora Juliana Lamas</p>

                    <a href="#"><p class="texto-curso"> Clique aqui e veja a grade deste Curso</p></a>

                </div>

                <div id="audio-video" class="tab-pane fade">

                    <h3 class="titulo-2">TÉCNICO EM PRODUÇÃO DE ÁUDIO E VÍDEO</h3>

                    <p class="texto-curso">O TÉCNICO EM PRODUÇÃO DE ÁUDIO E VÍDEO é o profissional que colabora na captação de imagem e som, na ambientação, operação de equipamentos, por intermédio de recursos, linguagem e tecnologia dentro dos padrões técnicos dos diferentes meios de comunicação. Colabora na investigação e utilização de novas tecnologias relacionadas com linguagem, tratamento acústico e de imagem, luminosidade, animação. Prepara material audiovisual. Elabora fichas técnicas, mapas de programação, distribuição, veiculação dos produtos e serviços de comunicação.</p>

                    <h3 class="titulo-3">Mercado de trabalho</h3>

                    <p class="texto-curso">O mercado de trabalho do TÉCNICO EM PRODUÇÃO DE ÁUDIO E VÍDEO é amplo, abrange diversas áreas da comunicação audiovisual, como cinema digital, TV interativa, vídeo e animação. Atua na concepção de roteiros, desenhos de produção, edição e efeitos especiais em empresas de comunicação – rádio e televisão – novas mídias e espaços alternativos de interação social, lazer e cultura. Poderá desenvolver trabalhos em provedores de Internet, produtoras independentes, estúdios de gravação, escritórios de criação publicitária e de comunicação, empresas de radiodifusão e telecomunicações., além de laboratórios de desenvolvimento e pesquisa em comunicação audiovisual.</p>

                    <h3 class="titulo-3">Registro Profissional</h3>

                    <p class="texto-curso">O aluno formado no curso Técnico em Produção de Áudio e Vídeo recebe um REGISTRO PROFISSIONAL que o habilita a trabalhar em diversas áreas. Conheça aqui quais são elas.

                    </br>

                    Coordenador do curso: Professor Nelson Caramico</p>
                    <a href="#"><p class="texto-curso"> Clique aqui e veja a grade deste Curso</p></a>

                </div>

                <div id="informatica-internet"  class="tab-pane fade">

                    <h3 class="titulo-2">ENSINO MÉDIO COM HABILITAÇÃO PROFISSIONAL DE TÉCNICO EM INFORMÁTICA PARA INTERNET</h3>

                    <p class="texto-curso">Nesta modalidade de ensino, baseada na Lei nº 13.415/17, o aluno cursará o Ensino Médio estruturado em conjunto com a formação de Técnico em Informática Para Internet, numa jornada de até 30 aulas semanais (até 6 aulas diárias), em cada uma das 3 séries. Ao final do curso, o aluno terá concluído o Ensino Médio e obterá, também, o diploma de Técnico em Informática Para Internet, com validade nacional, de acordo com o perfil profissional a seguir: O TÉCNICO EM INFORMÁTICA PARA INTERNET é o profissional que desenvolve e realiza manutenção em websites e portais na Internet e Intranet. Utiliza ferramentas de desenvolvimento de projetos para construir soluções que auxiliam o processo de criação de interfaces e aplicativos empregados no comércio e marketing eletrônicos.</p>

                    <h3 class="titulo-3">Eixo Tecnológico:</h3>

                    <p class="texto-curso">INFORMAÇÃO E COMUNICAÇÃO</p>

                    <h3 class="titulo-3">Mercado de trabalho</h3>

                    <p class="texto-curso">OInstituições públicas, privadas e do terceiro setor que demandem programação de computadores para Internet.</br></p>

                    <a href="#"><p class="texto-curso"> Clique aqui e veja a grade deste Curso</p></a>

                </div>

                <div id="comunicacao-visual"  class="tab-pane fade">

                    <h3 class="titulo-2">ENSINO MÉDIO COM HABILITAÇÃO TÉCNICA PROFISSIONAL EM COMUNICAÇÃO VISUAL
                    </h3>

                    <p class="texto-curso">Nesta modalidade de ensino, baseada na Lei nº 13.415/17, o aluno cursará o Ensino Médio estruturado em conjunto com a formação de Técnico em Comunicação Visual, numa jornada de até 30 aulas semanais (até 6 aulas diárias), em cada uma das 3 séries. Ao final do curso, o aluno terá concluído o Ensino Médio e obterá, também, o diploma de Técnico em Comunicação Visual, com validade nacional, de acordo com o perfil profissional a seguir: O TÉCNICO EM COMUNICAÇÃO VISUAL é o profissional que projeta e executa projetos de comunicação visual de diferentes gêneros e formatos gráficos para peças publicitárias, como livros, portais, painéis, fôlderes, jornais. Desenvolve e emprega elementos criativos e estéticos de comunicação visual gráfica. Cria ilustrações, aplica tipografias, desenvolve elementos de identidade visual de peças. Controla, organiza e armazena materiais físicos e digitais da produção gráfica.</p>

                    <h3 class="titulo-3">Eixo Tecnológico:</h3>

                    <p class="texto-curso">PRODUÇÃO CULTURAL E DESIGN</p>

                    <h3 class="titulo-3">Pré-Requisitos</h3>

                    <p class="texto-curso">Possuir o certificado de conclusão do Ensino Fundamental nas modalidades: regular ou Educação de Jovens e Adultos – EJA ou Exame Nacional para Certificação de Competências de Jovens e Adultos – ENCCEJA.</br>

                    Coordenador do curso: Professora Juliana Lamas</p>

                    <a href="#"><p class="texto-curso"> Clique aqui e veja a grade deste Curso</p></a>

                </div>

                <div id="jogos-digitais"  class="tab-pane fade">

                    <h3 class="titulo-2">ENSINO MÉDIO COM HABILITAÇÃO TÉCNICA PROFISSIONAL EM PROGRAMAÇÃO DE JOGOS DIGITAIS</h3>

                    <p class="texto-curso">Nesta modalidade de ensino, baseada na Lei nº 13.415/17, o aluno cursará o Ensino Médio estruturado em conjunto com a formação de Técnico em Programação de Jogos Digitais, numa jornada de até 30 aulas semanais (até 6 aulas diárias), em cada uma das 3 séries. Ao final do curso, o aluno terá concluído o Ensino Médio e obterá, também, o diploma de Técnico em Programação de Jogos Digitais, com validade nacional, de acordo com o perfil profissional a seguir: É o profissional que compõe equipes multidisciplinares na construção dos jogos digitais. Projeta, desenvolve e implementa jogos digitais. Codifica programas, desenvolve e editora elementos sonoros e gráficos em duas e três dimensões; gerencia e presta suporte a jogos digitais. Planeja e desenvolve ações de marketing e divulgação. Seleciona recursos de trabalho, linguagens de programação, ferramentas e metodologias para o desenvolvimento de jogos digitais em diversas mídias, tais como: consoles, microcomputadores, dispositivos móveis e Internet.</p>

                    <h3 class="titulo-3">Eixo Tecnológico:</h3>

                    <p class="texto-curso">O mercado de trabalho do TÉCNICO EM MULTIMÍDIA é amplo, abrange diversas áreas da comunicação audiovisual, como cinema digital, TV interativa, vídeo e animação. Atua na concepção de roteiros, desenhos de produção, edição e efeitos especiais em empresas de comunicação – rádio e televisão – novas mídias e espaços alternativos de interação social, lazer e cultura. Poderá desenvolver trabalhos em portais de Internet, produtoras de multimídia, escritórios de criação publicitária e de comunicação, editoras de jornais e revistas on-line.</p>

                    <h3 class="titulo-3">Pré-Requisitos</h3>

                    <p class="texto-curso">Possuir o certificado de conclusão do Ensino Fundamental nas modalidades: regular ou Educação de Jovens e Adultos – EJA ou Exame Nacional para Certificação de Competências de Jovens e Adultos – ENCCEJA.</br>

                        Coordenador do curso: Professora Juliana Lamas</p>
                    <a href="#"><p class="texto-curso"> Clique aqui e veja a grade deste Curso</p></a>

                </div>

                <div id="marketing" class="tab-pane fade">

                    <h3 class="titulo-2">ENSINO MÉDIO COM HABILITAÇÃO PROFISSIONAL DE TÉCNICO EM MARKETING</h3>

                    <p class="texto-curso">Nesta modalidade de ensino, baseada na Lei nº 13.415/17, o aluno cursará o Ensino Médio estruturado em conjunto com a formação de Técnico em Marketing, numa jornada de até 30 aulas semanais (até 6 aulas diárias), em cada uma das 3 séries. Ao final do curso, o aluno terá concluído o Ensino Médio e obterá, também, o diploma de Técnico em Marketing, com validade nacional, de acordo com o perfil profissional a seguir: O TÉCNICO EM MARKETING é o profissional que colabora na elaboração do plano de marketing da empresa, de acordo com seu ramo ou porte, tendo a competência aliada ao domínio técnico e no planejamento e implementação de ações de vendas e ações de mercado. Executa tarefa de análise das vendas, preços e produtos. Operacionaliza as políticas de comunicação da empresa: fidelização de clientes, relação com fornecedores ou outras entidades. Operacionaliza políticas de apresentação dos produtos no ponto de venda. Executa o controle, estatísticas e operações de telemarketing. Participa na elaboração e na realização de estudos de mercado, interpreta e aplica a legislação da área.</p>

                    <h3 class="titulo-3">Eixo Tecnológico:</h3>

                    <p class="texto-curso"> GESTÃO E NEGÓCIOS</p>

                    <h3 class="titulo-3">Mercado de trabalho</h3>

                    <p class="texto-curso">Instituições públicas; privadas e do terceiro setor; comércio; empresas de consultoria e de forma autônoma.</br>

                    Coordenador do curso: Professora Juliana Lamas</p>

                    <a href="#"><p class="texto-curso"> Clique aqui e veja a grade deste Curso</p></a>

                </div>
                
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