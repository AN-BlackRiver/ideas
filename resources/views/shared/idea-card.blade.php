<div class="card">

    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                     src="https://api.dicebear.com/6.x/fun-emoji/svg?seed={{$idea->user->name}}" alt="{{$idea->user->name}}">
                <div>
                    <h5 class="card-title mb-0"><a href="#">{{$idea->user->name}}</a></h5>
                </div>
            </div>
            @auth()
                <div>
                    <form action="{{route('ideas.destroy', $idea->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        @if(auth()->id() == $idea->user_id)
                            <a href="{{route('ideas.edit', $idea->id)}}">Изменить</a>
                        @endif
                        <a href="{{route('ideas.show', $idea->id)}}">Просмотреть</a>
                        @if(auth()->id() == $idea->user_id)
                            <button type="submit" class="ms-1 btn btn-danger btn-sm"
                                    onclick="confirm('Вы действительно хотите удалить запись?')">Х
                            </button>
                        @endif
                    </form>
                </div>
            @endauth
        </div>
    </div>

    <div class="card-body">
        @if($editing ?? false)
            <div class="row">
                <form action="{{route('ideas.update', $idea->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <textarea class="form-control @error('content')is-invalid @enderror" id="idea" rows="3"
                                  name="content">{{old('content')? old('content') : $idea->content}}</textarea>
                        @error('content')
                        <div class="invalid-feedback">{{$message}}</div>@enderror
                    </div>
                    <div class="">
                        <button class="btn btn-dark mb-3" type="submit"> Сохранить</button>
                    </div>
                </form>
            </div>
        @else
            <p class="fs-6 fw-bold text-muted">
                {{$idea->content}}
            </p>
            <div class="d-flex justify-content-between">
                <div>
                    <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                </span> {{$idea->likes}} </a>
                </div>
                <div>
                <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock">
                </span> {{$idea->created_at}} </span>
                </div>
            </div>
        @endif

        @include('shared.comment-box')

    </div>
</div>
