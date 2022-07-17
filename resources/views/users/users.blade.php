@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'users'
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
                                <h4 class="card-title"> Data User</h4>
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-primary" href="/users/create" title="Tambah Data Warga">
                                    Tambah User
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                    <th>
                                        Nama
                                    </th>
                                    <th>
                                        email
                                    </th>
                                    <th>
                                        Aksi
                                    </th>
                                    
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            {{ $user->name }}
                                        </td>
                                        <td>
                                            {{ $user->email }}
                                        </td>
                                        <td class="text-center">
                                            {{-- <div class="btn-group" role="group">
                                                <a type="button" class="btn btn-warning btn-sm" href="/users/{{ $user->id }}/edit" title="Ubah Data">Ubah</a>
                                                <form type="button" action="/users/{{ $user->id }}" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <input class="btn btn-danger btn-sm" type="submit" value="Hapus" title="Hapus Data">
                                                </form>
                                            </div> --}}
                                            <li class="nav dropdown" title="Kelola Data">
                                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink2"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="nc-icon nc-paper"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink2">
                                                    <a class="dropdown-item" href="/users/{{ $user->id }}/edit" title="Ubah Data">Ubah</a>
                                                    <form action="/users/{{ $user->id }}" method="POST">
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