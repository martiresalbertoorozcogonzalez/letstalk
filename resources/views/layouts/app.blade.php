<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

  
</head>
<body>

<div id="app">
        
         <b-navbar toglleable type="dark" variant="primary">
           
           <b-navbar-toggle target="nav_text_collapse"></b-navbar-toggle>

              <b-navbar-brand href="{{ url('/') }}">
              {{ config('app.name', 'Letstalk') }}
              </b-navbar-brand>

              <b-collapse is-nav id="nav_text_collapse">
                   
                   <b-navbar-nav class="ml-auto">
                    @guest
                      <b-nav-item href="{{ route('login') }}">Ingresar</b-nav-item>
                      <b-nav-item href="{{ route('register') }}">Registrar</b-nav-item>
                    @else  
                      
                      <b-nav-item-dropdown text="Username" right>
                        <b-dropdown-item href="#">Cerrar sesion</b-dropdown-item>
                      </b-nav-item-dropdown>
                    @endguest  
                    </b-navbar-nav>

              </b-collapse>    
       
        </b-navbar>


        @yield('content')

</div>

</body>
</html>
