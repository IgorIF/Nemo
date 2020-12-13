@foreach($trainers as $trainer)
        <div class="testimonial two-fourth @if($loop->index % 2 != 0) last @endif">
            <div class="thumbnail">
                <img src="{{ asset('storage/trainers/' . $trainer->image) }}" alt="{{ $trainer->name }}" title="{{ $trainer->name }}" />
            </div>
            <div class="testimonial-text">
                <p>{{ mb_substr($trainer->description, 0, 270) . '...' }}</p>
            </div>

            <div class="testimonial-name">
                    <a href="{{ route('admin.trainers.edit', $trainer->id) }}" class="name">{{ $trainer->name }}</a>
            </div>
        </div>
@endforeach

<div class="clear space"></div>

<center>
    <div class="call-btn">
        <a href="{{ route('admin.trainers.create') }}" class="btn btn-large btn-mfast-3">Добавить тренера</a>
    </div>
</center>

<div class="clear space"></div>
