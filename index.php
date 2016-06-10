<?php
$title = "The Lab";
$page = "index";
include "headerhome.php";
?>

    <!-- HOME SECTION -->
    <section id='home-section' class="home-section overlay">
          
          </div>
          <div class="home-content">
          <div class="info">
           <div class="info_left">
          <p><strong>Opening Hours:</strong> Monday - Friday , 9am - 5pm</p>
          </div>
           <div class="info_right">
          <p><strong>Located On:</strong> The Ground Level of Vic Uni's, Esterfield Building, 21 Kelburn Parade, Kelburn, Wellington</p>
          </div>
          </div>
            <div class="home-content-inner">
                <div class="brandLogo"><img id="logo" src="images/logo.svg" alt="Brand-Logo"></div>
                    <h1 class="brandAnimation-title letters rotate-2 h1">
                          <span class="brandAnimation-words-wrapper">
                              <b class="is-visible"> The Lab</b>
                              <b>Healthy</b>
                              
                              <b>Fresh</b>
                              
                              <b>Local</b>
                          </span>
                    </h1>
                <h4 class="h4">Noodles, Salads & Juices. <br>Made Daily.</h4>
            </div>
            <span class="scroll-down-arrow">
              <a href="#front-page" title="button" target="_self" class="scroll-down">
              <i class="fa fa-angle-down scroll-down-icon"></i>
              </a>
            </span>
        </div>
    </section>
    <!-- //HOME SECTION// -->


    <section class="content">
      <article id="front-page">
        <h3>featured products & our creations</h3>
        <hr>
        <p>Whether you're thirsty and craving a refreshing cold pressed <a href="ourcreations.html#juices">juice</a>, feeling hungry and can't wait to bite into one of our signature <a href="ourcreations.html#noodles">noodle salads</a>, are catching up with a friend between courses or need that warm cup of <a href="ourcreations.html#beverages">coffee</a> to wake you up on a chilly winters day, we have a varied selection of noodles, salads, juices and even <a href="ourcreations.html#snacks">snacks</a> (for all of you with a sweet tooth). </p>
        <hr>
        <div class="food-category-pics">
          <div class="row img-row">
            <figure class="columns three"><img src="images/svg/noodles.svg">
              <figcaption>Noodle Salads  <br><strong>Noodle Salads</strong></figcaption>
            </figure>
            <figure class="columns three"><img src="images/svg/juice.svg">
              <figcaption>Juices  <br><strong>Juices</strong></figcaption>
            </figure>
            <figure class="columns three"><img src="images/svg/coffee.svg">
              <figcaption>Coffees  <br><strong>Coffees</strong></figcaption>
            </figure>
            <figure class="columns three"><img src="images/svg/snacks.svg">
              <figcaption>Snacks  <br><strong>Snacks</strong></figcaption>
            </figure>
          </div>
        </div>

        <h3> @thelabvictoria & #thelab</h3>
        <hr>

        <div class="columns twelve">
          <ul class="juicer-feed" data-feed-id="thelabvictoria" data-per='6' data-pages="2" data-truncate="150" data-columns="3" data-gutter="20"><h1 class="referral"></h1></ul>
        </div>


        <h3>come and visit us today</h3>
        <hr>
        
        <div class="large-window">
          <div class="window-tint">
          <div id="map" class="columns twelve">
          </div>
          </div>
        </div>
       
      </article>
    </section>

<?php 
include "footer.php";
 ?>
