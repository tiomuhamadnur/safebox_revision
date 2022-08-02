@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'pegawai'
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
                                <h4 class="card-title"> Data Pegawai</h4>
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-primary" href="/pegawai/create" title="Tambah Data Warga">
                                    Tambah Data Pegawai
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary text-center">
                                    <th>
                                        Nama
                                    </th>
                                    <th>
                                        NIK
                                    </th>
                                    <th>
                                        UID Card
                                    </th>
                                    <th>
                                        Jenis Kelamin
                                    </th>
                                    <th>
                                        Departement
                                    </th>
                                    <th>
                                        Section
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        No. HP
                                    </th>
                                    <th>
                                        Aksi
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($pegawai as $item)
                                    <tr>
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                        <td>
                                            {{ $item->nik }}
                                        </td>
                                        <td>
                                            {{ $item->uid }}
                                        </td>
                                        <td class="text-center">
                                            {{ $item->jenis_kelamin }}
                                        </td>
                                        <td class="text-right">
                                            {{ $item->departement }}
                                        </td>
                                        <td>
                                            {{ $item->section }}
                                        </td>
                                        <td>
                                            {{ $item->email }}
                                        </td>
                                        <td>
                                            {{ $item->no_hp }}
                                        </td>
                                        <td>
                                            <li class="nav dropdown">
                                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink2"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="nc-icon nc-paper"></i>
                                                </a>
                                                
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink2">
                                                    <a class="dropdown-item ubah" href="/pegawai/{{ $item->id }}/edit" title="Ubah Data">Ubah</a>
                                                    <form action="/pegawai/{{ $item->id }}" method="POST">
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