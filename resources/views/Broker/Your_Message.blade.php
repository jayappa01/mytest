@include('header.nav_bar_head')
@include('header.nav_bar_toe')
<div class="content-wrapper">
  <div class="content-body m-0 p-0">

    <section>
      <!-- Start Double Result Game  -->

      <div class="row">
        <div class="col-12 card badge-theme-black">
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

              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <div class="card shadow bg-black-transperent-50 border-success border-darken-3">
                  <a href="{{route('Messaging-Users')}}">
                    <div class="card-content">
                      <div class="card-body">
                        <div class="media d-flex">
                          <div class="align-self-center">
                            <i class="icon-envelope icon-opacity primary  font-large-4 float-left"></i>
                          </div>
                          <div class="media-body text-right align-self-center mb-1">
                            <h2 class="font-weight-bold text-capitalize success lighten-2">
                              Messages To
                            </h2>
                            <h2 class="font-weight-bold text-capitalize primary  ">Users
                            </h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <div class="card shadow bg-black-transperent-20 border-success border-darken-4">
                  <a href="{{route('Guessing-Manager')}}">
                    <div class="card-content">
                      <div class="card-body">
                        <div class="media d-flex">
                          <div class="align-self-center">
                            <i class="icon-trophy icon-opacity danger darken-3 font-large-4 float-left"></i>
                          </div>
                          <div class="media-body text-right align-self-center mb-1">
                            <h2 class="font-weight-bold text-capitalize success lighten-2">
                              Guessing For
                            </h2>
                            <h2 class="font-weight-bold text-capitalize danger darken-4 ">Users
                            </h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <div class="card shadow bg-black-transperent-50 border-success border-darken-4">
                  <a href="#">
                    <div class="card-content">
                      <div class="card-body">
                        <div class="media d-flex">
                          <div class="align-self-center">
                            <i class="icon-earphones-alt icon-opacity warning darken-3 font-large-4 float-left"></i>
                          </div>
                          <div class="media-body text-right align-self-center mb-1">
                            <h2 class="font-weight-bold text-capitalize success lighten-2">
                              Payment
                            </h2>
                            <h2 class="font-weight-bold text-capitalize warning darken-4 ">Problem
                            </h2>
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

    </section>
  </div>
</div>
@include('header.footer_head')
@include('header.footer_toe');