@extends('layout.main')

@section('title','Recetas de cocina')

@section('content')


 <main class="section">
        <h1>Cenas Populares</h1>
        <div id="recipe-container" class="recipe-container">

        </div>
    </main>

@endsection

@vite(['resources/js/recetascenas.js'])
@vite(['public/css/recetaspopulares.css'])

