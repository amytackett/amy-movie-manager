@extends('admin_template')

@section('subtitle', '- Add Movie')

@section('customjs')
    <script src="{{ secure_asset ("/js/movies.js") }}" type="text/javascript"></script>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Movie</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('movies.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(array('route' => 'movies.store','method'=>'POST')) !!}
    <div class="row col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control required')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Format:</strong>
                {!! Form::select('format', ['Streaming' => 'Streaming', 'DVD' => 'DVD', 'VHS' => 'VHS']); !!}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Length:</strong>
                {!! Form::text('length', null, array('placeholder' => 'Length in minutes (1 - 499)','class' => 'form-control required')) !!}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Release Year:</strong>
                {!! Form::text('year', null, array('placeholder' => 'YYYY (1801 - 2099)','class' => 'form-control required')) !!}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rating:</strong>
                {!! Form::radio('rating', '1'); !!}
                {!! Form::label('1', null, ['class' => 'control-label']); !!}
                &nbsp;
                {!! Form::radio('rating', '2'); !!}
                {!! Form::label('2', null, ['class' => 'control-label']); !!}
                &nbsp;
                {!! Form::radio('rating', '3'); !!}
                {!! Form::label('3', null, ['class' => 'control-label']); !!}
                &nbsp;
                {!! Form::radio('rating', '4'); !!}
                {!! Form::label('4', null, ['class' => 'control-label']); !!}
                &nbsp;
                {!! Form::radio('rating', '5'); !!}
                {!! Form::label('5', null, ['class' => 'control-label']); !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection