<!-- edit.blade.php -->

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
                <form method="post" action="{{action('AranzmanController@update', $id)}}">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="PATCH">
                                <label for="Destinacija" class="col-sm-2 col-form-label col-form-label-lg">Destinacija</label>
                                <div class="col-sm-10">
                                    <select class="form-control form-control-lg" name="Destinacija" id="Destinacija" value="{{$aranzman->Destinacija}}">
                                        <option>PARIZ</option>
                                        <option>BUDIMPESTA</option>
                                        <option>RIM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="Kategorija" class="col-sm-2 col-form-label col-form-label-lg">Kategorija</label>
                                <div class="col-sm-10">
                                    <select class="form-control form-control-lg" name="Kategorija" id="Kategorija" value="{{$aranzman->Kategorija}}">
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
                                <label for="Prevoz" class="col-sm-2 col-form-label col-form-label-lg">Prevoz</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="Prevoz" placeholder="Prevoz" name="Prevoz" value="{{$aranzman->Prevoz}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="Hotel" class="col-sm-2 col-form-label col-form-label-lg">Hotel</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="Hotel" placeholder="Hotel" name="Hotel" value="{{$aranzman->Hotel}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="Cena" class="col-sm-2 col-form-label col-form-label-lg">Cena</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="Hotel" placeholder="Cena" name="Cena" value="{{$aranzman->Cena}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="Viza" class="col-sm-2 col-form-label col-form-label-lg">Viza</label>
                                <div class="col-sm-10">
                                    <select class="form-control form-control-lg" name="Viza" id="Viza" value="{{$aranzman->Viza}}">
                                        <option>DA</option>
                                        <option>NE</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block" value="Update">
                            </div>
                        </div>
                    </div>
                </form>
        </div>
        </div>
    </div>


@endsection