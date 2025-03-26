@extends('layouts.app')

@push('css')
    <!-- style sheets and font icons  -->
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
<section id="down-section">
    @extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Résultats de la recherche</h1>

        @if($services->isEmpty())
            <p>{{ $message ?? 'Aucun résultat trouvé.' }}</p>
        @else
            <ul>
                @foreach ($services as $service)
                    <li>
                        <strong>{{ $service->nom }}</strong><br>
                        <p>{{ $service->description }}</p>
                        <p><em>{{ $service->caracteristique }}</em></p>
                    </li>
                @endforeach
            </ul>

            <div class="pagination">
                {{ $services->links() }}
            </div>

            <p>{{ $totalResults }} résultat(s) trouvé(s) pour « {{ $keywords }} ».</p>
        @endif
    </div>
@endsection

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
                <div class="bg-dark-gray border-radius-6px ps-35px pb-25px pt-25px mb-25px">
                    <div class="feature-box feature-box-left-icon-middle">
                        <div class="feature-box-icon feature-box-icon-rounded w-65px h-65px lg-w-50px lg-h-50px me-20px lg-me-15px rounded-circle bg-base-color rounded-box">
                            <i class="bi bi-telephone-outbound icon-extra-medium text-white"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="lh-22 mb-10px d-block text-white opacity-6 fw-300">Nous contacter</span>
                            <span class="text-white fs-20 fw-500 lh-22 d-block"><a href="tel:+22892035012">+228 92035012</a></span>
                        </div>
                    </div>
                </div>
                <div class="bg-solitude-blue border-radius-6px p-40px lg-p-30px">
                    <!-- Contact form remains commented out -->
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

                <img src="https://via.placeholder.com/785x435" class="mt-30px md-mt-15px mb-60px md-mb-40px border-radius-6px" alt="">

                <h4 class="text-dark-gray fw-700 alt-font mb-40px lg-mb-30px d-block">Les avantages de travailler avec nous</h4>
                <div class="row align-items-center justify-content-center g-0">
                    <div class="col-12 d-block d-sm-flex align-items-center text-center text-sm-start">
                        <img src="https://via.placeholder.com/152x68" alt="" />
                        <div class="lh-28 last-paragraph-no-margin text-dark-gray ps-15px xs-ps-0 xs-mt-15px">
                            <p>"Économisez votre temps et vos efforts consacrés à trouver une solution. <a href='{{ route('contact') }}' class='text-decoration-line-bottom fw-700 text-dark-gray'>Contactez-nous</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

@endsection
