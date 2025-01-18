@extends('admin.layouts.app')

<style>
    .user-bx {
        max-height: 80vh;
        overflow-y: scroll;
    }
</style>
@section('dashboard')

<h1 class="text-white">Manage Users</h1>
<!-- Export Button -->

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    <script type="text/javascript">
        // Trigger download after success message
        window.location.href = "{{ route('export.download') }}";

        setTimeout(function () {
            window.location.href = "{{ route('admin.manageuser') }}"; // Replace 'login' with your login route name
        }, 600); // 600 milliseconds = 0.6 seconds
    </script>
@endif
<!-- Export Button -->
<div class="mb-3">
    <a href="{{ route('export.users') }}" class="btn btn-success">Export to Excel</a>
</div>
<div class="container user-bx mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title mb-0">Users List</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">User ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->user_id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No users found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection