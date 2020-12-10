<form action="{{ isset($trainer) ? route('admin.trainers.update', $trainer->id) : route('admin.trainers.store') }}" enctype="multipart/form-data" method="POST">
    @if(isset($trainer))
        {{ method_field('PUT') }}
    @endif
    {{ csrf_field() }}

    Имя:
    <br />
    <input type="text" name="name" value="{{ isset($trainer->name) ? $trainer->name : old('name') }}" size="50">
    <br/><br/>
    Описание:
    <br />
    <textarea type="text" name="description" rows="10" cols="100">{{ isset($trainer->description) ? $trainer->description : old('description') }}</textarea>
    <br /><br />
    Фото:
    <input type="file" name="image">
    <br /><br />

    Ссылка на видео:
    <br />
    <input type="text" name="video" value="{{ isset($trainer->video) ? $trainer->video : old('video') }}" size="50">
    <br /><br />

    <button>сохранить</button>
</form>

@if(isset($trainer))
    <form action="{{ route('admin.trainers.destroy', $trainer->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button>удалить тренера</button>
    </form>
@endif
