@extends('layouts.app')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/corporate.css') }}" />
@endpush

@section('content')

<!-- start page title -->
<section class="top-space-margin page-title-big-typography cover-background magic-cursor round-cursor" style="background-image: url({{ asset('images/banner-001.jpg') }})">
    <div class="container">
        <div class="row extra-very-small-screen align-items-center">
            <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small" data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-30, 0], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium"><span class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>Nos services</h1>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->

<!-- start section -->
<div class="container mt-4">
    <!-- Formulaire de recherche -->
    <form action="{{ route('resultat') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="keywords" value="{{ $keywords }}" class="form-control" placeholder="Rechercher un service...">
            <button type="submit" class="btn btn-primary">Rechercher</button>
        </div>
    </form>

    @if (isset($message))
        <p class="text-center">{{ $message }}</p>
    @endif
</div>
<!-- end section -->

<!-- start section -->
<section id="down-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 pe-5 order-2 order-lg-1 lg-pe-3 md-pe-15px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="bg-solitude-blue border-radius-6px p-45px lg-p-30px mb-25px">
                    <span class="fs-19 alt-font text-dark-gray fw-700 mb-20px d-inline-block">Caractéristiques</span>
                    <ul class="p-0 m-0 list-style-02 fw-500">
                        @if ($services->isNotEmpty())
                            @foreach ($services as $service)
                                <li class="pb-10px mb-10px border-bottom border-color-transparent-dark">
                                    {{ $service->caracteristique ?? 'Non spécifié' }}
                                </li>
                            @endforeach
                        @else
                            <li>Aucune caractéristique disponible.</li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 order-1 order-lg-2 md-mb-50px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                @if ($services->isNotEmpty())
                    @foreach ($services as $service)
                        <div class="mb-40px">
                            <h4 class="text-dark-gray fw-700 alt-font mb-20px d-block">{{ $service->nom }}</h4>
                            <p>{{ $service->description }}</p>
                        </div>
                    @endforeach
                    <!-- Pagination -->
                    <div class="d-flex justify-content-center">
                        {{ $services->links() }}
                    </div>
                @else
                    <p>Aucun service disponible pour le moment.</p>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- end section -->

@endsection
