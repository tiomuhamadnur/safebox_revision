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
                        <h4 class="card-title"> Ubah Data Warga</h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="/warga/{{ $warga->id }}" method="POST">
                                @method('put')
                                @csrf 
                                <div class="mb-3">
                                    <label class="form-label">
                                        Nama
                                    </label>
                                    <input type="text" class="form-control" name="nama" placeholder="Nama lengkap" value="{{ $warga->nama }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        NIK
                                    </label>
                                    <input type="text" class="form-control" name="nik" placeholder="Nomor Induk Kependudukan" value="{{ $warga->nik }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        No KK
                                    </label>
                                    <input type="text" class="form-control" name="no_kk" placeholder="Nomor Kartu Keluarga" value="{{ $warga->no_kk }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Jenis Kelamin
                                    </label> <br>
                                    <select class="form-control" aria-label="Default select example" name="jenis_kelamin">
                                        <option>Pilih jenis kelamin</option>
                                        <option value="L" @if ($warga->jenis_kelamin =="L") selected @endif>Laki-laki</option>
                                        <option value="P" @if ($warga->jenis_kelamin =="P") selected @endif>Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Alamat
                                    </label>
                                    <textarea name="alamat" cols="107" rows="3" placeholder="Alamat lengkap" value="{{ $warga->alamat }}">{{ $warga->alamat }}</textarea>
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