<div>
    @auth()
        <form action="{{route('ideas.comments.store', $idea->id)}}" method="POST">
            @csrf
            <div class="mt-2 mb-3">
                <textarea name="body" class="fs-6 form-control @error('body')is-invalid @enderror" rows="1"></textarea>
                @error('body')
                <div class="invalid-feedback">{{$message}}</div>@enderror
            </div>

            <div>
                <button type="submit" class="btn btn-primary btn-sm"> Добавить комментраий</button>
            </div>
        </form>
    @endauth

    <hr>
    @foreach($idea->comments as $comment)

        <div class="d-flex align-items-start">
            <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                 src="https://api.dicebear.com/6.x/fun-emoji/svg?seed={{$comment->user->name}}"
                 alt="{{$comment->user->name}}">
            <div class="w-100">
                <div class="d-flex justify-content-between">
                    <h6 class="">{{$comment->user->name}}</h6>
                    <small class="fs-6 fw-light text-muted">{{$comment->created_at}}</small>
                </div>
                <p class="fs-6 mt-3 fw-light">
                    {{$comment->body}}
                </p>
                <hr>
            </div>
        </div>
    @endforeach


</div>
