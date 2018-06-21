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
                <form method="post" action="{{url('Sobe')}}">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{csrf_field()}}
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Broj kreveta *</label>
                                <div class="col-sm-12">
                                    <select class="form-control form-control-lg" name="BrojKreveta" id="lgFormGroupInput">
                                        <option></option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Opis</label>
                                <div class="col-sm-12">
                                    <textarea name="Opis" class="form-control form-control-lg" rows="8" cols="80"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="forma">
                                <input type="submit" name="submitSobe" class="btn btn-primary btn-block" value="Add">
                            </div>
                        </div>
                    </div>

                </form>
                <div class="box"><p style="color:#337ab7;text-align: center;">Polja koja su obelezena sa ( * ) su obavezna</p></div>
            </div>
        </div>
    </div>
@endsection