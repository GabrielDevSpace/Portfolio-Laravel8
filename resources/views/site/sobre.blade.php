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
                                <a class="nav-link" href="#">Sobre</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container sobre">
                <div class="row">
                  <div class="col-sm-7">
                    <h4 class="texto-dark"><b>Gabriel Pires</b></h4>
                    <h6 class="texto-secondary">Desenvolvedor Full Stack</h6>
                    <span class="texto-secondary">
                        <small>
                            Experiência com Desenvolvimento WEB desde 2013, atuando como Idealizador, Desenvolvedor e Gestor em projetos pessoais e profissionais com as tecnologias:<i> <b>PHP</b>, <b>Laravel</b>, <b>Tailwind</b>, <b>Bootstrap</b>, <b>HTML</b>, <b>JS</b>, <b>MYSQL</b>, <b>PostgreSQL</b>, <b>Cordova</b>, <b>Xamarin</b>, <b>Versionamento GIT - Github</b>, </i> dentre outras tecnologias.
                            <p></p>
                            Atualmente me estudando  <i><b>Java</b>, <b>Angular</b>.</i>
                            <p></p>
                            Sou um desenvolvedor com <b>perfil generalista</b>, o que me permite atuar em diferentes áreas e projetos. 
                            <p></p>
                            Estou atuando como GESTOR de T.I, porem <b class="backg-success"> <i class="texto-white"> #OPENTOWORK</i></b> na area de desenvolvimento.
                        </small>
                    </span>
                    <p></p>
                    <a class="btn btn-secondary me-2 mb-3" href="portfolio"><small><i class="fa fa-laptop-code"></i> Ver Portfolio</small></a>
                    <a class="btn btn-dark me-2 mb-3" href="#"><small><i class="fa fa-file-alt"></i> Ver Currículo</small></a>
                  </div>
                  <div class="col-sm-5">
                    <img src="{{asset('img\gppc.jpg') }}" width="100%" alt="Minha Foto">
                  </div>
                </div>
            </div>
            
            <div class="line"></div>
            <div class="stack">
                <div class="row d-flex main-stack"  align="center">
                    <div class="col-md-4">
                        <div class='p-3 mb-2'>
                        <h3 class="texto-dark"><b><i class="fa fa-list"></i> Main Stack</b></h3>
                        <small>Minhas principais stacks de desenvolvimento.</small>
                        </div>
                        <div class="row">
                            <div class="col-md-12 bottom-pad">   
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg" width="30px" />
                                +
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain-wordmark.svg" width="30px" />
                            </div>
                       
                            
                            <div class="col-md-12 bottom-pad">   
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original-wordmark.svg" width="30px" />
                                +
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/django/django-plain-wordmark.svg" width="30px" />
                            </div>
               
                            
                            <div class="col-md-12 bottom-pad">   
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-plain.svg"  width="30px" />
                                +
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/express/express-original-wordmark.svg" width="30px" />
                            </div>
  
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class='p-3 mb-2'>
                            <h3 class="texto-dark"><b><i class="fa fa-plus"></i> Plus</b></h3>
                            <small>Tecnologias que tenho contato ou alguma experiência significativa.</small>
                        </div>
                        <div class="row d-flex" align="center">
                            <div class="col-md-4">
                                <h6 class="texto-dark bottom-pad-progress"><b>Basics</b></h6>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original-wordmark.svg" width="40"/>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original-wordmark.svg" width="40" />  
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" width="40" />
                            </div>
                            <div class="col-md-4">
                                <h6 class="texto-dark bottom-pad-progress"><b>Databases</b></h6>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original-wordmark.svg" width="40"/>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original-wordmark.svg" width="40" />  
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/firebase/firebase-plain-wordmark.svg" width="40" />
                            </div>
                            <div class="col-md-4">
                                <h6 class="texto-dark bottom-pad-progress"><b>Outros</b></h6>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original-wordmark.svg" width="40"/>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original-wordmark.svg" width="40" />  
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/pandas/pandas-original-wordmark.svg" width="40" />
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/selenium/selenium-original.svg" width="40" />
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/numpy/numpy-original-wordmark.svg" width="40"/>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original-wordmark.svg" width="40"/>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original-wordmark.svg" width="40"/>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/android/android-original-wordmark.svg" width="40"/>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/debian/debian-original-wordmark.svg" width="40"/>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/filezilla/filezilla-plain.svg" width="40"/>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/heroku/heroku-original-wordmark.svg" width="40"/>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original-wordmark.svg" width="40"/>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linkedin/linkedin-original-wordmark.svg" width="40"/>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linux/linux-original.svg" width="40"/>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/npm/npm-original-wordmark.svg" width="40"/>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/opensuse/opensuse-original-wordmark.svg" width="40"/>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/photoshop/photoshop-plain.svg" width="40"/>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/rails/rails-plain-wordmark.svg" width="40"/>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sqlite/sqlite-original-wordmark.svg" width="40"/>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/ubuntu/ubuntu-plain-wordmark.svg" width="40"/>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vagrant/vagrant-original-wordmark.svg" width="40"/>
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/xamarin/xamarin-original-wordmark.svg" width="40"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection