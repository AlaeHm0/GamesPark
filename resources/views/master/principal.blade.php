<html>
    <head>
        <title> App Name - @yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        @section('name')
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('storage/img/etude.jpg') }}" alt="" style="width:100px;">
                </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <a class="nav-link" href='/'>Accueil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="presentation">Presentation</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="resultat">Resultat</a>
                </li>
                <li class="nav-item">
                    <a href="contact" class="nav-link">Contact</a>
                </li>
              </ul>
              <div class="d-flex" >
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </div>
            </div>
            </div>
          </nav>
          <div class="container-fluid" style="background-image : url('https://images.ctfassets.net/7ybcsndtpd0a/6L9AEMMbyypxHOd6AOm97I/0c435bc11b256eb94732c3ce616431fe/2.png');background-size:cover;background-position:center;height:400px">
            <br>
            <h1 class="text-center">Le chemin vers l'excellence</h1>
          </div>
        @show
        <div class="container">
            <h1>Presentation de la page de @yield('page-title')</h1>
            @yield('content')
        </div>
    </body>
</html>