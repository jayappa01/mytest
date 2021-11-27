@include('header.nav_bar_head') 
@include('header.nav_bar_toe')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="content-wrapper">
  <div class="content-body m-0 p-0">

    <section>

      <!-- Start Double Result Game  -->

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
                <div class="row p-0 m-0 w-100 overflow-hidden">
                  <h5
                    class="rounded-top bg-purple bg-darken-3 text-white font-weight-bold text-capitalcase p-4-y p-4-x m-0 m-4-r">
                    profit 250</h5>
                  <h5 class="bg-info bg-darken-4 rounded-top text-white font-weight-bold p-4-y p-4-x m-0  m-4-l">780-5
                    </h4>
                    <h5 class="bg-info bg-lighten-3 rounded-top text-dark font-weight-bold p-4-y p-4-x m-0 m-4-l">6-123
                    </h5>
                </div>
                <div class="card overflow-hidden no-border-top-left-radius shadow bg-gradient-directional-purple">
                  <div class="card-content">
                    <div class="pb-1">
                      <button
                        class="width-25px float-right bg-white rounded-circle text-black text-center border-0 font-small-3 p-0">
                        01</button>
                    </div>
                    <div class="card-body px-sm-1 p-4-t p-8-b">
                      <div class="media d-flex ">
                        <div class="media-body text-left align-self-center ">
                          <h6 class="text-black line-height-1 p-4-b ">
                            <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                          </h6>
                          <h6 class="text-white mb-0 p-4-b font-weight-bolder text-uppercase line-height-1 ">
                            History ⇢ <b class="text-black"><?= date("d/m/Y") ?></b>
                          </h6>
                          <h3 class="text-white mb-0 font-weight-bolder text-uppercase cardGameName">Game Name</h3>
                        </div>
                        <div class="align-self-top">
                          <i class="icon-diamond icon-opacity text-white float-right cardIcon"></i>
                        </div>
                      </div>
                      <div class="media d-flex justify-content-between align-self-center p-8-t p-4-b">
                        <div>
                          <h5 class="font-weight-bold text-white">Time:- 01.00 PM</h5>
                        </div>
                        <div>
                          <h5 class="font-weight-bold text-white">Time:- 02.00 PM</h5>
                        </div>
                      </div>
                      <div class="media d-flex justify-content-between pb-1 pb-sm-0 ">
                        <div>
                          <a href="{{route('History-Double-Game-Open')}}">
                            <button
                              class="btn btn-md  btn-info bg-info bg-darken-4 text-white border-white">OPEN</button>
                          </a>
                        </div>
                        <div>
                          <a href="{{route('History-Double-Game-Close')}}">
                            <button
                              class="btn btn-md  btn-info bg-info bg-lighten-3 text-black border-white ">CLOSE</button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <div class="row p-0 m-0 w-100 overflow-hidden">
                  <h5
                    class="rounded-top bg-purple bg-darken-3 text-white font-weight-bold text-capitalcase p-4-y p-4-x m-0 m-4-r">
                    profit 250</h5>
                  <h5 class="bg-info bg-darken-4 rounded-top text-white font-weight-bold p-4-y p-4-x m-0  m-4-l">780-5
                    </h4>
                    <h5 class="bg-info bg-lighten-3 rounded-top text-dark font-weight-bold p-4-y p-4-x m-0 m-4-l">6-123
                    </h5>
                </div>
                <div class="card overflow-hidden no-border-top-left-radius shadow bg-gradient-directional-purple">
                  <div class="card-content">
                    <div class="pb-1">
                      <button
                        class="width-25px float-right bg-white rounded-circle text-black text-center border-0 font-small-3 p-0">
                        02</button>
                    </div>
                    <div class="card-body px-sm-1 p-4-t p-8-b">
                      <div class="media d-flex ">
                        <div class="media-body text-left align-self-center ">
                          <h6 class="text-black line-height-1 p-4-b ">
                            <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                          </h6>
                          <h6 class="text-white mb-0 p-4-b font-weight-bolder text-uppercase line-height-1 ">
                            History ⇢ <b class="text-black"><?= date("d/m/Y") ?></b>
                          </h6>
                          <h3 class="text-white mb-0 font-weight-bolder text-uppercase cardGameName">Game Name</h3>
                        </div>
                        <div class="align-self-top">
                          <i class="icon-diamond icon-opacity text-white float-right cardIcon"></i>
                        </div>
                      </div>
                      <div class="media d-flex justify-content-between align-self-center p-8-t p-4-b">
                        <div>
                          <h5 class="font-weight-bold text-white">Time:- 01.00 PM</h5>
                        </div>
                        <div>
                          <h5 class="font-weight-bold text-white">Time:- 02.00 PM</h5>
                        </div>
                      </div>
                      <div class="media d-flex justify-content-between pb-1 pb-sm-0 ">
                        <div>
                          <a href="{{route('History-Double-Game-Open')}}">
                            <button
                              class="btn btn-md  btn-info bg-info bg-darken-4 text-white border-white">OPEN</button>
                          </a>
                        </div>
                        <div>
                          <a href="{{route('History-Double-Game-Close')}}">
                            <button
                              class="btn btn-md  btn-info bg-info bg-lighten-3 text-black border-white ">CLOSE</button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <div class="row p-0 m-0 w-100 overflow-hidden">
                  <h5
                    class="rounded-top bg-purple bg-darken-3 text-white font-weight-bold text-capitalcase p-4-y p-4-x m-0 m-4-r">
                    profit 250</h5>
                  <h5 class="bg-info bg-darken-4 rounded-top text-white font-weight-bold p-4-y p-4-x m-0  m-4-l">780-5
                    </h4>
                    <h5 class="bg-info bg-lighten-3 rounded-top text-dark font-weight-bold p-4-y p-4-x m-0 m-4-l">6-123
                    </h5>
                </div>
                <div class="card overflow-hidden no-border-top-left-radius shadow bg-gradient-directional-purple">
                  <div class="card-content">
                    <div class="pb-1">
                      <button
                        class="width-25px float-right bg-white rounded-circle text-black text-center border-0 font-small-3 p-0">
                        03</button>
                    </div>
                    <div class="card-body px-sm-1 p-4-t p-8-b">
                      <div class="media d-flex ">
                        <div class="media-body text-left align-self-center ">
                          <h6 class="text-black line-height-1 p-4-b ">
                            <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                          </h6>
                          <h6 class="text-white mb-0 p-4-b font-weight-bolder text-uppercase line-height-1 ">
                            History ⇢ <b class="text-black"><?= date("d/m/Y") ?></b>
                          </h6>
                          <h3 class="text-white mb-0 font-weight-bolder text-uppercase cardGameName">Game Name</h3>
                        </div>
                        <div class="align-self-top">
                          <i class="icon-diamond icon-opacity text-white float-right cardIcon"></i>
                        </div>
                      </div>
                      <div class="media d-flex justify-content-between align-self-center p-8-t p-4-b">
                        <div>
                          <h5 class="font-weight-bold text-white">Time:- 01.00 PM</h5>
                        </div>
                        <div>
                          <h5 class="font-weight-bold text-white">Time:- 02.00 PM</h5>
                        </div>
                      </div>
                      <div class="media d-flex justify-content-between pb-1 pb-sm-0 ">
                        <div>
                          <a href="{{route('History-Double-Game-Open')}}">
                            <button
                              class="btn btn-md  btn-info bg-info bg-darken-4 text-white border-white">OPEN</button>
                          </a>
                        </div>
                        <div>
                          <a href="{{route('History-Double-Game-Close')}}">
                            <button
                              class="btn btn-md  btn-info bg-info bg-lighten-3 text-black border-white ">CLOSE</button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <div class="row p-0 m-0 w-100 overflow-hidden">
                  <h5
                    class="rounded-top bg-purple bg-darken-3 text-white font-weight-bold text-capitalcase p-4-y p-4-x m-0 m-4-r">
                    profit 250</h5>
                  <h5 class="bg-info bg-darken-4 rounded-top text-white font-weight-bold p-4-y p-4-x m-0  m-4-l">780-5
                    </h4>
                    <h5 class="bg-info bg-lighten-3 rounded-top text-dark font-weight-bold p-4-y p-4-x m-0 m-4-l">6-123
                    </h5>
                </div>
                <div class="card overflow-hidden no-border-top-left-radius shadow bg-gradient-directional-purple">
                  <div class="card-content">
                    <div class="pb-1">
                      <button
                        class="width-25px float-right bg-white rounded-circle text-black text-center border-0 font-small-3 p-0">
                        04</button>
                    </div>
                    <div class="card-body px-sm-1 p-4-t p-8-b">
                      <div class="media d-flex ">
                        <div class="media-body text-left align-self-center ">
                          <h6 class="text-black line-height-1 p-4-b ">
                            <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                          </h6>
                          <h6 class="text-white mb-0 p-4-b font-weight-bolder text-uppercase line-height-1 ">
                            History ⇢ <b class="text-black"><?= date("d/m/Y") ?></b>
                          </h6>
                          <h3 class="text-white mb-0 font-weight-bolder text-uppercase cardGameName">Game Name</h3>
                        </div>
                        <div class="align-self-top">
                          <i class="icon-diamond icon-opacity text-white float-right cardIcon"></i>
                        </div>
                      </div>
                      <div class="media d-flex justify-content-between align-self-center p-8-t p-4-b">
                        <div>
                          <h5 class="font-weight-bold text-white">Time:- 01.00 PM</h5>
                        </div>
                        <div>
                          <h5 class="font-weight-bold text-white">Time:- 02.00 PM</h5>
                        </div>
                      </div>
                      <div class="media d-flex justify-content-between pb-1 pb-sm-0 ">
                        <div>
                          <a href="{{route('History-Double-Game-Open')}}">
                            <button
                              class="btn btn-md  btn-info bg-info bg-darken-4 text-white border-white">OPEN</button>
                          </a>
                        </div>
                        <div>
                          <a href="{{route('History-Double-Game-Close')}}">
                            <button
                              class="btn btn-md  btn-info bg-info bg-lighten-3 text-black border-white ">CLOSE</button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-xl-4 col-lg-6 col-md-12 ">
                <div class="row p-0 m-0 w-100 overflow-hidden">
                  <h5
                    class="rounded-top bg-purple bg-darken-3 text-white font-weight-bold text-capitalcase p-4-y p-4-x m-0 m-4-r">
                    profit 250</h5>
                  <h5 class="bg-info bg-darken-4 rounded-top text-white font-weight-bold p-4-y p-4-x m-0  m-4-l">780-5
                    </h4>
                    <h5 class="bg-info bg-lighten-3 rounded-top text-dark font-weight-bold p-4-y p-4-x m-0 m-4-l">6-123
                    </h5>
                </div>
                <div class="card overflow-hidden no-border-top-left-radius shadow bg-gradient-directional-purple">
                  <div class="card-content">
                    <div class="pb-1">
                      <button
                        class="width-25px float-right bg-white rounded-circle text-black text-center border-0 font-small-3 p-0">
                        05</button>
                    </div>
                    <div class="card-body px-sm-1 p-4-t p-8-b">
                      <div class="media d-flex ">
                        <div class="media-body text-left align-self-center ">
                          <h6 class="text-black line-height-1 p-4-b ">
                            <b class="text-white">Mon</b> To <b class="text-white">Sun</b>
                          </h6>
                          <h6 class="text-white mb-0 p-4-b font-weight-bolder text-uppercase line-height-1 ">
                            History ⇢ <b class="text-black"><?= date("d/m/Y") ?></b>
                          </h6>
                          <h3 class="text-white mb-0 font-weight-bolder text-uppercase cardGameName">Game Name</h3>
                        </div>
                        <div class="align-self-top">
                          <i class="icon-diamond icon-opacity text-white float-right cardIcon"></i>
                        </div>
                      </div>
                      <div class="media d-flex justify-content-between align-self-center p-8-t p-4-b">
                        <div>
                          <h5 class="font-weight-bold text-white">Time:- 01.00 PM</h5>
                        </div>
                        <div>
                          <h5 class="font-weight-bold text-white">Time:- 02.00 PM</h5>
                        </div>
                      </div>
                      <div class="media d-flex justify-content-between pb-1 pb-sm-0 ">
                        <div>
                          <a href="{{route('History-Double-Game-Open')}}">
                            <button
                              class="btn btn-md  btn-info bg-info bg-darken-4 text-white border-white">OPEN</button>
                          </a>
                        </div>
                        <div>
                          <a href="{{route('History-Double-Game-Close')}}">
                            <button
                              class="btn btn-md  btn-info bg-info bg-lighten-3 text-black border-white ">CLOSE</button>
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

      <!-- End Double Result Game  -->

    </section>


  </div>
</div>
@include('header.footer_head')
@include('header.footer_toe')