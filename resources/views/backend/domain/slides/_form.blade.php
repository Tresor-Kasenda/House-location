{!! form_start($form) !!}
<div class="row gy-4">
    <div class="col-md-12 col-lg-12">
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->title) !!}
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-12">
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->images) !!}
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-12">
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->description) !!}
            </div>
        </div>
    </div>
</div>
<div class="form-group mt-3">
    <button type="submit" class="btn btn-primary btn-action">
        Save
    </button>
</div>
{!! form_end($form) !!}
