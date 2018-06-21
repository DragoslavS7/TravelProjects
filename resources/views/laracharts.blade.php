@extends('master')

@section('content')
    <div class="container">
        <div class ="row">
            <div class="col-sm-12">
                <div id="pop-div" style="border:1px solid black"></div>
                <?= $lava->render('GeoChart', 'Popularity', 'pop-div') ?>
            </div>
        </div>
    </div>


@endsection