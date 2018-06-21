<!-- CREATE.blade.php -->

@extends('master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                    <div class="box">Izmeni!</div>
                <br><br><br>
                @if(count($errors))
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                        <br/>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{action('RadnikController@update', $id)}}">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="PATCH">
                                <label for="RadnikIme" class="col-sm-2 col-form-label col-form-label-lg">Ime radnika</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" placeholder="Ime radnika" name="RadnikIme"  value="{{$radnik->RadnikIme}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="JMBG" class="col-sm-2 col-form-label col-form-label-lg">JMBG</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" placeholder="JMBG" name="RadnikJMBG"  value="{{$radnik->RadnikJMBG}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="Sifra" class="col-sm-2 col-form-label col-form-label-lg">Sifra</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control form-control-lg" placeholder="Sifra" name="Sifra"  value="{{$radnik->Sifra}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="Adresa" class="col-sm-2 col-form-label col-form-label-lg">Adresa</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" placeholder="Adresa" name="Adresa"  value="{{$radnik->Adresa}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="Telefon" class="col-sm-2 col-form-label col-form-label-lg">Telefon</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" placeholder="Telefon" name="Telefon"  value="{{$radnik->Telefon}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="SSprema" class="col-sm-2 col-form-label col-form-label-lg">Strucna Sprema</label>
                                <div class="col-sm-10">
                                    <select class="form-control form-control-lg" name="SSprema"  value="{{$radnik->SSprema}}">
                                        <option>Srednja skola</option>
                                        <option>Visa skola</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="Pozicija" class="col-sm-2 col-form-label col-form-label-lg">Pozicija</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" placeholder="Pozicija" name="Pozicija"  value="{{$radnik->Pozicija}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block" value="update">
                            </div>
                        </div>
                    </div>
                </form>
        </div>
        </div>
    </div>


@endsection