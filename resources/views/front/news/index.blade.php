@extends('layouts.front')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @if($news->count() > 0)
                <x-common.pagination route="front.news" :items="$news" />
                <div class="card">
                    <div class="card-body">
                        @foreach($news as $new)
                            @include('front.news.components.new_list', ['new' => $new])
                        @endforeach
                    </div>
                </div>
                <x-common.pagination route="front.news" :items="$news" />
            @else
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">{{ __('vars.no_news_published') }}</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
