@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
    <section class="section service-head">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-xl-between justify-content-center">
                <div class="col-xl-6 col-12 p-0">
                    <h2>PR and Communications​​</h2>
                    <p>
                        We focus on your costumers' needs with our PR & Communication services to drive a positive impact on
                        your business <span>online</span>.​
                    </p>
                    <p>
                        Deliver your brand's message, value and voice easily to your clients NOW with FAME!
                    </p>
                </div>
                <div class="col-xl-auto col-12 p-0">
                    <div class="img-container">

                        <img
                            src="{{ asset('frontend/assets/images/services/stock-market-investor-analyst-broker-analyzing-financial-trade-crypto-stock-market-exchange-platform 11.png') }}">
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
                        <img src="{{ asset('frontend/assets/images/services/icons/write_5041275 1.png') }}"
                            class="img-fluid">
                        <div class="text">
                            <h4>Content Writing​</h4>
                            <p>
                                Skyrocket your business and capture your audiences’ attention by depending on written words.
                                Through this service, our team will help you convince them to take action.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/feedback_3351340 1.png') }}"
                            class="img-fluid">
                        <div class="text">
                            <h4>Blogging</h4>
                            <p>
                                Blogging is a vital tool for your business to grow online. We'll help you build awareness,
                                boost your brand's visibility, and engage with your potential customers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/viral-marketing_7978863 1.png') }}"
                            class="img-fluid">
                        <div class="text">
                            <h4>Communication Strategy</h4>
                            <p>
                                Meet your communication objectives and your brand messages with us by depending on a
                                tailored and informative communication strategy.
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
