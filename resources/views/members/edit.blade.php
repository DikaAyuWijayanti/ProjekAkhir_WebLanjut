@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a style="color:teal;" href="{{ url('/home') }}">Home</a></li>
                <li><a style="color:coral;" href="{{ url('/admin/members') }}">Member</a></li>
                <li style="color:indigo;" class="active">Ubah Member</li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 style="color:indigo;" class="panel-title">Ubah Member</h2>
                </div>

                <div class="panel-body">
                    {!! Form::model($member, ['url' => route('members.update', $member->id), 'method' => 'put', 'class' => 'form-horizontal']) !!}
                    
                    @include('members._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
