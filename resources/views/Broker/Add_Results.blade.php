@include('header.nav_bar_head') 
@include('header.nav_bar_toe')
<link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/pages/All-Results.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/pages/Everydays-Results.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/pages/Add-Results.css') }}">

<div class="content-wrapper">
  <div class="content-body m-0 p-0">
    <section>
      <!-- Start Double Result Game  -->
      <div class="row">
        <div class="col-12 card badge-theme-black">
          <div class="card-header pl-0">
            <div class="card-title ">
              <h4 class="text-uppercase font-weight-bolder line-height-1 text-info">
                ADD RESULT
              </h4>
              <h5 class="text-uppercase font-weight-bolder line-height-1 text-warning">
                <?= date("d/m/Y") ?>
              </h5>
              <p class="text-uppercase font-weight-bolder line-height-1 text-light">
                Add Result Open To Close
              </p>
            </div>
            <div class="heading-elements">
              <a href="{{route('Advance-Double-Result-Date')}}" class="btn btn-sm btn-outline-warning active">Advance</a>
              <a data-action="reload" class="btn btn-sm btn-outline-info info"><i class="ft-rotate-cw"></i></a>
            </div>
          </div>
          <div class="card-content collapse show">

            <div class="row">
              @foreach($arrGameDetails as $arrGameDetail)
              <div class="col-xl-4 col-lg-6 col-md-12 p-4px">
                <div class="hiddinborder3px rounded p-4px">
                  <div class="card shadow bg-gradient-x-purple-blue overflow-hidden mb-0">
                    <a href="{{route('All-Results')}}" class=" float-right text-right m-4-b">
                      <button type="button"
                        class="btn btn-sm bg-warning bg-lighten-3 border-warning text-black btn-max-width no-border-bottom-right-radius no-border-top-right-radius p-8-x game-num-box">{{$arrGameDetail->serial_number}}</button><button
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
                              Time:- <b class="text-dark">

                                {{date('h:i A',strtotime($arrGameDetail->open_time))}}
                              </b> / <b class="text-dark"> {{date('h:i A',strtotime($arrGameDetail->close_time))}}</b>
                            </h5>
                            <h3 class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">{{$arrGameDetail->game_name}}</h3>
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
                    <div class="d-flex">
                      <button type="button"
                        class="w-100 btn btn-md bg-warning no-border-top-radius no-border-bottom-right-radius  border-right-info text-black"
                        data-toggle="modal" data-target="#AddDoubleResultModel">+ Open Result</button>
                      <button type="button"
                        class="w-100 btn btn-md bg-warning no-border-top-radius no-border-bottom-left-radius  border-left-info text-black"
                        data-toggle="modal" data-target="#AddDoubleResultModel">+ Close Result</button>
                    </div>
                  </div>
                </div>
              </div>

