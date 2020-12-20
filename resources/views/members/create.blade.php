@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a style="color:teal;" href="{{ url('/home') }}">Home</a></li>
                <li><a style="color:coral;" href="{{ url('/admin/members') }}">Member</a></li>
                <li style="color:coral;"  class="active">Tambah Member</li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 style="color:coral;"  class="panel-title">Tambah Member</h2>
                </div>

                <div class="panel-body">
                    {!! Form::open(['url' => route('members.store'), 'method' => 'post', 'files' => 'true', 'class' => 'form-horizontal']) !!}

                    @include('members._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection