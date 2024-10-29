@extends('layout')
@section('title')
     USERS DETAIL
@endsection

@section('content')


<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">

      <table class="table table-striped table-bordered">
   
        <tr>
          <th width="80px">Name :</th>
          <td>{{ $user->name }}</td>
        </tr>
        <tr>
          <th>Email :</th>
          <td>{{ $user->email }}</td>
        </tr>
        <tr>
          <th>Age :</th>
          <td>{{ $user->age }}</td>
        </tr>
      
        <tr>
          <th>Conatct :</th>
          <td>{{ $user->contact }}</td>
        </tr>
      
        <tr>
          <th>Designation :</th>
          <td>{{ $user->designation }}</td>
        </tr>
      
        <tr>
          <th>City :</th>
          <td>{{ $user->city }}</td>
        </tr>
      </table>
      <a href="{{ route("home") }}" class="btn btn-primary btn-sm"><< Back</a>
    </div>
  </div>
</div>
@endsection