@extends('frontend.layouts.master')
@section('title', 'Blog')
@section('content')

    <section class="blog">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-lg-8 p-0">
                    <div class="content">
                        <h2>
                            10 Efficient & Measurable Benefits of Software
                        </h2>
                        <div class="meta">
                            <div class="meta-item">
                                <i class="fa fa-refresh"></i> <span>Sep 22,2023</span>
                            </div>
                        </div>
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/blog-1.png') }}" />

                        <p>
                            Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt, explicabo.
                        </p>

                        <h3>
                            At vero eos et accusam
                        </h3>
                        <p>
                            Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt, explicabo.
                        </p>
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/blog-4.png') }}" />
                        <p>
                            Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt, explicabo.
                        </p>

                        <h3>
                            At vero eos et accusam
                        </h3>
                        <p>
                            Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt, explicabo.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 p-0">
                    <div class="aside">
                        <h4 class="head">Leave a comment</h4>
                        <input type="text" class="form-control" placeholder="Name">
                        <input type="email" class="form-control" placeholder="Email">
                        <textarea rows="7" class="form-control" placeholder="Comment"></textarea>
                        <a href="#" class="btn btn-primary">Leave a comment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
