
<div class="col-lg-12 col-xl-6">
    <div class="card">
        <div class="card-body">
            <div class="row m-b-30">
                <div class="col-md-5 col-xxl-12">
                    <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                        <div class="new-arrivals-img-contnent">
                            <img class="img-fluid" src="{{ $new->image ?? '' }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-xxl-12">
                    <div class="new-arrival-content position-relative">
                        <h4><a href="{{ route('front.news.show', ['new' => $new]) }}">{{ $new->title }}</a></h4>
                        <p>{{ __('vars.date_published') }}: <span class="item">{{ $new->updated_at }}</span> </p>
                        <p>Brand: <span class="item">Lee</span></p>
                        <p class="text-content">{!! $new->short_description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

