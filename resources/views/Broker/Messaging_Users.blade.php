

@include('header.nav_bar_head') 
@include('header.nav_bar_toe')
<link rel="stylesheet" type="text/css" href="{{asset('public/app-assets/vendors/css/tables/datatable/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/app-assets/css/pages/Dated-Double-Result.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/app-assets/css/pages/All-Results.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}" />


<div class="content-wrapper">
    <div class="content-body">


        <!-- Row grouping -->
        <section id="row-grouping">
            <div class="row">
                <div class="col-12">
                    <div class="card badge-theme-black">
                        <div class="card-header p-4-b">
                            <h5 class="card-title info">Message By Admin</h5>
                            <div class="heading-elements">
                                <button class="btn btn-sm btn-info btn-lighten-4 text-black" data-toggle="modal"
                                    data-target="#AddDoubleGameModel">+ New Message</button>
                            </div>
                        </div>

                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard p-4px">
                                <div class="table-responsive">
                                    <table
                                        class="table info lighten-4 w-100 table-xs table-responsive-xs table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl table-theme-dark table-hover table-striped  table-bordered default-ordering text-center p-0">
                                        <thead>
                                            <tr>
                                                <th>Edit</th>
                                                <th>No</th>
                                                <th>Title</th>
                                                <th>To Whom</th>
                                                <th>Active</th>
                                                <th>Starts</th>
                                                <th>Ends</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><button class="btn btn-sm btn-success text-black p-4px"
                                                        data-toggle="modal" data-target="#AddDoubleGameModel"><i
                                                            class=" font-medium-4 la la-edit"></i></button></td>
                                                <td>1</td>
                                                <td>Welcome Broker</td>
                                                <td>Broker</td>
                                                <td>Yes</td>
                                                <td><?= date("d/m/Y D") ?></td>
                                                <td><?= date("d/m/Y D") ?></td>
                                                <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                                                            class=" font-medium-4 la la-close"></i></button></td>
                                            </tr>
                                           


                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Edit</th>
                                                <th>No</th>
                                                <th>Title</th>
                                                <th>To Whom</th>
                                                <th>Active</th>
                                                <th>Starts</th>
                                                <th>Ends</th>
                                                <th>Delete</th>
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
                    class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 p-0 modal-content border bg-gradient-directional-primary">
                    <div class="modal-header">
                        <h5 class="modal-title white font-weight-bolder" id="exampleModalLongTitle">Message By Admin
                        </h5>
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
                                            <label class="col-md-3 label-control white font-weight-bolder">Start
                                                Date</label>
                                            <div class="col-md-9">
                                                <input type="date" id="start_date" name="start_date" 
                                                    class="form-control border-warning " placeholder="Start Date" value=""
                                                    >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control white font-weight-bolder">End
                                                Date</label>
                                            <div class="col-md-9">
                                                <input type="date" id="end_date" name="end_date" class="form-control border-warning "
                                                    placeholder="End Date" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control white font-weight-bolder"
                                                for="TitleName">Title Name</label>
                                            <div class="col-md-9">
                                                <input type="text" id="title_name" class="form-control border-primary"
                                                    placeholder="Title Name" name="title_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control white font-weight-bolder"
                                                for="Sn">SN.</label>
                                            <div class="col-md-9">
                                                <input type="number" id="serial_id" class="form-control border-primary"
                                                    placeholder="SN" name="serial_id">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control white font-weight-bolder"
                                                for="MsgActive">Active ?</label>
                                            <div class="col-md-9">
                                                <select id="MsgActive" name="MsgActive" class="form-control">
                                                    <option value="1">Yes</option>
                                                    <option value="0" selected>NO</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control white font-weight-bolder"
                                                for="Team">Team</label>
                                            <div class="col-md-9">
                                                <select id="Team" name="Team" class="form-control">
                                                    <option value="Admin" disabled="" selected>Select Which Team
                                                    </option>
                                                    <option value="1">User</option>
                                                    <option value="2">Broker</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 p-4-x">
                                    <div class="form-group row">

                                        <div class="col-12">
                                            <textarea name="msg" id="msg" class="ckeditor">

                                                <h1>हमारे द्वारा बहुत प्रयास किया गया है पर आपको छोटे रूप में लाइन
                                                    दिखा रहे है चलिए
                                                    आपको दिखाते हैं</h1>
                                            
                                            </textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions right">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn bg-white blue darken-4 text-uppercase" id="submitform">+
                                        Add</button>
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
<script type="text/javascript" src="{{ asset('public/transaction/msg_details.js')}}"></script>
<script type="text/javascript">
  $.ajaxSetup({
  headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
});

var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

 function editUserdetails(userid) {
 
  var url ='{!! route('Edit-User') !!}';
  $.ajax({
    url: url,
        type: 'POST',
        dataType: 'json',
        data: {_token: CSRF_TOKEN, userid:userid},
    }).done(function (data) {
      
    $('#UserID').val(data.user_id);
    $('#UserName').val(data.user_name);
    $('#email_id').val(data.email);
    $('#Password').val(data.password);
    $('#Mobile').val(data.mobile_no);
    $('#sec_mobile').val(data.phone_no);
    $('#Address').val(data.address);
    $('#AccNumber').val(data.account_no);
    $('#Ifsc').val(data.ifsc_code);
    $('#pincode').val(data.pincode);
    $('#OwnGame').val(data.own_game);
    $('#userType').val(data.user_type);
    $('#State').val(data.state);
    $('#UserActive').val(data.is_active); 
    $('#userpercentage').val(data.partnership_percentage);
    $('#type_play').val(data.type_play);

    }).fail(function(data){ 
       console.log(data);
     });
  }
</script>