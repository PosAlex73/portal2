<li>
    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
        <i class="flaticon-144-layout"></i>
        <span class="nav-text">{{ $item->title }}</span>
    </a>
    <ul aria-expanded="false">
        @foreach($item->group as $group)
            <li><a href="{{ route($group) }}">{{ __('vars.' . $group) }}</a></li>
        @endforeach
    </ul>
</li>
