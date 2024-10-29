<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
    <title>Document</title>
</head>
<body>
    @if (session('message'))
    <div class="alert alert-info">
        {{ session('message') }}
    </div>
@endif
    <div class="container mt-5">
        <div class="card-header d-flex align-items-center">
            <h2 class="me-auto">Welcome, {{ Auth::user()->name }}!</h2>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Profile
                </button>
                
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="{{ route('editprofile') }}">Edit Profile</a></li>
                    <li><a class="dropdown-item" href="{{ route('attendanceemployee', Auth::user()->id) }}">Attendance</a></li>
                    <li>
                        <a href="{{ route('logout') }}"  class="dropdown-item">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Welcome, {{ Auth::user()->name }}!</h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            @if ($result)
                            Hey,Your Today Checkin Time : {{ $result->checkin_time }}
                            @else
                            Hey, Please Check In
                            @endif
                            @if ($result2)
                                <p>Hey,Your Today Checkout Time : {{ $result2->checkout_time }}</p>
                            @endif
                        </p>
                        <div class="d-flex justify-content-between">
                            <form action="{{ route('checkin') }}" method="POST">
                                @csrf
                                <button type="submit"  class="btn btn-primary" 
                                @if ($result)
                                    disabled
                                @endif
                                >Check-In</button>
                            </form>
                           <form action="{{ route('checkout') }}" method="POST" onsubmit="return confirm('Do you Want to check out')">
                            @csrf
                            <button class="btn btn-danger" @if ($result2)
                                disabled
                            @endif >Check-Out</button>

                           </form>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>