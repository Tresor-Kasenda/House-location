@extends('backend.layout.backend')

@section('title', "Administration des categories")

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between g-3">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Creation des categories</h3>
                </div>
                <div class="nk-block-head-content">
                    <a href="{{ route('admins.categories.index') }}"
                       class="btn btn-outline-light btn-sm bg-white d-none d-sm-inline-flex">
                        <em class="icon ni ni-arrow-left"></em>
                        <span>Back</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="nk-block">
            <div class="card">
                <div class="card-aside-wrap">
                    <div class="card-inner card-inner-lg">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                @include('backend.components.errors')
                                @include('backend.domain.category._form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
