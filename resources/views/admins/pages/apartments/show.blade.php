@extends('layouts.admin')

@section('title')
    ADMINISTRATION
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-md">
                <div class="nk-block-between g-3">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Détail / <strong class="text-primary small">{{ $room->title ?? "" }}</strong></h3>
                    </div>
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            <div class="toggle-expand-content" data-content="pageMenu">
                                <ul class="nk-block-tools g-3">
                                    <li class="preview-item">
                                        @if ($room->confirmed == false && $room->user_id == auth()->id())
                                            @include('admins.components.update', [
                                                'route' => 'apartment.update',
                                                'callback' => $room->key,
                                                'button' => 'btn-outline-success btn-sm',
                                                'icon' => 'ni-check-circle',
                                                'title' => 'Activer'
                                            ])
                                        @else
                                            @include('admins.components.update', [
                                                'route' => 'apartment.update',
                                                'callback' => $room->key,
                                                'button' => 'btn-outline-danger btn-sm',
                                                'icon' => 'ni-check-circle',
                                                'title' => 'Désactiver'
                                            ])
                                        @endif
                                    </li>
                                    <li class="preview-item">
                                        <a href="{{ route('apartment.index') }}" class="btn btn-outline-secondary btn-sm d-none d-sm-inline-flex">
                                            <em class="icon ni ni-arrow-left"></em>
                                            <span>Back</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if($room->confirmed == false)
                <div class="alert alert-danger alert-icon " role="alert">
                    <em class="icon ni ni-alert-circle"></em>
                    Cette salle ne pas encore activé. Veillez l'activer pour qu'elle soie visible
                </div>
            @endif
            <div class="nk-block nk-block-lg">
                <div class="nk-block">
                    <div class="card">
                        <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#room-info">
                                    <em class="icon ni ni-info"></em>
                                    <span>Information</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile-courses">
                                    <em class="icon ni ni-sign-dollar"></em>
                                    <span>Reservation</span>
                                </a>
                            </li>
                        </ul>
                        <div class="card-inner">
                            <div class="tab-content">
                                <div class="tab-pane active" id="room-info">
                                    <div class="nk-block">
                                        <div class="profile-ud-list">
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Nom de la salle</span>
                                                    <span class="profile-ud-value">{{ $room->title ?? "" }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Addresse</span>
                                                    <span class="profile-ud-value">{{ $room->address ?? "" }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Commune</span>
                                                    <span class="profile-ud-value">{{ $room->commune ?? "" }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Ville</span>
                                                    <span class="profile-ud-value">{{ $room->town ?? "" }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Telephone</span>
                                                    <span class="profile-ud-value">{{ $room->phone_number ?? "" }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Email</span>
                                                    <span class="profile-ud-value">{{ $room->email ?? "" }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Prix</span>
                                                    <span class="profile-ud-value">{{ $room->price ?? "" }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Nombre des places</span>
                                                    <span class="profile-ud-value">{{ $room->places_number ?? "" }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Date de Creation</span>
                                                    <span class="profile-ud-value">{{ $room->created_at->format('Y-m-d') }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Services</span>
{{--                                                    @foreach($room->services as $service)--}}
{{--                                                        <span class="profile-ud-value badge badge-circle mr-1">{{ $service->username ?? "" }}<br></span>--}}
{{--                                                    @endforeach--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-divider divider md"></div>
                                    <div class="nk-block">
                                        <div class="nk-block-head nk-block-head-sm nk-block-between">
                                            <h5 class="title">Description de la salle</h5>
                                        </div>
                                        <div class="bq-note">
                                            <div class="bq-note-item">
                                                <div class="bq-note-text">
                                                    <p>
                                                        {{ $room->description }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="profile-courses">
                                    <div class="nk-tb-list border border-light rounded overflow-hidden is-compact">
                                        <div class="nk-tb-item nk-tb-head text-center">
                                            <div class="nk-tb-col">
                                                <span class="lead-text">Prix</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="lead-text">Date de reservation</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="lead-text">Numero Telephone</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="lead-text">Nom de la salle</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="lead-text">Confirmation</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="lead-text d-none d-sm-inline">Action</span>
                                            </div>
                                        </div>
{{--                                        @foreach($room->reservations as $reservation)--}}
{{--                                            <div class="nk-tb-item text-center">--}}
{{--                                                <div class="nk-tb-col">{{ $reservation->price ?? "" }}</div>--}}
{{--                                                <div class="nk-tb-col">{{ $reservation->start_date->format('Y-m') ?? "" }}</div>--}}
{{--                                                <div class="nk-tb-col">{{ $reservation->phone_number ?? "" }}</div>--}}
{{--                                                <div class="nk-tb-col">{{ $reservation->room->title ?? "" }}</div>--}}
{{--                                                <div class="nk-tb-col">--}}
{{--                                                    @if($reservation->status)--}}
{{--                                                        <span class="badge badge-dot badge-dot-xs badge-success">Confirmer</span>--}}
{{--                                                    @else--}}
{{--                                                        <span class="badge badge-dot badge-dot-xs badge-warning">En attente</span>--}}
{{--                                                    @endif--}}
{{--                                                </div>--}}
{{--                                                <div class="nk-tb-col nk-tb-col-tools">--}}
{{--                                                    <ul class="nk-tb-actions gx-1 text-center">--}}
{{--                                                        <li>--}}
{{--                                                            <a href="{{ route('admin.reservation.show', $reservation->key) }}" class="btn btn-dim btn-sm btn-primary">--}}
{{--                                                                Voir--}}
{{--                                                            </a>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        @endforeach--}}
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
