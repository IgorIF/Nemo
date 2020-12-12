<div id="sidebar-header" class="group">
    <div class="widget-first widget yit_text_quote">

        <blockquote class="text-quote-quote">{{ Auth::user()->name }}</blockquote>

        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            {{ csrf_field() }}
            <button>Выйти</button>
        </form>

    </div>
</div>
