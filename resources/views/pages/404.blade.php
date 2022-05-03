@extends('layouts.simple')
@section('content')
<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-8">
                    <div class="form-input-content text-center error-page">
                        <h1 class="error-text font-weight-bold">404</h1>
                        <h4><i class="fa fa-exclamation-triangle text-warning"></i> The page you were looking for is not found!</h4>
                        <p>You may have mistyped the address or the page may have moved.</p>
                        <div>
                            <a class="btn btn-primary" href="{{ route('/') }}">{{ __('vars.go_back') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
