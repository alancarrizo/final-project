<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/estilos.css">
    <title>@yield('titulo')</title>
  </head>
  <body>
    <div class="container row row-cols-1 row-cols-md-3 row-cols-sm-10" >
      <header>
        <nav class="navegacion">
  <ul class="menu">
  <li> <a href="/actores">ACTORES</a> </li>
  <li> <a href="/peliculas">PELICULAS</a> </li>
  <li> <a href="/generos">GENEROS</a> </li>
  <li> <a href="/creActores">CREAR ACTOR</a> </li>
  <li> <a href="/home">INICIO</a> </li>
  </ul>
        </nav>
      </header>
      @yield('secciones')
      <footer class="navegacion">
<ul class="menu">
  <li> <a href="www.facebook.com">nuestro facebook</a> </li>
  <li> <a href="www.youtube.com">nuestros videos</a> </li>
  <li> <a href="www.twitter.com">nuestro twitter</a> </li>
</ul>
      </footer>
    </div>
    <script src="/js/app.js" type="application/x-javascript">

    </script>
  </body>

</html>
