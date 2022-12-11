@if($items->total() > \App\Facades\Set::get(\App\Enums\Settings\SettingTypes::ADMIN_PAGINATION))
    <div class="card">

    <div class="row">
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="dataTableExample_paginate">
                    <ul class="pagination">
                        <li class="paginate_button page-item previous @if($items->onFirstPage()) disabled @endif" id="dataTableExample_previous">
                            <a href="{{ route( $route) }}"
                               aria-controls="dataTableExample"
                               data-dt-idx="0"
                               tabindex="0"
                               class="page-link">{{ __('vars.first_page') }}
                            </a>
                        </li>
                        @if(!$items->onFirstPage())
                            <li class="paginate_button page-item previous" id="dataTableExample_previous">
                                <a href="{{ $items->previousPageUrl() }}"
                                   aria-controls="dataTableExample"
                                   data-dt-idx="0"
                                   tabindex="0"
                                   class="page-link">{{ __($items->currentPage() - 1) }}
                                </a>
                            </li>
                        @endif
                        <li class="paginate_button page-item ">
                            <a href="#" aria-controls="dataTableExample" data-dt-idx="2" tabindex="0" class="page-link">{{ $items->currentPage() }}</a>
                        </li>
                        @if(!$items->onLastPage())
                            <li class="paginate_button page-item next" id="dataTableExample_next">
                                <a href="{{ $items->nextPageUrl() }}"
                                   aria-controls="dataTableExample"
                                   data-dt-idx="4"
                                   tabindex="0"
                                   class="page-link">{{ __($items->currentPage() + 1) }}
                                </a>
                            </li>
                            <li class="paginate_button page-item next" id="dataTableExample_next">
                                <a href="{{ route( $route) . '?page=' . $items->lastPage() }}"
                                   aria-controls="dataTableExample"
                                   data-dt-idx="4"
                                   tabindex="0"
                                   class="page-link">{{ __('vars.last') }}</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>

    </div>
@endif
