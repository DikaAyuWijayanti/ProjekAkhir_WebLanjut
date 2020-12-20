@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a style="color:teal;" href="{{ url('/home') }}">Dashboard</a></li>
                <li><a style="color:coral;" href="{{ url('/admin/members') }}">Member</a></li>
                <li style="color:coral;" class="active">Detail {{ $member->name }}</li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 style="color:coral;" class="panel-title">Detail {{ $member->name }}</h2>
                </div>

                <div class="panel-body">
                    <p style="color:green;">Buku yang sedang dipinjam:</p>

                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <td style="color:olive;">Judul</td>
                                <td style="color:olive;">Tanggal Peminjaman</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($member->borrowLogs()->borrowed()->get() as $log)
                                <tr>
                                    <td>{{ $log->book->title }}</td>
                                    <td>{{ $log->created_at }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td style="color:olive;" colspan="2">Tidak ada data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <p style="color:green;">Buku yang telah dikembalikan:</p>

                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <td style="color:olive;">Judul</td>
                                <td style="color:olive;">Tanggal Kembali</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($member->borrowLogs()->returned()->get() as $log)
                                <tr>
                                    <td>{{ $log->book->title }}</td>
                                    <td>{{ $log->updated_at }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td style="color:olive;" colspan="2">Tidak ada data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
