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
        $baseUrl = "https://images-api.nasa.gov/search";

        // Definir o número de itens por página
        $pageSize = 20; // Você pode ajustar conforme necessário

        // Página atual
        $page = max(1, intval($request->input('page', 1))); // Garante que 'page' seja pelo menos 1

        // Montar os parâmetros da query string
        $params = [];
        $query = $request->input('q');
        if ($query) {
            $params['q'] = $query;
        }
        if ($request->filled('year_start')) {
            $params['year_start'] = $request->input('year_start');
            $params['year_end'] = $request->input('year_start');
        }
        if ($request->filled('keywords')) {
            $params['keywords'] = $request->input('keywords');
        }

        if ($request->filled('description')) {
            $params['description'] = $request->input('description');
        }

        if ($request->filled('media_type')) {
            $params['media_type'] = $request->input('media_type');
        }

        // Verificar se há parâmetros de consulta válidos
        if (empty($params)) {
            throw new \Exception('Por favor, forneça pelo menos um critério de pesquisa.');
        }

        // Construir a URL com os parâmetros e a paginação
        $url = $baseUrl . '?' . http_build_query($params) . "&page_size=$pageSize&page=$page";

        // Fazer a requisição para a API da NASA
        $response = Http::get($url);
        if (!$response->successful()) {
            throw new \Exception('Falha ao acessar a API da NASA: ' . $response->status());
        }

        $results = $response->json();
        if (!isset($results['collection']['items']) || empty($results['collection']['items'])) {
            throw new \Exception('Nenhum resultado encontrado.');
        }

        // Construir links de paginação
        $pagination = [
            'current' => $page,
            'next' => $page + 1,
            'prev' => $page > 1 ? $page - 1 : null,
            'base_url' => route('nasaimages.search', array_merge($params, ['page' => '']))
        ];

        return view('projetos.nasa-images-api', compact('results', 'pagination'));
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

