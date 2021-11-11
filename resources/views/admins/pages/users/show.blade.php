@extends('layouts.admin')

@section('title')
    ADMINISTRATION | EVENT-ALL
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between g-3">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Utilisateur / <strong class="text-primary medium">{{ $user->name }}</strong></h3>
                    </div>
                    <div class="nk-block-head-content">
                        <a href="{{ route('admin.users.index') }}" class="btn btn-outline-light btn-sm bg-white d-none d-sm-inline-flex">
                            <em class="icon ni ni-arrow-left"></em>
                            <span>Back</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="nk-block nk-block-lg">
                <div class="card">
                    <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal-info">
                                <em class="icon ni ni-info"></em>
                                <span>Information</span>
                            </a>
                        </li>
                    </ul>
                    <div class="card-inner">
                        <div class="tab-content">
                            <div class="tab-pane active" id="personal-info">
                                <div class="nk-block">
                                    <div class="profile-ud-list">
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Nom</span>
                                                <span class="profile-ud-value">{{ $user->name ?? "" }}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Addresse</span>
                                                <span class="profile-ud-value">{{ $user->address ?? "" }}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Email</span>
                                                <span class="profile-ud-value">{{ $user->email ?? "" }}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Prenom</span>
                                                <span class="profile-ud-value">{{ $user->surname ?? "" }}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Numero de Telephone</span>
                                                <span class="profile-ud-value">{{ $user->phone ?? "" }}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Date d'anniversaire</span>
                                                <span class="profile-ud-value">
                                                    {{ $user->birthdays ? $user->birthdays->format('Y:m:d') : "" }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Residence</span>
                                                <span class="profile-ud-value">{{ $user->residence }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3 text-center">
                                    <form action="{{ route('admin.users.restoreUser', $user->key) }}" method="POST" class="d-inline">
                                        @method('PUT')
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-warning">
                                            <em class="icon ni ni-undo"></em>
                                            <span>Restaurer</span>
                                        </button>
                                    </form>

                                    <form action="{{ route('admin.users.forceDelete', $user->key) }}" method="POST" class="d-inline">
                                        @method('DELETE')
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-danger">
                                            <em class="icon ni ni-cross-circle"></em> Supprimer
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
