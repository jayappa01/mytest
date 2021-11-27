@include('header.nav_bar_head')
@include('header.nav_bar_toe')
<link rel="stylesheet" type="text/css" href="{{ asset('public/css/custom.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}" />

<div class="content-wrapper">
  <div class="content-body">


    <!-- Row grouping -->
    <section id="row-grouping">
      <div class="row">
        <div class="col-12">
          <div class="card badge-theme-black">
            <div class="card-header p-4-b">
              <h4 class="card-title white">Add Result Advance</h4>
              <h5 class="text-uppercase font-weight-bolder line-height-1 text-warning pt-1">
                <?= date("d/m/Y ⇢ D") ?>
              </h5>
              <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                  <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-content collapse show">
              <div class="card-body card-dashboard p-4px">
                <div class="table-responsive">
                  <table
                    class="table w-100 table-xs table-responsive-xs table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl table-theme-dark table-hover table-striped  table-bordered default-ordering text-center p-0">
                    <thead>
                      <tr>
                        <th>Edit</th>
                        <th>No</th>
                        <th>Game Name</th>
                        <th>Time</th>
                        <th>Result</th>
                        <th>Date</th>
                        <th>Clear</th>
                        <th>Updated</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>1</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b class="warning">3</b><b>⇠580</b></td>
                        <td><?= date("d/m/Y-D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>2</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b class="warning">3</b><b>⇠580</b></td>
                        <td><?= date("d/m/Y-D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>3</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b class="warning">3</b><b>⇠580</b></td>
                        <td><?= date("d/m/Y-D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>4</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b class="warning">3</b><b>⇠580</b></td>
                        <td><?= date("d/m/Y-D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>5</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b class="warning">3</b><b>⇠580</b></td>
                        <td><?= date("d/m/Y-D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>6</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b class="purple accent-4">B5⇠780</b></td>
                        <td><?= date("d/m/Y-D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>7</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b class="warning">3</b><b>⇠580</b></td>
                        <td><?= date("d/m/Y-D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>8</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b class="warning">3</b><b>⇠580</b></td>
                        <td><?= date("d/m/Y-D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>9</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b class="warning">3</b><b>⇠580</b></td>
                        <td><?= date("d/m/Y-D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>10</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b class="warning">3</b><b>⇠580</b></td>
                        <td><?= date("d/m/Y-D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>11</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b class="warning">3</b><b>⇠580</b></td>
                        <td><?= date("d/m/Y-D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>12</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b class="warning">3</b><b>⇠580</b></td>
                        <td><?= date("d/m/Y-D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                      </tr>


                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Edit</th>
                        <th>No</th>
                        <th>Game Name</th>
                        <th>Time</th>
                        <th>Result</th>
                        <th>Date</th>
                        <th>Clear</th>
                        <th>Updated</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Row grouping -->

    <!-- Start Model Of This Page  -->
    <div class="modal fade" id="AddResultModel" tabindex="-1" role="dialog" aria-labelledby="AddResultModelTitle"
      aria-hidden="true">
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
                    <div class="mb-auto mt-auto w-100 d-flex align-items-center justify-content-center body-date">13
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
                    <div class="mb-auto mt-auto w-100 d-flex align-items-center justify-content-center body-date">13
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
                    <div class="mb-auto mt-auto w-100 d-flex align-items-center justify-content-center body-date">13
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
                    <div class="mb-auto mt-auto w-100 d-flex align-items-center justify-content-center body-date">13
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
                    <div class="mb-auto mt-auto w-100 d-flex align-items-center justify-content-center body-date">13
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
                    <div class="mb-auto mt-auto w-100 d-flex align-items-center justify-content-center body-date">13
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



            <div class="card bg-blue-grey bg-darken-4 border-blue-grey border-darken-1">
              <div class="card-header" id="heading-links">
                <h4 class="card-title white">Select The Result</h4>
              </div>
              <div class="card-body pt-0 p-4-x">

                <div class="d-flex justify-content-center flex-wrap">

                  <div class="col-12 line-height-1 p-4-t pb-1 font-medium-4 text-center">
                    <b class="bg-light text-black px-1 p-4-y font-weight-bolder rounded"><?= date("d/m/Y ⇢ D") ?></b>
                  </div>

                  <div class="col-12 line-height-1 p-4-t pb-1 font-large-1 text-center">
                    <b class="bg-danger bg-darken-4 text-white px-1 p-4-y font-weight-bolder text-uppercase rounded">Game
                      Name</b>
                  </div>

                  <div class="col-12 line-height-1 py-1 font-large-2 text-center font-weight-bolder">
                    <b class="danger">450-9</b>
                  </div>

                  <div class=" col-12 col-md-12 col-lg-6 px-1">
                    <div class="form-group d-flex justify-content-center bg-danger py-1 rounded ">

                      <select id="Open-result" for="Open-panna"
                        class="input-text-area rounded border border-dark badge-black font-medium-3 text-center"
                        required>
                        <option value="" disabled selected>Normal</option>
                        <option value="B">Bonus</option>
                      </select>
                      <select id="Open-result" for="Open-panna"
                        class="input-text-area rounded border border-dark badge-black font-medium-3 text-center"
                        required>
                        <option value="" disabled selected>Figure</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="0">0</option>
                        <option value="*">*</option>
                      </select>
                      <select id="Open-pana"
                        class="m-4-x input-text-area rounded border border-dark badge-black font-medium-3 text-center"
                        required>
                        <option value="" disabled selected>Set Pana</option>
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
                        <option value="***">***</option>
                      </select>
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
      <!-- Ends Model Of This Page  -->

    </div>
  </div>
</div>
</div>


@include('header.footer_head')
@include('header.footer_toe')