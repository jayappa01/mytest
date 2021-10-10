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
              <h4 class="text-uppercase font-weight-bolder line-height-1 text-info ">
                Withdrawal The Amount
              </h4>
              <h5 class="text-uppercase font-weight-bolder line-height-1 text-warning">
                <b class="success">Account</b> ₹ 4,500
              </h5>
              <p class="text-uppercase font-weight-bolder line-height-1 text-light">
                Select Withdrawaling Type
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
                <a href="" data-toggle="modal" data-target="#wedrlSuperFast">
                  <div class="card shadow bg-black mt-3">
                    <div class="card-content">
                      <div class="card-body ">
                        <div class="media d-flex mb-1">
                          <div>
                            <div
                              class=" overlayboxoncard d-flex justify-content-center align-content-center border border-3 rounded "
                              style=" background-color:#1283EC;">
                              <i class="font-large-3 icon-energy mt-2 line-height-1" style=" color:#000;"></i>
                            </div>
                          </div>
                          <div class="media-body text-white text-right align-self-center">
                            <h2 class="text-capitalize font-weight-bolder maincardtitle" style=" color:#1283EC;">
                              Withdrawal<br><b class="text-white">Super Fast</b></h2>
                          </div>
                        </div>
                        <h3 class="text-white text-capitalize text-left font-small-2 my-1">
                          Charge ⇢ <b class="font-medium-2" style=" color:#0A72E8;">₹5</b> per⇢ <b class="font-medium-2"
                            style=" color:#0A72E8;">₹1000</b>
                        </h3>


                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-xl-6 col-lg-6 col-md-12 ">
                <a href="" data-toggle="modal" data-target="#wedrlNormal">
                  <div class="card shadow bg-black mt-3">
                    <div class="card-content">
                      <div class="card-body ">
                        <div class="media d-flex mb-1">
                          <div>
                            <div
                              class=" overlayboxoncard d-flex justify-content-center align-content-center border border-3 rounded "
                              style=" background-color:#000;">
                              <i class="font-large-3 icon-cup mt-2 line-height-1" style=" color:#1283EC;"></i>
                            </div>
                          </div>
                          <div class="media-body text-white text-right align-self-center">
                            <h2 class="text-capitalize font-weight-bolder maincardtitle" style=" color:#1283EC;">
                              Withdrawal<br>After <b class="text-white">24 Hour</b></h2>
                          </div>
                        </div>
                        <h3 class="text-white text-capitalize text-left font-small-2 my-1">
                          Charge ⇢ <b class="font-medium-2" style=" color:#0A72E8;">₹0</b>
                        </h3>
                      </div>
                    </div>
                </a>
              </div>



            </div>
            <style>

            </style>

            <!-- Modal Super Fast -->
            <div class="modal fade" id="wedrlSuperFast" tabindex="-1" role="dialog"
              aria-labelledby="wedrlSuperFastTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="card shadow mt-3" style=" background-color:#1283EC;">
                      <div class="card-content">
                        <div class="text-right">
                          <button type="button" class="btn btn-sm btn-outline-black font-small-3" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <h3 class="text-white text-capitalize text-right font-small-2 mt-1 mr-1">
                          Charge ⇢ <b class="font-medium-2" style=" color:#000;">₹5</b> per⇢ <b class="font-medium-2"
                            style=" color:#000;">₹1000</b>
                        </h3>
                        <div class="card-body ">

                          <div class="media d-flex mb-1">
                            <div>
                              <div
                                class=" overlayboxoncard d-flex justify-content-center align-content-center border border-3 rounded bg-black ">
                                <i class="font-large-3 icon-energy mt-2 line-height-1" style=" color:#1283EC;"></i>
                              </div>
                            </div>
                            <div class="media-body text-white text-center align-self-center">
                              <h1 class="text-capitalize font-weight-bolder " style=" color:#000;">
                                Withdrawal <b class="text-white">Super Fast</b></h1>
                            </div>
                          </div>
                          <div class="w-100 d-flex align-content-center justify-content-center">
                            <div class="col-12 p-0 pt-1 px-sm-0 pb-sm-0 p-md-1 border border-light rounded border-2">
                              <form method="post" action="{{route('Paytm-Gateway')}}"
                                class="was-validated d-flex justify-content-around flex-wrap">
                                <div class="col-12 ">
                                  <h6 class="text-center text-white mt-1"> ⇣ Phone Number linked to your Account ⇣</h6>
                                  <div class="input-group p-4-x pt-1">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text font-20px py-0 p-4-x"><i
                                          class="icon-screen-smartphone"></i> ⇢</span>
                                    </div>
                                    <input minlength="10" max="9999999999" min="0" oninput="validity.valid||(value='');"
                                      placeholder="Phone Number" type="number"
                                      class=" font-20px py-2 px-0 form-control text-center font-weight-bold" required>
                                  </div>
                                  <h6 class="text-center text-white mt-1"> ⇣ Type Of Account Of Phone Number ⇣</h6>
                                  <div class="input-group p-4-x pt-1">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text font-20px py-0 p-4-x"><i class="icon-key"></i>
                                        ⇢</span>
                                    </div>
                                    <select class="custom-select font-20px font-weight-bold" name="Typeobank" required>
                                      <option selected value="">Select Type Of Account</option>
                                      <option value="paytm">Paytm</option>
                                      <option value="Google">Google Pay</option>
                                      <option value="Whatsapp">WhatsApp Pay</option>
                                      <option value="Phonepe">PhonePe</option>
                                    </select>
                                  </div>
                                  <h6 class="text-center text-white mt-1"> ⇣ Write the Amount you want to Withdrawal ⇣
                                  </h6>
                                  <div class="input-group p-4-x pt-1">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text font-20px py-0 p-4-x"> &nbsp; ₹ ⇢</span>
                                    </div>
                                    <input maxlength="7" max="2000000" min="0" oninput="validity.valid||(value='');"
                                      placeholder="Enter Amount" type="tel"
                                      class="font-20px py-2 px-0 form-control text-center font-weight-bold" required>
                                  </div>
                                </div>
                                <div class="col-12 py-2 d-flex justify-content-around">
                                  <button type="submit"
                                    class=" font-20px w-100 btn btn-black text-white">Request</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="modal fade" id="wedrlNormal" tabindex="-1" role="dialog" aria-labelledby="wedrlNormalTitle"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="card shadow mt-3 bg-dark">
                      <div class="card-content">
                        <div class="text-right">
                          <button type="button" class="btn btn-sm btn-outline-info font-small-3" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <h3 class="text-white text-capitalize text-right font-small-2 mt-1 mr-1">
                          Charge ⇢ <b class="font-medium-2" style=" color:#1283EC;">₹0</b>
                        </h3>
                        <div class="card-body ">

                          <div class="media d-flex mb-1">
                            <div>
                              <div
                                class=" overlayboxoncard d-flex justify-content-center align-content-center border border-3 rounded"
                                style=" background-color:#1283EC;">
                                <i class="font-large-3 icon-cup mt-2 line-height-1 text-black"></i>
                              </div>
                            </div>
                            <div class="media-body text-white text-center align-self-center">
                              <h1 class="text-capitalize font-weight-bolder " style=" color:#1283EC;">
                                Withdrawal <br><b class="text-white">After 24 Hour</b></h1>
                            </div>
                          </div>
                          <div class="w-100 d-flex align-content-center justify-content-center">
                            <div class="col-12 p-0 pt-1 px-sm-0 pb-sm-0 p-md-1 border border-dark rounded border-2">
                              <form method="post" action="{{route('Paytm-Gateway')}}"
                                class="was-validated d-flex justify-content-around flex-wrap">
                                <div class="col-12 ">
                                  <h6 class="text-center text-white mt-1"> ⇣ Phone Number linked to your Account ⇣</h6>
                                  <div class="input-group p-4-x pt-1">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text font-20px py-0 p-4-x"><i
                                          class="icon-screen-smartphone"></i> ⇢</span>
                                    </div>
                                    <input minlength="10" max="9999999999" min="0" oninput="validity.valid||(value='');"
                                      placeholder="Phone Number" type="number"
                                      class=" font-20px py-2 px-0 form-control text-center font-weight-bold" required>
                                  </div>
                                  <h6 class="text-center text-white mt-1"> ⇣ Type Of Account Of Phone Number ⇣</h6>
                                  <div class="input-group p-4-x pt-1">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text font-20px py-0 p-4-x"><i class="icon-key"></i>
                                        ⇢</span>
                                    </div>
                                    <select class="custom-select font-20px font-weight-bold" name="Typeobank" required>
                                      <option selected value="">Select Type Of Account</option>
                                      <option value="paytm">Paytm</option>
                                      <option value="Google">Google Pay</option>
                                      <option value="Whatsapp">WhatsApp Pay</option>
                                      <option value="Phonepe">PhonePe</option>
                                    </select>
                                  </div>
                                  <h6 class="text-center text-white mt-1"> ⇣ Write the Amount you want to Withdrawal ⇣
                                  </h6>
                                  <div class="input-group p-4-x pt-1">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text font-20px py-0 p-4-x"> &nbsp; ₹ ⇢</span>
                                    </div>
                                    <input maxlength="7" max="2000000" min="0" oninput="validity.valid||(value='');"
                                      placeholder="Enter Amount" type="tel"
                                      class="font-20px py-2 px-0 form-control text-center font-weight-bold" required>
                                  </div>
                                </div>
                                <div class="col-12 py-2 d-flex justify-content-around">
                                  <button type="submit" class=" font-20px w-100 btn text-black"
                                    style=" background-color:#1283EC;">Request</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Ends Modal Super Fast -->

          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@include('header.footer_head')
@include('header.footer_toe')