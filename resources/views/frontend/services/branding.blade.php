@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')


    <section class="section service-head">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-xl-between justify-content-center">
                <div class="col-xl-6 col-12 p-0">
                    <h2>Branding</h2>
                    <p>
                        Building a brand is like building a relationship. It needs trust, communication and honesty.​
                    </p>
                    <p>
                        Transform your ideas into <span>reality</span> now with our innovative team creators.​
                    </p>
                </div>
                <div class="col-xl-auto col-12 p-0">
                    <div class="img-container">

                        <img
                            src="{{ asset('frontend/assets/images/services/stock-market-investor-analyst-broker-analyzing-financial-trade-crypto-stock-market-exchange-platform 2.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section pb-0 service-details">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h2>Our Services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/creative-process_9735946 1.png') }}"
                            class="img-fluid">
                        <div class="text">
                            <h4>Logo Creation​</h4>
                            <p>
                                A strong logo will help drive sales by making your brand more appealing to customers. Start
                                building successful brand loyalty with your customers with our design team now.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/fingerprint_9679443 1.png') }}"
                            class="img-fluid">
                        <div class="text">
                            <h4>Brand Identity​​</h4>
                            <p>
                                Want to make your brand unique? Our service will help your brand stand out from the
                                competition, make a lasting impression on potential customers, and drive sales.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/package_2795395 1.png') }}"
                            class="img-fluid">
                        <div class="text">
                            <h4>Packaging​​</h4>
                            <p>
                                In today's crowded marketplace, it is more important than ever for businesses to have a
                                clear and unique brand strategy. We’ll help your business grow and succeed in the long
                                term.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/pendulum_7953625 1.png') }}"
                            class="img-fluid">
                        <div class="text">
                            <h4>Pintables​​</h4>
                            <p>
                                Make your printables valuable! We’re specializing in helping companies grow their brands by
                                using printables that are visually appealing to meet their goals.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        {{-- <img src="{{ asset('frontend/assets/images/services/icons/monitor_10153826 1.png') }}"
                            class="img-fluid"> --}}
                        <div class="text">
                            <h4>BTL​​​</h4>
                            <p>
                                BTL "below the line" marketing allows your brand to cut through the noise and reach your
                                target audiences. We'll help you by using a variety of BTL tactics to achieve your business
                                goals.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/new-product_5248268 1.png') }}"
                            class="img-fluid">
                        <div class="text">
                            <h4>Giveaways</h4>
                            <p>
                                It's a type of marketing for promoting brands and reaching potential customers. Let us help
                                your brand with successful giveaway campaigns to achieve your marketing goals.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="section service-projects">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Our Projects</h2>
                </div>
                <p class="col-xl-4 col-lg-6">
                    We are proud of our work and happy to show our case studies
                </p>
            </div>
            <div class="row">
                <div class="col-lg-12 px-sm-3 px-0">

                    <div class="swiper-1 swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            @foreach ($projects as $project)
                                <div class="swiper-slide">
                                    <div class="item">
                                        <img src="{{ url('projects/', $project->image) }}" class="img-fluid"
                                            alt="App dashboard" width="1050" height="591">
                                        <h5>Fashion E-commerce Web site</h5>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-button-prev prev-1"></div>
                    <div class="swiper-button-next next-1"></div>
                </div>
            </div>
        </div>
    </section>

@endsection
