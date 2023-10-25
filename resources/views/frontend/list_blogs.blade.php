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
                     @foreach($Blogs as $Blog)
                        @php
                            $img = DB::table("blogallery")->where("blog_id",$Blog->id)->first();
                        @endphp
                        <div class="item">
                            <a href="{{url('public/blog',$Blog->title)}}">
                                <img class="img-fluid" src="{{url('blogs/',$img->image)}}" />
                            </a>
                            <h3>
                                {{ $Blog->title }}
                            </h3>
                            <p>
                                {{\Illuminate\Support\Str::limit(strip_tags($Blog->details),100)}}
                            </p>
                            <div class="meta">
                                <div class="meta-item">
                                    <i class="fa fa-refresh"></i> <span> {{ date('d-m-Y', strtotime($Blog->created_at)) }}</span>
                                </div>
                                <!--<div class="meta-item">
                                    <i class="fa fa-comment-o"></i> <span>3</span>
                                </div>-->
                            </div>
                            <div class="readMore">
                                <span>
                                     <a href="{{url('blog',$Blog->title)}}"> Read More </a>
                                </span>
                                <i class="fa fa-long-arrow-right"></i>
                            </div>

                            <div class="tag" style="background:{{ $Blog->category->color }}"">
                                {{ $Blog->category->name }}
                            </div>
                        </div>
                     
                      @endforeach
                    </div>
                </div>
                <div class="col-lg-3 p-0">
                    <div class="aside">
                        <h4  class="head">Latest Blogs</h4>
                         @foreach($Last_Blogs as $Last_Blog)
                            <div class="item">
                             @php
                                $img = DB::table("blogallery")->where("blog_id",$Last_Blog->id)->first();
                             @endphp
                             {{ $Blog->color }}
                                <img class="img-fluid" src="{{url('blogs/',$img->image)}}" />
                                <h4><a href="{{url('blog',$Blog->title)}}">{{ $Blog->title }}</a></h4>
                                <div class="meta">{{ date('d-m-Y', strtotime($Blog->created_at)) }}</div>
                                <div class="tag" style="background:{{ $Last_Blog->category->color }}" >
                                   {{ $Last_Blog->category->name }}
                                </div>
                            </div>
                         @endforeach


                        <h4 class="head mb-3">Categories</h4>
                        <ul class="list">
                            @foreach($Categories as $Categorie)
                            @php
                                $count = DB::table('blogs')->where('category_id',$Categorie->id)->count();
                            @endphp
                                 <li>{{ $Categorie->name }} ({{ $count  }})</li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
           <!-- <div class="row justify-content-center">
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
            </div>-->

        </div>
    </section>
@endsection
