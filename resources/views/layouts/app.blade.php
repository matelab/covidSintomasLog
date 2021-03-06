<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'SeguiSalud')</title>
    <!-- Fonts -->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!--Fonts Awesome-->
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('dataTables/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dataTables/responsive/responsive.bootstrap4.min.css') }}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.min.css') }}">
</head>

<body>
    <div id="app" class="Agenda">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img
                        src="{{ asset('img/sublogo.svg') }}" width="99" height="59"
                        alt="SeguiSalud" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if(Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}"
                                        method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
        <footer style="position: absolute; bottom: 0; width: 100%;" class="site-footer">
		<center>
			<span class="footer-nav-item company-name">
				<a href="https://www.matelab.com.ar/avisolegal/es/" target="_blank">
					Terminos & Condiciones</a> | 
			</span>	
			<span class="footer-nav-item company-name">
				<a href="https://raw.githubusercontent.com/matelab/covidSintomasLog/master/LICENSE" target="_blank">
					GPLv3
				</a>
			</span>
		</center>
        <div class="footerdata">
		    <center>
		    		<span class="fuente" >
		    			Inspirado en un diseño de
		    			<p>
		    				<a href="https://marisolsanroman.com/" target="_blank">
		    					Marisol San Roman
		    				</a>
		    			</p>
		    		</span>
		    		<span class="matelabLogo">
		    			Powered by 
		    			<a href="https://www.matelab.com.ar">
		    				<img src="{{ asset('img/logo_matelab.svg') }}" 
		    					width="60" 
		    					height="60"
		    					alt="Matelab" />
		    			</a>
		    		</span>
            </center>
        </div>
    </footer>
</body>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- DataTables	https://datatables.net/-->
<script src="{{ asset('dataTables/datatables.min.js') }}"></script>
<script src="{{ asset('dataTables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('dataTables/responsive/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('dataTables/responsive/responsive.bootstrap4.min.js') }}"></script>
<!-- ScriptsApp -->
<script src="{{ asset('js/scripts.js') }}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
@yield('scripts')

</html>
