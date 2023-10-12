@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')


    <section class="section service-head">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-xl-between justify-content-center">
                <div class="col-xl-6 col-12 p-0">
                    <h2>Digital Marketing</h2>
                    <p>
                        Discover our wide range of digital marketing services and tailored solutions for your business
                        <span>growth</span>. ​
                    </p>
                    <p>
                        Provide your business with a competitive edge through well-designed Web & Mobile services that suit
                        your needs perfectly.
                    </p>
                </div>
                <div class="col-xl-auto col-12 p-0">
                    <div class="img-container">

                        <img src="{{ asset('frontend/assets/images/services/service-digital.png') }}">
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
                        <img src="{{ asset('frontend/assets/images/services/icons/analysis.png') }}" class="img-fluid">
                        <div class="text">
                            <h4>Analytics and Reporting​</h4>
                            <p>
                                The monthly reports for your social channels' performance will measure your business growth
                                easily. Our mission is to gather and analyze the results based on these reports.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/social.png') }}" class="img-fluid">
                        <div class="text">
                            <h4>Social Media Management.​​</h4>
                            <p>
                                Managing your business online presence will strengthen your brand’s identity. We ensure your
                                brand consistency by using social media-updated tools for publishing and analyzing.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/content-management.png') }}"
                            class="img-fluid">
                        <div class="text">
                            <h4>Campaigns Management​​</h4>
                            <p>
                                Coordinating the campaign’s timeline and management by using ad platforms wisely for extra
                                smooth kickoffs, plus using tracking and analytics tools.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/atom.png') }}" class="img-fluid">
                        <div class="text">
                            <h4>Moderation.​</h4>
                            <p>
                                Responding and monitoring several types of content (comments and messages) across all social
                                media channels for better ad performance.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/erp 1.png') }}" class="img-fluid">
                        <div class="text">
                            <h4>Media Buying​​</h4>
                            <p>
                                We’re in charge of buying advertising spaces on digital platforms and tracking the ad's
                                performance all over the channels for better results.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/advertising.png') }}" class="img-fluid">
                        <div class="text">
                            <h4>Influencers Marketing</h4>
                            <p>
                                We help you grow your business by collaborating with influencers to promote products or
                                services. This service will enhance your brand and increase awareness and sales.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/Vector(1).png') }}" class="img-fluid">
                        <div class="text">
                            <h4>Content Creation</h4>
                            <p>
                                Power your brand’s image by generating creative and high-quality content. It helps you build
                                a strong relationship with your audience and keep them engaged.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/layer2.png') }}" class="img-fluid">
                        <div class="text">
                            <h4>Email Marketing</h4>
                            <p>
                                Promote your business easily by using emails as a marketing tool. We'll help you communicate
                                more with your clients and gain new audiences to stand out from competitors.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/Layer_x0020_1.png') }}" class="img-fluid">
                        <div class="text">
                            <h4>Planning Strategy</h4>
                            <p>
                                A strong, planned, and well-designed strategy will give your brand a sense of direction. Let
                                us handle this part of your brand image and take it to the next level.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/advertising_4695874 2.png') }}"
                            class="img-fluid">
                        <div class="text">
                            <h4>SEO / SEM</h4>
                            <p>
                                SEO and SEM tools will help your brand’s content rank in search engines. It also helps get
                                traffic and visibility on your website with both organic and paid search.
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
                    <div class="owl-active-nav">
                        <div class="owl-carousel js-owl-screenshot owl-loaded owl-drag">

                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-5250px, 0px, 0px); transition: all 1.0ss ease 0s; width: 8400px;">
                                    @foreach ($projects as $project)
                                        <div class="owl-item cloned" style="width: 1050px;">
                                            <div class="item">
                                                <img src="{{ url('projects/', $project->image) }}" class="img-fluid"
                                                    alt="App dashboard" width="1050" height="591">
                                                <h5>Fashion E-commerce Web site</h5>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span
                                        aria-label="Previous">‹</span></button><button type="button" role="presentation"
                                    class="owl-next"><span aria-label="Next">›</span></button></div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
