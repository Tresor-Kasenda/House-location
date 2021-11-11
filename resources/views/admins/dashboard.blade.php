@extends('layouts.admin')

@section('title')
    ADMINISTRATION
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h4 class="nk-block-title page-title">Dashboard</h4>
                    </div>
                </div>
            </div>
            <div class="nk-block">
                <div class="row g-gs">
                    @include('admins.components.statistic', [
                        'username' => "Salles",
                        'amount' => \App\Models\Admin\RoomParty::count()
                    ])
                    @include('admins.components.statistic', [
                       'username' => "Reservation",
                       'amount' => \App\Models\Reservation::count()
                   ])
                    @include('admins.components.statistic', [
                        'username' => "Utilisateur",
                        'amount' => \App\Models\User::count()
                    ])
                    @include('admins.components.statistic', [
                        'username' => "Categories",
                        'amount' => \App\Models\Admin\Category::count()
                    ])
                </div>
            </div>
        </div>
    </div>
@endsection
