@extends('layouts.vertical', ['title' => 'Settings', 'mode' => 'ltr'])
@section('content')

<div class="card">
    <div class="card-body">
    <form action="{{ route('settingsUpdate',['admin','settings' ,'update'])  }}"  method="POST" enctype="multipart/form-data" id="create">
            @csrf

            <div class="form-group">
                <label class="required" for="title">Web site name</label> 
                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="title" value="{{ $title }}" placeholder="اسم الموقع">
            </div> 
            <div class="form-group">
                <label class="required" for="title">Description</label> 
                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="description" value="{{ $description }}">
            </div>
            <div class="form-group">
                <label class="required" for="title">keywords</label> 
                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="keywords" value="{{ $keywords }}">
            </div>
            <div class="form-group">
                <label class="required" for="title">Phone</label> 
                <input type="text" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone" value="{{ $phone }}">
            </div>
            <div class="form-group">
                <label class="required" for="title">Email</label> 
                <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ $email }}">
            </div>
            <div class="form-group">
                <label class="required" for="title">Address</label> 
                <input type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" value="{{ $address }}">
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>



@endsection