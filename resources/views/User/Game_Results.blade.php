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
                SEE RESULT
              </h4>
              <h5 class="text-uppercase font-weight-bolder line-height-1 text-warning">
                <?= date("d/m/Y") ?>
              </h5>
              <p class="text-uppercase font-weight-bolder line-height-1 text-light">
                Play Game Earn Money
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
                  <div class="card shadow bg-gradient-x-purple-blue overflow-hidden mb-0">
                    <a href="{{route('All-Results')}}" class=" float-right text-right m-4-b">
                      <button type="button"
                        class="btn btn-sm bg-warning bg-lighten-3 border-warning text-black btn-max-width no-border-bottom-right-radius no-border-top-right-radius p-8-x game-num-box">01</button><button
                        type="button" class="btn btn-sm btn-warning text-black btn-max-width rounded-0 m-0"><i
                          class="ft-grid"></i>
                        All Results</button>
                    </a>
                    <div class="card-content">
                      <div class="card-body my-0 p-0">
                        <div class="media d-flex mt-0 pt-0 mb-0 pb-0">
                          <div class="media-body text-white text-left align-self-center pl-1 mb-1">
                            <h2 class="font-weight-bold mb-1">
                              ***- <b class="text-white"> ** </b> -***
                            </h2>
                            <h5 class="text-white mb-0 ">
                              Time:- <b class="text-dark"> 1.00 AM </b> / <b class="text-dark"> 3.00 AM </b>
                            </h5>
                            <h3 class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">Game Name</h3>
                          </div>
                          <div class="align-self-center pr-2">
                            <i class="icon-diamond icon-opacity text-white font-large-3 float-right pr-1"></i>
                          </div>
                          <div class="rotate-90text-double">
                            <h5 class="text-white float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                              <b class="text-dark">Mon</b> To <b class="text-dark">Sun</b>
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="{{route('Start-Double-Game')}}">
                      <button type="button" class="w-100 btn btn-md bg-warning no-border-top-radius text-black"><i
                          class="icon-game-controller"></i> Play Game</button>
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 p-4px">
                <div class="blink-hiddinborder3px rounded p-4px">
                  <div class="card shadow bg-gradient-x-purple-blue overflow-hidden mb-0">
                    <a href="{{route('All-Results')}}" class=" float-right text-right m-4-b">
                      <button type="button"
                        class="btn btn-sm bg-warning bg-lighten-3 border-warning text-black btn-max-width no-border-bottom-right-radius no-border-top-right-radius p-8-x game-num-box">02</button><button
                        type="button" class="btn btn-sm btn-warning text-black btn-max-width rounded-0 m-0"><i
                          class="ft-grid"></i>
                        All Results</button>
                    </a>
                    <div class="card-content">
                      <div class="card-body my-0 p-0">
                        <div class="media d-flex mt-0 pt-0 mb-0 pb-0">
                          <div class="media-body text-white text-left align-self-center pl-1 mb-1">
                            <h2 class="font-weight-bold mb-1">
                              123- <b class="text-white"> 6* </b> -***
                            </h2>
                            <h5 class="text-white mb-0 ">
                              Time:- <b class="text-dark"> 1.00 AM </b> / <b class="text-dark"> 3.00 AM </b>
                            </h5>
                            <h3 class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">Game Name</h3>
                          </div>
                          <div class="align-self-center pr-2">
                            <i class="icon-diamond icon-opacity text-white font-large-3 float-right pr-1"></i>
                          </div>
                          <div class="rotate-90text-double">
                            <h5 class="text-white float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                              <b class="text-dark">Mon</b> To <b class="text-dark">Sun</b>
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="{{route('Start-Double-Game')}}">
                      <button type="button" class="w-100 btn btn-md bg-warning no-border-top-radius text-black"><i
                          class="icon-game-controller"></i> Play Game</button>
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 p-4px">
                <div class="hiddinborder3px rounded p-4px">
                  <div class="card shadow bg-gradient-x-purple-blue overflow-hidden mb-0">
                    <a href="{{route('All-Results')}}" class=" float-right text-right m-4-b">
                      <button type="button"
                        class="btn btn-sm bg-warning bg-lighten-3 border-warning text-black btn-max-width no-border-bottom-right-radius no-border-top-right-radius p-8-x game-num-box">03</button><button
                        type="button" class="btn btn-sm btn-warning text-black btn-max-width rounded-0 m-0"><i
                          class="ft-grid"></i>
                        All Results</button>
                    </a>
                    <div class="card-content">
                      <div class="card-body my-0 p-0">
                        <div class="media d-flex mt-0 pt-0 mb-0 pb-0">
                          <div class="media-body text-white text-left align-self-center pl-1 mb-1">
                            <h2 class="font-weight-bold mb-1">
                              123- <b class="text-white"> 6* </b> -***
                            </h2>
                            <h5 class="text-white mb-0 ">
                              Time:- <b class="text-dark"> 1.00 AM </b> / <b class="text-dark"> 3.00 AM </b>
                            </h5>
                            <h3 class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">Game Name</h3>
                          </div>
                          <div class="align-self-center pr-2">
                            <i class="icon-diamond icon-opacity text-white font-large-3 float-right pr-1"></i>
                          </div>
                          <div class="rotate-90text-double">
                            <h5 class="text-white float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                              <b class="text-dark">Mon</b> To <b class="text-dark">Sun</b>
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="{{route('Start-Double-Game')}}">
                      <button type="button" class="w-100 btn btn-md bg-warning no-border-top-radius text-black"><i
                          class="icon-game-controller"></i> Play Game</button>
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 p-4px">
                <div class="hiddinborder3px rounded p-4px">
                  <div class="card shadow bg-gradient-x-purple-blue overflow-hidden mb-0">
                    <a href="{{route('All-Results')}}" class=" float-right text-right m-4-b">
                      <button type="button"
                        class="btn btn-sm bg-warning bg-lighten-3 border-warning text-black btn-max-width no-border-bottom-right-radius no-border-top-right-radius p-8-x game-num-box">04</button><button
                        type="button" class="btn btn-sm btn-warning text-black btn-max-width rounded-0 m-0"><i
                          class="ft-grid"></i>
                        All Results</button>
                    </a>
                    <div class="card-content">
                      <div class="card-body my-0 p-0">
                        <div class="media d-flex mt-0 pt-0 mb-0 pb-0">
                          <div class="media-body text-white text-left align-self-center pl-1 mb-1">
                            <h2 class="font-weight-bold mb-1">
                              123- <b class="text-white"> 65 </b> -456
                            </h2>
                            <h5 class="text-white mb-0 ">
                              Time:- <b class="text-dark"> 1.00 AM </b> / <b class="text-dark"> 3.00 AM </b>
                            </h5>
                            <h3 class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">Game Name
                            </h3>
                          </div>
                          <div class="align-self-center pr-2">
                            <i class="icon-diamond icon-opacity text-white font-large-3 float-right pr-1"></i>
                          </div>
                          <div class="rotate-90text-double">
                            <h5 class="text-white float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                              <b class="text-dark">Mon</b> To <b class="text-dark">Sun</b>
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="button" class="w-100 btn btn-md btn-dark disabled no-border-top-radius"><i
                        class="icon-ban"></i>
                      Game Over</button>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 p-4px">
                <div class="hiddinborder3px rounded p-4px">
                  <div class="card shadow bg-gradient-x-orange-yellow overflow-hidden mb-0">

                    <a href="{{route('All-Results')}}" class=" float-right text-right m-4-b">
                      <button type="button"
                        class="btn btn-sm bg-red bg-lighten-3 border-red text-black btn-max-width no-border-bottom-right-radius no-border-top-right-radius p-8-x game-num-box">05</button><button
                        type="button" class="btn btn-sm btn-red text-black btn-max-width rounded-0 m-0"><i
                          class="ft-grid"></i>
                        All Results</button>
                    </a>
                    <div class="card-content">
                      <div class="card-body my-0 p-0">
                        <div class="media d-flex mt-0 pt-0 mb-0 pb-0">
                          <div class="media-body text-white text-left align-self-center pl-1 mb-1">
                            <h2 class="font-weight-bold mb-1">
                              123- <b class="text-red"> 61 </b> -399
                            </h2>

                            <h5 class="text-white mb-0 ">
                              Time:- <b class="text-dark"> 1.00 AM </b> / <b class="text-dark"> 3.00 AM </b>
                            </h5>
                            <h3 class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">Game Name
                            </h3>
                          </div>
                          <div class="align-self-center pr-2">
                            <i class="icon-diamond icon-opacity text-white font-large-3 float-right pr-1"></i>
                          </div>
                          <div class="rotate-90text-double">
                            <h5 class="text-white float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                              <b class="text-dark">Mon</b> To <b class="text-dark">Sun</b>
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="button" class="w-100 btn btn-md btn-danger disabled no-border-top-radius"><i
                        class="icon-ban"></i> Game Over</button>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>

      <!-- End Double Result Game  -->



      <!-- Start Single Result Game  -->

      <div class="row">
        <div class="col-12 card badge-black">
          <div class="card-header pl-0">
            <div class="card-title ">
              <h4 class="text-uppercase font-weight-bolder line-height-1 text-danger">
                See One Runs Result
              </h4>
              <h5 class="text-uppercase font-weight-bolder line-height-1 text-warning">
                <?= date("d/m/Y") ?>
              </h5>
              <p class="text-uppercase font-weight-bolder line-height-1 text-light">
                Earn Money In Every Half An Hour
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
                  <div class="card bg-gradient-directional-danger mb-0">
                    <a href="{{route('Everydays-Results')}}">
                      <button type="button"
                        class="col-md-12 col-sm-12 btn btn-sm bg-red bg-lighten-4 no-border-bottom-radius text-dark btn-max-width float-right"><i
                          class="icon-calendar"></i> Everyday's Results</button>
                    </a>
                    <div class="card-content">
                      <div class="card-body my-0 p-0 ">
                        <div class="media d-flex">
                          <div class="align-self-center pl-2">
                            <i class="ft-phone icon-opacity text-white font-large-2 float-left p-4-l"></i>
                          </div>
                          <div class="rotate-90text-Single">
                            <h6 class="text-dark float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                          </div>
                          <div class="media-body text-white text-right align-self-center pr-1">
                            <h2 class="text-white font-weight-bolder mt-1 mb-0">*** / *</h2>
                            <span class="font-size-medium"> Time :- <b class="text-dark"> 12.00_AM </b></span>
                            <h1 class="text-white font-weight-bolder font-size-x-large">One Runs 01</h1>
                          </div>

                        </div>
                      </div>
                    </div>
                    <a href="{{route('Start-Single-Game')}}">
                      <button type="button"
                        class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"><i
                          class="icon-game-controller"></i> Play Game</button>
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px  ">
                  <div class="card bg-gradient-directional-danger mb-0">
                    <a href="{{route('Everydays-Results')}}">
                      <button type="button"
                        class="col-md-12 col-sm-12 btn btn-sm bg-red bg-lighten-4 no-border-bottom-radius text-dark btn-max-width float-right"><i
                          class="icon-calendar"></i> Everyday's Results</button>
                    </a>
                    <div class="card-content">
                      <div class="card-body my-0 p-0 ">
                        <div class="media d-flex">
                          <div class="align-self-center pl-2">
                            <i class="ft-phone icon-opacity text-white font-large-2 float-left p-4-l"></i>
                          </div>
                          <div class="rotate-90text-Single">
                            <h6 class="text-dark float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                          </div>
                          <div class="media-body text-white text-right align-self-center pr-1">
                            <h2 class="text-white font-weight-bolder mt-1 mb-0">123 / 6</h2>
                            <span class="font-size-medium"> Time :- <b class="text-dark"> 12.00_AM </b></span>
                            <h1 class="text-white font-weight-bolder font-size-x-large">One Runs 02</h1>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="button" class="w-100 btn btn-md bg-dark disabled no-border-top-radius text-light"><i
                        class="icon-ban"></i> Game Over</button>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px  ">
                  <div class="card bg-gradient-directional-purple mb-0">
                    <a href="{{route('Everydays-Results')}}">
                      <button type="button"
                        class="col-md-12 col-sm-12 btn btn-sm bg-purple bg-lighten-4 no-border-bottom-radius text-dark btn-max-width float-right"><i
                          class="icon-calendar"></i> Everyday's Results</button>
                    </a>
                    <div class="card-content">
                      <div class="card-body my-0 p-0 ">
                        <div class="media d-flex">
                          <div class="align-self-center pl-2">
                            <i class="ft-phone icon-opacity text-white font-large-2 float-left p-4-l"></i>
                          </div>
                          <div class="rotate-90text-Single">
                            <h6 class="text-warning float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                          </div>
                          <div class="media-body text-white text-right align-self-center pr-1">
                            <h2 class="text-white font-weight-bolder mt-1 mb-0"><b class="text-warning">B</b>
                              123 / 6
                            </h2>
                            <span class="font-size-medium"> Time :- <b class="text-dark"> 12.00_AM </b></span>
                            <h1 class="text-white font-weight-bolder font-size-x-large">One Runs 03</h1>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="button" class="w-100 btn btn-md bg-dark disabled no-border-top-radius text-light"><i
                        class="icon-ban"></i> Game Over</button>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px  ">
                  <div class="card bg-gradient-directional-danger mb-0">
                    <a href="{{route('Everydays-Results')}}">
                      <button type="button"
                        class="col-md-12 col-sm-12 btn btn-sm bg-red bg-lighten-4 no-border-bottom-radius text-dark btn-max-width float-right"><i
                          class="icon-calendar"></i> Everyday's Results</button>
                    </a>
                    <div class="card-content">
                      <div class="card-body my-0 p-0 ">
                        <div class="media d-flex">
                          <div class="align-self-center pl-2">
                            <i class="ft-phone icon-opacity text-white font-large-2 float-left p-4-l"></i>
                          </div>
                          <div class="rotate-90text-Single">
                            <h6 class="text-dark float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                          </div>
                          <div class="media-body text-white text-right align-self-center pr-1">
                            <h2 class="text-white font-weight-bolder mt-1 mb-0">*** / *</h2>
                            <span class="font-size-medium"> Time :- <b class="text-dark"> 12.00_AM </b></span>
                            <h1 class="text-white font-weight-bolder font-size-x-large">One Runs 04</h1>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="{{route('Start-Single-Game')}}">
                      <button type="button"
                        class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"><i
                          class="icon-game-controller"></i> Play Game</button>
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px  ">
                  <div class="card bg-gradient-directional-danger mb-0">
                    <a href="{{route('Everydays-Results')}}">
                      <button type="button"
                        class="col-md-12 col-sm-12 btn btn-sm bg-red bg-lighten-4 no-border-bottom-radius text-dark btn-max-width float-right"><i
                          class="icon-calendar"></i> Everyday's Results</button>
                    </a>
                    <div class="card-content">
                      <div class="card-body my-0 p-0 ">
                        <div class="media d-flex">
                          <div class="align-self-center pl-2">
                            <i class="ft-phone icon-opacity text-white font-large-2 float-left p-4-l"></i>
                          </div>
                          <div class="rotate-90text-Single">
                            <h6 class="text-dark float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                          </div>
                          <div class="media-body text-white text-right align-self-center pr-1">
                            <h2 class="text-white font-weight-bolder mt-1 mb-0">*** / *</h2>
                            <span class="font-size-medium"> Time :- <b class="text-dark"> 12.00_AM </b></span>
                            <h1 class="text-white font-weight-bolder font-size-x-large">One Runs 05</h1>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="{{route('Start-Single-Game')}}">
                      <button type="button"
                        class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"><i
                          class="icon-game-controller"></i> Play Game</button>
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="blink-hiddinborder3px rounded p-4px  ">
                  <div class="card bg-gradient-directional-danger mb-0">
                    <a href="{{route('Everydays-Results')}}">
                      <button type="button"
                        class="col-md-12 col-sm-12 btn btn-sm bg-red bg-lighten-4 no-border-bottom-radius text-dark btn-max-width float-right"><i
                          class="icon-calendar"></i> Everyday's Results</button>
                    </a>
                    <div class="card-content">
                      <div class="card-body my-0 p-0 ">
                        <div class="media d-flex">
                          <div class="align-self-center pl-2">
                            <i class="ft-phone icon-opacity text-white font-large-2 float-left p-4-l"></i>
                          </div>
                          <div class="rotate-90text-Single">
                            <h6 class="text-dark float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                          </div>
                          <div class="media-body text-white text-right align-self-center pr-1">
                            <h2 class="text-white font-weight-bolder mt-1 mb-0">*** / *</h2>
                            <span class="font-size-medium"> Time :- <b class="text-dark"> 12.00_AM </b></span>
                            <h1 class="text-white font-weight-bolder font-size-x-large">One Runs 06</h1>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="{{route('Start-Single-Game')}}">
                      <button type="button"
                        class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"><i
                          class="icon-game-controller"></i> Play Game</button>
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px  ">
                  <div class="card bg-gradient-directional-danger mb-0">
                    <a href="{{route('Everydays-Results')}}">
                      <button type="button"
                        class="col-md-12 col-sm-12 btn btn-sm bg-red bg-lighten-4 no-border-bottom-radius text-dark  btn-max-width float-right"><i
                          class="icon-calendar"></i> Everyday's Results</button>
                    </a>
                    <div class="card-content">
                      <div class="card-body my-0 p-0 ">
                        <div class="media d-flex">
                          <div class="align-self-center pl-2">
                            <i class="ft-phone icon-opacity text-white font-large-2 float-left p-4-l"></i>
                          </div>
                          <div class="rotate-90text-Single">
                            <h6 class="text-dark float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                          </div>
                          <div class="media-body text-white text-right align-self-center pr-1">
                            <h2 class="text-white font-weight-bolder mt-1 mb-0">*** / *</h2>
                            <span class="font-size-medium"> Time :- <b class="text-dark"> 12.00_AM </b></span>
                            <h1 class="text-white font-weight-bolder font-size-x-large">One Runs 07</h1>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="{{route('Start-Single-Game')}}">
                      <button type="button"
                        class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"><i
                          class="icon-game-controller"></i> Play Game</button>
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px  ">
                  <div class="card bg-gradient-directional-danger mb-0">
                    <a href="{{route('Everydays-Results')}}">
                      <button type="button"
                        class="col-md-12 col-sm-12 btn btn-sm bg-red bg-lighten-4 no-border-bottom-radius text-dark  btn-max-width float-right"><i
                          class="icon-calendar"></i> Everyday's Results</button>
                    </a>
                    <div class="card-content">
                      <div class="card-body my-0 p-0 ">
                        <div class="media d-flex">
                          <div class="align-self-center pl-2">
                            <i class="ft-phone icon-opacity text-white font-large-2 float-left p-4-l"></i>
                          </div>
                          <div class="rotate-90text-Single">
                            <h6 class="text-dark float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                          </div>
                          <div class="media-body text-white text-right align-self-center pr-1">
                            <h2 class="text-white font-weight-bolder mt-1 mb-0">*** / *</h2>
                            <span class="font-size-medium"> Time :- <b class="text-dark"> 12.00_AM </b></span>
                            <h1 class="text-white font-weight-bolder font-size-x-large">One Runs 08</h1>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="{{route('Start-Single-Game')}}">
                      <button type="button"
                        class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"><i
                          class="icon-game-controller"></i> Play Game</button>
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px  ">
                  <div class="card bg-gradient-directional-danger mb-0">
                    <a href="{{route('Everydays-Results')}}">
                      <button type="button"
                        class="col-md-12 col-sm-12 btn btn-sm bg-red bg-lighten-4 no-border-bottom-radius text-dark  btn-max-width float-right"><i
                          class="icon-calendar"></i> Everyday's Results</button>
                    </a>
                    <div class="card-content">
                      <div class="card-body my-0 p-0 ">
                        <div class="media d-flex">
                          <div class="align-self-center pl-2">
                            <i class="ft-phone icon-opacity text-white font-large-2 float-left p-4-l"></i>
                          </div>
                          <div class="rotate-90text-Single">
                            <h6 class="text-dark float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                          </div>
                          <div class="media-body text-white text-right align-self-center pr-1">
                            <h2 class="text-white font-weight-bolder mt-1 mb-0">*** / *</h2>
                            <span class="font-size-medium"> Time :- <b class="text-dark"> 12.00_AM </b></span>
                            <h1 class="text-white font-weight-bolder font-size-x-large">One Runs 09</h1>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="{{route('Start-Single-Game')}}">
                      <button type="button"
                        class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"><i
                          class="icon-game-controller"></i> Play Game</button>
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px  ">
                  <div class="card bg-gradient-directional-danger mb-0">
                    <a href="{{route('Everydays-Results')}}">
                      <button type="button"
                        class="col-md-12 col-sm-12 btn btn-sm bg-red bg-lighten-4 no-border-bottom-radius text-dark  btn-max-width float-right"><i
                          class="icon-calendar"></i> Everyday's Results</button>
                    </a>
                    <div class="card-content">
                      <div class="card-body my-0 p-0 ">
                        <div class="media d-flex">
                          <div class="align-self-center pl-2">
                            <i class="ft-phone icon-opacity text-white font-large-2 float-left p-4-l"></i>
                          </div>
                          <div class="rotate-90text-Single">
                            <h6 class="text-dark float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                          </div>
                          <div class="media-body text-white text-right align-self-center pr-1">
                            <h2 class="text-white font-weight-bolder mt-1 mb-0">*** / *</h2>
                            <span class="font-size-medium"> Time :- <b class="text-dark"> 12.00_AM </b></span>
                            <h1 class="text-white font-weight-bolder font-size-x-large">One Runs 10</h1>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="{{route('Start-Single-Game')}}">
                      <button type="button"
                        class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"><i
                          class="icon-game-controller"></i> Play Game</button>
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px  ">
                  <div class="card bg-gradient-directional-danger mb-0">
                    <a href="{{route('Everydays-Results')}}">
                      <button type="button"
                        class="col-md-12 col-sm-12 btn btn-sm bg-red bg-lighten-4 no-border-bottom-radius text-dark  btn-max-width float-right"><i
                          class="icon-calendar"></i> Everyday's Results</button>
                    </a>
                    <div class="card-content">
                      <div class="card-body my-0 p-0 ">
                        <div class="media d-flex">
                          <div class="align-self-center pl-2">
                            <i class="ft-phone icon-opacity text-white font-large-2 float-left p-4-l"></i>
                          </div>
                          <div class="rotate-90text-Single">
                            <h6 class="text-dark float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                          </div>
                          <div class="media-body text-white text-right align-self-center pr-1">
                            <h2 class="text-white font-weight-bolder mt-1 mb-0">*** / *</h2>
                            <span class="font-size-medium"> Time :- <b class="text-dark"> 12.00_AM </b></span>
                            <h1 class="text-white font-weight-bolder font-size-x-large">One Runs 11</h1>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="{{route('Start-Single-Game')}}">
                      <button type="button"
                        class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"><i
                          class="icon-game-controller"></i> Play Game</button>
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px  ">
                  <div class="card bg-gradient-directional-danger mb-0">
                    <a href="{{route('Everydays-Results')}}">
                      <button type="button"
                        class="col-md-12 col-sm-12 btn btn-sm bg-red bg-lighten-4 no-border-bottom-radius text-dark  btn-max-width float-right"><i
                          class="icon-calendar"></i> Everyday's Results</button>
                    </a>
                    <div class="card-content">
                      <div class="card-body my-0 p-0 ">
                        <div class="media d-flex">
                          <div class="align-self-center pl-2">
                            <i class="ft-phone icon-opacity text-white font-large-2 float-left p-4-l"></i>
                          </div>
                          <div class="rotate-90text-Single">
                            <h6 class="text-dark float-right m-0 p-4-t pb-0 pl-0 p-4-r">
                              <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                            </h6>
                          </div>
                          <div class="media-body text-white text-right align-self-center pr-1">
                            <h2 class="text-white font-weight-bolder mt-1 mb-0">*** / *</h2>
                            <span class="font-size-medium"> Time :- <b class="text-dark"> 12.00_AM </b></span>
                            <h1 class="text-white font-weight-bolder font-size-x-large">One Runs 12</h1>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="{{route('Start-Single-Game')}}">
                      <button type="button"
                        class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"><i
                          class="icon-game-controller"></i> Play Game</button>
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- End Single Result Game  -->
    </section>
  </div>
</div>
@include('header.footer_head')
@include('header.footer_toe')