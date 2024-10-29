<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container p-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8 bg-success-subtle text-center py-2">
                <h2>All Employees</h2>
            </div>
        
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8 bg-warning-subtle mc-3">
            <p>@yield('title')</p>
        </div>
    </div>
</div>

         @yield('content')

</body>
</html>

