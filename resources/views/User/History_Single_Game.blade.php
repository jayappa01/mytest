@include('header.nav_bar_head') 
@include('header.nav_bar_toe')
<div class="content-wrapper">
  <div class="content-body m-0 p-0">

    <section>

      <!-- Start Single Result Game  -->

      <div class="row">
        <div class="col-12 card badge-black">
          <div class="card-header pl-0">
            <div class="card-title ">
              <h4 class="text-uppercase font-weight-bolder line-height-1 text-primary">
                History<b class="text-danger"> of </b><b class="text-primary"> All the Game </b>
              </h4>
              <p class="text-uppercase font-weight-bolder line-height-1 text-light">
                TOTAL HISAB OF THIS DATE (<b class="text-warning"><?= date("d/m/Y") ?></b>) is <b
                  class="text-success font-medium-4 ">Rs. 900</b>
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
                <div class="row p-0 m-0">
                  <h5
                    class="rounded-top bg-pink bg-darken-3 text-white font-weight-bold text-capitalcase p-4-y p-4-x m-0 m-4-r">
                    profit 250</h5>
                  <h5 class="bg-danger bg-darken-4 rounded-top text-white font-weight-bold p-4-y p-4-x m-0  m-4-l">124-8
                    </h4>
                </div>
                <div class="card overflow-hidden no-border-top-left-radius shadow bg-gradient-directional-pink">
                  <div class="card-content">
                    <div class="card-body pt-sm-1 px-sm-1 p-4-b ">
                      <div class="media d-flex">
                        <div class="media-body text-left align-self-top ">
                          <h5 class="text-white mb-0 font-weight-bolder text-uppercase line-height-2 ">
                            History ⇢ <b class="text-black"><?= date("d/m/Y") ?></b>
                          </h5>
                          <h3 class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">One Runs 01</h3>
                        </div>
                        <div class="align-self-top">
                          <i class="ft-phone icon-opacity text-white font-large-3 float-right"></i>
                        </div>
                      </div>
                      <div class="media d-flex justify-content-between align-items-center ">
                        <div class="p-4-y">
                          <h6 class="text-black line-height-1 ">
                            <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                          </h6>
                          <h5 class="font-weight-bold line-height-1 text-white p-0">Time:- 01.00 PM</h5>
                        </div>
                        <div>
                          <a href="{{route('History-Single-Game-Open')}}">
                            <button class="btn btn-md btn-pink border-white">OPEN</button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <div class="row p-0 m-0">
                  <h5
                    class="rounded-top bg-pink bg-darken-3 text-white font-weight-bold text-capitalcase p-4-y p-4-x m-0 m-4-r">
                    profit 250</h5>
                  <h5 class="bg-danger bg-darken-4 rounded-top text-white font-weight-bold p-4-y p-4-x m-0  m-4-l">124-8
                    </h4>
                </div>
                <div class="card overflow-hidden no-border-top-left-radius shadow bg-gradient-directional-pink">
                  <div class="card-content">
                    <div class="card-body pt-sm-1 px-sm-1 p-4-b ">
                      <div class="media d-flex">
                        <div class="media-body text-left align-self-top ">
                          <h5 class="text-white mb-0 font-weight-bolder text-uppercase line-height-2 ">
                            History ⇢ <b class="text-black"><?= date("d/m/Y") ?></b>
                          </h5>
                          <h3 class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">One Runs 02</h3>
                        </div>
                        <div class="align-self-top">
                          <i class="ft-phone icon-opacity text-white font-large-3 float-right"></i>
                        </div>
                      </div>
                      <div class="media d-flex justify-content-between align-items-center ">
                        <div class="p-4-y">
                          <h6 class="text-black line-height-1 ">
                            <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                          </h6>
                          <h5 class="font-weight-bold line-height-1 text-white p-0">Time:- 01.00 PM</h5>
                        </div>
                        <div>
                          <a href="{{route('History-Single-Game-Open')}}">
                            <button class="btn btn-md btn-pink border-white">OPEN</button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <div class="row p-0 m-0">
                  <h5
                    class="rounded-top bg-pink bg-darken-3 text-white font-weight-bold text-capitalcase p-4-y p-4-x m-0 m-4-r">
                    profit 250</h5>
                  <h5 class="bg-danger bg-darken-4 rounded-top text-white font-weight-bold p-4-y p-4-x m-0  m-4-l">124-8
                    </h4>
                </div>
                <div class="card overflow-hidden no-border-top-left-radius shadow bg-gradient-directional-pink">
                  <div class="card-content">
                    <div class="card-body pt-sm-1 px-sm-1 p-4-b ">
                      <div class="media d-flex">
                        <div class="media-body text-left align-self-top ">
                          <h5 class="text-white mb-0 font-weight-bolder text-uppercase line-height-2 ">
                            History ⇢ <b class="text-black"><?= date("d/m/Y") ?></b>
                          </h5>
                          <h3 class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">One Runs 03</h3>
                        </div>
                        <div class="align-self-top">
                          <i class="ft-phone icon-opacity text-white font-large-3 float-right"></i>
                        </div>
                      </div>
                      <div class="media d-flex justify-content-between align-items-center ">
                        <div class="p-4-y">
                          <h6 class="text-black line-height-1 ">
                            <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                          </h6>
                          <h5 class="font-weight-bold line-height-1 text-white p-0">Time:- 01.00 PM</h5>
                        </div>
                        <div>
                          <a href="{{route('History-Single-Game-Open')}}">
                            <button class="btn btn-md btn-pink border-white">OPEN</button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <div class="row p-0 m-0">
                  <h5
                    class="rounded-top bg-pink bg-darken-3 text-white font-weight-bold text-capitalcase p-4-y p-4-x m-0 m-4-r">
                    profit 250</h5>
                  <h5 class="bg-danger bg-darken-4 rounded-top text-white font-weight-bold p-4-y p-4-x m-0  m-4-l">124-8
                    </h4>
                </div>
                <div class="card overflow-hidden no-border-top-left-radius shadow bg-gradient-directional-pink">
                  <div class="card-content">
                    <div class="card-body pt-sm-1 px-sm-1 p-4-b ">
                      <div class="media d-flex">
                        <div class="media-body text-left align-self-top ">
                          <h5 class="text-white mb-0 font-weight-bolder text-uppercase line-height-2 ">
                            History ⇢ <b class="text-black"><?= date("d/m/Y") ?></b>
                          </h5>
                          <h3 class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">One Runs 04</h3>
                        </div>
                        <div class="align-self-top">
                          <i class="ft-phone icon-opacity text-white font-large-3 float-right"></i>
                        </div>
                      </div>
                      <div class="media d-flex justify-content-between align-items-center ">
                        <div class="p-4-y">
                          <h6 class="text-black line-height-1 ">
                            <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                          </h6>
                          <h5 class="font-weight-bold line-height-1 text-white p-0">Time:- 01.00 PM</h5>
                        </div>
                        <div>
                          <a href="{{route('History-Single-Game-Open')}}">
                            <button class="btn btn-md btn-pink border-white">OPEN</button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <div class="row p-0 m-0">
                  <h5
                    class="rounded-top bg-pink bg-darken-3 text-white font-weight-bold text-capitalcase p-4-y p-4-x m-0 m-4-r">
                    profit 250</h5>
                  <h5 class="bg-danger bg-darken-4 rounded-top text-white font-weight-bold p-4-y p-4-x m-0  m-4-l">124-8
                    </h4>
                </div>
                <div class="card overflow-hidden no-border-top-left-radius shadow bg-gradient-directional-pink">
                  <div class="card-content">
                    <div class="card-body pt-sm-1 px-sm-1 p-4-b ">
                      <div class="media d-flex">
                        <div class="media-body text-left align-self-top ">
                          <h5 class="text-white mb-0 font-weight-bolder text-uppercase line-height-2 ">
                            History ⇢ <b class="text-black"><?= date("d/m/Y") ?></b>
                          </h5>
                          <h3 class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">One Runs 05</h3>
                        </div>
                        <div class="align-self-top">
                          <i class="ft-phone icon-opacity text-white font-large-3 float-right"></i>
                        </div>
                      </div>
                      <div class="media d-flex justify-content-between align-items-center ">
                        <div class="p-4-y">
                          <h6 class="text-black line-height-1 ">
                            <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                          </h6>
                          <h5 class="font-weight-bold line-height-1 text-white p-0">Time:- 01.00 PM</h5>
                        </div>
                        <div>
                          <a href="{{route('History-Single-Game-Open')}}">
                            <button class="btn btn-md btn-pink border-white">OPEN</button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <div class="row p-0 m-0">
                  <h5
                    class="rounded-top bg-pink bg-darken-3 text-white font-weight-bold text-capitalcase p-4-y p-4-x m-0 m-4-r">
                    profit 250</h5>
                  <h5 class="bg-danger bg-darken-4 rounded-top text-white font-weight-bold p-4-y p-4-x m-0  m-4-l">124-8
                    </h4>
                </div>
                <div class="card overflow-hidden no-border-top-left-radius shadow bg-gradient-directional-pink">
                  <div class="card-content">
                    <div class="card-body pt-sm-1 px-sm-1 p-4-b ">
                      <div class="media d-flex">
                        <div class="media-body text-left align-self-top ">
                          <h5 class="text-white mb-0 font-weight-bolder text-uppercase line-height-2 ">
                            History ⇢ <b class="text-black"><?= date("d/m/Y") ?></b>
                          </h5>
                          <h3 class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">One Runs 06</h3>
                        </div>
                        <div class="align-self-top">
                          <i class="ft-phone icon-opacity text-white font-large-3 float-right"></i>
                        </div>
                      </div>
                      <div class="media d-flex justify-content-between align-items-center ">
                        <div class="p-4-y">
                          <h6 class="text-black line-height-1 ">
                            <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                          </h6>
                          <h5 class="font-weight-bold line-height-1 text-white p-0">Time:- 01.00 PM</h5>
                        </div>
                        <div>
                          <a href="{{route('History-Single-Game-Open')}}">
                            <button class="btn btn-md btn-pink border-white">OPEN</button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <div class="row p-0 m-0">
                  <h5
                    class="rounded-top bg-pink bg-darken-3 text-white font-weight-bold text-capitalcase p-4-y p-4-x m-0 m-4-r">
                    profit 250</h5>
                  <h5 class="bg-danger bg-darken-4 rounded-top text-white font-weight-bold p-4-y p-4-x m-0  m-4-l">124-8
                    </h4>
                </div>
                <div class="card overflow-hidden no-border-top-left-radius shadow bg-gradient-directional-pink">
                  <div class="card-content">
                    <div class="card-body pt-sm-1 px-sm-1 p-4-b ">
                      <div class="media d-flex">
                        <div class="media-body text-left align-self-top ">
                          <h5 class="text-white mb-0 font-weight-bolder text-uppercase line-height-2 ">
                            History ⇢ <b class="text-black"><?= date("d/m/Y") ?></b>
                          </h5>
                          <h3 class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">One Runs 07</h3>
                        </div>
                        <div class="align-self-top">
                          <i class="ft-phone icon-opacity text-white font-large-3 float-right"></i>
                        </div>
                      </div>
                      <div class="media d-flex justify-content-between align-items-center ">
                        <div class="p-4-y">
                          <h6 class="text-black line-height-1 ">
                            <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                          </h6>
                          <h5 class="font-weight-bold line-height-1 text-white p-0">Time:- 01.00 PM</h5>
                        </div>
                        <div>
                          <a href="{{route('History-Single-Game-Open')}}">
                            <button class="btn btn-md btn-pink border-white">OPEN</button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <div class="row p-0 m-0">
                  <h5
                    class="rounded-top bg-pink bg-darken-3 text-white font-weight-bold text-capitalcase p-4-y p-4-x m-0 m-4-r">
                    profit 250</h5>
                  <h5 class="bg-danger bg-darken-4 rounded-top text-white font-weight-bold p-4-y p-4-x m-0  m-4-l">124-8
                    </h4>
                </div>
                <div class="card overflow-hidden no-border-top-left-radius shadow bg-gradient-directional-pink">
                  <div class="card-content">
                    <div class="card-body pt-sm-1 px-sm-1 p-4-b ">
                      <div class="media d-flex">
                        <div class="media-body text-left align-self-top ">
                          <h5 class="text-white mb-0 font-weight-bolder text-uppercase line-height-2 ">
                            History ⇢ <b class="text-black"><?= date("d/m/Y") ?></b>
                          </h5>
                          <h3 class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">One Runs 08</h3>
                        </div>
                        <div class="align-self-top">
                          <i class="ft-phone icon-opacity text-white font-large-3 float-right"></i>
                        </div>
                      </div>
                      <div class="media d-flex justify-content-between align-items-center ">
                        <div class="p-4-y">
                          <h6 class="text-black line-height-1 ">
                            <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                          </h6>
                          <h5 class="font-weight-bold line-height-1 text-white p-0">Time:- 01.00 PM</h5>
                        </div>
                        <div>
                          <a href="{{route('History-Single-Game-Open')}}">
                            <button class="btn btn-md btn-pink border-white">OPEN</button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <div class="row p-0 m-0">
                  <h5
                    class="rounded-top bg-pink bg-darken-3 text-white font-weight-bold text-capitalcase p-4-y p-4-x m-0 m-4-r">
                    profit 250</h5>
                  <h5 class="bg-danger bg-darken-4 rounded-top text-white font-weight-bold p-4-y p-4-x m-0  m-4-l">124-8
                    </h4>
                </div>
                <div class="card overflow-hidden no-border-top-left-radius shadow bg-gradient-directional-pink">
                  <div class="card-content">
                    <div class="card-body pt-sm-1 px-sm-1 p-4-b ">
                      <div class="media d-flex">
                        <div class="media-body text-left align-self-top ">
                          <h5 class="text-white mb-0 font-weight-bolder text-uppercase line-height-2 ">
                            History ⇢ <b class="text-black"><?= date("d/m/Y") ?></b>
                          </h5>
                          <h3 class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">One Runs 09</h3>
                        </div>
                        <div class="align-self-top">
                          <i class="ft-phone icon-opacity text-white font-large-3 float-right"></i>
                        </div>
                      </div>
                      <div class="media d-flex justify-content-between align-items-center ">
                        <div class="p-4-y">
                          <h6 class="text-black line-height-1 ">
                            <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                          </h6>
                          <h5 class="font-weight-bold line-height-1 text-white p-0">Time:- 01.00 PM</h5>
                        </div>
                        <div>
                          <a href="{{route('History-Single-Game-Open')}}">
                            <button class="btn btn-md btn-pink border-white">OPEN</button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <div class="row p-0 m-0">
                  <h5
                    class="rounded-top bg-pink bg-darken-3 text-white font-weight-bold text-capitalcase p-4-y p-4-x m-0 m-4-r">
                    profit 250</h5>
                  <h5 class="bg-danger bg-darken-4 rounded-top text-white font-weight-bold p-4-y p-4-x m-0  m-4-l">124-8
                    </h4>
                </div>
                <div class="card overflow-hidden no-border-top-left-radius shadow bg-gradient-directional-pink">
                  <div class="card-content">
                    <div class="card-body pt-sm-1 px-sm-1 p-4-b ">
                      <div class="media d-flex">
                        <div class="media-body text-left align-self-top ">
                          <h5 class="text-white mb-0 font-weight-bolder text-uppercase line-height-2 ">
                            History ⇢ <b class="text-black"><?= date("d/m/Y") ?></b>
                          </h5>
                          <h3 class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">One Runs 10</h3>
                        </div>
                        <div class="align-self-top">
                          <i class="ft-phone icon-opacity text-white font-large-3 float-right"></i>
                        </div>
                      </div>
                      <div class="media d-flex justify-content-between align-items-center ">
                        <div class="p-4-y">
                          <h6 class="text-black line-height-1 ">
                            <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                          </h6>
                          <h5 class="font-weight-bold line-height-1 text-white p-0">Time:- 01.00 PM</h5>
                        </div>
                        <div>
                          <a href="{{route('History-Single-Game-Open')}}">
                            <button class="btn btn-md btn-pink border-white">OPEN</button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <div class="row p-0 m-0">
                  <h5
                    class="rounded-top bg-pink bg-darken-3 text-white font-weight-bold text-capitalcase p-4-y p-4-x m-0 m-4-r">
                    profit 250</h5>
                  <h5 class="bg-danger bg-darken-4 rounded-top text-white font-weight-bold p-4-y p-4-x m-0  m-4-l">124-8
                    </h4>
                </div>
                <div class="card overflow-hidden no-border-top-left-radius shadow bg-gradient-directional-pink">
                  <div class="card-content">
                    <div class="card-body pt-sm-1 px-sm-1 p-4-b ">
                      <div class="media d-flex">
                        <div class="media-body text-left align-self-top ">
                          <h5 class="text-white mb-0 font-weight-bolder text-uppercase line-height-2 ">
                            History ⇢ <b class="text-black"><?= date("d/m/Y") ?></b>
                          </h5>
                          <h3 class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">One Runs 11</h3>
                        </div>
                        <div class="align-self-top">
                          <i class="ft-phone icon-opacity text-white font-large-3 float-right"></i>
                        </div>
                      </div>
                      <div class="media d-flex justify-content-between align-items-center ">
                        <div class="p-4-y">
                          <h6 class="text-black line-height-1 ">
                            <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                          </h6>
                          <h5 class="font-weight-bold line-height-1 text-white p-0">Time:- 01.00 PM</h5>
                        </div>
                        <div>
                          <a href="{{route('History-Single-Game-Open')}}">
                            <button class="btn btn-md btn-pink border-white">OPEN</button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <div class="row p-0 m-0">
                  <h5
                    class="rounded-top bg-pink bg-darken-3 text-white font-weight-bold text-capitalcase p-4-y p-4-x m-0 m-4-r">
                    profit 250</h5>
                  <h5 class="bg-danger bg-darken-4 rounded-top text-white font-weight-bold p-4-y p-4-x m-0  m-4-l">124-8
                    </h4>
                </div>
                <div class="card overflow-hidden no-border-top-left-radius shadow bg-gradient-directional-pink">
                  <div class="card-content">
                    <div class="card-body pt-sm-1 px-sm-1 p-4-b ">
                      <div class="media d-flex">
                        <div class="media-body text-left align-self-top ">
                          <h5 class="text-white mb-0 font-weight-bolder text-uppercase line-height-2 ">
                            History ⇢ <b class="text-black"><?= date("d/m/Y") ?></b>
                          </h5>
                          <h3 class="text-white mb-0 font-weight-bolder text-uppercase font-large-1 ">One Runs 12</h3>
                        </div>
                        <div class="align-self-top">
                          <i class="ft-phone icon-opacity text-white font-large-3 float-right"></i>
                        </div>
                      </div>
                      <div class="media d-flex justify-content-between align-items-center ">
                        <div class="p-4-y">
                          <h6 class="text-black line-height-1 ">
                            <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                          </h6>
                          <h5 class="font-weight-bold line-height-1 text-white p-0">Time:- 01.00 PM</h5>
                        </div>
                        <div>
                          <a href="{{route('History-Single-Game-Open')}}">
                            <button class="btn btn-md btn-pink border-white">OPEN</button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>

      <!-- End Single Result Game  -->

    </section>


  </div>
</div>
@include('header.footer_head')
@include('header.footer_toe')