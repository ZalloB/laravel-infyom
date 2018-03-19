<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>WiredPlayers</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <style>

    </style>
    @yield('css')
</head>
<body>
<nav id="topNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#"><img alt="Brand" src="{{asset('img/wired-white-only-logo.png')}}" style="max-height: 20px; display: inline;"> Wired players</a>
        </div>
        <div class="navbar-collapse collapse" id="bs-navbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href=""><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
                </li>
                <li>
                    <a class="page-scroll" href=""><i class="fa fa-heart" aria-hidden="true"></i> Nosotros</a>
                </li>
                <li>
                    <a class="page-scroll" href=""><i class="fa fa-info-circle" aria-hidden="true"></i> Como jugar</a>
                </li>
                <li>
                    <a class="page-scroll" href=""><i class="fa fa-server" aria-hidden="true"></i> Servidores</a>
                </li>
                <li>
                    <a class="page-scroll" href="http://wiredplayers.com/foro/index.php"><i class="fa fa-comments" aria-hidden="true"></i> Foro</a>
                </li>
                <li>
                    <a class="page-scroll" data-toggle="modal" title="" href="{{url('/login')}}"> <i class="fa fa-sign-in" aria-hidden="true"></i>
                        Log in</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header>
    <div class="header-content">
        <div class="inner">
            <img alt="Brand" src="{{asset('img/wired-white.png')}}">
            <h2 style="color: #ffffff;">La nueva comunidad de servidores de rol GTA V</h2>
        </div>
    </div>
</header>
<section class="reverse" id="inicio">
    <div class="container">
        <h1>Bienvenidos</h1>


        <div class="well well-lg">
            <p>Actualmente el servidor esta en fase beta cerrada, y se esta dando todo lo posible para sacarlo al maximo
                nivel
                cuanto antes.</p>
        </div>

        <div class="row">
            <div class="col-sm-8">
                <h1>WiredPlayers</h1>
                <p>
                    Somos una comunidad Hispanohablante, que actualmente ofrecemos un Game Mode de rol para el GTA V,
                    contamos con
                    un equipo de desarrollo
                    que tiene experiencia en comunidades de rol pasadas basadas en el Samp.
                </p>

            </div>
            <div class="col-sm-4">
                <img src="{{asset('img/wired-black-only-logo.png')}}" class="img-responsive img-cover">
            </div>
        </div>
        <hr class="hr-cover">
        <div class="row">
            <div class="col-sm-4">
                <img src="{{asset('img/code-icon-script.png')}}" class="img-responsive img-cover">
            </div>
            <div class="col-sm-8">
                <h1>Equipo</h1>

                <p>
                    Somos una comunidad Hispanohablante, que actualmente ofrecemos un Game Mode de rol para el GTA V,
                    contamos con
                    un equipo de desarrollo
                    que tiene experiencia en comunidades de rol pasadas basadas en el Samp.
                </p>
            </div>
        </div>
        <hr class="hr-cover">
        <div class="row">
            <div class="col-sm-8">
                <h1>Comunidad</h1>
                <p>
                    Somos una comunidad Hispanohablante, que actualmente ofrecemos un Game Mode de rol para el GTA V,
                    contamos con
                    un equipo de desarrollo
                    que tiene experiencia en comunidades de rol pasadas basadas en el Samp.
                </p>

            </div>
            <div class="col-sm-4">
                <img src="{{asset('img/community.png')}}" class="img-responsive img-cover">
            </div>
        </div>
    </div>
</section>
<section>

</section>
<section class="reverse">

</section>

</body>
</html>