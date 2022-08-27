<div class="mb-2">
    <label for="">{{ __('vars.select_payment') }}</label>
    <select class="form-select" aria-label="Default select example" name="payment">
        @foreach($payments as $payment)
            <option
                value="{{ $payment::class }}" @if($selected && $selected === $payment->getTitle())
                selected @endif
            >{{ $payment->getTitle() }}</option>
        @endforeach
    </select>
</div>
