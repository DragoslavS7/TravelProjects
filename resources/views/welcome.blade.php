<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Turisticka Agencija</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet"
              href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">

    </head>
    <body style="background: url('/img/wall-1387291659_world-map-graphic.jpg') no-repeat center center fixed;">
        <div class="flex-center position-ref full-height">
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

            <div class="content">
                <div class="title m-b-md">
                    Turisticka agencija
                </div>
                <div id="Carousel" class="carousel slide">

                    <ol class="carousel-indicators">
                        <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#Carousel" data-slide-to="1"></li>
                    </ol>

                    <!-- Carousel items -->
                    <div class="carousel-inner">

                        <div class="item active">
                            <div class="row">
                                <div class="col-md-3"><a href="#" class="thumbnail"><img src="https://d1ic4altzx8ueg.cloudfront.net/finder-us/wp-uploads/sites/3/2017/09/ParisAttractionsFeature-250x250.jpg" alt="Image" style="max-width:100%;"></a></div>
                                <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://tomsphotocafe.com/wp-content/uploads/2016/03/WS_131021-EUR-FR-Paris-8TP4676-250x250.jpg" alt="Image" style="max-width:100%;"></a></div>
                                <div class="col-md-3"><a href="#" class="thumbnail"><img src="https://cdn.medtravelagency.com/files/uploads/2016/12/ng802-250x250.jpg" alt="Image" style="max-width:100%;"></a></div>
                                <div class="col-md-3"><a href="#" class="thumbnail"><img src="https://s3-media1.fl.yelpcdn.com/bphoto/EcKlTuC-s64hp8SxOsVCkg/ls.jpg" alt="Image" style="max-width:100%;"></a></div>
                            </div><!--.row-->
                        </div><!--.item-->

                        <div class="item">
                            <div class="row">
                                <div class="col-md-3"><a href="#" class="thumbnail"><img src="https://cdn.medtravelagency.com/files/uploads/2016/12/ng801-250x250.jpg" alt="Image" style="max-width:100%;"></a></div>
                                <div class="col-md-3"><a href="#" class="thumbnail"><img src="https://cdn.medtravelagency.com/files/uploads/2017/03/me801-250x250.jpg" alt="Image" style="max-width:100%;"></a></div>
                                <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://barcelona-home.com/blog/wp-content/upload/2013/11/placa-espanya-barcelona-250x250.jpg" alt="Image" style="max-width:100%;"></a></div>
                                <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://www.politika.rs/old/uploads/rubrike/232087/i/1/moskva.jpg" alt="Image" style="max-width:100%;"></a></div>
                            </div><!--.row-->
                        </div><!--.item-->

                    </div><!--.carousel-inner-->
                    <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                    <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                </div>

            </div>
        </div>
        <!-- Footer -->
        <footer>
            <p>
                Gagi Travel &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>
            </p>
                    <a class="social-share" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"
                       target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/facebook.png" border="0" alt="Facebook"/>
                    </a>
                    <a class="social-share" href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}"
                       target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/twitter.png" border="0" alt="Twitter"/>
                    </a>
                    <a class="social-share" href="https://plus.google.com/share?url={{ urlencode(Request::fullUrl()) }}"
                       target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/google_plusone_share.png" border="0" alt="Google+"/>
                    </a>
        </footer>
    </body>

    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script>
        /** Slider **/
        $(document).ready(function() {
            $('#Carousel').carousel({
                interval: 5000
            })
        });
    </script>
</html>
