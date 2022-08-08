{!! form_start($form, $options = ['attr' => ['class' => 'nk-wizard nk-wizard-simple is-alter']]) !!}
    <div class="nk-wizard-head">
        <h5>Adrese de la maison</h5>
    </div>
    <div class="nk-wizard-content">
        <div class="row gy-3">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->town) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->commune) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->district) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->address) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->email) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->phone_number) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nk-wizard-head">
        <h5>Detail de la maison</h5>
    </div>
    <div class="nk-wizard-content">
        <div class="row gy-3">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->prices) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->guarantees) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->room_number) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->room_pieces) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->images) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->reference) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->categories) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->type) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nk-wizard-head">
        <h5>Localisation</h5>
    </div>
    <div class="nk-wizard-content">
        <div class="row gy-2">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->latitude) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->longitude) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->electricity) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-control-wrap">
                        {!! form_row($form->toilet) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-end w-full pt-3 lg:pt-0">
            <button type="submit" class="btn btn-primary px-4 py-3 text-sm text-white bg-green-600 rounded-lg">Save</button>
        </div>
    </div>

{!! form_end($form) !!}
