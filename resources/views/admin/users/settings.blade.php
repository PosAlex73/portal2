@extends('layouts.admin')
@section('content')
    @include('flash.errors')
    <div class="card">
        <x-admin.user-tabs :user="$user" />
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('users.settings.update', ['user_settings' => $settings]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            @foreach($user_setting_tabs as $tab => $_)
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link @if($loop->first) active @endif"
                                    id="home-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#{{ $tab }}"
                                    type="button" role="tab"
                                    aria-controls="home"
                                    aria-selected="true">{{ __('vars.' . $tab) }}
                                </button>
                            </li>
                            @endforeach
                        </ul>
                    <div class="tab-content my-3" id="myTabContent">
                        @foreach($user_setting_tabs as $tab => $fields)
                            <div class="tab-pane fade show @if($loop->first) active @endif" id="{{ $tab }}" role="tabpanel" aria-labelledby="home-tab">
                                @foreach($fields as $field_name => $field)
                                    @include('fields.' . $field['type'], ['name' => $field_name, 'value' => $settings[$field_name] === \App\Enums\CommonStatuses::ACTIVE])
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    @include('buttons.submit')
                </form>
            </div>
        </div>
    </div>

@endsection
