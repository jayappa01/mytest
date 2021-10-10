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
              <h4 class="text-uppercase font-weight-bolder line-height-1 text-info">
                Open<b class="text-danger"> OR </b><b class="text-primary"> Close </b>
              </h4>
              <h5 class="text-uppercase font-weight-bolder line-height-1 text-warning">
                <?= date("d/m/Y") ?>
              </h5>
              <p class="text-uppercase font-weight-bolder line-height-1 text-light">
                Go Full Crazy
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
                  <div class="card shadow bg-gradient-x-orange-yellow overflow-hidden mb-0">
                    <div class="card-content">
                      <div class="pb-1">
                        <button
                          class="width-25px float-right bg-white rounded-circle text-black text-center border-0 font-small-3 p-0">
                          01</button>
                      </div>
                      <div class="card-body px-sm-1 p-4-t p-4-b">
                        <div class="media d-flex ">
                          <div class="media-body text-left align-self-center ">
                            <h3 class="text-white mb-0 font-weight-bolder text-uppercase cardGameName">Game Name</h3>
                            <h6 class="text-dark float-left p-4-l pr-0 p-4-t pb-0">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                          </div>
                          <div class="align-self-top">
                            <i class="icon-diamond icon-opacity text-white float-right cardIcon"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-sm-1  bg-gradient-directional-info">
                        <div class="media d-flex justify-content-between ">
                          <div class="text-center">
                            <h6 class="font-weight-bold text-white">Time:- 01.00_PM</h6>
                            <a href="{{route('Play-Double-Game-Open')}}">
                              <button class="hiddinborder3px btn btn-md  btn-warning float-left ">
                                PLAY OPEN
                              </button>
                            </a>
                          </div>
                          <div class="text-center">
                            <h6 class="font-weight-bold text-white">Time:- 02.00_PM</h6>
                            <a href="{{route('Play-Double-Game-Close')}}">
                              <button class="hiddinborder3px btn btn-md  btn-info float-right ">
                                PLAY CLOSE
                              </button>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 p-4px">
                <div class="blink-hiddinborder3px rounded p-4px">
                  <div class="card shadow bg-gradient-x-purple-blue overflow-hidden mb-0">
                    <div class="card-content">
                      <div class="pb-1">
                        <button
                          class="width-25px float-right bg-white rounded-circle text-black text-center border-0 font-small-3 p-0">
                          02</button>
                      </div>
                      <div class="card-body px-sm-1 p-4-t p-4-b">
                        <div class="media d-flex ">
                          <div class="media-body text-left align-self-center ">
                            <h3 class="text-white mb-0 font-weight-bolder text-uppercase cardGameName">Game Name</h3>
                            <h6 class="text-dark float-left p-4-l pr-0 p-4-t pb-0">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                          </div>
                          <div class="align-self-top">
                            <i class="icon-diamond icon-opacity text-white float-right cardIcon"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-sm-1  bg-gradient-directional-warning">
                        <div class="media d-flex justify-content-between ">
                          <div class="text-center">
                            <h6 class="font-weight-bold text-white">Time:- 01.00_PM</h6>
                            <a href="{{route('Play-Double-Game-Open')}}">
                              <button class="blink-hiddinborder3px btn btn-md  btn-primary float-left ">
                                PLAY OPEN
                              </button>
                            </a>
                          </div>
                          <div class="text-center">
                            <h6 class="font-weight-bold text-white">Time:- 02.00_PM</h6>
                            <a href="{{route('Play-Double-Game-Close')}}">
                              <button
                                class="hiddinborder3px btn btn-md  btn-warning bg-warning bg-darken-3 float-right ">
                                PLAY CLOSE
                              </button>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 p-4px">
                <div class="hiddinborder3px rounded p-4px">
                  <div class="card shadow bg-gradient-x-purple-blue overflow-hidden mb-0">
                    <div class="card-content">
                      <div class="pb-1">
                        <button
                          class="width-25px float-right bg-white rounded-circle text-black text-center border-0 font-small-3 p-0">
                          03</button>
                      </div>
                      <div class="card-body px-sm-1 p-4-t p-4-b">
                        <div class="media d-flex ">
                          <div class="media-body text-left align-self-center ">
                            <h3 class="text-white mb-0 font-weight-bolder text-uppercase cardGameName">Game Name</h3>
                            <h6 class="text-dark float-left p-4-l pr-0 p-4-t pb-0">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                          </div>
                          <div class="align-self-top">
                            <i class="icon-diamond icon-opacity text-white float-right cardIcon"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-sm-1  bg-gradient-directional-warning">
                        <div class="media d-flex justify-content-between ">
                          <div class="text-center">
                            <h6 class="font-weight-bold">Time:- 01.00 PM</h6>
                            <a href="{{route('Play-Double-Game-Open')}}">
                              <button class="hiddinborder3px btn btn-md  btn-info float-left ">
                                PLAY OPEN
                              </button>
                            </a>
                          </div>
                          <div class="text-center">
                            <h6 class="font-weight-bold">Time:- 02.00 PM</h6>
                            <a href="{{route('Play-Double-Game-Close')}}">
                              <button
                                class="hiddinborder3px btn btn-md  btn-warning bg-warning bg-darken-3 float-right ">
                                PLAY CLOSE
                              </button>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 p-4px">
                <div class="hiddinborder3px rounded p-4px">
                  <div class="card shadow bg-gradient-x-purple-red overflow-hidden mb-0">
                    <div class="card-content">
                      <div class="pb-1">
                        <button
                          class="width-25px float-right bg-white rounded-circle text-black text-center border-0 font-small-3 p-0">
                          04</button>
                      </div>
                      <div class="card-body px-sm-1 p-4-t p-4-b">
                        <div class="media d-flex ">
                          <div class="media-body text-left align-self-center ">
                            <h3 class="text-white mb-0 font-weight-bolder text-uppercase cardGameName">Game Name</h3>
                            <h6 class="text-dark float-left p-4-l pr-0 p-4-t pb-0">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                          </div>
                          <div class="align-self-top">
                            <i class="icon-diamond icon-opacity text-white float-right cardIcon"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-sm-1  bg-gradient-directional-purple">
                        <div class="media d-flex justify-content-between ">
                          <div class="text-center">
                            <h6 class="font-weight-bold text-light">Time:- 01.00 PM</h6>
                            <button class="hiddinborder3px btn btn-md  btn-dark float-left disabled">
                              123 - 6
                            </button>
                          </div>
                          <div class="text-center">
                            <h6 class="font-weight-bold text-white">Time:- 02.00 PM</h6>
                            <a href="{{route('Play-Double-Game-Close')}}">
                              <button class="hiddinborder3px btn btn-md  btn-danger float-right ">
                                PLAY CLOSE
                              </button>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 p-4px">
                <div class="hiddinborder3px rounded p-4px">
                  <div class="card shadow bg-gradient-x-game-over-dark overflow-hidden mb-0">
                    <div class="card-content">
                      <div class="pb-1">
                        <button
                          class="width-25px float-right bg-white rounded-circle text-black text-center border-0 font-small-3 p-0">
                          05</button>
                      </div>
                      <div class="card-body px-sm-1 p-4-t p-4-b">
                        <div class="media d-flex ">
                          <div class="media-body text-left align-self-center ">
                            <h3 class="text-white mb-0 font-weight-bolder text-uppercase cardGameName">Game Name</h3>
                            <h6 class="text-dark float-left p-4-l pr-0 p-4-t pb-0">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                          </div>
                          <div class="align-self-top">
                            <i class="icon-diamond icon-opacity text-white float-right cardIcon"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-sm-1  bg-gradient-x-game-over">
                        <div class="media d-flex justify-content-between ">
                          <div class="text-center">
                            <h6 class="font-weight-bold text-light">Time:- 01.00 PM</h6>
                            <button class="btn btn-md  btn-light float-left disabled">
                              123 - 6
                            </button>
                          </div>
                          <div class="text-center">
                            <h6 class="font-weight-bold text-dark">Time:- 02.00 PM</h6>
                            <button class="btn btn-md  btn-dark float-right disabled">
                              456 - 5
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
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