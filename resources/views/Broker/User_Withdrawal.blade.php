@include('header.nav_bar_head') 
@include('header.nav_bar_toe')
<div class="content-wrapper">
  <div class="content-body">
    <!-- Row grouping -->
    <section id="row-grouping">
      <div class="row">
        <div class="col-12">
          <div class="card badge-theme-black">
            <div class="card-header p-4-b">
              <h5 class="card-title warning">All Withdrawal Request</h5>
              <div class="heading-elements">
                <button class="btn btn-sm btn-warning btn-lighten-4 text-black" data-toggle="modal"
                  data-target="#WithdrawalModel">+ Double
                  Game</button>
              </div>
            </div>

            <div class="card-content collapse show">
              <div class="card-body card-dashboard p-4px">
                <div class="table-responsive">
                  <table
                    class="table table warning lighten-4 w-100 table-xs table-responsive-xs table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl table-theme-dark table-hover table-striped table-bordered default-ordering text-center p-0">
                    <thead>
                      <tr>
                        <th>Check</th>
                        <th>Date</th>
                        <th>F/S</th>
                        <th>Id</th>
                        <th>Phone</th>
                        <th>State</th>
                        <th>Request</th>
                        <th>Reque type</th>
                        <th>Trans Id</th>
                        <th>Who</th>
                        <th>Completed</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                     
                      <tr>
                        <td><button class="btn btn-sm btn-warning btn-darken-3 text-black p-4px" data-toggle="modal"
                            data-target="#WithdrawalModel"><i class=" font-medium-4 la la-credit-card"></i></button>
                        </td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td>Fast</td>
                        <td>#405090</td>
                        <td>1234567890</td>
                        <td>Maharashtra</td>
                        <td>4,000</td>
                        <td>Whatsapp</td>
                        <td>1597864294316</td>
                        <td>User</td>
                        <th>Yes</th>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Check</th>
                        <th>Date</th>
                        <th>F/S</th>
                        <th>Id</th>
                        <th>Phone</th>
                        <th>State</th>
                        <th>Request</th>
                        <th>Reque type</th>
                        <th>Trans Id</th>
                        <th>Who</th>
                        <th>Completed</th>
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
    <div class="modal fade" id="WithdrawalModel" tabindex="-1" role="dialog" aria-labelledby="WithdrawalModelTitle"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl w-100 justify-content-center" role="document">
        <div
          class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 p-0 modal-content border bg-gradient-x-orange-yellow ">
          <div class="modal-header">
            <h5 class="modal-title white font-weight-bolder" id="exampleModalLongTitle">Withdrawal Request</h5>
            <button type="button" class="close dark font-weight-bolder" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body p-8-x px-0 px-md-1 px-lg-2">
            <form class="form form-horizontal">
              <div class="form-body">
                <h4 class="form-section label-control white font-weight-bolder text-wrap"><i
                    class="icon-calendar text-dark"></i>
                  <?= date("d/m/Y D") ?> <i class="ft-watch text-dark"></i> 4:30_Pm
                </h4>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control white font-weight-bolder">Name</label>
                      <div class="col-md-9">
                        <h4 class="black ">User Name</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control white font-weight-bolder">Id</label>
                      <div class="col-md-9">
                        <h4 class="black ">#405090</h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control white font-weight-bolder">State</label>
                      <div class="col-md-9">
                        <h4 class="black ">Maharashtra</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control white font-weight-bolder">Area</label>
                      <div class="col-md-9">
                        <h4 class="black ">Malad</h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control white font-weight-bolder">Phone</label>
                      <div class="col-md-9">
                        <h4 class="black ">9876543210</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control white font-weight-bolder">Who</label>
                      <div class="col-md-9">
                        <h4 class="black ">Broker</h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control white font-weight-bolder">Req Type</label>
                      <div class="col-md-9">
                        <select id="paymenttype" name="paymenttype" class="form-control">
                          <option value="ptm">Paytm</option>
                          <option value="gp">Google pay</option>
                          <option value="wp" selected>Whatsapp</option>
                          <option value="pp">Phone pe</option>
                          <option value="ot">Other</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control white font-weight-bolder">Trans Id</label>
                      <div class="col-md-9">
                        <input type="text" id="rechargeAmount" class="form-control border-warning "
                          placeholder="Recharge Amount" value="1597864294316" name="rechargeAmount">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control white font-weight-bolder">Request</label>
                      <div class="col-md-9">
                        <h4 class="black ">10,000</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control white font-weight-bolder" for="rechargeAmount">Amount</label>
                      <div class="col-md-9">
                        <input type="number" id="rechargeAmount" class="form-control border-warning "
                          placeholder="Recharge Amount" value="10000" name="rechargeAmount">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control white font-weight-bolder" for="rechargeDate">Date</label>
                      <div class="col-md-9">
                        <input type="date" id="rechargeDate" class="form-control border-warning " name="TranDate"
                          value="2013-01-08">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control white font-weight-bolder" for="rechargeTime">Time</label>
                      <div class="col-md-9">
                        <input type="time" id="rechargeTime" class="form-control border-warning " name="TranTime">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control white font-weight-bolder" for="userinput8">Short note</label>
                      <div class="col-md-9">
                        <textarea id="userinput8" rows="6" class="form-control border-primary" name="bio"
                          placeholder="Give Information About Transaction"></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=" pt-1 mb-4 border-top-black flex-wrap">
                  <button type="button" class=" m-4px float-left border-white btn btn-pink white text-uppercase">&times;
                    Denied</button>
                  <button type="button" class="m-4px float-right btn bg-white warning darken-4 text-uppercase">
                    <i class=" font-medium-4 la la-credit-card"></i> Withdrawal</button>
                  <button type="button" class="m-4px float-right btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
   </div>
</div>
</div>

@include('header.footer_head')
<script src="{{ asset('public/app-assets/vendors/js/tables/datatable/datatables.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/app-assets/js/scripts/tables/datatables/datatable-basic.js')}}" type="text/javascript"></script>
@include('header.footer_toe')
