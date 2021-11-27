<?php
if ($Foot_bar_inPage == "Show") {
  $Foot_bar_visible = "";
} elseif ($Foot_bar_inPage !== "Show") {
  $Foot_bar_visible = "display:none;";
}
?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<style>
/* CSS Reset used: http://seodesigns.com/projects/codepen/reset.css */
.sticky-footer {
  display: block;
  height: 58px;
  background: black;
  position: fixed;
  bottom: 0px;
  left: 0px;
  width: 100%;
  z-index: 3;
}
.sticky-footer .one-fourth {
  width: 20%;
  float: left;
  color: #fff;
  text-align: center;
  height: 58px;
  position: relative;
  cursor: pointer;
  padding-top:5px;
}
.sticky-search,
.sticky-filters,
.sticky-map,
.sticky-radius {
  width: 20px;
  height: 20px;
  margin: auto;
  margin-top: 11px;
}
.sticky-footer .one-fourth p {
  font-size: 10px;
  margin-top: 3px;
}
</style>


<footer style="<?php echo $Foot_bar_visible; ?>" class="footer footer-static footer-dark navbar-shadow">
  
    <div class="sticky-footer d-lg-none">
    
    <div class="one-fourth" id="search" onclick="window.location='Play-Game.php';">
	<i class="icon-game-controller text-white  fa-2x" aria-hidden="true"></i>
     <p>Play Game</p> 
    </div>
    

    
    <div class="one-fourth" id="map" onclick="window.location='Message.php';">
	<i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
      <p>See Message</p>
    </div>
	
    <div class="one-fourth" id="filters" onclick="window.location='See-History.php';">
	<i class="icon-calculator fa-2x" aria-hidden="true"></i>
      <p>See Hisab</p>
    </div>
    
    <div class="one-fourth" id="radius" onclick="window.location='Game-Results.php';">
	<i class="fa fa-question-circle fa-2x" aria-hidden="true"></i>
      <p>Guessing</p>
    </div>
	
	 <div class="one-fourth" id="radius" onclick="window.location='My-Balance.php';">
	 <i class="icon-wallet text-white   fa-2x" aria-hidden="true"></i>
      <p>See Bag</p>
    </div>
    
  </div>
  
  
  
  <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span
      class="float-md-left d-block d-md-inline-block"><?= date("Y") ?> &copy; Copyright <a
        class="text-bold-800 grey darken-2" href="http://big-Nday.com" target="_blank">BigNumberGame</a></span>
    <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
      <li class="list-inline-item"><a class="my-1" href="https://bignumbergame.com/"
          target="_blank">BigNumberGame.com</a>
      </li>
      <li class="list-inline-item"><a class="my-1" href="https://bignumbergame.com/" target="_blank">Other Website</a>
      </li>
    </ul>
  </div>
  
  
  
  
</footer>