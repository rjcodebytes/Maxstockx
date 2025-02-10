<!DOCTYPE html>
<html>
<head>
    <title>Course Enrollment Confirmation</title>
</head>
<body>
    <h2>Hello {{ $userName }},</h2>
    
    <p>Congratulations! You have successfully enrolled in the course: <strong>{{ $courseName }}</strong>.</p>

    <p><strong>Course Description:</strong></p>
    <p>{{ $courseDescription }}</p>

    <p>To connect with your batchmates and instructors, please join the WhatsApp group:</p>
    <p><a href="{{ $whatsappLink }}" target="_blank">{{ $whatsappLink }}</a></p>

    <p>Thank you for choosing us for your learning journey.</p>

    <p>Best Regards,<br> The Team</p>
</body>
</html>
