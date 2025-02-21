@extends('layouts.app')

@section('title', 'About-Us')

@push('css')

    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="{{ asset('css/demos/accounting/accounting.css') }}" />

@endpush


@section('content')


            <!-- start section -->
            <section class="bg-gradient-quartz-white border-radius-6px lg-border-radius-0px">
                <div class="container background-no-repeat background-position-center-bottom" style="background-image: url('https://via.placeholder.com/1126x630')">
                    <div class="row justify-content-center align-items-center mb-2" data-anime='{ "el": "childs", "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="col-4 col-lg-2 col-sm-3 xs-mb-25px">
                            <div class="swiper rounded-circle" data-slider-options='{ "slidesPerView": 1, "loop": true, "autoplay": { "delay": 1000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "fade" }'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="border-radius-50 w-100" src="https://via.placeholder.com/200x200" alt=""/>
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="border-radius-50 w-100" src="https://via.placeholder.com/200x200" alt=""/>
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="border-radius-50 w-100" src="https://via.placeholder.com/200x200" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-7 text-center text-sm-start">
                            <h5 class="alt-font text-dark-gray lh-40 fw-500 ls-minus-1px mb-0 ms-10px lg-ms-0" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 500, "staggervalue": 300, "easing": "easeOutQuad" }'>Plus de <span class="fw-800 text-base-color text-decoration-line-bottom-medium">2,000+</span> clients satisfaits font confiance à BHC.</h5>
                        </div>
                        <div class="col-xl-2 offset-xl-2 col-lg-3 offset-lg-1 col-sm-4 md-mt-35px text-center text-lg-start">
                            <h2 class="alt-font text-dark-gray fw-800 ls-minus-3px mb-5px" data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "delay": 300, "staggervalue": 100, "easing": "easeOutQuad" }'>100+</h2>
                            <span class="text-dark-gray fw-500 lh-24 d-inline-block w-90 lg-w-80 sm-w-100" data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "delay": 400, "staggervalue": 100, "easing": "easeOutQuad" }'>Équipe créative pour prendre en charge les projets.</span>
                        </div>
                        <div class="col-lg-2 col-sm-4 ps-40px md-ps-15px md-mt-35px text-center text-lg-start">
                            <h2 class="alt-font text-dark-gray fw-800 ls-minus-3px mb-5px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "delay": 100, "staggervalue": 100, "easing": "easeOutQuad" }'>4.9</h2>
                            <div class="review-star-icon fs-17 lh-20 d-block" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "delay": 200, "staggervalue": 100, "easing": "easeOutQuad" }'>
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <span class="text-dark-gray fw-500" data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "delay": 300, "staggervalue": 100, "easing": "easeOutQuad" }'>2,488 Notation</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <div class="swiper slider-one-slide magic-cursor dark" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 25, "loop": true, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1400": { "slidesPerView": 3 }, "1200": { "slidesPerView": 3 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                                <div class="swiper-wrapper pt-30px pb-30px">
                                    <!-- start review item -->
                                    <div class="swiper-slide review-style-07">
                                        <div class="d-flex justify-content-center h-100 flex-column border-radius-6px p-12 bg-white box-shadow-extra-large xl-p-10">
                                            <div class="mb-20px">
                                                <img src="https://via.placeholder.com/148x148" class="rounded-circle w-90px lg-w-65px me-15px" alt="">
                                                <div class="d-inline-block align-middle">
                                                    <div class="text-dark-gray fs-18 fw-600">Alex sanchez</div>
                                                    <div class="lh-24 fs-16">Tsevie Dzomi</div>
                                                </div>
                                            </div>
                                            <p class="mb-15px md-w-85 sm-w-100">Grâce à Business Help Consulting, j’ai pu bénéficier d’un appui technique de qualité pour le développement de mon entreprise. Ils ont su m’orienter vers les meilleures solutions adaptées à mon secteur.</p>
                                            <div class="d-flex align-items-center">
                                                <div class="d-inline-block me-auto">
                                                    <div class="text-dark-gray fw-700 float-start fs-15 me-10px">4.5</div>
                                                    <div class="review-star-icon float-start">
                                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                                                    </div>
                                                </div>
                                                <div class="d-inline-block fw-500 text-uppercase border-radius-30px ps-15px pe-15px fs-12 lh-28 bg-dark-gray text-white">30 Nov</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end review item -->
                                    <!-- start review item -->
                                    <div class="swiper-slide review-style-07">
                                        <div class="d-flex justify-content-center h-100 flex-column border-radius-6px p-12 bg-white box-shadow-extra-large xl-p-10">
                                            <div class="mb-20px">
                                                <img src="https://via.placeholder.com/148x148" class="rounded-circle w-90px lg-w-65px me-15px" alt="">
                                                <div class="d-inline-block align-middle">
                                                    <div class="text-dark-gray fs-18 fw-600">Alex sanchez</div>
                                                    <div class="lh-24 fs-16">TNT Group</div>
                                                </div>
                                            </div>
                                            <p class="mb-15px md-w-85 sm-w-100">J’avais besoin d’un espace professionnel pour recevoir mes clients et travailler en toute sérénité. Business Help Consulting m’a proposé une solution sur mesure qui répond parfaitement à mes attentes.</p>
                                            <div class="d-flex align-items-center">
                                                <div class="d-inline-block me-auto">
                                                    <div class="text-dark-gray fw-700 float-start fs-15 me-10px">4.5</div>
                                                    <div class="review-star-icon float-start">
                                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                                                    </div>
                                                </div>
                                                <div class="d-inline-block fw-500 text-uppercase border-radius-30px ps-15px pe-15px fs-12 lh-28 bg-dark-gray text-white">30 Nov</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end review item -->
                                    <!-- start review item -->
                                    <div class="swiper-slide review-style-07">
                                        <div class="d-flex justify-content-center h-100 flex-column border-radius-6px p-12 bg-white box-shadow-extra-large xl-p-10">
                                            <div class="mb-20px">
                                                <img src="https://via.placeholder.com/148x148" class="rounded-circle w-90px lg-w-65px me-15px" alt="">
                                                <div class="d-inline-block align-middle">
                                                    <div class="text-dark-gray fs-18 fw-600">Matthew taylor</div>
                                                    <div class="lh-24 fs-16">Microsoft word</div>
                                                </div>
                                            </div>
                                            <p class="mb-15px md-w-85 sm-w-100">Un service exceptionnel ! Business Help Consulting nous a aidés à domicilier notre entreprise rapidement et sans tracas. Leur équipe est réactive et très professionnelle. Je recommande vivement !</p>
                                            <div class="d-flex align-items-center">
                                                <div class="d-inline-block me-auto">
                                                    <div class="text-dark-gray fw-700 float-start fs-15 me-10px">5.0</div>
                                                    <div class="review-star-icon float-start">
                                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="d-inline-block fw-500 text-uppercase border-radius-30px ps-15px pe-15px fs-12 lh-28 bg-dark-gray text-white">28 Nov</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end review item -->
                                    <!-- start review item -->
                                    <div class="swiper-slide review-style-07">
                                        <div class="d-flex justify-content-center h-100 flex-column border-radius-6px p-12 bg-white box-shadow-extra-large xl-p-10">
                                            <div class="mb-20px">
                                                <img src="https://via.placeholder.com/148x148" class="rounded-circle w-90px lg-w-65px me-15px" alt="">
                                                <div class="d-inline-block align-middle">
                                                    <div class="text-dark-gray fs-18 fw-600">Matthew taylor</div>
                                                    <div class="lh-24 fs-16">Microsoft word</div>
                                                </div>
                                            </div>
                                            <p class="mb-15px md-w-85 sm-w-100">Trouver un espace de travail bien situé et accessible n’est pas facile. Heureusement, Business Help Consulting propose des solutions adaptées avec un excellent rapport qualité-prix !</p>
                                            <div class="d-flex align-items-center">
                                                <div class="d-inline-block me-auto">
                                                    <div class="text-dark-gray fw-700 float-start fs-15 me-10px">5.0</div>
                                                    <div class="review-star-icon float-start">
                                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="d-inline-block fw-500 text-uppercase border-radius-30px ps-15px pe-15px fs-12 lh-28 bg-dark-gray text-white">28 Nov</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end review item -->
                                    <!-- start review item -->
                                    <div class="swiper-slide review-style-07">
                                        <div class="d-flex justify-content-center h-100 flex-column border-radius-6px p-12 bg-white box-shadow-extra-large xl-p-10">
                                            <div class="mb-20px">
                                                <img src="https://via.placeholder.com/148x148" class="rounded-circle w-90px lg-w-65px me-15px" alt="">
                                                <div class="d-inline-block align-middle">
                                                    <div class="text-dark-gray fs-18 fw-600">Matthew taylor</div>
                                                    <div class="lh-24 fs-16">Microsoft word</div>
                                                </div>
                                            </div>
                                            <p class="mb-15px md-w-85 sm-w-100">Un service client impeccable ! J’ai pu domicilier mon entreprise en un temps record et bénéficier d’un suivi personnalisé. Merci à Business Help Consulting pour leur professionnalisme !</p>
                                            <div class="d-flex align-items-center">
                                                <div class="d-inline-block me-auto">
                                                    <div class="text-dark-gray fw-700 float-start fs-15 me-10px">5.0</div>
                                                    <div class="review-star-icon float-start">
                                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="d-inline-block fw-500 text-uppercase border-radius-30px ps-15px pe-15px fs-12 lh-28 bg-dark-gray text-white">28 Nov</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end review item -->
                                    <!-- start review item -->
                                    <div class="swiper-slide review-style-07">
                                        <div class="d-flex justify-content-center h-100 flex-column border-radius-6px p-12 bg-white box-shadow-extra-large xl-p-10">
                                            <div class="mb-20px">
                                                <img src="https://via.placeholder.com/148x148" class="rounded-circle w-90px lg-w-65px me-15px" alt="">
                                                <div class="d-inline-block align-middle">
                                                    <div class="text-dark-gray fs-18 fw-600">Matthew taylor</div>
                                                    <div class="lh-24 fs-16">Mossani</div>
                                                </div>
                                            </div>
                                            <p class="mb-15px md-w-85 sm-w-100">L’équipe de Business Help Consulting est dynamique et toujours prête à aider. Leur expertise en accompagnement financier m’a permis d’optimiser mon budget et de mieux gérer mes ressources.</p>
                                            <div class="d-flex align-items-center">
                                                <div class="d-inline-block me-auto">
                                                    <div class="text-dark-gray fw-700 float-start fs-15 me-10px">5.0</div>
                                                    <div class="review-star-icon float-start">
                                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="d-inline-block fw-500 text-uppercase border-radius-30px ps-15px pe-15px fs-12 lh-28 bg-dark-gray text-white">28 Nov</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end review item -->
                                    <!-- start review item -->
                                    <div class="swiper-slide review-style-07">
                                        <div class="d-flex justify-content-center h-100 flex-column border-radius-6px p-12 bg-white box-shadow-extra-large xl-p-10">
                                            <div class="mb-20px">
                                                <img src="https://via.placeholder.com/148x148" class="rounded-circle w-90px lg-w-65px me-15px" alt="">
                                                <div class="d-inline-block align-middle">
                                                    <div class="text-dark-gray fs-18 fw-600">Leonel mooney</div>
                                                    <div class="lh-24 fs-16">Adhoc</div>
                                                </div>
                                            </div>
                                            <p class="mb-15px md-w-85 sm-w-100">J’avais du mal à trouver un espace de travail adapté à mes besoins, mais grâce à Business Help Consulting, j’ai trouvé la solution idéale. Un cadre agréable et des services impeccables ! Merci !</p>
                                            <div class="d-flex align-items-center">
                                                <div class="d-inline-block me-auto">
                                                    <div class="text-dark-gray fw-700 float-start fs-15 me-10px">5.0</div>
                                                    <div class="review-star-icon float-start">
                                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="d-inline-block fw-500 text-uppercase border-radius-30px ps-15px pe-15px fs-12 lh-28 bg-dark-gray text-white">26 Nov</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end review item -->
                                    <!-- start review item -->
                                    <div class="swiper-slide review-style-07">
                                        <div class="d-flex justify-content-center h-100 flex-column border-radius-6px p-12 bg-white box-shadow-extra-large xl-p-10">
                                            <div class="mb-20px">
                                                <img src="https://via.placeholder.com/200x200" class="rounded-circle w-90px lg-w-65px me-15px" alt="">
                                                <div class="d-inline-block align-middle">
                                                    <div class="text-dark-gray fs-18 fw-600">Jacob kalling</div>
                                                    <div class="lh-24 fs-16">ALLPACKAGING</div>
                                                </div>
                                            </div>
                                            <p class="mb-15px md-w-85 sm-w-100">L'accompagnement technique et financier proposé par Business Help Consulting a été d'une grande aide pour structurer mon projet. Grâce à eux, j'ai pu obtenir des financements et démarrer mon activité sereinement.</p>
                                            <div class="d-flex align-items-center">
                                                <div class="d-inline-block me-auto">
                                                    <div class="text-dark-gray fw-700 float-start fs-15 me-10px">5.0</div>
                                                    <div class="review-star-icon float-start">
                                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="d-inline-block fw-500 text-uppercase border-radius-30px ps-15px pe-15px fs-12 lh-28 bg-dark-gray text-white">20 Nov</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end review item -->
                                    <!-- start review item -->
                                    <div class="swiper-slide review-style-07">
                                        <div class="d-flex justify-content-center h-100 flex-column border-radius-6px p-12 bg-white box-shadow-extra-large xl-p-10">
                                            <div class="mb-20px">
                                                <img src="https://via.placeholder.com/148x148" class="rounded-circle w-90px lg-w-65px me-15px" alt="">
                                                <div class="d-inline-block align-middle">
                                                    <div class="text-dark-gray fs-18 fw-600">Matthew taylor</div>
                                                    <div class="lh-24 fs-16">Microsoft word</div>
                                                </div>
                                            </div>
                                            <p class="mb-15px md-w-85 sm-w-100">Je recommande Business Help Consulting les yeux fermés ! Leur service de domiciliation d'entreprise est rapide et efficace, parfait pour les entrepreneurs qui veulent se concentrer sur leur activité.</p>
                                            <div class="d-flex align-items-center">
                                                <div class="d-inline-block me-auto">
                                                    <div class="text-dark-gray fw-700 float-start fs-15 me-10px">5.0</div>
                                                    <div class="review-star-icon float-start">
                                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="d-inline-block fw-500 text-uppercase border-radius-30px ps-15px pe-15px fs-12 lh-28 bg-dark-gray text-white">28 Nov</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end review item -->
                                    <!-- start review item -->
                                    <div class="swiper-slide review-style-07">
                                        <div class="d-flex justify-content-center h-100 flex-column border-radius-6px p-12 bg-white box-shadow-extra-large xl-p-10">
                                            <div class="mb-20px">
                                                <img src="https://via.placeholder.com/148x148" class="rounded-circle w-90px lg-w-65px me-15px" alt="">
                                                <div class="d-inline-block align-middle">
                                                    <div class="text-dark-gray fs-18 fw-600">Leonel mooney</div>
                                                    <div class="lh-24 fs-16">ECO ENERGY ET STOVE</div>
                                                </div>
                                            </div>
                                            <p class="mb-15px md-w-85 sm-w-100">Un excellent service ! L’équipe est à l’écoute et toujours disponible pour répondre à nos questions. Business Help Consulting nous a permis de structurer notre entreprise avec succès.</p>
                                            <div class="d-flex align-items-center">
                                                <div class="d-inline-block me-auto">
                                                    <div class="text-dark-gray fw-700 float-start fs-15 me-10px">5.0</div>
                                                    <div class="review-star-icon float-start">
                                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="d-inline-block fw-500 text-uppercase border-radius-30px ps-15px pe-15px fs-12 lh-28 bg-dark-gray text-white">26 Nov</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end review item -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <div class="fs-24 fw-500 text-dark-gray d-inline-block align-middle ls-minus-1px me-20px lg-m-10px lg-mt-0">Plus de <span class="fw-700 text-decoration-line-bottom-medium">10000+</span> avis clients satisfaits.</div>
                            <a href="{{ Route ('about') }}" target="_blank"><img src="https://via.placeholder.com/416x44" class="d-inline-block align-middle" alt=""></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->

        <!-- start section -->
        <section id="down-section">
            <div class="container">
                <div class="row g-0">
                    @livewire('show-posts-compact') <!-- Include the Livewire component -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <section class="bg-dark-gray" style="    padding-top: 5px; padding-bottom: 5px;"></section>
        <!-- end section -->

@endsection

@push('scripts')
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA56KqSJ11nQUw_tXgXyNMiPmQeM7EaSA&callback=initMap"></script>
    {{-- <script type="text/javascript" src="{{ asset('js/main.js') }}"></script> --}}
@endpush
