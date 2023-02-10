@extends ('layout')


@section('content')
<!--Header-->
@include('partials/_header')

<!-- Hero-area -->
@include('partials/_herocontact')

<!--Profesorado-->
<div id="courses" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">
            <div class="section-header text-center">
                <h2>Conoce a nuestro equipo docente</h2>
            </div>
        </div>
        <!-- /row -->

        <!-- prof -->
        <div id="courses-wrapper">

            <!-- row -->
            <div class="row">
                @foreach ($profesores as $profesor)
                <!-- single prof -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="course">
                        <a class="course-img">
                            <img src="../img/{{$profesor['imagen']}}.jpg" alt="prof">
                        </a>
                        <a class="course-title">{{$profesor['nombre']}}</a>
                        <div class="course-details">
                            <span class="course-category"> {{$profesor['def']}} </span>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- /single prof -->
            </div>
        </div>
    </div>
</div>


<!--Footer-->
@include('partials/_footer')

@endsection
