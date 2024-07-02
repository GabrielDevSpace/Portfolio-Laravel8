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
                        <a class="nav-link" href="{{ route('nasa-pod.index') }}">NASA Images - API</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="projetos-header pb-4" align="center">
        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e5/NASA_logo.svg" alt="NASA Logo" style="width: 100px; height: auto;">
        <div>
            <span class="texto-dark">
                <h3>NASA POD - Picture of the Day</h3>
                <p>APOD NASA - Uma imagem ou fotografia diferente do nosso fascinante universo é destacada, acompanhada de uma breve explicação escrita por um astrônomo profissional.</p>
            </span>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                @if ($apod['media_type'] === 'image')
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
                <div class="row p-2 rounded mb-2 mt-2">
                    <div class="col-md-12">
                        <div class="video-preview-container" style="position: relative;">
                            <div class="aspect-w-16 aspect-h-9">
                                <iframe src="{{ $apod['url'] }}" frameborder="0" allowfullscreen class="w-full h-full"></iframe>
                            </div>
                            <i class="fab fa-youtube youtube-icon" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 48px; color: red;"></i>
                        </div>
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
            <div class="col-md-9">
                <div class="row p-2 rounded mb-2 mt-2">
                    <div class="col-md-12">
                        <h5>{{ $apod['title'] }}</h5>
                        <p><small><b>Postagem: </b>{{ isset($apod['date']) ? \Carbon\Carbon::parse($apod['date'])->format('d/m/Y H:i:s') : 'Sem Data de Postagem' }}</small></p>
                        <small class="text-secondary">{{ $apod['explanation'] }}</small>
                        <div class="keywords pt-2">
                            <!-- Adicione aqui a lógica para as palavras-chave, se necessário -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center mb-4">
        <a href="#" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-md" id="previous-button">Anterior</a>
        <a href="#" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-md" id="next-button">Próxima</a>
    </div>
    
    <script>
        document.getElementById('previous-button').addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default form submission
            getPreviousDateApod();
        });
    
        document.getElementById('next-button').addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default form submission
            getNextDateApod();
        });
    
        function getPreviousDateApod() {
            window.location.href = "{{ route('nasa-pod.previous') }}";
        }
    
        function getNextDateApod() {
            window.location.href = "{{ route('nasa-pod.next') }}";
        }
    </script>
    
</div>
@endsection
