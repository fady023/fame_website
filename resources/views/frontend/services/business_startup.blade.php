@extends('frontend.layouts.master')
@section('title','Home')
@section('content')

 
<section class="section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-1" style="margin-top: 150px;text-align: center;">
                    <p> Business Startup</p>
                    <p>
                       Make your dream business come true on MENA region with our experts.​
                    </p>
                </div>
                <div class="col-lg-7 mb-40">
                    <img src="{{asset('frontend/assets/images/services/m018t0223_d_rocket_21july22 1.png')}}" class="img-fluid" alt="Business Man with Laptop" width="389" height="391">
                </div>
            </div>
        </div>
    </section>

    <section class="section pb-0">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 mb-40">
                    <img src="{{asset('frontend/assets/images/services/Group 3.png')}}" class="img-fluid" alt="Business Man with Laptop" width="389" height="391">
                </div>

                <div class="col-lg-6 offset-lg-1" style="margin-top: 150px;text-align: center;">
                    <p>
                        FAME is the smartest portal for establishing your business in UAE with our consultancy services for start-ups.​
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Section -->
    <section class="section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2 class="section__heading section__heading-center">Our Services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="section__column section__column-left">
                        <img src="{{asset('frontend/assets/images/services/icons/Group 78.png')}}" class="icon icon-device column-icon">
                        <h4>UI / UX Designs.​</h4>
                        <p>
                            UI/UX design services focus on creating user interfaces and experiences that are visually appealing, intuitive, and user-friendly for digital products such as websites, mobile apps, and software applications. Here's a brief overview of UI/UX design services:
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="section__column section__column-left">
                        <img src="{{asset('frontend/assets/images/services/icons/Group 81.png')}}" class="icon icon-device column-icon">
                        <h4>Mobile Development.​</h4>
                        <p>
                            Mobile app development services involve the creation of software applications specifically designed to run on mobile devices, such as smartphones and tablets. These services encompass the entire app development lifecycle, from conceptualization to deployment
                            and ongoing maintenance. Here's a brief overview of mobile app development services:

                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="section__column section__column-left">
                        <img src="{{asset('frontend/assets/images/services/icons/Group 79.png')}}" class="icon icon-device column-icon">
                        <h4>Web Development.​</h4>
                        <p>
                            Web development services encompass the process of creating and maintaining websites and web applications. These services involve a range of tasks, from initial planning and design to development, testing, and ongoing maintenance. Here's a brief overview
                            of web development services: </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="section__column section__column-left">
                        <img src="{{asset('frontend/assets/images/services/icons/online-shopping.png')}}" class="icon icon-device column-icon">

                        <h4>E-commerce.</h4>
                        <p>
                            E-commerce services encompass a wide range of activities related to the buying and selling of products or services over the internet. These services are designed to facilitate online transactions, improve customer experiences, and help businesses establish
                            and grow their online presence. Here's a brief overview of e-commerce services:
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="section__column section__column-left">
                        <img src="{{asset('frontend/assets/images/services/icons/Group 80.png')}}" class="icon icon-device column-icon">
                        <h4>ERP Systems.​</h4>
                        <p>
                            Enterprise Resource Planning (ERP) system services involve the implementation, customization, and ongoing support of ERP software solutions for businesses and organizations. ERP systems are comprehensive software platforms designed to streamline and centralize
                            various business processes and functions. Here's a brief overview of ERP system services:

                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section__column section__column-left">
                        <img src="{{asset('frontend/assets/images/services/icons/Group 19.png')}}" class="icon icon-device column-icon">
                        <h4>POS</h4>
                        <p>
                            Point of Sale (POS) services refer to the technology and software solutions used by businesses to facilitate transactions with customers. POS systems are commonly used in retail stores, restaurants, and various other businesses to process payments, manage
                            inventory, and streamline sales operations. Here's a brief overview of POS services:
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section class="section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h2 class="section__heading section__heading-center">Our Projects</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center mb-40">
                <p>
                    We are proud of our work and happy to show our case studies </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-active-nav">
                    <div class="owl-carousel js-owl-screenshot owl-loaded owl-drag">

                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-5250px, 0px, 0px); transition: all 1.0ss ease 0s; width: 8400px;">
                               @foreach($projects as $project)
                                    <div class="owl-item cloned" style="width: 1050px;">
                                        <div class="item">
                                            <img src="{{url('projects/',$project->image)}}" class="img-fluid" alt="App dashboard" width="1050" height="591">
                                        </div>
                                    </div>
                                @endforeach
                               
                            </div>
                        </div>
                        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<br><br><br>
@endsection
