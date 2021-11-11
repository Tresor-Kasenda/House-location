{!! form_start($form) !!}
<div class="row gy-4">
    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->name) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->picture) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->email) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->role_id) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->surname) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->address) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->phone) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->password) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4 col-lg-4">
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->birthdays) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4 col-lg-4">
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->residence) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4 col-lg-4">
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->gender) !!}
            </div>
        </div>
    </div>
</div>
<div class="form-group mt-3">
    <button type="submit" class="btn btn-primary btn-action">
        Enregistrer
    </button>
</div>
{!! form_end($form) !!}
