@include('header.nav_bar_head') 
@include('header.nav_bar_toe')
<div class="content-wrapper">
  <div class="content-body m-0 p-0">

    <section>

      <!-- Start Double Result Game -->

      <div class="row">
        <div class="col-12 card badge-black">
          <div class="card-header pl-0">
            <div class="card-title ">
              <h4 class="text-uppercase font-weight-bolder line-height-1 text-info">
                Game OF<b class="text-danger"> 12 Open </b>
              </h4>
              <h5 class="text-uppercase font-weight-bolder line-height-1 text-white">
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

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px  ">
                  <div class="card overflow-hidden shadow bg-gradient-directional-red mb-0">
                    <div class="card-content">
                      <div class="card-body p-sm-1 ">
                        <div class="media d-flex ">
                          <div class="media-body text-left align-self-center ">
                            <h4 class="text-white mb-0 font-weight-bolder text-uppercase font-medium-5 ">One Runs 01
                            </h4>
                          </div>
                          <div class="align-self-top">
                            <i class="ft-phone icon-opacity text-white font-large-2 float-right"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-sm-1 bg-gradient-x-red-pink ">
                        <div class="media d-flex justify-content-between align-items-center ">
                          <div class="text-left">
                            <h6 class="text-dark">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                            <h6 class="text-dark">Time:- <b class="text-white">01.00_PM</b></h6>
                          </div>
                          <a href="{{route('Play-Single-Game-Open')}}">
                            <button class="btn btn-md border-white btn-danger bg-red ">
                              PLAY
                            </button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px  ">
                  <div class="card overflow-hidden shadow bg-gradient-x-game-over-dark mb-0">
                    <div class="card-content">
                      <div class="card-body p-sm-1 ">
                        <div class="media d-flex ">
                          <div class="media-body text-left align-self-center ">
                            <h4 class="text-white mb-0 font-weight-bolder text-uppercase font-medium-5 ">One Runs 02
                            </h4>
                          </div>
                          <div class="align-self-top">
                            <i class="ft-phone icon-opacity text-white font-large-2 float-right"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-sm-1 bg-gradient-x-red-pink ">
                        <div class="media d-flex justify-content-between align-items-center ">
                          <div class="text-left">
                            <h6 class="text-dark">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                            <h6 class="text-dark">Time:- <b class="text-white">01.00_PM</b></h6>
                          </div>
                          <a href="{{route('Play-Single-Game-Open')}}">
                            <button class="btn btn-md border-white btn-dark">
                              <b>9</b>-123
                            </button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px  ">
                  <div class="card overflow-hidden shadow bg-gradient-x-game-over-dark mb-0">
                    <div class="card-content">
                      <div class="card-body p-sm-1 ">
                        <div class="media d-flex ">
                          <div class="media-body text-left align-self-center ">
                            <h4 class="text-white mb-0 font-weight-bolder text-uppercase font-medium-5 ">One Runs 03
                            </h4>
                          </div>
                          <div class="align-self-top">
                            <i class="ft-phone icon-opacity text-white font-large-2 float-right"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-sm-1 bg-gradient-x-purple-red ">
                        <div class="media d-flex justify-content-between align-items-center ">
                          <div class="text-left">
                            <h6 class="text-dark">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                            <h6 class="text-dark">Time:- <b class="text-white">01.00_PM</b></h6>
                          </div>
                          <a href="{{route('Play-Single-Game-Open')}}">
                            <button class="btn btn-md border-white btn-purple text-warning">
                              <b>B6</b>-123
                            </button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px  ">
                  <div class="card overflow-hidden shadow bg-gradient-directional-red mb-0">
                    <div class="card-content">
                      <div class="card-body p-sm-1 ">
                        <div class="media d-flex ">
                          <div class="media-body text-left align-self-center ">
                            <h4 class="text-white mb-0 font-weight-bolder text-uppercase font-medium-5 ">One Runs 04
                            </h4>
                          </div>
                          <div class="align-self-top">
                            <i class="ft-phone icon-opacity text-white font-large-2 float-right"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-sm-1 bg-gradient-x-red-pink ">
                        <div class="media d-flex justify-content-between align-items-center ">
                          <div class="text-left">
                            <h6 class="text-dark">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                            <h6 class="text-dark">Time:- <b class="text-white">01.00_PM</b></h6>
                          </div>
                          <a href="{{route('Play-Single-Game-Open')}}">
                            <button class="btn btn-md border-white btn-danger bg-red ">
                              PLAY
                            </button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px  ">
                  <div class="card overflow-hidden shadow bg-gradient-directional-red mb-0">
                    <div class="card-content">
                      <div class="card-body p-sm-1 ">
                        <div class="media d-flex ">
                          <div class="media-body text-left align-self-center ">
                            <h4 class="text-white mb-0 font-weight-bolder text-uppercase font-medium-5 ">One Runs 05
                            </h4>
                          </div>
                          <div class="align-self-top">
                            <i class="ft-phone icon-opacity text-white font-large-2 float-right"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-sm-1 bg-gradient-x-red-pink ">
                        <div class="media d-flex justify-content-between align-items-center ">
                          <div class="text-left">
                            <h6 class="text-dark">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                            <h6 class="text-dark">Time:- <b class="text-white">01.00_PM</b></h6>
                          </div>
                          <a href="{{route('Play-Single-Game-Open')}}">
                            <button class="btn btn-md border-white btn-danger bg-red ">
                              PLAY
                            </button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="blink-hiddinborder3px rounded p-4px ">
                  <div class="card overflow-hidden shadow bg-gradient-directional-red mb-0">
                    <div class="card-content">
                      <div class="card-body p-sm-1 ">
                        <div class="media d-flex ">
                          <div class="media-body text-left align-self-center ">
                            <h4 class="text-white mb-0 font-weight-bolder text-uppercase font-medium-5 ">One Runs 06
                            </h4>
                          </div>
                          <div class="align-self-top">
                            <i class="ft-phone icon-opacity text-white font-large-2 float-right"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-sm-1 bg-gradient-x-red-pink ">
                        <div class="media d-flex justify-content-between align-items-center ">
                          <div class="text-left">
                            <h6 class="text-dark">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                            <h6 class="text-dark">Time:- <b class="text-white">01.00_PM</b></h6>
                          </div>
                          <a href="{{route('Play-Single-Game-Open')}}">
                            <button class="btn btn-md border-white btn-danger bg-red ">
                              PLAY
                            </button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px  ">
                  <div class="card overflow-hidden shadow bg-gradient-directional-red mb-0">
                    <div class="card-content">
                      <div class="card-body p-sm-1 ">
                        <div class="media d-flex ">
                          <div class="media-body text-left align-self-center ">
                            <h4 class="text-white mb-0 font-weight-bolder text-uppercase font-medium-5 ">One Runs 07
                            </h4>
                          </div>
                          <div class="align-self-top">
                            <i class="ft-phone icon-opacity text-white font-large-2 float-right"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-sm-1 bg-gradient-x-red-pink ">
                        <div class="media d-flex justify-content-between align-items-center ">
                          <div class="text-left">
                            <h6 class="text-dark">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                            <h6 class="text-dark">Time:- <b class="text-white">01.00_PM</b></h6>
                          </div>
                          <a href="{{route('Play-Single-Game-Open')}}">
                            <button class="btn btn-md border-white btn-danger bg-red ">
                              PLAY
                            </button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px  ">
                  <div class="card overflow-hidden shadow bg-gradient-directional-red mb-0">
                    <div class="card-content">
                      <div class="card-body p-sm-1 ">
                        <div class="media d-flex ">
                          <div class="media-body text-left align-self-center ">
                            <h4 class="text-white mb-0 font-weight-bolder text-uppercase font-medium-5 ">One Runs 08
                            </h4>
                          </div>
                          <div class="align-self-top">
                            <i class="ft-phone icon-opacity text-white font-large-2 float-right"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-sm-1 bg-gradient-x-red-pink ">
                        <div class="media d-flex justify-content-between align-items-center ">
                          <div class="text-left">
                            <h6 class="text-dark">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                            <h6 class="text-dark">Time:- <b class="text-white">01.00_PM</b></h6>
                          </div>
                          <a href="{{route('Play-Single-Game-Open')}}">
                            <button class="btn btn-md border-white btn-danger bg-red ">
                              PLAY
                            </button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px  ">
                  <div class="card overflow-hidden shadow bg-gradient-directional-red mb-0">
                    <div class="card-content">
                      <div class="card-body p-sm-1 ">
                        <div class="media d-flex ">
                          <div class="media-body text-left align-self-center ">
                            <h4 class="text-white mb-0 font-weight-bolder text-uppercase font-medium-5 ">One Runs 09
                            </h4>
                          </div>
                          <div class="align-self-top">
                            <i class="ft-phone icon-opacity text-white font-large-2 float-right"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-sm-1 bg-gradient-x-red-pink ">
                        <div class="media d-flex justify-content-between align-items-center ">
                          <div class="text-left">
                            <h6 class="text-dark">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                            <h6 class="text-dark">Time:- <b class="text-white">01.00_PM</b></h6>
                          </div>
                          <a href="{{route('Play-Single-Game-Open')}}">
                            <button class="btn btn-md border-white btn-danger bg-red ">
                              PLAY
                            </button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px  ">
                  <div class="card overflow-hidden shadow bg-gradient-directional-red mb-0">
                    <div class="card-content">
                      <div class="card-body p-sm-1 ">
                        <div class="media d-flex ">
                          <div class="media-body text-left align-self-center ">
                            <h4 class="text-white mb-0 font-weight-bolder text-uppercase font-medium-5 ">One Runs 10
                            </h4>
                          </div>
                          <div class="align-self-top">
                            <i class="ft-phone icon-opacity text-white font-large-2 float-right"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-sm-1 bg-gradient-x-red-pink ">
                        <div class="media d-flex justify-content-between align-items-center ">
                          <div class="text-left">
                            <h6 class="text-dark">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                            <h6 class="text-dark">Time:- <b class="text-white">01.00_PM</b></h6>
                          </div>
                          <a href="{{route('Play-Single-Game-Open')}}">
                            <button class="btn btn-md border-white btn-danger bg-red ">
                              PLAY
                            </button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px  ">
                  <div class="card overflow-hidden shadow bg-gradient-directional-red mb-0">
                    <div class="card-content">
                      <div class="card-body p-sm-1 ">
                        <div class="media d-flex ">
                          <div class="media-body text-left align-self-center ">
                            <h4 class="text-white mb-0 font-weight-bolder text-uppercase font-medium-5 ">One Runs 11
                            </h4>
                          </div>
                          <div class="align-self-top">
                            <i class="ft-phone icon-opacity text-white font-large-2 float-right"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-sm-1 bg-gradient-x-red-pink ">
                        <div class="media d-flex justify-content-between align-items-center ">
                          <div class="text-left">
                            <h6 class="text-dark">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                            <h6 class="text-dark">Time:- <b class="text-white">01.00_PM</b></h6>
                          </div>
                          <a href="{{route('Play-Single-Game-Open')}}">
                            <button class="btn btn-md border-white btn-danger bg-red ">
                              PLAY
                            </button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px  ">
                  <div class="card overflow-hidden shadow bg-gradient-directional-red mb-0">
                    <div class="card-content">
                      <div class="card-body p-sm-1 ">
                        <div class="media d-flex ">
                          <div class="media-body text-left align-self-center ">
                            <h4 class="text-white mb-0 font-weight-bolder text-uppercase font-medium-5 ">One Runs 12
                            </h4>
                          </div>
                          <div class="align-self-top">
                            <i class="ft-phone icon-opacity text-white font-large-2 float-right"></i>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-sm-1 bg-gradient-x-red-pink ">
                        <div class="media d-flex justify-content-between align-items-center ">
                          <div class="text-left">
                            <h6 class="text-dark">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                            <h6 class="text-dark">Time:- <b class="text-white">01.00_PM</b></h6>
                          </div>
                          <a href="{{route('Play-Single-Game-Open')}}">
                            <button class="btn btn-md border-white btn-danger bg-red ">
                              PLAY
                            </button>
                          </a>
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

      <!-- End Double Result Game -->

    </section>


  </div>
</div>
@include('header.footer_head')
@include('header.footer_toe')