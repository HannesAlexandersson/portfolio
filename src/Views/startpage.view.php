<?php require __DIR__ . '/header.view.php'; ?>
<!-- Insert some filler text here
 -->
 <form method="get">
<?php 
foreach($pages as $name => $page){?>
  <div class="cards" value="<?=$page?>" name="<?=$page?>"><?=$name?></div><?php
}?>
 </form>
<!-- and perhaps here -->
<script src="/src/Scripts/observer.js"></script>
<?php require __DIR__ . '/footer.view.php'; ?>