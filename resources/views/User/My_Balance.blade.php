@include('header.nav_bar_head')
@include('header.nav_bar_toe')


<link rel="stylesheet" type="text/css" href="{{asset('public/app-assets/css/pages/My-Balance.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="content-wrapper">
  <div class="content-body m-0 p-0">
    <section>
      <!-- Start Double Result Game  -->
      <div class="row">
        <div class="col-12 card badge-black">
          <div class="card-header pl-0">
            <div class="card-title ">
              <h4 class="text-uppercase font-weight-bolder line-height-1 text-info">
                Your Balance
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
                <a href="{{route('User-Recharge')}}">
                  <div class="card shadow bg-gradient-x-blue-green mt-2">
                    <div class="card-content">
                      <div class="card-body ">
                        <div class="media d-flex mb-1">
                          <div class="media-body text-white text-left align-self-center">
                            <h2 class="text-white text-capitalize font-weight-bolder maincardtitle">Rechage</h2>
                          </div>
                          <div>
                            <div
                              class=" overlaycirleoncard  bg-white d-flex justify-content-center align-content-center border border-3 rounded-circle">
                              <i class="font-large-3 icon-wallet mt-2" style=" color:#00897B;"></i>
                            </div>
                          </div>
                        </div>
                        <h3 class="text-white text-capitalize float-right font-weight-bolder font-medium-1 my-1">
                          Refilling of⇢ <b class="black">Your Balance</b></h3>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <a href="{{route('Buy-Guessing')}}">
                  <div class="card shadow bg-gradient-x-red-pink mt-2">
                    <div class="card-content">
                      <div class="card-body ">
                        <div class="media d-flex mb-1">
                          <div class="media-body text-white text-left align-self-center">
                            <h2 class="text-white text-capitalize font-weight-bolder maincardtitle">Buy Guessing</h2>
                          </div>
                          <div>
                            <div
                              class=" overlayboxdiamond  bg-white d-flex justify-content-center align-content-center  border border-3 rounded ">
                              <i class="font-large-3 icon-trophy mt-1 mr-1" style=" color:#FF394F;"></i>
                            </div>
                          </div>
                        </div>
                        <h3 class="text-white text-capitalize float-right font-weight-bolder font-medium-1 my-1">
                          Guessing of⇢ <b class="black">All The Game</b></h3>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <a href="{{route('Withdrawal')}}">
                  <div class="card shadow bg-gradient-x-purple-blue mt-2">
                    <div class="card-content">
                      <div class="card-body ">
                        <div class="media d-flex mb-1">
                          <div class="media-body text-white text-left align-self-center">
                            <h2 class="text-white text-capitalize font-weight-bolder maincardtitle">Withdrawal</h2>
                          </div>
                          <div>
                            <div
                              class=" overlayboxoncard  bg-white d-flex justify-content-center align-content-center border border-3 rounded ">
                              <i class="font-large-3 icon-credit-card mt-1" style="color:#1283EC;"></i>
                            </div>
                          </div>
                        </div>
                        <h3 class="text-white text-capitalize float-right font-weight-bolder font-medium-1 my-1">
                          Withdrawal to⇢ <b class="black">your Account</b></h3>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <a href="{{route('Balance-Records')}}">
                  <div class="card shadow bg-gradient-directional-warning mt-2">
                    <div class="card-content">
                      <div class="card-body ">
                        <div class="media d-flex mb-1">
                          <div class="media-body text-white text-left align-self-center">
                            <h2 class="text-white text-capitalize font-weight-bolder maincardtitle">Records</h2>
                          </div>
                          <div>
                            <div
                              class=" overlaypilloncard  bg-white d-flex justify-content-center align-content-center border border-3 ">
                              <i class="icon-book-open mt-1 mr-1" style=" color:#FF7E39;"></i>
                            </div>
                          </div>
                        </div>
                        <h3 class="text-white text-capitalize float-right font-weight-bolder font-medium-1 my-1">
                          Report of⇢ <b class="black">All The Balance</b></h3>
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