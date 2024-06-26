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
                <h4>NASA Images - API</h4>
                <p style="font-size: 14px; color:dimgrey">API para acessar imagens e vídeos do acervo da NASA, relacionados a diversos assuntos e tópicos.</p>
            </span>
        </div>
    </div>
    <form id="searchForm" action="{{ route('nasaimages.search') }}" method="GET" onsubmit="return filterEmptyFields()">
        <div class="form-row">
            <div class="col-md-3">
                <input type="text" name="q" class="form-control" placeholder="Buscar por Título" value="{{ request()->input('q') }}">
            </div>
            <div class="col-md-3">
                <input type="text" name="description" class="form-control" placeholder="Buscar por Descrição" value="{{ request()->input('description') }}">
            </div>
            <div class="col-md-2">
                <input type="number" name="year_start" class="form-control" placeholder="Ano Post." pattern="\d{4}" title="Informe um ano válido (YYYY)" value="{{ request()->input('year_start') }}">
            </div>
            <div class="col-md-3">
                <input type="text" id="keywordsInput" name="keywords" class="form-control" placeholder="Palavras-chave, separadas por vírgula" value="{{ request()->input('keywords') }}">
            </div>
            <div class="col-md-1">
                <select name="media_type" class="form-control">
                    <option value="">Tipo</option>
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
    <style>
        .row.p-2 {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .row.p-2:hover {
            transform: scale(1.0);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }
        
        .keywords button {
            margin-right: 2px;
            margin-bottom: 2px;
            padding: 2px 8px;
            border-radius: 50px;
            font-size: 12px;
        }
    </style>
    <div class="pt-4">
        @if (isset($error))
        <div class="alert alert-danger">
            {{ $error }}
        </div>
        @elseif (isset($results['collection']['items']) && !empty($results['collection']['items']))
        <div class="results">
            @foreach ($results['collection']['items'] as $item)
            <div class="row p-2 rounded mb-2 mt-2">
                <div class="col-md-3">
                    @if ($item['data'][0]['media_type'] == 'image' && isset($item['links'][0]['href']))
                    @php
                    $origImageUrl = str_replace('~thumb', '~orig', $item['links'][0]['href']);
                    @endphp
                    <a href="{{ $origImageUrl }}" target="_blank" class="image-link">
                        <div class="image-preview-container" style="position: relative;">
                            <img src="{{ $item['links'][0]['href'] }}" alt="Imagem" style="width: 100%; height: 250px; object-fit: cover;">
                            <i class="fas fa-search search-icon" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 48px; color: white;"></i>
                        </div>
                    </a>
                    @elseif ($item['data'][0]['media_type'] == 'video')
                    @php
                    $videoLink = $item['href'];
                    @endphp
                    <a href="{{ route('fetch.video.data', ['url' => $videoLink]) }}" target="_blank" class="video-link">
                        @foreach ($item['links'] as $link)
                        @if ($link['rel'] == 'preview' && $link['render'] == 'image')
                        <div class="video-preview-container" style="position: relative;">
                            <img src="{{ $link['href'] }}" alt="Vídeo" style="width: 100%; height: 250px; object-fit: cover;">
                            <i class="fab fa-youtube youtube-icon" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 48px; color: red;"></i>
                        </div>
                        @endif
                        @endforeach
                    </a>
                    @endif
                </div>
                <div class="col-md-9">
                    <h5>{{ $item['data'][0]['title'] ?? 'Sem título' }}</h5>
                    <p><small><b>Postagem: </b>{{ isset($item['data'][0]['date_created']) ? \Carbon\Carbon::parse($item['data'][0]['date_created'])->format('d/m/Y H:i:s') : 'Sem Data de Postagem' }}</small></p>
                    <small class="text-secondary">{{ \Illuminate\Support\Str::limit($item['data'][0]['description'] ?? 'Sem descrição', 500) }}</small>
                    <div class="keywords pt-2">
                        @isset($item['data'][0]['keywords'])
                            @foreach ($item['data'][0]['keywords'] as $keyword)
                                <button class="btn btn-primary rounded-pill" onclick="searchByKeyword('{{ $keyword }}')">{{ $keyword }}</button>
                            @endforeach
                        @endisset
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="pagination-links mt-4">
            @if ($pagination['prev'])
            <a href="{{ $pagination['base_url'] . $pagination['prev'] }}" class="btn btn-primary">Anterior</a>
            @endif
            <span class="mx-2">Página {{ $pagination['current'] }}</span>
            @if ($pagination['next'])
            <a href="{{ $pagination['base_url'] . $pagination['next'] }}" class="btn btn-primary">Próxima</a>
            @endif
        </div>

        @else
        <p>Nenhum resultado encontrado.</p>
        @endif
    </div>
</div>

<script>
    function searchByKeyword(keyword) {
        document.getElementById('keywordsInput').value = keyword;
        document.getElementById('searchForm').submit();
    }

    function filterEmptyFields() {
        const form = document.getElementById('searchForm');
        const inputs = form.querySelectorAll('input, select');
        inputs.forEach(input => {
            if (!input.value) {
                input.removeAttribute('name');
            }
        });
        return true;
    }
</script>
@endsection
