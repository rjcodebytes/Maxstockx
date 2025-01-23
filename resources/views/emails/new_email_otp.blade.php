<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification OTP</title>
</head>
<body>
    <h1>Hello, {{ auth()->user()->name }}</h1>
    <p>You are almost done changing your email address. Please use the OTP below to verify your new email:</p>
    <h2>{{ $otp }}</h2>
    <p>This OTP is valid for 10 minutes.</p>
    <p>If you did not request this change, please contact our support team immediately.</p>
    <p>Thank you,<br>The Support Team</p>
</body>
</html>
