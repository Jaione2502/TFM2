@extends('layout.main')

@section('title','Recetas de cocina')

@section('content')


 <h1 class="search_title">Buscador de Recetas</h1>
    <br>
    <div class="search_box_container">

        <input type="text" id="ingredients" class="search-box" placeholder="Ingresa los alimentos separados por coma" />
        <button class="button" onclick="buscarRecetas()">Buscar Recetas</button>
    </div>

@endsection


@vite(['public/css/buscador.css'])
