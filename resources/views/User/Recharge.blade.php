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
                Recharge The Balance
              </h4>
              <h5 class="text-uppercase font-weight-bolder line-height-1 text-warning">
                <b class="success">Account</b> ₹ 4,500
              </h5>
              <p class="text-uppercase font-weight-bolder line-height-1 text-light">
                Recharge To win
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
                  <div class="card shadow mt-2">
                    <div class="card-content">
                      <div class="card-body ">
                        <div class="media d-flex mb-1">
                          <div>
                            <div
                              class=" overlaycirleoncard d-flex justify-content-center align-content-center border border-3 rounded-circle"
                              style=" background-color:#00e6c4;">
                              <i class="font-large-3 icon-paper-plane mt-2 line-height-1"></i>
                            </div>
                          </div>
                          <div class="media-body text-white text-right align-self-center">
                            <h2 class="text-capitalize font-weight-bolder maincardtitle" style=" color:#00897B;">Basic
                            </h2>
                          </div>
                        </div>
                        <h3 class="text-black text-capitalize float-right font-medium-2 my-1">
                          Recharge of⇢ <b class="font-large-1" style=" color:#006359;">500</b></h3>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <a href="{{route('Payment-Method')}}">
                  <div class="card shadow mt-2">
                    <div class="card-content">
                      <div class="card-body ">
                        <div class="media d-flex mb-1">
                          <div>
                            <div
                              class=" overlaycirleoncard d-flex justify-content-center align-content-center border border-3 rounded-circle"
                              style=" background-color:#00e6c4;">
                              <i class="font-large-3 icon-plane mt-2 line-height-1"></i>
                            </div>
                          </div>
                          <div class="media-body text-white text-right align-self-center">
                            <h2 class="text-capitalize font-weight-bolder maincardtitle" style=" color:#00897B;">Deluxe
                            </h2>
                          </div>
                        </div>
                        <h3 class="text-black text-capitalize float-right font-medium-2 my-1">
                          Recharge of⇢ <b class="font-large-1" style=" color:#006359;">10,000</b></h3>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <a href="{{route('Payment-Method')}}">
                  <div class="card shadow mt-2">
                    <div class="card-content">
                      <div class="card-body ">
                        <div class="media d-flex mb-1">
                          <div>
                            <div
                              class=" overlaycirleoncard d-flex justify-content-center align-content-center border border-3 rounded-circle"
                              style=" background-color:#00e6c4;">
                              <i class="font-large-3 icon-rocket mt-2 line-height-1"></i>
                            </div>
                          </div>
                          <div class="media-body text-white text-right align-self-center">
                            <h2 class="text-capitalize font-weight-bolder maincardtitle" style=" color:#00897B;">Premium
                            </h2>
                          </div>
                        </div>
                        <h3 class="text-black text-capitalize float-right font-medium-2 my-1">
                          Recharge of⇢ <b class="font-large-1" style=" color:#006359;">25,000</b></h3>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <a href="{{route('Payment-Method')}}">
                  <div class="card shadow mt-2">
                    <div class="card-content">
                      <div class="card-body ">
                        <div class="media d-flex mb-1">
                          <div>
                            <div
                              class=" overlaycirleoncard d-flex justify-content-center align-content-center border border-3 rounded-circle"
                              style=" background-color:#00e6c4;">
                              <i class="font-large-3 icon-pencil mt-2 line-height-1"></i>
                            </div>
                          </div>
                          <div class="media-body text-white text-right align-self-center">
                            <h2 class="text-capitalize font-weight-bolder maincardtitle" style=" color:#00897B;">Custom
                            </h2>
                          </div>
                        </div>
                        <h3 class="text-black text-capitalize float-right font-medium-2 my-1">
                          Recharge of⇢<b class="font-medium-2" style=" color:#006359;">Your choice</b></h3>
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