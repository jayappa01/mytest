@include('header.nav_bar_head') 
@include('header.nav_bar_toe')
<link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/pages/All-Results.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/pages/Everydays-Results.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/pages/Add-Results.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}" />
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
                              {{($arrGameDetail->openpanna) ? $arrGameDetail->openpanna : '***'  }}- <b class="text-white"> {{($arrGameDetail->open) ? $arrGameDetail->open : '*'}}{{($arrGameDetail->close) ? $arrGameDetail->close :'*'  }} </b> -{{($arrGameDetail->closepanna) ? $arrGameDetail->closepanna : '***' }}
                            </h2>
                            <h5 class="text-white mb-0 ">
                              Time:- <b class="text-dark">

                                {{date('h:i A',strtotime($arrGameDetail->open_time))}}
                              </b> / <b class="text-dark"> {{date('h:i A',strtotime($arrGameDetail->close_time))}}</b>
                            </h5>
                            <h3 class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">{{$arrGameDetail->game_name}}</h3>
                            <input type="hidden" name="gameid" id="gameid" >
                            <input type="hidden" name="result_type" id="result_type">
                            <input type="hidden" name="result_id" id="result_id">
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
                        class="w-100 btn btn-md bg-warning no-border-top-radius no-border-bottom-right-radius  border-right-info text-black open_result"
                        data-toggle="modal" data-record-id="{{$arrGameDetail->Gameid}}" data-result_id="{{$arrGameDetail->id}}" data-target="#AddDoubleResultModel" >+ Open Result</button>
                      <button type="button"
                        class="w-100 btn btn-md bg-warning no-border-top-radius no-border-bottom-left-radius  border-left-info text-black close_result"
                        data-toggle="modal" data-record-id="{{$arrGameDetail->Gameid}}" data-result_id="{{$arrGameDetail->id}}" data-target="#AddDoubleResultModel">+ Close Result</button>
                    </div>
                  </div>
                </div>
              </div>

        @endforeach

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
                    @for ($i = 1; $i < 11; $i++)
                      <tr class="hover-num-color" id="num-row">
                        <th><input id="num{{$i}}" class="panna" type="radio" name="num{{$i}}" value="{{$i}}"> &nbsp;⇢ &nbsp; {{($i == 10) ? 0 : $i}}</th>
                        <td><label for="num1">1,00,00,00,000</label></td>
                        <td><label for="num1">100%</label></td>
                        <td><label for="num1">10,00,00,000</label></td>
                        <td><label for="num1">10,00,00,000</label></td>
                      </tr>
                     
                     @endfor     
                    
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
                    <label class="label-control text-white font-large-1 line-height-1 px-1 p-4-t selected_patti" for="eventRegInput4" >-</label>
                    <select class="input-text-area rounded border border-dark badge-black font-medium-3 text-center Panna_list"
                      name="Panna_list" required>
                      <option value="" disabled selected>Please Select Pana</option>
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
                <button type="button" class="btn bg-cyan bg-accent-2 text-black text-uppercase submit_result">Declare</button>
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
                      
                        @for ($i = 1; $i < 11; $i++)
                      <tr class="hover-num-color" id="num-row">
                        <th><input id="num{{$i}}" class="panna" type="radio" name="panna" value="{{$i}}"> &nbsp;⇢ &nbsp; {{($i == 10) ? 0 : $i}}</th>
                        <td><label for="num1">1,00,00,00,000</label></td>
                        <td><label for="num1">100%</label></td>
                        <td><label for="num1">10,00,00,000</label></td>
                        <td><label for="num1">10,00,00,000</label></td>
                      </tr>
                     
                     @endfor   
                      
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
                  <h4 class="card-title white">Select Pana</h4>
                </div>
                <div class="card-body p-4-x">

                  <div class="form-group d-flex justify-content-center">
                    <select class="input-text-area rounded border border-dark badge-black font-medium-3 text-center"
                      name="STATE" id="user_area" required>
                      <option value="" selected>Normal</option>
                      <option value="B">Bonus</option>
                    </select>
                    <label class="label-control text-white font-large-1 line-height-1 px-1 p-4-t selected_patti"
                      for="eventRegInput4" id="">-</label>
                    <select class="input-text-area rounded border border-dark badge-black font-medium-3 text-center Panna_list"
                      name="Panna_list" required>
                      <option value="" disabled selected>Please Select Pana</option>
                     
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
                <button type="button" class="btn bg-red bg-accent-3 text-white text-uppercase submit_result">Declare</button>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- Ends Single Model Of This Page  -->
    </section>
  </div>
</div>
<script type="text/javascript" src="{{ asset('public/transaction/add_results.js')}}"></script>

<script type="text/javascript">
  $.ajaxSetup({
  headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
});

var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');


$('.close_result').click(function(e){
  $('#result_type').val(2);
  var id = $(this).data("record-id");
  var result_id = $(this).data("result_id");
  $('#gameid').val(id);
  $('#result_id').val(result_id);

  console.log($('#gameid').val() +'-'+ $('#result_type').val() );

});
$('.open_result').click(function(e){
   $('#result_type').val(1);
   var id = $(this).data("record-id");
   var result_id = $(this).data("result_id");
   $('#gameid').val(id);
   $('#result_id').val(result_id);
   console.log($('#gameid').val() +'-'+$('#result_type').val() );

});

  $('.panna').click(function(e){
    var patti = $( this ).val();
console.log("reach here" + patti);
     var url ='{!! route('Load-Panna') !!}';
  $.ajax({
    url: url,
        type: 'POST',
        dataType: 'json',
        data: {_token: CSRF_TOKEN, patti:patti},
    }).done(function (data) {
    
    $('.selected_patti').html(patti);

     var html = '';
            $.each(data, function (i, value) {

                html += ('<option value="' + value.patti + '">' + value.patti + '</option>');

            });
            $(".Panna_list").html(html);

    }).fail(function(data){ 
       console.log(data);
     });

});

$('.submit_result').click(function(e){
  console.log("here");
    var result_type = $('#result_type').val();
    var gameid =$('#gameid').val();
    var patti = $('.selected_patti').html();
    var panna = $('.Panna_list').val();
    var result_id = $('#result_id').val();

    var url ='{!! route('Add-Double-Game-Result') !!}';
  $.ajax({
    url: url,
        type: 'POST',
        dataType: 'json',
        data: {_token: CSRF_TOKEN, result_id:result_id, result_type:result_type,gameid:gameid,patti:patti,panna:panna},
    }).done(function (data) {
    
    console.log("reach here");

    }).fail(function(data){ 
       console.log(data);
     });

});

</script>

@include('header.footer_head')
@include('header.footer_toe')