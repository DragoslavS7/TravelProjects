@extends('master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                    <div class="box">Radnik!</div>
                    <br><br><br>

                <div class="add"><a href="{{ url('/radnik/create') }}" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add</a></div>
                <br><br>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ime</th>
                        <th>Sifra</th>
                        <th>JMBG</th>
                        <th>Adresa</th>
                        <th>Telefon</th>
                        <th>Strucna Sprema</th>
                        <th>Pozicija</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($radnik as $post)
                        <tr>
                            <td>{{$post['id']}}</td>
                            <td>{{$post['RadnikIme']}}</td>
                            <td>{{$post['Sifra']}}</td>
                            <td>{{$post['RadnikJMBG']}}</td>
                            <td>{{$post['Adresa']}}</td>
                            <td>{{$post['Telefon']}}</td>
                            <td>{{$post['SSprema']}}</td>
                            <td>{{$post['Pozicija']}}</td>
                            <td><a href="{{action('RadnikController@edit', $post['id'])}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Edit</a></td>
                            <td>
                                <form action="{{action('RadnikController@destroy', $post['id'])}}" method="post">
                                    {{csrf_field()}}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#myDelete3"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Delete</button>

                                    <!-- Modal -->
                                    <div id="myDelete3" class="modal fade" role="dialog">
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
        </div>
        </div>
    </div>
@endsection