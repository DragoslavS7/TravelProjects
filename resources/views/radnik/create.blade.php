<!-- CREATE.blade.php -->

@extends('master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                    <div class="box">Kreiranje!</div>
                <br> <br> <br>
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
                <form method="post" id="validate" action="{{url('radnik')}}">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{csrf_field()}}
                                <label for="RadnikIme" class="col-sm-2 col-form-label col-form-label-lg">Ime *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" placeholder="Ime radnika" name="RadnikIme">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="Sifra" class="col-sm-2 col-form-label col-form-label-lg">Sifra *</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control form-control-lg" placeholder="Sifra" name="Sifra">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="JMBG" class="col-sm-2 col-form-label col-form-label-lg">JMBG *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" placeholder="JMBG" id="RadnikJMBG" name="RadnikJMBG"">
                                    <span id="spnJMBG"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="Adresa" class="col-sm-2 col-form-label col-form-label-lg">Adresa *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" placeholder="Adresa" name="Adresa">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="Telefon" class="col-sm-2 col-form-label col-form-label-lg">Telefon *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" placeholder="Telefon" name="Telefon">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="SSprema" class="col-sm-2 col-form-label col-form-label-lg">Strucna Sprema *</label>
                                <div class="col-sm-10">
                                    <select class="form-control form-control-lg" name="SSprema">
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
                                <label for="Pozicija" class="col-sm-2 col-form-label col-form-label-lg">Pozicija *</label>
                                <div class="col-sm-10">
                                    <select class="form-control form-control-lg" name="Pozicija">
                                        <option>IT</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="forma">
                                <input type="submit" name="submitRadnik" class="btn btn-primary btn-block" value="Add">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="box"><p style="color:#337ab7;text-align: center;">Polja koja su obelezena sa ( * ) su obavezna</p></div>
        </div>
        </div>
    </div>



@endsection
