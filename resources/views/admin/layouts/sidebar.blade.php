<!-- ======= Sidebar ======= -->

<div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="offcanvasSidebar"
  aria-labelledby="offcanvasSidebarLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasSidebarLabel">Menu</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="list-unstyled">
      <li class="mb-3">
        <i class="bi bi-grid me-2"></i>
        <a href="{{url('/admin/dashboard')}}" class="text-white text-decoration-none">Dashboard</a>
      </li>
      <li class="mb-3">
        <i class="bi bi-book me-2"></i>
        <a href="{{url('/admin/managecourses')}}" class="text-white text-decoration-none">Manage Courses</a>
      </li>
      <li class="mb-3">
        <i class="bi bi-journal-check me-2"></i>
        <a href="{{url('/admin/manageusers')}}" class="text-white text-decoration-none">Manage Users</a>
      </li>
      <li class="mb-3">
        <i class="bi bi-receipt me-2"></i>
        <a href="#" class="text-white text-decoration-none">Order History</a>
      </li>
      <li class="mb-3">
        <i class="bi bi-gear me-2"></i>
        <a href="#" class="text-white text-decoration-none">User Settings</a>
      </li>

      <li class="mb-3">
        <form id="logout-form" action="{{ route('logout.perform') }}" method="POST" style="display: none;">
          @csrf
        </form>
        <i class="bi bi-gear me-2"></i>
        <a href="{{ route('logout.perform') }}" class="text-white text-decoration-none"
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          Logout
        </a>
      </li>
    </ul>
  </div>
</div>



<script src="https://kit.fontawesome.com/e37f90b971.js" crossorigin="anonymous"></script>
<!-- End Sidebar -->