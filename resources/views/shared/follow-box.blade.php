<div class="card mt-3">
    <div class="card-header pb-0 border-0">
        <h5 class="">На кого подписаться</h5>
    </div>
    <div class="card-body">
        @foreach($usersFollow as $user)
             @continue(auth()->id() == $user->id)
            <div class="hstack gap-2 mb-3">
                <div class="avatar"><a href=""><img style="width:35px" class="me-2 avatar-sm rounded-circle"
                                                    src="https://api.dicebear.com/6.x/fun-emoji/svg?seed={{$user->name}}"
                                                    alt="{{$user->name}}"></a>
                </div>
                <div class="overflow-hidden">
                    <a class="h6 mb-0" href="#!">{{$user->name}}</a>
                    <p class="mb-0 small text-truncate">{{$user->email}}</p>
                </div>
                <a class="btn btn-primary-soft rounded-circle icon-md ms-auto" href="#"><i
                        class="fa-solid fa-plus"> </i></a>
            </div>
        @endforeach
    </div>
</div>
