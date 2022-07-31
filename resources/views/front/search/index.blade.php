@extends('layouts.front')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('front.search') }}" method="get">
                <div class="mb-2 input-info">
                    <input type="text" name="search" value="{{ $search ?? '' }}" class="form-control ">
                </div>
                @include('buttons.submit')
            </form>
        </div>
    </div>
    <div class="default-tab">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#courses"><i class="me-2"></i>
                    {{ __('vars.courses') }}
                    {{ count($result['courses']) > 0 ? count($result['courses']) : 0 }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#articles"><i class="me-2"></i>
                    {{ __('vars.articles') }}
                    {{ count($result['articles']) > 0 ? count($result['articles']) : 0 }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#news"><i class="me-2"></i>
                    {{ __('vars.news') }}
                    {{ count($result['news']) > 0 ? count($result['news']) : 0 }}
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade active show" id="courses" role="tabpanel">
                <div class="pt-4">
                    <div class="card">
                        <div class="card-body">
                            @if(count($result['courses']) > 0)
                                <h3 class="mb-4">{{ __('vars.courses') }}</h3>
                                <ul class="list-group">
                                    @foreach($result['courses'] as $course)
                                        <li class="list-group-item">
                                            <h4><a href="{{ route('front.courses.course', ['course' => $course]) }}">{{ $course->title }}</a></h4>
                                            <p>{{ $course->short_description }}</p>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p>{{ __('vars.courses_not_found') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="articles" role="tabpanel">
                <div class="pt-4">
                    <div class="card">
                        <div class="card-body">
                            @if(count($result['articles']) > 0)
                                <h3 class="mb-4">{{ __('vars.articles') }}</h3>
                                @foreach($result['articles'] as $article)
                                    <li class="list-group-item">
                                        <h4><a href="{{ route('front.blog.article', ['article' => $article]) }}">{{ $article->title }}</a></h4>
                                        <p>{{ $article->short_description }}</p>
                                    </li>
                                @endforeach
                            @else
                                <p>{{ __('vars.articles_not_found') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="news" role="tabpanel">
                <div class="pt-4">
                    <div class="card">
                        <div class="card-body">
                            @if(count($result['news']) > 0)
                                <h3 class="mb-4">{{ __('vars.news') }}</h3>
                                @foreach($result['news'] as $new)
                                    <li class="list-group-item">
                                        <h4><a href="{{ route('front.news.show', ['new' => $new]) }}">{{ $new->title }}</a></h4>
                                        <p>{{ $new->short_description }}</p>
                                    </li>
                                @endforeach
                            @else
                                <p>{{ __('vars.new_not_found') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
