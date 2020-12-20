@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a style="color:teal;"  href="{{ url('/home') }}"><h3>Home</a></h3></li>
                <li style="color:turquoise;" class="active"><b>Ubah Profil</li></b>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 style="color:turquoise;" class="panel-title"><b>Ubah Profil</h2></b>
                </div>

                <div class="panel-body">
                    {!! Form::model(auth()->user(), ['url' => url('/settings/profile'), 'method' => 'post', 'class' => 'form-horizontal']) !!}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        {!! Form::label('name', 'Nama', ['class' => 'col-md-4 control-label']) !!}

                        <div class="col-md-6">
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}

                        <div class="col-md-6">
                            {!! Form::email('email', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection