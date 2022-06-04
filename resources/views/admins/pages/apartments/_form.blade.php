{!! form_start($form) !!}
<div class="row gy-4">
    <div class="col-md-md-12 col-lg-12">
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->commune) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->latitude) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->longitude) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->email) !!}
            </div>
        </div>
    </div>
    <div class="col-md-md-12 col-lg-12">
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->images) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->address) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->phoneNumber) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->district) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->prices) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->guarantees) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->roomNumber) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->categories) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->type) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->town) !!}
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
