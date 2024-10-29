@extends('layout')
@section('title')
    All USERS DATA
@endsection

<style>
    nav svg{
        width: 22px !important;
}
</style>

@section('content')

<div class="container">
    <div class="row ">
        <div class="col-md-6 text-start">
            <a href="{{ route('create') }}" class="btn btn-primary btn-sm"> Add</a>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('logout') }}" class="btn btn-primary btn-sm">Logout</a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            
<table class="table table-striped table-bordered">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Contact</th>
        <th>Designation</th>
        <th>City</th>
        <th>Attendance</th>
        <th>View</th>
        
        <th>Delete</th>
        <th>Update</th>
    </tr>
    @foreach ( $user as $item )
        
    
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->age }}</td>
        <td>{{ $item->contact }}</td>
        <td>{{ $item->designation }}</td>
        <td>{{ $item->city }}</td>
        <td><a href="{{ route('attendance', $item->id) }}" class="btn btn-primary btn-sm" >Attendance</a></td>
        <td><a href="{{ route('show', $item->id) }}" class="btn btn-primary btn-sm" >View</a></td>
        <td>
            <form action="{{ route('destroy',$item->id) }}" method="POST" onsubmit="return confirm('Do you Want to Delete ? ')">
                @csrf
                @method('Delete')
                <button class="btn btn-danger btn-sm">Delete</button>
            </form>
            
        </td>
        <td><a href="{{ route('edit', $item->id) }}" class="btn btn-warning btn-sm" >Update</a></td>
    </tr>
    @endforeach
</table>
<div class="mt-3">
    {{ $user->links() }}
</div>
        </div>
    </div>
</div>

@endsection