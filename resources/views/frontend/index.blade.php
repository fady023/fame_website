@extends('frontend.layouts.master')
@section('title','Home')
@section('content')

  <!-- Start Masthead -->
    <section class="masthead js-masthead-height pb-0" id="home">
        <div class="masthead__style-overlay"></div>
        <div class="masthead__style-watter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="masthead__content masthead__content-mtop">
                            <!--h1 class="masthead__content-subtitle">In such fast-paced evolving</h1>-->
                            <p class="masthead__content-subtitle">In such
                                <font color="#FECD57">fast-paced </font>evolving<br> marketplace, we are
                                <font color="#FECD57">committed<br> to
                                </font> unlocking your full potential<br> through Fame’s tools and<br> expertise to
                                <font color="#FECD57">grow</font> your <br>customer base.</p>

                            <div class="masthead__content-action">
                                <a href="javascript:void(0)" class="btn btn-orange btn-rounded btn-icon-left btn-lg js-video-button" data-video-id="TKnufs85hXk"> Get a Free Demo Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <div class="masthead__style-watter--image">
                            <div class="masthead__style-watter--icon flyIn">
                                <img src="{{asset('frontend/assets/images/masthead-icon.png')}}" class="img-fluid" alt="Icon" />
                            </div>
                            <img src="{{asset('frontend/assets/images/businessman-meditating.png')}}" class="img-fluid" alt="Business Man" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Masthead -->

    <!-- Start Section -->
    <section class="section pb-0" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2 class="section__heading section__heading-left">Our Services &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ​We cannot wait to get you all “
                        <font color="#FECD57">Famed</font>” up!</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="section__column section__column-top--left">
                        <span class="icon icon-gift"></span>
                        <h4 style="text-align: center;font-size: 14px;">Web & Mobile Services</h4>
                        <img src="{{asset('frontend/assets/images/services/Services-mobile cards.png')}}" class="img-fluid zoom" alt="Using Software" />
                        <p style="min-height: 95px;;font-size: 15px;padding: 9px 0px;">
                            Stay connected with your target audience and boost your visibility ONLINE.​
                        </p>
                        <div class="section__column-top--left-action">
                            <a href="#" class="btn-link btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section__column section__column-top--left">
                        <span class="icon icon-paper-plane"></span>
                        <h4 style="text-align: center;font-size: 14px;">Digital Marketing</h4>
                        <img src="{{asset('frontend/assets/images/services/Services digital marketing cards.png')}}" class="img-fluid zoom" alt="Using Software" />
                        <p style="min-height: 95px;;font-size: 15px;padding: 9px 0px;">
                            Embrace the power of digital marketing for your brand and get FAMED!
                        </p>
                        <div class="section__column-top--left-action">
                            <a href="#" class="btn-link btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section__column section__column-top--left">
                        <span class="icon icon-paper-plane"></span>
                        <h4 style="text-align: center;font-size: 14px;">Media Production</h4>
                        <img src="{{asset('frontend/assets/images/services/Media Production.png')}}" class="img-fluid zoom" alt="Using Software" />
                        <p style="min-height: 95px;;font-size: 15px;padding: 9px 0px;">
                            Stand out from the competition and elevate your business to the next level with our media services.
                        </p>
                        <div class="section__column-top--left-action">
                            <a href="#" class="btn-link btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section__column section__column-top--left">
                        <span class="icon icon-paper-plane"></span>
                        <h4 style="text-align: center;font-size: 14px;">PR & Communications​</h4>
                        <img src="{{asset('frontend/assets/images/services/PRCommunications​.png')}}" class="img-fluid zoom" alt="Using Software" />
                        <p style="min-height: 95px;font-size: 15px;padding: 9px 0px;">
                            Deliver your brands message, value and voice easily to your clients NOW with FAME!
                        </p>
                        <div class="section__column-top--left-action">
                            <a href="#" class="btn-link btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section__column section__column-top--left">
                        <span class="icon icon-paper-plane"></span>
                        <h4 style="text-align: center;font-size: 14px;">3D Booths & Display Design ​​</h4>
                        <img src="{{asset('frontend/assets/images/services/Display Design.png')}}" class="img-fluid zoom" alt="Using Software" />
                        <p style="min-height: 95px;;font-size: 15px;padding: 9px 0px;">
                            Generate a memorable impact with your clients through your exhibition designs and high-quality materials.
                        </p>
                        <div class="section__column-top--left-action">
                            <a href="#" class="btn-link btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section__column section__column-top--left">
                        <span class="icon icon-paper-plane"></span>
                        <h4 style="text-align: center;font-size: 14px;">Branding ​​</h4>
                        <img src="{{asset('frontend/assets/images/services/Branding.png')}}" class="img-fluid zoom" alt="Using Software" />
                        <p style="min-height: 95px;;font-size: 15px;padding: 9px 0px;">
                            Transform your ideas into reality now with our innovative team creators.
                        </p>
                        <div class="section__column-top--left-action">
                            <a href="#" class="btn-link btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="section__column section__column-top--left">
                        <span class="icon icon-paper-plane"></span>
                        <h4 style="text-align: center;font-size: 14px;">Business Startup ​​</h4>
                        <img src="{{asset('frontend/assets/images/services/Business Startup.png')}}" class="img-fluid zoom" alt="Using Software" />
                        <p style="   min-height: 95px;;font-size: 15px;padding: 9px 0px;">
                            Make your dream business come true in the MENA region with our consultancy services for start-ups.
                        </p>
                        <div class="section__column-top--left-action">
                            <a href="#" class="btn-link btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section__divider section__divider-right d-none d-lg-block"></div>

    <section class="section pb-40" style="background-color: #FFFAEE;">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2 class="section__heading section__heading-center">Our Certifications</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="section__column text-center">
                        <img src="{{asset('frontend/assets/images/01.png')}}" class="icon-lg" alt="Using Software" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section__column text-center">
                        <img src="{{asset('frontend/assets/images/02.png')}}" class="icon-lg" alt="Using Software" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section__column text-center">
                        <img src="{{asset('frontend/assets/images/03.png')}}" class="icon-lg" alt="Using Software" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section__divider section__divider-right d-none d-lg-block"></div>


    <section class="section pb-0" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-40">
                    <img src="{{asset('frontend/assets/images/SmartObject 1.png')}}"  class="img-fluid" alt="Business Man with Laptop" width="389" height="391">
                </div>
                <div class="col-lg-7 offset-lg-1 mb-40">
                    <h2 class="section__heading section__heading-left">About Us</h2>
                    <p>
                        Fame is a full marketing services provider supporting businesses of all sizes and domains in the MENA region, We believe in closely partnering with our clients to integrate our expertise and vision into theirs Our team is laser-focused on achieving the
                        end goals of the business to ensure its success and standing out from the competition.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <section class="section pb-0">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 offset-lg-1 mb-40">
                    <h2 class="section__heading section__heading-center">Vision and Mission </h2>
                    <p>
                        Our vision is to become the GCC’s marketing services provider of choice for brands that want to amplify their presence and expand their business. Through our vision we will enhance and advance our tools and insights set a new niche for the marketing services
                        in the region.<br><br>
                        ​Our mission is Overcoming market challenges burden off the businesses. Achieving a traceable and proven ROI through our campaigns. ​Support the improvement of all sides of the business. ​Building and nourishing
                        the community the business serves. ​
                    </p>

                </div>
                <div class="col-lg-6 mb-40">
                    <img src="{{asset('frontend/assets/images/Rectangle.png')}}"  class="img-fluid" alt="Business Man with Laptop" width="389" height="391">
                </div>
            </div>
        </div>
    </section>

    <div class="section__divider section__divider-left d-none d-lg-block"></div>



    <section class="section pb-0" style="background-color: #FFFAEE;" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-40">
                    <img src="{{asset('frontend/assets/images/SmartObject 1.png')}}" class="img-fluid" alt="Business Man with Laptop" width="389" height="391" style="margin-top: 130px;">
                </div>
                <div class="col-lg-6 offset-lg-1 mb-40">
                    <h2 class="section__heading section__heading-center">Get in touch</h2>
                    <div class="contact__main">
                        <p>Lets explore how we can scale your online business, as our team is here to help.
                            <form class="row">
                                <div class="col-md-6 form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="name">Phone</label>
                                    <input type="text" class="form-control" id="name" placeholder="Phone">
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="emal">Email address</label>
                                    <input type="email" class="form-control" id="emal" aria-describedby="emal" placeholder="Email">
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="subject">Select Service</label>
                                    <select class="form-control js-select select2-hidden-accessible" id="subject" aria-describedby="subject" placeholder="Select Service" data-select2-id="subject" tabindex="-1" aria-hidden="true">
                                        <option value="1">Buy Template</option>
                                        <option value="3">Marketing</option>
                                        <option value="4">Licence</option>
                                        <option value="5">Support</option>
                                        <option value="5">Other subject</option>
                                    </select>

                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="comment">Message</label>
                                    <textarea class="form-control" id="comment" aria-describedby="comment" rows="4">Message</textarea>
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
