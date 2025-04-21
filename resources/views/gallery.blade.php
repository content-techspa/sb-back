@extends('template.template')
@section('content')

<div class="edu-breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-inner">
            <div class="page-title">
                <h1 class="title">Gallery</h1>
            </div>
            <ul class="edu-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
            </ul>
        </div>
    </div>
</div>

<!-- Gallery Area Start -->
<div class="edu-gallery-area edu-section-gap">
    <div class="container">
        <div class="isotope-wrapper">
            <!-- Filter Buttons -->
            <div class="isotop-button button-transparent isotop-filter">
                <button data-filter="*" class="is-checked">
                    <span class="filter-text">All</span>
                </button>
                @foreach ($categories as $category)
                    <button data-filter=".{{ Str::slug($category->name) }}">
                        <span class="filter-text">{{ $category->name }}</span>
                    </button>
                @endforeach
            </div>
            
            <!-- Gallery Grid -->
            <div class="isotope-list gallery-grid-wrap">
                <div id="animated-thumbnials">
                    @foreach ($categories as $category)
                        @foreach ($category->images as $image)
                            <a href="{{ Storage::url($image->image_path) }}" 
                               class="edu-popup-image edu-gallery-grid p-gallery-grid-wrap isotope-item {{ Str::slug($category->name) }}">
                                <div class="thumbnail">
                                    <img src="{{ Storage::url($image->image_path) }}" alt="{{ $image->title }}">
                                </div>
                                <div class="zoom-icon">
                                    <i class="icon-69"></i>
                                </div>
                            </a>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
