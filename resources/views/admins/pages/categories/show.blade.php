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
                        <h3 class="nk-block-title page-title">Categorie / <strong class="text-primary small">{{ $category->name }}</strong></h3>
                    </div>
                    <div class="nk-block-head-content">
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-light btn-sm bg-white d-none d-sm-inline-flex">
                            <em class="icon ni ni-arrow-left"></em>
                            <span>Back</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="nk-block">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="product-gallery mr-xl-1 mr-xxl-5">
                                    <div class="slider-init slick-initialized slick-slider" id="sliderFor" data-slick="{&quot;arrows&quot;: false, &quot;fade&quot;: true, &quot;asNavFor&quot;:&quot;#sliderNav&quot;, &quot;slidesToShow&quot;: 1, &quot;slidesToScroll&quot;: 1}">
                                        <div class="slick-list draggable">
                                            <div class="slick-track" style="opacity: 1; width: 2125px;">
                                                <div class="slider-item rounded slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 425px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" tabindex="0">
                                                    <img src="{{ asset('storage/'.$category->picture) }}" class="rounded w-100" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="product-info mt-2 mr-xxl-5">
                                    <h2 class="product-title">{{ $category->name }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
