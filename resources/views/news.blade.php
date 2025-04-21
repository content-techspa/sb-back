@extends('template.template')
@section('content')

<div class="edu-breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-inner">
            <div class="page-title">
                <h1 class="title">News</h1>
            </div>
            <ul class="edu-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">News</li>
            </ul>
        </div>
    </div>
</div>

<section class="section-gap-equal">
    <div class="container">
        <div class="row g-5" id="masonry-gallery">
            @if ($newsItems->isEmpty())
    <div class="col-12 text-center">
        <p>No news found</p>
    </div>
@else
    @foreach ($newsItems as $news)
        <div class="col-lg-4 col-md-6 col-12 masonry-item" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
            <div class="edu-blog blog-style-5">
                <div class="inner">
                    <div class="thumbnail">
                        <a href="{{ route('newsdetail', $news->slug) }}">
                            <img src="{{ Storage::url($news->cover_image) }}" alt="{{ $news->title }}">
                        </a>
                    </div>
                    <div class="content position-top">
                        <div class="read-more-btn">
                            <a class="btn-icon-round" href="{{ route('newsdetail', $news->slug) }}"><i class="icon-4"></i></a>
                        </div>
                        <div class="category-wrap">
                            <a href="#" class="blog-category">News</a>
                        </div>
                        <h5 class="title"><a href="{{ route('newsdetail', $news->slug) }}">{{ $news->title }}</a></h5>
                        <ul class="blog-meta">
                            <li><i class="icon-27"></i>{{ $news->created_at->format('M d, Y') }}</li>
                        </ul>
                        <p>{{ Str::limit($news->content, 100) }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
        </div>

        <ul class="edu-pagination top-space-30">
            {{ $newsItems->links() }}
        </ul>
    </div>
</section>

@endsection
