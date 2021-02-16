@extends("layouts.plantilla2")


@section("head1")
    <title>Migraciones - Ankush Bihal</title>
@endsection

@section("head2")
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
    <h2 style="margin-left: auto; margin-right: auto; margin-top: auto; margin-bottom: auto;">Se ha Creado Correctamente la Tabla ALUMNOS en la BD.</h2>


        
<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Sticky footer with fixed navbar</h1>
    <p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code class="small">padding-top: 60px;</code> on the <code class="small">main &gt; .container</code>.</p>
    <p>Back to <a href="/docs/5.0/examples/sticky-footer/">the default sticky footer</a> minus the navbar.</p>
  </div>
</main>

<!-- B-->


@section("footer")
@endsection

