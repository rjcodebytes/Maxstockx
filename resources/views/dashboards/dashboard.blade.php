<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>

<body>
    @include('layouts.header')
    <div class="container mt-5">
        <h1>Welcome to the Dashboard!</h1>
        <p>This is the main content area of your dashboard.</p>
        <form action="{{ route('logout.perform') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>

    </div>
</body>

</html>