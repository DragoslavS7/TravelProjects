<!-- CREATE.blade.php -->

@extends('master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                    <div class="box">Kreirajte!</div>
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
                    <form method="post" action="{{url('aranzman')}}">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{csrf_field()}}
                                    <label for="Destinacija" class="col-sm-2 col-form-label col-form-label-lg">Destinacija *</label>
                                    <div class="col-sm-10">
                                        <select class="form-control form-control-lg" name="Destinacija">
                                            <option>PARIZ</option>
                                            <option>BUDIMPESTA</option>
                                            <option>RIM</option>
                                        </select>
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="Kategorija" class="col-sm-2 col-form-label col-form-label-lg">Kategorija *</label>
                                    <div class="col-sm-10">
                                        <select class="form-control form-control-lg" name="Kategorija" id="Kategorija">
                                            <option>Kategorija</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="Prevoz" class="col-sm-2 col-form-label col-form-label-lg">Prevoz *</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-lg" id="Prevoz" placeholder="Prevoz" name="Prevoz">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="Hotel" class="col-sm-2 col-form-label col-form-label-lg">Hotel *</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-lg" id="Hotel" placeholder="Hotel" name="Hotel">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="Cena" class="col-sm-2 col-form-label col-form-label-lg">Cena *</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-lg" id="Hotel" placeholder="Cena" name="Cena">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="Viza" class="col-sm-2 col-form-label col-form-label-lg">Viza *  </label>
                                    <div class="col-sm-10">
                                        <select class="form-control form-control-lg" name="Viza" id="Viza">
                                            <option>DA</option>
                                            <option>NE</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="forma">
                                    <input type="submit" name="submitAranz" class="btn btn-primary btn-block" value="Add">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="box"><p style="color:#337ab7;text-align: center;">Polja koja su obelezena sa ( * ) su obavezna</p></div>
            </div>
        </div>
    </div>


@endsection