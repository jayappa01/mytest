<?php
//-----------------------------Theme & Title Of The Page
$meta_color = "#20c997";
$title_name = "";
$play_video_4page = "app-assets/videos/lessons/1.mp4";
//-----------------------------If Needed To "active"
$side_dashboard = "";
$side_seeresut = "active";
$side_playgame = "";
$side_seehisab = "";
$side_seebag = "";
$side_justmessage = "";
$side_adminmessage = "";
$side_guessing = "";
$side_usersetting = "";
//------------------------------If Needed To "Show"
$Side_bar_inPage = "";
$Nav_bar_inPage = "";
$Foot_bar_inPage = "Show";
$Foot_hoverbtn_inPage = "Show";
//-------------------------------include File If Needed
$navbarHead = 'header/nav-bar-head.php';
$ThisPageCss1  = 'app-assets/css/pages/All-Results.css';
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

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class="container overflow-hidden mt-1">

  <div class=" col-12 float-left">
    <div class=" rotate-180 text-white font-20px float-left" onclick="history.back()">➔</div>
  </div>

  <div class="w-100 text-white text-uppercase flex text-center pb-1">
    <div class="game-chart-name font-large-1 font-weight-bolder text-warning text-center p-0 m-0">Game Name</div>
    <div class=" game-chart-time-text text-center p-0 m-0">Time - <b
        class="text-warning game-chart-time font-weight-bolder">03:00 PM</b> /
      <b class="text-warning game-chart-time font-weight-bolder">04:00 PM</b>
    </div>
  </div>

  <div class="row rounded-top bg-black text-white">
    <div class="days-bar-date d-flex justify-content-center align-items-center">
      <div class="">Date</div>
    </div>
    <div class="days-bar-day d-flex justify-content-center align-items-center">
      <div class="">Mon</div>
    </div>
    <div class="days-bar-day d-flex justify-content-center align-items-center">
      <div class="">Tue</div>
    </div>
    <div class="days-bar-day d-flex justify-content-center align-items-center">
      <div class="">Wed</div>
    </div>
    <div class="days-bar-day d-flex justify-content-center align-items-center">
      <div class="">Thu</div>
    </div>
    <div class="days-bar-day d-flex justify-content-center align-items-center">
      <div class="">Fri</div>
    </div>
    <div class="days-bar-day d-flex justify-content-center align-items-center">
      <div class="">Sat</div>
    </div>
    <div class="days-bar-day d-flex justify-content-center align-items-center">
      <div class="">Sun</div>
    </div>
  </div>
  <div id="changepaneljodi">
    <div class="row row-striped text-white">
      <div class="Chart-col-date d-flex justify-content-around align-items-center">
        <div class=" text-center">28/05/2021 <br>To<br> 05/06/2021 </div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana bonus-Open-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="bonus-Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph">D</div>
          </div>
          <div class="bonus-Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph">B</div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana bonus-Close-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex charttodaysdoblebox charttodaysbox justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana"></div>
        <div class=""></div>
        <div class="show-PaNa vertical-pana"></div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana"></div>
        <div class=""></div>
        <div class="show-PaNa vertical-pana"></div>
      </div>
    </div>
    <div class="row row-striped text-white">
      <div class="Chart-col-date d-flex justify-content-around align-items-center">
        <div class=" text-center">28/05/2021 <br>To<br> 05/06/2021 </div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph">B</div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph">D</div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col the-red-result d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana bonus-Open-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="bonus-Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph">B</div>
          </div>
          <div class="bonus-Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph">D</div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana bonus-Close-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
    </div>
    <div class="row row-striped text-white">
      <div class="Chart-col-date d-flex justify-content-around align-items-center">
        <div class=" text-center">28/05/2021 <br>To<br> 05/06/2021 </div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
    </div>
    <div class="row row-striped text-white">
      <div class="Chart-col-date d-flex justify-content-around align-items-center">
        <div class=" text-center">28/05/2021 <br>To<br> 05/06/2021 </div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="bonus-Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph">B</div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana bonus-Close-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
    </div>
    <div class="row row-striped text-white">
      <div class="Chart-col-date d-flex justify-content-around align-items-center">
        <div class=" text-center">28/05/2021 <br>To<br> 05/06/2021 </div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana bonus-Open-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="bonus-Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph">D</div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col the-red-result d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">***</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">*</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">*</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">***</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
    </div>
    <div class="row row-striped text-white">
      <div class="Chart-col-date d-flex justify-content-around align-items-center">
        <div class=" text-center">28/05/2021 <br>To<br> 05/06/2021 </div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
    </div>
    <div class="row row-striped text-white">
      <div class="Chart-col-date d-flex justify-content-around align-items-center">
        <div class=" text-center">28/05/2021 <br>To<br> 05/06/2021 </div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
    </div>
    <div class="row row-striped text-white">
      <div class="Chart-col-date d-flex justify-content-around align-items-center">
        <div class=" text-center">28/05/2021 <br>To<br> 05/06/2021 </div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
    </div>
    <div class="row row-striped text-white">
      <div class="Chart-col-date d-flex justify-content-around align-items-center">
        <div class=" text-center">28/05/2021 <br>To<br> 05/06/2021 </div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
    </div>
    <div class="row row-striped text-white">
      <div class="Chart-col-date d-flex justify-content-around align-items-center">
        <div class=" text-center">28/05/2021 <br>To<br> 05/06/2021 </div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col the-red-result d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col the-red-result d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
    </div>
    <div class="row row-striped text-white">
      <div class="Chart-col-date d-flex justify-content-around align-items-center">
        <div class=" text-center">28/05/2021 <br>To<br> 05/06/2021 </div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
    </div>
    <div class="row row-striped text-white">
      <div class="Chart-col-date d-flex justify-content-around align-items-center">
        <div class=" text-center">28/05/2021 <br>To<br> 05/06/2021 </div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col the-red-result d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
    </div>
    <div class="row row-striped text-white">
      <div class="Chart-col-date d-flex justify-content-around align-items-center">
        <div class=" text-center">28/05/2021 <br>To<br> 05/06/2021 </div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col the-red-result d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
    </div>
    <div class="row row-striped text-white">
      <div class="Chart-col-date d-flex justify-content-around align-items-center">
        <div class=" text-center">28/05/2021 <br>To<br> 05/06/2021 </div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col the-red-result d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
    </div>
    <div class="row row-striped text-white">
      <div class="Chart-col-date d-flex justify-content-around align-items-center">
        <div class=" text-center">28/05/2021 <br>To<br> 05/06/2021 </div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col the-red-result d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col the-red-result d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
    </div>
    <div class="row row-striped text-white">
      <div class="Chart-col-date d-flex justify-content-around align-items-center">
        <div class=" text-center">28/05/2021 <br>To<br> 05/06/2021 </div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col the-red-result d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col the-red-result d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
    </div>
    <div class="row row-striped text-white">
      <div class="Chart-col-date d-flex justify-content-around align-items-center">
        <div class=" text-center">28/05/2021 <br>To<br> 05/06/2021 </div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
      <div class="Chart-col d-flex justify-content-around align-items-center">
        <div class="show-PaNa vertical-pana">123</div>
        <div class="line-height-1 d-flex align-content-between">
          <div class="Open-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
          <div class="Close-figure align-self-center">
            <div class="bonusFnum">6</div>
            <div class="bonusAlph"></div>
          </div>
        </div>
        <div class="show-PaNa vertical-pana">123</div>
      </div>
    </div>

  </div>
  <div class="row rounded-bottom bg-black text-white">
    <div class="days-bar-date d-flex justify-content-center align-items-center">
      <div class="">Date</div>
    </div>
    <div class="days-bar-day d-flex justify-content-center align-items-center">
      <div class="">Mon</div>
    </div>
    <div class="days-bar-day d-flex justify-content-center align-items-center">
      <div class="">Tue</div>
    </div>
    <div class="days-bar-day d-flex justify-content-center align-items-center">
      <div class="">Wed</div>
    </div>
    <div class="days-bar-day d-flex justify-content-center align-items-center">
      <div class="">Thu</div>
    </div>
    <div class="days-bar-day d-flex justify-content-center align-items-center">
      <div class="">Fri</div>
    </div>
    <div class="days-bar-day d-flex justify-content-center align-items-center">
      <div class="">Sat</div>
    </div>
    <div class="days-bar-day d-flex justify-content-center align-items-center">
      <div class="">Sun</div>
    </div>
  </div>

  <div class="p-2  w-100 text-white text-uppercase flex text-center pb-1">
    <div class="game-chart-time-text ">
      <button type="button" class="col-lg-4 btn btn-danger"> View More </button>
    </div>
  </div>

  <div class="w-100 text-white text-uppercase flex text-center pb-5">
    <div class="game-chart-name font-large-1 font-weight-bolder text-warning">Game Name</div>
    <div class=" game-chart-time-text ">Time - <b class="text-warning game-chart-time font-weight-bolder">03:00 PM</b>
      /
      <b class="text-warning game-chart-time font-weight-bolder">04:00 PM</b>
    </div>
    <div class="game-chart-company-name font-small-4 font-weight-bolder text-danger">Company Name</div>
  </div>


  <a onClick="window.location.reload()">
    <div class="floatbtnDark refereshbtncolor bottomLeftFixBtn" id="RefreshbtnColorMode"><i
        class="fa-spin fa fa-refresh "></i></div>
  </a>

  <a href="#lastbottom" id="myBtngodown" style="background:rgba(255,255,255,0.5);">
    <div class="floatbtnDark goDownbtncolor topLeftFixBtn" id="DownbtnColorMode"><i class="fa fa-arrow-down "></i>
    </div>
  </a>
  <a href="#header" style="display: none;" id="myBtngoup">
    <div class="floatbtnDark goUpbtncolor topLeftFixBtn" id="UpbtnColorMode"><i class="fa fa-arrow-up "></i>
    </div>
  </a>

  <a onclick="togglepaneljodimode()" id="PanelMode" class="PanelMode">
    <div class="floatbtnDark Jodicolorbtn bottomRightFixBtn" id="btnColorMode">Jodi</div>
  </a>
  <a onclick="togglepaneljodimode()" id="JodiMode" class="JodiMode">
    <div class="floatbtnLight Panelcolorbtn bottomRightFixBtn" id="btnColorMode">Panel</div>
  </a>

</div>



<?php
//-------------------------------include File If Needed
$footerHead = 'header/foot-er-head.php';
$requiredFootFile1 = 'app-assets/js/scripts/pages/All-Results.js';
$requiredFootFile2 = 'required/File/location/2';
$requiredFootFile3 = 'required/File/location/3';
$footerToe = 'header/foot-er-toe.php';
//-------------------------------Types of include File
if (file_exists($footerHead)) {
  include $footerHead;
}
?>

<script src="<?php if (file_exists($requiredFootFile1)) {
    echo $requiredFootFile1;
} ?>" type="text/javascript"></script>

<?php
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