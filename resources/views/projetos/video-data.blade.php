@extends('site.master.layout')

@section('content')
    <div id="content">
        <h1>Vídeos Disponíveis</h1>
        
        @if (isset($error))
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @elseif (isset($videoLinks) && !empty($videoLinks))
            <div class="video-links">
                @foreach ($videoLinks as $videoLink)
                    <div class="video-item">
                        <video controls style="max-width: 100%;">
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
