@extends('layouts.admin')

@section('title', "ADMINISTRATION")

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h4 class="nk-block-title page-title">Pannel d'administration</h4>
                    </div>
                </div>
            </div>
            <div class="nk-block">
                <div class="row g-gs">
                    @include('admins.components._statistic', [
                        'username' => "Apartments",
                        'amount' => \App\Models\House::count()
                    ])
                    @include('admins.components._statistic', [
                       'username' => "Reservations",
                       'amount' => \App\Models\Reservation::count()
                   ])
                    @include('admins.components._statistic', [
                        'username' => "Users",
                        'amount' => \App\Models\User::count()
                    ])

                    <div class="col-xxl-6">
                        <div class="card card-full">
                            <div class="nk-ecwg nk-ecwg8 h-100">
                                <div class="card-inner">
                                    <div class="card-title-group mb-3">
                                        <div class="card-title">
                                            <h6 class="title">Sales Statistics</h6>
                                        </div>
                                    </div>

                                    <div class="nk-ecwg8-ck">
                                        <canvas
                                            class=""
                                            id="salesStatistics"
                                            style="display: block; width: auto; height: 400px;"
                                        ></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
