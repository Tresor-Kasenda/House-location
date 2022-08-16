@extends('backend.layout.admin')

@section('title', "Administration des appartements")

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-md">
                <div class="nk-block-between g-3">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Détail / <strong
                                    class="text-primary small">{{ $room->commune ?? "" }}</strong></h3>
                    </div>
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            <div class="toggle-expand-content" data-content="pageMenu">
                                <ul class="nk-block-tools g-3">
                                    <li class="preview-item">
                                        @if ($room->status == false)
                                            @include('backend.components._update', [
                                                'route' => route('admins.apartment.active',$room->key),
                                                'button' => 'btn-outline-success btn-sm',
                                                'icon' => 'ni-check-circle',
                                                'title' => 'Activer'
                                            ])
                                        @else
                                            @include('backend.components._update', [
                                                'route' => route('admins.apartment.inactive',$room->key),
                                                'button' => 'btn-outline-danger btn-sm',
                                                'icon' => 'ni-check-circle',
                                                'title' => 'Désactiver'
                                            ])
                                        @endif
                                    </li>
                                    <li class="preview-item">
                                        <a href="{{ route('admins.houses.index') }}"
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
            @if($room->status == false)
                <div class="alert alert-danger alert-icon " role="alert">
                    <em class="icon ni ni-alert-circle"></em>
                    Cette appartement ne pas encore activé. Veillez l'activer pour qu'elle soie visible
                </div>
            @endif
            <div class="nk-block nk-block-lg">
                <div class="nk-block">
                    <div class="justify-content text-center p-2">
                        <img
                                src="{{ asset('storage/'.$room->images) }}"
                                alt="{{ $room->commune }}"
                                class="img-fluid img-thumbnail rounded-circle"
                                height="15%"
                                width="10%"
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
                                                    <span class="profile-ud-label">Commune</span>
                                                    <span class="profile-ud-value">{{ $room->commune ?? "" }}</span>
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
                                                    <span class="profile-ud-label">Quartier</span>
                                                    <span class="profile-ud-value">{{ $room->district ?? "" }}</span>
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
                                                    <span class="profile-ud-value">{{ $room->prices ?? "" }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Nombre des pieces</span>
                                                    <span class="profile-ud-value">{{ $room->detail->number_pieces ?? "" }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Garantie</span>
                                                    <span class="profile-ud-value">{{ $room->guarantees ?? "" }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Categories</span>
                                                    @if($room->categories)
                                                        @foreach($room->categories as $category)
                                                            <span class="profile-ud-value badge badge-circle">
                                                                {{ $category->name ?? "" }}
                                                            </span>
                                                        @endforeach
                                                    @endif
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
