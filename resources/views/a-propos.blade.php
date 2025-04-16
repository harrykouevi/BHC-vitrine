@extends('layouts.app')

@section('title', 'a-propos')

 <!-- @push('css')
     style sheets and font icons  
    <link rel="stylesheet" href="{{ asset('css/demos/accounting/accounting.css') }}" />
@endpush -->


@section('content')
    <!-- start page title -->
    <section class="top-space-margin page-title-big-typography cover-background magic-cursor round-cursor" style="background-image: url({{ asset('images/banner-001.jpg') }}">
        <div class="container">
            <div class="row extra-very-small-screen align-items-center">
                <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small" data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-30, 0], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium"><span class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>A Propos de nous</h1>
                    <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0">Notre histoire</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section id="down-section" class="border-bottom border-color-extra-medium-gray">
        <div class="container overlap-gap-section"> 
            <div class="row align-items-end justify-content-center mb-5 md-mb-40px text-center text-md-start">                    
                <div class="col-xl-5 col-lg-6 col-md-10 md-mb-20px text-center text-lg-start" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-block">A Propos de nous</span>
                    <h3 class="text-dark-gray fw-700 mb-0 ls-minus-1px">Buisness Help Consulting</h3>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-10 offset-xl-1 text-center text-lg-start last-paragraph-no-margin">
                    <p class="w-90 xl-w-100" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Buisness help consulting est né d'une initiative dédiée à l’accompagnement et au renforcement des capacités des jeunes entrepreneurs ou porteurs d'idée innovantes d'entreprises au Togo. Nous offrons des solutions sur mesure pour soutenir les porteurs de projets, de l'idée à la concrétisation et au développement de leurs futures entreprises.</Buisness help consulting est né d'une initiative dédiée à l’accompagnement et au renforcement des capacités des jeunes entrepreneurs ou porteurs d'idée innovantes d'entreprises au Togo. Nous offrons des solutions sur mesure pour soutenir les porteurs de projets, de l'idée à la concrétisation et au développement de leurs futures entreprises.</p>
                    </div>
                    </div><span class="fw-600 text-dark-gray text-decoration-line-bottom"></span></p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 row-cols-sm-2 justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- start features box item -->
                <div class="col custom-icon-with-text-style-02">
                    <div class="feature-box p-6 last-paragraph-no-margin overflow-hidden md-mb-20px">
                        <div class="feature-box-icon">
                            <img class="custom-image-icon mb-20px" src="https://via.placeholder.com/60x60" alt="" />
                        </div>
                        <div class="feature-box-content">
                            <span class="d-block fs-19 fw-700 text-dark-gray mb-5px">Passez de l'idée au projet</span>
                            <p>vous avez une idée,nous vous aidons a le concretiser en projet .</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col custom-icon-with-text-style-02">
                    <div class="feature-box p-6 last-paragraph-no-margin overflow-hidden md-mb-20px">
                        <div class="feature-box-icon">
                            <img class="custom-image-icon mb-20px" src="https://via.placeholder.com/60x60" alt="" />
                        </div>
                        <div class="feature-box-content">
                            <span class="d-block fs-19 fw-700 text-dark-gray mb-5px">créez votre voie vers le succes</span>
                            <p>nous vous aidons peut importe votre etapes a trouvez la voie de votre succes.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col custom-icon-with-text-style-02">
                    <div class="feature-box p-6 last-paragraph-no-margin overflow-hidden xs-mb-20px">
                        <div class="feature-box-icon">
                            <img class="custom-image-icon mb-20px" src="https://via.placeholder.com/60x60" alt="" />
                        </div>
                        <div class="feature-box-content">
                            <span class="d-block fs-19 fw-700 text-dark-gray mb-5px">Accompagnement</span>
                            <p>Nous accompagnos votre entreprise de l'idée a la realisation en passant par le buisness plan.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col custom-icon-with-text-style-02">
                    <div class="feature-box p-6 last-paragraph-no-margin overflow-hidden">
                        <div class="feature-box-icon">
                            <img class="custom-image-icon mb-20px" src="https://via.placeholder.com/60x60" alt="" />
                        </div>
                        <div class="feature-box-content">
                            <span class="d-block fs-19 fw-700 text-dark-gray mb-5px">Support</span>
                            <p>Nous vous offrons du support pour vos levez de fond</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="pt-0">
        <div class="container">
            <div class="row justify-content-center">
                
            </div>

            <div class="center-container">
                <h3 class="text-dark-gray fw-700 ls-minus-1px" style="white-space: nowrap;">Le personnel engagé est prêt à vous aider</h3>
            </div>


            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- start team member item --> 
                <div class="col team-style-08 border-radius-6px md-mb-30px">
                    <figure class="mb-0 position-relative overflow-hidden border-radius-4px">
                        <img src="https://via.placeholder.com/600x755" alt="" />
                        <figcaption class="w-100 h-100 d-flex align-items-end p-13 lg-p-8 md-p-10 bg-gradient-base-transparent border-radius-6px">
                            <div class="w-100">
                                <span class="team-member-name fw-500 text-white d-block"></span>
                                <span class="member-designation fs-15 lh-20 text-white d-block"></span>
                            </div>
                            <div class="social-icon d-flex flex-column flex-shrink-1">
                                <a href="https://www.twitter.com/" target="_blank" class="text-dark-gray bg-white"><i class="fa-brands fa-twitter icon-small"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- end team member item -->  
                <!-- start team member item --> 
                <div class="col team-style-08 border-radius-6px md-mb-30px">
                    <figure class="mb-0 position-relative overflow-hidden border-radius-4px">
                        <img src="https://via.placeholder.com/600x755" alt="" />
                        <figcaption class="w-100 h-100 d-flex align-items-end p-13 lg-p-8 md-p-10 bg-gradient-base-transparent border-radius-6px">
                            <div class="w-100">
                                <span class="team-member-name fw-500 text-white d-block"></span>
                                <span class="member-designation fs-15 lh-20 text-white d-block"></span>
                            </div>
                            <div class="social-icon d-flex flex-column flex-shrink-1">
                                <a href="https://www.linkedin.com/" target="_blank" class="text-dark-gray bg-white"><i class="fa-brands fa-linkedin-in icon-small"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- end team member item -->   
                <!-- start team member item --> 
                <div class="col team-style-08 border-radius-6px xs-mb-30px">
                    <figure class="mb-0 position-relative overflow-hidden border-radius-4px">
                        <img src="https://via.placeholder.com/600x755" alt="" />
                        <figcaption class="w-100 h-100 d-flex align-items-end p-13 lg-p-8 md-p-10 bg-gradient-base-transparent border-radius-6px">
                            <div class="w-100">
                                <span class="team-member-name fw-500 text-white d-block"></span>
                                <span class="member-designation fs-15 lh-20 text-white d-block"></span>
                            </div>
                            <div class="social-icon d-flex flex-column flex-shrink-1">
                                <a href="https://www.behance.net/" target="_blank" class="text-dark-gray bg-white"><i class="fa-brands fa-behance icon-small"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- end team member item -->   
                <!-- start team member item --> 
                <div class="col team-style-08 border-radius-6px">
                    <figure class="mb-0 position-relative overflow-hidden border-radius-4px">
                        <img src="https://via.placeholder.com/600x755" alt="" />
                        <figcaption class="w-100 h-100 d-flex align-items-end p-13 lg-p-8 md-p-10 bg-gradient-base-transparent border-radius-6px">
                            <div class="w-100">
                                <span class="team-member-name fw-500 text-white d-block">Johncy parker</span>
                                <span class="member-designation fs-15 lh-20 text-white d-block">Manager</span>
                            </div>
                            <div class="social-icon d-flex flex-column flex-shrink-1">
                                <a href="https://www.facebook.com/" target="_blank" class="text-dark-gray bg-white"><i class="fa-brands fa-facebook-f icon-small"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- end team member item -->   
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 text-center mb-1" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="text-dark-gray fw-700 fs-15 text-uppercase border-1 pb-5px border-bottom border-color-extra-medium-gray text-dark-gray">joignez vous a nous</span>
                </div>
            </div>
            <div class="row position-relative clients-style-08 mt-25px" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 800, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col swiper text-center feather-shadow" data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 3000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false, "pauseOnMouseEnter": false}, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 5 }, "768": { "slidesPerView": 3 }, "576": { "slidesPerView": 2 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('images/logos/ADHOC-logo.png') }}" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('images/logos/mossani-logo.png') }}" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('images/logos/all-packing-logo.png') }}" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('images/logos/tsevie-dzomi-logo.png') }}" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('images/logos/marmite-logo.png') }}" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('images/img-0003.png') }}" alt="" /></a>
                        </div>
                        <!-- end client item -->
                    </div> 
                </div>  
            </div>
        </div>
    </section>
    <!-- end section -->
<
    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>
@endsection
