@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')


    <section class="section service-head">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-xl-between justify-content-center">
                <div class="col-xl-6 col-12 p-0">
                    <h2>3DBooths and Display Design</h2>
                    <p>
                        Better design means better experience.
                        Generate a memorable impact with your clients through your exhibition designs and get
                        <span>FAMED</span>.
                    </p>
                    <p>
                        Whatever your event is, it's our mission to make your designs come out looking spectacular with
                        high-quality materials.​
                    </p>
                </div>
                <div class="col-xl-auto col-12 p-0">
                    <div class="img-container">

                        <img
                            src="{{ asset('frontend/assets/images/services/stock-market-investor-analyst-broker-analyzing-financial-trade-crypto-stock-market-exchange-platform 1.png') }}">
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
                        <img src="{{ asset('frontend/assets/images/services/icons/billboard_7254590 1.png') }}"
                            class="img-fluid">
                        <div class="text">
                            <h4>Outdoor Displays​</h4>
                            <p>
                                Have the in-house expertise by using outdoor displays for your own campaign now in all
                                sizes. It's an effective tool that can be used to increase brand awareness or engage
                                customers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/promotion_7319392 1.png') }}"
                            class="img-fluid">
                        <div class="text">
                            <h4>Promotional Items​​</h4>
                            <p>
                                By choosing the right promotional items and targeting them to the right audience, your
                                business can see a significant ROI. Generate more leads now with professionally designed
                                promotional items.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/brochure_5459230 1.png') }}"
                            class="img-fluid">
                        <div class="text">
                            <h4>Booth Handouts​​</h4>
                            <p>
                                They can highlight your company's unique value. We make sure the designs are informative,
                                engaging, and memorable to help you achieve your trade show goals easily
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/lcd_4436109 1.png') }}" class="img-fluid">
                        <div class="text">
                            <h4>Table Displays​​</h4>
                            <p>
                                If you are looking to improve your sales efforts, table displays will be the perfect option.
                                Eye-catching designs will help to attract customers and generate more leads.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/monitor_10153826 1.png') }}"
                            class="img-fluid">
                        <div class="text">
                            <h4>Displays & Stands​​​</h4>
                            <p>
                                Showcase your brand in a visually appealing and informative way. Draw attention to your
                                customers now by depending on stunning displays and stand designs for your exhibition.
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
