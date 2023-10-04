@extends('layouts.vertical', ['title' => 'Update Projects', 'mode' => 'ltr'])
@section('content')

<!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="/dashboard/admin/projects/index/projects">Projects</a></li>
                            <li class="breadcrumb-item active">Update Projects</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Update / Projects</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 
<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('projectsUpdate',['admin','projects' ,'update'])  }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $edit_projects->id }}">

            <div class="form-group">
                <label class="required" for="title">Name</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ $edit_projects->name }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>

           

            <div class="form-group">
                <label class="required" for="photo">Logo</label>
            <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="imageUploadInput">
                <label class="custom-file-label" for="imageUploadInput">Upload</label>
            </div>
                @error("cover")
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <!-- end cover scope -->

            <div class="img-preview @if(!isset($edit_projects->image)) d-none @endif p-2" style="height:100px;border:1px solid #eaeaea">
                <img src="{{url('projects/',$edit_projects->image)}}"style="height:100%" />
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