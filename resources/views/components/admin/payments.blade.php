<div class="mb-2">
    <label for="">{{ __('vars.select_payment') }}</label>
    <select class="form-select" aria-label="Default select example">
        @foreach($payments as $payment)
            <option value="{{ $payment::class }}">{{ $payment->getTitle() }}</option>
        @endforeach
    </select>
</div>
