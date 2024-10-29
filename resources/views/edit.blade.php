@extends('layout')

@section('title')

Edit User
    
@endsection

@section('content')
 
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route("home") }}" class="btn btn-primary btn-sm"><< Back</a>
            <form action="{{ route('update' , $user->id) }}" method="POST" role="form">
                @csrf
                @method('PUT')
                 <div class="row mt-3">
                     <div class="col-xs-12 col-sm-12 col-md-12">
                         <div class="form-group">
                 <input type="text" name="name" id="first_name" value="{{ $user->name }}" class="form-control input-sm" placeholder=" Name">
                 @error('name')
                     <span class="text-danger">{{ $message }}</span>
                 @enderror
                         </div>
                     </div>
                    
                 </div>
             
                 <div class="form-group mt-3">
                     <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control input-sm" placeholder="Email Address">
                     @error('email')
                     <span class="text-danger">{{ $message }}</span>
                 @enderror
                 </div>
             
                 <div class="row mt-3">
                     <div class="col-xs-12 col-sm-12 col-md-12">
                         <div class="form-group">
                             <input type="age" name="age" value="{{ $user->age }}" id="password" class="form-control input-sm" placeholder="Age">
                             @error('age')
                             <span class="text-danger">{{ $message }}</span>
                         @enderror
                         </div>
                     </div>
                    
                 </div>
         
                 <div class="row mt-3">
                     <div class="col-xs-12 col-sm-12 col-md-12">
                         <div class="form-group">
                             <input type="age" name="contact" value="{{ $user->contact }}" id="password" class="form-control input-sm" placeholder="Contact">
                             @error('conatct')
                             <span class="text-danger">{{ $message }}</span>
                         @enderror
                         </div>
                     </div>
                    
                 </div>
         
                 <div class="row mt-3">
                     <div class="col-xs-12 col-sm-12 col-md-12">
                         <div class="form-group">
                             <input type="age" name="designation" value="{{ $user->designation }}" id="password" class="form-control input-sm" placeholder="Designation">
                             @error('designation')
                             <span class="text-danger">{{ $message }}</span>
                         @enderror
                         </div>
                     </div>
                    
                 </div>
             
                 <div class="row mt-3">
                     <div class="col-xs-12 col-sm-12 col-md-12">
                         <div class="form-group">
                             <input type="city" name="city" value="{{ $user->city }}" id="password" class="form-control input-sm" placeholder="City">
                             @error('city')
                             <span class="text-danger">{{ $message }}</span>
                         @enderror
                         </div>
                     </div>
                    
                 </div>
             
                 <button  class="btn btn-primary btn-sm mt-3" >Update</button>
             
             </form>
        </div>
    </div>
   </div>
@endsection
