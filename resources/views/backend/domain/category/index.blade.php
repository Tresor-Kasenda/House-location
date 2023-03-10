@extends('backend.layout.backend')

@section('title')
    Gestion des categories
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Categories</h3>
                    </div>
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            <div class="toggle-expand-content" data-content="pageMenu">
                                <ul class="nk-block-tools g-3">
                                    <li class="preview-item">
                                        <a href="{{ route('admins.categories.create') }}"
                                           class="btn btn-dim btn-primary btn-sm">
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
                                <tr class="nk-tb-item nk-tb-head text-center">
                                    <th class="nk-tb-col tb-col-md">
                                        <span class="sub-text">Nom</span>
                                    </th>

                                    <th class="nk-tb-col text-center">
                                        <span class="sub-text">Actions</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr class="nk-tb-item">
                                        <td class="nk-tb-col tb-col-md text-center">
                                            <span class="font-weight-bold">{{ ucfirst($category->name) ?? "" }}</span>
                                        </td>
                                        <td class="nk-tb-col nk-tb-col-tools">
                                            <span class="tb-lead">
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route('admins.categories.edit', $category->id) }}" class="btn btn-dim btn-primary btn-sm ml-1">
                                                        <em class="icon ni ni-edit"></em>
                                                    </a>
                                                    <a
                                                        class="btn btn-dim btn-danger btn-sm"
                                                        href="#"
                                                        onclick="deleteConfirm('delete-category-{{$category->id}}')"
                                                    ><em class="icon ni ni-trash"></em></a>

                                                    <form action="{{ route('admins.categories.destroy', $category->id) }}" method="POST" id="delete-category-{{$category->id}}">
                                                        @method('DELETE')
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    </form>
                                                </div>
                                            </span>
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

