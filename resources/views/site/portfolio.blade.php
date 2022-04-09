@extends('site.master.layout')

@section('content')
            <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn backg-success">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Portfolio</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container py-1">
                    <div class="row">
                        <div class="col-lg-12 mx-auto">
                            <!-- Timeline -->
                            <ul class="timeline">
                                <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                    <div class="timeline-arrow"></div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="portfolio-main">
                                                <img src="{{asset('img\github.png') }}" width="150px" alt="Gp" />
                                            </div>
                                        </div>
                                        <div class="col-md-8" align="center">
                                            <div class="sidebar-header">
                                                <p></p>
                                                <small>Para os pequenos projetos, visite meu repositório no GitHub:
                                                <p>
                                                    <b><a href="https://github.com/GabrielDevSpace"><img src="https://avatars.githubusercontent.com/u/64210900?v=4" width="40px" class="rounded-circle" alt="Gp" /> https://github.com/GabrielDevSpace</a></b>
                                                </p>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                  <div class="timeline-arrow"></div>
                                  <small class="texto-gray-small">Desenvolvido em <b>2022</b></small>
                                  <p></p>
                                  <div class="row">
                                      <div class="col-md-4">
                                          <div class="portfolio-min">
                                            <div class="portfolio-min-logo">
                                              <h3 class="texto-dark"><b><img src="{{asset('img/favicon.png')}}" width="40px"> Portfolio</b></h3>
                                          </div>
                                          </div>
                                          <p></p>
                                          <small>
                                            <b class="texto-dark">Objetivo: </b>
                                            Surgiu primeiramente como um desafio particular e evoluiu com objetivo de organizar meus projetos em um único local.
                                            <div class="line-small"></div>
                                            <b class="texto-dark">Stack: </b>
                                            Utilizado <b class="texto-success">PHP</b> para o Back, <b class="texto-success">Bootstrap e JavaScript</b> para Front, <b class="texto-success">Laravel</b> como Framework, database em <b class="texto-success">MySql</b> e hospedagem <b class="texto-success">Hostinger</b>.                                           
                                            Em breve irei, consolidar todos os meus testes e estudos (APIs) na sessão <b class="texto-success"><i class="fa fa-coffee"></i><a href="{{ route('site.projetos') }}"> Projetos</a></b>.
                                            <div class="line-small"></div>
                                            <i class="fa fa-star texto-gold"></i> O código deste projeto está disponível em meu repositório: <a href="https://github.com/GabrielDevSpace/portfolio-Laravel8"><b class="texto-gold">portfolio-Laravel8</b></a>
                                            </small>
                                      </div>
                                      <div class="col-md-8">
                                          <div id="portfolio" class="carousel slide border-carousel" data-ride="carousel">
                                              <ol class="carousel-indicators">
                                                <li data-target="#portfolio" data-slide-to="0" class="active"></li>
                                                <li data-target="#portfolio" data-slide-to="1"></li>
                                                <li data-target="#portfolio" data-slide-to="2"></li>
                                              </ol>
                                              <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                  <img class="d-block w-100" src="{{asset('img/portfolio1.png')}}" alt="1 slide">
                                                </div>
                                                <div class="carousel-item">
                                                  <img class="d-block w-100" src="{{asset('img/portfolio2.png')}}" alt="2 slide">
                                                </div>
                                              </div>
                                              <a class="carousel-control-prev" href="#portfolio" role="button" data-slide="prev">
                                                  <span>
                                                      <i class="fa fa-chevron-circle-left texto-dark texto-h1"></i>
                                                  </span>
                                                <span class="sr-only">Previous</span>
                                              </a>
                                              <a class="carousel-control-next" href="#portfolio" role="button" data-slide="next">
                                                  <span>
                                                     <i class="fa fa-chevron-circle-right texto-dark texto-h1"></i>
                                                  </span>
                                                <span class="sr-only">Next</span>
                                              </a>
                                          </div>
                                      </div>
                                  </div>
                              </li>
                                <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                    <div class="timeline-arrow"></div>
                                    <small class="texto-gray-small">Desenvolvido em <b>2021</b></small>
                                    <p></p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="portfolio-min">
                                                <div class="portfolio-min-son">
                                                <h3 class="texto-dark"><b><i class="fa fa-check"></i> Dev Tasks</b></h3>
                                                </div>
                                            </div>
                                            <p></p>
                                            <small>
                                            <b class="texto-dark">Objetivo: </b>
                                            Baseado na metodologia kanban, o Dev Tasks foi criado com características únicas para controlar minhas demandas como gestor e ter visão geral das atividades da minha equipe.
                                            <div class="line-small"></div>
                                            <b class="texto-dark">Stack: </b>
                                            Utilizado <b class="texto-success">PHP</b> para o Back e <b class="texto-success">Bootstrap</b> para Front, database em <b class="texto-success">MySql</b> e hospedagem <b class="texto-success">Hostinger</b>.
                                            </small>
                                        </div>
                                        <div class="col-md-8">
                                            <div id="devtasks" class="carousel slide border-carousel" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                  <li data-target="#devtasks" data-slide-to="0" class="active"></li>
                                                  <li data-target="#devtasks" data-slide-to="1"></li>
                                                  <li data-target="#devtasks" data-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                  <div class="carousel-item active">
                                                    <img class="d-block w-100" src="{{asset('img/task1.png')}}" alt="First slide">
                                                  </div>
                                                  <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{asset('img/task2.png')}}" alt="Second slide">
                                                  </div>
                                                  <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{asset('img/task3.png')}}" alt="Third slide">
                                                  </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#devtasks" role="button" data-slide="prev">
                                                    <span>
                                                        <i class="fa fa-chevron-circle-left texto-dark texto-h1"></i>
                                                    </span>
                                                  <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#devtasks" role="button" data-slide="next">
                                                    <span>
                                                       <i class="fa fa-chevron-circle-right texto-dark texto-h1"></i>
                                                    </span>
                                                  <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                 
                                <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                    <div class="timeline-arrow"></div>
                                    <small class="texto-gray-small">Desenvolvido em <b>2020</b></small>
                                    <p></p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="portfolio-min">
                                                <div class="portfolio-min-son">
                                                    <h3 class="texto-dark"><i class="fa fa-lock"></i> <b class="texto-red">TOP SECRET</b></h3>
                                                </div>
                                            </div>
                                            <p></p>
                                            <small>
                                            <b class="texto-dark">Atenção: </b>
                                            Este é um projeto grande e privado, mas ficarei feliz em apresentá-lo pessoalmente.
                                            </small>
                                        </div>
                                        <div class="col-md-8">
                                            <div id="TopSecret" class="carousel slide border-carousel" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                  <li data-target="#TopSecret" data-slide-to="0" class="active"></li>
                                                  <li data-target="#TopSecret" data-slide-to="1"></li>
                                                  <li data-target="#TopSecret" data-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                  <div class="carousel-item active">
                                                    <img class="d-block w-100" src="{{asset('img/notfound.png')}}" alt="1 slide">
                                                  </div>
                                                  <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{asset('img/notfound.png')}}" alt="2 slide">
                                                  </div>
                                                  <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{asset('img/notfound.png')}}" alt="3 slide">
                                                  </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#TopSecret" role="button" data-slide="prev">
                                                    <span>
                                                        <i class="fa fa-chevron-circle-left texto-dark texto-h1"></i>
                                                    </span>
                                                  <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#TopSecret" role="button" data-slide="next">
                                                    <span>
                                                       <i class="fa fa-chevron-circle-right texto-dark texto-h1"></i>
                                                    </span>
                                                  <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                    <div class="timeline-arrow"></div>
                                    <small class="texto-gray-small">Desenvolvido em <b>2019</b></small>
                                    <p></p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="portfolio-min">
                                                <div class="portfolio-min-son">
                                                    <img src="{{asset('img\webtvlogo.png') }}" width="100px" alt="Logo">
                                                </div>
                                            </div>
                                            <p></p>
                                            <small>
                                                <b class="texto-dark">Objetivo: </b>
                                                As listas Iptv's, normalmente necessitam para sua reprodução: apps, players ou dispositivos de terceiros. Com isso criei um player web onde irá ler as listas.m3u8 e realizar o tratamento e exibição dos Canais & VOD's, eliminando a necessidade de apps especificos e abrindo portas para qualquer dispositivo web.
                                                <div class="line-small"></div>
                                                <b class="texto-dark">Stack: </b>
                                                Utilizado <b class="texto-success">PHP</b> para o Back e <b class="texto-success">Bootstrap, Javascript</b> para Front, database em <b class="texto-success">MySql</b> e hospedagem <b class="texto-success">LocaWeb</b>, <b class="texto-dark"><i class="fa fa-star"></i> </b>Lib <b class="texto-success">Video.js</b> para o player.

                                            </small>
                                        </div>
                                        <div class="col-md-8">
                                            <div id="WebTv" class="carousel slide border-carousel" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                  <li data-target="#WebTv" data-slide-to="0" class="active"></li>
                                                  <li data-target="#WebTv" data-slide-to="1"></li>
                                                  <li data-target="#WebTv" data-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                  <div class="carousel-item active">
                                                    <img class="d-block w-100" src="{{asset('img/webtv1.png')}}" alt="1 slide">
                                                  </div>
                                                  <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{asset('img/webtv2.png')}}" alt="2 slide">
                                                  </div>
                                                  <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{asset('img/webtv3.png')}}" alt="3 slide">
                                                  </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#WebTv" role="button" data-slide="prev">
                                                    <span>
                                                        <i class="fa fa-chevron-circle-left texto-dark texto-h1"></i>
                                                    </span>
                                                  <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#WebTv" role="button" data-slide="next">
                                                    <span>
                                                       <i class="fa fa-chevron-circle-right texto-dark texto-h1"></i>
                                                    </span>
                                                  <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                    <div class="timeline-arrow"></div>
                                    <small class="texto-gray-small">Desenvolvido em <b>2018</b></small>
                                    <p></p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="portfolio-min">
                                                <div class="portfolio-min-son">
                                                    <h4 class="texto-dark"><b><i class="fa fa-book"></i></b> WIKI <b class="texto-primary">BRASILIA</b></h4>
                                                </div>
                                            </div>
                                            <p></p>
                                            <small>
                                            <b class="texto-dark">Objetivo: </b>
                                            Mapear e organizar o conhecimento sistêmico e funcional de cada setor e colaborador. Nos possibilitou otimizar o tempo de aprendizado de novos colaboradores e o estabelecimento de normas e processos internos para cada setor.
                                            <div class="line-small"></div>
                                            <b class="texto-dark">Stack: </b>
                                            Utilizado <b class="texto-success">PHP</b> para o Back e <b class="texto-success">Bootstrap</b> para Front, database em <b class="texto-success">PostgreSQL</b> e hospedagem em <b class="texto-success">Servidor Local</b>.
                                            </small>
                                        </div>
                                        <div class="col-md-8">
                                            <div id="Wiki" class="carousel slide border-carousel" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                  <li data-target="#Wiki" data-slide-to="0" class="active"></li>
                                                  <li data-target="#Wiki" data-slide-to="1"></li>
                                                  <li data-target="#Wiki" data-slide-to="2"></li>
                                                  <li data-target="#Wiki" data-slide-to="3"></li>
                                                  <li data-target="#Wiki" data-slide-to="4"></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                  <div class="carousel-item active">
                                                    <img class="d-block w-100" src="{{asset('img/wiki1.png')}}" alt="1 slide">
                                                  </div>
                                                  <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{asset('img/wiki2.png')}}" alt="2 slide">
                                                  </div>
                                                  <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{asset('img/wiki3.png')}}" alt="3 slide">
                                                  </div>
                                                  <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{asset('img/wiki4.png')}}" alt="4 slide">
                                                  </div>
                                                  <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{asset('img/wiki5.png')}}" alt="5 slide">
                                                  </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#Wiki" role="button" data-slide="prev">
                                                    <span>
                                                        <i class="fa fa-chevron-circle-left texto-dark texto-h1"></i>
                                                    </span>
                                                  <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#Wiki" role="button" data-slide="next">
                                                    <span>
                                                       <i class="fa fa-chevron-circle-right texto-dark texto-h1"></i>
                                                    </span>
                                                  <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                                    <div class="timeline-arrow"></div>
                                    <small class="texto-gray-small">Desenvolvido em <b>2015</b></small>
                                    <p></p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="portfolio-min">
                                                <div class="portfolio-min-son">
                                                    <img class="" src="{{asset('img\cqrlogo.png') }}" width="80px" alt="Logo"><br>
                                                <p class="texto-gray-small"><i class="texto-gold fa fa-star"></i> Sem estilo na época, porém INOVADOR. <i class="texto-gold fa fa-star"></i></p>
                                                </div>
                                            </div>
                                            <p></p>
                                            <small>
                                            <b class="texto-dark">Objetivo: </b>
                                            No setor de Telecomunicações e TV a cabo, tivemos um aumento expressivo de instalações de novos clientes, com isso se viu necessário um volume maior de vistorias presenciais de qualidade. Para suprir essa necessidade desenvolvi um App e um sistema de registro e armazenamento de fotos dos serviços realizados por técnicos instaladores. Tivemos ganhos não somente na qualidade, mas no combate de processos consumeristas e combate direto a fraudes.
                                            <div class="line-small"></div>
                                            <b class="texto-dark">Stack: </b>
                                            <b class="texto-success">PHP</b> para o Back e <b class="texto-success">HTML & CSS</b> para Front, database em <b class="texto-success">MySql</b> e hospedagem em <b class="texto-success">Servidor Local</b>, para o App utilizei <b class="texto-success">Java</b> e </b><b class="texto-success">Cordova</b>.
                                            </small>
                                        </div>
                                        <div class="col-md-8">
                                            <div id="Cqr" class="carousel slide border-carousel" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                  <li data-target="#Cqr" data-slide-to="0" class="active"></li>
                                                  <li data-target="#Cqr" data-slide-to="1"></li>
                                                  <li data-target="#Cqr" data-slide-to="2"></li>
                                                  <li data-target="#Cqr" data-slide-to="3"></li>
                                                  <li data-target="#Cqr" data-slide-to="4"></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                  <div class="carousel-item active">
                                                    <img class="d-block w-100" src="{{asset('img/cqr1.png')}}" alt="1 slide">
                                                  </div>
                                                  <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{asset('img/cqr2.png')}}" alt="2 slide">
                                                  </div>
                                                  <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{asset('img/cqr3.png')}}" alt="3 slide">
                                                  </div>
                                                  <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{asset('img/cqr4.png')}}" alt="4 slide">
                                                  </div>
                                                  <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{asset('img/cqr5.png')}}" alt="5 slide">
                                                  </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#Cqr" role="button" data-slide="prev">
                                                    <span>
                                                        <i class="fa fa-chevron-circle-left texto-dark texto-h1"></i>
                                                    </span>
                                                  <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#Cqr" role="button" data-slide="next">
                                                    <span>
                                                       <i class="fa fa-chevron-circle-right texto-dark texto-h1"></i>
                                                    </span>
                                                  <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                               
                            </ul><!-- End -->
                        </div>
                    </div>
                </div>
@endsection