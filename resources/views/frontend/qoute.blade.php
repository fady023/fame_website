@extends('frontend.layouts.master')
@section('title','qoute')
@section('content')

<section class="section qoute">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-xl-6 d-xl-block d-none">
                <img src="{{asset('frontend/assets/images/Group 1722.png')}}" class="img-fluid" />
            </div>
            <div class="col-xl-6 col-12">
             @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{session('message')}}
                </div>
                @endif
                <div class="contact__main">
                    <h1>
                        Get a Free Consultation Now
                    </h1>
                    <h2>How can we help you ?!</h2>

                    <aside class="aside__left contact__aside">
                        <div class="contact__aside--content">
                            <div class="row m-0">
                                <div class="col-sm-8 col-12 p-0">

                                    <div class="contact__aside--widget">
                                        <h5 class="contact__aside--widget-title">Project Overview <span>*</span>
                                        </h5>
                                        <p>Can you provide a brief overview of your company and the specific marketing project or campaign you have in mind?</p>
                                    </div>
                                    <div class="contact__aside--widget">
                                        <h5 class="contact__aside--widget-title"> Project Goals <span>*</span>
                                        </h5>
                                        <p>What are your primary goals and objectives for this marketing project? What results are you hoping to achieve?</p>
                                    </div>
                                    <div class="contact__aside--widget mb-0">
                                        <h5 class="contact__aside--widget-title"> Target Audience <span>*</span>
                                        </h5>
                                        <p>Who is your target audience or ideal customer for this project? Do you have specific demographics or people in mind?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <form class="row m-0" method="post" action="{{ route('qoutes')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 pt-3">
                                <h5>Services <span>*</span></h5>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="checkbox" name="Services" value="Web and Mobile Development" checked required> Web and Mobile Development
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="checkbox" name="Services" value="Digital Marketing"> Digital Marketing
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="checkbox" name="Services" value="Media Production"> Media Production
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="checkbox" name="Services" value="PR & Communications"> PR & Communications
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="checkbox" name="Services" value="3D Booths & Display Design"> 3D Booths & Display Design
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="checkbox" name="Services"  value="Branding"> Branding
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="checkbox" name="Services" value="Business Startup"> Business Startup
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 pt-3">
                                <h5>Contact Information <span>*</span></h5>
                            </div>
                            <div class="col-md-12">
                                <label  class="input-label">Name <span>*</span></label>
                                <input type="text" id="name" name="name" required >
                            </div><br>

                            <div class="col-md-12">
                                <label class="input-label">Company <span>*</span></label>
                        
                                <input type="text" id="name" name="company" required >
                            </div>
                            <div class="col-md-12">
                                <label class="input-label">Phone <span>*</span></label>
                            
                                <input type="text" id="name" name="phone" required >
                            </div>

                            <div class="col-md-12">
                                <label class="input-label">Email Address <span>*</span></label>
                            
                                <input type="text" id="name" name="email" required >
                            </div>

                            <div class="col-md-12 form-action" style="margin: 40px 0 0 0;">
                                <button type="submit" class="btn btn-primary btn-rounded">Request a demo</button>
                            </div>
                            <br><br><br><br><br><br>


                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</section>
<br><br><br>
@endsection
