<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

</head>
<body style="background: url('/img/wall-1387291659_world-map-graphic.jpg') no-repeat center center fixed;">

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <br>
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/kontakt') }}"> Kontakt</a>
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/kontakt') }}"> Kontakt</a>
                        <a href="{{ url('/login') }}"> Uloguj se</a>
                        <a href="{{ url('/register') }}">Registruj se</a>
                    @endif
                </div>
            @endif
        </div>
    </div>
</div>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Kontakt!</div>
        <br>

        <div class="row">
            <div class="col-md-12">
                <div id="mapCanvas"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2>Informacije</h2>
                <hr style=" width:50%;">

                <table>
                    <tr>
                        <td>Kontakt telefon:</td>
                        <td>0695013001</td>
                    </tr>
                    <tr>
                        <td>Email-Agencije:</td>
                        <td><a href="#">officeTravel@gmail.com</a></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="text">Za vise informacija kontaktirajte nas! </div>
                    <br>
                    <form method="post" action="{{url('kontakt')}}">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label style="color:#fff;" for="SSprema" class="col-sm-4 col-form-label col-form-label-lg">Email *</label>
                                    <div class="col-sm-12">
                                        <input type="email" class="form-control form-control-lg" placeholder="email" id="emaill" name="emaill">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label style="color:#fff;" for="Pozicija" class="col-sm-4 col-form-label col-form-label-lg">Opis*</label>
                                    <div class="col-sm-12">
                                        <textarea name="vise" class="form-control form-control-lg" id="vise" rows="8" cols="80"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                         <input type="submit" class="btn btn-primary" value="submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <input type="hidden" class="form-control form-control-lg"  placeholder="Latitude" id="Latitude" name="Latitude" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <input type="hidden" class="form-control form-control-lg"  placeholder="Longitude" id="Longitude" name="Longitude" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    <footer>
        <p>
            Gagi Travel &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>
        </p>
    </footer>
</div>


</body>
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="{{asset('js/jquery1.2.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpaEm090qRksmEKqPojjfA9ub5KOxXiP4"></script>
<script src="{{ asset('js/googleMaps.js') }}"></script>
</html>