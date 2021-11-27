<?php
if ($side_dashboard == "active") {
    $hilight_dashboard = "active";
} else {
    $hilight_dashboard = "";
}
if ($side_seeresut == "active") {
    $hilight_seeresut = "active";
} else {
    $hilight_seeresut = "";
}
if ($side_playgame == "active") {
    $hilight_playgame = "active";
} else {
    $hilight_playgame = "";
}
if ($side_seehisab == "active") {
    $hilight_seehisab = "active";
} else {
    $hilight_seehisab = "";
}
if ($side_seebag == "active") {
    $hilight_seebag = "active";
} else {
    $hilight_seebag = "";
}
if ($side_justmessage == "active") {
    $hilight_justmessage = "active";
} else {
    $hilight_justmessage = "";
}
if ($side_adminmessage == "active") {
    $hilight_adminmessage = "active";
} else {
    $hilight_adminmessage = "";
}
if ($side_guessing == "active") {
    $hilight_guessing = "active";
} else {
    $hilight_guessing = "";
}
if ($side_usersetting == "active") {
    $hilight_usersetting = "active";
} else {
    $hilight_usersetting = "";
}


if ($Side_bar_inPage == "Show") {
    $display_Side_bar = "";
} elseif ($Side_bar_inPage !== "Show") {
    $display_Side_bar = "display:none;";
}
?>

<!-- BEGIN: Main Menu-->

<div style="<?php echo $display_Side_bar; ?>"
 class="main-menu menu-fixed menu-dark menu-accordion bg-gradient-x-real-dark sidebar-bg " data-scroll-to-active="true"
 data-img="app-assets/images/backgrounds/none.jpg">
 <div class="navbar-header">
  <ul class="nav navbar-nav flex-row position-relative">
   <li class="nav-item mr-auto"><a class="navbar-brand" href="index.php"><img class="brand-logo"
      alt="Chameleon admin logo" src="app-assets/images/logo/logo.png" />
     <h3 class="brand-text">big-N Games</h3>
    </a></li>
   <li class="nav-item d-none d-md-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0"
     data-toggle="collapse"><i class="toggle-icon ft-disc font-medium-3" data-ticon="ft-disc"></i></a></li>
   <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
  </ul>
 </div>
 <div class="navigation-background"></div>
 <div class="main-menu-content">
  <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
   <li class=" nav-item <?php echo $hilight_dashboard; ?> "><a href="index.php"><i class="icon-home"></i><span
      class="menu-title" data-i18n="">Dashboard</span></a></li>
   <li class=" nav-item <?php echo $hilight_seeresut; ?> "><a href="Game-Results.php"><i class="icon-eye"></i><span
      class="menu-title" data-i18n="">See Result</span></a></li>
   <li class=" nav-item <?php echo $hilight_playgame; ?> "><a href="Play-Game.php"><i
      class="icon-game-controller"></i><span class="menu-title" data-i18n="">Play Game</span></a></li>
   <li class=" nav-item <?php echo $hilight_seebag; ?> "><a href="My-Balance.php"><i class="icon-wallet"></i><span
      class="menu-title" data-i18n="">See Bag</span></a></li>
   <li class=" nav-item <?php echo $hilight_justmessage; ?> "><a href="Message.php"><i class="icon-envelope"></i><span
      class="menu-title" data-i18n="">Message</span></a>
    <ul class="menu-content">
     <li class=" <?php echo $hilight_adminmessage; ?> "><a class="menu-item" href="Admin-Message.php">Admin Message</a>
     </li>
     <li class=" <?php echo $hilight_guessing; ?> "><a class="menu-item" href="Guessing.php">Get Guessing</a>
     </li>
	  <li class=" <?php echo $hilight_guessing; ?> ">
	  <a class="menu-item" href="Add-complaints.php">Add Complaints</a>
     </li>
    </ul>
   </li>
   <li class=" nav-item <?php echo $hilight_seehisab; ?> "><a href="See-History.php"><i
      class="icon-calculator"></i><span class="menu-title" data-i18n="">See Hisab</span></a></li>
   <li class=" nav-item <?php echo $hilight_usersetting; ?> "><a href="User-Account.php"><i class="icon-users"></i><span
      class="menu-title" data-i18n="">User Setting</span></a></li>

   <li class=" nav-item "><a href="#"><i class="icon-equalizer"></i><span class="menu-title"
      data-i18n="">Extra</span></a>
    <ul class="menu-content">
     <li><a class="menu-item" href="Extra1.php">Extra 1</a>
     </li>
     <li><a class="menu-item" href="Extra2.php">Extra 2</a>
     </li>
    </ul>
   </li>
  </ul>
 </div>
</div>
<!-- END: Main Menu-->