<?php

if ($Nav_bar_inPage == "Show") {
    $display_Nav_bar = "";
} elseif ($Nav_bar_inPage !== "Show") {
    $display_Nav_bar = "display:none;";
}
?>

<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark"
  style="<?php echo $display_Nav_bar; ?>">
  <div class="navbar-wrapper">
    <div style="background:#24242c;" class="navbar-container content">
      <div class="collapse navbar-collapse show" id="navbar-mobile">
        <ul class="nav navbar-nav mr-auto float-left">
          <li class="nav-item mobile-menu d-md-none mr-auto">
            <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
              <i class="ft-menu font-large-1"> </i>
            </a>
          </li>
          <li class="dropdown d-none d-md-block ">
            <a class="dropdown-toggle nav-link" id="apps-navbar-links" href="#" data-toggle="dropdown"> Apps</a>
            <div class="dropdown-menu">
              <div class="arrow_box">
                <a class="dropdown-item" href="See-Game-Results.php"><i class="ft-eye"></i> See Game</a>
                <a class="dropdown-item" href="Play-Game-today.php"><i class="icon-speedometer"></i> Play Game</a>
                <a class="dropdown-item" href="Your-Balance.php"><i class="icon-wallet"></i> See Wallet </a>
                <a class="dropdown-item" href="My-User-Account.php"><i class="icon-users"></i> Your Account </a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown navbar-search d-none d-md-block">
            <a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#">
              <i class="ficon ft-search"></i>
            </a>
            <ul class="dropdown-menu">
              <li class="arrow_box">
                <form>
                  <div class="input-group search-box">
                    <div class="position-relative has-icon-right full-width">
                      <input class="form-control" id="search" type="text" placeholder="Search here...">
                      <div class="form-control-position navbar-search-close">
                        <i class="ft-x"></i>
                      </div>
                    </div>
                  </div>
                </form>
              </li>
            </ul>
          </li>
          <li class="nav-item ml-1">
            <a class="nav-link nav-link-expand" href="#">
              <i class="ficon ft-maximize"></i>
            </a>
          </li>
        </ul>
        <ul class="nav navbar-nav float-right">

          <li class="nav-item">
            <a class="nav-link nav-link-label font-medium-5" href="My-Balance.php">
              <b class="bell-shake">₹</b> <b class="text-success ">4,500</b>
            </a>
          </li>




          <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#"
              data-toggle="dropdown"> <span class="avatar avatar-online"><img
                  src="app-assets/images/portrait/small/avatar-s-15.png" alt="avatar"><i></i></span></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img
                      src="app-assets/images/portrait/small/avatar-s-15.png" alt="avatar"><span
                      class="user-name text-bold-700 ml-1">John Doe</span></span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="user-profile.html">
                  <i class="ft-user"></i> Edit Profile</a>
                <a class="dropdown-item" href="email-application.html">
                  <i class="ft-mail"></i> My Inbox</a>
                <a class="dropdown-item" href="chat-application.html">
                  <i class="ft-message-square"></i> Chats</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="login.php">
                  <i class="ft-power"></i> Logout</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<?php

$per_page_video_btn = 'header/Video-play-btn.php';

if (file_exists($per_page_video_btn)) {
    include $per_page_video_btn;
}

?>


<!-- END: Header-->