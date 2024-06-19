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
        <h4 class="texto-dark"> <i class="fa fa-earth texto-gray"></i> NASA Images - API</h4>
        <div>
            <span class="texto-dark">
                API para encontrar imagens e vídeos no acervo da NASA através da pesquisa de assuntos e tópicos relacionados.
                <br>
            </span>
        </div>
    </div>
    <form action="{{ route('nasaimages.search') }}" method="GET">
        <div class="form-row">
            <div class="col-md-3">
                <input type="text" name="q" class="form-control" placeholder="Buscar por Título" value="{{ request()->input('q') }}">
            </div>
            <div class="col-md-3">
                <input type="number" name="year_start" class="form-control" placeholder="Ano Publicado" pattern="\d{4}" title="Informe um ano válido (YYYY)" value="{{ request()->input('year_start') }}">
            </div>
            <div class="col-md-3">
                <input type="text" name="keywords" class="form-control" placeholder="Palavras-chave, separadas por vírgula" value="{{ request()->input('keywords') }}">
            </div>
            <div class="col-md-3">
                <select name="media_type" class="form-control">
                    <option value="">Tipo de mídia</option>
                    <option value="image" {{ request()->input('media_type') == 'image' ? 'selected' : '' }}>Imagem</option>
                    <option value="video" {{ request()->input('media_type') == 'video' ? 'selected' : '' }}>Vídeo</option>
                    <option value="audio" {{ request()->input('media_type') == 'audio' ? 'selected' : '' }}>Áudio</option>
                </select>
            </div>
        </div>
        <div class="form-row mt-3">
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </div>
    </form>

    <div class="pt-4">
        @if (isset($error))
        <div class="alert alert-danger">
            {{ $error }}
        </div>
        @elseif (isset($results['collection']['items']) && !empty($results['collection']['items']))
        <div class="results">
            @foreach ($results['collection']['items'] as $item)
            <div class="row p-2">
                <div class="col-md-3">
                    @if ($item['data'][0]['media_type'] == 'image' && isset($item['links'][0]['href']))
                    <img src="{{ $item['links'][0]['href'] }}" alt="Imagem" style="width: 100%; height: 250px; object-fit: cover;">
                    @elseif ($item['data'][0]['media_type'] == 'video')
                    @foreach ($item['links'] as $link)
                    @if ($link['rel'] == 'preview' && $link['render'] == 'image')
                    <img src="{{ $link['href'] }}" alt="Vídeo" style="width: 100%; height: 250px; object-fit: cover;">
                    @endif
                    @endforeach
                    <p><a href="{{ route('fetch.video.data', ['url' => $item['href']]) }}" class="fetch-video-data" target="_blank">Assistir ao vídeo</a></p>
                    @endif
                </div>
                <div class="col-md-9">
                    <h5>{{ $item['data'][0]['title'] ?? 'Sem título' }}</h5>
                    <p>{{ \Illuminate\Support\Str::limit($item['data'][0]['description'] ?? 'Sem descrição', 500) }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="pagination-links mt-4">
            @if ($pagination['prev'])
                <a href="{{ $pagination['base_url'] . $pagination['prev'] }}" class="btn btn-primary">Anterior</a>
            @endif
            <span class="mx-2">Página {{ $pagination['current'] }}</span>
            <a href="{{ $pagination['base_url'] . $pagination['next'] }}" class="btn btn-primary">Próxima</a>
        </div>

        @else
        <p>Nenhum resultado encontrado.</p>
        @endif
    </div>
</div>
@endsection
