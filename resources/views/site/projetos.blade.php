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
                                <a class="nav-link" href="#">Projetos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container-fluid">
                <div class="row py-4">
                    
                    <div class="col-md-3 py-2 link-projetos">
                    <a target="_BLANK" href="{{'/coinapi'}}">
                    <h6 class="texto-dark"><i class="fa fa-btc texto-gold"></i> CoinAPI</h6>
                    <small class="texto-secondary">
                        API para listar a cotação das 1000 principais cripto-moedas do mercado e API secundaria para obter a taxa de câmbio USD | BRL.
                    </small>                    
                    </a>
                    </div>

                    <div class="col-md-3 py-2 link-projetos">
                    <i class="fa fa-lock login-fa" title="Login Exigido!"></i>
                    <a target="_BLANK" href="https://developerspace.com.br/projetos_antigos/kanban">
                    <h6 class="texto-dark"><i class="fa fa-tasks text-warning"></i> Tasks</h6>
                    <small class="texto-secondary">
                    Tasks é um projeto privado para controlar minhas demandas como gestor e ter uma visão geral das atividades da minha equipe.
                    </small>                    
                    </a>
                    </div>

                    <div class="col-md-3 py-2 link-projetos">
                    <i class="fa fa-lock login-fa" title="Login Exigido!"></i>
                    <a target="_BLANK" href="https://developerspace.com.br/projetos_antigos/webtv">
                    <h6 class="texto-dark"><i class="fa fa-television text-primary"></i> WebTv </h6>
                    <small class="texto-secondary">
                    Player web de listas IPTV, realiza o tratamento e exibição dos Canais & VOD's, eliminando a necessidade de apps especificos.
                    </small>                    
                    </a>
                    </div>

                    <div class="col-md-3 py-2 link-projetos">
                        <i class="fa fa-lock login-fa" title="Login Exigido!"></i>
                        <a target="_BLANK" href="http://tasks.developerspace.com.br/">
                        <h6 class="texto-dark"><i class="fa fa-taks text-warning"></i> New-Tasks </h6>
                        <small class="texto-secondary">
                        Tasks remodelado e otimizado com framework laravel, controle de demandas e tarefas de equipe.
                        </small>                    
                        </a>
                    </div>

                    <div class="line"></div>

                </div>
            </div>
           
@endsection