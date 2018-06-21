@extends('master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dobrodosli!</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <p style="border:1px solid #ddd;padding:15px;">Budite prvi putnik koji će napisati recenziju o ovoj turističkoj agenciji. Želimo da čujemo vaše mišljenje. Bilo koja informacija koju možete da podelite će drugim puticima pomoći da odaberu savršeno putovanje za sebe. Hvala. <a href="/kontakt">Kliknite ovde</a> </p>

                            <div class="row">
                                <div class="col-sm-3">
                                    <a class="social-share" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}&t=Test"
                                       target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/facebook.png" border="0" alt="Facebook"/>
                                        Share on Facebook
                                    </a>
                                </div>
                                <div class="col-sm-3">
                                    <a class="social-share" href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}"
                                       target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/twitter.png" border="0" alt="Twitter"/>
                                        Share on Twitter
                                    </a>
                                </div>
                                <div class="col-sm-3">
                                    <a class="social-share" href="https://plus.google.com/share?url={{ urlencode(Request::fullUrl()) }}"
                                       target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/google_plusone_share.png" border="0" alt="Google+"/>
                                        Share on Google
                                    </a>
                                </div>
                                <div class="col-sm-3">
                                    <a data-pin-do="buttonBookmark" data-pin-tall="true" data-pin-round="true" data-pin-save="false" href="https://www.pinterest.com/pin/create/button/share?url={{ urlencode(Request::fullUrl()) }}"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_round_red_32.png" /></a>
                                    Share on Google
                                    </a>
                                </div>
                                <br>
                                <hr>
                                <br>
                                <div class="col-sm-6">
                                    <p style="border:1px solid #ddd;width:80%;">Da biste videli statistiku posecenosti kliknite na link ispod
                                    <h4><a href="laracharts">Statistika posecenosti</a></h4></p>
                                </div>
                                <div class="col-sm-6">
                                    <p  style="border:1px solid #ddd;width:80%;">Da biste videli statistiku po tipu radnika kliknite na link ispod</p>
                                    <h4><a href="laracharts">Statistika radnika</a></h4>
                                </div>
                                <div class="col-sm-6">
                                    <p  style="border:1px solid #ddd;width:80%;">Da biste videli statistiku prodatih aranzmana kliknite na link ispod</p>
                                    <h4><a href="laracharts">Statistika aranzmana</a></h4>
                                </div>
                                <div class="col-sm-6">
                                    <p  style="border:1px solid #ddd;width:80%;">Da biste videli statistiku po strucnoj spremi kliknite na link ispod</p>
                                    <h4><a href="laracharts">Statistika strucne spreme</a></h4>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
