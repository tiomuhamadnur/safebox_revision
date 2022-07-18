@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'warga'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Tambah Data Warga</h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="/warga/store" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">
                                        Nama
                                    </label>
                                    <input type="text" class="form-control" name="nama" placeholder="Nama lengkap">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        NIK
                                    </label>
                                    <input type="text" class="form-control" name="nik" placeholder="Nomor Induk Kependudukan">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        No KK
                                    </label>
                                    <input type="text" class="form-control" name="no_kk" placeholder="Nomor Kartu Keluarga">
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
                                        Alamat
                                    </label>
                                    <textarea class="form-control" name="alamat" placeholder="Alamat lengkap"></textarea>
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