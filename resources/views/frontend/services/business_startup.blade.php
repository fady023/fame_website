@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')


    <section class="section service-head">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-xl-between justify-content-center">
                <div class="col-xl-6 col-12 p-0">
                    <h2>Business Startups ​</h2>
                    <p>
                        Make your dream business come true on <span>MENA</span> region with our experts.​
                    </p>
                    <p>
                        FAME is the smartest portal for establishing your business in UAE with our consultancy services for
                        start-ups.​
                    </p>
                </div>
                <div class="col-xl-auto col-12 p-0">
                    <div class="img-container">

                        <img
                            src="{{ asset('frontend/assets/images/services/stock-market-investor-analyst-broker-analyzing-financial-trade-crypto-stock-market-exchange-platform 4.png') }}">
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
                        <img src="{{ asset('frontend/assets/images/services/icons/business-plan_9590251 1.png') }}"
                            class="img-fluid">
                        <div class="text">
                            <h4>Business Plans.​</h4>
                            <p>
                                Foster your business with a tailored plan that fits your industry, and define your
                                objectives through market analytics. A professional business plan will clear your future
                                roadmap.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/analytics_6012596 1.png') }}"
                            class="img-fluid">
                        <div class="text">
                            <h4>Market Research</h4>
                            <p>
                                We’ll help you grow your business online by gathering data on consumers, competitors, and
                                market trends with valuable statistics for driving your business revenue.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/registration_10013421 1.png') }}"
                            class="img-fluid">
                        <div class="text">
                            <h4> License Registration</h4>
                            <p>
                                We help you set up your business easily and smoothly in the UAE with zero hassle. Unlock the
                                potential of growing your business in a unique environment with us.
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
