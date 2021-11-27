<?php
//-----------------------------Theme & Title Of The Page
$meta_color = "#328afe";
$title_name = "";
$play_video_4page = "app-assets/videos/lessons/2.mp4";
//-----------------------------If Needed To "active"
$side_dashboard = "";
$side_seeresut = "";
$side_playgame = "";
$side_seehisab = "";
$side_seebag = "";
$side_justmessage = "";
$side_adminmessage = "";
$side_guessing = "";
$side_usersetting = "";
//------------------------------If Needed To "Show"
$Side_bar_inPage = "";
$Nav_bar_inPage = "Show";
$Foot_bar_inPage = "Show";
$Foot_hoverbtn_inPage = "Show";
//-------------------------------include File If Needed
$navbarHead = 'header/nav-bar-head.php';
$ThisPageCss1  = 'app-assets/css/pages/index.css';
$ThisPageCss2  = 'app-assets/css/pages/NameOfCssFile.css';
$ThisPageCss3  = 'app-assets/css/pages/nameOfcssfile';
$requiredHeadFile1 = 'required/File/location/1';
$requiredHeadFile2 = 'required/File/location/2';
$requiredHeadFile3 = 'required/File/location/3';
$navbarToe = 'header/nav-bar-toe.php';
//-------------------------------Types of include File
if (file_exists($navbarHead)) {
    include $navbarHead;
}
if (file_exists($requiredHeadFile1)) {
    include $requiredHeadFile1;
}
if (file_exists($requiredHeadFile2)) {
    include $requiredHeadFile2;
}
if (file_exists($requiredHeadFile3)) {
    include $requiredHeadFile3;
}

if (file_exists($navbarToe)) {
    include $navbarToe;
}
//-------------------------------Extra Function For This Page

?>

<div class="col-12 m-0 p-0">
    <div class="col-12 text-center">
        <div class="section-heading">
            <p>Usefull features</p>
            <h1 class="text-header text-uppercase mb-0">Endless features</h1>
            <hr class="line-style mx-auto d-block">
            <p class="mt-3">Chameleon Admin template is powered with HTML5, CSS3, Bootstrap 4, SASS, <br> Gulp, RTL
                support and pre-built Templates.</p>
        </div>
    </div>
</div>



<!-- ***** Cool Facts Area Start ***** -->
<section class="cool-facts-area clearfix text-white shadow mb-2 mx-0 px-0" style="background:#383FD8;">
    <div class="container-fluid">
        <div class="row text-center">
            <!-- Single Cool Fact-->
            <div class="col-lg-3 col-6 mt-4">
                <div class="single-cool-fact wow fadeInUp" data-wow-delay="0.2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="counter-area">
                        <h3 class="font-large-3 white"><span class="counter">100</span>+</h3>
                    </div>
                    <div class="cool-facts-content">
                        <p>Pages</p>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-lg-3 col-6 mt-4">
                <div class="single-cool-fact wow fadeInUp" data-wow-delay="0.4s"
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <div class="counter-area">
                        <h3 class="font-large-3 white"><span class="counter">200</span>+</h3>
                    </div>
                    <div class="cool-facts-content">
                        <p>Components</p>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-lg-3 col-6 mt-4">
                <div class="single-cool-fact wow fadeInUp" data-wow-delay="0.6s"
                    style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                    <div class="counter-area">
                        <h3 class="font-large-3 white"><span class="counter">50</span>+</h3>
                    </div>
                    <div class="cool-facts-content">
                        <p>Charts</p>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-lg-3 col-6 mt-4">
                <div class="single-cool-fact wow fadeInUp" data-wow-delay="0.8s"
                    style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                    <div class="counter-area">
                        <h3 class="font-large-3 white"><span class="counter">100</span>+</h3>
                    </div>
                    <div class="cool-facts-content">
                        <p>Cards</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Cool Facts Area End ***** -->



