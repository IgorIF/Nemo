<style>
    .input-file-row-1:after {
        content: ".";
        display: block;
        clear: both;
        visibility: hidden;
        line-height: 0;
        height: 0;
    }

    .input-file-row-1{
        display: inline-block;
        margin-top: 25px;
        position: relative;
    }

    html[xmlns] .input-file-row-1{
        display: block;
    }

    * html .input-file-row-1 {
        height: 1%;
    }

    .upload-file-container {
        position: relative;
        width: 100px;
        height: 137px;
        overflow: hidden;
        background: url(http://i.imgur.com/AeUEdJb.png) top center no-repeat;
        float: left;
        margin-left: 23px;
    }

    .upload-file-container:first-child {
        margin-left: 0;
    }

    .upload-file-container > img {
        width: 93px;
        height: 93px;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
    }

    .upload-file-container-text{
        font-family: Arial, sans-serif;
        font-size: 12px;
        color: #719d2b;
        line-height: 17px;
        text-align: center;
        display: block;
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100px;
        height: 35px;
    }

    .upload-file-container-text > span{
        border-bottom: 1px solid #719d2b;
        cursor: pointer;
    }

    .upload-file-container input  {
        position: absolute;
        left: 0;
        bottom: 0;
        font-size: 1px;
        opacity: 0;
        filter: alpha(opacity=0);
        margin: 0;
        padding: 0;
        border: none;
        width: 70px;
        height: 50px;
        cursor: pointer;
    }
</style>

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
    <br />

    <fieldset>
        <div class="input-file-row-1">
            <div class="upload-file-container">
                <img id="image" src="@if(isset($trainer)) {{ asset('storage/trainers/' . $trainer->image) }} @endif" alt="" />
                <div class="upload-file-container-text">
                    <span id="image-text">@if(isset($trainer)) Изменить фото @else Добавить фото @endif</span>
                    <input type="file" name="image" class="photo" id="imgInput" />
                </div>
            </div>
        </div>
    </fieldset>

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

<script>
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image').attr('src', e.target.result);
                $('#image-text').text('Изменить фото');
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInput").change(function(){
        readURL(this);
    });
</script>
