<?php
if ($side_dashboard == "active") {
    $hilight_dashboard = "style='color:#62f0fa !important;'";
} else {
    $hilight_dashboard = "";
}
if ($side_addresut == "active") {
    $hilight_addresut = "active";
} else {
    $hilight_addresut = "";
}
if ($side_addgame == "active") {
    $hilight_addgame = "active";
} else {
    $hilight_addgame = "";
}
if ($side_userrecharge == "active") {
    $hilight_userrecharge = "active";
} else {
    $hilight_userrecharge = "";
}
if ($side_userwithdrawal == "active") {
    $hilight_userwithdrawal = "active";
} else {
    $hilight_userwithdrawal = "";
}
if ($side_adduser == "active") {
    $hilight_adduser = "active";
} else {
    $hilight_adduser = "";
}
if ($side_yourmessage == "active") {
    $hilight_yourmessage = "active";
} else {
    $hilight_yourmessage = "";
}
if ($side_seehisab == "active") {
    $hilight_seehisab = "active";
} else {
    $hilight_seehisab = "";
}
if ($side_usersetting == "active") {
    $hilight_usersetting = "active";
} else {
    $hilight_usersetting = "";
}
if ($side_frontend == "active") {
    $hilight_frontend = "active";
} else {
    $hilight_frontend = "";
}
if ($side_customersrefer == "active") {
    $hilight_customersrefer = "active";
} else {
    $hilight_customersrefer = "";
}
if ($side_manualcron == "active") {
    $hilight_manualcron = "active";
} else {
    $hilight_manualcron = "";
}
if ($side_extra == "active") {
    $hilight_extra = "active";
} else {
    $hilight_extra = "";
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
          <h3 class="brand-text" <?php echo $hilight_dashboard; ?>>big-N Games</h3>
        </a></li>
      <li class="nav-item d-none d-md-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0"
          data-toggle="collapse"><i class="toggle-icon ft-disc font-medium-3" data-ticon="ft-disc"></i></a></li>
      <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
    </ul>
  </div>
  <div class="navigation-background"></div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class=" nav-item <?php echo $hilight_addresut; ?> "><a href="Add-Results.php"><i
            class="la la-plus-square"></i><span class="menu-title" data-i18n="">Add Result</span></a></li>
      <li class=" nav-item <?php echo $hilight_addgame; ?> "><a href="Add-Game.php"><i class="la la-gamepad"></i><span
            class="menu-title" data-i18n="">Add Game</span></a></li>
      <li class=" nav-item <?php echo $hilight_userrecharge; ?> "><a href="User-Recharge.php"><i
            class="la la-plug"></i><span class="menu-title" data-i18n="">Recharge</span></a></li>
      <li class=" nav-item <?php echo $hilight_userwithdrawal; ?> "><a href="User-Withdrawal.php"><i
            class="la la-credit-card"></i><span class="menu-title" data-i18n="">Withdrawal</span></a></li>
      <li class=" nav-item <?php echo $hilight_adduser; ?> "><a href="Add-User.php"><i class="la la-user-plus"></i><span
            class="menu-title" data-i18n="">Add User</span></a></li>
      <li class=" nav-item <?php echo $hilight_yourmessage; ?> "><a href="Your-Message.php"><i
            class="la la-comment"></i><span class="menu-title" data-i18n="">Message</span></a></li>
      <li class=" nav-item <?php echo $hilight_seehisab; ?> "><a href="See-Hisab.php"><i
            class="la la-calculator"></i><span class="menu-title" data-i18n="">See Hisab</span></a></li>
      <li class=" nav-item <?php echo $hilight_usersetting; ?> "><a href="Admin-Account.php"><i
            class="la la-cog"></i><span class="menu-title" data-i18n="">Setting</span></a></li>

      <li class=" nav-item "><a href="#"><i class="la la-bug"></i><span class="menu-title" data-i18n="">
            More</span></a>
        <ul class="menu-content">
          <li class=" <?php echo $hilight_frontend; ?> "><a class="menu-item" href="Frontend-Setting.php">
              Front</a>
          </li>
          <li class=" <?php echo $hilight_customersrefer; ?> "><a class="menu-item" href="Customers-Reference.php">
              Refer</a>
          </li>
          <li class=" <?php echo $hilight_manualcron; ?> "><a class="menu-item" href="Cron-Table.php">
              Cron</a>
          </li>
          <li class=" <?php echo $hilight_extra; ?> "><a class="menu-item" href="Extra.php">
              Extra</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</div>
<!-- END: Main Menu-->