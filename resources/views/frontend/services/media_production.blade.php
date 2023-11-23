@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')


    <section class="section service-head">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-xl-between justify-content-center">
                <div class="col-xl-6 col-12 p-0">
                    <h2>Media Production</h2>
                    <p>
                        By using innovative ideas and advanced technology tools, we'll help you to enhance your brand's
                        image and <span>improve</span> your customers' experiences.​
                    </p>
                    <p>
                        Stand out from the competition and elevate your business to the next level with our media production
                        services.
                    </p>
                </div>
                <div class="col-xl-auto col-12 p-0">
                    <div class="img-container">

                        <img
                            src="{{ asset('frontend/assets/images/services/stock-market-investor-analyst-broker-analyzing-financial-trade-crypto-stock-market-exchange-platform 3.png') }}">
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
                        <img src="{{ asset('frontend/assets/images/services/icons/Group 1569.png') }}" class="img-fluid">
                        <div class="text">
                            <h4>Photography​</h4>
                            <p>
                                By investing in high-quality images, you will create a powerful connection between your
                                brand and your audience. Build a more engaging brand presence with us now.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/18.png') }}" class="img-fluid">
                        <div class="text">
                            <h4>Videography​</h4>
                            <p>
                                Videos are more likely to be remembered and shared than other types of content. Improve your
                                brand awareness and increase sales and leads by using videos. Contact us now.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/film-editing_4035076 1.png') }}"
                            class="img-fluid">
                        <div class="text">
                            <h4>Video editing</h4>
                            <p>
                                Well-edited videos will keep your viewers hooked for a longer time. Our team will transform
                                raw footage into polished and professional videos that capture the attention of your
                                customers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/video-editing_4804643 1.png') }}"
                            class="img-fluid">
                        <div class="text">
                            <h4>Reels Creation</h4>
                            <p>
                                Save your time and get professional-quality reels. We’ll help you with all aspects of the
                                reel creation process, from brainstorming ideas to script writing, filming, and editing.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/Group.png') }}" class="img-fluid">
                        <div class="text">
                            <h4>Graphic Design</h4>
                            <p>
                                Visual aids are often more effective at conveying ideas than text alone. We’ll enhance and
                                maintain your company's brand identity with professional designs.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/running-man_2513171 1.png') }}"
                            class="img-fluid">
                        <div class="text">
                            <h4>Animation</h4>
                            <p>
                                Animation is an effective tool to explore complex themes and ideas in a way that is both
                                accessible and engaging. Create memorable commercials easily with us today.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-sm-3 px-0">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/services/icons/conference_2654390 1.png') }}"
                            class="img-fluid">
                        <div class="text">
                            <h4>Presentation</h4>
                            <p>
                                Presentations allow you to tell a story about your brand and make a lasting impression. Let
                                us handle this and help you build rapport and trust with your potential customers.
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
