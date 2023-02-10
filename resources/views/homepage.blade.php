@extends ('layout')

@section('content')


<!--Header-->
@include('partials/_header')

<!-- alerta-->
@include('partials/_success-alert')



<!-- Hero -->
<div id="home" class="hero-area">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url(./img/DALL·E_castle.png)"></div>
    <!-- /Backgound Image -->

    <div class="home-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="white-text">Escuela de Estudios Superiores</h1>
                    <p class="lead white-text">Cursos certificados para dar un paso adelante en tu carrera profesional
                    </p>
                    <a class="main-button icon-button" href="/Cursos">Explora nuestros cursos</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Info -->
<div id="why-us" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">
            <div class="section-header text-center">
                <h2>Por que escoger nuestra escuela</h2>
            </div>

            <!-- feature -->
            <div class="col-md-4">
                <div class="feature">
                    <i class="feature-icon fa fa-flask"></i>
                    <div class="feature-content">
                        <h4>Cursos Online</h4>
                        <p>Nuestros cursos online permiten comaginar estudios con trabjo u otros estudios.
                        </p>
                    </div>
                </div>
            </div>
            <!-- /feature -->

            <!-- feature -->
            <div class="col-md-4">
                <div class="feature">
                    <i class="feature-icon fa fa-users"></i>
                    <div class="feature-content">
                        <h4>Profesores expertos</h4>
                        <p>Nuestro profesorado solucionara todas tus dudas y te guiarara en tus estudios
                        </p>
                    </div>
                </div>
            </div>
            <!-- /feature -->

            <!-- feature -->
            <div class="col-md-4">
                <div class="feature">
                    <i class="feature-icon fa fa-comments"></i>
                    <div class="feature-content">
                        <h4>Comunidad</h4>
                        <p>Forma parte de una comunidad amplia e inclusiva.
                        </p>
                    </div>
                </div>
            </div>
            <!-- /feature -->

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->
</div>
<!-- Call To Action -->
<div id="cta" class="section">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url(../img/award.jpg)"></div>
    <!-- /Backgound Image -->

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <div class="col-md-6">
                <h2 class="white-text">Somos una escuela internacionalmente reconocida y multi-premiada</h2>
            </div>

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Call To Action -->

<!-- Premios -->
<div id="why-us" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">
            

            <!-- feature -->
            <div class="col-md-4">
                <div class="feature">
                    <div class="feature-content">
                        <h4>Mejor Iniciativa Eco-Friendly. 2017</h4>
                        <p>Otorgado por la creación de 10 puestos de reciclaje y 20 placas solares
                        </p>
                    </div>
                </div>
            </div>
            <!-- /feature -->

            <!-- feature -->
            <div class="col-md-4">
                <div class="feature">
                    <div class="feature-content">
                        <h4>Mejor Enseñanza Científica. 2010, 2011, 2015, 2019</h4>
                        <p>Otorgado a nuestros departamentos de Biociencias, Ciencia Molecular y Sanidad.
                        </p>
                    </div>
                </div>
            </div>
            <!-- /feature -->

            <!-- feature -->
            <div class="col-md-4">
                <div class="feature">
                    <div class="feature-content">
                        <h4>Mejor Investigacón Innovadora. 2011, 2012.</h4>
                        <p>Otorgado a nuestros departamentos de Ciencia Molecular y Eco-Transición.
                        </p>
                    </div>
                </div>
            </div>
            <!-- /feature -->

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->
</div>

<!--Footer-->
@include('partials/_footer')


@endsection