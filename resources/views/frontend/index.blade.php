@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')

    <!-- Start Masthead -->
    <section class="masthead js-masthead-height pb-0 " id="home">
        {{-- <div class="masthead__style-overlay"></div> --}}
        <div class="masthead__style-watter">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-sm-10" data-aos="fade-right" data-aos-offset="0" data-aos-duration="1000"
                        data-aos-easing="ease-out" data-aos-anchor-placement="top-center">
                        <div class="masthead__content masthead__content-mtop ">
                            <h1>We are a full marketing services provider</h1>
                            <p>
                                In such <span>fast-paced</span> evolving marketplace, we are <span>committed to</span>
                                unlocking your full potential
                                through Fame’s tools and expertise to <span>grow</span> your customer base.
                            </p>
                            <div class="masthead__content-action">
                                <a href="{{ url('/qoute') }}" class="btn btn-outline-lg"> Get a
                                    Free Demo Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-8 text-center" data-aos-offset="0" data-aos="fade-left"
                        data-aos-duration="1000" data-aos-easing="ease-out" data-aos-anchor-placement="top-center">
                        <div class="masthead__style-watter--image">
                            <div class="masthead__style-watter--icon">
                                <img src="{{ asset('frontend/assets/images/Group 13 2.png') }}" class="img-fluid"
                                    alt="Icon" />
                            </div>
                            {{-- <img src="{{ asset('frontend/assets/images/businessman-meditating.png') }}" class="img-fluid"
                                alt="Business Man" /> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Masthead -->

    <!-- Start Section -->
    <section class="section pb-0 home-services" id="services">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12" data-aos-offset="0" data-aos="zoom-in" data-aos-duration="1000"
                    data-aos-easing="ease-out" data-aos-anchor-placement="top-center">
                    <h2>Our Services</h2>
                    <p>​We cannot wait to get you all “<span>Famed</span>” up!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6" data-aos-offset="0" data-aos="fade-right" data-aos-duration="1000"
                    data-aos-easing="ease-out" data-aos-anchor-placement="top-center">
                    <div class="item">
                        <h4>Web & Mobile Services</h4>
                        <a href="{{ url('/services/web_mobile_services') }}">
                            <img src="{{ asset('frontend/assets/images/services/standard-quality-control-collage-concept 1.png') }}"
                                class="img-fluid zoom" alt="Using Software" />
                        </a>
                        <p>
                            Stay connected with your target audience and boost your visibility ONLINE.​
                        </p>
                        <a href="{{ url('/services/web_mobile_services') }}" class="btn-link btn-primary">Learn More <i
                                class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos-offset="0" data-aos="fade-right" data-aos-duration="1000"
                    data-aos-easing="ease-out" data-aos-anchor-placement="top-center">
                    <div class="item">
                        <h4>Digital Marketing</h4>
                        <a href="{{ url('/services/digital_marketing') }}">
                            <img src="{{ asset('frontend/assets/images/services/digital-marketing-with-icons-business-people 1.png') }}"
                                class="img-fluid zoom" alt="Using Software" />
                        </a>
                        <p>
                            Embrace the power of digital marketing for your brand and get FAMED!
                        </p>
                        <div class="section__column-top--left-action">
                            <a href="{{ url('/services/digital_marketing') }}" class="btn-link btn-primary">Learn More <i
                                    class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos-offset="0" data-aos="fade-right" data-aos-duration="1000"
                    data-aos-easing="ease-out" data-aos-anchor-placement="top-center">
                    <div class="item">
                        <h4>Media Production</h4>
                        <a href="{{ url('/services/media_production') }}">
                            <img src="{{ asset('frontend/assets/images/services/man-recording-studio-music-production 1.png') }}"
                                class="img-fluid zoom" alt="Using Software" />
                        </a>
                        <p>
                            Stand out from the competition and elevate your business to the next level with our media
                            services.
                        </p>
                        <div class="section__column-top--left-action">
                            <a href="{{ url('/services/media_production') }}" class="btn-link btn-primary">Learn More <i
                                    class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos-offset="0" data-aos="fade-left" data-aos-duration="1000"
                    data-aos-easing="ease-out" data-aos-anchor-placement="top-center">
                    <div class="item">
                        <h4>PR & Communications​</h4>
                        <a href="{{ url('/services/pr_com') }}">
                            <img src="{{ asset('frontend/assets/images/services/standard-quality-control-collage-concept 2.png') }}"
                                class="img-fluid zoom" alt="Using Software" />
                        </a>

                        <p>
                            Deliver your brands message, value and voice easily to your clients NOW with FAME!
                        </p>
                        <div class="section__column-top--left-action">
                            <a href="{{ url('/services/pr_com') }}" class="btn-link btn-primary">Learn More <i
                                    class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos-offset="0" data-aos="fade-left" data-aos-duration="1000"
                    data-aos-easing="ease-out" data-aos-anchor-placement="top-center">
                    <div class="item">
                        <h4>3D Booths & Display Design ​​</h4>
                        <a href="{{ url('/services/display_design') }}">
                            <img src="{{ asset('frontend/assets/images/services/digital-marketing-with-icons-business-people 3.png') }}"
                                class="img-fluid zoom" alt="Using Software" />
                        </a>
                        <p>
                            Generate a memorable impact with your clients through your exhibition designs and high-quality
                            materials.
                        </p>
                        <div class="section__column-top--left-action">
                            <a href="{{ url('/services/display_design') }}" class="btn-link btn-primary">Learn More <i
                                    class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6" data-aos-offset="0" data-aos="fade-left" data-aos-duration="1000"
                    data-aos-easing="ease-out" data-aos-anchor-placement="top-center">
                    <div class="item">
                        <h4>Branding ​​</h4>
                        <a href="{{ url('/services/branding') }}">
                            <img src="{{ asset('frontend/assets/images/services/man-recording-studio-music-production 4.png') }}"
                                class="img-fluid zoom" alt="Using Software" />
                        </a>
                        <p>
                            Transform your ideas into reality now with our innovative team creators.
                        </p>
                        <div class="section__column-top--left-action">
                            <a href="{{ url('/services/branding') }}" class="btn-link btn-primary">Learn More <i
                                    class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6" data-aos-offset="0" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-easing="ease-out" data-aos-anchor-placement="top-center">
                    <div class="item">
                        <h4>Business Startup ​​</h4>
                        <a href="{{ url('/services/business_startup') }}">
                            <img src="{{ asset('frontend/assets/images/services/standard-quality-control-collage-concept 5.png') }}"
                                class="img-fluid zoom" alt="Using Software" />
                        </a>
                        <p>
                            Make your dream business come true in the MENA region with our consultancy services for
                            start-ups.
                        </p>
                        <div class="section__column-top--left-action">
                            <a href="{{ url('/services/business_startup') }}" class="btn-link btn-primary">Learn More <i
                                    class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section home-about" id="about">
        <div class="container-fluid">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-6 col-xs-12" data-aos-offset="0" data-aos="fade-right" data-aos-duration="1000"
                    data-aos-easing="ease-out" data-aos-anchor-placement="top-center">
                    <h2>About Us</h2>
                    <p>
                        Fame is a full marketing services provider supporting businesses of all sizes and domains in the
                        MENA region, We believe in closely partnering with our clients to integrate our expertise and vision
                        into theirs Our team is laser-focused on achieving the
                        end goals of the business to ensure its success and standing out from the competition.
                    </p>

                </div>
                <div class="col-lg-6 col-sm-8 " data-aos-offset="0" data-aos="fade-left" data-aos-duration="1000"
                    data-aos-easing="ease-out" data-aos-anchor-placement="top-center">
                    <img src="{{ asset('frontend/assets/images/Group 1732.png') }}" class="img-fluid"
                        alt="Business Man with Laptop">
                </div>
            </div>
        </div>
    </section>

    <section class="section home-vision">
        <div class="container-fluid">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-6 order-lg-1 order-2 col-sm-8" data-aos-offset="0" data-aos="fade-right"
                    data-aos-duration="1000" data-aos-easing="ease-out" data-aos-anchor-placement="top-center">
                    <img src="{{ asset('frontend/assets/images/Group 1733.png') }}" class="img-fluid"
                        alt="Business Man with Laptop" width="389" height="391">
                </div>
                <div class="col-lg-6 col-xs-12 order-lg-2 order-1" data-aos-offset="0" data-aos="fade-left"
                    data-aos-duration="1000" data-aos-easing="ease-out" data-aos-anchor-placement="top-center">
                    <h2>Vision and Mission </h2>
                    <p>
                        Our vision is to become the GCC’s marketing services provider of choice for brands that want to
                        amplify their presence and expand their business. Through our vision we will enhance and advance our
                        tools and insights set a new niche for the marketing services
                        in the region.<br><br>
                        ​Our mission is Overcoming market challenges burden off the businesses. Achieving a traceable and
                        proven ROI through our campaigns. ​Support the improvement of all sides of the business. ​Building
                        and nourishing
                        the community the business serves. ​
                    </p>

                </div>
            </div>
        </div>
    </section>

    <section class="section home-portfolio" id="prtofoilio">
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center">

                <div class="col-lg-5 col-12" data-aos-offset="0" data-aos="fade-left" data-aos-duration="1000"
                    data-aos-easing="ease-out" data-aos-anchor-placement="top-center">
                    <h2>Our Portfolio </h2>
                    <p>
                        We LOVE to connect BRANDS with PEOPLE.<br>
                        We believe that the clients success is also our<br>
                        success, and were so proud to be part of their stories.
                    </p>

                </div>
                <div class="col-lg-auto col-12 mb-40">

                    <div class="gallery__filter">
                        <ul class="nav nav-tabs gallery__filter--list" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation" data-aos-delay="0" data-aos-offset="0"
                                data-aos="zoom-in" data-aos-duration="1000" data-aos-easing="ease-out"
                                data-aos-anchor-placement="top-center">
                                <button class="nav-link active gallery__filter--list-link" id="all-tab"
                                    data-toggle="tab" data-target="#all" type="button" role="tab"
                                    aria-controls="all" aria-selected="true">All</button>
                            </li>
                            <li class="nav-item" role="presentation" data-aos-delay="100" data-aos-offset="0"
                                data-aos="zoom-in" data-aos-duration="1000" data-aos-easing="ease-out"
                                data-aos-anchor-placement="top-center">
                                <button class="nav-link gallery__filter--list-link" id="graphic-tab" data-toggle="tab"
                                    data-target="#graphic" type="button" role="tab" aria-controls="graphic"
                                    aria-selected="true">Graphic</button>
                            </li>
                            <li class="nav-item" role="presentation" data-aos-delay="200" data-aos-offset="0"
                                data-aos="zoom-in" data-aos-duration="1000" data-aos-easing="ease-out"
                                data-aos-anchor-placement="top-center">
                                <button class="nav-link gallery__filter--list-link" id="branding-tab" data-toggle="tab"
                                    data-target="#branding" type="button" role="tab" aria-controls="branding"
                                    aria-selected="false">Branding</button>
                            </li>
                            <li class="nav-item" role="presentation" data-aos-delay="400" data-aos-offset="0"
                                data-aos="zoom-in" data-aos-duration="1000" data-aos-easing="ease-out"
                                data-aos-anchor-placement="top-center">
                                <button class="nav-link gallery__filter--list-link" id="development-tab"
                                    data-toggle="tab" data-target="#development" type="button" role="tab"
                                    aria-controls="development" aria-selected="false">development</button>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>


            <div class="gallery__content" data-aos-offset="0" data-aos="fade-up" data-aos-duration="1000"
                data-aos-easing="ease-out" data-aos-anchor-placement="top-center">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="all" role="tabpanel"
                                aria-labelledby="graphic-tab">
                                <div class="swiper-1 swiper">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        @foreach ($Portfolios as $Portfolio)
                                            <div class="swiper-slide">
                                                <div class="item">
                                                    <img src="{{ url('portfolio/', $Portfolio->image) }}"
                                                        class="img-fluid" alt="App dashboard" width="808"
                                                        height="591">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="swiper-button-prev prev-1"></div>
                                <div class="swiper-button-next next-1"></div>
                            </div>
                            <div class="tab-pane fade" id="graphic" role="tabpanel" aria-labelledby="graphic-tab">
                                <div class="swiper-2 swiper">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        @foreach ($Portfolio_Graphic as $Portfolio)
                                            <div class="swiper-slide">
                                                <div class="item">
                                                    <img src="{{ url('portfolio/', $Portfolio->image) }}"
                                                        class="img-fluid" alt="App dashboard" width="808"
                                                        height="591">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="swiper-button-prev prev-2"></div>
                                <div class="swiper-button-next next-2"></div>
                            </div>
                            <div class="tab-pane fade" id="branding" role="tabpanel" aria-labelledby="branding-tab">
                                <div class="swiper-3 swiper">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        @foreach ($Portfolio_Branding as $Portfolio)
                                            <div class="swiper-slide">
                                                <div class="item">
                                                    <img src="{{ url('portfolio/', $Portfolio->image) }}"
                                                        class="img-fluid" alt="App dashboard" width="808"
                                                        height="591">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="swiper-button-prev prev-3"></div>
                                <div class="swiper-button-next next-3"></div>
                            </div>
                            <div class="tab-pane fade" id="development" role="tabpanel"
                                aria-labelledby="development-tab">
                                <div class="swiper-4 swiper">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        @foreach ($Portfolio_development as $Portfolio)
                                            <div class="swiper-slide">
                                                <div class="item">
                                                    <img src="{{ url('portfolio/', $Portfolio->image) }}"
                                                        class="img-fluid" alt="App dashboard" width="808"
                                                        height="591">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="swiper-button-prev prev-4"></div>
                                <div class="swiper-button-next next-4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                    </div>
                </div>
            </div>


        </div>
    </section>


    <section class="section home-contact" id="contact">
        <div class="container-fluid">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-6 col-sm-8 order-lg-1 order-2" data-aos-offset="0" data-aos="fade-right"
                    data-aos-duration="1000" data-aos-easing="ease-out" data-aos-anchor-placement="top-center">
                    <img src="{{ asset('frontend/assets/images/contact (1).png') }}" class="img-fluid">
                </div>

                <div class="col-lg-6 col-12 order-lg-2 order-1" data-aos-offset="0" data-aos="fade-left"
                    data-aos-duration="1000" data-aos-easing="ease-out" data-aos-anchor-placement="top-center">
                    <div class="row">
                        <div class="col-12">
                            <h2>Get in touch</h2>
                        </div>
                    </div>
                    @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="contact__main">
                        <div class="row">
                            <div class="col-auto">
                                <p>Request </p>
                                <h4>A Call Back</h4>
                            </div>
                            <div class="col">
                                <p>Lets explore how we can scale your online business, as our team is here to help.</p>
                            </div>
                        </div>
                        <form class="row" method="post" action="{{ route('contact') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6 form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Name" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="name">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="Phone" required>
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="email">Email address</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    aria-describedby="email" placeholder="Email" required>
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="subject">Select Service</label>
                                <select required class="form-control js-select select2-hidden-accessible" id="subject"
                                    name="subject" aria-describedby="subject" placeholder="Select Service"
                                    data-select2-id="subject" tabindex="-1" aria-hidden="true">
                                    <option value="Web and Mobile Development">Web and Mobile Development</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="Media Production">Media Production</option>
                                    <option value="PR & Communications">PR & Communications</option>
                                    <option value="3D Booths & Display Design​">3D Booths & Display Design</option>
                                    <option value="Branding">Branding​</option>
                                    <option value="Business Startup​">Business Startup</option>
                                </select>

                            </div>

                            <div class="col-md-12 form-group">
                                <label for="comment">Message</label>
                                <textarea class="form-control" id="comment" name="message" aria-describedby="comment" rows="4" required>Message</textarea>
                            </div>

                            <div class="col-md-12 form-action">
                                <button type="submit" class="btn btn-primary btn-rounded">Submit Now</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </section>


@endsection
