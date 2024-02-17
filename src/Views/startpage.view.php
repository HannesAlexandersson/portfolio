<?php require __DIR__ . '/partials/header.view.php'; // req the header?> 

<?php require __DIR__ . '/partials/preloader.view.php'; //req the preloader, will probably never be needed given the lazyloader ?>

<?php require __DIR__ . '/partials/navbar.view.php'; ?>


<div class="card-container">
  <h1 class="start-page-header default-font">The early cringe days</h1>
  <?php 
  foreach($earlyDays as $name => $page){?>
    <div class="outer-container" id="clipping">
      <p class="card-title secondary-font"><?=$name?></p>
      <a href="<?=$page['Url']?>">
        <div class="cards" value="<?=$page['Name']?>" name="<?=$page['Name']?>" data-tooltip="<?=$page['tooltip']?>">    
        </div>
      </a>
      <p class="github detail-font">Github: <?=$page['Github']?></p>

    </div><?php
    }?>
    <h1 class="start-page-header default-font">the more recent cringe stuff</h1>
    <?php 
    foreach($newer as $name => $page){?>
      <div class="outer-container">
        <p class="card-title secondary-font"><?=$name?></p>
        <a href="<?=$page['Url']?>">
          <div class="cards" value="<?=$page['Name']?>" name="<?=$page['Name']?>">    
          </div>
        </a>
        <p class="github detail-font">Github: <?=$page['Github']?></p>
      </div><?php
    }?>
</div>


<script src="/src/Scripts/observer.js"></script>
<hr>
<?php require __DIR__ . '/partials/footer.view.php'; ?>