<form action="{{ route('admin.verifyOtp.post') }}" method="POST">
    @csrf
    <label for="otp">Enter OTP:</label>
    <input type="text" name="otp" required>
    <button type="submit">Verify</button>
</form>
