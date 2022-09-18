
<div class="row">
    <div class="col-xl-2 col-lg-6 col-md-6 col-xxl-5 ">
        <x-common.image :image="$course->image" />
    </div>
    <div class="col-xl-10 col-lg-6 col-md-6 col-xxl-7 col-sm-12">
        <div class="product-detail-content">
            <div class="new-arrival-content pr">
                <h4>{{ $course->title }}</h4>
                <p class="card-text">{{ $course->category->title }}</p>
                <div class="d-table mb-2">
                    @if($course->price > 0)
                        <x-common.currency :value="$course->price" />
                    @else
                        <p>{{ __('vars.free_course') }}</p>
                    @endif
                </div>
                <p class="card-text">{!! $course->description !!}</p>
                @if(!$user_has_course)
                    @auth
                        <div class="shopping-cart mb-2 me-3">
                            <form action="{{ route('front.order', ['type' => 'pcourse', 'id' => $course->id]) }}" method="get">
                                @include('fields.hidden', ['name' => 'id', 'value' => $course->id])
                                @include('fields.hidden', ['name' => 'type', 'value' => 'A'])
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


