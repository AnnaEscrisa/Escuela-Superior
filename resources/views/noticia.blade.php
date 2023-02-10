@extends ('layout')


@section('content')
<!--Header-->
@include('partials/_header')

<!-- Hero-area -->
@include('partials/_herocontact')

<!-- Blog -->
<div id="blog" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- main blog -->
            <div id="main" class="col-md-9">

                <!-- blog post -->
                <div class="blog-post">
                    <p>{!!nl2br(e($noticia['descripcion']))!!}</p>
                </div>
                <!-- /blog post -->
                <!-- blog comments -->

                <div class="blog-comments">
                    <h3>Comentarios</h3>
                    @unless (count($mensajes) == 0)

                    @foreach ($mensajes as $mensaje)
                    <!-- single comment -->
                    <div class="media">
                        <div class="media-left">
                            <img src="../img/{{$mensaje['Avatar']}}" alt="av">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">{{$mensaje['Autor']}}</h4>
                            <p>{{$mensaje['Comentario']}}</p>
                            <div class="date-reply"><span>{{$mensaje['created_at']}}</span></div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <h4> Aun no hay mensajes </h4>
                    @endunless ($mensajes)

                </div>
                <!-- blog reply form -->
                <div class="blog-reply-form">
                    <h3>Comentar</h3>
                    <form action="{{ route('Comentario') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value={{$noticia['id']}}> 
                        <input class="input name-input" type="text" name="Nombre" placeholder="Nombre">
                        <textarea class="input" name="Mensaje" placeholder="Deja tu mensaje"></textarea>
                        <button class="main-button icon-button">Comentar</button>
                    </form>
                </div>
                <!-- /blog reply form -->
            </div>
            <!-- aside blog -->
            <div id="aside" class="col-md-3">
                <!-- posts widget -->
                <div class="widget posts-widget">
                    <h3>Noticias recientes</h3>

                    @foreach ($news as $new)
                    <!-- single posts -->
                    <div class="single-post">
                        <a class="single-post-img" href="/Noticias/{{$new['id']}}">
                            <img src="../img/{{$new['imagen']}}">
                        </a>
                        <a href="/Noticias/{{$new['id']}}">{{$new['titulo']}}</a>
                        <p><small>{{$new['fecha']}}</small></p>
                    </div>
                    <!-- /single posts -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


<!--Footer-->
@include('partials/_footer')

@endsection