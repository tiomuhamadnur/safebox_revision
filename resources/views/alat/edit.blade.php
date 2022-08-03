@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'alat'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Ubah Data Alat</h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="/alat/{{ $alat->id }}" method="POST">
                                @method('put')
                                @csrf 
                                <div class="mb-3">
                                    <label class="form-label">
                                        Nama
                                    </label>
                                    <input type="text" class="form-control" name="name" value="{{ $alat->name }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        ID Inventory
                                    </label>
                                    <input type="text" class="form-control" name="id_inventory" value="{{ $alat->id_inventory }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        UID Tag (Default)
                                    </label>
                                    <input type="text" class="form-control font-weight-bold" name="uid" value="{{ $alat->uid }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Tgl. Sertifikasi
                                    </label>
                                    <input type="date" class="form-control" name="tgl_sertifikasi" value="{{ $alat->tgl_sertifikasi }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Tgl. Expired
                                    </label>
                                    <input type="date" class="form-control" name="tgl_expired" value="{{ $alat->tgl_expired }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Tipe
                                    </label> <br>
                                    <select class="form-control" aria-label="Default select example" name="tipe">
                                        <option disabled>Pilih Tipe Alat</option>
                                        <option value="consumable" @if ($alat->tipe =="consumable") selected @endif>Consumable</option>
                                        <option value="non-consumable" @if ($alat->tipe =="non-consumable") selected @endif>Non-Consumable</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Stock
                                    </label>
                                    <input type="text" class="form-control" name="stock" value="{{ $alat->stock }}">
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