<!-- ======= Sidebar ======= -->

<style>
  .hover-link {
    color: white;
    transition: color 0.3s ease, text-decoration 0.3s ease;
    text-decoration: none;
  }

  .hover-link:hover {
    color: #62CE3E; /* Gold color for hover */
  }

  li i{
    transition: .3s;
  }
  li:hover i{
    color: #62CE3E;
  }
</style>

<aside id="sidebar" style="
        width:100%;
        max-width: 250px;
         background-color: #000;
        color: white;
        transition: max-width 0.3s ease;
        overflow: hidden;
        height: 100vh;
        position: relative;
        z-index: 1000;
    ">
  <ul style="list-style: none; padding: 20px 40px; margin: 0;">
    <li style="padding: 10px 0;">
      <i class="bi bi-grid " style="margin-right: 10px;"></i>
      <a href="{{route('users.dashboard')}}"  class="hover-link">Dashboard</a>
    </li>
    <li style="padding: 10px 0;">
      <i class="bi bi-person-fill " style="margin-right: 10px;"></i>
      <a href="{{route('users.Profile')}}"  class="hover-link">My Profile</a>
    </li>
    <li style="padding: 10px 0;">
      <i class="bi bi-book " style="margin-right: 10px;"></i>
      <a href="#"  class="hover-link">View Courses</a>
    </li>
    <li style="padding: 10px 0;">
      <i class="bi bi-journal-check " style="margin-right: 10px;"></i>
      <a href="#"  class="hover-link">Enrolled Courses</a>
    </li>
    <li style="padding: 10px 0;">
      <i class="bi bi-receipt " style="margin-right: 10px;"></i>
      <a href="#"  class="hover-link">Order History</a>
    </li>
    <li style="padding: 10px 0;">
      <i class="bi bi-gear " style="margin-right: 10px;"></i>
      <a href="#"  class="hover-link">User Settings</a>
    </li>
    <li style="padding: 10px 0;">
      <i class="bi bi-box-arrow-right " style="margin-right: 10px;"></i>
      <span class="text-white">
        <form action="{{ route('logout.perform') }}" method="POST" class="d-inline">
          @csrf
          <button type="submit">Logout</button>
        </form>
      </span>
    </li>
  </ul>
</aside>



<script src="https://kit.fontawesome.com/e37f90b971.js" crossorigin="anonymous"></script>
<script>

</script>
<!-- End Sidebar -->