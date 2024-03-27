<nav class="navbar"> 

  <div class="logo-wrapper">    
    <img class="logo" src="/src/Assets/Logos/logo.svg" />    
  </div> 

  

  <div class="links navigation default-font" id="dropdownContent">
    <a href="/" <?php echo ($_SERVER['REQUEST_URI'] == '/') ? 'class="active"' : ''; ?>>Home<span></span></a>
    <a href="/collection" <?php echo ($_server['REQUEST_URI'] == 'collection') ? 'class="active"' : '';?>>Collection<span></span></a>
    <a href="/cv" <?php echo ($_SERVER['REQUEST_URI'] == '/cv') ? 'class="active"' : ''; ?>>CV<span></span></a>
    <a href="/story" <?php echo ($_SERVER['REQUEST_URI'] == '/story') ? 'class="active"' : ''; ?>>My Story<span></span></a>
    <a href="/contact" <?php echo ($_SERVER['REQUEST_URI'] == '/contact') ? 'class="active"' : ''; ?>>Contact Me<span></span></a>
  </div>


  <!-- <div class="mobile"> -->
    <div class="links navigation-mobile default-font"  id="dropdownContent">
      <div class="nav-links-wrapper"><img src="/src/Assets/navIcons/home.svg"/><a href="/" <?php echo ($_SERVER['REQUEST_URI'] == '/') ? 'class="active"' : ''; ?>>Home<span></span></a></div>
      <div class="nav-links-wrapper"><img src="/src/Assets/navIcons/collection.svg"/><a href="/collection" <?php echo ($_server['REQUEST_URI'] == 'collection') ? 'class="active"' : '';?>>Collection<span></span></a></div>
      <div class="nav-links-wrapper"><img src="/src/Assets/navIcons/resume.svg"/><a href="/cv" <?php echo ($_SERVER['REQUEST_URI'] == '/cv') ? 'class="active"' : ''; ?>>CV<span></span></a></div>
      <div class="nav-links-wrapper"><img src="/src/Assets/navIcons/story.svg"/><a href="/story" <?php echo ($_SERVER['REQUEST_URI'] == '/story') ? 'class="active"' : ''; ?>>My Story<span></span></a></div>
      <div class="nav-links-wrapper"><img src="/src/Assets/navIcons/contact.svg"/><a href="/contact" <?php echo ($_SERVER['REQUEST_URI'] == '/contact') ? 'class="active"' : ''; ?>>Contact Me<span></span></a></div>
    </div>

    <div class="hamburger-menu" id="hamburgerMenu">
      <div class="hamburger-icon" id="hamburgerIcon">&#9776;</div>
    </div>
  <!-- </div> -->

<script src="/src/Scripts/nav.js"></script>
<script>
  
  // JavaScript for toggling mobile menu
  document.addEventListener('DOMContentLoaded', function() {

    // JavaScript for toggling mobile menu
 const hamburgerIcon = document.getElementById('hamburgerIcon');
 const mobileMenu = document.querySelector('.navigation-mobile');
 if (hamburgerIcon && mobileMenu) {
      hamburgerIcon.addEventListener('click', function() {
        mobileMenu.classList.toggle('show');
      });
    }
  });
</script>
</nav>