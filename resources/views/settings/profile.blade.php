@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a style="color:teal;" href="{{ url('/home') }}"><h3>Home</a></h3></li>
                <li style="color:violet;" class="active"><b>Profil</li></b>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 style="color:violet;" class="panel-title"><b>Profil</h1></b>
                </div>

                <div class="panel-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td style="color:DeepSkyBlue;" class="text-muted">Nama</td>
                                <td>{{ auth()->user()->name }}</td>
                            </tr>
                            <tr>
                                <td style="color:DeepSkyBlue;" class="text-muted">Email</td>
                                <td>{{ auth()->user()->email }}</td>
                            </tr>
                            <tr>
                                <td style="color:DeepSkyBlue;" class="text-muted">Login terakhir</td>
                                <td>{{ auth()->user()->last_login }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a class="btn btn-primary" href="{{ url('/settings/profile/edit') }}">Ubah</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection