@include('header.nav_bar_head') 
@include('header.nav_bar_toe')
<div class="content-wrapper">
  <div class="content-body m-0 p-0">

    <section>

      <!-- Start Double Result Game  -->

      <div class="row">
        <div class="col-12 card badge-black">
          <div class="card-header pl-0">
            <div class="card-title ">
              <h4 class="text-uppercase font-weight-bolder line-height-1 text-primary">
                Types Of <b class="text-danger"> Game </b>
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
                <div class="card shadow bg-gradient-x-purple-blue">
                  <a href="{{route('Start-Double-Game')}}">
                    <div class="card-content">
                      <div class="card-body">
                        <div class="media d-flex">
                          <div class="media-body text-left align-self-center mb-1">
                            <h2 class="font-weight-bold text-capitalize text-warning">
                              Play
                            </h2>
                            <h2 class="font-weight-bold text-capitalize">
                              Open & Close Game
                            </h2>
                            <h3 class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">Double Result
                              Game</h3>
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
                <div class="card shadow bg-gradient-directional-danger">
                  <a href="{{route('Start-Single-Game')}}">
                    <div class="card-content">
                      <div class="card-body">
                        <div class="media d-flex">
                          <div class="media-body text-left align-self-center mb-1">
                            <h2 class="font-weight-bold text-capitalize text-warning">
                              Play
                            </h2>
                            <h2 class="font-weight-bold text-capitalize">
                              Only Open Game
                            </h2>
                            <h3 class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">Single Result
                              Game</h3>
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

      <!-- End Double Result Game  -->






    </section>


  </div>
</div>
@include('header.footer_head')
@include('header.footer_toe')