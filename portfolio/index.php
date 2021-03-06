<?php

/**Author : Oladele John

** © 2022 Oladele John

** Portfolio

** File name : index.php

** About : this module displays the landing page of the portfolio

*/

/**PSUEDO ALGORITHM
 * *
 * initiate the portfolio class
 * define the landing page
 * cache the landing page
 *
 * *
 */

//cache library
require('../vendor/autoload.php');
use Phpfastcache\CacheManager;
use Phpfastcache\Config\ConfigurationOption;

//initiate the portfolio class
class portfolio{

    public $landing_page;

    //define the landing page
    public function landingPage(){

        $this->landing_page = '

        <!DOCTYPE html>
    <html>
        <head>
            <title>Oladele John | Portfolio</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
                <link rel="icon" type="images/png" sizes="32x32" href="images/favicon-32x32.png">
                <link rel="icon" type="images/png" sizes="16x16" href="images/favicon-16x16.png">
                <link rel="manifest" href="site.webmanifest">

            <style>
                body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
                .w3-row-padding img {margin-bottom: 12px}
                /* Set the width of the sidebar to 120px */
                .w3-sidebar {width: 120px;background: #222;}
                /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
                #main {margin-left: 120px}
                /* Remove margins from "page content" on small screens */
                @media only screen and (max-width: 600px) {#main {margin-left: 0}}
            </style>
        </head>

        <body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner
  <img src="/w3images/avatar_smoke.jpg" style="width:100%">
  -->
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-superpowers w3-xxlarge"></i>
    <p>Skills</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-briefcase w3-xxlarge"></i>
    <p>PROJECTS</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important"><i class="fa fa-home w3-xxlarge"></i></a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important"><i class="fa fa-superpowers w3-xxlarge"></i></a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important"><i class="fa fa-briefcase w3-xxlarge"></i></a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important"><i class="fa fa-envelope w3-xxlarge"></i></a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <br>
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <img src="/images/monkeyNFT.png" alt="avatar" class="w3-circle" width="300px" height="300px">
    <h1 class="w3-jumbo"><span class="w3-hide-small">
        Hi,I Am</span> Oladele John.
    </h1>
    <p>I Build Cool Full Stack Web Applications
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
    <p class="w3-wide">Html</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:95%"></div>
    </div>

    <p class="w3-wide">Css</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:55%"></div>
    </div>

    <p class="w3-wide">Javascript</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:75%"></div>
    </div>

    <p class="w3-wide">Jquery</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:75%"></div>
    </div>

    <p class="w3-wide">Bootstrap</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:80%"></div>
    </div>

    <p class="w3-wide">Php</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:85%"></div>
    </div>

    <p class="w3-wide">Laravel</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:10%"></div>
    </div>

    <p class="w3-wide">Mysql</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:80%"></div>
    </div>

  </div>
    <br>

  <!-- Portfolio Section -->
  <div align="center">
  <div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-light-grey">Projects</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="images/project1.png" style="width:100%">
        <img src="images/project1.png" style="width:100%">
      </div>

      <div class="w3-half">
        <img src="images/project1.png" style="width:100%">
        <img src="images/project1.png" style="width:100%">
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>
  </div>

  <!-- Contact Section -->
  <div align="center">
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Cloud</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: 09061811990</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: johnoladele690@gmail.com</p>
    </div><br>
  <!-- End Contact Section -->
  </div>
  </div>

    <!-- Footer -->
  <div align="center">
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <p class="w3-medium"><i class="fa fa-copyright"></i>2022 Oladele John</a></p>
  <!-- End footer -->
  </footer>
  </div>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>

        ';

    }

    //cache the landing page
    public function cacheLandingPage(){

        CacheManager::setDefaultConfig(new ConfigurationOption([
            'path' => '', // or in windows "C:/tmp/"
        ]));

        $InstanceCache = CacheManager::getInstance('files');

        $key = "home_page";
        $Cached_page = $InstanceCache->getItem($key);

        if (!$Cached_page->isHit()) {
            $Cached_page->set($this->landing_page)->expiresAfter(1);//in seconds, also accepts Datetime

            $InstanceCache->save($Cached_page); // Save the cache item just like you do with doctrine and entities

            echo $Cached_page->get();
            //echo 'FIRST LOAD // WROTE OBJECT TO CACHE // RELOAD THE PAGE AND SEE // ';

        } else {

            echo $Cached_page->get();
            //echo 'READ FROM CACHE // ';

            $InstanceCache->deleteItem($key);
        }

    }

}

$portfolio = new portfolio();

$portfolio->landingPage();

$portfolio->cacheLandingPage();

?>
