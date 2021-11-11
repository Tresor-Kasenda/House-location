@extends('layouts.admin')

@section('title')
    ADMINISTRATION
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between g-3">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Detail Reservation</h3>
                    </div>
                    <div class="nk-block-head-content">
                        <a href="{{ route('admin.reservation.index') }}" class="btn btn-sm btn-outline-light bg-white d-none d-sm-inline-flex">
                            <em class="icon ni ni-arrow-left"></em>
                            <span>Back</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="nk-block nk-block-lg">
                <div class="card">
                    <div class="card-inner">
                        <div class="tab-content">
                            <div class="tab-pane active" id="personal-info">
                                <div class="nk-block">
                                    <div class="profile-ud-list">
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Nom de la salle</span>
                                                <span class="profile-ud-value">{{ strtoupper($reservation->room->title) ?? "" }}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Addresse</span>
                                                <span class="profile-ud-value">{{ $reservation->room->address ?? "" }}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Commune</span>
                                                <span class="profile-ud-value">{{ strtoupper($reservation->room->commune ?? "") }}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Ville</span>
                                                <span class="profile-ud-value">{{ $reservation->room->town ?? ""}}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Client</span>
                                                <span class="profile-ud-value">{{ strtoupper($reservation->user->name) ?? "" }}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Numero de Telephone</span>
                                                <span class="profile-ud-value">{{ $reservation->phone_number }}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Prix de la salle</span>
                                                <span class="profile-ud-value">{{ $reservation->getPrices() ?? "" }}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Nombre des places</span>
                                                <span class="profile-ud-value">{{ $reservation->room->getPrices() ?? "" }}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Date de reservation</span>
                                                <span class="profile-ud-value">
                                                    {{ $reservation->start_date->format('Y') ?? "" }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3 text-center">
                                    @if(!$reservation->status)
                                    <form action="{{ route('admin.reservation.update', $reservation->key) }}" method="POST" class="d-inline">
                                        @method('PUT')
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-primary btn-action">
                                            <em class="icon ni ni-check-circle"></em> Confirmer
                                        </button>
                                    </form>
                                    @else
                                        <form action="{{ route('admin.reservation.cancel', $reservation->key) }}" method="POST" class="d-inline">
                                            @method('PUT')
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-success btn-action">
                                                <em class="icon ni ni-cross-circle"></em> Annuler
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
