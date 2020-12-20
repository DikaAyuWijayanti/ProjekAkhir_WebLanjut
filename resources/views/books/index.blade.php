@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a style="color:teal;" href="{{ url('/home') }}">Home</a></li>
                <li style="color:blue;"  class="active">Buku</li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 style="color:blue;"  class="panel-title">Buku</h2>
                </div>

                <div class="panel-body">
                    <p>
                        <a class="btn btn-primary" href="{{ url('/admin/books/create') }}">Tambah</a>
                        <a class="btn btn-primary" href="{{ url('/admin/export/books') }}">Export</a>
                    </p>

                    {!! $html->table(['class' => 'table table-striped']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    {!! $html->scripts() !!}
@endsection
