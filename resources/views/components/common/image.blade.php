<img src="@if($image && !filter_var($image, FILTER_VALIDATE_URL)){{ asset('c' . $image) }}@elseif($image){{ $image }}@else{{ asset('images/no_image.jpg') }}@endif"
     class="img-fluid rounded m-2"
     alt="{{ $alt ?? '' }}"
     width="{{ $w ?? 250 }}"
     height="{{ $h ?? 250 }}"
>
