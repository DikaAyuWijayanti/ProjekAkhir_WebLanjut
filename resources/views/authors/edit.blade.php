@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a style="color:teal;" href="{{ url('/home') }}">Home</a></li>
                <li><a style="color:green;" href="{{ url('/admin/authors') }}">Penulis</a></li>
                <li style="color:blue;"  class="active">Ubah Penulis</li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 style="color:blue;" class="panel-title">Ubah Penulis</h2>
                </div>

                <div class="panel-body">
                    {!! Form::model($author, ['url' => route('authors.update', $author->id), 'method' => 'put', 'class' => 'form-horizontal']) !!}
                    @include('authors._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
