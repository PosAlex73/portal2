<ul class="nav nav-pills m-4">
    @foreach($tabs as $tab)
        <li class="nav-item">
            <a
                href="{{ route($tab, [$item => $course]) }}"
                class="nav-link @if(\Illuminate\Support\Facades\Route::currentRouteName() === $tab) active @endif"
                aria-expanded="false">{{ __('vars.route_' . $tab) }}
            </a>
        </li>
    @endforeach
</ul>
