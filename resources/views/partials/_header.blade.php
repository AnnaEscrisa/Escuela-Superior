<header id="header" class="transparent-nav">
    <div class="container">

        <div class="navbar-header">
            <!-- Logo -->
            <div class="navbar-brand">
                <a class="logo" href="/">
                    <img src="/img/logo.png" alt="logo">
                </a>
            </div>

            <!-- Mobile toggle -->
            <button class="navbar-toggle">
                <span></span>
            </button>
        </div>

        <!-- Navigation -->
        <nav id="nav">
            <ul class="main-menu nav navbar-nav navbar-right">
                <li><a href="/">Principal</a></li>
                <li>
                    <a class="dropbtn dropdown-toggle" role="button" aria-haspopup="true" id="dropdownMenuButton"
                        data-toggle="dropdown" href="/Sobrenosotros">Sobre Nosotros
                        <i class="fa fa-caret-down"></i>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/Sobrenosotros/Historia">Historia</a>
                            <a class="dropdown-item" href="/Sobrenosotros/Mapa">Mapa</a>
                            <a class="dropdown-item" href="/Sobrenosotros/Profesorado">Profesorado</a>
                        </div>
                    </a>
                </li>
                <li><a href="/Cursos">Cursos</a></li>
                <li><a href="/Noticias">Noticias</a></li>
                <li><a href="/Contacto">Contacto</a></li>
                @if (Auth::user())
                <a class="main-button icon-button" href="/Signout">Cerrar Sesion</a></li>
                @else
                <a class="main-button icon-button" href="/Login">Log In</a></li>
                @endif

            </ul>
        </nav>

    </div>
</header>