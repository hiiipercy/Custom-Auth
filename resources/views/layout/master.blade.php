<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layout.include.header')
    </head>
    <body class="sb-nav-fixed">
        @include('layout.include.nav')

        <div id="layoutSidenav">
            @include('layout.include.sidebar')
            
            <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>
                @include('layout.include.footer')
            </div>
        </div>

        @include('layout.include.script')
        @stack('js')
        </body>
</html>
