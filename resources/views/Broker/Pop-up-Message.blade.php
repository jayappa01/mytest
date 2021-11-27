@include('header.nav_bar_head') 
@include('header.nav_bar_toe')
<link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/pages/Dated-Double-Result.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/css/tables/datatable/datatables.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="content-wrapper">
    <div class="content-body">


        <!-- Row grouping -->
        <section id="row-grouping">
            <div class="row">
                <div class="col-12">
                    <div class="card badge-theme-black">
                        <div class="card-header p-4-b">
                            <h5 class="card-title info">Pop-Up Messages</h5>
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
                            <div class="card-body card-dashboard p-4px">
                                <div class="table-responsive">
                                    <table
                                        class="table info lighten-4 w-100 table-xs table-responsive-xs table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl table-theme-dark table-hover table-striped table-bordered default-ordering text-center p-0">
                                        <thead>
                                            <tr>
                                                <th>Edit</th>
                                                <th>SN</th>
                                                <th>Team</th>
                                                <th>Sec</th>
                                                <th>Message</th>
                                                <th>Starts</th>
                                                <th>Ends</th>
                                                <th>Clear</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <button class="btn btn-sm btn-success text-black p-4px"
                                                        data-toggle="modal" data-target="#AddDoubleGameModel">
                                                        <i class=" font-medium-4 la la-edit"></i>
                                                    </button>
                                                </td>
                                                <td>1</td>
                                                <td>User</td>
                                                <td>5</td>
                                                <td>कल्याण सिंगल जोड़ी स्कीम हैं</td>
                                                <td>Da/Mo/Year</td>
                                                <td>Da/Mo/Year</td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger text-black p-4px">
                                                        <i class=" font-medium-4 la la-close"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <button class="btn btn-sm btn-success text-black p-4px"
                                                        data-toggle="modal" data-target="#AddDoubleGameModel">
                                                        <i class=" font-medium-4 la la-edit"></i>
                                                    </button>
                                                </td>
                                                <td>2</td>
                                                <td>Broker</td>
                                                <td>5</td>
                                                <td>रहे है चलिए आपको दिखाते हैं</td>
                                                <td>Da/Mo/Year</td>
                                                <td>Da/Mo/Year</td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger text-black p-4px">
                                                        <i class=" font-medium-4 la la-close"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <button class="btn btn-sm btn-success text-black p-4px"
                                                        data-toggle="modal" data-target="#AddDoubleGameModel">
                                                        <i class=" font-medium-4 la la-edit"></i>
                                                    </button>
                                                </td>
                                                <td>3</td>
                                                <td>Front-End</td>
                                                <td>5</td>
                                                <td>पर आपको छोटे रूप में लाइन</td>
                                                <td>Da/Mo/Year</td>
                                                <td>Da/Mo/Year</td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger text-black p-4px">
                                                        <i class=" font-medium-4 la la-close"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Edit</th>
                                                <th>SN</th>
                                                <th>Team</th>
                                                <th>Sec</th>
                                                <th>Message</th>
                                                <th>Starts</th>
                                                <th>Ends</th>
                                                <th>Clear</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Row grouping -->

        <!-- Start Model Of This Page  -->
        <div class="modal fade" id="AddDoubleGameModel" tabindex="-1" role="dialog"
            aria-labelledby="AddDoubleGameModelTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl w-100 justify-content-center" role="document">
                <div
                    class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 p-0 modal-content border bg-gradient-directional-info">
                    <div class="modal-header">
                        <h5 class="modal-title white font-weight-bolder" id="exampleModalLongTitle">Update Pop-Up
                            Message</h5>
                        <button type="button" class="close black font-weight-bolder" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <div class="modal-body p-8-x px-0 px-md-1 px-lg-2">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control white font-weight-bolder">Sart
                                                Date</label>
                                            <div class="col-md-9">
                                                <input type="date" id="PopStartDate"
                                                    class="form-control border-warning " placeholder="SN" value=""
                                                    name="PopStartDate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control white font-weight-bolder">End
                                                Date</label>
                                            <div class="col-md-9">
                                                <input type="date" id="PopStartEnd" class="form-control border-warning "
                                                    placeholder="SN" value="" name="PopStartEnd">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 p-4-x">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <textarea name="ckeditor h-100" id="ckeditor" class="ckeditor">

                                                <h1>हमारे द्वारा बहुत प्रयास किया गया है पर आपको छोटे रूप में लाइन
                                                    दिखा रहे है चलिए
                                                    आपको दिखाते हैं</h1>
                                            
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control white font-weight-bolder">Select
                                                Team</label>
                                            <div class="col-md-9">
                                                <select id="popteam" name="popteam" class="form-control">
                                                    <option value="" disabled="" selected>Select Team</option>
                                                    <option value="tp">User</option>
                                                    <option value="md">Broker</option>
                                                    <option value="bt">Front-End</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control white font-weight-bolder">Seconds
                                                Delay</label>
                                            <div class="col-md-9">
                                                <input type="num" id="Popsec" class="form-control border-warning "
                                                    placeholder="SN" value="10" name="Popsec">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions right">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button"
                                        class="btn bg-white blue darken-4 text-uppercase">Update</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ends Model Of This Page  -->


    </div>
</div>
</div>

@include('header.footer_head')
@include('header.footer_toe')

<script type="text/javascript" src="{{ asset('public/app-assets/vendors/js/tables/datatable/datatables.js')}}" ></script>
<script type="text/javascript" src="{{ asset('public/app-assets/js/scripts/tables/datatables/datatable-basic.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/app-assets/vendors/js/editors/ckeditor/ckeditor.js')}}" ></script>