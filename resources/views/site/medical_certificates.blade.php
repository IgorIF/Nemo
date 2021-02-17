<h3>{!! $texts->get(66)->text !!}</h3>

<div class="all-rules">
    <ul>
        @foreach($medicalCertificates as $medicalCertificate)
            <li>- {!! $medicalCertificate->text !!}</li>
        @endforeach
    </ul>

    <p>
        <strong>
            {!! $texts->get(67)->text !!}
        </strong>
    </p>
</div>
<button type="button" class="close" id="js-close-popup"></button>
