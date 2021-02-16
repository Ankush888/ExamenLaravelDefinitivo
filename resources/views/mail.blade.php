@extends("layouts.plantilla2")


@section("head1")
    <title>Mail - Ankush Bihal</title>
@endsection

@section("head2")
<!-- Bootstrap core CSS -->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<!-- Custom styles for this template -->
<link href="{{asset('css/jquery.bxslider.css')}}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel="stylesheet">

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


<style>

    .contenedor {
        position: relative;
        width: 450px;
        min-height: 300px;
        background: rgba(255,255,255,0.05);
        box-shadow: 0 5px 15px rgba(0,0,0,1);
    }
    .contenedor::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 50%;
        height: 100%;
        background: rgba(255,255,255,0.1);
        pointer-events: none;
        border-radius: 6px 0 0 6px;
    }
    .contenedor::after {
        content: '';
        position: absolute;
        top: -5px;
        left: -5px;
        right: -5px;
        bottom: -5px;
        background: linear-gradient(45deg,#ff0047,#6eff00);
        pointer-events: none;
        animation: animar 10s linear infinite;
    }
    @keyframes animar {
        0% {
            filter: blur(60px) hue-rotate(0deg);
        }
        100% {
            filter: blur(60px) hue-rotate(360deg);
        }
    }
    .form {
        position: absolute;
        width: 100%;
        height: 100%;
        padding: 40px;
        box-sizing: border-box;
        z-index: 1;
    }
    .form h2 {
        margin: 0;
        padding: 0;
        color: #fff;
        font-size: 24px;
    }
    .form .inputCont {
        width: 100%;
        margin-top: 20px;
    }
    .form .inputCont input {
        width: 100%;
        background: transparent;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        font-size: 18px;
        color: black;
        padding: 5px 0;
        font-family: 'open sans';
    }
    .form .inputCont input[type="submit"] {
        background: #fff;
        color: black;
        border: none;
        border-radius: 6px;
        font-weight: 500;
        max-width: 100px;
        cursor: pointer;
    }
    ::placeholder {
        color: rgba(255,255,255,0.3);
    }
    .read-more a {
        display: inline-block;
        padding: 12px 40px;
        margin: 30px 0 0px;
        border: 1px solid;
        border-top-color: currentcolor;
        border-right-color: currentcolor;
        border-bottom-color: currentcolor;
        border-left-color: currentcolor;
        border-radius: 25px;
        border-color: #E6E6E6;
        background-color: #F3F3F3;
        font-family: "Open Sans", Sans-serif;
        text-transform: uppercase;
        font-weight: 600;
        font-size: 12px;
        letter-spacing: 1.7px;
        -webkit-transition: all 0.2s ease-out;
        -moz-transition: all 0.2s ease-out;
        -o-transition: all 0.2s ease-out;
        transition: all 0.2s ease-out;
    }



</style>
@endsection




  <body class="d-flex flex-column h-100">
    
<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{URL::route('inicio')}}">Fixed navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{URL::route('inicio')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::route('migraciones')}}"> Migraciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::route('seeders')}}"> Seeders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::route('mail')}}"> Mail</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<br><br><br><br><br>


    <div class="container">
     
        <div class="contenedor" style="margin: auto; width: fit-content;width: 38%;display: block; height: 65%;">
            <div class="form">
                <h2 style="color: black; font-size: xx-large;">Mail:</h2>
                <form>
                    <div class="inputCont">
                        <input type="text" placeholder="Nombre">
                    </div>
                    <div class="inputCont">
                        <input type="text" placeholder="Titulo:">
                    </div>
                    <div class="inputCont">
                        <input type="text" placeholder=Contenido:>
                    </div>
                    <div class="read-more"><a id="btnComprar" onclick="alert('Mail Enviado.');" href="#">Enviar</a></div>
                </form>
            </div>
        </div>

    </div>
    <br><br>

    @section("footer")
    @endsection
