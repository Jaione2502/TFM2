@extends('layout.main')

@section('title','Recetas de cocina')

@section('content')


<main class="section">
    <h1 class="centrar">Sobre Nosotros</h1>

    <p class="section">
      Somos un equipo de entusiastas de la programación, actualmente en
      proceso de aprendizaje y crecimiento continuo en este campo. A pesar de
      ser un grupo relativamente nuevo en el mundo de la tecnología, nuestra
      pasión por la programación nos ha llevado a crear un proyecto que
      refleja nuestra creatividad y dedicación.
    </p>

    <p class="section">
      Recientemente lanzamos una web de recetas, una plataforma diseñada para
      compartir nuestras ideas culinarias y ayudar a otros a disfrutar de la
      cocina de una manera fácil y divertida. Este proyecto es solo el
      comienzo de lo que estamos desarrollando, y estamos emocionados de
      seguir aprendiendo y ampliando nuestras habilidades.
    </p>

    <p class="section">
      Actualmente, estamos en búsqueda de nuevas oportunidades y colaboradores
      que compartan nuestra visión y nos ayuden a llevar nuestros proyectos al
      siguiente nivel. Si estás interesado en formar parte de nuestro equipo o
      en colaborar con nosotros, no dudes en ponerte en contacto.
    </p>
  </main>

  <section class="centrar section">

    <h2>Conoce a nuestro equipo:</h2>

    <div class="team">
      <div class="team-member">
        <h3>Jaione Aldaregia Erro</h3>
        <p>
          <a href="https://www.linkedin.com/in/jaione-aldaregia-erro-b5304bba" target="_blank">
            <i class="fab fa-linkedin"></i> LinkedIn</a>
        </p>
      </div>

      <div class="team-member">
        <h3>Inés Marroquí Franco</h3>
        <p>
          <a href="https://www.linkedin.com/in/in%C3%A9s-marroqui-franco/" target="_blank">
            <i class="fab fa-linkedin"></i>LinkedIn</a>
        </p>
      </div>

      <div class="team-member">
        <h3>José Miguel Salinas Nicolás</h3>
        <p>
          <a href="https://www.linkedin.com/in/jos%C3%A9-miguel-salinas-nicol%C3%A1s-62869066/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"
            target="_blank">
            <i class="fab fa-linkedin"></i>LinkedIn</a>
        </p>
      </div>
  </section>
  </div>
  </section>

@endsection

@vite(['public/css/aboutus.css'])
