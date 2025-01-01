<nav class="navbar fixed-top navbar-expand-lg" style="background-color: #98231e; border-bottom: 2px solid #a19b9c;">
  <div class="container">
    <a class="navbar-brand" href="index.php" style="color: #fff; font-weight: bold;">LogiDrive</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="color: #fff;"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="about.php" style="color: #f1f1f1; transition: color 0.3s;">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php" style="color: #f1f1f1; transition: color 0.3s;">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php" style="color: #f1f1f1; transition: color 0.3s;">Gallery</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #f1f1f1; transition: color 0.3s;">
            Login
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog" style="background-color: #575555; border-radius: 5px; border: 1px solid #333313;">
            <a class="dropdown-item" href="admin/" style="color: #fff; background-color: #575555;" id="adminLogin">Approver Login</a>
            <a class="dropdown-item" href="usr/" style="color: #fff; background-color: #575555;" id="clientLogin">Admin Login</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Bootstrap JS (with Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>

<style>
  /* Hover effect */
  .dropdown-item:hover {
    background-color: #98231e !important;  /* Highlight color for hover */
    color: #fff;
  }

  /* Active state effect (when selected) */
  .dropdown-item:active, .dropdown-item:focus {
    background-color: #98231e !important;
    color: #fff;
  }
</style>
