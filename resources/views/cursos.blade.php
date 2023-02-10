@extends ('layout')


@section('content')


@include('partials/_header')


@include('partials/_herocontact')

<div id="courses" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">
            <div class="section-header text-center">
                <h2>Explora nuestros cursos</h2>
                <p class="lead">Tenemos 8 cursos disponibles para el próximo periodo académico</p>
            </div>
        </div>
        <!-- /row -->

        <!-- courses -->
        <div id="courses-wrapper">

            <!-- row -->
            <div class="row">

                <!-- single course -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="course">
                        <a class="course-img">
                            <img src="../img/course01.jpg" alt="">
                        </a>
                        <a class="course-title"> Configuración geopolítica del mundo post-WWII</a>
                        <div class="course-details">
                            <span class="course-category"> Relaciones Internacionales </span>
                            <span class="course-price course-free">Gratis</span>
                        </div>
                    </div>
                </div>
                <!-- /single course -->

                <!-- single course -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="course">
                        <a class="course-img">
                            <img src="./img/course02.jpg" alt="">
                        </a>
                        <a class="course-title">Introducción a Rockstar y otros lenguajes de programación bizarros</a>
                        <div class="course-details">
                            <span class="course-category">Programación</span>
                            <span class="course-price course-premium">Premium</span>
                        </div>
                    </div>
                </div>
                <!-- /single course -->

                <!-- single course -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="course">
                        <a class="course-img">
                            <img src="./img/course03.jpg" alt="">
                        </a>
                        <a class="course-title">Estructura de Biomoléculas</a>
                        <div class="course-details">
                            <span class="course-category">Biociencias</span>
                            <span class="course-price course-premium">Premium</span>
                        </div>
                    </div>
                </div>
                <!-- /single course -->

                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="course">
                        <a class="course-img">
                            <img src="./img/course04.jpg" alt="">
                        </a>
                        <a class="course-title" >Figuras religiosas y redes sociales</a>
                        <div class="course-details">
                            <span class="course-category">Religión</span>
                            <span class="course-price course-free">Gratis</span>
                        </div>
                    </div>
                </div>
                <!-- /single course -->

            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row">

                <!-- single course -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="course">
                        <a class="course-img">
                            <img src="./img/course05.jpg" alt="">
                        </a>
                        <a class="course-title" > Gestión y Administración de Bases de Datos </a>
                        <div class="course-details">
                            <span class="course-category">Ingeniería Informática</span>
                            <span class="course-price course-free">Gratis</span>
                        </div>
                    </div>
                </div>
                <!-- /single course -->

                <!-- single course -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="course">
                        <a  class="course-img">
                            <img src="./img/course06.jpg" alt="">
                        </a>
                        <a class="course-title" >La Gestión Profesional de la Seguridad Social en la Empresa</a>
                        <div class="course-details">
                            <span class="course-category">Derechos sociolaborales</span>
                            <span class="course-price course-premium">Premium</span>
                        </div>
                    </div>
                </div>
                <!-- /single course -->

                <!-- single course -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="course">
                        <a class="course-img">
                            <img src="./img/course07.jpg" alt="">
                        </a>
                        <a class="course-title" >Análisis post-vanguardista del Dadà</a>
                        <div class="course-details">
                            <span class="course-category">Arte</span>
                            <span class="course-price course-free">Gratis</span>
                        </div>
                    </div>
                </div>
                <!-- /single course -->


                <!-- single course -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="course">
                        <a class="course-img">
                            <img src="./img/course08.jpg" alt="">
                        </a>
                        <a class="course-title">Laravel para tontos</a>
                        <div class="course-details">
                            <span class="course-category">Programación</span>
                            <span class="course-price course-premium">Premium</span>
                        </div>
                    </div>
                </div>
                <!-- /single course -->

            </div>
            <!-- /row -->

        </div>
        <!-- /courses -->


    </div>
    <!-- container -->

</div>

<!--Footer-->
@include('partials/_footer')

@endsection