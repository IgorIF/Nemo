
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
            <td><a href="#">удалить</a> </td>
        </tr>
    @endforeach
</table>


