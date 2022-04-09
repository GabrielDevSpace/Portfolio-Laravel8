<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Portfolio - Gabriel Pires</title>
    <link rel="icon" href="{{ url('img/favicon.png') }}">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/6adde2d540.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="{{asset('img\gp.jpg') }}" class="rounded-circle" alt="Gp" />
                <p></p>
                <span><small>Aloha <i class="em em-call_me_hand" aria-role="presentation" aria-label="CALL ME HAND"></i><br>Meu nome é <u>Gabriel Pires</u>, sou web developer. Bem Vindo(a) ao meu website pessoal!</small></span>
            </div>
            <div class="sidebar-icons">
                <ul class="list-social">
                    <li>
                        <a href="mailto:gabrielpirestj@hotmail.com">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/_devspace_">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/GabrielDevSpace">
                            <i class="fa-brands fa-github"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/devgabrielpires/">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://t.me/Gabriel_P29">
                            <i class="fa-brands fa-telegram"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="separador">
            <hr>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="{{ route('site.sobre') }}"><i class="fa fa-user"></i> Sobre</a>
                </li>
                <li>
                    <a href="{{ route('site.experiencia') }}"><i class="fa fa-list"></i> Experiências</a>
                </li>
                <li>
                    <a href="{{ route('site.portfolio') }}"><i class="fa fa-laptop-code"></i> Portfolio</a>
                </li>
                <li>
                    <a href="{{ route('site.contato') }}"><i class="fa fa-address-book"></i> Contato</a>
                </li>
                <li>
                    <a href="{{ route('site.projetos') }}"><i class="fa fa-coffee"></i> Projetos</a>
                </li>
            </ul>
        </nav>
        
    @yield('content')
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>