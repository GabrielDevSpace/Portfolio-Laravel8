@extends('site.master.layout')

@section('content')
<div id="content">

    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-1">
        <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn backg-success">
                <i class="fas fa-align-left"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('nasa-pod.index') }}">NASA POD - API</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="projetos-header " align="center">
        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e5/NASA_logo.svg" alt="NASA Logo" style="width: 100px; height: auto;">
        <div>
            <span class="texto-dark">
                <h4>Picture Of the Day</h4>
                <p style="font-size: 14px; color:dimgrey">NASA APOD - Todo dia uma imagem ou video diferente <br>do nosso fascinante universo, e uma breve explicação escrita por um astrônomo profissional.</p>
            </span>
        </div>
    </div>

    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-between">
                <a href="{{ route('nasa-pod.previousDate', ['date' => $date]) }}" class="btn btn-primary rounded-pill" id="previous-button">Anterior</a>
                <a href="{{ route('nasa-pod.nextDate', ['date' => $date]) }}" class="btn btn-primary rounded-pill" id="next-button">Próximo</a>
            </div>
            @if (isset($apod['code']) && isset($apod['msg']))
            <div class="col-md-12">
                <div class="my-4 alert alert-danger" align="center">
                    Api Error: {{ $apod['msg'] }}
                </div>
            </div>
            @elseif ($apod['media_type'] === 'image')
            <div class="col-md-4">
                <div class="row p-2 rounded mb-2 mt-2">
                    <div class="col-md-12">
                        <a href="{{ $apod['hdurl'] }}" target="_blank" class="image-link">
                            <div class="image-preview-container" style="position: relative;">
                                <img src="{{ $apod['url'] }}" alt="{{ $apod['title'] }}" style="width: 100%; height: 250px; object-fit: cover;">
                                <i class="fas fa-search search-icon" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 48px; color: white;"></i>
                            </div>
                        </a>
                    </div>
                </div>
                @elseif ($apod['media_type'] === 'video')
                <div class="col-md-4">
                    <div class="row p-2 rounded mb-2 mt-2">
                        <div class="video-preview-container" style="display: flex; justify-content: center; align-items: center; width: 100%; height: 250px;">
                            <iframe src="{{ $apod['url'] }}" frameborder="0" allowfullscreen style="width: 100%; height: 100%;"></iframe>
                        </div>
                    </div>
                    @else
                    <div class="row p-2 rounded mb-2 mt-2">
                        <div class="col-md-12">
                            <div class="text-red-500">Tipo de mídia não suportado.</div>
                        </div>
                    </div>
                    @endif
                </div>
                @if (isset($apod['code']) && isset($apod['msg']))
                @else
                <div class="col-md-8">
                    <div class="row p-2 rounded mb-2 mt-2">
                        <div class="col-md-12">
                            <h5>{{ $apod['title'] }}</h5>
                            <p><small><b>Postagem: </b>{{ isset($apod['date']) ? \Carbon\Carbon::parse($apod['date'])->format('d/m/Y') : 'Sem Data de Postagem' }}</small></p>
                            <small class="text-secondary">{{ $apod['explanation'] }}</small>
                            <div class="keywords pt-2">
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>

    </div>
    @endsection