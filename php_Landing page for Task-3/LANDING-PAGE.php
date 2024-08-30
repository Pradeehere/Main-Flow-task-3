<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/htLanding-folder/index.css">
</head>

<body>
  <!-- Navigation Bar -->
  <nav>
    <div class="nav-logo">
      <a href="LANDING-PAGE.php">Wanderlust.io</a>
    </div>
    <ul class="nav-menu">
      <li class="nav-item">
        <a href="#" class="nav-link" id="home-link">Home</a>
        <ul class="dropdown-menu" id="home-dropdown">
          <li><a href="/PHP-TASK-3/travel.php">Travel</a></li>
          <li><a href="/PHP-TASK-3/blog.php">Blog</a></li>
          <li><a href=#>About</a></li>
          <li><a href=#>Contact</a></li>
        </ul>
      </li>
      <li class="nav-item"><a href="/PHP-TASK-3/travel.php">Travel</a></li>
      <li class="nav-item"><a href="/PHP-TASK-3/blog.php">Blog</a></li>
    </ul>
    <div class="search-bar">
      <input type="text" placeholder="Search" />
      <i class="ri-search-line"></i>
    </div>
  </nav>

  <!-- Main Content Area -->
  <div class="main-container">
    <!-- Left Section -->
    <div class="left-section">
      <div class="intro-content">
        <h1>Explore the World's Wonders</h1>
        <p>
          Traveling allows you to experience diverse cultures, taste unique cuisines, and enjoy natural beauty. It also
          helps you grow by stepping out of your comfort zone.
        </p>
        <div class="action-buttons">
          <button class="btn-read-more">Read More</button>
          <button class="btn-our-blogs">Our Blogs</button>
        </div>
      </div>
    </div>

    <!-- Right Section -->
    <div class="right-section">
      <form>
        <h4>Subscribe to our Newsletter</h4>
        <div class="form-group">
          <input type="email" placeholder="Your Email" />
        </div>
        <button type="submit">Subscribe</button>
      </form>
    </div>
  </div>

  <div class="bottom-tracker">
    <span></span>
    <span></span>
  </div>

  <script>
    document.getElementById('home-link').addEventListener('click', function (event) {
      event.preventDefault();
      var dropdown = document.getElementById('home-dropdown');
      dropdown.style.display = (dropdown.style.display === 'block') ? 'none' : 'block';
    });
  </script>
</body>

</html>
    
</body>
</html>