@extends ('layout')


@section('content')
<!--Header-->
@include('partials/_header')

<!-- Hero-area -->
@include('partials/_herocontact')


<!-- News -->
<div id="blog" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- main blog -->
            <div id="main" class="col-md-9">

                <!-- row -->
                <div class="row">

                    @foreach ($noticias as $noticia)

                    <!-- single new -->
                    <div class="col-md-6">
                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="/Noticias/{{$noticia['id']}}">
                                    <img src="../img/{{$noticia['imagen']}}" alt="">
                                </a>
                            </div>
                            <h4><a href="/Noticias/{{$noticia['id']}}">{{$noticia['titulo']}}</a></h4>
                            <div class="blog-meta">
                                <span class="blog-meta-author">Por: {{$noticia['autor']}}</span>
                                <div class="pull-right">
                                    <span>{{$noticia['fecha']}}</span>
                                    <span class="blog-meta-comments"><i class="fa fa-comments"></i>
                                        {{$noticia['etiquetas']}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- row -->
                <div class="row">

                    <!-- pagination -->
                    <div class="col-md-12">
                        <div class="post-pagination">
                            <a href="#" class="pagination-back pull-left">Back</a>
                            <ul class="pages">
                                <li class="active">1</li>
                            </ul>
                            <a href="#" class="pagination-next pull-right">Next</a>
                        </div>
                    </div>
                    <!-- pagination -->

                </div>
                <!-- /row -->
            </div>
            <!-- aside blog -->
            <div id="aside" class="col-md-3">
                <!-- posts widget -->
                <div class="widget posts-widget">
                    <h3>Noticias recientes</h3>

                    @foreach ($noticias as $noticia)
                    <!-- single posts -->
                    <div class="single-post">
                        <a class="single-post-img" href="/Noticias/{{$noticia['id']}}">
                            <img src="../img/{{$noticia['imagen']}}">
                        </a>
                        <a href="/Noticias/{{$noticia['id']}}">{{$noticia['titulo']}}</a>
                        <p><small>{{$noticia['fecha']}}</small></p>
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