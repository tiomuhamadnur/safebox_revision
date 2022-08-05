@extends('layouts.app', [
    'class' => 'login-page',
    'elementActive' => ''
])

@section('content')
    <div class="content col-md-12 ml-auto mr-auto">
        <div class="header py-5 pb-7 pt-lg-9">
            <div class="container col-md-10">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-lg- col-md-12 pt-5">
                            <h1 class="@if(Auth::guest()) text-white @endif">
                                {{ __('Welcome to SAFEBOX') }} <br>
                                <!-- {{ __('SAFEBOX') }} -->
                            </h1>

                            <p class="@if(Auth::guest()) text-white @endif text-lead mt-3 mb-5">
                                {{ __('Integrated System for Tools & Materials Monitoring') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            demo.checkFullPageBackgroundImage();
        });
    </script>
@endpush
