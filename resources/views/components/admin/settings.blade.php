<form action="{{ route('settings.update') }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        @foreach($tabs as $tab)
            <li class="nav-item">
                <a class="nav-link @if($loop->first) active @endif"
                   id="home-tab"
                   data-bs-toggle="tab"
                   data-bs-target="#tab_{{$tab}}"
                   role="tab"
                   aria-controls="{{ $tab }}"
                   aria-selected="true">{{ __('vars.tabs_' . $tab) }}</a>
            </li>
        @endforeach
    </ul>
    <div class="tab-content border border-top-0 p-3" id="myTabContent">
        @foreach($tabs as $tab)
            <div class="tab-pane @if($loop->first) show active @else fade @endif" id="tab_{{$tab}}" role="tabpanel" aria-labelledby="home-tab">
                @foreach($settings[$tab] as $setting)
                    @if(in_array($setting->type, $selectable_types))
                        @include('fields.' . $setting->type,
                            ['name' => $setting->title,
                             'value' => $setting->value,
                             'variants' => $settings_schema[$setting->tab][$setting->title]['variants'],
                             'selected' => $setting->value
                            ]
                        )
                        @continue
                    @endif
                    @if(in_array($setting->type, $file_types))
                        @include('fields.' . $setting->type, ['name' => $setting->title, 'file' => $setting->value, 'path' => 'settings'])
                        @continue
                    @endif
                    @include('fields.' . $setting->type, ['name' => $setting->title, 'value' => $setting->value])
                @endforeach
            </div>
        @endforeach
    </div>
    <div class="m-2">
        @include('buttons.submit')
    </div>
</form>
