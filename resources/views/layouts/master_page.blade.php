<!DOCTYPE html>
<html lang="{{ str_replace ('_', '-', app()->getLocale() )}}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('links')
    <title>@yield('titulo')</title>
</head>
<body>
    <nav id="navbar">
        <div class="logo">
            <a href="/"><img src="img/voltaic_logo_secundario_fundo_preto.png" alt="logo da Voltaic Technology"></a>
        </div>
        <div class="nav-items">
            <ul class="nav-links">
                <li><a href="/">Página inicial</a></li>
                <li><a href="#">Solicite agora</a></li>
                <li><a href="#">Artigos</a></li>
                <button class="btn">Entrar</button>
            </ul>
        </div>
    </nav>
    <main>
        @yield('conteudo')
    </main>

    <footer>
        <div class="social">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="https://github.com/massoladb/voltaic"><i class="fab fa-github"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
        </div>
    
        <ul class="list">
            <li><a href="/">Página Inicial</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Termos</a></li>
            <li><a href="#">Política de privacidade</a></li>
        </ul>

        <p class="copyright">Voltaic Technology @ 2022</p>
  </footer>
  <script src="script/modal.js"></script>
</body> 
</html>