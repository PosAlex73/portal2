<h4 class="d-flex justify-content-between align-items-center mb-3">
    <span class="text-muted">{{ __('vars.your_purchase') }}</span>
    <span class="badge badge-primary badge-pill">3</span>
</h4>
<ul class="list-group mb-3">
    <li class="list-group-item d-flex justify-content-between lh-condensed">
        <div>
            <h6 class="my-0">{{ __('vars.your_products') }}</h6>
            <small class="text-muted">{{ $product->title }}</small>
        </div>
        <span class="text-muted">
            <x-common.currency :value="$product->price" />
        </span>
    </li>
    <li class="list-group-item d-flex justify-content-between">
        <span>{{ __('vars.total') }} </span>
        <strong><x-common.currency :value="$product->price"/></strong>
    </li>
</ul>
