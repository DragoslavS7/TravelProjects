@extends('master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Postavi sliku!</div>
                    <br><br><br>
                    <h2>{{ $user->name }}'s Profile</h2>
                    <div class="avatar">
                        <img src="{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">

                    </div>
                    <form enctype="multipart/form-data" action="/profile" method="POST">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="forma">
                                    <input type="file" name="avatar" class="pull-left btn btn-sm btn-primary">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="forma">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="forma">
                                    <input type="submit" class="pull-right btn btn-sm btn-primary" value="Izmeni sliku">
                                </div>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
