@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'users'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Add New User</h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="/users/store" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">
                                        Name
                                    </label>
                                    <input type="text" class="form-control" name="name" placeholder="Name" required autofocus>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Email
                                    </label>
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Password
                                    </label>
                                    <input type="password" class="form-control" name="password" placeholder="password" value="12345678">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Profile Picture
                                    </label>
                                    <input for="image" name="image" id="image" type="file" class="form-control @error('image') is-invalid @enderror" >
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
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