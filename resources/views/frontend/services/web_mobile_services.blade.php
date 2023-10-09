@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')


    <section class="section service-head">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-xl-between justify-content-center">
                <div class="col-xl-6 col-12 p-0">
                    <h2>Web and Mobile Services</h2>
                    <p>
                        Stay connected with your target audience and boost your visibility <span>ONLINE</span>.​
                    </p>
                    <p>
                        Provide your business with a competitive edge through well-designed Web & Mobile services that suit
                        your needs perfectly.
                    </p>
                </div>
                <div class="col-xl-auto col-12 p-0">
                    <div class="img-container">

                        <img src="{{ asset('frontend/assets/images/services/service-web.png') }}">
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
                        <img src="{{ asset('frontend/assets/images/services/icons/ui-ux.png') }}" class="img-fluid">
                        <div class="text">
                            <h4>UI / UX Designs.​</h4>
                            <p>
                                We're focusing on creating user interfaces and experiences that are visually appealing,
                                intuitive, and user-friendly for digital products such as websites, mobile apps, and
                                software
                                apps.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/mobile.png') }}" class="img-fluid">
                        <div class="text">
                            <h4>Mobile Development.​​</h4>
                            <p>
                                These services involve the creation of software apps that are designed to run on different
                                mobile devices. In addition to the development lifecycle, from conceptualization to ongoing
                                maintenance.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/web.png') }}" class="img-fluid">
                        <div class="text">
                            <h4>Web Development.​​</h4>
                            <p>
                                Our mission is to create and maintain websites and web apps that require a wide range of
                                tasks, such as initial planning, design, development, testing, and ongoing maintenance.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/web.png') }}" class="img-fluid">
                        <div class="text">
                            <h4>E-commerce.​​</h4>
                            <p>
                                These services are designed to facilitate online transactions, improve customer experiences,
                                and help your business establish and grow its online presence.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/erp.png') }}" class="img-fluid">
                        <div class="text">
                            <h4>ERP Systems.​​</h4>
                            <p>
                                We help your business or organization by creating ERP systems that are designed to
                                streamline and centralize various business processes and their functions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/pos.png') }}" class="img-fluid">
                        <div class="text">
                            <h4>POS​</h4>
                            <p>
                                If you have a retail store or restaurant, we'll help with designing POS systems that will
                                facilitate all the payment transactions with customers and manage inventory.
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
