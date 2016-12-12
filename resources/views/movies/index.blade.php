@extends('admin_template')

@section('subtitle', '- Movies')

@section('customjs')
    <script src="{{ secure_asset ("/js/movies.js") }}" type="text/javascript"></script>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Movies</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('movies.create') }}"> <i class="fa fa-plus"></i> Add Movie</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <p>{{ $message }}</p>
        </div>
    @elseif ($message = Session::get('failure'))
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <div class="box">
        <div class="box-body">
            <table id="movieList" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Format</th>
                        <th>Length</th>
                        <th>Release Year</th>
                        <th>Rating</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($movies as $key => $movie)
                    <tr>
                        <td>
                            {{ $movie->title }}&nbsp;
                            <a href="{{ route('movies.show',$movie->id) }}"><i class="fa fa-info-circle"></i></a>&nbsp;
                        </td>
                        <td>{{ $movie->format }}</td>
                        <td>{{ lengthFormat($movie->length) }}</td>
                        <td>{{ $movie->year }}</td>
                        <td>{{ $movie->rating }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Format</th>
                        <th>Length</th>
                        <th>Release Year</th>
                        <th>Rating</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@stop