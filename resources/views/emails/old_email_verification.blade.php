<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email Change Request</title>
</head>
<body>
    <h1>Hello, {{ auth()->user()->name }}</h1>
    <p>You have requested to change your email address to <strong>{{ $newEmail }}</strong>.</p>
    <p>To confirm this request, please click the link below within 10 minutes:</p>
    <a href="{{ $verificationLink }}">{{ $verificationLink }}</a>
    <p>If you did not make this request, please ignore this email.</p>
    <p>Thank you,<br>The Support Team</p>
</body>
</html>
