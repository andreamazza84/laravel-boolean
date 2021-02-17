        <header id="header">
            <div class="menu menu-left">
                MyBlogLogo
            </div>
            <ul class="menu menu-right">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('contatti') }}">Contatti</a></li>
            </ul>
        </header>   
        <main id="main">
            <div class="container">
                @yield('content')
            </div>
        </main>
        <footer id="footer">

        </footer>





    </body>
</html>