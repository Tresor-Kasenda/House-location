@extends('backend.layout.admin')

@section('title', "Detail d'une reservation")

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-md">
                <div class="nk-block-between g-3">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">
                            Détail /
                            <strong class="text-primary small">
                                {{ $reservation->house->reference ?? "" }}
                            </strong>
                        </h3>
                    </div>
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            <div class="toggle-expand-content" data-content="pageMenu">
                                <ul class="nk-block-tools g-3">
                                    <li class="preview-item">
                                        @if ($reservation->status == false)
                                            @include('backend.components._update', [
                                                'route' => route('admins.reservation.active',$reservation->key),
                                                'button' => 'btn-outline-success btn-sm',
                                                'icon' => 'ni-check-circle',
                                                'title' => 'Activer'
                                            ])
                                        @else
                                            @include('backend.components._update', [
                                                'route' => route('admins.reservation.inactive',$reservation->key),
                                                'button' => 'btn-outline-danger btn-sm',
                                                'icon' => 'ni-check-circle',
                                                'title' => 'Désactiver'
                                            ])
                                        @endif
                                    </li>
                                    <li class="preview-item">
                                        <a href="{{ route('admins.reservations.index') }}"
                                           class="btn btn-outline-secondary btn-sm d-none d-sm-inline-flex">
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
            @if($reservation->status == false)
                <div class="alert alert-danger alert-icon " role="alert">
                    <em class="icon ni ni-alert-circle"></em>
                    Cette appartement ne pas encore activé. Veillez l'activer pour qu'elle soie visible
                </div>
            @endif
            <div class="nk-block nk-block-lg">
                <div class="nk-block">
                    <div class="justify-content text-center p-2">
                        <img
                            src="{{ asset('storage/'.$reservation->house->images) }}"
                            alt="{{ $reservation->name }}"
                            class="img-fluid img-thumbnail rounded-circle"
                            height="10%"
                            width="15%"
                        >
                    </div>
                    <div class="card">
                        <div class="card-inner">
                            <div class="tab-content">
                                <div class="tab-pane active" id="room-info">
                                    <div class="nk-block">
                                        <div class="profile-ud-list">
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Nom client</span>
                                                    <span class="profile-ud-value">{{ $reservation->name ?? "" }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Email client</span>
                                                    <span class="profile-ud-value">{{ $reservation->address ?? "" }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Phone client</span>
                                                    <span class="profile-ud-value">{{ $reservation->phones ?? "" }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Reference</span>
                                                    <span class="profile-ud-value">{{ $reservation->reference ?? "" }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Commune maison</span>
                                                    <span class="profile-ud-value">{{ $reservation->house->commune ?? "" }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Phone maison</span>
                                                    <span class="profile-ud-value">{{ $reservation->house->email ?? "" }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Prices maison</span>
                                                    <span class="profile-ud-value">{{ $reservation->house->prices ?? "" }} $</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Nombre des pieces</span>
                                                    <span class="profile-ud-value">{{ $reservation->house->roomNumber ?? "" }} pieces</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Garantie</span>
                                                    <span class="profile-ud-value">{{ $reservation->house->guarantees ?? "" }} $</span>
                                                </div>
                                            </div>
                                        </div>
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
