@extends('layouts.vertical', ['title' => 'Add Portfolio', 'mode' => 'ltr'])
@section('content')
    <!-- Plugins css -->
    <link href="{{asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/summernote/summernote.min.css')}}" rel="stylesheet" type="text/css" />

 <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="/dashboard/admin/portfolio/index/portfolio">Portfolio</a></li>
                            <li class="breadcrumb-item active">Add Portfolio</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add / Portfolio</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 
<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('portfoliosStore',['admin','portfolio' ,'store'])  }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="title">Name</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
          
             <div class="form-group">
                <label class="required" for="photo">Logo</label>
                <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input" id="imageUploadInput" required>
                  <label class="custom-file-label" for="imageUploadInput">Uplaod</label>
              </div>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    save
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/libs/summernote/summernote.min.js')}}"></script>
@endsection