@extends('layouts.app')

@section('title', 'Blog')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/demos/accounting/accounting.css') }}" />
@endpush

@section('content')

    <!-- Section d'en-tête avec image de fond -->
    <section class="top-space-margin page-title-big-typography cover-background magic-cursor round-cursor" style="background-image: url({{ asset('images/banner-001.jpg') }})">
        <div class="container">
            <div class="row extra-very-small-screen align-items-center">
                <div class="col-lg-8 col-sm-8 position-relative page-title-extra-small">
                    <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0">Latest Blog</h2>
                    <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium"><span class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>Articles</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section de blogs -->
    <section id="down-section">
        <div class="container">
            <div class="row g-0">
                @foreach($blog as $blogs)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="blog-post">
                            <!-- Image du blog -->
                            <div class="blog-img">
                                @if($blogs->image)
                                    <img src="{{ asset('storage/' . $blogs->image) }}" alt="{{ $blogs->title }}" class="img-fluid" />
                                @else
                                    <img src="{{ asset('images/default-blog.jpg') }}" alt="Default Blog Image" class="img-fluid" />
                                @endif
                            </div>

                            <!-- Contenu du blog -->
                            <div class="blog-content">
                                <h4 class="blog-title">{{ $blogs->title }}</h4>
                                <p class="blog-excerpt">{{ \Str::limit($blogs->content, 100) }}</p>
                                <a href="{{ route('blogs.show', $blogs->id) }}" class="btn btn-primary">Lire plus</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section de séparation ou autre contenu -->
    <section class="bg-dark-gray" style="padding-top: 5px; padding-bottom: 5px;"></section>

@endsection
