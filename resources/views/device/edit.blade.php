@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'device'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Edit Device</h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="/device/{{ $device->id }}" method="POST">
                                @method('put')
                                @csrf 
                                <div class="mb-3">
                                    <label class="form-label">
                                        Device Name
                                    </label>
                                    <input type="text" class="form-control" name="name" value="{{ $device->name }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Description
                                    </label>
                                    <textarea name="description" class="form-control" required>{{ $device->description }}</textarea>
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