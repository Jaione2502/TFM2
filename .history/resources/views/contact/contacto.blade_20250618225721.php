@extends('layout.main')

@section('title','Recetas de cocina')

@section('content')


<main class="section">
    <h1>¡Contacta con nosotros! 📧</h1>
    <form id="contactForm" class="form">
      <label for="name" class="form__label">Nombre:</label><br />
      <input type="text" id="name" name="name" required="" class="form__input" /><br />
      <p id="nameError"></p>

      <label for="email" class="form__label">E-mail:</label><br />
      <input type="email" id="email" name="email" required="" class="form__input" /><br />
      <p id="emailError"></p>

      <label for="message" class="form__label">Mensaje:</label><br />
      <textarea id="message" name="message" rows="4" class="form__textarea"></textarea><br />
      <p id="messageError"></p>
      <input type="submit" value="Enviar" class="form__submit" />
    </form>
    <div>
      <p class="mandatory-field">*Campo obligatorio</p>
      <p class="privacy-text">
        La información recopilada a través de este formulario es necesaria
        para tramitar su solicitud. Será transmitida al Servicio de Atención
        al Cliente de EBIS encargado del tratamiento de su solicitud y será
        conservada por EBIS durante un periodo limitado, acorde con la
        finalidad del tratamiento. Puede ejercer sus derechos de acceso,
        rectificación, portabilidad, supresión, oposición al tratamiento y
        limitación del tratamiento de sus datos personales solicitándolo
        mediante este formulario o contactando con nosotros por correo
        electrónico en la dirección siguiente: privacy@ebis.es. Puede ser
        necesaria una prueba de identidad para ejercer tus derechos.<br /><br />
        Para obtener más información sobre tus otros derechos, por favor lee
        nuestra
        <a href="privacidad.html" class="privacy-policy-link">Política de Privacidad y Cookies.</a>
      </p>
    </div>
  </main>

@endsection

    @vite(['resources/js/contacto.js'])



