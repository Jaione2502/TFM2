@extends('layout.main')

@section('title','Recetas de cocina')

@section('content')


<main class="section">
        <h1>Recetas</h1>
        <div id="recipe-container" class="recipe-container">

        </div>
</main>

@endsection

@vite(['resources/js/recetaspopulare.js'])
