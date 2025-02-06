@extends('layouts.app')  {{-- Ensure the correct layout is used --}}

@section('content')

<div class="checkout-container">
    <h1>Checkout</h1>
    <p><strong>Course:</strong> {{ $course->course_name }}</p>
    <p><strong>Price:</strong> ₹{{ $amount }}</p>
    <button id="pay-btn">Pay with Razorpay</button>
</div>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    const options = {
        key: "{{ env('RAZORPAY_KEY') }}",
        amount: {{ $amount * 100 }},
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
                    window.location.href = "{{ route('course.details', ['id' => $course->course_id]) }}";
                });
        },
        theme: {
            color: "#0f0"
        },
        cookies: false // Disable third-party cookies
    };

    const razorpay = new Razorpay(options);
    document.getElementById("pay-btn").onclick = function () {
        razorpay.open();
    };

</script>
@endsection