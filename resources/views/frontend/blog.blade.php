@extends('frontend.layouts.master')
@section('title', 'Blog')
@section('content')

    <section class="blog">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-lg-8 p-0">
                    <div class="content">
                        <h2>
                            {{ $blog->title }}
                        </h2>
                        <div class="meta">
                            <div class="meta-item">
                                <i class="fa fa-refresh"></i> <span>{{ date('d-m-Y', strtotime($blog->created_at)) }}</span>
                            </div>
                        </div>
                         @php
                            $img = DB::table("blogallery")->where("blog_id",$blog->id)->first();
                        @endphp
                        <img class="img-fluid" src="{{url('blogs/',$img->image)}}" />
                            {!! $blog->details !!}
                            <br>
                            Tags :  {{ $blog->tag }}
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
