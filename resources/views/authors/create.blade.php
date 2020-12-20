@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a style="color:teal;" href="{{ url('/home') }}">Home</a></li>
                <li><a style="color:blue;" href="{{ url('/admin/authors') }}">Penulis</a></li>
                <li style="color:skyblue;" class="active">Tambah Penulis</li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 style="color:skyblue;" class="panel-title">Tambah Penulis</h2>
                </div>

                <div class="panel-body">
                    {!! Form::open(['url' => route('authors.store'), 'method' => 'post', 'class' => 'form-horizontal']) !!}
                    @include('authors._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
