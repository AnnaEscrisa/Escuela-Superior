@extends ('layout')


@section('content')
<!--Header-->
@include('partials/_header')

<!-- Hero-area -->
@include('partials/_herocontact')


<!-- row -->
<div id="why-us" class="section">

    <!-- container -->
    <div class="container">

        <div class="row">

            <div class="col-md-6">
                <h3>Nuestra Historia.</h3>
                <p class="lead"> Conoce la historia de una escuela centenaria</p>
                <p>Fundada originalmente en 1793, fue la principal escuela de estudios científicos de Barcelona. A partir de 1850 expandió sus materias para abarcar estudios humanísticos y religiosos.</p>
                <p> A partir de 1990 pasa a ser parte del Grupo Elite, convirtiéndose en una de las escuelas más reconocidas a nivel europeo en estudios postobligatorios.</p>
            </div>

            <div class="col-md-5 col-md-offset-1">
                <div class="about-img">
                    <img src="../img/DALL·E_castle.png" alt="castle">
                </div>
            </div>

        </div>
    </div>
</div>

<!--Footer-->
@include('partials/_footer')

@endsection