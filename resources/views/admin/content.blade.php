
<table>
    <tr>
        <td>Имя</td>
        <td>Фото</td>
        <td>Описание</td>
        <td>Видео</td>
        <td></td>
    </tr>
    @foreach($trainers as $trainer)
        <tr>
            <td>{{ $trainer->name }}</td>
            <td>{{ $trainer->image }}</td>
            <td>{{ mb_substr($trainer->description, 0, 50) . '...' }}</td>
            <td>{{ $trainer->video }}</td>
            <td>
                <form id="logout-form" action="{{ route('admin.trainers.destroy', ['trainer' => $trainer->id]) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field("DELETE") }}
                    <button>удалить</button>
                </form>
            </td>
        </tr>

        <div class="testimonial two-fourth ">
            <div class="thumbnail">
                <img src="{{ asset('images/trainers/' . $trainer->image) }}" alt="Fotolia_20568380_Subscription_XXL" title="Fotolia_20568380_Subscription_XXL" />
            </div>
            <div class="testimonial-text">
                <p>I purchased this theme and I really like it. The theme authors have been very helpful in the support area of their website. Would definitely recommend to anyone needing a corporate wordpress theme. What to say about the[...]</p>
            </div>
            <div class="testimonial-name"><a href="testimonial.html" class="name">Erica Evans</a><a class="website" href="http://www.unisoftware.com">unisoftware.com</a></div>
        </div>
    @endforeach
</table>

<br />

<form action="{{ route('admin.trainers.create') }}" method="GET">
    <button>добавить тренера</button>
</form>