@endforeach

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
                    <div class="d-flex">
                      <button type="button"
                        class="w-100 btn btn-md bg-primary no-border-top-radius no-border-bottom-right-radius  border-right-info text-light"
                        data-toggle="modal" data-target="#AddDoubleResultModel">+ Open Result</button>

                      <button type="button"
                        class="w-100 btn btn-md bg-warning no-border-top-radius no-border-bottom-left-radius  border-left-info text-black"
                        data-toggle="modal" data-target="#AddDoubleResultModel">+ Close Result</button>
                    </div>
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
                    <div class="d-flex">
                      <button type="button"
                        class="w-100 btn btn-md bg-primary no-border-top-radius no-border-bottom-right-radius  border-right-info text-light"
                        data-toggle="modal" data-target="#AddDoubleResultModel">+ Open Result</button>

                      <button type="button"
                        class="w-100 btn btn-md bg-warning no-border-top-radius no-border-bottom-left-radius  border-left-info text-black"
                        data-toggle="modal" data-target="#AddDoubleResultModel">+ Close Result</button>
                    </div>
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
                    <div class="d-flex">
                      <button type="button"
                        class="w-100 btn btn-md bg-primary no-border-top-radius no-border-bottom-right-radius  border-right-info text-light"
                        data-toggle="modal" data-target="#AddDoubleResultModel">+ Open Result</button>

                      <button type="button"
                        class="w-100 btn btn-md bg-primary no-border-top-radius no-border-bottom-left-radius  border-left-info text-light"
                        data-toggle="modal" data-target="#AddDoubleResultModel">+ Close Result</button>
                    </div>
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
                    <div class="d-flex">
                      <button type="button"
                        class="w-100 btn btn-md bg-danger bg-lighten-1 no-border-top-radius no-border-bottom-right-radius  border-right-warning text-white"
                        data-toggle="modal" data-target="#AddDoubleResultModel">+ Open Result</button>

                      <button type="button"
                        class="w-100 btn btn-md bg-danger bg-lighten-1 no-border-top-radius no-border-bottom-left-radius  border-left-warning text-white"
                        data-toggle="modal" data-target="#AddDoubleResultModel">+ Close Result</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- End Double Result Game  -->
      <!-- Start Double Model Of This Page  -->
      <div class="modal fade" id="AddDoubleResultModel" tabindex="-1" role="dialog"
        aria-labelledby="AddDoubleResultModelTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl w-100 justify-content-center" role="document">
          <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 p-0 modal-content badge-theme-black border ">
            <div class="modal-header">
              <h5 class="modal-title text-white" id="exampleModalLongTitle">Declare Open Result</h5>
              <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body px-0 px-md-1 px-lg-2">

              <div class=" pb-1">
                <div class="w-100 text-white text-uppercase flex text-center pb-1">
                  <div class="game-chart-name font-large-1 font-weight-bolder dobleresulttexttheme">Game Name</div>
                  <div class=" game-chart-time-text ">Time - <b
                      class="dobleresulttexttheme game-chart-time font-weight-bolder">03:00
                      PM</b> /
                    <b class="dobleresulttexttheme game-chart-time font-weight-bolder">04:00 PM</b>
                  </div>
                </div>

                <div class=" border border-black rounded overflow-hidden">
                  <div class="d-flex bg-black text-white">
                    <div class="days-bar-date d-flex justify-content-center align-items-center">
                      <div class="">Date</div>
                    </div>
                    <div class="days-bar-day d-flex justify-content-center align-items-center">
                      <div class="">Mon</div>
                    </div>
                    <div class="days-bar-day d-flex justify-content-center align-items-center">
                      <div class="">Tue</div>
                    </div>
                    <div class="days-bar-day d-flex justify-content-center align-items-center">
                      <div class="">Wed</div>
                    </div>
                    <div class="days-bar-day d-flex justify-content-center align-items-center">
                      <div class="">Thu</div>
                    </div>
                    <div class="days-bar-day d-flex justify-content-center align-items-center">
                      <div class="">Fri</div>
                    </div>
                    <div class="days-bar-day d-flex justify-content-center align-items-center">
                      <div class="">Sat</div>
                    </div>
                    <div class="days-bar-day d-flex justify-content-center align-items-center">
                      <div class="">Sun</div>
                    </div>
                  </div>
                  <div class="d-flex row-striped text-white">
                    <div class="Chart-col-date d-flex justify-content-around align-items-center">
                      <div class="text-center ">28/05/2021 <br>To<br> 05/06/2021 </div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                  </div>
                  <div class="d-flex row-striped text-white">
                    <div class="Chart-col-date d-flex justify-content-around align-items-center">
                      <div class=" text-center ">28/05/2021 <br>To<br> 05/06/2021 </div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col the-red-result d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                  </div>
                  <div class="d-flex row-striped text-white">
                    <div class="Chart-col-date d-flex justify-content-around align-items-center">
                      <div class=" text-center ">28/05/2021 <br>To<br> 05/06/2021 </div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                  </div>
                  <div class="d-flex row-striped text-white">
                    <div class="Chart-col-date d-flex justify-content-around align-items-center">
                      <div class=" text-center ">28/05/2021 <br>To<br> 05/06/2021 </div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col the-red-result d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                  </div>
                  <div class="d-flex row-striped text-white">
                    <div class="Chart-col-date d-flex justify-content-around align-items-center">
                      <div class=" text-center ">28/05/2021 <br>To<br> 05/06/2021 </div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                  </div>
                  <div class="d-flex row-striped text-white">
                    <div class="Chart-col-date d-flex justify-content-around align-items-center">
                      <div class=" text-center ">28/05/2021 <br>To<br> 05/06/2021 </div>
                    </div>
                    <div class="Chart-col the-red-result d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class="vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                  </div>
                  <div class="d-flex row-striped text-white">
                    <div class="Chart-col-date d-flex justify-content-around align-items-center">
                      <div class=" text-center ">28/05/2021 <br>To<br> 05/06/2021 </div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class="vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana">123</div>
                      <div class="">66</div>
                      <div class=" vertical-pana">123</div>
                    </div>
                    <div class="Chart-col charttodaysdoblebox d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana"></div>
                      <div class=""></div>
                      <div class=" vertical-pana"></div>
                    </div>
                    <div class="Chart-col d-flex justify-content-around align-items-center">
                      <div class=" vertical-pana"></div>
                      <div class=""></div>
                      <div class=" vertical-pana"></div>
                    </div>
                  </div>
                  <div class="d-flex bg-black text-white">
                    <div class="days-bar-date d-flex justify-content-center align-items-center">
                      <div class="">Date</div>
                    </div>
                    <div class="days-bar-day d-flex justify-content-center align-items-center">
                      <div class="">Mon</div>
                    </div>
                    <div class="days-bar-day d-flex justify-content-center align-items-center">
                      <div class="">Tue</div>
                    </div>
                    <div class="days-bar-day d-flex justify-content-center align-items-center">
                      <div class="">Wed</div>
                    </div>
                    <div class="days-bar-day d-flex justify-content-center align-items-center">
                      <div class="">Thu</div>
                    </div>
                    <div class="days-bar-day d-flex justify-content-center align-items-center">
                      <div class="">Fri</div>
                    </div>
                    <div class="days-bar-day d-flex justify-content-center align-items-center">
                      <div class="">Sat</div>
                    </div>
                    <div class="days-bar-day d-flex justify-content-center align-items-center">
                      <div class="">Sun</div>
                    </div>
                  </div>
                </div>

              </div>


              <div class="card border border-blue-grey border-lighten-1 bg-blue-grey bg-darken-3 ">
                <div class="card-header" id="heading-links">
                  <h4 class="card-title white"><b class="dobleresulttexttheme">OPEN</b><br>Date <?= date("d/m/Y") ?>
                  </h4>

                  <div class="heading-elements">
                    <a href="#" class="btn btn-sm btn-outline-success active">Predict</a>
                    <a href="#" class="btn btn-sm btn-outline-danger">Value</a>
                    <a href="#" class="btn btn-sm btn-outline-info">%</a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <table
                    class="table border-0 table-Declare table-bordered table-xs table-striped text-center table-black text-white table-responsive-md m-4-b ">
                    <thead class="bg-black-transperent-50">
                      <tr>
                        <th class="border-0">Select</th>
                        <th class="border-0">Total</th>
                        <th class="border-0">%</th>
                        <th class="border-0">Broker</th>
                        <th class="border-0">User</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="hover-num-color" id="num1-row">
                        <th><input id="num1" class="num1" type="radio" name="OpenResult"> &nbsp;⇢ &nbsp; 1</th>
                        <td><label for="num1">1,00,00,00,000</label></td>
                        <td><label for="num1">100%</label></td>
                        <td><label for="num1">10,00,00,000</label></td>
                        <td><label for="num1">10,00,00,000</label></td>
                      </tr>
                      <tr class="hover-num-color" id="num2-row">
                        <th><input id="num2" type="radio" name="OpenResult"> &nbsp;⇢ &nbsp; 2</th>
                        <td><label for="num2">2,00,00,00,000</label></td>
                        <td><label for="num2">100%</label></td>
                        <td><label for="num2">10,00,00,000</label></td>
                        <td><label for="num2">10,00,00,000</label></td>
                      </tr>
                      <tr class="hover-num-color" id="num3-row">
                        <th><input id="num3" type="radio" name="OpenResult"> &nbsp;⇢ &nbsp; 3</th>
                        <td><label for="num3">3,00,00,00,000</label></td>
                        <td><label for="num3">100%</label></td>
                        <td><label for="num3">10,00,00,000</label></td>
                        <td><label for="num3">10,00,00,000</label></td>
                      </tr>
                      <tr class="hover-num-color" id="num4-row">
                        <th><input id="num4" type="radio" name="OpenResult"> &nbsp;⇢ &nbsp; 4</th>
                        <td><label for="num4">4,00,00,00,000</label></td>
                        <td><label for="num4">100%</label></td>
                        <td><label for="num4">10,00,00,000</label></td>
                        <td><label for="num4">10,00,00,000</label></td>
                      </tr>
                      <tr class="bg-cyan bg-accent-2 text-black" id="num5-row">
                        <th><input id="num5" type="radio" name="OpenResult" checked="checked"> &nbsp;⇢ &nbsp; 5</th>
                        <td><label for="num5">5,00,00,00,000</label></td>
                        <td><label for="num5">100%</label></td>
                        <td><label for="num5">10,00,00,000</label></td>
                        <td><label for="num5">10,00,00,000</label></td>
                      </tr>
                      <tr class="hover-num-color" id="num6-row">
                        <th><input id="num6" type="radio" name="OpenResult"> &nbsp;⇢ &nbsp; 6</th>
                        <td><label for="num6">6,00,00,00,000</label></td>
                        <td><label for="num6">100%</label></td>
                        <td><label for="num6">10,00,00,000</label></td>
                        <td><label for="num6">10,00,00,000</label></td>
                      </tr>
                      <tr class="hover-num-color" id="num7-row">
                        <th><input id="num7" type="radio" name="OpenResult"> &nbsp;⇢ &nbsp; 7</th>
                        <td><label for="num7">7,00,00,00,000</label></td>
                        <td><label for="num7">100%</label></td>
                        <td><label for="num7">10,00,00,000</label></td>
                        <td><label for="num7">10,00,00,000</label></td>
                      </tr>
                      <tr class="hover-num-color" id="num8-row">
                        <th><input id="num8" type="radio" name="OpenResult"> &nbsp;⇢ &nbsp; 8</th>
                        <td><label for="num8">8,00,00,00,000</label></td>
                        <td><label for="num8">100%</label></td>
                        <td><label for="num8">10,00,00,000</label></td>
                        <td><label for="num8">10,00,00,000</label></td>
                      </tr>
                      <tr class="hover-num-color" id="num9-row">
                        <th><input id="num9" type="radio" name="OpenResult"> &nbsp;⇢ &nbsp; 9</th>
                        <td><label for="num9">9,00,00,00,000</label></td>
                        <td><label for="num9">100%</label></td>
                        <td><label for="num9">10,00,00,000</label></td>
                        <td><label for="num9">10,00,00,000</label></td>
                      </tr>
                      <tr class="hover-num-color" id="num0-row">
                        <th><input id="num0" type="radio" name="OpenResult"> &nbsp;⇢ &nbsp; 0</th>
                        <td><label for="num0">0,00,00,00,000</label></td>
                        <td><label for="num0">100%</label></td>
                        <td><label for="num0">10,00,00,000</label></td>
                        <td><label for="num0">10,00,00,000</label></td>
                      </tr>
                      <tr class="bg-blue-grey bg-darken-4">
                        <th>Pana</th>
                        <td>1,00,00,00,000</td>
                        <td>100%</td>
                        <td>10,00,00,000</td>
                        <td>10,00,00,000</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr class=" bg-black-transperent-60">
                        <th class="border-0">Total ⇢</th>
                        <th class="border-0 dobleresulttexttheme">1,00,00,00,00,000</th>
                        <th class="border-0">T=B+U</th>
                        <th class="border-0"><label for="num1">10,00,00,000</label></td>
                        <th class="border-0"><label for="num1">10,00,00,000</label></td>
                      </tr>
                    </tfoot>
                  </table>

                </div>
              </div>


              <div class="card bg-blue-grey bg-darken-4 border-blue-grey border-darken-1">
                <div class="card-header" id="heading-links">
                  <h4 class="card-title white">Select The Pana</h4>
                </div>
                <div class="card-body p-4-x">

                  <div class="form-group d-flex justify-content-center">
                    <label class="label-control text-white font-large-1 line-height-1 px-1 p-4-t "
                      for="eventRegInput4">5</label>
                    <select class="input-text-area rounded border border-dark badge-black font-medium-3 text-center"
                      name="STATE" id="user_area" required>
                      <option value="" disabled selected>Please Select Pana</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                    
                    
                    </select>
                  </div>


                  <div class="font-18px white text-center">
                    [ <b class="warning">Total Predict</b> - ( <b class="info">Pana Loss</b> + <b class="primary">Jodi
                      Loss</b> ) ] = <b class="success">Final Total</b>
                  </div>


                  <div class="d-flex justify-content-center flex-wrap">
                    <div
                      class="font-20px mt-1 text-bold-700 white rounded-lg border border-white overflow-hidden col-12 col-sm-12 col-md-11 col-lg-8 p-0">
                      <div class="d-flex bg-warning bg-darken-4 ">
                        <div class="text-center col-md-7 col-sm-6 col-6">
                          + 5,00,00,00,000
                        </div>
                        <div class="col-md-5 col-sm-6 col-6">
                          ⇠Prediction
                        </div>
                      </div>
                      <div class="d-flex bg-info bg-darken-4 ">
                        <div class="text-center col-md-7 col-sm-6 col-6">
                          - 5,00,00,00,000
                        </div>
                        <div class="col-md-5 col-sm-6 col-6">
                          ⇠Pana Loss
                        </div>
                      </div>
                      <div class="d-flex bg-primary bg-darken-4 ">
                        <div class="text-center col-md-7 col-sm-6 col-6">
                          - 5,00,00,00,000
                        </div>
                        <div class="col-md-5 col-sm-6 col-6">
                          ⇠Jodi Loss
                        </div>
                      </div>
                      <div class="d-flex bg-success bg-darken-4 border-top-white border-top-3 white p-4-y ">
                        <div class="text-center col-md-7 col-sm-6 col-6 p-4-y">
                          = 5,00,00,00,000
                        </div>
                        <div class="col-md-5 col-sm-6 col-6 p-4-y blinks">
                          ⇠Profit
                        </div>
                      </div>
                    </div>

                    <div
                      class="font-20px mt-1 text-bold-700 white rounded-lg border border-white overflow-hidden col-12 col-sm-12 col-md-11 col-lg-8 p-0">
                      <div class="d-flex bg-warning bg-darken-4 ">
                        <div class="text-center col-md-7 col-sm-6 col-6">
                          + 5,00,00,00,000
                        </div>
                        <div class="col-md-5 col-sm-6 col-6">
                          ⇠Prediction
                        </div>
                      </div>
                      <div class="d-flex bg-info bg-darken-4 ">
                        <div class="text-center col-md-7 col-sm-6 col-6">
                          - 5,00,00,00,000
                        </div>
                        <div class="col-md-5 col-sm-6 col-6">
                          ⇠Pana Loss
                        </div>
                      </div>
                      <div class="d-flex bg-primary bg-darken-4 ">
                        <div class="text-center col-md-7 col-sm-6 col-6">
                          - 5,00,00,00,000
                        </div>
                        <div class="col-md-5 col-sm-6 col-6">
                          ⇠Jodi Loss
                        </div>
                      </div>
                      <div class="d-flex bg-danger bg-darken-4 border-top-white border-top-3 white p-4-y ">
                        <div class="text-center col-md-7 col-sm-6 col-6 p-4-y">
                          = 5,00,00,00,000
                        </div>
                        <div class="col-md-5 col-sm-6 col-6 p-4-y blinks">
                          ⇠Loss
                        </div>
                      </div>
                    </div>


                  </div>
                </div>
              </div>




              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn bg-cyan bg-accent-2 text-black text-uppercase">Declare</button>
              </div>



            </div>
          </div>
        </div>
      </div>
      <!-- Ends Double Model Of This Page  -->



      <!-- Start Single Result Game  -->

      <div class="row">
        <div class="col-12 card badge-theme-black">
          <div class="card-header pl-0">
            <div class="card-title ">
              <h4 class="text-uppercase font-weight-bolder line-height-1 text-danger">
                ADD One Runs Result
              </h4>
              <h5 class="text-uppercase font-weight-bolder line-height-1 text-warning">
                <?= date("d/m/Y") ?>
              </h5>
              <p class="text-uppercase font-weight-bolder line-height-1 text-light">
                Result In Every Half An Hour
              </p>
            </div>
            <div class="heading-elements">
              <a href="{{route('Advance-Single-Result-Date')}}" class="btn btn-sm btn-outline-primary active">Advance</a>
              <a data-action="reload" class="btn btn-sm btn-outline-danger red"><i class="ft-rotate-cw"></i></a>
            </div>
          </div>
          <div class="card-content collapse show">
            <div class="row">
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px">
                  <div class="card bg-gradient-directional-danger mb-0">
                    <a href="{{('Everydays-Results')}}">
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
                    <button type="button"
                      class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"
                      data-toggle="modal" data-target="#AddSingleResultModel">+ Add
                      Result
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px">
                  <div class="card bg-gradient-directional-danger mb-0">
                    <a href="{{('Everydays-Results')}}">
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
                    <button type="button" class="w-100 btn btn-md bg-dark disabled no-border-top-radius text-light"
                      data-toggle="modal" data-target="#AddSingleResultModel">+ Add
                      Result</button>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px">
                  <div class="card bg-gradient-directional-purple mb-0">
                    <a href="{{('Everydays-Results')}}">
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
                            <h2 class="text-white font-weight-bolder mt-1 mb-0"><b class="text-warning">B</b> 123 / 6
                            </h2>
                            <span class="font-size-medium"> Time :- <b class="text-dark"> 12.00_AM </b></span>
                            <h1 class="text-white font-weight-bolder font-size-x-large">One Runs 03</h1>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="button" class="w-100 btn btn-md bg-dark disabled no-border-top-radius text-light"
                      data-toggle="modal" data-target="#AddSingleResultModel">+ Add
                      Result</button>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px">
                  <div class="card bg-gradient-directional-danger mb-0">
                    <a href="{{('Everydays-Results')}}">
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
                    <button type="button"
                      class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"
                      data-toggle="modal" data-target="#AddSingleResultModel">+ Add
                      Result
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px">
                  <div class="card bg-gradient-directional-danger mb-0">
                    <a href="{{('Everydays-Results')}}">
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
                    <button type="button"
                      class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"
                      data-toggle="modal" data-target="#AddSingleResultModel">+ Add
                      Result
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="blink-hiddinborder3px rounded p-4px  ">
                  <div class="card bg-gradient-directional-danger mb-0">
                    <a href="{{('Everydays-Results')}}">
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
                    <button type="button"
                      class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"
                      data-toggle="modal" data-target="#AddSingleResultModel">+ Add
                      Result
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px">
                  <div class="card bg-gradient-directional-danger mb-0">
                    <a href="{{('Everydays-Results')}}">
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
                    <button type="button"
                      class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"
                      data-toggle="modal" data-target="#AddSingleResultModel">+ Add
                      Result
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px">
                  <div class="card bg-gradient-directional-danger mb-0">
                    <a href="{{('Everydays-Results')}}">
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
                    <button type="button"
                      class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"
                      data-toggle="modal" data-target="#AddSingleResultModel">+ Add
                      Result
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px">
                  <div class="card bg-gradient-directional-danger mb-0">
                    <a href="{{('Everydays-Results')}}">
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
                    <button type="button"
                      class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"
                      data-toggle="modal" data-target="#AddSingleResultModel">+ Add
                      Result
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px">
                  <div class="card bg-gradient-directional-danger mb-0">
                    <a href="{{('Everydays-Results')}}">
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
                    <button type="button"
                      class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"
                      data-toggle="modal" data-target="#AddSingleResultModel">+ Add
                      Result
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px">
                  <div class="card bg-gradient-directional-danger mb-0">
                    <a href="{{('Everydays-Results')}}">
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
                    <button type="button"
                      class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"
                      data-toggle="modal" data-target="#AddSingleResultModel">+ Add
                      Result
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 p-4px">
                <div class="hiddinborder3px rounded p-4px">
                  <div class="card bg-gradient-directional-danger mb-0">
                    <a href="{{('Everydays-Results')}}">
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
                    <button type="button"
                      class="w-100 btn btn-md bg-red bg-darken-4 no-border-top-radius text-white  btn-max-width"
                      data-toggle="modal" data-target="#AddSingleResultModel">+ Add
                      Result
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- End Single Result Game  -->

      <!-- Start Single Model Of This Page  -->
      <div class="modal fade" id="AddSingleResultModel" tabindex="-1" role="dialog"
        aria-labelledby="AddSingleResultModelTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl w-100 justify-content-center" role="document">
          <div class="col-12 col-sm-12 col-md-12 col-lg-11 col-xl-10 p-0 modal-content badge-theme-black border ">
            <div class="modal-header">
              <h5 class="modal-title text-white" id="exampleModalLongTitle">Declare Open Result</h5>
              <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body px-0 px-md-1 px-lg-2">

              <div class=" pb-1">
                <div class="w-100 text-white text-uppercase flex text-center pb-1">
                  <div class="game-chart-name font-large-1 font-weight-bolder singleresulttexttheme">Game Name</div>
                  <div class=" game-chart-time-text ">Time - <b
                      class="singleresulttexttheme game-chart-time font-weight-bolder">03:00
                      PM</b>
                  </div>
                </div>

                <div class=" border border-black rounded overflow-hidden">

                  <div class="d-flex row-single-striped1 text-white">

                    <div
                      class="singleChart-date-size1 overflow-hidden d-flex align-items-between flex-column text-center rounded-sm">
                      <div class="mb-auto bg-black-transperent-50 w-100 text-center head-name">Game Name</div>
                      <div class="mb-auto mt-auto w-100 d-flex align-items-center justify-content-center body-date">
                        13
                        jun 2022</div>
                      <div class="mt-auto bg-black-transperent-30 w-100 text-center footer-name">Monday</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm bonus-result1">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">B3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>

                  </div>
                  <div class="d-flex row-single-striped1 text-white">

                    <div
                      class="singleChart-date-size1 overflow-hidden d-flex align-items-between flex-column text-center rounded-sm">
                      <div class="mb-auto bg-black-transperent-50 w-100 text-center head-name">Game Name</div>
                      <div class="mb-auto mt-auto w-100 d-flex align-items-center justify-content-center body-date">
                        13
                        jun 2022</div>
                      <div class="mt-auto bg-black-transperent-30 w-100 text-center footer-name">Monday</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm bonus-result1">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">B3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>

                  </div>
                  <div class="d-flex row-single-striped1 text-white">

                    <div
                      class="singleChart-date-size1 overflow-hidden d-flex align-items-between flex-column text-center rounded-sm">
                      <div class="mb-auto bg-black-transperent-50 w-100 text-center head-name">Game Name</div>
                      <div class="mb-auto mt-auto w-100 d-flex align-items-center justify-content-center body-date">
                        13
                        jun 2022</div>
                      <div class="mt-auto bg-black-transperent-30 w-100 text-center footer-name">Monday</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm bonus-result1">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">B3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>

                  </div>
                  <div class="d-flex row-single-striped1 text-white">

                    <div
                      class="singleChart-date-size1 overflow-hidden d-flex align-items-between flex-column text-center rounded-sm">
                      <div class="mb-auto bg-black-transperent-50 w-100 text-center head-name">Game Name</div>
                      <div class="mb-auto mt-auto w-100 d-flex align-items-center justify-content-center body-date">
                        13
                        jun 2022</div>
                      <div class="mt-auto bg-black-transperent-30 w-100 text-center footer-name">Monday</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm bonus-result1">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">B3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>

                  </div>
                  <div class="d-flex row-single-striped1 text-white">

                    <div
                      class="singleChart-date-size1 overflow-hidden d-flex align-items-between flex-column text-center rounded-sm">
                      <div class="mb-auto bg-black-transperent-50 w-100 text-center head-name">Game Name</div>
                      <div class="mb-auto mt-auto w-100 d-flex align-items-center justify-content-center body-date">
                        13
                        jun 2022</div>
                      <div class="mt-auto bg-black-transperent-30 w-100 text-center footer-name">Monday</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm bonus-result1">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">B3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>

                  </div>

                  <div class="d-flex row-single-striped1 text-white">

                    <div
                      class="singleChart-date-size1 overflow-hidden d-flex align-items-between flex-column text-center rounded-sm">
                      <div class="mb-auto bg-black-transperent-50 w-100 text-center head-name">Game Name</div>
                      <div class="mb-auto mt-auto w-100 d-flex align-items-center justify-content-center body-date">
                        13
                        jun 2022</div>
                      <div class="mt-auto bg-black-transperent-30 w-100 text-center footer-name">Monday</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm bonus-result1">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">B3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">256</div>
                      <div class="font-weight-bolder p-0 body-figure">3</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div
                      class=" singleChart-timeresult-size1 charttodayssinglebox overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">---</div>
                      <div class="font-weight-bolder p-0 body-figure">-</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">---</div>
                      <div class="font-weight-bolder p-0 body-figure">-</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">---</div>
                      <div class="font-weight-bolder p-0 body-figure">-</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">---</div>
                      <div class="font-weight-bolder p-0 body-figure">-</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>
                    <div class=" singleChart-timeresult-size1 overflow-hidden text-center rounded-sm ">
                      <div class=" bg-black-transperent-60 text-center head-game">One Runs 01</div>
                      <div class="p-0 body-pana">---</div>
                      <div class="font-weight-bolder p-0 body-figure">-</div>
                      <div class=" bg-black-transperent-30 text-center footer-timed">01:30 PM</div>
                    </div>

                  </div>
                </div>

              </div>


              <div class="card border border-blue-grey border-lighten-1 bg-blue-grey bg-darken-3 ">
                <div class="card-header" id="heading-links">
                  <h4 class="card-title white"><b class="singleresulttexttheme">OPEN</b><br>Date
                    <?= date("d/m/Y") ?>
                  </h4>

                  <div class="heading-elements">
                    <a href="#" class="btn btn-sm btn-outline-success active">Predict</a>
                    <a href="#" class="btn btn-sm btn-outline-danger">Value</a>
                    <a href="#" class="btn btn-sm btn-outline-info">%</a>
                  </div>
                </div>
                <div class="card-body p-0">



                  <table
                    class="table border-0 table-Declare table-bordered table-xs table-striped text-center table-black text-white table-responsive-md m-4-b ">
                    <thead class="bg-black-transperent-50">
                      <tr>
                        <th class="border-0">Select</th>
                        <th class="border-0">Total</th>
                        <th class="border-0">-Bonus</th>
                        <th class="border-0">%</th>
                        <th class="border-0">Broker</th>
                        <th class="border-0">User</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="hover-num-color" id="num1-row">
                        <th><input id="num1" class="num1" type="radio" name="OpenResult"> &nbsp;⇢ &nbsp; 1</th>
                        <td><label for="num1">1,00,00,00,000</label></td>
                        <td><label for="num1">-1,00,00,00,000</label></td>
                        <td><label for="num1">100%</label></td>
                        <td><label for="num1">10,00,00,000</label></td>
                        <td><label for="num1">10,00,00,000</label></td>
                      </tr>
                      <tr class="hover-num-color" id="num2-row">
                        <th><input id="num2" type="radio" name="OpenResult"> &nbsp;⇢ &nbsp; 2</th>
                        <td><label for="num2">2,00,00,00,000</label></td>
                        <td><label for="num2">-2,00,00,00,000</label></td>
                        <td><label for="num2">100%</label></td>
                        <td><label for="num2">10,00,00,000</label></td>
                        <td><label for="num2">10,00,00,000</label></td>
                      </tr>
                      <tr class="hover-num-color" id="num3-row">
                        <th><input id="num3" type="radio" name="OpenResult"> &nbsp;⇢ &nbsp; 3</th>
                        <td><label for="num3">3,00,00,00,000</label></td>
                        <td><label for="num3">-3,00,00,00,000</label></td>
                        <td><label for="num3">100%</label></td>
                        <td><label for="num3">10,00,00,000</label></td>
                        <td><label for="num3">10,00,00,000</label></td>
                      </tr>
                      <tr class="hover-num-color" id="num4-row">
                        <th><input id="num4" type="radio" name="OpenResult"> &nbsp;⇢ &nbsp; 4</th>
                        <td><label for="num4">4,00,00,00,000</label></td>
                        <td><label for="num4">-4,00,00,00,000</label></td>
                        <td><label for="num4">100%</label></td>
                        <td><label for="num4">10,00,00,000</label></td>
                        <td><label for="num4">10,00,00,000</label></td>
                      </tr>
                      <tr class="bg-red bg-accent-3 text-black" id="num5-row">
                        <th><input id="num5" type="radio" name="OpenResult" checked="checked"> &nbsp;⇢ &nbsp; 5</th>
                        <td><label for="num5">5,00,00,00,000</label></td>
                        <td><label for="num5">-5,00,00,00,000</label></td>
                        <td><label for="num5">100%</label></td>
                        <td><label for="num5">10,00,00,000</label></td>
                        <td><label for="num5">10,00,00,000</label></td>
                      </tr>
                      <tr class="hover-num-color" id="num6-row">
                        <th><input id="num6" type="radio" name="OpenResult"> &nbsp;⇢ &nbsp; 6</th>
                        <td><label for="num6">6,00,00,00,000</label></td>
                        <td><label for="num6">-6,00,00,00,000</label></td>
                        <td><label for="num6">100%</label></td>
                        <td><label for="num6">10,00,00,000</label></td>
                        <td><label for="num6">10,00,00,000</label></td>
                      </tr>
                      <tr class="hover-num-color" id="num7-row">
                        <th><input id="num7" type="radio" name="OpenResult"> &nbsp;⇢ &nbsp; 7</th>
                        <td><label for="num7">7,00,00,00,000</label></td>
                        <td><label for="num7">-7,00,00,00,000</label></td>
                        <td><label for="num7">100%</label></td>
                        <td><label for="num7">10,00,00,000</label></td>
                        <td><label for="num7">10,00,00,000</label></td>
                      </tr>
                      <tr class="hover-num-color" id="num8-row">
                        <th><input id="num8" type="radio" name="OpenResult"> &nbsp;⇢ &nbsp; 8</th>
                        <td><label for="num8">8,00,00,00,000</label></td>
                        <td><label for="num8">-8,00,00,00,000</label></td>
                        <td><label for="num8">100%</label></td>
                        <td><label for="num8">10,00,00,000</label></td>
                        <td><label for="num8">10,00,00,000</label></td>
                      </tr>
                      <tr class="hover-num-color" id="num9-row">
                        <th><input id="num9" type="radio" name="OpenResult"> &nbsp;⇢ &nbsp; 9</th>
                        <td><label for="num9">9,00,00,00,000</label></td>
                        <td><label for="num9">-9,00,00,00,000</label></td>
                        <td><label for="num9">100%</label></td>
                        <td><label for="num9">10,00,00,000</label></td>
                        <td><label for="num9">10,00,00,000</label></td>
                      </tr>
                      <tr class="hover-num-color" id="num0-row">
                        <th><input id="num0" type="radio" name="OpenResult"> &nbsp;⇢ &nbsp; 0</th>
                        <td><label for="num0">0,00,00,00,000</label></td>
                        <td><label for="num0">-0,00,00,00,000</label></td>
                        <td><label for="num0">100%</label></td>
                        <td><label for="num0">10,00,00,000</label></td>
                        <td><label for="num0">10,00,00,000</label></td>
                      </tr>
                      <tr class="bg-blue-grey bg-darken-4">
                        <th>Pana</th>
                        <td>1,00,00,00,000</td>
                        <td>-1,00,00,00,000</td>
                        <td>100%</td>
                        <td>10,00,00,000</td>
                        <td>10,00,00,000</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr class=" bg-black-transperent-60">
                        <th class="border-0">Total ⇢</th>
                        <th class="border-0 singleresulttexttheme">1,00,00,00,00,000</th>
                        <th class="border-0 singleresulttexttheme">-1,00,00,00,00,000</th>
                        <th class="border-0">T=B+U</th>
                        <th class="border-0"><label for="num1">10,00,00,000</label></td>
                        <th class="border-0"><label for="num1">10,00,00,000</label></td>
                      </tr>
                    </tfoot>
                  </table>

                </div>
              </div>


              <div class="card bg-blue-grey bg-darken-4 border-blue-grey border-darken-1">
                <div class="card-header" id="heading-links">
                  <h4 class="card-title white">Select The Pana</h4>
                </div>
                <div class="card-body p-4-x">

                  <div class="form-group d-flex justify-content-center">
                    <select class="input-text-area rounded border border-dark badge-black font-medium-3 text-center"
                      name="STATE" id="user_area" required>
                      <option value="" selected>Normal</option>
                      <option value="B">Bonus</option>
                    </select>
                    <label class="label-control text-white font-large-1 line-height-1 px-1 p-4-t "
                      for="eventRegInput4">5</label>
                    <select class="input-text-area rounded border border-dark badge-black font-medium-3 text-center"
                      name="STATE" id="user_area" required>
                      <option value="" disabled selected>Please Select Pana</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                      <option value="230">230</option>
                    </select>
                  </div>


                  <div class="font-18px white text-center">
                    [ <b class="warning">Total Predict</b> - ( <b class="info">Pana Loss</b> + <b class="pink">Bonus
                      Loss</b> ) ] = <b class="success">Final Total</b>
                  </div>


                  <div class="d-flex justify-content-center flex-wrap">
                    <div
                      class="font-20px mt-1 text-bold-700 white rounded-lg border border-white overflow-hidden col-12 col-sm-12 col-md-11 col-lg-8 p-0">
                      <div class="d-flex bg-warning bg-darken-4 ">
                        <div class="text-center col-md-7 col-sm-6 col-6">
                          + 5,00,00,00,000
                        </div>
                        <div class="col-md-5 col-sm-6 col-6">
                          ⇠Prediction
                        </div>
                      </div>
                      <div class="d-flex bg-info bg-darken-4 ">
                        <div class="text-center col-md-7 col-sm-6 col-6">
                          - 5,00,00,00,000
                        </div>
                        <div class="col-md-5 col-sm-6 col-6">
                          ⇠Pana Loss
                        </div>
                      </div>
                      <div class="d-flex bg-pink bg-accent-3">
                        <div class="text-center col-md-7 col-sm-6 col-6">
                          - 5,00,00,00,000
                        </div>
                        <div class="col-md-5 col-sm-6 col-6 blinks">
                          ⇠Bonus Loss
                        </div>
                      </div>
                      <div class="d-flex bg-success bg-darken-4 border-top-white border-top-3 white p-4-y ">
                        <div class="text-center col-md-7 col-sm-6 col-6 p-4-y">
                          = 5,00,00,00,000
                        </div>
                        <div class="col-md-5 col-sm-6 col-6 p-4-y blinks">
                          ⇠Profit
                        </div>
                      </div>
                    </div>

                    <div
                      class="font-20px mt-1 text-bold-700 white rounded-lg border border-white overflow-hidden col-12 col-sm-12 col-md-11 col-lg-8 p-0">
                      <div class="d-flex bg-warning bg-darken-4 ">
                        <div class="text-center col-md-7 col-sm-6 col-6">
                          + 5,00,00,00,000
                        </div>
                        <div class="col-md-5 col-sm-6 col-6">
                          ⇠Prediction
                        </div>
                      </div>
                      <div class="d-flex bg-info bg-darken-4 ">
                        <div class="text-center col-md-7 col-sm-6 col-6">
                          - 5,00,00,00,000
                        </div>
                        <div class="col-md-5 col-sm-6 col-6">
                          ⇠Pana Loss
                        </div>
                      </div>
                      <div class="d-flex bg-pink bg-accent-3">
                        <div class="text-center col-md-7 col-sm-6 col-6">
                          - 5,00,00,00,000
                        </div>
                        <div class="col-md-5 col-sm-6 col-6 blinks">
                          ⇠Bonus Loss
                        </div>
                      </div>
                      <div class="d-flex bg-danger bg-darken-4 border-top-white border-top-3 white p-4-y ">
                        <div class="text-center col-md-7 col-sm-6 col-6 p-4-y">
                          = 5,00,00,00,000
                        </div>
                        <div class="col-md-5 col-sm-6 col-6 p-4-y blinks">
                          ⇠Loss
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn bg-red bg-accent-3 text-white text-uppercase">Declare</button>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- Ends Single Model Of This Page  -->
    </section>
  </div>
</div>
@include('header.footer_head')
@include('header.footer_toe')