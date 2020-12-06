
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
    @endforeach
</table>

<br />

<form action="{{ route('admin.trainers.create') }}" method="GET">
    <button>добавить тренера</button>
</form>


