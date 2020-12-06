<form action="{{ route('admin.trainers.store') }}" method="POST">
    {{ csrf_field() }}

    <input type="text" name="name" placeholder="имя">
    <br/><br/>
    <input type="text" name="image" placeholder="фото">
    <br/><br/>
    <textarea type="text" name="description" placeholder="описание"></textarea>
    <br /><br />
    <input type="text" name="video" placeholder="видео">
    <br /><br />

    <button>сохранить</button>
</form>
