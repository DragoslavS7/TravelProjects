<!-- edit.blade.php -->

@extends('master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                    <div class="box">Izmeni!</div>
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
                <form method="post" action="{{action('RezervacijaController@update', $id)}}">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="PATCH">
                                <label for="ImeKorisnika" class="col-sm-2 col-form-label col-form-label-lg">ImeKorisnika</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="ImeKorisnika" placeholder="ImeKorisnika" name="ImeKorisnika" value="{{$rezervacijas->ImeKorisnika}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="PrezimeKorisnika" class="col-sm-2 col-form-label col-form-label-lg">PrezimeKorisnika</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="PrezimeKorisnika" placeholder="PrezimeKorisnika" name="PrezimeKorisnika" value="{{$rezervacijas->PrezimeKorisnika}}">
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
                                    <input type="text" class="form-control form-control-lg" id="JMBG" placeholder="JMBG" name="JMBG"  value="{{$rezervacijas->JMBG}}">
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
                                    <input type="text" class="form-control form-control-lg" id="Telefon" placeholder="Telefon" name="Telefon" value="{{$rezervacijas->Telefon}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="datetimepicker1" class="col-sm-2 col-form-label col-form-label-lg">Od</label>
                                <div class="col-sm-10">
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input type='text' class="form-control" name="Od" id="Od1" placeholder="Date/Time ending" value="{{$rezervacijas->Od}}"/>
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
                                <label for="datetimepicker2" class="col-sm-2 col-form-label col-form-label-lg">Do</label>
                                <div class="col-sm-10">
                                    <div class='input-group date' id='datetimepicker2'>
                                        <input type='text' class="form-control" name="Do" id="Do1" placeholder="Date/Time ending"  value="{{$rezervacijas->Do}}"/>
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
                                <label for="Adresa" class="col-sm-2 col-form-label col-form-label-lg">Adresa</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="Adresa" placeholder="Adresa" name="Adresa" value="{{$rezervacijas->Adresa}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="Soba" class="col-sm-2 col-form-label col-form-label-lg">Soba</label>
                                <div class="col-sm-10">
                                    <select class="form-control form-control-lg" name="Soba" id="Soba" value="{{$rezervacijas->Soba}}">
                                        <option>bla bla</option>
                                        <option>da da</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="Aranzman" class="col-sm-2 col-form-label col-form-label-lg">Aranzman</label>
                                <div class="col-sm-10">
                                    <select class="form-control form-control-lg" name="Aranzman" id="Aranzman" value="{{$rezervacijas->Aranzman}}">
                                        <option>bla bla</option>
                                        <option>da da</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block" value="Upload">
                            </div>
                        </div>
                    </div>
                </form>
        </div>
        </div>
    </div>
@endsection