@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'application'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Add New Application</h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="/application/store" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">
                                        Application Name
                                    </label>
                                    <input type="text" class="form-control" name="name" autocomplete="off" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Description
                                    </label>
                                    <textarea class="form-control" name="description"></textarea>
                                </div>
                                <input class="btn btn-success" type="submit" name="submit" value="Save">
                                <div class="toast align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection