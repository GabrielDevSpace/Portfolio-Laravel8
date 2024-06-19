@extends('site.master.layout')

@section('content')
<div id="content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn backg-success">
                <i class="fas fa-align-left"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">NASA Images - API</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="projetos-header pb-4" align="center">
        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e5/NASA_logo.svg" alt="NASA Logo" style="width: 100px; height: auto;">
        <div>
            <span class="texto-dark">
                <h3>NASA Images - API</h3>
                <br>
                <h4><i class="fab fa-youtube youtube-icon" style="color: red;"></i> Media Player</h4>
            </span>
        </div>
    </div>
        
        @if (isset($error))
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @elseif (isset($videoLinks) && !empty($videoLinks))
            <div class="video-links">
                @foreach ($videoLinks as $videoLink)
                    <div class="video-item">
                        <video controls style="max-width: 100%; min-width: 100%;">
                            <source src="{{ $videoLink }}" type="video/mp4">
                            Seu navegador não suporta o elemento de vídeo.
                        </video>
                    </div>
                @endforeach
            </div>
        @else
            <p>Nenhum vídeo disponível.</p>
        @endif
    </div>
@endsection
