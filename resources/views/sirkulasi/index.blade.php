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
                                <h4 class="card-title"> Data Sirkulasi</h4>
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
                                    {{-- @foreach ($alat as $item)
                                    <tr>
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                        <td>
                                            {{ $item->id_inventory }}
                                        </td>
                                        <td>
                                            {{ $item->uid }}
                                        </td>
                                        <td>
                                            {{ $item->tgl_sertifikasi }}
                                        </td>
                                        <td>
                                            {{ $item->tgl_expired }}
                                        </td>
                                        <td>
                                            {{ $item->tipe }}
                                        </td>
                                        <td>
                                            {{ $item->stock }}
                                        </td>
                                        <td>
                                            <li class="nav dropdown">
                                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink2"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="nc-icon nc-settings-gear-65"></i>
                                                </a>
                                                
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink2">
                                                    <a class="dropdown-item ubah" href="/alat/{{ $item->id }}/edit" title="Ubah Data">Ubah</a>
                                                    <form action="/alat/{{ $item->id }}" method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <input class="dropdown-item" type="submit" value="Hapus" title="Hapus Data">
                                                    </form>
                                                </div>
                                            </li>
                                        </td>
                                    </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection