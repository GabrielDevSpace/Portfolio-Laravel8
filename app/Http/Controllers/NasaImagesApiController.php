<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class NasaImagesApiController extends Controller
{
    public function nasaimagesapi(Request $request)
    {
        try {
            $query = $request->input('q');
            if (!$query) {
                throw new \Exception('Parâmetro "q" não fornecido.');
            }

            $baseUrl = "https://images-api.nasa.gov/search?q=" . urlencode($query);
            if ($request->filled('center')) {
                $baseUrl .= "&center=" . urlencode($request->input('center'));
            }
            if ($request->filled('keywords')) {
                $baseUrl .= "&keywords=" . urlencode($request->input('keywords'));
            }
            if ($request->filled('media_type')) {
                $baseUrl .= "&media_type=" . urlencode($request->input('media_type'));
            }

            $response = Http::get($baseUrl);
            if (!$response->successful()) {
                throw new \Exception('Falha ao acessar a API da NASA: ' . $response->status());
            }

            $results = $response->json();
            if (!isset($results['collection']['items']) || empty($results['collection']['items'])) {
                throw new \Exception('Nenhum resultado encontrado.');
            }

            return view('projetos.nasa-images-api', compact('results'));
        } catch (\Exception $e) {
            Log::error('Erro ao acessar API da NASA: ' . $e->getMessage());
            return view('projetos.nasa-images-api', ['error' => $e->getMessage()]);
        }
    }

    public function fetchVideoData(Request $request)
    {
        try {
            $url = $request->input('url');
            if (!$url) {
                throw new \Exception('URL não fornecida.');
            }

            $response = Http::get($url);
            if (!$response->successful()) {
                throw new \Exception('Falha ao acessar a URL: ' . $response->status());
            }

            $data = $response->json();
            $videoLinks = array_filter($data, function ($link) {
                return strpos($link, 'orig.mp4') !== false;
            });

            return view('projetos.video-data', compact('videoLinks'));
        } catch (\Exception $e) {
            Log::error('Erro ao acessar a URL: ' . $e->getMessage());
            return view('projetos.video-data', ['error' => $e->getMessage()]);
        }
    }
}

