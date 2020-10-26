<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <title>Titulo do site</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body></body>
        <div class="header">
            <ul>
                <li><a href="{{route('site.home')}}">Home</a></li>
                <li><a href="{{route('site.products')}}">Produtos</a></li>
                <li><a href="{{route('site.blog')}}">Blog</a></li>
                <li><a href="{{route('site.about')}}">Sobre</a></li>
                <li><a href="{{route('site.contact')}}">Contato</a></li>
            </ul>
        </div>

        @yield('content')

        <div class="footer">
            <h1>footer</h1>
        </div>
    </body>
</html>