<h3>Справки для занятий в бассейне:</h3>

<div class="all-rules">
    <ul>
        @foreach($medicalCertificates as $medicalCertificate)
            <div id="medicalCertificate_{{ $medicalCertificate->id }}" >
                <li>
                    -
                    <span id="ruleItem_text" contenteditable="true">{!! $medicalCertificate->text !!}</span>
                    <svg style="float: right" id="medicalCertificate_delete_btn" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                    </svg>
                </li>
            </div>
        @endforeach
    </ul>

    <div style="max-width: 90%; width: 100%; margin: auto; height: 100px">
        <a id="ruleItem_add_btn" class="btn" style="padding: 20px 30px; float: right; box-shadow: none">Добавить пункт</a>
    </div>

    <p>
        <strong>
            * <span id="text_{{ $texts->get(66)->id }}" contenteditable="true">{!! $texts->get(66)->text !!}</span>
        </strong>
    </p>
</div>
<button type="button" class="close" id="js-close-popup"></button>
