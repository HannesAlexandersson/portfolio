<?php require __DIR__ . '/partials/header.view.php'; // req the header?> 

<?php require __DIR__ . '/partials/preloader.view.php'; //req the preloader, will probably never be needed given the lazyloader ?>

<?php require __DIR__ . '/partials/navbar.view.php'; ?>
<!--Screen border -->
<div class="outer-white">
  <div class="outer-black-thick">
    <div class="outer-white-thin">
      <div class="outer-black-thin">
<!--Screen border -->
        <div class="outer-wrapper">
        <!-- BG-Photo by Growtika on Unsplash -->
          
          <div class="box-container">

            <div class="text-wrapper default-font">
              <div class="start-header">
                <h1>WELCOME</h1>
                <p>To Hannes Alexanderssons portfolio</p>
              </div>

              <div class="summary">
                This is where I store my collection of "websites". As of now tho I have not worked with an real customer yet given that I only currently are at my first year at Yrgo's Web dev education. 
              </div>
            </div>

            <div class="cta-wrapper">
              <button class="btn-cta">Get In Touch</button>
            </div>
            
          </div>
        </div>
        <!--Screen border -->
      </div>
    </div>
  </div>
</div>
<!--Screen border -->
<div class="screen-outer-container">
  <div class="virtual-card">
    <div class="card-content screen-title text-wrapper default-font ">    
      <h3>Samples</h3>
      <p>Here are some samples of the work Ive done, and the full collection is under the <a href="/collection">collection tab! -></a></p>
    </div>
  </div>


  <div class="screen-wrapper">

    <div class="screen-inner-container">
      <div class="screen-text default-font">
        <h4><a href="https://www.alexanderochson.se/Yrgopelago/">Yrgopelago</a></h4>
        <p>Yrgopelago was a project we had over christmas 2023. It was a contest among the students of the class, where we each made a fictive hotel in the  fictive archopelago of Yrgopelago. We then all got 100 dollars each wich we could then spend on eachothers hotels. The student who had the most money on the end of the day won! </p>
      </div>
          
      
      <img class="screen" src="/src/Assets/screens/Group 62.svg" alt="screenshot of yrgopelago website"/>        
      
    </div>

    <div class="screen-inner-container">
      <div class="screen-text default-font">
        <h4><a href="https://www.alexanderochson.se/Retronautica/">Retronautica</a></h4>
        <p>Retronautica was a project in the course Digital Design where we was supposed to create a website for our own dream cinema. Me and my project partner Liv both love fantasy and science fiction, so ofcourse we made a science fiction cinema who only plays old classics! It contains a landing page and a event page for 2000 A space odysee´</p>
      </div>
      
      <img class="screen" src="/src/Assets/screens/Group 63.svg" alt="screenshot of retronautica website"/>     
      
    </div>

    <div class="screen-inner-container">
      <div class="screen-text default-font">
        <h4><a href="https://www.alexanderochson.se/Protech/">Protech</a></h4>
        <p>Protech was a joint effort project in wich we, the web devs, joined forces with the Digital Design and Graphical Artist students to create a landing page for a fictive product. the GA-students created the products, the designers designed the layout, and we the web devs made it a reality!</p>
      </div>
     
        <img class="screen" src="/src/Assets/screens/Group 66.svg" alt="screenshot of protech website"/>        
      
    </div>

  </div>


</div>

<script src="/src/Scripts/3dcards.js"></script>



<hr>
<?php require __DIR__ . '/partials/footer.view.php'; ?>