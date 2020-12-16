<link rel="stylesheet" href="https://unpkg.com/bootstrap@4/dist/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.0.0-rc.1/cropper.min.css">
<link rel="stylesheet" href="{{ asset('administrator/css/create_edit_trainer/style.css') }}">

<style>
    .img-container img {
        max-width: 100%;
    }

    .hentry img #image {
        width: 100px;
    }
</style>

<div class="container">

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

        <label class="label" data-toggle="tooltip" title="Выберите фото">
            <img class="rounded" id="preview" src="{{ isset($trainer) ? asset('storage/trainers/' . $trainer->image) : 'https://svgsilh.com/svg/159236-9e9e9e.svg' }}" alt="preview">
            <input type="file" class="sr-only" id="input" name="image" accept="image/*">
        </label>

        <br />

        Ссылка на видео:
        <br />
        <input type="text" name="video" value="{{ isset($trainer->video) ? $trainer->video : old('video') }}" size="50">
        <br /><br />

        <button>сохранить</button>
    </form>

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Cropper</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="img-container">
                        <img id="image" src="#" alt="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="crop">Подтвердить</button>
                </div>
            </div>
        </div>
    </div>

    @if(isset($trainer))
        <form action="{{ route('admin.trainers.destroy', $trainer->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button>удалить тренера</button>
        </form>
    @endif

</div>




<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://unpkg.com/jquery@3/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap@4/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.0.0-rc.1/cropper.min.js"></script>
<script src="{{ asset('administrator/js/create_edit_trainer/script.js') }}"></script>
