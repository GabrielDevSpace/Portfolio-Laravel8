<!-- resources/views/projetos/nasa-images-api-test.blade.php -->

@extends('site.master.layout')

@section('content')
    <div id="content">
        <h1>Resultados da API da NASA</h1>
        <pre>{{ json_encode($results, JSON_PRETTY_PRINT) }}</pre>
    </div>
@endsection
