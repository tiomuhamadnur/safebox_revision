@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'invalid'
])

@section('content')
    <div class="content">
        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" aria-hidden="true" class="close" data-dismiss="alert"
                aria-label="Close">
                <i class="nc-icon nc-simple-remove"></i>
            </button>
            <span>{{ session('status') }}</span>
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-item-center">
                            <div class="col-8">
                                <h4 class="card-title">
                                    <i class="nc-icon nc-simple-remove"></i>
                                    Data Invalid</h4>
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-warning" href="#" title="Hapus seluruh data invalid">
                                    <i class="fa fa-trash"></i>
                                    Hapus Data Invalid
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead class="text-primary text-center">
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        UID Card
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Waktu
                                    </th>
                                    <th>
                                        Aksi
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($invalid as $item)
                                    <tr>
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>
                                            {{ $item->uid }}
                                        </td>
                                        <td>
                                            {{ $item->status }}
                                        </td>
                                        <td>
                                            {{ $item->created_at }}
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <form action="/invalid/{{ $item->id }}" method="POST">
                                                    @method('get')
                                                    @csrf
                                                    <input class="btn btn-success" type="submit" value="Daftarkan" title="Daftarkan Kartu Pegawai">
                                                </form>
                                                <form action="/invalid/{{ $item->id }}" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <input class="btn btn-danger" type="submit" value="Hapus" title="Hapus Data">
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection