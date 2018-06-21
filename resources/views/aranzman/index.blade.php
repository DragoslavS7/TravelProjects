@extends('master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                    <div class="box">Aranzmani!</div>
                    <br><br>
                <div class="add"><a href="{{ url('/aranzman/create') }}" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add</a></div>
                <br>
                <br>
                <table class="table table-striped" data-toggle="dataTable" data-form="deleteForm">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Destinacija</th>
                        <th>Kategorija</th>
                        <th>Prevoz</th>
                        <th>Hotel</th>
                        <th>Cena</th>
                        <th>Viza</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($aranzman as $post)
                        <tr>
                            <td>{{$post['id']}}</td>
                            <td>{{$post['Destinacija']}}</td>
                            <td>{{$post['Kategorija']}}</td>
                            <td>{{$post['Prevoz']}}</td>
                            <td>{{$post['Hotel']}}</td>
                            <td>{{$post['Cena']}}</td>
                            <td>{{$post['Viza']}}</td>
                            <td><a href="{{action('AranzmanController@edit', $post['id'])}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Edit</a></td>
                            <td>
                                <form action="{{action('AranzmanController@destroy', $post['id'])}}" method="post">
                                    {{csrf_field()}}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Delete</button>

                                    <!-- Modal -->
                                    <div id="myModal" class="modal fade" role="dialog">
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
                {!! $aranzman->render() !!}
        </div>
        </div>
    </div>
@endsection