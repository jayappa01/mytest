
@include('header.nav_bar_head') 
@include('header.nav_bar_toe')

<div class="content-wrapper m-0 p-0">
  <div class=" w-100 position-absolute" style=" opacity:0.3; height:250px!important;   
background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);"></div>
  <div class="content-header row"></div>
  <div class="content-body p-2">

    <section id="minimal-statistics-bg">
      <div class="row">
        <div class="col-12 mt-1 mb-1">
          <h6 class="text-uppercase font-weight-bold text-white">
            Welcome
          </h6>
          <h4 class="text-uppercase font-weight-bold text-warning font-medium-5">
            Master
          </h4>

          <p class="text-light">Master this is Dashboard</p>
        </div>
      </div>


      <!-- Minimal statistics with bg color section start -->
      <section id="minimal-statistics-bg">
        <div class="row">
          <div class="col-xl-3 col-lg-6 col-12">
            <a href="{{route('Add-Results')}}">
              <div class="card bg-gradient-x-purple-blue">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-top">
                        <i class="la la-plus-square icon-opacity text-white font-large-4 float-left"></i>
                      </div>
                      <div class="media-body text-white text-right align-self-bottom mt-3">
                        <span class="d-block mb-1 font-medium-1">Add Result</span>
                        <h3 class="text-white mb-0">+ Result</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <a href="{{route('Add-Game')}}">
              <div class="card bg-gradient-x-purple-red">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-top">
                        <i class="la la-gamepad icon-opacity text-white font-large-4 float-left"></i>
                      </div>
                      <div class="media-body text-white text-right align-self-bottom mt-3">
                        <span class="d-block mb-1 font-medium-1">Add Game</span>
                        <h3 class="text-white mb-0">+ Game</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <a href="{{route('User-Recharge')}}">
              <div class="card bg-gradient-x-blue-green">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-top">
                        <i class="la la-plug icon-opacity text-white font-large-4 float-left"></i>
                      </div>
                      <div class="media-body text-white text-right align-self-bottom mt-3">
                        <span class="d-block mb-1 font-medium-1">₹ 4500</span>
                        <h3 class="text-white mb-0">Recharge</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <a href="{{route('User-Withdrawal')}}">
              <div class="card bg-gradient-x-orange-yellow">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-top">
                        <i class="la la-credit-card icon-opacity text-white font-large-4 float-left"></i>
                      </div>
                      <div class="media-body text-white text-right align-self-bottom mt-3">
                        <span class="d-block mb-1 font-medium-1">₹ 200</span>
                        <h3 class="text-white mb-0">Withdrawal</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

        </div>
        <div class="row">


          <div class="col-xl-3 col-lg-6 col-12">
            <a href="{{route('Add-User')}}">
              <div class="card bg-gradient-directional-warning">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-white text-left align-self-bottom mt-3">
                        <span class="d-block mb-1 font-medium-1">Add User</span>
                        <h3 class="text-white mb-0">+ User</h3>
                      </div>
                      <div class="align-self-top">
                        <i class="la la-user-plus icon-opacity text-white font-large-4 float-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <a href="{{route('Your-Message')}}">
              <div class="card bg-gradient-directional-success">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-white text-left align-self-bottom mt-3">
                        <span class="d-block mb-1 font-medium-1">Your</span>
                        <h3 class="text-white mb-0">Message</h3>
                      </div>
                      <div class="align-self-top">
                        <i class="la la-comment icon-opacity text-white font-large-4 float-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-xl-3 col-lg-6 col-12">
            <a href="{{route('See-Hisab')}}">
              <div class="card bg-gradient-directional-danger">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-white text-left align-self-bottom mt-3">
                        <span class="d-block mb-1 font-medium-1">See Hisab</span>
                        <h3 class="text-white mb-0">Hisab</h3>
                      </div>
                      <div class="align-self-top">
                        <i class="la la-calculator icon-opacity text-white font-large-4 float-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
       

          

        </div>
      </section>
      <!-- // Minimal statistics with bg color section end -->

      <!-- Minimal statistics section start -->
      <section id="minimal-statistics">
        <div class="row">

           <div class="col-xl-4 col-lg-6 col-12">
          <a href="{{route('Game-Results')}}">
            <div class="card bg-gradient-x-purple-blue">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-top">
                      <i class="icon-eye text-white font-large-4 float-left" style=" opacity:0.7;"></i>
                    </div>
                    <div class="media-body text-white text-right align-self-bottom mt-3">
                      <span class="d-block mb-1 font-medium-1">*Game Name*</span>
                      <h1 class="text-white mb-0">See Game</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
           <div class="col-xl-4 col-lg-6 col-12">
          <a href="{{route('Play-Game')}}">
            <div class="card bg-gradient-x-orange-yellow ">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-top">
                      <i class="icon-game-controller text-white font-large-4 float-left" style=" opacity:0.7;"></i>
                    </div>
                    <div class="media-body text-white text-right align-self-bottom mt-3">
                      <span class="d-block mb-1 font-medium-1">*Game Name*</span>
                      <h1 class="text-white mb-0">Play Game</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-lg-6 col-12">
          <a href="{{route('My-Balance')}}">
            <div class="card  bg-gradient-x-purple-red">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-top">
                      <i class="icon-wallet text-white font-large-4 float-left" style=" opacity:0.7;"></i>
                    </div>
                    <div class="media-body text-white text-right align-self-bottom mt-3">
                      <span class="d-block mb-1 font-medium-1">*Rupee balance*</span>
                      <h1 class="text-white mb-0">See Bag</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-lg-6 col-12">
          <a href="{{route('Message')}}">
            <div class="card bg-gradient-directional-success">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-white text-left align-self-bottom mt-3">
                      <span class="d-block mb-1 font-medium-1">Message Date</span>
                      <h1 class="text-white mb-0">Message</h1>
                    </div>
                    <div class="align-self-top">
                      <i class="icon-envelope text-white font-large-4 float-right" style=" opacity:0.7;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-lg-6 col-12">
          <a href="{{route('See-History')}}">
            <div class="card  bg-gradient-directional-danger">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-white text-left align-self-bottom mt-3">
                      <span class="d-block mb-1 font-medium-1">Hisory Till <b
                          class="text-white"><?= date("d-m-Y", strtotime(date("Y-m-d") . " -1 days")) ?></b></span>
                      <h1 class="text-white mb-0">See Hisab</h1>
                    </div>
                    <div class="align-self-top">
                      <i class="icon-calculator  text-white font-large-4 float-right" style=" opacity:0.7;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-lg-6 col-12">
          <a href="{{route('User-Account')}}">
            <div class="card bg-gradient-directional-info">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-white text-left align-self-bottom mt-3">
                      <span class="d-block mb-1 font-medium-1">Hi User</span>
                      <h1 class="text-white mb-0">User Setting</h1>
                    </div>
                    <div class="align-self-top">
                      <i class="icon-users text-white font-large-4 float-right" style=" opacity:0.7;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
        </div>

      </section>
      <!-- // Minimal statistics section end -->
    </section>
  </div>
</div>
@include('header.footer_head')
@include('header.footer_toe')
