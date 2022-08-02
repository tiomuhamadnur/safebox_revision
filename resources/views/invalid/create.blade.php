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
                        <h4 class="card-title"> Tambah Data Pegawai</h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="/pegawai/store" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">
                                        Nama
                                    </label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        NIK
                                    </label>
                                    <input type="text" class="form-control" name="nik">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        UID Card
                                    </label>
                                    <input type="text" class="form-control" name="uid">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Jenis Kelamin
                                    </label> <br>
                                    <select class="form-control" aria-label="Default select example" name="jenis_kelamin">
                                        <option>Pilih jenis kelamin</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Departement
                                    </label>
                                    <input type="text" class="form-control" name="departement">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Section
                                    </label>
                                    <input type="text" class="form-control" name="section">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Email
                                    </label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        No. Hp
                                    </label>
                                    <input type="text" class="form-control" name="no_hp">
                                </div>

                                <input class="btn btn-success" type="submit" name="submit" value="Simpan">
                                <div class="toast align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection