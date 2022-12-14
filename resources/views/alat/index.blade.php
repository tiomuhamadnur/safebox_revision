@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'alat'
])

@section('content')
@include('sweetalert::alert')

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
                                    <i class="nc-icon nc-settings"></i>
                                    Data Alat
                                </h4>
                                {{-- PENCARIAN --}}
                                {{-- <div class="col-12 col-sm-12 col-md-8">
                                    <form action="">
                                        <div class="input-group mb-1">
                                            <input type="text" class="form-control" name="keyword" placeholder="keyword . . ." aria-label="keyword . . ." aria-describedby="basic-addon1">
                                            <button class="input-group-text btn-success">
                                                <i class="nc-icon nc-zoom-split"></i>
                                                Cari
                                            </button>
                                        </div>
                                    </form>
                                </div> --}}
                                {{-- PENCARIAN --}}
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-primary" href="/alat/create" title="Tambah Data Alat">
                                    <i class="fa fa-plus"></i>
                                    Tambah Data Alat
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
                                        Nama
                                    </th>
                                    <th>
                                        ID Inventory
                                    </th>
                                    <th>
                                        UID Tag
                                    </th>
                                    <th>
                                        Tgl. Sertifikasi
                                    </th>
                                    <th>
                                        Tgl. Expired
                                    </th>
                                    <th>
                                        Tipe
                                    </th>
                                    <th>
                                        Stock
                                    </th>
                                    <th>
                                        Aksi
                                    </th>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($alat as $item)
                                    <tr>
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>
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
                                                    <i class="nc-icon nc-settings-gear-65" ></i>
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