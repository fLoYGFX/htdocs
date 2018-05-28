<?php
session_start();

if(isset($_SESSION['user'])){
  $user = $_SESSION['user'];
}

$footer ='
<!-- footer start here -->
<div class="footer-agile jarallax">
  <div class="container">

    <div class="footer-btm-agileinfo">
      <div class="col-md-3 col-xs-3 footer-grid">
        <h3>Nützliches Zeug:</h3>
        <ul>
          <li><a href="#"><i class="glyphicon glyphicon-menu-right"></i>Letzte Matches</a></li>
          <li><a href="#"><i class="glyphicon glyphicon-menu-right"></i>Logos </a></li>
          <li><a href="#"><i class="glyphicon glyphicon-menu-right"></i>Twitch Stuff</a></li>
          <li><a href="#"><i class="glyphicon glyphicon-menu-right"></i>Configs</a></li>
          <li><a href="#"><i class="glyphicon glyphicon-menu-right"></i>Scripts</a></li>

        </ul>
      </div>
      <div class="col-md-3 col-xs-3 footer-grid w3social">
        <h3>Navigation:</h3>
        <ul>
          <li><a href="index.html">Startpage</a></li>
          <li><a href="services.html">Maps</a></li>
          <li><a href="projects.html">Taktiken</a></li>
          <li><a href="contact.html">Utility</a></li>
          <li><a href="contact.html">Termine</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-xs-6 footer-grid footer-review">

          <img src="images/effect.png"></img>
          <div> </div>

        <div class="copy-w3lsright">

        <div class="copyright">
          <p> &copy '.date("Y").' Team Effect | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
        </div>
        </div>
        </div>
';

?>
