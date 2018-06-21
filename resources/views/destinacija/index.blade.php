@extends('master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                    <div class="box">Destinacija!</div>
                    <br><br><br>
                <div class="add"><a href="{{ url('/destinacija/create') }}" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add</a></div>
                <br><br>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Grad</th>
                        <th>Zemlja</th>
                        <th>Opis</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Opis</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Destinacije as $post)
                        <tr>
                            <td>{{$post['id']}}</td>
                            <td>{{$post['Grad']}}</td>
                            <td>{{$post['Zemlja']}}</td>
                            <td>{{$post['Opisi']}}</td>
                            <td>{{$post['Latitude']}}</td>
                            <td>{{$post['Longitude']}}</td>
                            <td>{{$post['Opisi']}}</td>

                            <td><a href="{{action('DestinacijaController@edit', $post['id'])}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Edit</a></td>
                            <td>
                                <form action="{{action('DestinacijaController@destroy', $post['id'])}}" method="post">
                                    {{csrf_field()}}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#myDelete2"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Delete</button>

                                    <!-- Modal -->
                                    <div id="myDelete2" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Brisanje</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Da li ste sigurni?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Delete</button>
                                                    <button type="button" class="btn btn-succes" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <input type="hidden" class="form-control form-control-lg"  placeholder="Latitude" id="Latitude" name="Latitude" value="{{$post['Latitude']}}">
                <input type="hidden" class="form-control form-control-lg"  placeholder="Longitude" id="Longitude" name="Longitude" value="{{$post['Longitude']}}">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="mapCanvas"></div>
                    </div>
                </div>
                <br>
        </div>
        </div>
    </div>
@endsection