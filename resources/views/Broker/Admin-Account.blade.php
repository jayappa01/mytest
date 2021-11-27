
@include('header.nav_bar_head')
@include('header.nav_bar_toe')
<link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/Admin-Account.css')}}">

<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="w-100 d-flex flex-wrap pt-1">
    <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 p-0">
        <div class="col-12 d-flex flex-wrap justify-content-md-center ">
            <div class="w-100 card badge-theme-black">
                <div class="card-head">
                    <div class="align-self-center halfway-fab text-center p-1">
                        <span class="avatar avatar-lg avatar-online rounded-circle">
                            <img src="{{ asset('public/app-assets/images/portrait/small/avatar-s-21.png')}}" alt="avatar">
                        </span>
                    </div>
                    <div class="text-center">
                        <span class="font-medium-2 text-uppercase text-white">Admin Setting</span>
                        <p class="text-light font-small-2">Game's God</p>
                    </div>
                </div>
                <div class="card-header pb-0">
                    <h4 class="card-title text-light" id="horz-layout-card-center">Update Your Password</h4>
                </div>
                <div class="card-content collpase show">
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="col-md-12 label-control text-white" for="projectinput5">Old
                                        Password</label>
                                    <div class="col-md-12">
                                        <input type="password" id="projectinput5"
                                            class="input-text-area border border-dark badge-black"
                                            placeholder="Old Password" name="oldpass">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-12 label-control text-white" for="eventRegInput1">New
                                        Password</label>
                                    <div class="col-md-12">
                                        <input type="password" minlength="8" id="eventRegInput1"
                                            class="input-text-area border border-dark badge-black"
                                            placeholder="Minimum 8 Letters" name="newpass">
                                    </div>
                                </div>
                                <div class="form-actions center border-top-blue-grey border-top-lighten-1 pb-0">
                                    <button type="button" class="btn btn-danger mr-1">
                                        <i class="ft-x"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="la la-check-square-o"></i> Save
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 card badge-dark border" style="background-color:#4c294f !important;">
            <div class="card-header">
                <h4 class="card-title text-light" id="horz-layout-card-center">
                    Earnings / Losses</h4>
                <a class="heading-elements-toggle text-light"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements text-light">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content collpase show">
                <div class="card-body">
                    <!-- contacts view -->
                    <div class="form-group row">
                        <small class="col-md-5 label-control text-white" for="UserEmail">Double Result Game</small>
                        <div class="col-md-7">
                            <input type="num" id="UserEmail"
                                class=" text-white text-center font-20px font-20px-responsive input-text-area border border-info  border-darken-4 bg-transparent"
                                value="5600" readonly name="userName" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <small class="col-md-5 label-control text-white" for="UserEmail">Single Result Game</small>
                        <div class="col-md-7">
                            <input type="num" id="UserEmail"
                                class=" text-white text-center font-20px font-20px-responsive input-text-area border border-red  border-darken-4 bg-transparent"
                                value="-1100" readonly name="userName" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <small class="col-md-5 label-control text-white" for="UserEmail">Both Games Total</small>
                        <div class="col-md-7">
                            <input type="num" id="UserEmail"
                                class=" text-white text-center font-20px font-20px-responsive input-text-area border border-white  border-darken-4 bg-transparent"
                                value="4500" readonly name="userName" disabled>
                        </div>
                    </div>
                    <div class="list-group">
                        <button class="btn btn-bg-gradient-x-purple-red border-white" data-toggle="modal"
                            data-target="#GameEarnLossModel">
                            <i class="la la-eye"></i> All Earnings / Losses
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 card badge-dark border" style="background-color:#424224 !important;">
            <div class="card-header">
                <h4 class="card-title text-light" id="horz-layout-card-center">
                    Update Contact Info</h4>
                <a class="heading-elements-toggle text-light"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements text-light">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content collpase show">
                <div class="card-body">
                    <!-- contacts view -->
                    <form class="form form-horizontal">
                        <div class="form-body d-flex flex-wrap ">
                            <div class="col-12 px-0">
                                <div class="form-group row">
                                    <label class="col-12 text-white label-control " for="FrontContact">Front-End Contant
                                        No.</label>
                                    <div class="col-12">
                                        <input type="tel" id="FrontContact"
                                            class="input-text-area border border-dark text-balck bg-white  "
                                            name="FrontContact" placeholder="This Contact will Show up on Front End"
                                            value="9876543210" maxlength="10">
                                    </div>
                                    <div class="col-12">
                                        <input type="email" id="FrontContact"
                                            class="input-text-area border border-dark text-balck bg-white  "
                                            name="FrontContact" placeholder="This Email will Show up on Front End"
                                            value="Example@Email.com">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 px-0">
                                <div class="form-group row">
                                    <label class="col-12 text-white label-control" for="UBonusXValue">User-End Contant
                                        No.</label>
                                    <div class="col-12">
                                        <input type="tel" id="UBonusXValue"
                                            class="input-text-area border border-dark text-balck bg-white "
                                            name="UBonusXValue" placeholder="This Contact will Show up on User End"
                                            value="9876543210" maxlength="10">
                                    </div>
                                    <div class="col-12">
                                        <input type="email" id="UBonusXValue"
                                            class="input-text-area border border-dark text-balck bg-white "
                                            name="UBonusXValue" placeholder="This Email will Show up on User End"
                                            value="Example@Email.com">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 px-0">
                                <div class="form-group row">
                                    <label class="col-12 text-white label-control" for="UBonusXValue">Broker-End Contant
                                        No.</label>
                                    <div class="col-12">
                                        <input type="tel" id="UBonusXValue"
                                            class="input-text-area border border-dark text-balck bg-white "
                                            name="UBonusXValue" placeholder="This Contact will Show up on Broker End"
                                            value="9876543210" maxlength="10">
                                    </div>
                                    <div class="col-12">
                                        <input type="email" id="UBonusXValue"
                                            class="input-text-area border border-dark text-balck bg-white "
                                            name="UBonusXValue" placeholder="This Email will Show up on Broker End"
                                            value="Example@Email.com">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 form-actions center border-top-blue-grey border-top-lighten-1 pb-0">
                                <button type="button" class="btn btn-danger mr-1">
                                    <i class="ft-x"></i> Cancel
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> Save
                                </button>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 p-0 ">
    <div class="col-12 d-flex justify-content-md-center">
        <div class="w-100 card border" style="background-color:#243142 !important;">
            <div class="card-header">
                <h4 class="card-title text-light" id="horz-layout-card-center">Double Game Play Value</h4>
                <a class="heading-elements-toggle text-light"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements text-white">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content collpase show">
                <form class="form form-horizontal">
                    <div class="card-body pt-0">
                        <div class="form-body d-flex flex-wrap ">
                            <div class="col-xl-6 col-lg-12">
                                <div class="form-group row">
                                    <label class="col-12 text-white label-control " for="FigureXValue">Figure
                                        X</label>
                                    <div class="col-12">
                                        <input type="tel" id="FigureXValue"
                                            class="input-text-area border border-dark text-balck bg-white  "
                                            name="FigureXValue" placeholder="Figure Multiply By....?" value="9">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="form-group row">
                                    <label class="col-12 text-white label-control" for="UBonusXValue">User Bonus
                                        X</label>
                                    <div class="col-12">
                                        <input type="tel" id="UBonusXValue"
                                            class="input-text-area border border-dark text-balck bg-white "
                                            name="UBonusXValue" placeholder="User Bonus Multiply By....?" value="18">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="form-group row">
                                    <label class="col-12 text-white label-control" for="BBonusXValue">Broker Bonus
                                        X</label>
                                    <div class="col-12">
                                        <input type="tel" id="BBonusXValue"
                                            class="input-text-area border border-dark text-balck bg-white "
                                            name="BBonusXValue" placeholder="Broker Bonus Multiply By....?" value="18">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="form-group row">
                                    <label class="col-12 text-white label-control " for="SinglePXValue">Single Pana
                                        X</label>
                                    <div class="col-12">
                                        <input type="tel" id="SinglePXValue"
                                            class="input-text-area border border-dark text-balck bg-white  "
                                            name="SinglePXValue" placeholder="Single Pana Multiply By....?" value="150">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="form-group row">
                                    <label class="col-12 text-white label-control" for="DoulbePXValue">Double Pana
                                        X</label>
                                    <div class="col-12">
                                        <input type="tel" id="DoulbePXValue"
                                            class="input-text-area border border-dark text-balck bg-white "
                                            name="DoulbePXValue" placeholder="Double Pana Multiply By....?" value="300">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="form-group row">
                                    <label class="col-12 text-white label-control " for="TriplePXValue">Triple Pana
                                        X</label>
                                    <div class="col-12">
                                        <input type="tel" id="TriplePXValue"
                                            class="input-text-area border border-dark text-balck bg-white  "
                                            name="TriplePXValue" placeholder="Triple Pana Multiply By....?"
                                            value="1000">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="form-group row">
                                    <label class="col-12 text-white label-control" for="JodiXValue">Jodi X</label>
                                    <div class="col-12">
                                        <input type="tel" id="JodiXValue"
                                            class="input-text-area border border-dark text-balck bg-white "
                                            name="JodiXValue" placeholder="Jodi Multiply By....?" value="10000">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 form-actions center border-top-blue-grey border-top-lighten-1 pb-0">
                                <button type="button" class="btn btn-danger mr-1">
                                    <i class="ft-x"></i> Cancel
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> Save
                                </button>
                            </div>

                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 d-flex justify-content-md-center">
        <div class="w-100 card border" style="background-color:#452525 !important;">
            <div class="card-header">
                <h4 class="card-title text-light" id="horz-layout-card-center">Single Game Play Value</h4>
                <a class="heading-elements-toggle text-light"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements text-white">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content collpase show">
                <form class="form form-horizontal">
                    <div class="card-body pt-0">
                        <div class="form-body d-flex flex-wrap ">
                            <div class="col-xl-6 col-lg-12">
                                <div class="form-group row">
                                    <label class="col-12 text-white label-control " for="FigureXValue">Figure
                                        X</label>
                                    <div class="col-12">
                                        <input type="tel" id="FigureXValue"
                                            class="input-text-area border border-dark text-balck bg-white  "
                                            name="FigureXValue" placeholder="Figure Multiply By....?" value="9">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="form-group row">
                                    <label class="col-12 text-white label-control" for="UBonusXValue">User Bonus
                                        X</label>
                                    <div class="col-12">
                                        <input type="tel" id="UBonusXValue"
                                            class="input-text-area border border-dark text-balck bg-white "
                                            name="UBonusXValue" placeholder="User Bonus Multiply By....?" value="18">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="form-group row">
                                    <label class="col-12 text-white label-control" for="BBonusXValue">Broker Bonus
                                        X</label>
                                    <div class="col-12">
                                        <input type="tel" id="BBonusXValue"
                                            class="input-text-area border border-dark text-balck bg-white "
                                            name="BBonusXValue" placeholder="Broker Bonus Multiply By....?" value="18">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="form-group row">
                                    <label class="col-12 text-white label-control " for="SinglePXValue">Single Pana
                                        X</label>
                                    <div class="col-12">
                                        <input type="tel" id="SinglePXValue"
                                            class="input-text-area border border-dark text-balck bg-white  "
                                            name="SinglePXValue" placeholder="Single Pana Multiply By....?" value="150">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="form-group row">
                                    <label class="col-12 text-white label-control" for="DoulbePXValue">Double Pana
                                        X</label>
                                    <div class="col-12">
                                        <input type="tel" id="DoulbePXValue"
                                            class="input-text-area border border-dark text-balck bg-white "
                                            name="DoulbePXValue" placeholder="Double Pana Multiply By....?" value="300">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="form-group row">
                                    <label class="col-12 text-white label-control " for="TriplePXValue">Triple Pana
                                        X</label>
                                    <div class="col-12">
                                        <input type="tel" id="TriplePXValue"
                                            class="input-text-area border border-dark text-balck bg-white  "
                                            name="TriplePXValue" placeholder="Triple Pana Multiply By....?"
                                            value="1000">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 form-actions center border-top-blue-grey border-top-lighten-1 pb-0">
                                <button type="button" class="btn btn-danger mr-1">
                                    <i class="ft-x"></i> Cancel
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> Save
                                </button>
                            </div>

                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-12 d-flex justify-content-md-center">
        <div class="w-100 card badge-theme-black border" style="background:#1e332c !important;">
            <div class="card-header">
                <h5 class="card-title text-light" id="horz-layout-card-center">QR-code details</h5>
                <div class="heading-elements">
                    <button class="btn btn-sm btn-outline-success btn-lighten-4 " data-toggle="modal"
                        data-target="#QrPaymentModel">+ QR Payment</button>
                </div>
            </div>
            <div class="card-content collpase show">
                <div class="card-body">

                    <div class="table-responsive">
                        <table
                            class="table info lighten-4 w-100 table-xs table-responsive-xs table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl table-theme-dark table-hover table-striped table-bordered default-ordering text-center p-0">
                            <thead>
                                <tr>
                                    <th>Edit</th>
                                    <th>No</th>
                                    <th>Type</th>
                                    <th>Phone</th>
                                    <th>Img</th>
                                    <th>Expires</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                                            data-target="#QrPaymentModel"><i class=" font-medium-4 la la-edit"></i>
                                        </button>
                                    </td>
                                    <td>111</td>
                                    <td>Google Pay</td>
                                    <td>9876543210</td>
                                    <td>Yes</td>
                                    <td>DA/MO/YEAR</td>
                                    <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                                                class=" font-medium-4 la la-close"></i></button></td>
                                </tr>
                                <tr>
                                    <td>
                                        <button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                                            data-target="#QrPaymentModel"><i class=" font-medium-4 la la-edit"></i>
                                        </button>
                                    </td>
                                    <td>1</td>
                                    <td>Whatsapp Pay</td>
                                    <td>9876543210</td>
                                    <td>Yes</td>
                                    <td>DA/MO/YEAR</td>
                                    <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                                                class=" font-medium-4 la la-close"></i></button></td>
                                </tr>
                                <tr>
                                    <td>
                                        <button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                                            data-target="#QrPaymentModel"><i class=" font-medium-4 la la-edit"></i>
                                        </button>
                                    </td>
                                    <td>1</td>
                                    <td>Paytm</td>
                                    <td>9876543210</td>
                                    <td>Yes</td>
                                    <td>DA/MO/YEAR</td>
                                    <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                                                class=" font-medium-4 la la-close"></i></button></td>
                                </tr>
                                <tr>
                                    <td>
                                        <button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                                            data-target="#QrPaymentModel"><i class=" font-medium-4 la la-edit"></i>
                                        </button>
                                    </td>
                                    <td>1</td>
                                    <td>Phone Pe</td>
                                    <td>9876543210</td>
                                    <td>Yes</td>
                                    <td>DA/MO/YEAR</td>
                                    <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                                                class=" font-medium-4 la la-close"></i></button></td>
                                </tr>
                                <tr>
                                    <td>
                                        <button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                                            data-target="#QrPaymentModel"><i class=" font-medium-4 la la-edit"></i>
                                        </button>
                                    </td>
                                    <td>1</td>
                                    <td>Google Pay</td>
                                    <td>9876543210</td>
                                    <td>Yes</td>
                                    <td>NE/XT/DATE</td>
                                    <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                                                class=" font-medium-4 la la-close"></i></button></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Edit</th>
                                    <th>No</th>
                                    <th>Type</th>
                                    <th>Phone</th>
                                    <th>Img</th>
                                    <th>Expires</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Start Model Of This Page Game's earning / loss Model -->
    <div class="modal fade" id="GameEarnLossModel" tabindex="-1" role="dialog" aria-labelledby="GameEarnLossModelTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl w-100 justify-content-center" role="document">
            <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 p-0 modal-content border-white badge-dark"
                style="background-color:#311d33 !important;">
                <div class="modal-header">
                    <h5 class="modal-title white font-weight-bolder" id="exampleModalLongTitle">Earnings / Losses</h5>
                    <button type="button" class="close white font-weight-bolder" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="col-12  d-flex flex-wrap">
                    <div class="col-12 col-xl-6 d-flex flex-wrap text-center p-0 ">
                        <div class="card-header col-12 px-0">
                            <h4 class="card-title text-info ">Double Result Game</h4>
                        </div>
                        <div class="col-12">
                            <div class="form-group mx-1 border-blue rounded row">
                                <div class="col-4">
                                    <p class="w-100 blue p-4px m-0 text-center">
                                        Total:-
                                    </p>
                                </div>
                                <div class="col-8">
                                    <p class="w-100 p-4px m-0 text-center">
                                        -100000000
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 p-0 m-0 ">
                            <div
                                class="form-group card bg-blue bg-darken-4 border-2 border-blue border-darken-2 px-0 p-8-y m-4px ">
                                <label class="info lighten-4" for="">Game Name 1</label>
                                <p class="w-100 p-4px m-0 text-center">
                                    -100000000
                                </p>
                                <small id="CloseTime"
                                    class="form-text text-bold-700 font-medium-4 danger lighten-3">Loss</small>
                            </div>
                        </div>
                        <div class="col-4 p-0 m-0 ">
                            <div
                                class="form-group card bg-blue bg-darken-4 border-2 border-blue border-darken-2 px-0 p-8-y m-4px ">
                                <label class="info lighten-4" for="">Game Name 2</label>
                                <p class="w-100 p-4px m-0 text-center">
                                    100000000
                                </p>
                                <small id="CloseTime"
                                    class="form-text text-bold-700 font-medium-4 text-success">Profit</small>
                            </div>
                        </div>
                        <div class="col-4 p-0 m-0 ">
                            <div
                                class="form-group card bg-blue bg-darken-4 border-2 border-blue border-darken-2 px-0 p-8-y m-4px ">
                                <label class="info lighten-4" for="">Game Name 3</label>
                                <p class="w-100 p-4px m-0 text-center">
                                    -100000000
                                </p>
                                <small id="CloseTime"
                                    class="form-text text-bold-700 font-medium-4 danger lighten-3">Loss</small>
                            </div>
                        </div>
                        <div class="col-4 p-0 m-0 ">
                            <div
                                class="form-group card bg-blue bg-darken-4 border-2 border-blue border-darken-2 px-0 p-8-y m-4px ">
                                <label class="info lighten-4" for="">Game Name 4</label>
                                <p class="w-100 p-4px m-0 text-center">
                                    100000000
                                </p>
                                <small id="CloseTime"
                                    class="form-text text-bold-700 font-medium-4 text-success">Profit</small>
                            </div>
                        </div>
                        <div class="col-4 p-0 m-0 ">
                            <div
                                class="form-group card bg-blue bg-darken-4 border-2 border-blue border-darken-2 px-0 p-8-y m-4px ">
                                <label class="info lighten-4" for="">Game Name 5</label>
                                <p class="w-100 p-4px m-0 text-center">
                                    -100000000
                                </p>
                                <small id="CloseTime"
                                    class="form-text text-bold-700 font-medium-4 danger lighten-3">Loss</small>
                            </div>
                        </div>
                        <div class="col-4 p-0 m-0 ">
                            <div
                                class="form-group card bg-blue bg-darken-4 border-2 border-blue border-darken-2 px-0 p-8-y m-4px ">
                                <label class="info lighten-4" for="">Game Name 6</label>
                                <p class="w-100 p-4px m-0 text-center">
                                    100000000
                                </p>
                                <small id="CloseTime"
                                    class="form-text text-bold-700 font-medium-4 text-success">Profit</small>
                            </div>
                        </div>
                        <div class="col-4 p-0 m-0 ">
                            <div
                                class="form-group card bg-blue bg-darken-4 border-2 border-blue border-darken-2 px-0 p-8-y m-4px ">
                                <label class="info lighten-4" for="">Game Name 7</label>
                                <p class="w-100 p-4px m-0 text-center">
                                    -100000000
                                </p>
                                <small id="CloseTime"
                                    class="form-text text-bold-700 font-medium-4 danger lighten-3">Loss</small>
                            </div>
                        </div>

                    </div>


                    <div class="col-12 col-xl-6 d-flex flex-wrap text-center p-0 ">
                        <div class="card-header col-12 px-0">
                            <h4 class="card-title text-red ">Single Result Game</h4>
                        </div>
                        <div class="col-12">
                            <div class="form-group mx-1 border-red rounded row">
                                <div class="col-4">
                                    <p class="w-100 red p-4px m-0 text-center">
                                        Total:-
                                    </p>
                                </div>
                                <div class="col-8">
                                    <p class="w-100 p-4px m-0 text-center">
                                        -100000000
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 p-0 m-0 ">
                            <div
                                class="form-group card bg-red bg-darken-4 border-2 border-red border-darken-2 px-0 p-8-y m-4px ">
                                <label class="red lighten-4" for="">Game Name 1</label>
                                <p class="w-100 p-4px m-0 text-center">
                                    -100000000
                                </p>
                                <small id="CloseTime"
                                    class="form-text text-bold-700 font-medium-4 danger lighten-3">Loss</small>
                            </div>
                        </div>
                        <div class="col-4 p-0 m-0 ">
                            <div
                                class="form-group card bg-red bg-darken-4 border-2 border-red border-darken-2 px-0 p-8-y m-4px ">
                                <label class="red lighten-4" for="">Game Name 2</label>
                                <p class="w-100 p-4px m-0 text-center">
                                    100000000
                                </p>
                                <small id="CloseTime"
                                    class="form-text text-bold-700 font-medium-4 text-success">Profit</small>
                            </div>
                        </div>
                        <div class="col-4 p-0 m-0 ">
                            <div
                                class="form-group card bg-red bg-darken-4 border-2 border-red border-darken-2 px-0 p-8-y m-4px ">
                                <label class="red lighten-4" for="">Game Name 3</label>
                                <p class="w-100 p-4px m-0 text-center">
                                    -100000000
                                </p>
                                <small id="CloseTime"
                                    class="form-text text-bold-700 font-medium-4 danger lighten-3">Loss</small>
                            </div>
                        </div>
                        <div class="col-4 p-0 m-0 ">
                            <div
                                class="form-group card bg-red bg-darken-4 border-2 border-red border-darken-2 px-0 p-8-y m-4px ">
                                <label class="red lighten-4" for="">Game Name 4</label>
                                <p class="w-100 p-4px m-0 text-center">
                                    100000000
                                </p>
                                <small id="CloseTime"
                                    class="form-text text-bold-700 font-medium-4 text-success">Profit</small>
                            </div>
                        </div>
                        <div class="col-4 p-0 m-0 ">
                            <div
                                class="form-group card bg-red bg-darken-4 border-2 border-red border-darken-2 px-0 p-8-y m-4px ">
                                <label class="red lighten-4" for="">Game Name 5</label>
                                <p class="w-100 p-4px m-0 text-center">
                                    -100000000
                                </p>
                                <small id="CloseTime"
                                    class="form-text text-bold-700 font-medium-4 danger lighten-3">Loss</small>
                            </div>
                        </div>
                        <div class="col-4 p-0 m-0 ">
                            <div
                                class="form-group card bg-red bg-darken-4 border-2 border-red border-darken-2 px-0 p-8-y m-4px ">
                                <label class="red lighten-4" for="">Game Name 6</label>
                                <p class="w-100 p-4px m-0 text-center">
                                    100000000
                                </p>
                                <small id="CloseTime"
                                    class="form-text text-bold-700 font-medium-4 text-success">Profit</small>
                            </div>
                        </div>
                        <div class="col-4 p-0 m-0 ">
                            <div
                                class="form-group card bg-red bg-darken-4 border-2 border-red border-darken-2 px-0 p-8-y m-4px ">
                                <label class="red lighten-4" for="">Game Name 7</label>
                                <p class="w-100 p-4px m-0 text-center">
                                    -100000000
                                </p>
                                <small id="CloseTime"
                                    class="form-text text-bold-700 font-medium-4 danger lighten-3">Loss</small>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 d-flex flex-wrap justify-content-center align-content-right px-0 pt-2">

                        <div class=" w-100 py-1 px-0 m-0 border-top-white flex-wrap">

                            <button type="button" class="m-4px float-right btn btn-white text-black"
                                data-dismiss="modal">Close</button>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>
    <!-- Ends Model Of This Page Game's earning / loss Model  -->


    <!-- Start Model Of This Page Payment Qr Code Model  -->

    <div class="modal fade" id="QrPaymentModel" tabindex="-1" role="dialog" aria-labelledby="QrPaymentModelTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl w-100 justify-content-center" role="document">
            <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 p-0 modal-content border-white badge-success">

                <div class="modal-header">
                    <h5 class="modal-title dark font-weight-bolder" id="exampleModalLongTitle">QR Code Details
                    </h5>
                    <button type="button" class="close dark font-weight-bolder" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="col-12  d-flex flex-wrap">
                    <div class="col-12 d-flex flex-wrap">
                        <div class="col-12 col-md-6">
                            <div class="form-group row">
                                <label class="col-md-3 label-control dark font-weight-bolder" for="ShutBefore">QR
                                    Type</label>
                                <div class="col-md-9">
                                    <select id="UPIType"
                                        class="px-9 input-text-area border border-dark badge-black text-light"
                                        name="PhoneAccountType" id="State" required>
                                        <option value="" disabled="" selected="">Online Payment Type</option>
                                        <option value="AN">Whatsapp Pay</option>
                                        <option value="AP">Google Pay (G-pay)</option>
                                        <option value="AR">Phonepe</option>
                                        <option value="AS">Paytm</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group row">
                                <label class="col-md-3 label-control dark font-weight-bolder" for="ShutBefore">Phone
                                    No.</label>
                                <div class="col-md-9">
                                    <input type="tel" id="FrontContact"
                                        class="px-9 input-text-area border border-dark badge-black text-light"
                                        name="FrontContact" placeholder="This Contact will Show up on Front End"
                                        value="9876543210" maxlength="10">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-wrap">
                        <div class="col-12 col-md-6">
                            <div class="form-group row">
                                <label class="col-md-3 label-control dark font-weight-bolder" for="ShutBefore">Upload QR
                                    Image</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input type="file"
                                            class="custom-file-input  border border-dark bg-black text-light"
                                            id="inputGroupFile01">
                                        <label class="custom-file-label  border border-dark badge-black text-light"
                                            for="inputGroupFile01">Upload QR
                                            Image</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group row">
                                <label class="col-md-3 label-control dark font-weight-bolder" for="ShutBefore">Expires
                                    On</label>
                                <div class="col-md-9">
                                    <input type="date" id="FrontContact"
                                        class="px-9 input-text-area border border-dark badge-black text-light"
                                        name="FrontContact" placeholder="This Contact will Show up on Front End"
                                        value="9876543210" maxlength="10">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 d-flex flex-wrap justify-content-center align-content-right px-0 pt-2">
                        <label class="col-12 text-center label-control dark font-weight-bolder" for="ShutBefore">
                            Preview Of Uploaded QR Image
                        </label>
                        <figure class="col-lg-3 col-md-6 col-sm-6 col-xs-12" itemprop="associatedMedia" itemscope=""
                            itemtype="http://schema.org/ImageObject">
                            <img class="img-thumbnail img-fluid" src="payment-QR/1.png" itemprop="thumbnail"
                                alt="Image description">
                        </figure>
                    </div>

                    <div class="col-12 d-flex flex-wrap justify-content-center align-content-right px-0 pt-2">

                        <div class=" w-100 py-1 px-0 m-0 border-top-white flex-wrap">

                            <button type="button" class="m-4px float-right btn btn-white text-black"
                                data-dismiss="modal">+ ADD</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>

@include('header.footer_head')
@include('header.footer_toe')
