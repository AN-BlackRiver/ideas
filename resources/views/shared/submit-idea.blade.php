<div class="row">
    @guest()
        <div>
            <p class="fs-4 text-center"><a class="link-info" href="{{route('login')}}">Войдите</a> для того чтобы поделиться вашей мыслью =)</p>
        </div>
    @endguest
    @auth()
        <h4> Поделитесь вашей мыслью </h4>
        <form action="{{route('ideas.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <textarea class="form-control @error('content')is-invalid @enderror" id="idea" rows="3" name="content">{{old('content')}}</textarea>
                @error('content')<div class="invalid-feedback">{{$message}}</div>@enderror
            </div>
            <div class="">
                <button class="btn btn-dark" type="submit"> Поделиться </button>
            </div>
        </form>
    @endauth
</div>
