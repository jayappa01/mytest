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
              <h4 class="text-uppercase font-weight-bolder line-height-1 text-white ">
                Buy The Guessing
              </h4>
              <h5 class="text-uppercase font-weight-bolder line-height-1 text-warning">
                <b class="success">Account</b> ₹ 4,500
              </h5>
              <p class="text-uppercase font-weight-bolder line-height-1 text-light">
                Recharge To Get Accurate Guessing
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

              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <a href="{{route('Payment-Method')}}">
                  <div class="card shadow bg-black mt-3">
                    <div class="card-content">
                      <div class="card-body ">
                        <div class="media d-flex mb-1">
                          <div>
                            <div
                              class=" overlayboxdiamond d-flex justify-content-center align-content-center border border-3 rounded "
                              style=" background-color:#fff;">
                              <i class=" position-absolute font-large-3 icon-bag mt-1 line-height-1"
                                style=" color:#FF394F;"></i>
                            </div>
                          </div>
                          <div class="media-body text-white text-right align-self-center">
                            <h2 class="text-capitalize font-weight-bolder maincardtitle" style=" color:#FF394F;">Basic
                            </h2>
                          </div>
                        </div>
                        <h3 class="text-white text-capitalize float-right font-medium-2 my-1">
                          Recharge of⇢ <b class="font-large-1" style=" color:#ff6f7f;">5000</b></h3>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <a href="{{route('Payment-Method')}}">
                  <div class="card shadow bg-black mt-3">
                    <div class="card-content">
                      <div class="card-body ">
                        <div class="media d-flex mb-1">
                          <div>
                            <div
                              class=" overlayboxdiamond d-flex justify-content-center align-content-center border border-3 rounded "
                              style=" background-color:#fff;">
                              <i class=" position-absolute font-large-3 icon-handbag mt-1 line-height-1"
                                style=" color:#FF394F;"></i>
                            </div>
                          </div>
                          <div class="media-body text-white text-right align-self-center">
                            <h2 class="text-capitalize font-weight-bolder maincardtitle" style=" color:#FF394F;">Deluxe
                            </h2>
                          </div>
                        </div>
                        <h3 class="text-white text-capitalize float-right font-medium-2 my-1">
                          Recharge of⇢ <b class="font-large-1" style=" color:#ff6f7f;">15,000</b></h3>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <a href="{{route('Payment-Method')}}">
                  <div class="card shadow bg-black mt-3">
                    <div class="card-content">
                      <div class="card-body ">
                        <div class="media d-flex mb-1">
                          <div>
                            <div
                              class=" overlayboxdiamond d-flex justify-content-center align-content-center border border-3 rounded "
                              style=" background-color:#fff;">
                              <i class=" position-absolute font-large-3 icon-briefcase mt-1 line-height-1"
                                style=" color:#FF394F;"></i>
                            </div>
                          </div>
                          <div class="media-body text-white text-right align-self-center">
                            <h2 class="text-capitalize font-weight-bolder maincardtitle" style=" color:#FF394F;">Premium
                            </h2>
                          </div>
                        </div>
                        <h3 class="text-white text-capitalize float-right font-medium-2 my-1">
                          Recharge of⇢ <b class="font-large-1" style=" color:#ff6f7f;">30,000</b></h3>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <a href="{{route('Payment-Method')}}">
                  <div class="card shadow bg-black mt-3">
                    <div class="card-content">
                      <div class="card-body ">
                        <div class="media d-flex mb-1">
                          <div>
                            <div
                              class=" overlayboxdiamond d-flex justify-content-center align-content-center border border-3 rounded "
                              style=" background-color:#fff;">
                              <i class=" position-absolute font-large-3 icon-pencil mt-1 line-height-1"
                                style=" color:#FF394F;"></i>
                            </div>
                          </div>
                          <div class="media-body text-white text-right align-self-center">
                            <h2 class="text-capitalize font-weight-bolder maincardtitle" style=" color:#FF394F;">Custom
                            </h2>
                          </div>
                        </div>
                        <h3 class="text-white text-capitalize float-right font-medium-2 my-1">
                          Recharge of⇢<b class="font-medium-2" style=" color:#ff6f7f;">Your choice</b></h3>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@include('header.footer_head')
@include('header.footer_toe')