@extends('layouts.vertical', ['title' => 'Update Property', 'mode' => 'ltr'])
@section('css')
    <!-- Plugins css -->
    <link href="{{asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/summernote/summernote.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />

<style>
.column {
  float: left;
  width: 33.33%;
}
.upload__inputfile {
    width: .1px;
    height: .1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
  }
  
  .upload__btn {
    display: inline-block;
    font-weight: 600;
    color: #fff;
    text-align: center;
    min-width: 116px;
    padding: 5px;
    transition: all .3s ease;
    cursor: pointer;
    border: 2px solid;
    background-color: #4045ba;
    border-color: #4045ba;
    border-radius: 10px;
    line-height: 26px;
    font-size: 14px;
    }
    
    .upload__btn-box {
      margin-bottom: 10px;
    }
  
  

    .upload__img-wrap {
      display: flex;
      flex-wrap: wrap;
      margin: 0 -10px;
    }
    
    .upload__img-box {
      width: 200px;
      padding: 0 10px;
      margin-bottom: 12px;
    }
    
    .upload__img-close {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 10px;
        right: 10px;
        text-align: center;
        line-height: 24px;
        z-index: 1;
        cursor: pointer;
 }
        .upload__img-close:after {
          content: '\2716';
          font-size: 14px;
          color: white;
        }
     

.img-bg {
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
  padding-bottom: 100%;
}
</style>
@endsection

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">
    
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="/dashboard">DashBoard</a></li>
                            <li class="breadcrumb-item active">Update Property</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Update / Property</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <form method="POST" action="{{ route('blogsUpdate',['admin','blogs' ,'update'])  }}" enctype="multipart/form-data">
            @csrf
                <input type="hidden" name="id" value="{{ $edit_Blogs->id }}">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>
 
                    <div class="form-group mb-3">
                        <label for="product-name">Title<span class="text-danger">*</span></label>                        
                        <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ $edit_Blogs->title }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="product-description">Description <span class="text-danger">*</span></label>
                        <textarea class="form-control summernote"  rows="20" name="details" required> {{ $edit_Blogs->details }} </textarea>
                    </div>

                     <div class="form-group">
                    <label for="product-category">Developer <span class="text-danger">*</span></label>
                    <select class="form-control select2 {{ $errors->has('developer') ? 'is-invalid' : '' }}" name="category_id" id="category_id" required>
                        @foreach($categoryblogs as $categoryblog)
                    <option value="{{ $categoryblog->id }}" {{($edit_Blogs->category_id==$categoryblog->id)?' selected':''}}>{{ $categoryblog->name }}</option>
                        @endforeach
                    </select>
            </div>


                </div> <!-- end card-box -->



                <div class="card-box" style="height: 780px;">
                    <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Images</h5>
                    <div class="form-group mb-3">
                       <div class="upload__box">
                        <div class="upload__btn-box">
                            <label class="upload__btn">
                            <p style=" margin: 0;">Upload images</p>
                            <input type="file" name="image[]" multiple="" data-max_length="20" class="upload__inputfile">
                            </label>
                        </div>
                          <div class="upload__img-wrap"></div>
                        @foreach($images as $image)
                                    <div class="column" style="height:100px;border:1px solid #eaeaea;text-align: center;">
                                    <button type="button" style="background-color: red;color: white;" onclick="location.href='{{ url('/dashboard/admin/blogs/del/blogs/del/'.$image->id) }}';" class="btn btn-light my-2">x</button>

                                        <img src="{{url('blogs/',$image->image)}}"style="height:100px" />
                                    </div>
                           
                        @endforeach
                        </div>


                    </div>

                </div> <!-- end col-->

               
                
               

            </div> <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="text-center mb-3">
                    <button type="submit" class="btn w-sm btn-success waves-effect waves-light">Save</button>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
</form>

       
 
        
    </div> <!-- container -->

@endsection

@section('script')

    <!-- Plugins js-->
    <script src="{{asset('assets/libs/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/libs/summernote/summernote.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/form-fileuploads.init.js')}}"></script>
    <script src="{{asset('assets/js/pages/add-product.init.js')}}"></script>

<script>
$(document).ready(function() {
  $('.summernote').summernote(
    {
    height: 200,
    }
  );
});
</script>

    <script>
    jQuery(document).ready(function () {
  ImgUpload();
});

function ImgUpload() {
  var imgWrap = "";
  var imgArray = [];

  $('.upload__inputfile').each(function () {
    $(this).on('change', function (e) {
      imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
      var maxLength = $(this).attr('data-max_length');

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {

        if (!f.type.match('image.*')) {
          return;
        }

        if (imgArray.length > maxLength) {
          return false
        } else {
          var len = 0;
          for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i] !== undefined) {
              len++;
            }
          }
          if (len > maxLength) {
            return false;
          } else {
            imgArray.push(f);

            var reader = new FileReader();
            reader.onload = function (e) {
              var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
              imgWrap.append(html);
              iterator++;
            }
            reader.readAsDataURL(f);
          }
        }
      });
    });
  });

  $('body').on('click', ".upload__img-close", function (e) {
    var file = $(this).parent().data("file");
    for (var i = 0; i < imgArray.length; i++) {
      if (imgArray[i].name === file) {
        imgArray.splice(i, 1);
        break;
      }
    }
    $(this).parent().parent().remove();
  });
}
    </script>
@endsection