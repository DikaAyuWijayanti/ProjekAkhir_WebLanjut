@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a style="color:teal;" href="{{ url('/home') }}">Home</a></li>
                <li><a style="color:blue;"  href="{{ url('/admin/books') }}">Buku</a></li>
                <li style="color: violet;" class="active">Ubah Buku</li>
            </ul>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        <h2 style="color: violet;" class="panel-title">Ubah Buku</h2>
                    </h2>

                    <div class="panel-body">
                        {!! Form::model($book, ['url' => route('books.update', $book->id), 'method' => 'put', 'files' => 'true', 'class' => 'form-horizontal']) !!}
                        @include('books._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection