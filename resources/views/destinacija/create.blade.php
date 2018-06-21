<!-- create.blade.php -->

@extends('master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                    <div class="box">Kreiranje!</div>
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
                <form method="post" action="{{url('destinacija')}}">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{csrf_field()}}
                                <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Grad *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" placeholder="Grad" name="Grad" id="Grad" value="" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Zemlja *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg"  placeholder="Zemlja" name="Zemlja" id="Zemlja" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Latitude</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg"  placeholder="Latitude" id="Latitude" name="Latitude" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Longitude</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg"  placeholder="Longitude" id="Longitude" name="Longitude" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Opis</label>
                                <div class="col-sm-10">
                                    <textarea name="Opisi" id="Opisi" class="form-control form-control-lg" rows="8" cols="80" value=""></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="mapCanvas"></div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="forma">
                                <input type="submit" name="submitDest" class="btn btn-primary btn-block" value="Add">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="box"><p style="color:#337ab7;text-align: center;">Polja koja su obelezena sa ( * ) su obavezna</p></div>
        </div>
        </div>
    </div>
@endsection