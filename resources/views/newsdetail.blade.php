@extends('template.template')
@section('content')

<div class="edu-breadcrumb-area breadcrumb-style-2 bg-image bg-image--19">
    <div class="container">
        <div class="breadcrumb-inner">
            <div class="page-title">
                <h1 class="title">News</h1>
            </div>
            <ul class="edu-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item"><a href="{{ route('news') }}">News</a></li>
                <li class="separator"><i class="icon-angle-right"></i></li>
                <li class="breadcrumb-item active" aria-current="page">Detail</li>
            </ul>
        </div>
    </div>
</div>

<div class="blog-details-area section-gap-equal">
    <div class="container">
        <div class="row row--30">
            <div class="col-lg-8">
                <div class="blog-details-content">
                    <div class="entry-content">
                        <h3 class="title">{{ $news->title }}</h3>
                        <ul class="blog-meta">
                            <li><i class="icon-27"></i>{{ $news->created_at->format('M d, Y') }}</li>
                        </ul>
                        <div class="thumbnail">
                            <img src="{{ Storage::url($news->cover_image) }}" alt="{{ $news->title }}">
                        </div>
                    </div>
                    <p>{!! nl2br(e($news->content)) !!}</p>

                    <div class="blog-share-area">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <div class="blog-tags">
                                    <h6 class="title">Keywords:</h6>
                                    <div class="tag-list">
                                        @foreach (explode(',', $news->keywords) as $keyword)
                                            <a href="#">{{ trim($keyword) }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="blog-share">
                                    <h6 class="title">Share on:</h6>
                                    <ul class="social-share icon-transparent">
                                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="edu-blog-sidebar">
                    <div class="edu-blog-widget widget-latest-post">
                        <div class="inner">
                            <h4 class="widget-title">Latest Posts</h4>
                            <div class="content latest-post-list">
                                @foreach ($latestNews as $latest)
                                    <div class="latest-post">
                                        <div class="thumbnail">
                                            <a href="{{ route('newsdetail', $latest->slug) }}">
                                                <img src="{{ Storage::url($latest->cover_image) }}" alt="{{ $latest->title }}">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <h6 class="title"><a href="{{ route('newsdetail', $latest->slug) }}">{{ $latest->title }}</a></h6>
                                            <ul class="blog-meta">
                                                <li><i class="icon-27"></i>{{ $latest->created_at->format('M d, Y') }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
