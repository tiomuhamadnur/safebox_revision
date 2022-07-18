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
                        <h4 class="card-title"> Edit User</h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="/users/{{ $user->id }}" method="POST" nctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">
                                        Name
                                    </label>
                                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $user->name }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Email
                                    </label>
                                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $user->email }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Password
                                    </label>
                                    <input type="password" class="form-control" name="password" placeholder="Password" value="{{ $user->password }}">
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

                                <input class="btn btn-success" type="submit" name="submit" value="Save Changes">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection