<?php require __DIR__ . '/partials/header.view.php'; // req the header?> 

<?php require __DIR__ . '/partials/preloader.view.php'; //req the preloader, will probably never be needed given the lazyloader ?>

<?php require __DIR__ . '/partials/navbar.view.php'; ?>


<div class="card-container">
  <h1 class="start-page-header default-font">The first semester at Yrgo</h1>
  <?php 
  foreach($earlyDays as $name => $page){?>
    <div class="outer-container" id="clipping">
      <p class="card-title secondary-font"><?=$name?></p>
      <a href="<?=$page['path']?>">
        <div class="cards" value="<?=$page['Name']?>" name="<?=$page['Name']?>" data-tooltip="<?=$page['tooltip']?>" style="background-image: url(<?=$page['img']?>); background-size: cover;">    
        </div>
      </a>
      <p class="github detail-font">Github: <a href="<?=$page['Github']?>"><?=$page['Github']?></a></p>

    </div><?php
    }?>
    <h1 class="start-page-header default-font">the second semester at Yrgo</h1>
    <?php 
    foreach($newer as $name => $page){?>
      <div class="outer-container">
        
          <p class="card-title secondary-font"><?=$name?></p>
          <a href="<?=$page['Url']?>">
            <div class="cards" value="<?=$page['Name']?>" name="<?=$page['Name']?>" style="background-image: url(<?=$page['img']?>); background-size: cover;">
            </div>
          </a>
          <p class="github detail-font">Github: <a href="<?=$page['Github']?>"><?=$page['Github']?></a></p>
        
      </div><?php
    }?>
</div>



<script src="/src/Scripts/observer.js"></script>
<hr>
<?php require __DIR__ . '/partials/footer.view.php'; ?>