<div class="content-wrapper container-fluid">
    <div class="content-body m-0 p-0 ">

        <div class="card shadow  badge-black bg-black-transperent-40">
            <div class="card-header">
                <div class="card-title">1 Top</div>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements bg-none ">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                Static message Will Come Here
            </div>
        </div>

        <div class="card shadow  badge-black bg-black-transperent-40">
            <div class="card-header">
                <div class="card-title">2 Top</div>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements bg-none ">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                Static message Will Come Here
            </div>
        </div>

        <div class="card shadow  badge-black bg-black-transperent-40">
            <div class="card-header">
                <div class="card-title">3 Top</div>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements bg-none ">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                Static message Will Come Here
            </div>
        </div>


        <section>
            <!-- Start Double Result Game  -->
            <div class="row">
                <div class="col-12 card badge-black">
                    <div class="card-header pl-0">
                        <div class="card-title ">
                            <h4 class="text-uppercase font-weight-bolder line-height-1 text-info">
                                SEE RESULT
                            </h4>
                            <h5 class="text-uppercase font-weight-bolder line-height-1 text-warning">
                                <?= date("d/m/Y") ?>
                            </h5>
                            <p class="text-uppercase font-weight-bolder line-height-1 text-light">
                                Play Game Earn Money
                            </p>
                        </div>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements bg-none ">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">

                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-12 p-4px">
                                <div class="hiddinborder3px rounded p-4px">
                                    <div class="card shadow bg-gradient-x-purple-blue overflow-hidden mb-0">
                                        <a href="All-Results.php" class=" float-right text-right m-4-b">
                                            <button type="button"
                                                class="btn btn-sm bg-warning bg-lighten-3 border-warning text-black btn-max-width no-border-bottom-right-radius no-border-top-right-radius p-8-x game-num-box">01</button><button
                                                type="button"
                                                class="btn btn-sm btn-warning text-black btn-max-width rounded-0 m-0"><i
                                                    class="ft-grid"></i>
                                                All Results</button>
                                        </a>
                                        <div class="card-content">
                                            <div class="card-body my-0 p-0">
                                                <div class="media d-flex mt-0 pt-0 mb-0 pb-0">
                                                    <div
                                                        class="media-body text-white text-left align-self-center pl-1 mb-1">
                                                        <h2 class="font-weight-bold mb-1">
                                                            ***- <b class="text-white"> ** </b> -***
                                                        </h2>
                                                        <h5 class="text-white mb-0 ">
                                                            Time:- <b class="text-dark"> 1.00 AM </b> / <b
                                                                class="text-dark"> 3.00 AM </b>
                                                        </h5>
                                                        <h3
                                                            class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">
                                                            Game Name</h3>
                                                    </div>
                                                    <div class="align-self-center pr-2">
                                                        <i
                                                            class="icon-diamond icon-opacity text-white font-large-3 float-right pr-1"></i>
                                                    </div>
                                                    <div class="rotate-90text-double">
                                                        <h5 class="text-white float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                                                            <b class="text-dark">Mon</b> To <b class="text-dark">Sun</b>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="login.php">
                                            <button type="button"
                                                class="w-100 btn btn-md bg-warning no-border-top-radius text-black"><i
                                                    class="icon-game-controller"></i> Play Game</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-12 p-4px">
                                <div class="blink-hiddinborder3px rounded p-4px">
                                    <div class="card shadow bg-gradient-x-purple-blue overflow-hidden mb-0">
                                        <a href="All-Results.php" class=" float-right text-right m-4-b">
                                            <button type="button"
                                                class="btn btn-sm bg-warning bg-lighten-3 border-warning text-black btn-max-width no-border-bottom-right-radius no-border-top-right-radius p-8-x game-num-box">02</button><button
                                                type="button"
                                                class="btn btn-sm btn-warning text-black btn-max-width rounded-0 m-0"><i
                                                    class="ft-grid"></i>
                                                All Results</button>
                                        </a>
                                        <div class="card-content">
                                            <div class="card-body my-0 p-0">
                                                <div class="media d-flex mt-0 pt-0 mb-0 pb-0">
                                                    <div
                                                        class="media-body text-white text-left align-self-center pl-1 mb-1">
                                                        <h2 class="font-weight-bold mb-1">
                                                            123- <b class="text-white"> 6* </b> -***
                                                        </h2>
                                                        <h5 class="text-white mb-0 ">
                                                            Time:- <b class="text-dark"> 1.00 AM </b> / <b
                                                                class="text-dark"> 3.00 AM </b>
                                                        </h5>
                                                        <h3
                                                            class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">
                                                            Game Name</h3>
                                                    </div>
                                                    <div class="align-self-center pr-2">
                                                        <i
                                                            class="icon-diamond icon-opacity text-white font-large-3 float-right pr-1"></i>
                                                    </div>
                                                    <div class="rotate-90text-double">
                                                        <h5 class="text-white float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                                                            <b class="text-dark">Mon</b> To <b class="text-dark">Sun</b>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="login.php">
                                            <button type="button"
                                                class="w-100 btn btn-md bg-warning no-border-top-radius text-black"><i
                                                    class="icon-game-controller"></i> Play Game</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-12 p-4px">
                                <div class="hiddinborder3px rounded p-4px">
                                    <div class="card shadow bg-gradient-x-purple-blue overflow-hidden mb-0">
                                        <a href="All-Results.php" class=" float-right text-right m-4-b">
                                            <button type="button"
                                                class="btn btn-sm bg-warning bg-lighten-3 border-warning text-black btn-max-width no-border-bottom-right-radius no-border-top-right-radius p-8-x game-num-box">03</button><button
                                                type="button"
                                                class="btn btn-sm btn-warning text-black btn-max-width rounded-0 m-0"><i
                                                    class="ft-grid"></i>
                                                All Results</button>
                                        </a>
                                        <div class="card-content">
                                            <div class="card-body my-0 p-0">
                                                <div class="media d-flex mt-0 pt-0 mb-0 pb-0">
                                                    <div
                                                        class="media-body text-white text-left align-self-center pl-1 mb-1">
                                                        <h2 class="font-weight-bold mb-1">
                                                            123- <b class="text-white"> 6* </b> -***
                                                        </h2>
                                                        <h5 class="text-white mb-0 ">
                                                            Time:- <b class="text-dark"> 1.00 AM </b> / <b
                                                                class="text-dark"> 3.00 AM </b>
                                                        </h5>
                                                        <h3
                                                            class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">
                                                            Game Name</h3>
                                                    </div>
                                                    <div class="align-self-center pr-2">
                                                        <i
                                                            class="icon-diamond icon-opacity text-white font-large-3 float-right pr-1"></i>
                                                    </div>
                                                    <div class="rotate-90text-double">
                                                        <h5 class="text-white float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                                                            <b class="text-dark">Mon</b> To <b class="text-dark">Sun</b>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="login.php">
                                            <button type="button"
                                                class="w-100 btn btn-md bg-warning no-border-top-radius text-black"><i
                                                    class="icon-game-controller"></i> Play Game</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-12 p-4px">
                                <div class="hiddinborder3px rounded p-4px">
                                    <div class="card shadow bg-gradient-x-purple-blue overflow-hidden mb-0">
                                        <a href="All-Results.php" class=" float-right text-right m-4-b">
                                            <button type="button"
                                                class="btn btn-sm bg-warning bg-lighten-3 border-warning text-black btn-max-width no-border-bottom-right-radius no-border-top-right-radius p-8-x game-num-box">04</button><button
                                                type="button"
                                                class="btn btn-sm btn-warning text-black btn-max-width rounded-0 m-0"><i
                                                    class="ft-grid"></i>
                                                All Results</button>
                                        </a>
                                        <div class="card-content">
                                            <div class="card-body my-0 p-0">
                                                <div class="media d-flex mt-0 pt-0 mb-0 pb-0">
                                                    <div
                                                        class="media-body text-white text-left align-self-center pl-1 mb-1">
                                                        <h2 class="font-weight-bold mb-1">
                                                            123- <b class="text-white"> 65 </b> -456
                                                        </h2>
                                                        <h5 class="text-white mb-0 ">
                                                            Time:- <b class="text-dark"> 1.00 AM </b> / <b
                                                                class="text-dark"> 3.00 AM </b>
                                                        </h5>
                                                        <h3
                                                            class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">
                                                            Game Name
                                                        </h3>
                                                    </div>
                                                    <div class="align-self-center pr-2">
                                                        <i
                                                            class="icon-diamond icon-opacity text-white font-large-3 float-right pr-1"></i>
                                                    </div>
                                                    <div class="rotate-90text-double">
                                                        <h5 class="text-white float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                                                            <b class="text-dark">Mon</b> To <b class="text-dark">Sun</b>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button"
                                            class="w-100 btn btn-md btn-dark disabled no-border-top-radius"><i
                                                class="icon-ban"></i>
                                            Game Over</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-12 p-4px">
                                <div class="hiddinborder3px rounded p-4px">
                                    <div class="card shadow bg-gradient-x-orange-yellow overflow-hidden mb-0">

                                        <a href="All-Results.php" class=" float-right text-right m-4-b">
                                            <button type="button"
                                                class="btn btn-sm bg-red bg-lighten-3 border-red text-black btn-max-width no-border-bottom-right-radius no-border-top-right-radius p-8-x game-num-box">05</button><button
                                                type="button"
                                                class="btn btn-sm btn-red text-black btn-max-width rounded-0 m-0"><i
                                                    class="ft-grid"></i>
                                                All Results</button>
                                        </a>
                                        <div class="card-content">
                                            <div class="card-body my-0 p-0">
                                                <div class="media d-flex mt-0 pt-0 mb-0 pb-0">
                                                    <div
                                                        class="media-body text-white text-left align-self-center pl-1 mb-1">
                                                        <h2 class="font-weight-bold mb-1">
                                                            123- <b class="text-red"> 61 </b> -399
                                                        </h2>

                                                        <h5 class="text-white mb-0 ">
                                                            Time:- <b class="text-dark"> 1.00 AM </b> / <b
                                                                class="text-dark"> 3.00 AM </b>
                                                        </h5>
                                                        <h3
                                                            class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">
                                                            Game Name
                                                        </h3>
                                                    </div>
                                                    <div class="align-self-center pr-2">
                                                        <i
                                                            class="icon-diamond icon-opacity text-white font-large-3 float-right pr-1"></i>
                                                    </div>
                                                    <div class="rotate-90text-double">
                                                        <h5 class="text-white float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                                                            <b class="text-dark">Mon</b> To <b class="text-dark">Sun</b>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button"
                                            class="w-100 btn btn-md btn-danger disabled no-border-top-radius"><i
                                                class="icon-ban"></i> Game Over</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- End Double Result Game  -->




            <div class="card shadow  badge-black bg-black-transperent-40">
                <div class="card-header">
                    <div class="card-title">1 Middle</div>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements bg-none ">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    Static message Will Come Here
                </div>
            </div>

            <div class="card shadow  badge-black bg-black-transperent-40">
                <div class="card-header">
                    <div class="card-title">2 Middle</div>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements bg-none ">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    Static message Will Come Here
                </div>
            </div>

            <div class="card shadow  badge-black bg-black-transperent-40">
                <div class="card-header">
                    <div class="card-title">3 Middle</div>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements bg-none ">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    Static message Will Come Here
                </div>
            </div>




            <!-- Start Single Result Game  -->

            <div class="row">
                <div class="col-12 card badge-black">
                    <div class="card-header pl-0">
                        <div class="card-title ">
                            <h4 class="text-uppercase font-weight-bolder line-height-1 text-danger">
                                See One Runs Result
                            </h4>
                            <h5 class="text-uppercase font-weight-bolder line-height-1 text-warning">
                                <?= date("d/m/Y") ?>
                            </h5>
                            <p class="text-uppercase font-weight-bolder line-height-1 text-light">
                                Earn Money In Every Half An Hour
                            </p>
                        </div>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements bg-none ">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                                <div class="hiddinborder3px rounded p-4px  ">
                                    <div class="card bg-gradient-directional-danger mb-0">
                                        <a href="Everydays-Results.php">
                                            <button type="button"
                                                class="col-md-12 col-sm-12 btn btn-sm bg-red bg-lighten-4 no-border-bottom-radius text-dark btn-max-width float-right"><i
                                                    class="icon-calendar"></i> Everyday's Results</button>
                                        </a>
                                        <div class="card-content">
                                            <div class="card-body my-0 p-0 ">
                                                <div class="media d-flex">
                                                    <div class="align-self-center pl-2">
                                                        <i
                                                            class="ft-phone icon-opacity text-white font-large-2 float-left p-4-l"></i>
                                                    </div>
                                                    <div class="rotate-90text-Single">
                                                        <h6 class="text-dark float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                                                            <b class="text-white">Mon</b> To <b
                                                                class="text-white">Sun</b>
                                                        </h6>
                                                    </div>
                                                    <div
                                                        class="media-body text-white text-right align-self-center pr-1">
                                                        <h2 class="text-white font-weight-bolder mt-1 mb-0">*** / *</h2>
                                                        <span class="font-size-medium"> Time :- <b class="text-dark">
                                                                12.00_AM </b></span>
                                                        <h1 class="text-white font-weight-bolder font-size-x-large">One
                                                            Runs 01</h1>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <a href="login.php">
                                            <button type="button"
                                                class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"><i
                                                    class="icon-game-controller"></i> Play Game</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                                <div class="hiddinborder3px rounded p-4px  ">
                                    <div class="card bg-gradient-directional-danger mb-0">
                                        <a href="Everydays-Results.php">
                                            <button type="button"
                                                class="col-md-12 col-sm-12 btn btn-sm bg-red bg-lighten-4 no-border-bottom-radius text-dark btn-max-width float-right"><i
                                                    class="icon-calendar"></i> Everyday's Results</button>
                                        </a>
                                        <div class="card-content">
                                            <div class="card-body my-0 p-0 ">
                                                <div class="media d-flex">
                                                    <div class="align-self-center pl-2">
                                                        <i
                                                            class="ft-phone icon-opacity text-white font-large-2 float-left p-4-l"></i>
                                                    </div>
                                                    <div class="rotate-90text-Single">
                                                        <h6 class="text-dark float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                                                            <b class="text-white">Mon</b> To <b
                                                                class="text-white">Sun</b>
                                                        </h6>
                                                    </div>
                                                    <div
                                                        class="media-body text-white text-right align-self-center pr-1">
                                                        <h2 class="text-white font-weight-bolder mt-1 mb-0">123 / 6</h2>
                                                        <span class="font-size-medium"> Time :- <b class="text-dark">
                                                                12.00_AM </b></span>
                                                        <h1 class="text-white font-weight-bolder font-size-x-large">One
                                                            Runs 02</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button"
                                            class="w-100 btn btn-md bg-dark disabled no-border-top-radius text-light"><i
                                                class="icon-ban"></i> Game Over</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                                <div class="hiddinborder3px rounded p-4px  ">
                                    <div class="card bg-gradient-directional-purple mb-0">
                                        <a href="Everydays-Results.php">
                                            <button type="button"
                                                class="col-md-12 col-sm-12 btn btn-sm bg-purple bg-lighten-4 no-border-bottom-radius text-dark btn-max-width float-right"><i
                                                    class="icon-calendar"></i> Everyday's Results</button>
                                        </a>
                                        <div class="card-content">
                                            <div class="card-body my-0 p-0 ">
                                                <div class="media d-flex">
                                                    <div class="align-self-center pl-2">
                                                        <i
                                                            class="ft-phone icon-opacity text-white font-large-2 float-left p-4-l"></i>
                                                    </div>
                                                    <div class="rotate-90text-Single">
                                                        <h6 class="text-warning float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                                                            <b class="text-white">Mon</b> To <b
                                                                class="text-white">Sun</b>
                                                        </h6>
                                                    </div>
                                                    <div
                                                        class="media-body text-white text-right align-self-center pr-1">
                                                        <h2 class="text-white font-weight-bolder mt-1 mb-0"><b
                                                                class="text-warning">B</b>
                                                            123 / 6
                                                        </h2>
                                                        <span class="font-size-medium"> Time :- <b class="text-dark">
                                                                12.00_AM </b></span>
                                                        <h1 class="text-white font-weight-bolder font-size-x-large">One
                                                            Runs 03</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button"
                                            class="w-100 btn btn-md bg-dark disabled no-border-top-radius text-light"><i
                                                class="icon-ban"></i> Game Over</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                                <div class="hiddinborder3px rounded p-4px  ">
                                    <div class="card bg-gradient-directional-danger mb-0">
                                        <a href="Everydays-Results.php">
                                            <button type="button"
                                                class="col-md-12 col-sm-12 btn btn-sm bg-red bg-lighten-4 no-border-bottom-radius text-dark btn-max-width float-right"><i
                                                    class="icon-calendar"></i> Everyday's Results</button>
                                        </a>
                                        <div class="card-content">
                                            <div class="card-body my-0 p-0 ">
                                                <div class="media d-flex">
                                                    <div class="align-self-center pl-2">
                                                        <i
                                                            class="ft-phone icon-opacity text-white font-large-2 float-left p-4-l"></i>
                                                    </div>
                                                    <div class="rotate-90text-Single">
                                                        <h6 class="text-dark float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                                                            <b class="text-white">Mon</b> To <b
                                                                class="text-white">Sun</b>
                                                        </h6>
                                                    </div>
                                                    <div
                                                        class="media-body text-white text-right align-self-center pr-1">
                                                        <h2 class="text-white font-weight-bolder mt-1 mb-0">*** / *</h2>
                                                        <span class="font-size-medium"> Time :- <b class="text-dark">
                                                                12.00_AM </b></span>
                                                        <h1 class="text-white font-weight-bolder font-size-x-large">One
                                                            Runs 04</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="login.php">
                                            <button type="button"
                                                class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"><i
                                                    class="icon-game-controller"></i> Play Game</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                                <div class="hiddinborder3px rounded p-4px  ">
                                    <div class="card bg-gradient-directional-danger mb-0">
                                        <a href="Everydays-Results.php">
                                            <button type="button"
                                                class="col-md-12 col-sm-12 btn btn-sm bg-red bg-lighten-4 no-border-bottom-radius text-dark btn-max-width float-right"><i
                                                    class="icon-calendar"></i> Everyday's Results</button>
                                        </a>
                                        <div class="card-content">
                                            <div class="card-body my-0 p-0 ">
                                                <div class="media d-flex">
                                                    <div class="align-self-center pl-2">
                                                        <i
                                                            class="ft-phone icon-opacity text-white font-large-2 float-left p-4-l"></i>
                                                    </div>
                                                    <div class="rotate-90text-Single">
                                                        <h6 class="text-dark float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                                                            <b class="text-white">Mon</b> To <b
                                                                class="text-white">Sun</b>
                                                        </h6>
                                                    </div>
                                                    <div
                                                        class="media-body text-white text-right align-self-center pr-1">
                                                        <h2 class="text-white font-weight-bolder mt-1 mb-0">*** / *</h2>
                                                        <span class="font-size-medium"> Time :- <b class="text-dark">
                                                                12.00_AM </b></span>
                                                        <h1 class="text-white font-weight-bolder font-size-x-large">One
                                                            Runs 05</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="login.php">
                                            <button type="button"
                                                class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"><i
                                                    class="icon-game-controller"></i> Play Game</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                                <div class="blink-hiddinborder3px rounded p-4px  ">
                                    <div class="card bg-gradient-directional-danger mb-0">
                                        <a href="Everydays-Results.php">
                                            <button type="button"
                                                class="col-md-12 col-sm-12 btn btn-sm bg-red bg-lighten-4 no-border-bottom-radius text-dark btn-max-width float-right"><i
                                                    class="icon-calendar"></i> Everyday's Results</button>
                                        </a>
                                        <div class="card-content">
                                            <div class="card-body my-0 p-0 ">
                                                <div class="media d-flex">
                                                    <div class="align-self-center pl-2">
                                                        <i
                                                            class="ft-phone icon-opacity text-white font-large-2 float-left p-4-l"></i>
                                                    </div>
                                                    <div class="rotate-90text-Single">
                                                        <h6 class="text-dark float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                                                            <b class="text-white">Mon</b> To <b
                                                                class="text-white">Sun</b>
                                                        </h6>
                                                    </div>
                                                    <div
                                                        class="media-body text-white text-right align-self-center pr-1">
                                                        <h2 class="text-white font-weight-bolder mt-1 mb-0">*** / *</h2>
                                                        <span class="font-size-medium"> Time :- <b class="text-dark">
                                                                12.00_AM </b></span>
                                                        <h1 class="text-white font-weight-bolder font-size-x-large">One
                                                            Runs 06</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="login.php">
                                            <button type="button"
                                                class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"><i
                                                    class="icon-game-controller"></i> Play Game</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                                <div class="hiddinborder3px rounded p-4px  ">
                                    <div class="card bg-gradient-directional-danger mb-0">
                                        <a href="Everydays-Results.php">
                                            <button type="button"
                                                class="col-md-12 col-sm-12 btn btn-sm bg-red bg-lighten-4 no-border-bottom-radius text-dark  btn-max-width float-right"><i
                                                    class="icon-calendar"></i> Everyday's Results</button>
                                        </a>
                                        <div class="card-content">
                                            <div class="card-body my-0 p-0 ">
                                                <div class="media d-flex">
                                                    <div class="align-self-center pl-2">
                                                        <i
                                                            class="ft-phone icon-opacity text-white font-large-2 float-left p-4-l"></i>
                                                    </div>
                                                    <div class="rotate-90text-Single">
                                                        <h6 class="text-dark float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                                                            <b class="text-white">Mon</b> To <b
                                                                class="text-white">Sun</b>
                                                        </h6>
                                                    </div>
                                                    <div
                                                        class="media-body text-white text-right align-self-center pr-1">
                                                        <h2 class="text-white font-weight-bolder mt-1 mb-0">*** / *</h2>
                                                        <span class="font-size-medium"> Time :- <b class="text-dark">
                                                                12.00_AM </b></span>
                                                        <h1 class="text-white font-weight-bolder font-size-x-large">One
                                                            Runs 07</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="login.php">
                                            <button type="button"
                                                class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"><i
                                                    class="icon-game-controller"></i> Play Game</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                                <div class="hiddinborder3px rounded p-4px  ">
                                    <div class="card bg-gradient-directional-danger mb-0">
                                        <a href="Everydays-Results.php">
                                            <button type="button"
                                                class="col-md-12 col-sm-12 btn btn-sm bg-red bg-lighten-4 no-border-bottom-radius text-dark  btn-max-width float-right"><i
                                                    class="icon-calendar"></i> Everyday's Results</button>
                                        </a>
                                        <div class="card-content">
                                            <div class="card-body my-0 p-0 ">
                                                <div class="media d-flex">
                                                    <div class="align-self-center pl-2">
                                                        <i
                                                            class="ft-phone icon-opacity text-white font-large-2 float-left p-4-l"></i>
                                                    </div>
                                                    <div class="rotate-90text-Single">
                                                        <h6 class="text-dark float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                                                            <b class="text-white">Mon</b> To <b
                                                                class="text-white">Sun</b>
                                                        </h6>
                                                    </div>
                                                    <div
                                                        class="media-body text-white text-right align-self-center pr-1">
                                                        <h2 class="text-white font-weight-bolder mt-1 mb-0">*** / *</h2>
                                                        <span class="font-size-medium"> Time :- <b class="text-dark">
                                                                12.00_AM </b></span>
                                                        <h1 class="text-white font-weight-bolder font-size-x-large">One
                                                            Runs 08</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="login.php">
                                            <button type="button"
                                                class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"><i
                                                    class="icon-game-controller"></i> Play Game</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                                <div class="hiddinborder3px rounded p-4px  ">
                                    <div class="card bg-gradient-directional-danger mb-0">
                                        <a href="Everydays-Results.php">
                                            <button type="button"
                                                class="col-md-12 col-sm-12 btn btn-sm bg-red bg-lighten-4 no-border-bottom-radius text-dark  btn-max-width float-right"><i
                                                    class="icon-calendar"></i> Everyday's Results</button>
                                        </a>
                                        <div class="card-content">
                                            <div class="card-body my-0 p-0 ">
                                                <div class="media d-flex">
                                                    <div class="align-self-center pl-2">
                                                        <i
                                                            class="ft-phone icon-opacity text-white font-large-2 float-left p-4-l"></i>
                                                    </div>
                                                    <div class="rotate-90text-Single">
                                                        <h6 class="text-dark float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                                                            <b class="text-white">Mon</b> To <b
                                                                class="text-white">Sun</b>
                                                        </h6>
                                                    </div>
                                                    <div
                                                        class="media-body text-white text-right align-self-center pr-1">
                                                        <h2 class="text-white font-weight-bolder mt-1 mb-0">*** / *</h2>
                                                        <span class="font-size-medium"> Time :- <b class="text-dark">
                                                                12.00_AM </b></span>
                                                        <h1 class="text-white font-weight-bolder font-size-x-large">One
                                                            Runs 09</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="login.php">
                                            <button type="button"
                                                class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"><i
                                                    class="icon-game-controller"></i> Play Game</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                                <div class="hiddinborder3px rounded p-4px  ">
                                    <div class="card bg-gradient-directional-danger mb-0">
                                        <a href="Everydays-Results.php">
                                            <button type="button"
                                                class="col-md-12 col-sm-12 btn btn-sm bg-red bg-lighten-4 no-border-bottom-radius text-dark  btn-max-width float-right"><i
                                                    class="icon-calendar"></i> Everyday's Results</button>
                                        </a>
                                        <div class="card-content">
                                            <div class="card-body my-0 p-0 ">
                                                <div class="media d-flex">
                                                    <div class="align-self-center pl-2">
                                                        <i
                                                            class="ft-phone icon-opacity text-white font-large-2 float-left p-4-l"></i>
                                                    </div>
                                                    <div class="rotate-90text-Single">
                                                        <h6 class="text-dark float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                                                            <b class="text-white">Mon</b> To <b
                                                                class="text-white">Sun</b>
                                                        </h6>
                                                    </div>
                                                    <div
                                                        class="media-body text-white text-right align-self-center pr-1">
                                                        <h2 class="text-white font-weight-bolder mt-1 mb-0">*** / *</h2>
                                                        <span class="font-size-medium"> Time :- <b class="text-dark">
                                                                12.00_AM </b></span>
                                                        <h1 class="text-white font-weight-bolder font-size-x-large">One
                                                            Runs 10</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="login.php">
                                            <button type="button"
                                                class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"><i
                                                    class="icon-game-controller"></i> Play Game</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                                <div class="hiddinborder3px rounded p-4px  ">
                                    <div class="card bg-gradient-directional-danger mb-0">
                                        <a href="Everydays-Results.php">
                                            <button type="button"
                                                class="col-md-12 col-sm-12 btn btn-sm bg-red bg-lighten-4 no-border-bottom-radius text-dark  btn-max-width float-right"><i
                                                    class="icon-calendar"></i> Everyday's Results</button>
                                        </a>
                                        <div class="card-content">
                                            <div class="card-body my-0 p-0 ">
                                                <div class="media d-flex">
                                                    <div class="align-self-center pl-2">
                                                        <i
                                                            class="ft-phone icon-opacity text-white font-large-2 float-left p-4-l"></i>
                                                    </div>
                                                    <div class="rotate-90text-Single">
                                                        <h6 class="text-dark float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                                                            <b class="text-white">Mon</b> To <b
                                                                class="text-white">Sun</b>
                                                        </h6>
                                                    </div>
                                                    <div
                                                        class="media-body text-white text-right align-self-center pr-1">
                                                        <h2 class="text-white font-weight-bolder mt-1 mb-0">*** / *</h2>
                                                        <span class="font-size-medium"> Time :- <b class="text-dark">
                                                                12.00_AM </b></span>
                                                        <h1 class="text-white font-weight-bolder font-size-x-large">One
                                                            Runs 11</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="login.php">
                                            <button type="button"
                                                class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"><i
                                                    class="icon-game-controller"></i> Play Game</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                                <div class="hiddinborder3px rounded p-4px  ">
                                    <div class="card bg-gradient-directional-danger mb-0">
                                        <a href="Everydays-Results.php">
                                            <button type="button"
                                                class="col-md-12 col-sm-12 btn btn-sm bg-red bg-lighten-4 no-border-bottom-radius text-dark  btn-max-width float-right"><i
                                                    class="icon-calendar"></i> Everyday's Results</button>
                                        </a>
                                        <div class="card-content">
                                            <div class="card-body my-0 p-0 ">
                                                <div class="media d-flex">
                                                    <div class="align-self-center pl-2">
                                                        <i
                                                            class="ft-phone icon-opacity text-white font-large-2 float-left p-4-l"></i>
                                                    </div>
                                                    <div class="rotate-90text-Single">
                                                        <h6 class="text-dark float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                                                            <b class="text-white">Mon</b> To <b
                                                                class="text-white">Sun</b>
                                                        </h6>
                                                    </div>
                                                    <div
                                                        class="media-body text-white text-right align-self-center pr-1">
                                                        <h2 class="text-white font-weight-bolder mt-1 mb-0">*** / *</h2>
                                                        <span class="font-size-medium"> Time :- <b class="text-dark">
                                                                12.00_AM </b></span>
                                                        <h1 class="text-white font-weight-bolder font-size-x-large">One
                                                            Runs 12</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="login.php">
                                            <button type="button"
                                                class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"><i
                                                    class="icon-game-controller"></i> Play Game</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Result Game  -->
        </section>

        <div class="card shadow  badge-black bg-black-transperent-40">
            <div class="card-header">
                <div class="card-title">1 Bottom</div>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements bg-none ">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                Static message Will Come Here
            </div>
        </div>

        <div class="card shadow  badge-black bg-black-transperent-40">
            <div class="card-header">
                <div class="card-title">2 Bottom</div>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements bg-none ">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                Static message Will Come Here
            </div>
        </div>

        <div class="card shadow  badge-black bg-black-transperent-40">
            <div class="card-header">
                <div class="card-title">3 Bottom</div>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements bg-none ">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                Static message Will Come Here
            </div>
        </div>

    </div>
