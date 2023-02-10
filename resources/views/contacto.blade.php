@extends ('layout')

<link type="text/css" rel="stylesheet" href="/css/tabs.css" />
@section('content')


<!--Header-->
@include('partials/_header')

<!-- Hero-area -->
@include('partials/_herocontact')

<!--Tabs-->
<div class="main1">

  <input class="in1" id="tab1" type="radio" name="tabs" checked>
  <label for="tab1">
   Información
  </label>

  <input class="in1" id="tab2" type="radio" name="tabs">
  <label for="tab2">
    Teléfono 
  </label>

  <input class="in1" id="tab3" type="radio" name="tabs">
  <label for="tab3">
    Dirección
  </label>

  <section class="sec1" id="content1">
    <p>
      La secretaria del centro está a tu disposición de forma presencial en el edificio principal de 10h a 14h por las
      mañanas y de 17h a 19h por las tardes.
      Las sesiones de consulta y gestión académica han de ser concertadas mediante cita previa con un mes de antelación.
    </p>
    <p>
      Para consultas académicas y concertar cita previa puedes dirigirte a nosotros en consulta@escuela-superior.com
    </p>
  </section>

  <section class="sec2" id="content2">
    <p>
      Para consultas académicas, puedes contactarnos en el 900 396 773, de 10h-14h de lunes a viernes.
    </p>
    <p>
      Para consultas administrativas, te atenderemos en el 900 396 774, de 10h-11h los martes.
    </p>
  </section>

  <section class="sec3" id="content3">
    <p> Puedes encontrarnos en las afueras de Santa-Virromana, Barcelona. </p>

    <p> <i> Escuela de Estudios Superiores, 02003 Santa-Virromana, Barcelona </i> </p>
    <p> Nuestro campus es accesible por carretera, línea R23 de RENFE (Estación Campus-Superior) y línea de bus V37.
    </p>
    <p>Los accesos por aire y por mar están temporalmente deshabilitados.</p>
    <div id="contact-map"></div>
  </section>

</div>

<!--Footer-->
@include('partials/_footer')

@endsection