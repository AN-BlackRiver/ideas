<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:150px" class="me-3 avatar-sm rounded-circle"
                     src="https://api.dicebear.com/6.x/fun-emoji/svg?seed={{$user->name}}" alt="{{$user->name}}">
                <div>
                    @if($editing ?? false)
                        <input class="form-control" type="text" value="{{$user->name}}">
                    @else
                        <h3 class="card-title mb-0"><a href="#">{{$user->name}}</a></h3>
                    @endif
                    <span class="fs-6 text-muted">{{$user->email }}</span>
                </div>
            </div>
            <div class="align-self-start">
                @if($editing ?? false)
                    <a href="{{route('users.show',$user->id)}}">Отменить</a>
                @else
                    @auth()
                        @if(auth()->id() === $user->id)
                            <a href="{{route('users.edit', $user->id)}}">Редактировать профиль</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
        <div class="px-2 mt-4">
            <h5 class="fs-5"> Обо мне : </h5>
            @if($editing ?? false)
                <textarea class="form-control @error('bio')is-invalid @enderror mb-3" id="idea" rows="3"
                          name="bio"></textarea>
                @error('bio')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <button type="submit" class="btn btn-dark btn-sm mb-3">Сохранить</button>
            @else
                <p class="fs-6 fw-light">
                    This book is a treatise on the theory of ethics, very popular during the
                    Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes
                    from a line in section 1.10.32.
                </p>
            @endif
            <div class="d-flex justify-content-start">
                <a href="#" class="fw-light nav-link fs-6 me-3"> <span class="fas fa-user me-1"></span> 120 Followers
                </a>
                <a href="#" class="fw-light nav-link fs-6 me-3"> <span
                        class="fas fa-brain me-1"></span>{{$user->ideas()->count()}}</a>
                <a href="#" class="fw-light nav-link fs-6"> <span
                        class="fas fa-comment me-1"></span>{{$user->comments()->count()}}</a>
            </div>
            @auth()
                @if(auth()->id() !== $user->id)
                    <div class="mt-3">
                        <button class="btn btn-primary btn-sm"> Follow</button>
                    </div>
                @endif
            @endauth
        </div>
    </div>
</div>
{{--<hr>
<div class="mt-3">
    <div class="card">
        <div class="px-3 pt-4 pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                         src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario"
                         alt="Mario Avatar">
                    <div>
                        <h5 class="card-title mb-0"><a href="#"> Mario
                            </a></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <p class="fs-6 fw-light text-muted">
                comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
                of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of
                ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum
                dolor sit amet..", comes from a line in section 1.10.32.
            </p>
            <div class="d-flex justify-content-between">
                <div>
                    <a href="#" class="fw-light nav-link fs-6"> <span
                            class="fas fa-heart me-1">
                                        </span> 100 </a>
                </div>
                <div>
                                    <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                                        3-5-2023 </span>
                </div>
            </div>
            <div>
                <div class="mb-3">
                    <textarea class="fs-6 form-control" rows="1"></textarea>
                </div>
                <div>
                    <button class="btn btn-primary btn-sm"> Post Comment</button>
                </div>

                <hr>
                <div class="d-flex align-items-start">
                    <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                         src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi"
                         alt="Luigi Avatar">
                    <div class="w-100">
                        <div class="d-flex justify-content-between">
                            <h6 class="">Luigi
                            </h6>
                            <small class="fs-6 fw-light text-muted"> 3 hour
                                ago</small>
                        </div>
                        <p class="fs-6 mt-3 fw-light">
                            and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and
                            Evil)
                            by
                            Cicero, written in 45 BC. This book is a treatise on the theory of ethics,
                            very
                            popular during the Renaissan
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>--}}


