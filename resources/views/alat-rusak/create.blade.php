@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'alat-rusak'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Tambah Data Alat Rusak</h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="/alat-rusak/store" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">
                                        Nama Alat
                                    </label> <br>
                                    <select class="form-control" aria-label="Default select example" name="alat_id" required>
                                        <option disabled selected>Pilih Nama Alat</option>
                                        @foreach ($alat as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Qty
                                    </label>
                                    <input type="number" min="1" max="{{ $item->stock }}" class="form-control" name="qty">
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