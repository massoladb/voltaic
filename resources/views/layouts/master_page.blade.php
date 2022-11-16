<!DOCTYPE html>
<html lang="{{ str_replace ('_', '-', app()->getLocale() )}}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>@yield('titulo')</title>
</head>
<body>
    <nav>
        <div class="logo">
            <a href="#"><img src="img/voltaic_logo_secundario_fundo_preto.png" alt="logo da Voltaic Technology"></a>
        </div>
        <div class="nav-items">
            <ul class="nav-links">
                <li><a href="#">Página inicial</a></li>
                <li><a href="#">Solicite agora</a></li>
                <li><a href="#">Artigos</a></li>
                <button class="btn">Entrar</button>
            </ul>
        </div>
    </nav>
    <main>
        @yield('conteudo')
    </main>
</body> 
</html>