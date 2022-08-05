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
                        <h4 class="card-title"> Ubah Data Alat Rusak</h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="/alat-rusak/{{ $alat_rusak->id }}" method="POST">
                                @method('put')
                                @csrf 
                                {{-- <div class="mb-3">
                                    <label class="form-label">
                                        Nama Alat
                                    </label>
                                    <select class="form-control" aria-label="Default select example" name="alat_id">
                                        <option value="{{ $alat->id }}" selected disabled>{{ $alat->name }}</option>
                                    </select>
                                </div> --}}
                                <div class="mb-3">
                                    <label class="form-label">
                                        Qty
                                    </label>
                                    <input type="number" class="form-control" name="qty" value="{{ $alat_rusak->qty }}">
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