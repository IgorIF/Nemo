<form action="{{ route('admin.trainers.store') }}" enctype="multipart/form-data" method="POST">
    {{ csrf_field() }}

    Имя:
    <br />
    <input type="text" name="name" value="{{ old('name') }}">
    <br/><br/>
    Описание:
    <br />
    <textarea type="text" name="description" rows="6" cols="100">{{ old('description') }}</textarea>
    <br /><br />
    Фото:
    <input type="file" name="image">
    <br /><br />

    Ссылка на видео:
    <br />
    <input type="text" name="video" value="{{ old('video') }}">
    <br /><br />

    <button>сохранить</button>
</form>
