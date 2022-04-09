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
                                <a class="nav-link" href="#">Experiências</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div align="center">
                <h3 class="texto-dark"><b><i class="fa fa-film"></i> Minha Trajetória</b></h3>
            </div>
            <div class="line"></div>
            <div class="container">
                <div class="main-timeline">
                                        <!-- start experience section-->
                                        <div class="timeline">
                                            <div class="icon"></div>
                                            <div class="date-content">
                                                <div class="date-outer">
                                                    <span class="date">
                                                            <span class="month">Atual</span>
                                                    <span class="year">2021</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="timeline-content">
                                                <h5 class="title">Gerente de T.I</h5>
                                                <small class="texto-success"><b>Moveis Brasilia - Londrina PR</b></small>
                                                <p class="description">
                                                    <small>Gestão da Equipe de T.I, Suporte N1 - N2, Compras e aquisições de tecnologia, Integrações de sistemas, Administração de sistemas, Produção de relatórios web, Desenvolvimento de sistemas internos nas linguagens: <b>PHP , Python e Banco de Dados.</b> Em paralelo nas horas vagas estou ativo em projetos pessoais. <a href="{{ route('site.portfolio') }}" class="btn btn-secondary "><small><i class="fa fa-laptop-code"></i> Ver portfolio</small></a></small>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- end experience section-->

                                        <!-- start experience section-->
                                        <div class="timeline">
                                            <div class="icon"></div>
                                            <div class="date-content">
                                                <div class="date-outer">
                                                    <span class="date">
                                                            <span class="month">3 Anos</span>
                                                    <span class="year">2018</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="timeline-content">
                                                <h5 class="title">Analista de T.I</h5>
                                                <small class="texto-success"><b>Moveis Brasilia - Londrina PR</b></small>
                                                <p class="description">
                                                    <small>Análise de requisitos de sistema, Informatização de setores, Informatização de processos Internos, Implantação de novas tecnologias, Servidores de hospedagem, Suporte N1, N2 e Desenvolvedor web nas linguagens: <b>PHP, HTML, JAVASCRIPT, MYSQL, PSQL, FIREBASE...outros.</b></small>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- end experience section-->
                
                                        <!-- start experience section-->
                                        <div class="timeline">
                                            <div class="icon"></div>
                                            <div class="date-content">
                                                <div class="date-outer">
                                                    <span class="date">
                                                            <span class="month">3 Anos</span>
                                                    <span class="year">2014</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="timeline-content">
                                                <h5 class="title">Controle de Qualidade</h5>
                                                <small class="texto-success"><b>Claro S/A - Londrina PR</b></small>
                                                <p class="description">
                                                    <small>Auditorias de qualidade, reuniões de gerenciamento e planejamento, criação e apresentação dos relatórios de índices ofensores e criação de estratégias.
                                                        Como demanda ADICIONAL, Aqui surgiu meu primeiro GRANDE projeto de desenvolvimento web: PORTAL interno de gerenciamento da qualidade em <b>PHP / MYSQL</b> e 3 Apps em <b>Java + Cordova</b> (App Monitoria, Auditoria de O's, CQR Qualidade).</small>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- end experience section-->
                
                                        <!-- start experience section-->
                                        <div class="timeline">
                                            <div class="icon"></div>
                                            <div class="date-content">
                                                <div class="date-outer">
                                                    <span class="date">
                                                            <span class="month">1 Ano</span>
                                                    <span class="year">2013</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="timeline-content">
                                                <h5 class="title">Auxiliar Técnico</h5>
                                                <small class="texto-success"><b>Claro S/A - Londrina PR</b></small>
                                                <p class="description">
                                                    <small>Próximo a me casar, entrei em uma multinacional onde atuava com auditorias de serviços terceirizados. Ministrava reuniões com empresas terceirizadas para orientar e publicar relatórios dos índices ofensores. Aqui comecei minha experiência em <b>relatórios</b> e demandas organizacionais.</small>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- end experience section-->
                
                                        <!-- start experience section-->
                                        <div class="timeline">
                                            <div class="icon"></div>
                                            <div class="date-content">
                                                <div class="date-outer">
                                                    <span class="date">
                                                            <span class="month">1 Ano</span>
                                                    <span class="year">2011</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="timeline-content">
                                                <h5 class="title">Eletricista Industrial</h5>
                                                <small class="texto-success"><b>Rondopar - Londrina PR</b></small>
                                                <p class="description">
                                                    <small>Nos mudamos do estado MT para o PR, comecei a trabalhar como eletricista para ajudar com os novos custos de vida que tivemos. Em paralelo comecei um curso de <b>'segurança da informação'</b> que me abriu a mente para os <b>protocolos http</b> e demais temas web.</small>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- end experience section-->
                
                                        <!-- start experience section-->
                                        <div class="timeline">
                                            <div class="icon"></div>
                                            <div class="date-content">
                                                <div class="date-outer">
                                                    <span class="date">
                                                            <span class="month">1 Ano </span>
                                                    <span class="year">2010</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="timeline-content">
                                                <h5 class="title">Técnico de Informática</h5>
                                                <small class="texto-success"><b>Gol Informática - Sinop MT</b></small>
                                                <p class="description">
                                                    <small>Minha primeira experiência profissional na área de informática; formatações, configurações de sistemas Windows, Linux e meu primeiro contato com pequenos trechos de códigos de um sistema interno em <b>JAVA</b>.</small>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- end experience section-->

                                        <!-- start experience section-->
                                        <div class="timeline">
                                            <div class="icon"></div>
                                            <div class="date-content">
                                                <div class="date-outer">
                                                    <span class="date">
                                                            <span class="month">Inicio</span>
                                                    <span class="year">2009</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="timeline-content">
                                                <h5 class="title">Paixão Tech - Gênesis <i class="em em-laughing" aria-role="presentation" aria-label="SMILING FACE WITH OPEN MOUTH AND TIGHTLY-CLOSED EYES"></i></h5>
                                                <small class="texto-success"><b>Ensino Médio- Sinop MT</b></small>
                                                <p class="description">
                                                    <small>Nessa época, concluindo o ensino médio eu já estava decidido a trilhar o caminho tech. Iniciei um curso na área de informática avançada e comecei a busca por conhecimento em programação. Inicialmente a única fonte de informação era a biblioteca pública da cidade, tive um contato inicial com <b>Delphi 5</b>.</small>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- end experience section-->
                
                                    </div>
                </div>
                
@endsection