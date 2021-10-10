@include('header.nav_bar_head'); 

<section id="basic-examples">
  <div class="card">
    <div class="card-content">
      <div class="card-body">
        <h4 class="card-title">Basic Examples</h4>
        <p>SweetAlert automatically centers itself on the page and looks great no matter if you're using a desktop
          computer,
          mobile or tablet. It's even highly customizable, as you can see below!</p>
        <div class="row mt-1">
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-warning mb-2" id="basic-alert">Basic message</button>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-warning mb-2" id="with-title">Title with text</button>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-warning mb-2" id="with-title-footer">With
              footer</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- // Basic example section end -->

<!-- Advancedc example section start -->
<section id="advanced-examples">
  <div class="card">
    <div class="card-content">
      <div class="card-body">
        <h4 class="card-title">Advanced Examples</h4>
        <p>SweetAlert automatically centers itself on the page and looks great no matter if you're using a desktop
          computer,
          mobile or tablet. It's even highly customizable, as you can see below!</p>
        <div class="row mt-1">
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-primary mb-2" id="long-content">Long content</button>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-primary mb-2" id="custom-html">Custom HTML </button>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-primary mb-2" id="custom-position">Custom
              positioned</button>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-warning mb-2" id="confirm-dialog">Confirm
              dialog</button>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-warning mb-2" id="rtl-support">Right-to-left
              support</button>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-warning mb-2" id="ajax-request">Ajax request</button>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-primary mb-2" id="chaining-modal">Chaining
              modals</button>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-primary mb-2" id="dynamic-queue">Dynamic
              queue</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- // advanced example section end -->

<!-- Types section start -->
<section id="types">
  <div class="card">
    <div class="card-content">
      <div class="card-body">
        <h4 class="card-title">Modal Types</h4>
        <p>The type of the modal. SweetAlert comes with 4 built-in types which will show a corresponding icon animation:
          "warning", "error", "success" and "info". You can also set it as "input" to get a prompt modal. It can either
          be put in the object under the key "icon" or passed as the third parameter of the function.</p>
        <div class="row mt-1">
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-success mb-2" id="type-success">Success</button>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-info mb-2" id="type-info">Info</button>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-warning mb-2" id="type-warning">Warning</button>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-danger mb-2" id="type-error">Error</button>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-primary mb-2" id="type-question">Question</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- // Types section end -->

<!-- Input Types section start -->
<section id="input">
  <div class="card">
    <div class="card-content">
      <div class="card-body">
        <h4 class="card-title">Input Types</h4>
        <div class="row mt-1">
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-primary mb-2" id="input-text">Text</button>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-primary mb-2" id="input-email">Email</button>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-primary mb-2" id="input-url">Url</button>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-warning mb-2" id="input-password">Password</button>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-warning mb-2" id="input-textarea">Textarea</button>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-warning mb-2" id="input-select">Select</button>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-primary mb-2" id="input-radio">Radio</button>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-primary mb-2" id="input-checkbox">Checkbox</button>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-primary mb-2" id="input-file">File</button>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-12">
            <button type="button" class="btn btn-lg btn-block btn-warning mb-2" id="input-range">Range</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="{{ asset('app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN Vendor JS-->

<script src="{{ asset('app-assets/vendors/js/extensions/sweetalert2.all.js')}}" type="text/javascript"></script>

<script src="{{ asset('app-assets/js/scripts/extensions/sweet-alerts.js')}}" type="text/javascript"></script>
<!-- END: Page JS-->
@include('header.footer_toe');