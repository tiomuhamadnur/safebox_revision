@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'sirkulasi'
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
                                    <i class="nc-icon nc-refresh-69"></i>
                                    Data Sirkulasi
                                </h4>
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-success" href="#" title="Export Data Sirkulasi">
                                    <i class="nc-icon nc-send"></i>
                                    Export
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary text-center">
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Nama Peminjam
                                    </th>
                                    <th>
                                        Nama Alat
                                    </th>
                                    <th>
                                        ID Inventory
                                    </th>
                                    <th>
                                        Tgl. Expired
                                    </th>
                                    <th>
                                        Waktu Peminjaman
                                    </th>
                                    <th>
                                        Waktu Pengembalian
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($sirkulasi as $item)
                                    <tr>
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="text-left">
                                            {{ $item->pegawai->name }}
                                        </td>
                                        <td class="text-left">
                                            {{ $item->alat->name }}
                                        </td>
                                        <td class="text-left">
                                            {{ $item->alat->id_inventory }}
                                        </td>
                                        <td>
                                            {{ $item->alat->tgl_expired }}
                                        </td>
                                        <td>
                                            {{ $item->created_at }}
                                        </td>
                                        <td>
                                            {{ $item->updated_at }}
                                        </td>
                                        <td>
                                            {{ $item->status }}
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