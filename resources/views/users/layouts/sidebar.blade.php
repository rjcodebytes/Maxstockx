<!-- ======= Sidebar ======= -->

<style>
  .hover-link {
    color: white;
    transition: color 0.3s ease, text-decoration 0.3s ease;
    text-decoration: none;
  }

  .hover-link:hover {
    color: #62CE3E;
    /* Gold color for hover */
  }

  li i {
    transition: .3s;
  }

  li:hover i {
    color: #62CE3E;
  }
</style>

<!-- Offcanvas Sidebar -->
<div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasSidebar"
  aria-labelledby="offcanvasSidebarLabel" style="transition: 0.3s ease-in-out;">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasSidebarLabel">Menu</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="list-unstyled">
      <li class="py-2">
        <i class="bi bi-grid me-2"></i>
        <a href="{{route('users.dashboard')}}" class="hover-link">Dashboard</a>
      </li>
      <li class="py-2">
        <i class="bi bi-person-fill me-2"></i>
        <a href="{{route('users.Profile')}}" class="hover-link">My Profile</a>
      </li>
      <li class="py-2">
        <i class="bi bi-book me-2"></i>
        <a href="{{route('course.explore')}}" class="hover-link">Explore Courses</a>
      </li>
      <li class="py-2">
        <i class="bi bi-journal-check me-2"></i>
        <a href="{{route('course.enrolled')}}" class="hover-link">Enrolled Courses</a>
      </li>
      <li class="py-2">
        <i class="bi bi-receipt me-2"></i>
        <a href="#" class="hover-link">Order History</a>
      </li>
      <li class="py-2">
        <i class="bi bi-box-arrow-right me-2"></i>
        <form action="{{ route('logout.perform') }}" method="POST" class="d-inline">
          @csrf
          <button type="submit" class="btn btn-link hover-link p-0">Logout</button>
        </form>
      </li>
    </ul>
  </div>
</div>


<script src="https://kit.fontawesome.com/e37f90b971.js" crossorigin="anonymous"></script>

<!-- End Sidebar -->