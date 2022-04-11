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
                                <a class="nav-link" href="#">CoinApi</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="projetos-header">
                <h4 class="texto-dark"> <i class="fa fa-btc texto-gold"></i>  CoinApi <i class="fa fa-btc texto-gold"></i></h4>
                <div>
                    <span class="texto-dark">
                    API para acompanhar a cotação das 1000 principais cripto-moedas do mercado.
                    <br>
                    
                    <div class="row">
                        <div class="col-md-12 pb-4" align="center">
                            <small class="texto-dark">Foram utilizadas 2 API's para compor os preços:</small>   
                        </div>
                        <div class="col-md-6 d-flex justify-content-center">
                            <small>
                                <b class="texto-dark">COINCAP:</b> Retorna a cotação das cripto-moedas.
                                <ul class="list-unstyled">
                                    <li>Documentação oficial: <b><a class="texto-success" href="https://docs.coincap.io">https://docs.coincap.io</a></b></li>
                                    <li>Créditos ao Package de: <b><a class="texto-success" href="https://github.com/wisdom-diala/cryptocap-pkg"><i class="fa fa-github"></i> wisdom-diala</a></b></li>
                                </ul>
                            </small>
                        </div> 
                        <div class="col-md-6 d-flex justify-content-center">
                            <small>
                                <b class="texto-dark">CURRENCYLAYER:</b> Retorna a taxa de câmbio USD|BRL.
                                <ul class="list-unstyled">
                                    <li>Documentação oficial: <b><a class="texto-success" href="https://currencylayer.com/documentation">https://currencylayer.com</a></b></li>
                                    <li>API sem pacotes adicionais.</li>
                                </ul>
                            </small>
                        </div>
                    </div>
                    </span>
                </div>
            </div>
            <div class="line"></div>
            <table id="tabelaCoinApi" class="table table-hover table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr class="texto-dark-small">
                        <th class="th-sm" >Rank</th>
                        <th class="th-sm" >Cripto</th>
                        <th class="th-sm" >Symbol</th>
                        <th class="th-sm" >Variação(24Hr)</th>
                        <th class="th-sm" >USD</th>
                        <th class="th-sm" >BRL</th>
                        <th class="th-sm" >Supply</th>
                        <th class="th-sm" >MarketCap</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datas->data as $data)
                    @php
                    # Função cor do Texto - Criar Helper
                    if ($data->changePercent24Hr <= 0){
                        $color = 'texto-red';
                    }else{
                        $color = 'texto-success';
                    }

                    # Função casas decimais - Criar Helper
                    if ($data->priceUsd <= 0.01){
                        $casas_decimais = '10';
                    }else{
                        $casas_decimais = '2';
                    }
                    @endphp
                    <tr class="texto-dark-small">
                        <td>{{$data->rank}}</td>
                        <td>
                            <a target="_BLANK" href="http://www.google.com/search?q=coinmarketcap+{{$data->name}}" title="Pesquisar em CoinMarketCap">
                                <i class="fa fa-globe texto-success"></i> {{$data->name}}
                            </a>
                        </td>
                        <td>{{$data->symbol}}</td>
                        <td><span class="{{ $color }}">{{number_format($data->changePercent24Hr, 2)}}%</span></td>
                        <td>${{number_format($data->priceUsd, $casas_decimais)}}</td>
                        <td>R${{number_format($data->priceUsd*$newsData->quotes->USDBRL, $casas_decimais)}}</td>
                        <td>{{number_format($data->supply, 2)}}</td>
                        <td>${{number_format($data->marketCapUsd, 2)}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection