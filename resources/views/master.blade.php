<!doctype html>
<html lang="{{ app()->getLocale() }}">

    @include('layout.header')

    <body>
        <div id="app">
            <div class="container is-fluid">
                @yield('content')
            </div>
        </div>

        @include('layout.footer')
    </body>
</html>
