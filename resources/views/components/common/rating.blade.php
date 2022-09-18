@if(\App\Facades\Set::get(\App\Enums\Settings\SettingTypes::SHOW_ARTICLE_RATING) === \App\Enums\YesNo::YES)
    <div class="comment-review star-rating">
        <ul>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star-half-empty"></i></li>
            <li><i class="fa fa-star-half-empty"></i></li>
        </ul>
    </div>
@endif
