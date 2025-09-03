<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Velora Kasih Support</title>
  <link rel="stylesheet" href="./Assests/style.css">
  <style>
    /* Reset */
html, body {
  margin: 0;
  padding: 0;
  width: 100%;
  overflow-x: hidden;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Top Banner */
.top {
  background-color: #07253F; /* navy blue shade */
  padding: 10px 0;
}

.top-center {
  color: white;
  text-align: center;
  font-size: 14px;
  margin: 0;
}

/* Navbar Background */
.bg-color {
  background-color: #e8f1ff;
  padding: 10px 20px;
}

/* Navbar Flex */
nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 80px;  /* fixed navbar height */
  box-sizing: border-box;
  padding: 0 20px;
  position: relative;
}

/* Logo size control (Desktop) */
.nav-logo img {
  max-height: 307px; /* keep as is */
  width: auto;
  display: block;
  object-fit: contain;
}

/* Menu Styling */
.nav-items ul {
  display: flex;
  gap: 30px;
  margin: 0;
  padding: 0;
  align-items: center;
}

.nav-items li {
  list-style: none;
}

.nav-items li a {
  text-decoration: none;
  font-size: 16px;
  font-weight: 500;
  color: #2b2b2b;
  transition: color 0.3s;
}

.nav-items li a:hover {
  color: #3ac117;
}
.nav-items li a:active {
  color: #3ac117;
  text-decoration: underline;
}

/* Hire Us Button */
.btn {
  background-color: #c6f22a;
  color: #000;
  padding: 10px 20px;
  border: none;
  border-radius: 6px;
  font-weight: bold;
  cursor: pointer;
  transition: background 0.3s;
}

.btn:hover {
  background-color: #a4d422;
}

/* Hamburger Menu */
.hamburger {
  display: none;
  flex-direction: column;
  justify-content: space-between;
  width: 30px;
  height: 21px;
  cursor: pointer;
  z-index: 1000;
  position: relative;
}

.hamburger span {
  display: block;
  width: 100%;
  height: 3px;
  background: #333;
  border-radius: 2px;
  transition: all 0.3s ease;
  position: relative;
}

/* Mobile Menu Styles */
@media (max-width: 992px) {
  .hamburger {
    display: flex;
    order: 2;
    margin-left: auto;
  }

  .nav-items {  
    position: fixed;
    top: 0;
    right: -280px; /* start off-screen (right) */
    left: auto;    /* ensure not sticking to left */
    width: 280px;
    height: 100vh;
    background-color: #dfefff;
    box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
    transition: right 0.3s ease-in-out;
    padding-top: 80px;
    z-index: 999;
  }

  .nav-items.active {
    right: 0; /* slide in */
  }

  .nav-items ul {
    flex-direction: column;
    padding: 20px;
    gap: 15px;
  }

  .nav-items ul li {
    width: 100%;
    text-align: center;
  }

  .hamburger.active span:nth-child(1) {
    transform: rotate(45deg) translate(5px, 5px);
  }

  .hamburger.active span:nth-child(2) {
    opacity: 0;
  }

  .hamburger.active span:nth-child(3) {
    transform: rotate(-45deg) translate(7px, -6px);
  }

  /* Overlay when menu is open */
  .overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 900;
  }
}
  </style>
</head>
<body>

  <!-- Top Bar -->
  <section class="top"> 
    <h4 class="top-center">
      The health and well-being of our patients and their health care team will always be our priority, 
      so we follow the best practices for cleanliness.
    </h4>
  </section>

  <!-- Navbar -->
  <section class="bg-color">
    <nav>
      <!-- Logo -->
      <div class="nav-logo">
        <img src="./Assests/images/background.png" alt="Velora Logo">
      </div>

      <!-- Hamburger Menu -->
      <div class="hamburger" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <!-- Menu Items -->
      <div class="nav-items" id="nav-items">
        <ul>
          <li><a href="index.php">Find Care</a></li>
          <li><a href="Our Services.php">Our Services</a></li>
          <li><a href="#">About Us</a></li>
          <li><button class="btn">Hire Us</button></li>
        </ul>
      </div>
    </nav>
  </section>

  <!-- Overlay -->
  <div class="overlay" id="overlay"></div>

  <script>
    const hamburger = document.getElementById('hamburger');
    const navItems = document.getElementById('nav-items');
    const overlay = document.getElementById('overlay');
    const body = document.body;
    
    function toggleMenu() {
      hamburger.classList.toggle('active');
      navItems.classList.toggle('active');
      overlay.style.display = overlay.style.display === 'block' ? 'none' : 'block';
      body.style.overflow = body.style.overflow === 'hidden' ? 'auto' : 'hidden';
    }
    
    hamburger.addEventListener('click', toggleMenu);
    overlay.addEventListener('click', toggleMenu);
    
    document.querySelectorAll('.nav-items a').forEach(link => {
      link.addEventListener('click', () => {
        if (window.innerWidth <= 992) {
          toggleMenu();
        }
      });
    });
    
    window.addEventListener('resize', () => {
      if (window.innerWidth > 992) {
        hamburger.classList.remove('active');
        navItems.classList.remove('active');
        overlay.style.display = 'none';
        body.style.overflow = 'auto';
      }
    });
  </script>

</body>
</html>
