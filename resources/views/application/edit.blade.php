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
                        <h4 class="card-title"> Edit Application</h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="/application/{{ $application->id }}" method="POST">
                                @method('put')
                                @csrf 
                                <div class="mb-3">
                                    <label class="form-label">
                                        Application Name
                                    </label>
                                    <input type="text" class="form-control" name="name" value="{{ $application->name }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Description
                                    </label>
                                    <textarea name="description" class="form-control" required>{{ $application->description }}</textarea>
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