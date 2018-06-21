<!-- create.blade.php -->

@extends('master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                    <div class="box">Kreiranje!</div>
                <br>
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
                <form method="post" action="{{url('rezervacija')}}">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{csrf_field()}}
                                <label for="ImeKorisnika" class="col-sm-2 col-form-label col-form-label-lg">Ime *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="ImeKorisnika" placeholder="Ime Korisnika" name="ImeKorisnika">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="PrezimeKorisnika" class="col-sm-2 col-form-label col-form-label-lg">Prezime *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="PrezimeKorisnika" placeholder="Prezime Korisnika" name="PrezimeKorisnika" >
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
                                    <input type="text" class="form-control form-control-lg" id="JMBG" placeholder="JMBG" name="JMBG"  >
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
                                    <input type="text" class="form-control form-control-lg" id="Telefon" placeholder="Telefon" name="Telefon" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="Od" class="col-sm-2 col-form-label col-form-label-lg">Od *</label>
                                <div class="col-sm-10">
                                    <div class='input-group date' id='Od'>
                                        <input type='text' class="form-control" name="Od" id="Od" placeholder="Datum od"/>
                                        <span class="input-group-addon">
                                             <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="Do" class="col-sm-2 col-form-label col-form-label-lg">Do *</label>
                                <div class="col-sm-10">
                                    <div class='input-group date' id='Do'>
                                        <input type='text' class="form-control" name="Do" id="Do" placeholder="Datum do"/>
                                        <span class="input-group-addon">
                                             <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
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
                                    <input type="text" class="form-control form-control-lg" id="Adresa" placeholder="Adresa" name="Adresa" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="Soba" class="col-sm-2 col-form-label col-form-label-lg">Soba *</label>
                                <div class="col-sm-10">
                                    <select class="form-control form-control-lg" name="Soba" id="Soba">
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="Aranzman" class="col-sm-2 col-form-label col-form-label-lg">Aranzman *</label>
                                <div class="col-sm-10">
                                    <select class="form-control form-control-lg" name="Aranzman" id="Aranzman">
                                        <option>polupansion</option>
                                        <option>pansion</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="forma">
                                <input type="submit" name="submitRez" class=" btn btn-primary btn-block" value="Add">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="box"><p style="color:#337ab7;text-align: center;">Polja koja su obelezena sa ( * ) su obavezna</p></div>
        </div>
        </div>
    </div>
@endsection