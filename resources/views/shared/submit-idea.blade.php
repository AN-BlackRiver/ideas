<h4> Поделитесь вашей мыслью </h4>
<div class="row">
    <form action="{{route('idea.store')}}" method="post">
        @csrf
    <div class="mb-3">
        <textarea class="form-control @error('content')is-invalid @enderror" id="idea" rows="3" name="content">{{old('content')}}</textarea>
        @error('content')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>
    <div class="">
        <button class="btn btn-dark" type="submit"> Поделиться </button>
    </div>
    </form>
</div>
