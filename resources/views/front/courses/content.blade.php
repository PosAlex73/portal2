
    <div class="row">
        <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
            <img class="img-fluid" src="{{ $course->image }}" alt="">
        </div>
        <div class="col-xl-9 col-lg-6 col-md-6 col-xxl-7 col-sm-12">
            <div class="product-detail-content">
                <div class="new-arrival-content pr">
                    <h4>{{ $course->title }}</h4>
                    <p class="card-text">{{ $course->category->title }}</p>
                    <div class="d-table mb-2">
                        <x-common.currency :value="$course->price" />
                    </div>
                    <p class="card-text">{!! $course->description !!}</p>
                    @if(!$user_has_course)
                    @auth
                        <div class="shopping-cart mb-2 me-3">
                            <form action="{{ route('front.order', ['type' => 'course', 'id' => $course->id]) }}" method="get">
                                @include('fields.hidden', ['name' => 'id', 'value' => $course->id])
                                @include('fields.hidden', ['name' => 'type', 'value' => 'C'])
                                @include('buttons.submit', ['text' => __('vars.get_course')])
                            </form>
                        </div>
                    @else
                        @include('buttons.auth')
                    @endauth
                    @else
                        <p>{{ __('vars.you_has_course') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>


