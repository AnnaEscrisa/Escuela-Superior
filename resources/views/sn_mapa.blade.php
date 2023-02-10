@extends ('layout')


@section('content')
<!--Header-->
@include('partials/_header')

<!-- Hero-area -->
@include('partials/_herocontact')

<!-- Contenido -->
<div id="about" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <div class="col-md-6">
                <div class="section-header">
                    <h2>Bienvenido a la Escuela Superior</h2>
                    <p class="lead">Conoce nuestro campus</p>
                </div>

                <!-- feature -->
                <div class="feature">
                    <i class="feature-icon fa fa-flask"></i>
                    <div class="feature-content">
                        <h4>Edificio de Ciencias </h4>
                        <p>Nuestro edificio más antiguo y emblematico, accesible a través de nuestra línea de bus
                        </p>
                    </div>
                </div>
                <!-- /feature -->

                <!-- feature -->
                <div class="feature">
                    <i class="feature-icon fa-solid fa-scale-unbalanced-flip"></i>
                    <div class="feature-content">
                        <h4>Edificio de Humanidades</h4>
                        <p>En el extremo opuesto al edificio de Ciencias, se encuentra el edificio de Humanidades, también accesible a través de nuestra línea de bus
                        </p>
                    </div>
                </div>
                <!-- /feature -->

                 <!-- feature -->
                 <div class="feature">
                    <i class="feature-icon fa-solid fa-building"></i>
                    <div class="feature-content">
                        <h4>Otros</h4>
                        <p>-Edificio Sur. Alberga las instalaciones audiovisuales y espacios religiosos</p>
                        <p>-Edificio Principal. Gestión académica, secretaría y consultoría.</p>
                    </div>
                </div>
                <!-- /feature -->

                <!-- feature -->
                <div class="feature">
                    <i class="feature-icon fa-solid fa-book"></i>
                    <div class="feature-content">
                        <h4>Bibliotecas</h4>
                        <p>Las bibliotecas de ciencias y humanidades se encuentran anexionadas a sus respectivos edificios.
                        </p>
                    </div>
                </div>
                <!-- /feature -->

                <!-- feature -->
                <div class="feature">
                    <i class="feature-icon fa-solid fa-comments"></i>
                    <div class="feature-content">
                        <h4>Cafeterías</h4>
                        <p>Contamos con tres cafeterias: en el edificio sur, el edificio principal y el edificio de ciencias.
                        </p>
                    </div>
                </div>
                <!-- /feature -->

            </div>

            <div class="col-md-6">
                <div class="about-img">
                    <img src="../img/map.png" alt="map">
                </div>
            </div>

        </div>
        <!-- row -->

    </div>
    <!-- container -->
</div>

<!--Footer-->
@include('partials/_footer')

@endsection