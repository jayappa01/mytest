<?php

if ($Nav_bar_inPage == "Show") {
    $display_Nav_bar = "";
} elseif ($Nav_bar_inPage !== "Show") {
    $display_Nav_bar = "display:none;";
}
?>

<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark"
    style="<?php echo $display_Nav_bar; ?> background:#202020;">
    <div class="navbar-wrapper rounded-bottom">
        <div style="background:#202020; background:linear-gradient(to right,#383FD8 0,#FF4961 100%);"
            class="navbar-container content p-8-t p-4-b rounded-lg no-border-top-radius ">
            <div class="collapse navbar-collapse show" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="dropdown">
                        <h4 class="sm-white text-white"><img width="40px!important"
                                src="app-assets/images/logo/logo.png" alt="logo"
                                class="brand-logo b-block mt-1 mt-md-0">
                        </h4>
                    </li>
                    <li class="">
                        <h4 class="sm-white text-white"><b class="ml-1 p-4-t m-8-t d-none d-md-block">big-N GAMES</b>
                        </h4>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">

                    <li class="nav-item">
                        <a class="nav-link nav-link-label font-medium-5" href="My-Balance.php">
                            <b class="bell-shake">₹</b> <b class="text-success ">4,500</b>
                        </a>
                    </li>
                    <li class="nav-item ml-1">
                        <a class="nav-link nav-link-expand" href="#">
                            <i class="ficon ft-maximize"></i>
                        </a>
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