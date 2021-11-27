</head>
<!-- END: Head-->

<?php
if ($Nav_bar_inPage == "Show") {
  $display_Nav_bar_inBody = "fixed-navbar";
} elseif ($Nav_bar_inPage !== "Show") {
  $display_Nav_bar_inBody = "";
}

if ($Side_bar_inPage == "Show") {
  $display_Side_bar_inBody = "vertical-menu-modern";
} elseif ($Side_bar_inPage !== "Show") {
  $display_Side_bar_inBody = "";
}
?>


<!-- BEGIN: Body-->

<body style="background-color:#303030;" class="vertical-layout content-left-sidebar email-application 
<?php
echo $display_Side_bar_inBody . " " . $display_Nav_bar_inBody;
?>" data-open="click" data-menu="vertical-menu-modern" data-color="bg-gradient-x-blue-cyan"
 data-col="content-left-sidebar">


 <?php $headBar = 'header/head-bar.php'; if (file_exists($headBar)) { include $headBar; } ?>

 <?php  $sideBar = 'header/side-bar.php'; if (file_exists($sideBar)) { include $sideBar;  } ?>



 <!-- BEGIN: Content-->
 <?php
  if ($Side_bar_inPage == "Show") {
    $display_Side_bar_content = "content";
  } elseif ($Side_bar_inPage == "DontWant") {
    $display_Side_bar_content = "";
  } else {
    $display_Side_bar_content = "";
  }
  ?>




 <div class="app-content <?php echo $display_Side_bar_content; ?>">