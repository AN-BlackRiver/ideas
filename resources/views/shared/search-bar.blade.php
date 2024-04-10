<div class="card">
    <div class="card-header pb-0 border-0">
        <h5 class="">Поиск</h5>
    </div>
    <div class="card-body">
        <form action="{{route('index')}}" method="GET">
            <input name="search" placeholder="..." value="{{request('search','')}}" class="form-control w-100" type="text">
            <div class="">
                <button class="btn btn-dark mt-2"> Найти</button>
                @if(request()->get('search') != '')
                <a class="btn text-dark btn-warning mt-2" href="{{route('index')}}">Сбросить</a>
                @endif
            </div>
        </form>
    </div>
</div>
