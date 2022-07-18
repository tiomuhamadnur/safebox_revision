@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'device'
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
                                <a class="btn btn-primary" href="/device/create" title="Add new device"><i class="fa fa-plus"></i>
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
                                        Action
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($devices as $device)
                                    <tr>
                                        <td>
                                            {{ $device->name }}
                                        </td>
                                        <td class="text-center">
                                            <b>{{ $device->token }}</b>
                                            <a class="btn btn-outline-success btn-sm" href="/device/{{ $device->id }}/token"><i class="nc-icon nc-refresh-69" title="Refresh Token Device"></i></a>
                                        </td>
                                        <td class="text-justify">
                                            <p>
                                                {{ $device->description }}
                                            </p>
                                        </td>
                                        <td>
                                            <li class="nav dropdown">
                                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink2"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="nc-icon nc-settings"></i>
                                                </a>
                                                
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink2">
                                                    <a class="dropdown-item ubah" href="/device/{{ $device->id }}/edit" title="Ubah Data">Ubah</a>
                                                    <form action="/device/{{ $device->id }}" method="POST">
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