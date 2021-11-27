@include('header.nav_bar_head') 
@include('header.nav_bar_toe')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="content-wrapper">
  <div class="content-body m-0 p-0">

    <section>
      <!-- Start Double Result Game  -->

      <div class="row">
        <div class="col-12 card badge-black">
          <div class="card-header pl-0">
            <div class="card-title ">
              <h4 class="text-uppercase font-weight-bolder line-height-1 text-danger">
                Message</b>
              </h4>
              <h5 class="text-uppercase font-weight-bolder line-height-1 text-warning">
                <?= date("d/m/Y") ?>
              </h5>
              <p class="text-uppercase font-weight-bolder line-height-1 text-light">
                select game of your choice
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

              <div class="col-xl-6 col-lg-6 col-md-12 ">
                <div class="card shadow Admin-msg-card-style">
                  <a href="{{route('Admin-Message')}}">
                    <div class="card-content">
                      <div class="card-body">
                        <div class="media d-flex">
                          <div class="align-self-center">
                            <i class="icon-envelope icon-opacity text-white font-large-4 float-left"></i>
                          </div>
                          <div class="media-body text-right align-self-center mb-1">
                            <h2 class="font-weight-bold text-capitalize text-dark">
                              See
                            </h2>
                            <h2 class="font-weight-bold text-capitalize text-white">
                              Messages are <b class="primary darken-4 ">just for you</b>
                            </h2>
                            <h3 class="text-white mb-0 font-weight-bolder text-uppercase font-medium-3 ">Imporatnt
                              Information By
                              Admin</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>

              <div class="col-xl-6 col-lg-6 col-md-12 ">
                <div class="card shadow guedding-msg-card-style ">
                  <a href="{{route('Guessing')}}">
                    <div class="card-content">
                      <div class="card-body">
                        <div class="media d-flex">
                          <div class="align-self-center">
                            <i class="icon-trophy icon-opacity text-white font-large-4 float-left"></i>
                          </div>
                          <div class="media-body text-right align-self-center mb-1">
                            <h2 class="font-weight-bold text-capitalize text-dark">
                              Chat
                            </h2>
                            <h2 class="font-weight-bold text-capitalize text-white">
                              Only if You Are <b class="danger darken-4 ">Paid</b>
                            </h2>
                            <h3 class="text-white mb-0 font-weight-bolder text-uppercase font-medium-3 ">Talk to
                              Guessing Experts</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- End Double Result Game  -->






    </section>


  </div>
</div>

@include('header.footer_head')
@include('header.footer_toe')