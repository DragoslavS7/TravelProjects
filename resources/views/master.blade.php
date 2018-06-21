<!-- master.blade.php -->

<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Turisticka Agencija</title>
    <!-- Facebook share meta crawlers -->
    <meta property="og:url" content="http://127.0.0.1:8000/home" />
    <meta property="og:type" content="Srbija" />
    <meta property="og:title" content="Beograd" />
    <meta property="og:description" content="Odaberite destinaciju" />
    <meta property="og:image" content="https://s3-media1.fl.yelpcdn.com/bphoto/EcKlTuC-s64hp8SxOsVCkg/ls.jpg" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet"
          href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<nav class="navbar navbar-s1 navbar-side" role="navigation">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('img/logo.png')}}" width="100px" height="30px"></a>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul id="side" class="nav navbar-nav side-nav">

            <li class="side-user">
                <img class="img-circle " src="{{ Auth::user()->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                <p class="welcome"><i class="fa fa-key"></i> Logged in as</p>
                <p class="name">{{ Auth::user()->name }}<i class="fa fa-sign-out-alt"></i>
                    </a>
                </p>
            </li>

            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>

            <li class="panel">
                <a class="accordion-toggle" data-target="#catalog" data-toggle="collapse" data-parent="#side"> Aranzmani <i class="fa fa-caret-down"></i></a>
                <ul id="catalog" class="collapse nav">
                    <li><a class="sublink" href="{{ url('/aranzman/create') }}"> <i class="fa fa-angle-double-right"></i> Dodavanje Aranzmana</a></li>
                    <li><a class="sublink" href="{{ url('/aranzman') }}"> <i class="fa fa-angle-double-right"></i> Tabela Aranzmana</a></li>
                </ul>
            </li>

            <li class="panel">
                <a class="accordion-toggle" data-target="#extension" data-toggle="collapse" data-parent="#side"> Destinacije <i class="fa fa-caret-down"></i></a>
                <ul id="extension" class="collapse nav">
                    <li><a class="sublink" href="{{ url('/destinacija/create') }}"> <i class="fa fa-angle-double-right"></i> Dodavanje destinacije</a></li>
                    <li><a class="sublink" href="{{ url('/destinacija') }}"> <i class="fa fa-angle-double-right"></i> Tabela destinacije</a></li>
                </ul>
            </li>

            <li class="panel">
                <a class="accordion-toggle" data-target="#sale" data-toggle="collapse" data-parent="#side"> Sobe <i class="fa fa-caret-down"></i></a>
                <ul id="sale" class="collapse nav">
                    <li><a class="sublink" href="{{ url('/Sobe/create') }}"> <i class="fa fa-angle-double-right"></i> Dodavanje sobe </a></li>
                    <li><a class="sublink" href="{{ url('/Sobe') }}"> <i class="fa fa-angle-double-right"></i> Tabela sobe</a></li>
                </ul>
            </li>

            <li class="panel">
                <a class="accordion-toggle" data-target="#system" data-toggle="collapse" data-parent="#side"> Rezervacije <i class="fa fa-caret-down"></i></a>
                <ul id="system" class="collapse nav">
                    <li><a class="sublink"  href="{{ url('/rezervacija/create') }}"> <i class="fa fa-angle-double-right"></i> Dodavanje rezervacije</a></li>
                    <li><a class="sublink" href="{{ url('/rezervacija') }}"> <i class="fa fa-angle-double-right"></i> Tabela rezervacije</a></li>
                </ul>
            </li>

            <li class="panel">
                <a class="accordion-toggle" data-target="#reports" data-toggle="collapse" data-parent="#side"> Radnik <i class="fa fa-caret-down"></i></a>
                <ul id="reports" class="collapse nav">
                    <li><a class="sublink" href="{{ url('/radnik/create') }}"> <i class="fa fa-angle-double-right"></i> Dodavanje radnika </a></li>
                    <li><a class="sublink" href="{{ url('/radnik') }}"> <i class="fa fa-angle-double-right"></i> Tabela radnika </a></li>
                </ul>
            </li>

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                        <img src="{{ Auth::user()->avatar }}" alt="your images" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>Profile</a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-btn fa-sign-out-alt"></i>
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>

    </div>
</nav>


@yield('content')
</body>
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery1.2.js')}}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpaEm090qRksmEKqPojjfA9ub5KOxXiP4"></script>

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script src="{{ asset('js/all-functions.js') }}"></script>
<script src="{{ asset('js/googleMaps.js') }}"></script>

<script>
    /***** Nortifications ****/

            @if(Session::has('message'))
    var type="{{Session::get('alert-type','info')}}"

    switch (type)
    {
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>


</html>