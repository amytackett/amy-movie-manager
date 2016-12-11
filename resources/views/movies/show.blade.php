@extends('admin_template')

@section('subtitle', '- Show Movie')

@section('header', 'Show Movie')

@section('customjs')
    <script src="{{ secure_asset ("/js/movies.js") }}" type="text/javascript"></script>
@stop

@section('content')
       <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $movie->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Format:</strong>
                {{ $movie->format }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Length:</strong>
                {{ lengthFormat($movie->length) }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Release Year:</strong>
                {{ $movie->year }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rating:</strong>
                {{ $movie->rating }}
            </div>
        </div>
    </div>
@stop