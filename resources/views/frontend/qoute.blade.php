@extends('frontend.layouts.master')
@section('title','qoute')
@section('content')

<br><br><br><br> <br><br><br>
<section class="section section__contact p-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 order-lg-4 js-match-height" style="height: 866.5px;background-color: #fffaee;">
             @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{session('message')}}
                </div>
                @endif
                <div class="contact__main">
                    <h1 class="section__heading" style="font-size: 25px;">Get a Free Demo Now</h1>
                    <h4>How can we help you ?!</h4>

                    <aside class="aside__left contact__aside">
                        <div class="contact__aside--content">
                            <div class="contact__aside--widget">
                                <h5 class="contact__aside--widget-title">Project Overview <font color="red">*</font>
                                </h5>
                                <p>Can you provide a brief overview of your company and the specific marketing project or campaign you have in mind?</p>
                            </div>
                            <div class="contact__aside--widget">
                                <h5 class="contact__aside--widget-title"> Project Goals <font color="red">*</font>
                                </h5>
                                <p>What are your primary goals and objectives for this marketing project? What results are you hoping to achieve?</p>
                            </div>
                            <div class="contact__aside--widget">
                                <h5 class="contact__aside--widget-title"> Target Audience <font color="red">*</font>
                                </h5>
                                <p>Who is your target audience or ideal customer for this project? Do you have specific demographics or people in mind?</p>
                            </div>
                        </div>
                    </aside>
                    <form class="row" method="post" action="{{ route('qoutes')}}" enctype="multipart/form-data">
                        @csrf
                        <h5>Services *</h5>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="checkbox" name="Services" value="Web and Mobile Development"> Web and Mobile Development
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
                        <h5>Contact Information *</h5>
                        <div class="row">
                            <div class="col-md-12">
                                <label style="margin: 17px 0 0 0;">Name <font color="red">*</font></label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" id="name" name="name" style="width: 70%;background: #fffaee; outline: 0;border-width: 0 0 1px;border-color: #fecd57;">
                            </div><br>

                            <div class="col-md-12">
                                <label style="margin: 17px 0 0 0;">Company <font color="red">*</font></label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" id="name" name="company" style="width: 70%;background: #fffaee; outline: 0;border-width: 0 0 1px;border-color: #fecd57;">
                            </div>
                            <div class="col-md-12">
                                <label style="margin: 17px 0 0 0;">Phone <font color="red">*</font></label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" id="name" name="phone" style="width: 70%;background: #fffaee; outline: 0;border-width: 0 0 1px;border-color: #fecd57;">
                            </div>

                            <div class="col-md-12">
                                <label style="margin: 17px 0 0 0;">Email Address <font color="red">*</font></label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" id="name" name="email" style="width: 70%;background: #fffaee; outline: 0;border-width: 0 0 1px;border-color: #fecd57;">
                            </div>

                            <div class="col-md-12 form-action" style="margin: 40px 0 0 0;">
                                <button type="submit" class="btn btn-primary btn-rounded">Request a demo</button>
                            </div>
                            <br><br><br><br><br><br>


                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 js-match-height" style="height: 866.5px;"> <br><br><br><br>
                <img src="{{asset('frontend/assets/images/Group 1554.png')}}" class="img-fluid" />
            </div>
        </div>
    </div>
</section>
<br><br><br>
@endsection
