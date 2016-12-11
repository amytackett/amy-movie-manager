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
            <table id="example" class="table table-bordered table-striped">
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
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->format }}</td>
                        <td>{{ $movie->length }}</td>
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