<?php
declare(strict_types=1);


function create_copyright(): string
{
    $year = date('Y');
    $message = 'Copyright &copy; ' . $year. ' Hannes Alexandersson';
    return $message;
};
?>
    
    <footer class="footer">
      <div class="copyright">
        <?= create_copyright()?>
      </div>
      
      <social class="social">
        <a href="https://github.com/HannesAlexandersson">
          <img src="src/Assets/social-media/github-light.svg">
        </a>
        <a href="https://www.linkedin.com/in/hannes-alexandersson-3226952b3/">
          <img src="src/Assets/social-media/linkedin.svg">
        </a>
      </social>
    </footer>
  </body>
</html>