</div>


<!-- Start Model Of This Page  -->
<div class="modal hide fade" id="Pop-Up-message" tabindex="-1" role="dialog" aria-labelledby="Pop-Up-messageTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl w-100 justify-content-center w-75 h-75" role="document">
        <div class="col-12 h-100 w-100 modal-content border bg-gradient-directional-primary">
            <div class="modal-header">
                <h5 class="modal-title white font-weight-bolder" id="exampleModalLongTitle">Message By Admin
                </h5>
                <button type="button" class="close black font-weight-bolder" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-8-x px-0 px-md-1 px-lg-2">

                <div class="form-body">



                    <h1 class="black">हमारे द्वारा बहुत प्रयास किया गया है पर आपको छोटे रूप में लाइन दिखा रहे है चलिए
                        आपको दिखाते हैं
                    </h1>





                </div>

            </div>
            <div class="w-100 pb-1">
                <div class=" float-right">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Ends Model Of This Page  -->


    <script type="text/javascript">
    $(window).on('load', function() {
        setTimeout(function() {
            $('#Pop-Up-message').modal('show');
        }, 5000);
    });
    </script>




    <?php
//-------------------------------include File If Needed
$footerHead = 'header/foot-er-head.php';
$requiredFootFile1 = 'required/File/location/1';
$requiredFootFile2 = 'required/File/location/2';
$requiredFootFile3 = 'required/File/location/3';
$footerToe = 'header/foot-er-toe.php';
//-------------------------------Types of include File
if (file_exists($footerHead)) {
    include $footerHead;
}
if (file_exists($requiredFootFile1)) {
    include $requiredFootFile1;
}
if (file_exists($requiredFootFile2)) {
    include $requiredFootFile2;
}
if (file_exists($requiredFootFile3)) {
    include $requiredFootFile3;
}

if (file_exists($footerToe)) {
    include $footerToe;
}
?>