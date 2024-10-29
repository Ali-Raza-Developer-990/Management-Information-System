@extends('layout')
@section('title')
    ADD USERS 
@endsection

@section('content')

<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            
<form action="{{ route('store') }}" method="POST" role="form">
    @csrf
    <div class="row mt-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
    <input type="text" name="name" id="first_name" value="{{ old('name') }}" class="form-control input-sm" placeholder=" Name">
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
            </div>
        </div>
       
    </div>

    <div class="form-group mt-3">
        <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control input-sm" placeholder="Email Address">
        @error('email')
        <span class="text-danger">{{ $message }}</span>
    @enderror
    </div>
    <div class="form-group mt-3">
        <input type="text" name="password" id="password" value="" class="form-control input-sm" placeholder="Enter Password ">
        @error('password')
        <span class="text-danger">{{ $message }}</span>
    @enderror
    </div>

    <div class="row mt-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <input type="age" name="age" value="{{ old('age') }}" id="password" class="form-control input-sm" placeholder="Age">
                @error('age')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
        </div>
       
    </div>

    <div class="row mt-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <input type="contact" name="contact" value="{{ old('contact') }}" id="password" class="form-control input-sm" placeholder="Contact">
                @error('conatct')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
        </div>
       
    </div>

    <div class="row mt-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <input type="designation" name="designation" value="{{ old('designation') }}" id="password" class="form-control input-sm" placeholder="Designation">
                @error('designation')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
        </div>
       
    </div>

    <div class="row mt-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <input type="city" name="city" value="{{ old('city') }}" id="password" class="form-control input-sm" placeholder="City">
                @error('city')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
        </div>
       
    </div>

    <button  class="btn btn-primary btn-block mt-3" >Add User</button>

</form>
        </div>
    </div>
</div>

@endsection