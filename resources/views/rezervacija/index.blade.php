@extends('master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                    <div class="box">Rezervacije!</div>
                    <br> <br> <br>
                <div class="add"><a href="{{ url('/rezervacija/create') }}" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add</a></div>
                <br>
                <div class="row">
                    <div class="col-sm-3">
                        <a class="social-share" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"
                           target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/facebook.png" border="0" alt="Facebook"/>
                            Share on Facebook
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a class="social-share" href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}"
                           target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/twitter.png" border="0" alt="Twitter"/>
                            Share on Twitter
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a class="social-share" href="https://plus.google.com/share?url={{ urlencode(Request::fullUrl()) }}"
                           target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/google_plusone_share.png" border="0" alt="Google+"/>
                            Share on Google
                        </a>
                    </div>
                </div>
                <br>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>JMBG</th>
                        <th>Telefon</th>
                        <th>Od</th>
                        <th>Do</th>
                        <th>Adresa</th>
                        <th>Soba</th>
                        <th>Aranzman</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rezervacijas as $post)
                        <tr>
                            <td>{{$post['id']}}</td>
                            <td>{{$post['ImeKorisnika']}}</td>
                            <td>{{$post['PrezimeKorisnika']}}</td>
                            <td>{{$post['JMBG']}}</td>
                            <td>{{$post['Telefon']}}</td>
                            <td>{{$post['Od']}}</td>
                            <td>{{$post['Do']}}</td>
                            <td>{{$post['Adresa']}}</td>
                            <td>{{$post['Soba']}}</td>
                            <td>{{$post['Aranzman']}}</td>
                            <td><a href="{{action('RezervacijaController@edit', $post['id'])}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Edit</a></td>
                            <td>
                                <form action="{{action('RezervacijaController@destroy', $post['id'])}}" method="post">
                                    {{csrf_field()}}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#myDelete4"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Delete</button>


                                    <!-- Modal -->
                                    <div id="myDelete4" class="modal fade" role="dialog">
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