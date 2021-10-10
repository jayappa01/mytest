
@include('header.nav_bar_head') 
@include('header.nav_bar_toe')

<div class="content-wrapper">
  <div class="content-body m-0 p-0">
    <section>
      <!-- Start Double Result Game  -->
      <div class="row">
        <div class="col-12 card badge-theme-black">
          <div class="card-header pl-0">
            <div class="card-title ">
              <h4 class="text-uppercase font-weight-bolder line-height-1 text-info">
                ADD GAME
              </h4>
              <h5 class="text-uppercase font-weight-bolder line-height-1 text-warning">
              <!--    date("d/m/Y")  -->
              </h5>
              <p class="text-uppercase font-weight-bolder line-height-1 text-light">
                Add Result Open To Close
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
              <div class="col-xl-6 col-lg-6 col-md-12">
                <a href="{{route('Add-Double-Game')}}">
                  <div class="card bg-gradient-directional-info">
                    <div class="card-content">
                      <div class="card-body">
                        <div class="media d-flex">
                          <div class="align-self-top">
                            <i class="icon-diamond icon-opacity text-black font-large-4 float-left"></i>
                          </div>
                          <div class="media-body text-black text-right align-self-bottom mt-3">
                            <span class="d-block mb-1 font-medium-1">Double Result</span>
                            <h2 class="text-black mb-0">+ Game</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-xl-6 col-lg-6 col-md-12">
                <a href="{{route('Add-Single-Game')}}">
                  <div class="card bg-gradient-directional-danger">
                    <div class="card-content">
                      <div class="card-body">
                        <div class="media d-flex">
                          <div class="align-self-top">
                            <i class="ft-phone icon-opacity text-black font-large-4 float-left"></i>
                          </div>
                          <div class="media-body text-black text-right align-self-bottom mt-3">
                            <span class="d-block mb-1 font-medium-1">Single Result</span>
                            <h2 class="text-black mb-0">+ Game</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

    </section>
    <!-- // Minimal statistics section end -->
    </section>


  </div>
</div>

@include('header.footer_head')
@include('header.footer_toe')