@extends('admin_template')

@section('subtitle', '- Movies')

@section('header', 'Movies')

@section('customjs')
    <script src="{{ secure_asset ("/js/movies.js") }}" type="text/javascript"></script>
@stop

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible">
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
                        <td>{{ $movie->title }} <a href="{{ route('movies.show',$movie->id) }}"><i class="fa fa-info-circle"></i></a></td>
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