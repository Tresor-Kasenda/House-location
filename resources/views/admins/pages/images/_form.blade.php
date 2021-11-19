{!! form_start($form) !!}
<div class="row gy-4">
    <div class="col-md-md-6 col-lg-6">
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->picture) !!}
            </div>
        </div>
    </div>
    <div class="col-md-md-6 col-lg-6">
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->house_id) !!}
            </div>
        </div>
    </div>
</div>
<div class="form-group mt-3">
    <button type="submit" class="btn btn-primary btn-action">
        Sauvegarder
    </button>
</div>
{!! form_end($form) !!}
