<div class="admin-nav">
    <div style="display: table; width: 100%">

        <div class="left">
            <a href="{{ route('site') }}">Перейти на сайт</a>
        </div>

        <div class="center">
            Вы вошли как<br />
            <b>{{ auth()->user()->email }}</b>
        </div>

        <div class="right">
            <form action="{{ route('logout') }}" method="POST">
                {{ csrf_field() }}
                <button class="button--border">Выйти</button>
            </form>
        </div>

    </div>
</div>
