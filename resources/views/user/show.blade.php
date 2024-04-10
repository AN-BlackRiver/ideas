@extends('layout.layout')

@section('content')
    <div class="row">
        <div class="col-3">
            @include('shared.left-sidebar')
        </div>

        <div class="col-6">
            @include('shared.message-box')
            <div class="">
                @include('shared.profile-card')
            </div>
            <hr>
            @forelse($ideas as $idea)
                <div class="mt-3">
                    @include('shared.idea-card')
                </div>
            @empty
                <div class="mt-3">
                    <h3 class="text-center">Ничего не найденно =(</h3>
                </div>
            @endforelse
            <div class="mt-3">
                {{$ideas->withQueryString()->links()}}
            </div>
        </div>
        <div class="col-3">
            @include('shared.search-bar')
            @include('shared.follow-box')
        </div>
    </div>
@endsection


