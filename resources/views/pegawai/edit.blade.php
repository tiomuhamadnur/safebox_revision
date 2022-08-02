@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'pegawai'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Ubah Data Pegawai</h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="/pegawai/{{ $pegawai->id }}" method="POST">
                                @method('put')
                                @csrf 
                                <div class="mb-3">
                                    <label class="form-label">
                                        Nama
                                    </label>
                                    <input type="text" class="form-control" name="name" value="{{ $pegawai->name }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        NIK
                                    </label>
                                    <input type="text" class="form-control" name="nik" value="{{ $pegawai->nik }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        UID Card
                                    </label>
                                    <input type="text" class="form-control" name="uid" value="{{ $pegawai->uid }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Jenis Kelamin
                                    </label> <br>
                                    <select class="form-control" aria-label="Default select example" name="jenis_kelamin">
                                        <option>Pilih jenis kelamin</option>
                                        <option value="L" @if ($pegawai->jenis_kelamin =="L") selected @endif>Laki-laki</option>
                                        <option value="P" @if ($pegawai->jenis_kelamin =="P") selected @endif>Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Departement
                                    </label>
                                    <input type="text" class="form-control" name="departement" value="{{ $pegawai->departement }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Section
                                    </label>
                                    <input type="text" class="form-control" name="section" value="{{ $pegawai->section }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Email
                                    </label>
                                    <input type="text" class="form-control" name="email" value="{{ $pegawai->email }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        No. HP
                                    </label>
                                    <input type="text" class="form-control" name="no_hp" value="{{ $pegawai->no_hp }}">
                                </div>
                                <input class="btn btn-success" type="submit" name="submit" value="Ubah">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection