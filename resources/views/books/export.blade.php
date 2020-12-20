@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a style="color:teal;" href="{{ url('/home') }}">Home</a></li>
                <li><a style="color:blue;"  href="{{ url('/admin/books') }}">Buku</a></li>
                <li style="color:maroon;" class="active">Export Buku</li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 style="color:maroon;" class="panel-title">Export Buku</h2>
                </div>

                <div class="panel-body">
                    {!! Form::open(['url' => route('export.books.post'), 'method' => 'post', 'class' => 'form-horizontal']) !!}

                    <div class="form-group {!! $errors->has('author_id') ? 'has-error' : '' !!}">
                        {!! Form::label('author_id', 'Penulis', ['class' => 'col-md-2 control-label']) !!}

                        <div class="col-md-4">
                            {!! Form::select('author_id[]', ['' => '']+App\Author::pluck('name', 'id')->all(), null, ['class' => 'js-selectize', 'multiple', 'placeholder' => 'Pilih Penulis']) !!}

                            {!! $errors->first('author_id', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group {!! $errors->has('type') ? 'has-error' : '' !!}">
                        {!! Form::label('type', 'Pilih Output', ['class' => 'col-md-2 control-label']) !!}

                        <div class="col-md-4 checkbox">
                            <!--{!! Form::radio('type', 'xls', true) !!} Excel!-->
                            {!! Form::radio('type', 'pdf') !!} PDF
                            {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-2">
                            {!! Form::submit('Download', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
