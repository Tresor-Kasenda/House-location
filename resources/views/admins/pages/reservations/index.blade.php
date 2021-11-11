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
                        <h3 class="nk-block-title page-title">Reservations</h3>
                    </div>
                </div>
            </div>
            <div class="nk-block">
                <div class="nk-block nk-block-lg">
                    <div class="card card-preview">
                        <div class="card-inner">
                            <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                <thead>
                                <tr class="nk-tb-item nk-tb-head">
                                    <th class="nk-tb-col tb-col-md">
                                        <span class="sub-text">Nom de la salle</span>
                                    </th>
                                    <th class="nk-tb-col tb-col-md">
                                        <span class="sub-text">Adresse</span>
                                    </th>
                                    <th class="nk-tb-col tb-col-md">
                                        <span class="sub-text">Client</span>
                                    </th>
                                    <th class="nk-tb-col tb-col-md">
                                        <span class="sub-text">Date de reservation</span>
                                    </th>
                                    <th class="nk-tb-col tb-col-md">
                                        <span class="sub-text">Status</span>
                                    </th>
                                    <th class="nk-tb-col tb-col-md">
                                        <span class="sub-text">Prix</span>
                                    </th>
                                    <th class="nk-tb-col tb-col-md">
                                        <span class="sub-text">Action</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($reservations as $reservation)
                                    <tr class="nk-tb-item">
                                        <td class="nk-tb-col tb-col-md">
                                            <span>{{ strtoupper($reservation->room->title) ?? ""}}</span>
                                        </td>
                                        <td class="nk-tb-col tb-col-md">
                                            <span>{{ $reservation->room->address ?? "" }}</span>
                                        </td>
                                        <td class="nk-tb-col tb-col-md">
                                            <span>{{ strtoupper($reservation->user->name ?? "") }}</span>
                                        </td>
                                        <td class="nk-tb-col tb-col-md">
                                            <span>{{ $reservation->start_date->format('Y') ?? "" }}</span>
                                        </td>
                                        <td class="nk-tb-col tb-col-md">
                                            @if($reservation->status)
                                                <span class="badge badge-dot badge-dot-xs badge-success">Active</span>
                                            @else
                                                <span class="badge badge-dot badge-dot-xs badge-warning">Pending</span>
                                            @endif
                                        </td>
                                        <td class="nk-tb-col tb-col-md">
                                            <span>{{ $reservation->getPrices() }}</span>
                                        </td>
                                        <td class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown">
                                                            <em class="icon ni ni-more-h"></em>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li>
                                                                    <a href="{{ route('admin.reservation.show', $reservation->key) }}">
                                                                        <em class="icon ni ni-eye"></em>
                                                                        <span>View</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <form action="{{ route('admin.reservation.destroy', $reservation->key) }}" method="POST" onsubmit="return confirm('Voulez vous supprimer');">
                                                                        @method('DELETE')
                                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                        <button type="submit" class="btn btn-dim">
                                                                            <em class="icon ni ni-trash"></em>
                                                                            <span>Remove</span>
                                                                        </button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
