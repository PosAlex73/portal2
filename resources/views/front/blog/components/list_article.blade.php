<div class="card">
    <div class="card-body">
        <div class="row m-b-30">
            <div class="col-md-3 col-xxl-12">
                <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                    <div class="new-arrivals-img-contnent">
                        <x-common.image :image="$article->image" />
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-xxl-12">
                <div class="new-arrival-content position-relative">
                    <h4><a href="{{ route('front.blog.article', ['article' => $article]) }}">{{ $article->title }}</a></h4>
                    <div class="comment-review star-rating">
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-half-empty"></i></li>
                            <li><i class="fa fa-star-half-empty"></i></li>
                        </ul>
                        <span class="review-text">({{ $article->comments_count }} {{ __('vars.reviews') }}) / </span><a class="product-review" href=""  data-bs-toggle="modal" data-bs-target="#reviewModal">{{ __('vars.write_review') }}</a>
                    </div>
                    <p>{{ __('vars.write') }}: <span class="item">{{ $article->created_at }}</span> </p>
                    <p>{{ __('vars.author') }}: <span class="item">{{ $article->author }}</span></p>
                    <p class="text-content">{!! $article->short_description !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
