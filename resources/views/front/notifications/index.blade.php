@extends('layouts.front')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ __('vars.notifications') }}</h4>
                </div>
                <div class="card-body">
                    @if($notifications->count())
                        <form action="{{ route('front.notifications.delete') }}" method="post">
                            @method('DELETE')
                            @csrf
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                    <tr>
                                        <th style="width:80px;"><strong>#</strong></th>
                                        <th><strong>{{ __('vars.title') }}</strong></th>
                                        <th><strong>{{ __('vars.text') }}</strong></th>
                                        <th><strong>{{ __('vars.url') }}</strong></th>
                                        <th><strong>{{ __('vars.date') }}</strong></th>
                                        <th><strong>{{ __('vars.delete') }}</strong></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($notifications as $notification)
                                            <tr>
                                                <td><strong></strong></td>
                                                <td>{{ $notification->title }}</td>
                                                <td>{!! $notification->text !!}</td>
                                                @if($notification->url)
                                                    <td><a href="{{ $notification->url }}">{{ __('vars.check_notification') }}</a></td>
                                                @else
                                                    <td></td>
                                                @endif
                                                <td><span class="badge light badge-success">{{ $notification->date }}</span></td>
                                                <td>
                                                    <input type="checkbox" class="form-check-input" name="{{ $notification->id }}">
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @include('buttons.submit')
                        </form>
                    @else
                        <p class="text-black">{{ __('vars.you_have_no_notifications') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
