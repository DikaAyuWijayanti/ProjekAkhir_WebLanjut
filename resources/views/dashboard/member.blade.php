@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h2 style="color:teal;" class="panel-title"><b>Home</h2></b>
                </div>
               <img src="img/admin.jpg" class="card-img-top" height="300" width="1138"></a><div style="color:green;"><h2 style ="font-family: lucida calligraphy;" 
                style="text-align: center;" >
                <div style="color:charcoal;">
                <div class="panel-body">
                <div style="text-align: center;">Selamat Datang di E- Perpus Ceria Universitas Mandala Jaya</h2>

                    <table class="table">
                        <tbody>
                            <tr>
                                <br><td style="color:green;" class="text-muted">Buku dipinjam</td>
                                <td>
                                    @if ($borrowLogs->count() == 0)
                                        Tidak ada buku dipinjam
                                    @endif
                                    <ul>
                                        @foreach ($borrowLogs as $borrowLog)
                                            <li>
                                                {!! Form::open(['url' => route('member.books.return', $borrowLog->book_id), 'method' => 'put', 'class' => 'form-inline js-confirm', 'data-confirm' => "Anda yakin hendak mengembalikan " . $borrowLog->book->title . "?"]) !!}
                                            
                                                    {{ $borrowLog->book->title }}
                                                    {!! Form::submit('Kembalikan', ['class' => 'btn btn-xs btn-default']) !!}

                                                {!! Form::close() !!}
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

