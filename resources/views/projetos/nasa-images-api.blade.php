@extends('site.master.layout')

@section('content')
    <div id="content">
        <h1>Busca na API da NASA</h1>
        
        <form action="{{ route('nasaimages.search') }}" method="GET">
            <div class="form-row">
                <div class="col-md-3">
                    <input type="text" name="q" class="form-control" placeholder="Buscar por termo...">
                </div>
                <div class="col-md-3">
                    <input type="text" name="center" class="form-control" placeholder="Centro da NASA">
                </div>
                <div class="col-md-3">
                    <input type="text" name="keywords" class="form-control" placeholder="Palavras-chave">
                </div>
                <div class="col-md-3">
                    <select name="media_type" class="form-control">
                        <option value="">Tipo de mídia</option>
                        <option value="image">Imagem</option>
                        <option value="video">Vídeo</option>
                        <option value="audio">Áudio</option>
                    </select>
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </div>
        </form>

        <div class="mt-4">
            @if (isset($error))
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @elseif (isset($results['collection']['items']) && !empty($results['collection']['items']))
                <div class="results">
                    @foreach ($results['collection']['items'] as $item)
                        <div class="result-item">
                            <h5>{{ $item['data'][0]['title'] ?? 'Sem título' }}</h5>
                            <p>{{ $item['data'][0]['description'] ?? 'Sem descrição' }}</p>
                            
                            @if ($item['data'][0]['media_type'] == 'image' && isset($item['links'][0]['href']))
                                <img src="{{ $item['links'][0]['href'] }}" alt="Imagem" style="max-width: 100%;">
                            @elseif ($item['data'][0]['media_type'] == 'video')
                                @foreach ($item['links'] as $link)
                                    @if ($link['rel'] == 'preview' && $link['render'] == 'image')
                                        <img src="{{ $link['href'] }}" alt="Vídeo" style="max-width: 100%;">
                                    @elseif ($link['rel'] == 'captions')
                                        <a href="{{ $link['href'] }}" target="_blank">Legendas</a>
                                    @endif
                                @endforeach
                                <p><a href="{{ route('fetch.video.data', ['url' => $item['href']]) }}" class="fetch-video-data" target="_blank">Assistir ao vídeo</a></p>
                            @endif
                        </div>
                    @endforeach
                </div>

                @if (isset($results['collection']['links']))
                    <div class="pagination-links">
                        @foreach ($results['collection']['links'] as $link)
                            <a href="{{ $link['href'] }}">{{ $link['prompt'] ?? 'Página seguinte' }}</a>
                        @endforeach
                    </div>
                @endif
            @else
                <p>Nenhum resultado encontrado.</p>
            @endif
        </div>
    </div>
@endsection
