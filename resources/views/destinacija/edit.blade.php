<!-- create.blade.php -->

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
                <br>
                <br>
                <form method="post" action="{{action('DestinacijaController@update', $id)}}">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="PATCH">
                                <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Grad</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" placeholder="Grad" name="Grad" id="Grad" value="{{$destinacija->Grad}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Zemlja</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg"  placeholder="Zemlja" name="Zemlja" id="Zemlja" value="{{$destinacija->Zemlja}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Latitude</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg"  placeholder="Latitude" id="Latitude" name="Latitude" value="{{$destinacija->Latitude}}">
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
                                    <input type="text" class="form-control form-control-lg"  placeholder="Longitude" id="Longitude" name="Longitude" value="{{$destinacija->Longitude}}">
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
                                    <textarea name="Opisi" class="form-control form-control-lg" id="Opisi" rows="8" cols="80" value="{{$destinacija->Opisi}}"></textarea>
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
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block">
                            </div>
                        </div>
                    </div>
                    <br><br>
                </form>
        </div>
        </div>
    </div>
@endsection