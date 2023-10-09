@extends('frontend.layouts.master')
@section('title', 'List Blogs')
@section('content')
    <section class="blog-list">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb">
                        <a href="#">Home</a> <i class="fa fa-angle-right"></i> <a href="#">Blog</a>
                    </div>
                </div>
                <div class="col-lg-8 p-0">
                    <div class="list">
                        <div class="item">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/blog-1.png') }}" />

                            <h3>
                                10 Efficient & Measurable Benefits of Software
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore ...
                            </p>
                            <div class="meta">
                                <div class="meta-item">
                                    <i class="fa fa-refresh"></i> <span>Sep 22,2023</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fa fa-comment-o"></i> <span>3</span>
                                </div>
                            </div>
                            <div class="readMore">
                                <span>
                                    Read More
                                </span>
                                <i class="fa fa-long-arrow-right"></i>
                            </div>

                            <div class="tag tagRed">
                                Businness
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/blog-2.png') }}" />

                            <h3>
                                10 web design principles you can't ignore
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore ...
                            </p>
                            <div class="meta">
                                <div class="meta-item">
                                    <i class="fa fa-refresh"></i> <span>Sep 22,2023</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fa fa-comment-o"></i> <span>4</span>
                                </div>
                            </div>
                            <div class="readMore">
                                <span>
                                    Read More
                                </span>
                                <i class="fa fa-long-arrow-right"></i>
                            </div>

                            <div class="tag tagBlue">
                                UI/UX
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/blog-3.png') }}" />

                            <h3>
                                10 web design principles you can't ignore
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore ...
                            </p>
                            <div class="meta">
                                <div class="meta-item">
                                    <i class="fa fa-refresh"></i> <span>Sep 22,2023</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fa fa-comment-o"></i> <span>5</span>
                                </div>
                            </div>
                            <div class="readMore">
                                <span>
                                    Read More
                                </span>
                                <i class="fa fa-long-arrow-right"></i>
                            </div>

                            <div class="tag tagYellow">
                                Branding
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 p-0">
                    <div class="aside">
                        <h4  class="head">Latest Blogs</h4>
                        <div class="item">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/blog-side-1.png') }}" />
                            <h4>How To Organize Your Workspace</h4>
                            <div class="meta">May 7, 2023</div>
                            <div class="tag tagGreen">
                                Graphic
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/blog-side-2.png') }}" />
                            <h4>How companies can successfully position themselves in stories</h4>
                            <div class="meta">May 7, 2023</div>
                            <div class="tag tagPurple">
                                Startup
                            </div>
                        </div>
                        <h4 class="head mb-3">Categories</h4>
                        <ul class="list">
                            <li><a href="#">Development (4)</a></li>
                            <li><a href="#">Digital Marketing (8)</a></li>
                            <li><a href="#">Media Production (5)</a></li>
                            <li><a href="#">PR & Communication (5)</a></li>
                            <li><a href="#">3D Booths & Display Design (7) ​</a></li>
                            <li><a href="#">Branding (8)</a></li>
                            <li><a href="#">Business Startup (2)</a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="pagination">
                        <span>
                            <i class="fa fa-angle-left"></i>
                        </span>
                        <span>
                            1
                        </span>
                        <span>
                            2
                        </span>
                        <span>
                            <i class="fa fa-angle-right"></i>
                        </span>
                        <span>
                            <i class="fa fa-angle-double-right"></i>
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
