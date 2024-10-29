@extends('layout')
@section('title')
     Employees Attendance
@endsection

@section('content')


<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
     <div class="table-responsive">
        <table class="table table-striped table-bordered  table-responsive">
            <tr>
                <th>Id</th>
                <th>Name</th>   
                <th>designation</th>
                <th>Check IN</th>
                <th>Check Out</th>
                
            </tr>
            @foreach ( $attendance as $item )
                
            
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->designation }}</td>
                <td>{{ $item->checkin_time }}</td>
                <td>{{ $item->checkout_time }}</td>

            </tr>
            @endforeach
        </table>
      <a href="{{ route("home") }}" class="btn btn-primary btn-sm"><< Back</a>
    </div>
    </div>
  </div>
</div>
@endsection