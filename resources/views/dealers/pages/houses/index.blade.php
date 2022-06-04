@extends('layouts.dealer')

@section('title', "Creation des maison")

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Apartments</h3>
                    </div>
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            <div class="toggle-expand-content" data-content="pageMenu">
                                <ul class="nk-block-tools g-3">
                                    <li class="preview-item">
                                        <a href="{{ route('commissioner.houses.create') }}" class="btn btn-dim btn-primary btn-sm">
                                            <em class="icon ni ni-plus mr-1"></em> Create
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
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
                                    <th class="nk-tb-col tb-col-mb">
                                        <span class="sub-text">Photo</span>
                                    </th>
                                    <th class="nk-tb-col tb-col-mb">
                                        <span class="sub-text">Reference</span>
                                    </th>
                                    <th class="nk-tb-col tb-col-md">
                                        <span class="sub-text">Telephone</span>
                                    </th>
                                    <th class="nk-tb-col tb-col-md">
                                        <span class="sub-text">Addresse</span>
                                    </th>
                                    <th class="nk-tb-col tb-col-md">
                                        <span class="sub-text">Status</span>
                                    </th>
                                    <th class="nk-tb-col tb-col-md">
                                        <span class="sub-text">Commune</span>
                                    </th>
                                    <th class="nk-tb-col nk-tb-col-tools text-right">
                                        <span class="sub-text">Actions</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($houses as $room)
                                    <tr class="nk-tb-item">
                                        <td class="nk-tb-col tb-col-sm">
                                            <span class="tb-product text-center">
                                                <img src="{{ asset('storage/'.$room->images) }}" alt="{{ $room->username }}" class="thumb">
                                            </span>
                                        </td>
                                        <td class="nk-tb-col tb-col-md font-weight-bold">
                                            <span>{{ $room->reference ?? "" }}</span>
                                        </td>
                                        <td class="nk-tb-col tb-col-md">
                                            <span>{{ $room->phoneNumber ?? "" }}</span>
                                        </td>
                                        <td class="nk-tb-col tb-col-md">
                                            <span>{{ $room->address ?? "" }}</span>
                                        </td>
                                        <td class="nk-tb-col tb-col-md">
                                            @if($room->status)
                                                <span class="dot bg-success d-mb-none"></span>
                                                <span class="badge badge-sm badge-dot has-bg badge-success d-none d-mb-inline-flex">Confirmer</span>
                                            @else
                                                <span class="dot bg-warning d-mb-none"></span>
                                                <span class="badge badge-sm badge-dot has-bg badge-warning d-none d-mb-inline-flex">En attente</span>
                                            @endif
                                        </td>
                                        <td class="nk-tb-col tb-col-md">
                                            <span>{{ $room->commune ?? "" }}</span>
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
                                                                    <a href="{{ route('commissioner.houses.show', $room->key) }}">
                                                                        <em class="icon ni ni-eye"></em>
                                                                        <span>Voir</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('commissioner.houses.edit', $room->key) }}">
                                                                        <em class="icon ni ni-edit"></em>
                                                                        <span>Editer</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <form action="{{ route('commissioner.houses.destroy', $room->key) }}" method="POST" onsubmit="return confirm('Voulez vous supprimer');">
                                                                        @method('DELETE')
                                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                        <button type="submit" class="btn btn-dim">
                                                                            <em class="icon ni ni-cross-sm"></em>
                                                                            <span>Suspendre</span>
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
