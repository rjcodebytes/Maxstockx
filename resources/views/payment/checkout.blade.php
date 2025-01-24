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
            order_id: "{{ $order_id }}",
            handler: function (response) {
                fetch("{{ route('payment.callback') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({
                        razorpay_payment_id: response.razorpay_payment_id,
                        course_id: "{{ $course->course_id }}"
                    })
                }).then(res => res.json())
                .then(data => {
                    alert(data.message);
                    window.location.href = "{{}}";
                });
            }
        };

        const razorpay = new Razorpay(options);
        document.getElementById("pay-btn").onclick = function () {
            razorpay.open();
        };
    </script>
</body>
</html>
