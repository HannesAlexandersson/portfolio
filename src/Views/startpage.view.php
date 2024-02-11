<?php require __DIR__ . '/partials/header.view.php'; // req the header?> 

<?php require __DIR__ . '/partials/preloader.view.php'; //req the preloader, will probably never be needed given the lazyloader ?>

<?php require __DIR__ . '/partials/navbar.view.php'; ?>

<form method="get">
  <div class="card-container">
    <h1>The early days</h1>
<?php 
foreach($earlyDays as $name => $page){?>
  <div class="cards" value="<?=$page?>" name="<?=$page?>"><?=$name?></div><?php
}?>

    <h1>the more recent stuff</h1>
    <?php 
foreach($newer as $name => $page){?>
  <div class="cards" value="<?=$page?>" name="<?=$page?>"><?=$name?></div><?php
}?>
  </div>
</form>

<script src="/src/Scripts/observer.js"></script>
<?php require __DIR__ . '/partials/footer.view.php'; ?>