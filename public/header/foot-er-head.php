  </div>
  <!-- END: Content-->



  <!-- BEGIN: Vendor JS-->
  <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN Vendor JS-->

  <!-- BEGIN: Page Vendor JS-->

  <!-- Ends required File -->
  <?php
  $footerHoverBtn = 'header/foot-er-hoverBtn.php';
  $footerCopyrightbar = 'header/foot-er-copyrightBar.php';


  if (file_exists($footerHoverBtn)) {
    include $footerHoverBtn;
  }

  if (file_exists($footerCopyrightbar)) {
    include $footerCopyrightbar;
  }
  ?>