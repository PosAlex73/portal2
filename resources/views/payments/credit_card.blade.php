<div class="d-block my-3">
    <div class="form-check custom-radio mb-2">
        <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
        <label class="form-check-label" for="credit">Credit card</label>
    </div>
    <div class="form-check custom-radio mb-2">
        <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
        <label class="form-check-label" for="debit">Debit card</label>
    </div>
    <div class="form-check custom-radio mb-2">
        <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
        <label class="form-check-label" for="paypal">Paypal</label>
    </div>
</div>
<div class="row">
    <div class="col-md-6 mb-3">
        <label for="cc-name" class="form-label">Name on card</label>
        <input type="text" class="form-control" id="cc-name" placeholder="" required="">
        <small class="text-muted">Full name as displayed on card</small>
        <div class="invalid-feedback">
            Name on card is required
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <label for="cc-number" class="form-label">Credit card number</label>
        <input type="text" class="form-control" id="cc-number" placeholder="" required="">
        <div class="invalid-feedback">
            Credit card number is required
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3 mb-3">
        <label for="cc-expiration" class="form-label">Expiration</label>
        <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
        <div class="invalid-feedback">
            Expiration date required
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <label for="cc-expiration" class="form-label">CVV</label>
        <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
        <div class="invalid-feedback">
            Security code required
        </div>
    </div>
</div>
