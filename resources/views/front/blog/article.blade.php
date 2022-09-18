@extends('layouts.front')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                            <div class="product-detail-content">
                                <div class="new-arrival-content pr">
                                    <h4>{{ $article->title }}</h4>
                                    <x-common.rating />
                                    <span class="review-text text-black">({{ $article->comments_count  }} {{ __('vars.reviews') }}) / </span><a class="product-review text-primary" href=""  data-bs-toggle="modal" data-bs-target="#reviewModal">{{ __('vars.write_review') }}</a>

                                    <p>{{ __('vars.writed') }}: <span class="item">{{ $article->created_at }}</span></p>
{{--                                    FIXME add article tags--}}

                                    <p class="text-content">{!! $article->text !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    @auth()
                        <form action="{{ route('front.blog.comment', ['article' => $article]) }}" method="post">
                            @csrf
                            <input type="hidden" name="article_id" value="{{ $article->id }}">
                            @include('fields.textarea', ['name' => 'text'])
                            @include('buttons.submit')
                            <p class="text-muted mt-2">{{ __('vars.min_10_chars') }}</p>
                        </form>
                    @else
                        <p>{{ __('vars.need_login_for_review') }}</p>
                    @endauth
                </div>
            </div>

        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    @if($article->comments->count() > 0)
                        @foreach($article->comments as $comment)
                            <p>{{ $comment->user->full_name }}</p>
                            <p>{{ $comment->text }}</p>
                            <p class="text-muted">{{ $comment->created_at }}</p>
                            <hr>
                        @endforeach
                    @else
                        <p>{{ __('vars.no_article_comments') }}</p>
                    @endif
                </div>

            </div>
        </div>
        </div>
@endsection
