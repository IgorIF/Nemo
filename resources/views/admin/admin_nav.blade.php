<div class="admin-nav">
    <div>
        <a href="{{ route('site') }}">Перейти на сайт</a>

        Вы вошли как <b>{{ auth()->user()->email }}</b>
        <br />
        <form action="{{ route('logout') }}" method="POST">
            {{ csrf_field() }}
            <button>Выйти</button>
        </form>
    </div>
</div>
