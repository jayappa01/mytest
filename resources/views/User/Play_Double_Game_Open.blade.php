@include('header.nav_bar_head')
@include('header.nav_bar_toe')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="content-wrapper">
  <div class="content-body m-0 p-0">

    <section>

      <!-- Start Double Result Game  -->

      <div class="row">
        <div class="col-12 card badge-black ">
          <div class="card-header pl-0 pb-0">
            <div class="card-title">
              <h5 class="text-uppercase font-weight-bolder line-height-1 text-warning">
                <i class="icon-game-controller"></i> Play & Win
              </h5>
            </div>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content collapse show">



            <!-- starts Tabs -->

            <div class="w-100 d-flex justify-content-center p-0">

              <div class="col-12 col-xl-7 col-lg-7 col-md-11 col-sm-12 p-0">
                <div class="row p-0 m-0">
                  <h3 class="badge-dark rounded-top text-warning font-weight-bold p-4-y px-1 pt-1 m-0"><i
                      class="icon-calendar"></i> <?= date("d/m/Y") ?></h3>
                </div>
                <div class="badge-dark rounded-top no-border-top-left-radius text-center m-0 p-1">
                  <h2 class="p-0 m-0 text-white w-100 font-weight-bold text-uppercase pb-1 ">Game Name</h2>
                  <h3 class="p-0 m-0 text-danger font-weight-bold float-left"><i class="icon-clock"></i> 01.30 PM</h3>
                  <button type="button" class="btn btn-sm btn-success btn-max-width float-right" id="type-success"><i
                      class="icon-paper-plane"></i> Submit Game</button>
                  <h4 class="p-0 p-4-y m-0 text-white font-weight-bold"><i class="icon-diamond"></i> Open </h4>
                </div>
                <div class="nav nav-tabs badge-dark no-border-top-radius nav-justified" id="nav-tab" role="tablist">
                  <a class="nav-item Game-unit-tab active" id="nav-Figure-tab" data-toggle="tab" href="#nav-Figure"
                    role="tab" aria-controls="nav-Figure" aria-selected="true">Figure</a>
                  <a class="nav-item Game-unit-tab" id="nav-Pana-tab" data-toggle="tab" href="#nav-Pana" role="tab"
                    aria-controls="nav-Pana" aria-selected="false">Pana</a>
                  <a class="nav-item Game-unit-tab" id="nav-Jodi-tab" data-toggle="tab" href="#nav-Jodi" role="tab"
                    aria-controls="nav-Jodi" aria-selected="false">Jodi</a>
                  <a class="nav-item Game-unit-tab" id="nav-Total-tab" data-toggle="tab" href="#nav-Total" role="tab"
                    aria-controls="nav-Total" aria-selected="false">Total</a>
                </div>


                <div class="tab-content " id="nav-tabContent">
                  <div class="tab-pane Game-unit-container fade show active" id="nav-Figure" role="tabpanel"
                    aria-labelledby="nav-Figure-tab">

                    <div class="input-group pb-2">
                      <input type="text"
                        class="p-2 border-0 no-border-top-radius bg-warning darken-4 form-control text-center font-weight-bold badge-light font-20px"
                        value="⇣  Write your Figure  ⇣" placeholder="Open Total" readonly>
                    </div>
                    <div class="input-group p-4-b">
                      <div class="input-group-prepend">
                        <span class="badge-warning input-group-text font-weight-bold font-20px py-0">1⇢</span>
                      </div>
                      <input type="number" max="200000" min="0" oninput="validity.valid||(value='');"
                        class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px" value=""
                        maxlength="5">
                    </div>
                    <div class="input-group p-4-b">
                      <div class="input-group-prepend">
                        <span class="badge-warning input-group-text font-weight-bold font-20px py-0">2⇢</span>
                      </div>
                      <input type="number" max="200000" min="0" oninput="validity.valid||(value='');"
                        class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px" value=""
                        maxlength="5">
                    </div>
                    <div class="input-group p-4-b">
                      <div class="input-group-prepend">
                        <span class="badge-warning input-group-text font-weight-bold font-20px py-0">3⇢</span>
                      </div>
                      <input type="number" max="200000" min="0" oninput="validity.valid||(value='');"
                        class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px" value=""
                        maxlength="5">
                    </div>
                    <div class="input-group p-4-b">
                      <div class="input-group-prepend">
                        <span class="badge-warning input-group-text font-weight-bold font-20px py-0">4⇢</span>
                      </div>
                      <input type="number" max="200000" min="0" oninput="validity.valid||(value='');"
                        class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px" value=""
                        maxlength="5">
                    </div>
                    <div class="input-group p-4-b">
                      <div class="input-group-prepend">
                        <span class="badge-warning input-group-text font-weight-bold font-20px py-0">5⇢</span>
                      </div>
                      <input type="number" max="200000" min="0" oninput="validity.valid||(value='');"
                        class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px" value=""
                        maxlength="5">
                    </div>
                    <div class="input-group p-4-b">
                      <div class="input-group-prepend">
                        <span class="badge-warning input-group-text font-weight-bold font-20px py-0">6⇢</span>
                      </div>
                      <input type="number" max="200000" min="0" oninput="validity.valid||(value='');"
                        class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px" value=""
                        maxlength="5">
                    </div>
                    <div class="input-group p-4-b">
                      <div class="input-group-prepend">
                        <span class="badge-warning input-group-text font-weight-bold font-20px py-0">7⇢</span>
                      </div>
                      <input type="number" max="200000" min="0" oninput="validity.valid||(value='');"
                        class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px" value=""
                        maxlength="5">
                    </div>
                    <div class="input-group p-4-b">
                      <div class="input-group-prepend">
                        <span class="badge-warning input-group-text font-weight-bold font-20px py-0">8⇢</span>
                      </div>
                      <input type="number" max="200000" min="0" oninput="validity.valid||(value='');"
                        class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px" value=""
                        maxlength="5">
                    </div>
                    <div class="input-group p-4-b">
                      <div class="input-group-prepend">
                        <span class="badge-warning input-group-text font-weight-bold font-20px py-0">9⇢</span>
                      </div>
                      <input type="number" max="200000" min="0" oninput="validity.valid||(value='');"
                        class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px" value=""
                        maxlength="5">
                    </div>
                    <div class="input-group pb-2">
                      <div class="input-group-prepend">
                        <span class="badge-warning input-group-text font-weight-bold font-20px py-0">0⇢</span>
                      </div>
                      <input type="number" max="200000" min="0" oninput="validity.valid||(value='');"
                        class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px" value=""
                        maxlength="5">
                    </div>
                    <div class="input-group pb-2">
                      <div class="input-group-prepend">
                        <span class="badge-warning input-group-text font-weight-bold font-20px py-0 p-4-x">Figure
                          Total⇢</span>
                      </div>
                      <input type="text"
                        class="py-2 px-0 form-control text-center font-weight-bold badge-light font-20px"
                        value="1+2+3+4+5+6+7+8+9+0" placeholder="Open Total" readonly>
                    </div>

                  </div>

                  <!-- Start of pana's tab  -->
                  <div class="tab-pane Game-unit-container fade" id="nav-Pana" role="tabpanel"
                    aria-labelledby="nav-Pana-tab">
                    <div class="input-group pb-2">
                      <input type="text"
                        class="p-2 border-0 no-border-top-radius bg-info darken-4 form-control text-center font-weight-bold badge-light font-20px"
                        value="⇣  Write your Pana  ⇣" placeholder="Open Total" readonly>
                    </div>


                    <!-- Starts Collapse pana menu  -->

                    <div id="collapse3" class="card-accordion">
                      <div class="card badge-black collapse-icon accordion-icon-rotate">


                        <!-- Starts 1 number pana -->

                        <div class="card badge-black pb-1 ">
                          <div class="card" id="headingCOne">
                            <button
                              class="w-100 btn btn-lg bg-info bg-darken-4 text-left text-white no-border-bottom-radius collapsed"
                              data-toggle="collapse" data-target="#collapseC1" aria-expanded="false"
                              aria-controls="collapseC1">
                              Pana Of #1
                            </button>
                          </div>
                          <div id="collapseC1" class="collapse show bg-blue-grey bg-darken-4 rounded-bottom "
                            aria-labelledby="headingCOne">
                            <div class="card-body">
                              <div class="row  ">

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>


                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Ends 1 number pana -->

                        <!-- Starts 2 number pana -->

                        <div class="card badge-black pb-1 ">
                          <div class="card" id="headingCTwo">
                            <button
                              class="w-100 btn btn-lg bg-info text-left text-black no-border-bottom-radius collapsed"
                              data-toggle="collapse" data-target="#collapseC2" aria-expanded="false"
                              aria-controls="collapseC2">
                              Pana Of #2
                            </button>
                          </div>
                          <div id="collapseC2" class="collapse bg-blue-grey bg-darken-3 rounded-bottom "
                            aria-labelledby="headingCTwo">
                            <div class="card-body">
                              <div class="row  ">

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>
                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Ends 2 number pana -->

                        <!-- Starts 3 number pana -->

                        <div class="card badge-black pb-1 ">
                          <div class="card" id="headingCThree">
                            <button
                              class="w-100 btn btn-lg bg-info bg-darken-4 text-left text-white no-border-bottom-radius collapsed"
                              data-toggle="collapse" data-target="#collapseC3" aria-expanded="false"
                              aria-controls="collapseC3">
                              Pana Of #3
                            </button>
                          </div>
                          <div id="collapseC3" class="collapse bg-blue-grey bg-darken-4 rounded-bottom "
                            aria-labelledby="headingCThree">
                            <div class="card-body">
                              <div class="row  ">

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Ends 3 number pana -->

                        <!-- Starts 4 number pana -->

                        <div class="card badge-black pb-1 ">
                          <div class="card" id="headingCFour">
                            <button
                              class="w-100 btn btn-lg bg-info text-left text-black no-border-bottom-radius collapsed"
                              data-toggle="collapse" data-target="#collapseC4" aria-expanded="false"
                              aria-controls="collapseC4">
                              Pana Of #4
                            </button>
                          </div>
                          <div id="collapseC4" class="collapse bg-blue-grey bg-darken-3 rounded-bottom "
                            aria-labelledby="headingCFour">
                            <div class="card-body">
                              <div class="row  ">

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>
                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Ends 4 number pana -->

                        <!-- Starts 5 number pana -->

                        <div class="card badge-black pb-1 ">
                          <div class="card" id="headingCFive">
                            <button
                              class="w-100 btn btn-lg bg-info bg-darken-4 text-left text-white no-border-bottom-radius collapsed"
                              data-toggle="collapse" data-target="#collapseC5" aria-expanded="false"
                              aria-controls="collapseC5">
                              Pana Of #5
                            </button>
                          </div>
                          <div id="collapseC5" class="collapse bg-blue-grey bg-darken-4 rounded-bottom "
                            aria-labelledby="headingCFive">
                            <div class="card-body">
                              <div class="row  ">

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Ends 5 number pana -->

                        <!-- Starts 6 number pana -->

                        <div class="card badge-black pb-1 ">
                          <div class="card" id="headingCSix">
                            <button
                              class="w-100 btn btn-lg bg-info text-left text-black no-border-bottom-radius collapsed"
                              data-toggle="collapse" data-target="#collapseC6" aria-expanded="false"
                              aria-controls="collapseC6">
                              Pana Of #6
                            </button>
                          </div>
                          <div id="collapseC6" class="collapse bg-blue-grey bg-darken-3 rounded-bottom "
                            aria-labelledby="headingCSix">
                            <div class="card-body">
                              <div class="row  ">

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>
                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Ends 6 number pana -->

                        <!-- Starts 7 number pana -->

                        <div class="card badge-black pb-1 ">
                          <div class="card" id="headingCSeven">
                            <button
                              class="w-100 btn btn-lg bg-info bg-darken-4 text-left text-white no-border-bottom-radius collapsed"
                              data-toggle="collapse" data-target="#collapseC7" aria-expanded="false"
                              aria-controls="collapseC7">
                              Pana Of #7
                            </button>
                          </div>
                          <div id="collapseC7" class="collapse bg-blue-grey bg-darken-4 rounded-bottom "
                            aria-labelledby="headingCSeven">
                            <div class="card-body">
                              <div class="row  ">

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Ends 7 number pana -->

                        <!-- Starts 8 number pana -->

                        <div class="card badge-black pb-1 ">
                          <div class="card" id="headingCEight">
                            <button
                              class="w-100 btn btn-lg bg-info text-left text-black no-border-bottom-radius collapsed"
                              data-toggle="collapse" data-target="#collapseC8" aria-expanded="false"
                              aria-controls="collapseC8">
                              Pana Of #8
                            </button>
                          </div>
                          <div id="collapseC8" class="collapse bg-blue-grey bg-darken-3 rounded-bottom "
                            aria-labelledby="headingCEight">
                            <div class="card-body">
                              <div class="row  ">

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>
                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Ends 8 number pana -->

                        <!-- Starts 9 number pana -->

                        <div class="card badge-black pb-1 ">
                          <div class="card" id="headingCNine">
                            <button
                              class="w-100 btn btn-lg bg-info bg-darken-4 text-left text-white no-border-bottom-radius collapsed"
                              data-toggle="collapse" data-target="#collapseC9" aria-expanded="false"
                              aria-controls="collapseC9">
                              Pana Of #9
                            </button>
                          </div>
                          <div id="collapseC9" class="collapse bg-blue-grey bg-darken-4 rounded-bottom "
                            aria-labelledby="headingCNine">
                            <div class="card-body">
                              <div class="row  ">

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Ends 9 number pana -->

                        <!-- Starts 0 number pana -->

                        <div class="card badge-black pb-1 ">
                          <div class="card" id="headingCZero">
                            <button
                              class="w-100 btn btn-lg bg-info text-left text-black no-border-bottom-radius collapsed"
                              data-toggle="collapse" data-target="#collapseC0" aria-expanded="false"
                              aria-controls="collapseC0">
                              Pana Of #0
                            </button>
                          </div>
                          <div id="collapseC0" class="collapse bg-blue-grey bg-darken-3 rounded-bottom "
                            aria-labelledby="headingCZero">
                            <div class="card-body">
                              <div class="row  ">

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>
                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Ends 0 number pana -->
                      </div>
                    </div>

                    <!-- Ends Collapse pana menu  -->
                    <div class="input-group pb-2">
                      <div class="input-group-prepend">
                        <span class="badge-info input-group-text font-weight-bold font-20px py-0 p-4-x">Pana
                          Total⇢</span>
                      </div>
                      <input type="text"
                        class="py-2 px-0 form-control text-center font-weight-bold badge-light font-20px"
                        value="1+2+3+4+5+6+7+8+9+0" placeholder="Open Total" readonly>
                    </div>
                  </div>
                  <!-- Ends of pana's tab  -->


                  <!-- Start of jodi's tab  -->

                  <div class="tab-pane Game-unit-container fade" id="nav-Jodi" role="tabpanel"
                    aria-labelledby="nav-Jodi-tab">
                    <div class="input-group pb-2">
                      <input type="text"
                        class="p-2 border-0 no-border-top-radius bg-primary darken-4 form-control text-center font-weight-bold badge-dark font-20px"
                        value="⇣  Write your Jodi  ⇣" placeholder="Open Total" readonly>
                    </div>



                    <!-- Starts Collapse jodi menu  -->

                    <div id="collapse3" class="card-accordion">
                      <div class="card badge-black collapse-icon accordion-icon-rotate">


                        <!-- Starts 0-9 number jodi -->

                        <div class="card badge-black pb-1 ">
                          <div class="card" id="headingCJodi0-9">
                            <button
                              class="w-100 btn btn-lg bg-primary bg-darken-4 text-left text-white no-border-bottom-radius collapsed"
                              data-toggle="collapse" data-target="#collapseC0-9" aria-expanded="false"
                              aria-controls="collapseC0-9">
                              jodi Of #0-9
                            </button>
                          </div>
                          <div id="collapseC0-9" class="collapse show bg-blue-grey bg-darken-4 rounded-bottom "
                            aria-labelledby="headingCJodi0-9">
                            <div class="card-body">
                              <div class="row  ">

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Ends 0-9 number jodi -->

                        <!-- Starts 10-19 number jodi -->

                        <div class="card badge-black pb-1 ">
                          <div class="card" id="headingCJodi10-19">
                            <button
                              class="w-100 btn btn-lg bg-primary text-left text-black no-border-bottom-radius collapsed"
                              data-toggle="collapse" data-target="#collapseC10-19" aria-expanded="false"
                              aria-controls="collapseC10-19">
                              jodi Of #10-19
                            </button>
                          </div>
                          <div id="collapseC10-19" class="collapse bg-blue-grey bg-darken-3 rounded-bottom "
                            aria-labelledby="headingCJodi10-19">
                            <div class="card-body">
                              <div class="row  ">

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Ends 10-19 number jodi -->

                        <!-- Starts 20-29 number jodi -->

                        <div class="card badge-black pb-1 ">
                          <div class="card" id="headingCJodi20-29">
                            <button
                              class="w-100 btn btn-lg bg-primary bg-darken-4 text-left text-white no-border-bottom-radius collapsed"
                              data-toggle="collapse" data-target="#collapseC20-29" aria-expanded="false"
                              aria-controls="collapseC20-29">
                              jodi Of #20-29
                            </button>
                          </div>
                          <div id="collapseC20-29" class="collapse bg-blue-grey bg-darken-4 rounded-bottom "
                            aria-labelledby="headingCJodi20-29">
                            <div class="card-body">
                              <div class="row  ">

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Ends 20-29 number jodi -->

                        <!-- Starts 30-39 number jodi -->

                        <div class="card badge-black pb-1 ">
                          <div class="card" id="headingCJodi30-39">
                            <button
                              class="w-100 btn btn-lg bg-primary text-left text-black no-border-bottom-radius collapsed"
                              data-toggle="collapse" data-target="#collapseC30-39" aria-expanded="false"
                              aria-controls="collapseC30-39">
                              jodi Of #30-39
                            </button>
                          </div>
                          <div id="collapseC30-39" class="collapse bg-blue-grey bg-darken-3 rounded-bottom "
                            aria-labelledby="headingCJodi30-39">
                            <div class="card-body">
                              <div class="row  ">

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Ends 30-39 number jodi -->

                        <!-- Starts 40-49 number jodi -->

                        <div class="card badge-black pb-1 ">
                          <div class="card" id="headingCJodi40-49">
                            <button
                              class="w-100 btn btn-lg bg-primary bg-darken-4 text-left text-white no-border-bottom-radius collapsed"
                              data-toggle="collapse" data-target="#collapseC40-49" aria-expanded="false"
                              aria-controls="collapseC40-49">
                              jodi Of #40-49
                            </button>
                          </div>
                          <div id="collapseC40-49" class="collapse bg-blue-grey bg-darken-4 rounded-bottom "
                            aria-labelledby="headingCJodi40-49">
                            <div class="card-body">
                              <div class="row  ">

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Ends 40-49 number jodi -->

                        <!-- Starts 50-59 number jodi -->

                        <div class="card badge-black pb-1 ">
                          <div class="card" id="headingCJodi50-59">
                            <button
                              class="w-100 btn btn-lg bg-primary text-left text-black no-border-bottom-radius collapsed"
                              data-toggle="collapse" data-target="#collapseC50-59" aria-expanded="false"
                              aria-controls="collapseC50-59">
                              jodi Of #50-59
                            </button>
                          </div>
                          <div id="collapseC50-59" class="collapse bg-blue-grey bg-darken-3 rounded-bottom "
                            aria-labelledby="headingCJodi50-59">
                            <div class="card-body">
                              <div class="row  ">

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Ends 50-59 number jodi -->

                        <!-- Starts 60-69 number jodi -->

                        <div class="card badge-black pb-1 ">
                          <div class="card" id="headingCJodi60-69">
                            <button
                              class="w-100 btn btn-lg bg-primary bg-darken-4 text-left text-white no-border-bottom-radius collapsed"
                              data-toggle="collapse" data-target="#collapseC60-69" aria-expanded="false"
                              aria-controls="collapseC60-69">
                              jodi Of #60-69
                            </button>
                          </div>
                          <div id="collapseC60-69" class="collapse bg-blue-grey bg-darken-4 rounded-bottom "
                            aria-labelledby="headingCJodi60-69">
                            <div class="card-body">
                              <div class="row  ">

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Ends 60-69 number jodi -->

                        <!-- Starts 70-79 number jodi -->

                        <div class="card badge-black pb-1 ">
                          <div class="card" id="headingCJodi70-79">
                            <button
                              class="w-100 btn btn-lg bg-primary text-left text-black no-border-bottom-radius collapsed"
                              data-toggle="collapse" data-target="#collapseC70-79" aria-expanded="false"
                              aria-controls="collapseC70-79">
                              jodi Of #70-79
                            </button>
                          </div>
                          <div id="collapseC70-79" class="collapse bg-blue-grey bg-darken-3 rounded-bottom "
                            aria-labelledby="headingCJodi70-79">
                            <div class="card-body">
                              <div class="row  ">

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Ends 70-79 number jodi -->

                        <!-- Starts 80-89 number jodi -->

                        <div class="card badge-black pb-1 ">
                          <div class="card" id="headingCJodi80-89">
                            <button
                              class="w-100 btn btn-lg bg-primary bg-darken-4 text-left text-white no-border-bottom-radius collapsed"
                              data-toggle="collapse" data-target="#collapseC80-89" aria-expanded="false"
                              aria-controls="collapseC80-89">
                              jodi Of #80-89
                            </button>
                          </div>
                          <div id="collapseC80-89" class="collapse bg-blue-grey bg-darken-4 rounded-bottom "
                            aria-labelledby="headingCJodi80-89">
                            <div class="card-body">
                              <div class="row  ">

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary bg-primary bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Ends 80-89 number jodi -->

                        <!-- Starts 90-99 number jodi -->

                        <div class="card badge-black pb-1 ">
                          <div class="card" id="headingCJodi90-99">
                            <button
                              class="w-100 btn btn-lg bg-primary text-left text-black no-border-bottom-radius collapsed"
                              data-toggle="collapse" data-target="#collapseC90-99" aria-expanded="false"
                              aria-controls="collapseC90-99">
                              jodi Of #90-99
                            </button>
                          </div>
                          <div id="collapseC90-99" class="collapse bg-blue-grey bg-darken-3 rounded-bottom "
                            aria-labelledby="headingCJodi90-99">
                            <div class="card-body">
                              <div class="row  ">

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-primary text-black input-group-text font-weight-bold font-20px py-0 p-4-x">99⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark font-20px"
                                    value="" maxlength="5">
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Ends 90-99 number jodi -->
                      </div>
                    </div>
                    <!-- Ends Collapse jodi menu  -->
                    <div class="input-group pb-2">
                      <div class="input-group-prepend">
                        <span class="badge-primary input-group-text font-weight-bold font-20px py-0 p-4-x">Jodi
                          Total⇢</span>
                      </div>
                      <input type="text"
                        class="py-2 px-0 form-control text-center font-weight-bold badge-light font-20px"
                        value="1+2+3+4+5+6+7+8+9+0" placeholder="Open Total" readonly>
                    </div>
                  </div>
                  <!-- Ends of jodi's tab  -->

                  <!-- Starts of Total's tab  -->
                  <div class="tab-pane Game-unit-container fade" id="nav-Total" role="tabpanel"
                    aria-labelledby="nav-Total-tab">
                    <div class="input-group pb-2">
                      <input type="text"
                        class="p-2 border-0 no-border-top-radius bg-red bg-darken-4 text-white form-control text-center font-weight-bold font-20px"
                        value="⇣  Here Is Your Total  ⇣" placeholder="Close Total" readonly>
                    </div>

                    <div class="input-group pb-2 ">
                      <button class="btn btn-success btn-lg w-100 font-weight-bold"><i class="icon-paper-plane"></i>
                        Submit
                        Game</button>
                    </div>

                    <div class="mb-2 border-3 border-white rounded-lg bg-white">

                      <div class="w-100 rounded border border-black bg-white ">
                        <div class="p-1 text-uppercase text-center font-weight-bold font-20px text-dark ">
                          ⇣ Open ⇣
                        </div>
                      </div>

                      <div class="p-4-t">
                        <div class="w-100 rounded border border-dark bg-light bg-accent-1 p-4-y ">
                          <div class="p-4-y text-uppercase text-center font-weight-bold font-20px text-black ">
                            Open Result:- <b class="text-red">123⇢6</b>
                          </div>
                        </div>
                      </div>

                      <div class="p-4-t">
                        <div class="input-group row m-0 ">
                          <div class="input-group-prepend p-0 col-5 col-sm-4 col-md-3 col-lg-4 col-xl-3 ">
                            <span
                              class="w-100 badge-warning text-dark input-group-text font-weight-bold font-20px py-0 p-4-x">
                              Figure Total⇢</span>
                          </div>
                          <input type="text"
                            class="col-7 col-sm-8 col-md-9 col-lg-8 col-xl-9 py-2 px-0 form-control text-center font-weight-bold bg-amber bg-accent-4 text-black font-20px"
                            value="Open Figure Total" placeholder="Open Figure Total" readonly>
                        </div>
                      </div>

                      <div class="p-4-t">
                        <div class="input-group row m-0 ">
                          <div class="input-group-prepend p-0 col-5 col-sm-4 col-md-3 col-lg-4 col-xl-3 ">
                            <span
                              class="w-100 badge-info text-dark input-group-text font-weight-bold font-20px py-0 p-4-x">
                              Pana Total⇢</span>
                          </div>
                          <input type="text"
                            class="col-7 col-sm-8 col-md-9 col-lg-8 col-xl-9 py-2 px-0 form-control text-center font-weight-bold bg-info bg-darken-3 text-black font-20px"
                            value="Open Pana Total" placeholder="Open Pana Total" readonly>
                        </div>
                      </div>

                      <div class="p-4-t">
                        <div class="input-group row m-0 ">
                          <div class="input-group-prepend p-0 col-5 col-sm-4 col-md-3 col-lg-4 col-xl-3 ">
                            <span
                              class="w-100 badge-primary text-light input-group-text font-weight-bold font-20px py-0 p-4-x">
                              Jodi Total⇢</span>
                          </div>
                          <input type="text"
                            class="col-7 col-sm-8 col-md-9 col-lg-8 col-xl-9 py-2 px-0 form-control text-center font-weight-bold bg-primary bg-lighten-2 text-black font-20px"
                            value="Open Jodi Total" placeholder="Open Jodi Total" readonly>
                        </div>
                      </div>

                      <div class="p-4-y">
                        <div class="input-group row m-0 ">
                          <div class="input-group-prepend p-0 col-5 col-sm-4 col-md-3 col-lg-4 col-xl-3 ">
                            <span
                              class="w-100 bg-blue-grey border-dark text-white input-group-text font-weight-bold font-20px py-0 p-4-x">
                              Open Total ⇉</span>
                          </div>
                          <input type="text"
                            class="col-7 col-sm-8 col-md-9 col-lg-8 col-xl-9 py-2 px-0 form-control text-center font-weight-bold bg-blue-grey bg-darken-1 border-dark text-white font-20px"
                            value="Figure + Pana + Jodi" placeholder="Figure + Pana + Jodi" readonly>
                        </div>
                      </div>

                    </div>

                  </div>
                  <!-- Ends of Total's tab  -->

                </div>
              </div>
            </div>
            <!-- ends Tabs -->



          </div>
        </div>
      </div>

      <!-- End Double Result Game  -->

    </section>


  </div>
</div>

@include('header.footer_head')
@include('header.footer_toe')