{!! form_start($form) !!}
<div class="row gy-4">
    <div class="col-md-4 col-lg-4">
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->title) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4 col-lg-4">
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->picture) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4 col-lg-4">
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->town) !!}
            </div>
        </div>
    </div>
    <div class="col-md-md-6 col-lg-6">
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
    <div class="col-md-6 col-lg-6">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->prices) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->user_id) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->address) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->places_number) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->phone_number) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4 col-lg-4">
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->service_id) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4 col-lg-4">
        <div class="form-group">
            <div class="form-control-wrap">
                {!! form_row($form->category_id) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4 col-lg-4">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->note) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->booster) !!}
                    </div>
                </div>
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
        Sauvegarder
    </button>
</div>
{!! form_end($form) !!}
