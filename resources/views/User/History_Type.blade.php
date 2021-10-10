@include('header.nav_bar_head')
@include('header.nav_bar_toe')
<div class="content-wrapper">
  <div class="content-body m-0 p-0">

    <section>

      <!-- Start History Type Game  -->

      <div class="row">
        <div class="col-12 card badge-black">
          <div class="card-header pl-0">
            <div class="card-title ">
              <h4 class="text-uppercase font-weight-bolder line-height-1 text-danger">
                Select History Type</b>
              </h4>
              <p class="text-uppercase font-weight-bolder line-height-1 text-light">
                select game of which you wanna see history of
              </p>
            </div>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements bg-none ">
              <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content collapse show">


            <div class="row">

              <div class="col-xl-6 col-lg-6 col-md-12 ">
                <div class="row p-0 m-0">
                  <h3
                    class="rounded-top bg-purple bg-darken-3 text-white font-weight-bold text-capitalcase p-4-y px-1 pt-1 m-0">
                    profit 250</h3>
                </div>
                <div class="card shadow bg-gradient-directional-purple no-border-top-left-radius ">
                  <a href="{{route('History-Double-Game')}}">
                    <div class="card-content">
                      <div class="card-body">
                        <div class="media d-flex">
                          <div class="media-body text-left align-self-center">
                            <h2 class="font-weight-bold text-capitalize text-white">
                              History
                            </h2>
                            <h2 class="font-weight-bold text-capitalize text-light">
                              Open & Close Game
                            </h2>
                            <h3 class="text-white mb-0 font-weight-bolder text-uppercase line-height-1 font-large-1 ">
                              Double Result
                              Game</h3>
                            <h3 class="text-uppercase font-weight-bolder line-height-1 pt-1 text-warning">
                              <?= date("d/m/Y") ?>
                            </h3>
                          </div>
                          <div class="align-self-center">
                            <i class="icon-diamond icon-opacity text-white font-large-3 float-right"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>

              <div class="col-xl-6 col-lg-6 col-md-12 ">
                <div class="row p-0 m-0 w-100">
                  <h3
                    class="rounded-top bg-pink bg-darken-3 text-white font-weight-bold text-capitalcase p-4-y px-1 pt-1 m-0">
                    profit 250</h3>
                </div>
                <div class="card shadow bg-gradient-directional-pink no-border-top-left-radius ">
                  <a href="{{route('History-Single-Game')}}">
                    <div class="card-content">
                      <div class="card-body">
                        <div class="media d-flex">
                          <div class="media-body text-left align-self-center">
                            <h2 class="font-weight-bold text-capitalize text-white">
                              History
                            </h2>
                            <h2 class="font-weight-bold text-capitalize text-light">
                              Only Open Game
                            </h2>
                            <h3 class="text-white mb-0 font-weight-bolder text-uppercase line-height-1 font-large-1 ">
                              Single Result
                              Game</h3>
                            <h3 class="text-uppercase font-weight-bolder line-height-1 pt-1 text-warning">
                              <?= date("d/m/Y") ?>
                            </h3>
                          </div>
                          <div class="align-self-center">
                            <i class="ft-phone icon-opacity text-white font-large-3 float-right"></i>
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

      <!-- End History Type Game  -->
    </section>
  </div>
</div>
@include('header.footer_head')
@include('header.footer_toe')