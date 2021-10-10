<?php
//-----------------------------Theme & Title Of The Page
$meta_color = "#20c997";
$title_name = "";
$play_video_4page = "app-assets/videos/lessons/1.mp4";
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
$Side_bar_inPage = "Show";
$Nav_bar_inPage = "Show";
$Foot_bar_inPage = "Show";
$Foot_hoverbtn_inPage = "Show";
//-------------------------------include File If Needed
$navbarHead = 'header/nav-bar-head.php';
$ThisPageCss1  = 'app-assets/css/pages/NameOfCssFile.css';
$ThisPageCss2  = 'app-assets/css/pages/NameOfCssFile.css';
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