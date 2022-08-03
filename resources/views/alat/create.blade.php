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
                        <h4 class="card-title"> Tambah Data Alat</h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="/alat/store" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">
                                        Nama
                                    </label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        ID Inventory
                                    </label>
                                    <input type="text" class="form-control" name="id_inventory">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        UID Tag
                                    </label>
                                    <input type="text" class="form-control" name="uid">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Tgl. Sertifikasi
                                    </label>
                                    <input type="date" class="form-control" name="tgl_sertifikasi">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Tgl. Expired
                                    </label>
                                    <input type="date" class="form-control" name="tgl_expired">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Tipe
                                    </label> <br>
                                    <select class="form-control" aria-label="Default select example" name="tipe">
                                        <option disabled>Pilih Tipe Alat</option>
                                        <option value="consumable">Consumable</option>
                                        <option value="non-consumable">Non-Consumable</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Stock (Qty)
                                    </label>
                                    <input type="text" class="form-control" name="stock">
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