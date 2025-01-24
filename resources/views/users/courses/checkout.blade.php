<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>

<body>
    <h1>Checkout</h1>
    <p>Course: {{ $course->course_name }}</p>
    <p>Price: ₹{{ $amount }}</p>
    <button id="pay-btn">Pay with Razorpay</button>

    <script>
        const options = {
            key: "{{ env('RAZORPAY_KEY') }}",
            amount: "{{ $amount * 100 }}", // Amount in paise
            currency: "INR",
            name: "{{ $course->course_name }}",
            description: "Enroll in course",
            order_id: "{{ $order_id }}", // Razorpay Order ID
            handler: function (response) {
                // Process successful payments
                fetch("{{ route('payment.callback') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}" // CSRF token for security
                    },
                    body: JSON.stringify({
                        razorpay_payment_id: response.razorpay_payment_id, // Payment ID from Razorpay
                        course_id: "{{ $course->course_id }}" // Course ID being enrolled
                    })
                })
                    .then(res => res.json()) // Parse JSON response
                    .then(data => {
                        if (data.status === "success" || data.status === "error") {
                            alert(data.message); // Display success or error message
                            window.location.href = data.redirect_url; // Redirect to the provided URL
                        } else {
                            alert('Unexpected response. Please contact support.');
                        }
                    })
                    .catch(err => {
                        console.error("Error:", err);
                        alert('An error occurred. Redirecting to the course page.');
                        window.location.href = "{{ route('course.details', ['id' => $course->course_id]) }}";
                    });
            },
            // Callback if payment fails before reaching the server
            modal: {
                ondismiss: function () {
                    alert("Payment process was cancelled. Redirecting to course details.");
                    window.location.href = "{{ route('course.details', ['id' => $course->course_id]) }}";
                }
            }
        };

        // Create Razorpay instance with options
        const razorpay = new Razorpay(options);

        // Trigger Razorpay payment modal on button click
        document.getElementById("pay-btn").onclick = function () {
            razorpay.open();
        };
    </script>


</body>

</html>