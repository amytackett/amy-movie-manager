@extends('admin_template')

@section('subtitle', '- Movies')

@section('header', 'Movies')

@section('customjs')
    <script src="{{ secure_asset ("/js/movies.js") }}" type="text/javascript"></script>
@stop

@section('content')
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
                    <tr>
                        <td>Hunchback of Notre Dame</td>
                        <td>VHS</td>
                        <td>1:37</td>
                        <td>1997</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Hunchback of Notre Dame</td>
                        <td>VHS</td>
                        <td>1:37</td>
                        <td>1997</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Hunchback of Notre Dame</td>
                        <td>VHS</td>
                        <td>1:37</td>
                        <td>1997</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Hunchback of Notre Dame</td>
                        <td>VHS</td>
                        <td>1:37</td>
                        <td>1997</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Hunchback of Notre Dame</td>
                        <td>VHS</td>
                        <td>1:37</td>
                        <td>1997</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Hunchback of Notre Dame</td>
                        <td>VHS</td>
                        <td>1:37</td>
                        <td>1997</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Hunchback of Notre Dame</td>
                        <td>VHS</td>
                        <td>1:37</td>
                        <td>1997</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Hunchback of Notre Dame</td>
                        <td>VHS</td>
                        <td>1:37</td>
                        <td>1997</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Hunchback of Notre Dame</td>
                        <td>VHS</td>
                        <td>1:37</td>
                        <td>1997</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Hunchback of Notre Dame</td>
                        <td>VHS</td>
                        <td>1:37</td>
                        <td>1997</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Hunchback of Notre Dame</td>
                        <td>VHS</td>
                        <td>1:37</td>
                        <td>1997</td>
                        <td>4</td>
                    </tr>
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