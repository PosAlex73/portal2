@php
    $flash = session()->get('flash');
    $error = session()->get('error');
@endphp

@if($flash)
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        @foreach($flash as $message)
            <p>{{ $message }}</p>
        @endforeach
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
    </div>
@endif

@if($error)
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        @foreach($error as $message)
            <p>{{ $message }}</p>
        @endforeach
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
    </div>
@endif

