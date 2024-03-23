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

  
 
<script src="/src/Scripts/nav.js"></script>
</nav>