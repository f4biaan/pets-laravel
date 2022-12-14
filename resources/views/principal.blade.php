<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">
</head>

<body>

  <header>
    <h1>Página de incio</h1>
    <nav>
      <a href="{{ route('home') }}">Inicio</a>
      <a href="{{ route('portafolio') }}">Portafolio</a>
      <a href="{{ route('mascotas') }}">Mascotas</a>
      <a href="">Contactos</a>
    </nav>

  </header>
  <div class="contenedor">
    <!-- <h2>Información de la app</h2> -->
    <section class="contenido">
      @yield('content')
    </section>
    <section class="contenido2">
      @yield('content2')
    </section>
    <section class="contenido3">
      @yield('content3')
    </section>
  </div>

  <footer class="footer1">
    <section class="footer1">
      @yield('footer1')
    </section>
  </footer>

</body>

</html>
