@php
    $icon = !empty($item->icon) ? $item->icon : 'box';
    $link = route($item->link)
@endphp

<li><a href="{{ $link }}" class="ai-icon" aria-expanded="false">
        <i class="flaticon-381-settings-2"></i>
        <span class="nav-text">{{ $item->title }}</span>
    </a>
</li>
