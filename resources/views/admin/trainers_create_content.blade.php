<form action="{{ route('admin.trainers.store') }}" enctype="multipart/form-data" method="POST">
    {{ csrf_field() }}

    Имя:
    <br />
    <input type="text" name="name">
    <br/><br/>
    Описание:
    <br />
    <textarea type="text" name="description" rows="6" cols="100"></textarea>
    <br /><br />
    Фото:
    <input type="file" name="image" placeholder="фото">
    <br /><br />

    Ссылка на видео:
    <br />
    <input type="text" name="video">
    <br /><br />

    <button>сохранить</button>
</form>
