@extends('layouts.front')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    @if($articles->count() > 0)
                        <x-common.pagination route="front.blog" :items="$articles" />
                        @foreach($articles as $article)
                            @include('front.blog.components.list_article', ['article' => $article])
                        @endforeach
                        <x-common.pagination route="front.blog" :items="$articles" />
                    @else
                        <p>{{ __('vars.mo_articles_published') }}</p>
                    @endif
                </div>
            </div>
            <div class="col-md-4 d-md-none d-lg-block">
                <div class="card">
                    <div class="card-title m-2">{{ __('vars.select_filter') }}</div>
                    <hr>
                    <div class="card-body">
                        <x-front.blog-filter />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
