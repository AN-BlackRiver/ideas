@extends('layout.layout')

@section('content')
    <div class="row">
        <div class="col-3">
            @include('shared.left-sidebar')
        </div>

        <div class="col-6">
                @include('shared.update-message')
                @include('shared.success-message')
                <div class="">
                    @include('shared.idea-card')
                </div>
        </div>
        <div class="col-3">
            @include('shared.search-bar')
            @include('shared.follow-box')
        </div>
    </div>
@endsection


