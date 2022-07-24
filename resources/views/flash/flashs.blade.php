@php
    $flash = session()->get('flash')
@endphp

@if($flash)
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        @foreach($flash as $message)
            <p>{{ $message }}</p>
        @endforeach
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
    </div>
@endif
