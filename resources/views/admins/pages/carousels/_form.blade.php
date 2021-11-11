{!! form_start($form) !!}
    <div class="form-group">
        <div class="form-control-wrap">
            {!! form_row($form->picture) !!}
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-action">
            Enregistrer
        </button>
    </div>
{!! form_end($form) !!}
