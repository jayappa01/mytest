
@include('header.nav_bar_head') 
@include('header.nav_bar_toe')
<link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/pages/index.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="content-wrapper">
    <div class="content-body m-0 p-0">

        <section>

            <div class="row justify-content-center pt-3 px-md-1 ">
                <div class="col-12 col-xl-7 col-lg-7 col-md-11 col-sm-12 card badge-black">
                    <div class="card-header ">
                        <div class="card-title ">
                            <h4 class="text-uppercase font-weight-bolder line-height-1 text-info">
                                SEE User History
                            </h4>
                            <p class="text-uppercase font-weight-bolder line-height-1 text-light">
                                Select the date of which you want to see History
                            </p>
                        </div>
                        <a class="heading-elements-toggle "><i class="la la-ellipsis-v"></i></a>
                        <div class="heading-elements bg-none">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show  p-0 pb-3 px-1 ">

                        <div class="form-group">
                            <div class="position-relative has-icon-left ">
                                <input type="date" id="projectinput3" class="form-control text-center" name="date"
                                    data-toggle="tooltip" data-trigger="hover" data-placement="top"
                                    data-title="Select Date" required>
                                <div class="form-control-position text-dark align-center ">
                                    <i class="ft-calendar font-medium-1"></i>
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <a class="w-100" href="user-history-details.php">
                                <button type="button" class=" w-100 btn btn-purple btn-md btn-radius">Go
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


        </section>
    </div>
</div>


@include('header.footer_head')
@include('header.footer_toe')