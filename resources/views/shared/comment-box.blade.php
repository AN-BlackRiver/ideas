<div>
    <form action="{{route('ideas.comments.store', $idea->id)}}" method="POST">
        @csrf
        <div class="mb-3">
            <textarea name="body" class="fs-6 form-control @error('body')is-invalid @enderror" rows="1"></textarea>
            @error('body')<div class="invalid-feedback">{{$message}}</div>@enderror
        </div>

        <div>
            <button type="submit" class="btn btn-primary btn-sm"> Добавить комментраий</button>
        </div>
    </form>
        <hr>
        @foreach($idea->comments as $comment)

            <div class="d-flex align-items-start">
                <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                     src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi"
                     alt="Luigi Avatar">
                <div class="w-100">
                    <div class="d-flex justify-content-between">
                        <h6 class="">Luigi
                        </h6>
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
