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
                <i class="icon-game-controller"></i> See History
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

            <div class="w-100 d-flex justify-content-center p-0">

              <div class="col-12 col-xl-7 col-lg-7 col-md-11 col-sm-12 p-0">
                <div class="row p-0 m-0">
                  <h3 class="badge-dark rounded-top text-warning font-weight-bold p-4-y px-1 pt-1 m-0"><i
                      class="icon-calendar"></i> <?= date("d/m/Y") ?></h3>
                </div>
                <div class="badge-dark rounded-top no-border-top-left-radius text-center m-0 p-1">
                  <h2 class="p-0 m-0 text-white w-100 font-weight-bold text-uppercase pb-1 ">Game Name</h2>
                  <h3 class="p-0 m-0 text-danger font-weight-bold float-left"><i class="icon-clock"></i> 01.30 PM</h3>
                  <h3 class="m-0 float-right btn btn-red btn-sm font-medium-1 "><i class="icon-game-controller"></i>
                    123-6</h3>
                  <h4 class="p-0 p-4-y m-0 text-white font-weight-bold"><i class="icon-diamond"></i> Close </h4>
                </div>
                <div class="nav nav-tabs badge-dark  no-border-top-radius nav-justified" id="nav-tab" role="tablist">
                  <a class="nav-item Game-unit-tab " id="nav-Figure-tab" data-toggle="tab" href="#nav-Figure" role="tab"
                    aria-controls="nav-Figure" aria-selected="true">Figure</a>
                  <a class="nav-item Game-unit-tab" id="nav-Pana-tab" data-toggle="tab" href="#nav-Pana" role="tab"
                    aria-controls="nav-Pana" aria-selected="false">Pana</a>
                  <a class="nav-item Game-unit-tab active" id="nav-Total-tab" data-toggle="tab" href="#nav-Total"
                    role="tab" aria-controls="nav-Total" aria-selected="false">Total</a>
                </div>


                <div class="tab-content " id="nav-tabContent">
                  <div class="tab-pane Game-unit-container fade" id="nav-Figure" role="tabpanel"
                    aria-labelledby="nav-Figure-tab">

                    <div class="input-group pb-2">
                      <input type="text"
                        class="p-2 border-0 no-border-top-radius bg-warning darken-4 form-control text-center font-weight-bold badge-light font-20px"
                        value="⇣  Write your Figure  ⇣" placeholder="Close Total" readonly>
                    </div>
                    <div class="input-group p-4-b">
                      <div class="input-group-prepend">
                        <span class="badge-warning input-group-text font-weight-bold font-20px py-0">1⇢</span>
                      </div>
                      <input type="number" max="200000" min="0" oninput="validity.valid||(value='');"
                        class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                        value="123456789" maxlength="5" readonly>
                    </div>
                    <div class="input-group p-4-b">
                      <div class="input-group-prepend">
                        <span class="badge-warning input-group-text font-weight-bold font-20px py-0">2⇢</span>
                      </div>
                      <input type="number" max="200000" min="0" oninput="validity.valid||(value='');"
                        class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                        value="123456789" maxlength="5" readonly>
                    </div>
                    <div class="input-group p-4-b">
                      <div class="input-group-prepend">
                        <span class="badge-warning input-group-text font-weight-bold font-20px py-0">3⇢</span>
                      </div>
                      <input type="number" max="200000" min="0" oninput="validity.valid||(value='');"
                        class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                        value="123456789" maxlength="5" readonly>
                    </div>
                    <div class="input-group p-4-b">
                      <div class="input-group-prepend">
                        <span class="badge-warning input-group-text font-weight-bold font-20px py-0">4⇢</span>
                      </div>
                      <input type="number" max="200000" min="0" oninput="validity.valid||(value='');"
                        class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                        value="123456789" maxlength="5" readonly>
                    </div>
                    <div class="input-group p-4-b">
                      <div class="input-group-prepend">
                        <span class="badge-warning input-group-text font-weight-bold font-20px py-0">5⇢</span>
                      </div>
                      <input type="number" max="200000" min="0" oninput="validity.valid||(value='');"
                        class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                        value="123456789" maxlength="5" readonly>
                    </div>
                    <div class="input-group p-4-b figure-declared">
                      <div class="input-group-prepend">
                        <span class="badge-warning input-group-text font-weight-bold font-20px py-0">6⇢</span>
                      </div>
                      <input type="number" max="200000" min="0" oninput="validity.valid||(value='');"
                        class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                        value="123456789" maxlength="5" readonly>
                    </div>
                    <div class="input-group p-4-b">
                      <div class="input-group-prepend">
                        <span class="badge-warning input-group-text font-weight-bold font-20px py-0">7⇢</span>
                      </div>
                      <input type="number" max="200000" min="0" oninput="validity.valid||(value='');"
                        class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                        value="123456789" maxlength="5" readonly>
                    </div>
                    <div class="input-group p-4-b">
                      <div class="input-group-prepend">
                        <span class="badge-warning input-group-text font-weight-bold font-20px py-0">8⇢</span>
                      </div>
                      <input type="number" max="200000" min="0" oninput="validity.valid||(value='');"
                        class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                        value="123456789" maxlength="5" readonly>
                    </div>
                    <div class="input-group p-4-b">
                      <div class="input-group-prepend">
                        <span class="badge-warning input-group-text font-weight-bold font-20px py-0">9⇢</span>
                      </div>
                      <input type="number" max="200000" min="0" oninput="validity.valid||(value='');"
                        class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                        value="123456789" maxlength="5" readonly>
                    </div>
                    <div class="input-group pb-2">
                      <div class="input-group-prepend">
                        <span class="badge-warning input-group-text font-weight-bold font-20px py-0">0⇢</span>
                      </div>
                      <input type="number" max="200000" min="0" oninput="validity.valid||(value='');"
                        class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                        value="123456789" maxlength="5" readonly>
                    </div>
                    <div class="input-group pb-2">
                      <div class="input-group-prepend">
                        <span class="badge-warning input-group-text font-weight-bold font-20px py-0 p-4-x">Figure
                          Total⇢</span>
                      </div>
                      <input type="text"
                        class="py-2 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                        value="1+2+3+4+5+6+7+8+9+0" placeholder="Close Total" readonly>
                    </div>

                  </div>

                  <!-- Start of pana's tab  -->
                  <div class="tab-pane Game-unit-container fade" id="nav-Pana" role="tabpanel"
                    aria-labelledby="nav-Pana-tab">
                    <div class="input-group pb-2">
                      <input type="text"
                        class="p-2 border-0 no-border-top-radius bg-info darken-4 form-control text-center font-weight-bold badge-light font-20px"
                        value="⇣  Write your Pana  ⇣" placeholder="Close Total" readonly>
                    </div>


                    <!-- Starts Collapse pana menu  -->

                    <div id="collapse3" class="card-accordion">
                      <div class="card badge-black collapse-icon accordion-icon-rotate">


                        <!-- Starts 1 number pana -->

                        <div class="card badge-black pb-1 declared-pana ">
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

                                <div class="input-group p-4-b p-4-x w-50 declared-pana-num ">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="20" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="30" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="80" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="90" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
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
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>
                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
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
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
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
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>
                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
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
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
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
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>
                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
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
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
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
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>
                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
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
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info bg-info bg-darken-4 input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
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
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>
                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
                                </div>

                                <div class="input-group p-4-b p-4-x w-50">
                                  <div class="input-group-prepend">
                                    <span
                                      class="badge-info text-black input-group-text font-weight-bold font-20px py-0 p-4-x">123⇢</span>
                                  </div>
                                  <input placeholder="₹" type="number" max="10000" size="6" min="0"
                                    oninput="validity.valid||(value='');"
                                    class="py-1 px-0 form-control text-center font-weight-bold badge-dark text-black font-20px"
                                    value="" maxlength="5" readonly>
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
                        value="1+2+3+4+5+6+7+8+9+0" placeholder="Close Total" readonly>
                    </div>
                  </div>
                  <!-- Ends of pana's tab  -->




                  <!-- Starts of Total's tab  -->
                  <div class="tab-pane Game-unit-container fade show active" id="nav-Total" role="tabpanel"
                    aria-labelledby="nav-Total-tab">
                    <div class="input-group pb-2">
                      <input type="text"
                        class="p-2 border-0 no-border-top-radius bg-red bg-darken-4 text-white form-control text-center font-weight-bold font-20px"
                        value="⇣  Here Is Your Total  ⇣" placeholder="Close Total" readonly>
                    </div>






                    <div class="my-2 p-3 border boredr-light w-100 text-center text-light rounded-lg">
                      ⇣ ⇣ ⇣ ⇣ Type - A Hisab ⇣ ⇣ ⇣ ⇣
                    </div>




                    <div class="mb-2 border-3 border border-black rounded-lg bg-black">

                      <div class="w-100 rounded border border-white bg-dark ">
                        <div class="p-1 text-uppercase text-center font-weight-bold font-20px text-light ">
                          ⇣ Close ⇣
                        </div>
                      </div>

                      <div class="p-4-t">
                        <div class="w-100 rounded border border-light bg-secondary bg-accent-1 p-4-y ">
                          <div class="p-4-y text-uppercase text-center font-weight-bold font-20px text-white ">
                            Close Result:- <b class="text-warning">123⇢6</b>
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
                            value="Close Figure Total" placeholder="Close Figure Total" readonly>
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
                            value="Close Pana Total" placeholder="Close Pana Total" readonly>
                        </div>
                      </div>

                      <div class="p-4-y">
                        <div class="input-group row m-0 ">
                          <div class="input-group-prepend p-0 col-5 col-sm-4 col-md-3 col-lg-4 col-xl-3 ">
                            <span
                              class="w-100 bg-blue-grey border-white text-white input-group-text font-weight-bold font-20px py-0 p-4-x">
                              Close Total ⇉</span>
                          </div>
                          <input type="text"
                            class="col-7 col-sm-8 col-md-9 col-lg-8 col-xl-9 py-2 px-0 form-control text-center font-weight-bold bg-blue-grey bg-darken-1 border-white text-white font-20px"
                            value="Figure + Pana " placeholder="Figure + Pana" readonly>
                        </div>
                      </div>

                      <div class="rounded-sm border-danger border-lighten-2 bg-danger bg-lighten-3 p-4px w-100 mt-1">

                        <div class="p-4-t">
                          <div class="w-100 rounded-lg border-danger bg-danger bg-darken-3 p-4-y ">
                            <div
                              class="p-4-y text-uppercase text-center font-weight-bold font-20px-responsive font- text-black">
                              ⇣ Figure + Pana = <b class="text-white">Total Of Fasi</b> ⇣
                            </div>
                          </div>
                        </div>

                        <div class="p-4-t">
                          <div class="input-group row m-0 ">
                            <div class="input-group-prepend p-0 col-6 col-sm-5 col-md-4 col-lg-5 col-xl-4 ">
                              <span
                                class="w-100 bg-warning bg-lighten-2 border-red text-dark input-group-text font-weight-bold font-20px py-0 p-4-x">
                                Figure Fasi x 10 ⇉</span>
                            </div>
                            <input type="text"
                              class="col-6 col-sm-7 col-md-8 col-lg-7 col-xl-8 py-2 px-0 form-control text-center font-weight-bold bg-red bg-accent-2 border-red text-black font-20px"
                              value="Fasi Figure" placeholder="Fasi Figure" readonly>
                          </div>
                        </div>

                        <div class="p-4-t">
                          <div class="input-group row m-0 ">
                            <div class="input-group-prepend p-0 col-6 col-sm-5 col-md-4 col-lg-5 col-xl-4 ">
                              <span
                                class="w-100 bg-info bg-lighten-2 border-red text-dark input-group-text font-weight-bold font-20px py-0 p-4-x">
                                Fasi Pana ⇉</span>
                            </div>
                            <input type="text"
                              class="col-6 col-sm-7 col-md-8 col-lg-7 col-xl-8 py-2 px-0 form-control text-center font-weight-bold bg-red bg-accent-2 border-red text-black font-20px"
                              value="Fasi Pana" placeholder="Fasi Pana" readonly>
                          </div>
                        </div>

                        <div class="p-4-t">
                          <div class="input-group row m-0 ">
                            <div class="input-group-prepend p-0 col-6 col-sm-5 col-md-4 col-lg-5 col-xl-4 ">
                              <span
                                class="w-100 bg-red bg-darken-2 border-white text-white input-group-text font-weight-bold font-20px py-0 p-4-x">
                                Total Of Fasi ⇉</span>
                            </div>
                            <input type="text"
                              class="col-6 col-sm-7 col-md-8 col-lg-7 col-xl-8 py-2 px-0 form-control text-center font-weight-bold bg-danger bg-darken-4 border-white text-white font-20px"
                              value="Figure + Pana" placeholder="Figure + Pana" readonly>
                          </div>
                        </div>

                      </div>

                      <div class="rounded-sm border-warning border-lighten-2 bg-warning bg-lighten-3 p-4px w-100 mt-1">

                        <div class="p-4-t">
                          <div class="w-100 rounded-lg border-warning bg-warning bg-darken-3 p-4-y ">
                            <div class="p-4-y text-uppercase text-center font-weight-bold font-20px-responsive ">
                              ⇣ Total Of Fasi - Total = <b class="text-black">Hisab</b> ⇣
                            </div>
                          </div>
                        </div>

                        <div class="p-4-t">
                          <div class="input-group row m-0 ">
                            <div class="input-group-prepend p-0 col-6 col-sm-5 col-md-4 col-lg-5 col-xl-4 ">
                              <span
                                class="w-100 bg-red bg-darken-2 border-dark text-white input-group-text font-weight-bold font-20px py-0 p-4-x">
                                Total Of Fasi ⇉</span>
                            </div>
                            <input type="text"
                              class="col-6 col-sm-7 col-md-8 col-lg-7 col-xl-8 py-2 px-0 form-control text-center font-weight-bold bg-danger bg-darken-4 border-dark text-white font-20px"
                              value="Figure + Pana " placeholder="Figure + Pana" readonly>
                          </div>
                        </div>

                        <div class="p-4-y">
                          <div class="input-group row m-0 ">
                            <div class="input-group-prepend p-0 col-6 col-sm-5 col-md-4 col-lg-5 col-xl-4 ">
                              <span
                                class="w-100 bg-blue-grey border-dark text-white input-group-text font-weight-bold font-20px py-0 p-4-x">
                                Close Total ⇉</span>
                            </div>
                            <input type="text"
                              class="col-6 col-sm-7 col-md-8 col-lg-7 col-xl-8 py-2 px-0 form-control text-center font-weight-bold bg-blue-grey bg-darken-1 border-dark text-white font-20px"
                              value="Figure + Pana" placeholder="Figure + Pana" readonly>
                          </div>
                        </div>

                        <div class="p-4-t">
                          <div class="input-group row m-0 ">
                            <div class="input-group-prepend p-0 col-6 col-sm-5 col-md-4 col-lg-5 col-xl-4 ">
                              <span
                                class="w-100 bg-warning bg-darken-2 border-white text-black input-group-text font-weight-bold font-20px py-0 p-4-x">
                                Hisab ⇉</span>
                            </div>
                            <input type="text"
                              class="col-6 col-sm-7 col-md-8 col-lg-7 col-xl-8 py-2 px-0 form-control text-center font-weight-bold bg-warning bg-darken-4 border-white text-white font-20px"
                              value="Fasi - Total" placeholder="Fasi - Total" readonly>
                          </div>
                        </div>

                      </div>

                      <div class="rounded-sm border border-black bg-dark bg-lighten-3 p-4px w-100 mt-1">

                        <div class="p-4-t">
                          <div class="w-100 rounded-lg border border-light bg-secondary bg-darken-3 p-4-y ">
                            <div
                              class="p-4-y text-uppercase text-center font-weight-bold font-20px-responsive text-white ">
                              ⇣ Hisab ⇣
                            </div>
                          </div>
                        </div>

                        <div class="p-4-t my-1">
                          <div class="input-group row m-0 ">
                            <div class="input-group-prepend p-0 col-5 col-sm-4 col-md-3 col-lg-4 col-xl-3 ">
                              <span
                                class="w-100 bg-black border border-success text-success input-group-text font-weight-bold font-20px py-0 p-4-x">
                                Lena ⇉</span>
                            </div>
                            <input type="text"
                              class="col-7 col-sm-8 col-md-9 col-lg-8 col-xl-9 py-2 px-0 form-control text-center font-weight-bold bg-black border border-success text-success font-20px"
                              value="Balance Numbers" placeholder="Balance Numbers" readonly>
                          </div>
                        </div>

                        <div class="p-4-t w-100 text-center text-light">
                          OR
                        </div>

                        <div class="p-4-t my-1">
                          <div class="input-group row m-0 ">
                            <div class="input-group-prepend p-0 col-5 col-sm-4 col-md-3 col-lg-4 col-xl-3 ">
                              <span
                                class="w-100 bg-black border border-danger text-danger input-group-text font-weight-bold font-20px py-0 p-4-x">
                                Dena ⇉</span>
                            </div>
                            <input type="text"
                              class="col-7 col-sm-8 col-md-9 col-lg-8 col-xl-9 py-2 px-0 form-control text-center font-weight-bold bg-black border border-danger text-danger font-20px"
                              value="Balance Numbers" placeholder="Balance Numbers" readonly>
                          </div>
                        </div>

                      </div>

                    </div>







                    <div class="my-2 p-3 border boredr-light w-100 text-center text-light rounded-lg">
                      ⇣ ⇣ ⇣ ⇣ Type - B Hisab ⇣ ⇣ ⇣ ⇣
                    </div>









                    <div class="mb-2 border-3 border border-black rounded-lg bg-black">

                      <div class="w-100 rounded border border-white bg-dark ">
                        <div class="p-1 text-uppercase text-center font-weight-bold font-20px text-light ">
                          ⇣ Close ⇣
                        </div>
                      </div>

                      <div class="p-4-t">
                        <div class="w-100 rounded border border-light bg-secondary bg-accent-1 p-4-y ">
                          <div class="p-4-y text-uppercase text-center font-weight-bold font-20px text-white ">
                            Close Result:- <b class="text-warning">123⇢6</b>
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
                            value="Close Figure Total" placeholder="Close Figure Total" readonly>
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
                            value="Close Pana Total" placeholder="Close Pana Total" readonly>
                        </div>
                      </div>

                      <div class="p-4-t">
                        <div class="input-group row m-0 ">
                          <div class="input-group-prepend p-0 col-5 col-sm-4 col-md-3 col-lg-4 col-xl-3 ">
                            <span
                              class="w-100 bg-blue-grey bg-lighten-2 border-secondary text-dark input-group-text font-weight-bold font-20px py-0 p-4-x">
                              Close Total⇢</span>
                          </div>
                          <input type="text"
                            class="col-7 col-sm-8 col-md-9 col-lg-8 col-xl-9 py-2 px-0 form-control text-center font-weight-bold bg-blue-grey bg-lighten-3 border-secondary text-black font-20px"
                            value="Figure + Pana" placeholder="Figure + Pana" readonly>
                        </div>
                      </div>

                      <div class="rounded-sm bg-secondary p-4px w-100 mt-1">

                        <div class="p-4-t">
                          <div class="w-100 rounded-lg border-dark bg-dark bg-darken-3 p-4-y ">
                            <div
                              class="p-4-y text-uppercase text-center font-weight-bold font-20px-responsive text-light">
                              ⇣ Close Total - 10% = <b class="text-white">Total</b> ⇣
                            </div>
                          </div>
                        </div>

                        <div class="p-4-t">
                          <div class="input-group row m-0 ">
                            <div class="input-group-prepend p-0 col-6 col-sm-5 col-md-4 col-lg-5 col-xl-4 ">
                              <span
                                class="w-100 bg-blue-grey bg-lighten-2 border-secondary text-dark input-group-text font-weight-bold font-20px py-0 p-4-x">
                                Close Total⇢</span>
                            </div>
                            <input type="text"
                              class="col-6 col-sm-7 col-md-8 col-lg-7 col-xl-8 py-2 px-0 form-control text-center font-weight-bold bg-blue-grey bg-lighten-3 border-secondary text-black font-20px"
                              value="Figure + Pana" placeholder="Figure + Pana" readonly>
                          </div>
                        </div>

                        <div class="p-4-t">
                          <div class="input-group row m-0 ">
                            <div class="input-group-prepend p-0 col-6 col-sm-5 col-md-4 col-lg-5 col-xl-4 ">
                              <span
                                class="w-100 bg-blue-grey bg-lighten-3 border-light text-dark input-group-text font-weight-bold font-20px py-0 p-4-x">
                                <b class="text-black">↳</b>10% Off ⇉</span>
                            </div>
                            <input type="text"
                              class="col-6 col-sm-7 col-md-8 col-lg-7 col-xl-8 py-2 px-0 form-control text-center font-weight-bold bg-blue-grey bg-lighten-4 border-light text-dark font-20px"
                              value="10% of Total" placeholder="10% of Total" readonly>
                          </div>
                        </div>

                        <div class="p-4-y">
                          <div class="input-group row m-0 ">
                            <div class="input-group-prepend p-0 col-6 col-sm-5 col-md-4 col-lg-5 col-xl-4 ">
                              <span
                                class="w-100 bg-blue-grey border-white text-white input-group-text font-weight-bold font-20px py-0 p-4-x">
                                Total ⇉</span>
                            </div>
                            <input type="text"
                              class="col-6 col-sm-7 col-md-8 col-lg-7 col-xl-8 py-2 px-0 form-control text-center font-weight-bold bg-blue-grey bg-darken-1 border-white text-white font-20px"
                              value="Total - 10% of Total" placeholder="Total - 10% of Total" readonly>
                          </div>
                        </div>

                      </div>

                      <div class="rounded-sm border-danger border-lighten-2 bg-danger bg-lighten-3 p-4px w-100 mt-1">

                        <div class="p-4-t">
                          <div class="w-100 rounded-lg border-danger bg-danger bg-darken-3 p-4-y ">
                            <div
                              class="p-4-y text-uppercase text-center font-weight-bold font-20px-responsive font- text-black">
                              ⇣ Figure + Pana = <b class="text-white">Total Of Fasi</b> ⇣
                            </div>
                          </div>
                        </div>

                        <div class="p-4-t">
                          <div class="input-group row m-0 ">
                            <div class="input-group-prepend p-0 col-6 col-sm-5 col-md-4 col-lg-5 col-xl-4 ">
                              <span
                                class="w-100 bg-warning bg-lighten-2 border-red text-dark input-group-text font-weight-bold font-20px py-0 p-4-x">
                                Figure Fasi x 9 ⇉</span>
                            </div>
                            <input type="text"
                              class="col-6 col-sm-7 col-md-8 col-lg-7 col-xl-8 py-2 px-0 form-control text-center font-weight-bold bg-red bg-accent-2 border-red text-black font-20px"
                              value="Fasi Figure" placeholder="Fasi Figure" readonly>
                          </div>
                        </div>

                        <div class="p-4-t">
                          <div class="input-group row m-0 ">
                            <div class="input-group-prepend p-0 col-6 col-sm-5 col-md-4 col-lg-5 col-xl-4 ">
                              <span
                                class="w-100 bg-info bg-lighten-2 border-red text-dark input-group-text font-weight-bold font-20px py-0 p-4-x">
                                Fasi Pana ⇉</span>
                            </div>
                            <input type="text"
                              class="col-6 col-sm-7 col-md-8 col-lg-7 col-xl-8 py-2 px-0 form-control text-center font-weight-bold bg-red bg-accent-2 border-red text-black font-20px"
                              value="Fasi Pana" placeholder="Fasi Pana" readonly>
                          </div>
                        </div>

                        <div class="p-4-t">
                          <div class="input-group row m-0 ">
                            <div class="input-group-prepend p-0 col-6 col-sm-5 col-md-4 col-lg-5 col-xl-4 ">
                              <span
                                class="w-100 bg-red bg-darken-2 border-white text-white input-group-text font-weight-bold font-20px py-0 p-4-x">
                                Total Of Fasi ⇉</span>
                            </div>
                            <input type="text"
                              class="col-6 col-sm-7 col-md-8 col-lg-7 col-xl-8 py-2 px-0 form-control text-center font-weight-bold bg-danger bg-darken-4 border-white text-white font-20px"
                              value="Figure + Pana" placeholder="Figure + Pana" readonly>
                          </div>
                        </div>

                      </div>

                      <div class="rounded-sm border-warning border-lighten-2 bg-warning bg-lighten-3 p-4px w-100 mt-1">

                        <div class="p-4-t">
                          <div class="w-100 rounded-lg border-warning bg-warning bg-darken-3 p-4-y ">
                            <div class="p-4-y text-uppercase text-center font-weight-bold font-20px-responsive ">
                              ⇣ Total Of Fasi - Total = <b class="text-black">Hisab</b> ⇣
                            </div>
                          </div>
                        </div>

                        <div class="p-4-t">
                          <div class="input-group row m-0 ">
                            <div class="input-group-prepend p-0 col-6 col-sm-5 col-md-4 col-lg-5 col-xl-4 ">
                              <span
                                class="w-100 bg-red bg-darken-2 border-dark text-white input-group-text font-weight-bold font-20px py-0 p-4-x">
                                Total Of Fasi ⇉</span>
                            </div>
                            <input type="text"
                              class="col-6 col-sm-7 col-md-8 col-lg-7 col-xl-8 py-2 px-0 form-control text-center font-weight-bold bg-danger bg-darken-4 border-dark text-white font-20px"
                              value="Figure + Pana" placeholder="Figure + Pana" readonly>
                          </div>
                        </div>

                        <div class="p-4-y">
                          <div class="input-group row m-0 ">
                            <div class="input-group-prepend p-0 col-6 col-sm-5 col-md-4 col-lg-5 col-xl-4 ">
                              <span
                                class="w-100 bg-blue-grey border-dark text-white input-group-text font-weight-bold font-20px py-0 p-4-x">
                                Total ⇉</span>
                            </div>
                            <input type="text"
                              class="col-6 col-sm-7 col-md-8 col-lg-7 col-xl-8 py-2 px-0 form-control text-center font-weight-bold bg-blue-grey bg-darken-1 border-dark text-white font-20px"
                              value="Figure + Pana" placeholder="Figure + Pana" readonly>
                          </div>
                        </div>

                        <div class="p-4-t">
                          <div class="input-group row m-0 ">
                            <div class="input-group-prepend p-0 col-6 col-sm-5 col-md-4 col-lg-5 col-xl-4 ">
                              <span
                                class="w-100 bg-warning bg-darken-2 border-white text-black input-group-text font-weight-bold font-20px py-0 p-4-x">
                                Hisab ⇉</span>
                            </div>
                            <input type="text"
                              class="col-6 col-sm-7 col-md-8 col-lg-7 col-xl-8 py-2 px-0 form-control text-center font-weight-bold bg-warning bg-darken-4 border-white text-white font-20px"
                              value="Fasi - Total" placeholder="Fasi - Total" readonly>
                          </div>
                        </div>

                      </div>

                      <div class="rounded-sm border border-black bg-dark bg-lighten-3 p-4px w-100 mt-1">

                        <div class="p-4-t">
                          <div class="w-100 rounded-lg border border-light bg-secondary bg-darken-3 p-4-y ">
                            <div
                              class="p-4-y text-uppercase text-center font-weight-bold font-20px-responsive text-white ">
                              ⇣ Hisab ⇣
                            </div>
                          </div>
                        </div>

                        <div class="p-4-t my-1">
                          <div class="input-group row m-0 ">
                            <div class="input-group-prepend p-0 col-5 col-sm-4 col-md-3 col-lg-4 col-xl-3 ">
                              <span
                                class="w-100 bg-black border border-success text-success input-group-text font-weight-bold font-20px py-0 p-4-x">
                                Lena ⇉</span>
                            </div>
                            <input type="text"
                              class="col-7 col-sm-8 col-md-9 col-lg-8 col-xl-9 py-2 px-0 form-control text-center font-weight-bold bg-black border border-success text-success font-20px"
                              value="Balance Numbers" placeholder="Balance Numbers" readonly>
                          </div>
                        </div>

                        <div class="p-4-t w-100 text-center text-light">
                          OR
                        </div>

                        <div class="p-4-t my-1">
                          <div class="input-group row m-0 ">
                            <div class="input-group-prepend p-0 col-5 col-sm-4 col-md-3 col-lg-4 col-xl-3 ">
                              <span
                                class="w-100 bg-black border border-danger text-danger input-group-text font-weight-bold font-20px py-0 p-4-x">
                                Dena ⇉</span>
                            </div>
                            <input type="text"
                              class="col-7 col-sm-8 col-md-9 col-lg-8 col-xl-9 py-2 px-0 form-control text-center font-weight-bold bg-black border border-danger text-danger font-20px"
                              value="Balance Numbers" placeholder="Balance Numbers" readonly>
                          </div>
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