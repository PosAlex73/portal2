@extends('layouts.front')
@section('content')
    <div class="row">
        @if($articles->count() > 0)
            <x-common.pagination route="front.blog" :items="$articles" />
            @foreach($articles as $article)
                <div class="col-lg-8 col-md-12">
                    @include('front.blog.components.list_article', ['article' => $article])
                </div>
            @endforeach
            <x-common.pagination route="front.blog" :items="$articles" />
        <div class="col-lg-4 d-md-none d-lg-block">
            <div class="card">sdffsd
{{--                FIXME add sidebar--}}
            </div>
        </div>
        @else
            <p>{{ __('vars.mo_articles_published') }}</p>
        @endif
    </div>
@endsection
