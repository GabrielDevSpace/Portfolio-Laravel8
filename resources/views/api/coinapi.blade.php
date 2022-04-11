
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
                                <a class="nav-link" href="#">Contato</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div align='center'>
                <h4 class="texto-dark"> CoinApi </h4>
            </div>
            <table id="tabelaCoinApi" class="table table-hover table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr class="texto-dark-small">
                        <th class="th-sm" >Rank</th>
                        <th class="th-sm" >Cripto</th>
                        <th class="th-sm" >Symbol</th>
                        <th class="th-sm" >Variação(24Hr)</th>
                        <th class="th-sm" >USD</th>
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
                                <i class="fa fa-globe text-primary"></i> {{$data->name}}
                            </a>
                        </td>
                        <td>{{$data->symbol}}</td>
                        <td><span class="{{ $color }}">{{number_format($data->changePercent24Hr, 2)}}%</span></td>
                        <td>${{number_format($data->priceUsd, $casas_decimais)}}</td>
                        <td>{{number_format($data->supply, 2)}}</td>
                        <td>${{number_format($data->marketCapUsd, 2)}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection




