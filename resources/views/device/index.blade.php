@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'warga'
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
                                <h4 class="card-title"> Devices</h4>
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-primary" href="/device/create" title="Tambah Data Warga"><i class="nc-icon nc-simple-add"></i>
                                    Add New
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary text-center">
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Token
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Aksi
                                    </th>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($warga as $w)
                                    <tr>
                                        <td>
                                            {{ $w->nama }}
                                        </td>
                                        <td>
                                            {{ $w->nik }}
                                        </td>
                                        <td>
                                            {{ $w->no_kk }}
                                        </td>
                                        <td class="text-center">
                                            {{ $w->jenis_kelamin }}
                                        </td>
                                        <td class="text-right">
                                            {{ $w->alamat }}
                                        </td>
                                        <td>
                                            <li class="nav dropdown">
                                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink2"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="nc-icon nc-paper"></i>
                                                </a>
                                                
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink2">
                                                    <a class="dropdown-item ubah" href="/warga/{{ $w->id }}/edit" title="Ubah Data">Ubah</a>
                                                    <form action="/warga/{{ $w->id }}" method="POST">
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