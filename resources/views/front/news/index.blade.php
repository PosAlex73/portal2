@extends('layouts.front')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @if($news->count() > 0)
                <x-common.pagination route="front.news" :items="$news" />
                @foreach($news as $new)
                    @include('front.news.components.new_list', ['new' => $new])
                @endforeach
                <x-common.pagination route="front.news" :items="$news" />
            @else
                <p>{{ __('vars.no_news_published') }}</p>
            @endif
        </div>
    </div>
@endsection
