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
                    <!-- <div class="col-xl-5 col-lg-6 text-center mb-1" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span class="text-dark-gray fw-700 fs-15 text-uppercase border-1 pb-5px border-bottom border-color-extra-medium-gray text-dark-gray"></span>
                    </div> -->
                </div>

            <!-- end section -->
            <!-- start section --> 
            <!-- <section class="py-0 sm-pt-50px" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="container overlap-section">
                    <div class="row justify-content-center g-0">
                        <div class="col-auto text-center last-paragraph-no-margin icon-with-text-style-08 pt-20px pb-20px ps-8 pe-8 md-ps-30px md-pe-30px bg-white border border-color-extra-medium-gray box-shadow-medium-bottom border-radius-100px xs-border-radius-10px">
                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                <div class="feature-box-icon me-10px">
                                    <i class="bi bi-chat-text icon-extra-medium text-base-color"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- end section -->
            <!-- start section -->
            <!-- <section class="position-relative overflow-hidden">
                <div class="container">
                  <div class='row justify-content-center align-center mb-6 sm-pb-9'>  
                <div class="col-lg-6 col-md-9 position-relative md-mb-15 text-center text-lg-start"
                     data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 15, "easing": "easeOutQuad" }'>
                    <div class="absolute-middle-center z-index-9 counter-style-02 text-center">
                        <span class="fs-160 fw-800 text-dark-gray ls-minus-10px xs-ls-minus-5px position-relative lg-fs-130 xs-fs-75">10<sub class="align-top fs-80 lg-fs-70 text-dark-gray position-relative top-minus-3px">+</sub></span>
                        <span class="d-block mx-auto fs-20 fw-500 lh-26 w-70 text-center text-dark-gray xs-w-100">Années d'experience</span>
                    </div>
                    <img src="{{ asset('images/demo-corporate-03.png') }}" alt="">
                    <img src="{{ asset('images/demo-corporate-01.webp') }}" class="position-absolute top-50 left-minus-100px lg-left-minus-40px sm-left-minus-30px lg-w-50 sm-w-55" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-220px)" alt="">
                    <img src="{{ asset('images/demo-corporate-02.png') }}" class="position-absolute top-0px xl-top-minus-10px w-170px right-20px md-right-40px xs-w-40" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)" alt="">
                </div>
                        <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 150, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <div class="swiper position-relative magic-cursor" data-slider-options='{ "autoHeight": true, "loop": true, "allowTouchMove": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "effect": "slide" }'>
                                <div class="swiper-wrapper mb-10px">
                                    <!-- start text slider item -->
                                    <!-- <div class="swiper-slide">
                                        <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-block">Notre mission</span>
                                        <h3 class="text-dark-gray fw-700 ls-minus-1px mb-20px">Nous aidons votre entreprise a grandir</h3>
                                        <p class="w-95 xl-w-100">vous avez une ideé d'entreprise nous vous accompagnon a le realiseé.</p>
                                    </div> -->
                                    <!-- end text slider item -->
                                    <!-- start text slider item -->
                                    <!-- <div class="swiper-slide">
                                        <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-block">Notre mission</span>
                                        <h3 class="text-dark-gray fw-700 ls-minus-1px mb-20px">Passez de l'ideé au projet avec nous </h3>
                                        <p class="w-95 xl-w-100">vous avez une ideé de projet nous vous aidons a le concretiser a partir du buisness plan au financement.</p>
                                    </div> -->
                                    <!-- end text slider item -->
                                    <!-- start text slider item -->
                                    <!-- <div class="swiper-slide">
                                        <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-block">Notre mission</span>
                                        <h3 class="text-dark-gray fw-700 ls-minus-1px mb-20px">creéz votre voie vers le succes</h3>
                                        <p class="w-95 xl-w-100">par un accompagnement adapter a votre secteur nous vous accompagnons vers votre reusssit</p>
                                    </div> -->
                                    <!-- end text slider item -->
                                <!-- </div> 
                                <div class="d-flex justify-content-center justify-content-lg-start">
                                    <!-- start slider navigation -->
                                    <!-- <div class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 border border-color-extra-medium-gray bg-white"><i class="bi bi-arrow-left-short icon-very-medium text-dark-gray"></i></div>
                                    <div class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 border border-color-extra-medium-gray bg-white"><i class="bi bi-arrow-right-short icon-very-medium text-dark-gray"></i></div> -->
                                    <!-- end slider navigation --> 
                                <!-- </div> -->
                            <!-- </div>
                        </div>
                    </div>
                    </div> 
                </div> -->
                <!-- <img src="https://via.placeholder.com/655x590" class="position-absolute bottom-minus-50px right-minus-50px z-index-minus-1" data-bottom-top="transform: rotate(0deg) translateY(0)" data-top-bottom="transform:rotate(-15deg) translateY(0)" alt=""/> --> -->
            <!-- </section> --> -->
            <!-- end section -->
            <!-- start section -->
            <!-- <section class="bg-gradient-quartz-white border-radius-6px"> 
                <div class="container">
                <div class="row justify-content-center mb-3">
    <div class="col-xl-5 col-md-7 col-lg-6 col-sm-8 text-align" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'> -->
    <div class="center-container">
    <h3 class="text-dark-gray fw-700 ls-minus-1px" style="white-space: nowrap;">Le personnel engagé est prêt à vous aider</h3>
</div>
>
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
            <!-- end scroll progress -->
        </div>
        <!-- javascript libraries -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/vendors.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
