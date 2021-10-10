@include('header.nav_bar_head')
@include('header.nav_bar_toe')
<div class="content-wrapper">
  <div class="content-body">

    <section id="row-grouping">
      <div class="row">
        <div class="col-12">
          <div class="card badge-theme-black">
            <div class="card-header p-4-b">
              <h5 class="card-title pink">All Recharge Request</h5>
              <div class="heading-elements">
                <button class="btn btn-sm btn-pink btn-lighten-4 text-black" data-toggle="modal"
                  data-target="#RechargeModel">+ Double
                  Game</button>
              </div>
            </div>

            <div class="card-content collapse show">
              <div class="card-body card-dashboard p-4px">
                <div class="table-responsive">
                  <table
                    class="table table pink lighten-4 w-100 table-xs table-responsive-xs table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl table-theme-dark table-hover table-striped  table-bordered default-ordering text-center p-0">
                    <thead>
                      <tr>
                        <th>Check</th>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Id</th>
                        <th>Phone</th>
                        <th>State</th>
                        <th>Paid</th>
                        <th>Trans type</th>
                        <th>Trans Id</th>
                        <th>Who</th>
                        <th>Completed</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                      <tr>
                        <td><button class="btn btn-sm btn-pink text-white p-4px" data-toggle="modal"
                            data-target="#RechargeModel"><i class=" font-medium-4 la la-plug"></i></button></td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td>User Name</td>
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
                        <th>Name</th>
                        <th>Id</th>
                        <th>Phone</th>
                        <th>State</th>
                        <th>Paid</th>
                        <th>Trans type</th>
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
    <div class="modal fade" id="RechargeModel" tabindex="-1" role="dialog" aria-labelledby="RechargeModelTitle"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl w-100 justify-content-center" role="document">
        <div
          class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 p-0 modal-content border bg-gradient-directional-pink ">
          <div class="modal-header">
            <h5 class="modal-title white font-weight-bolder" id="exampleModalLongTitle">Recharge Request</h5>
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
                      <label class="col-md-3 label-control dark font-weight-bolder">Name</label>
                      <div class="col-md-9">
                        <h4 class="white ">User Name</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder">Id</label>
                      <div class="col-md-9">
                        <h4 class="white ">#405090</h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder">State</label>
                      <div class="col-md-9">
                        <h4 class="white ">Maharashtra</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder">Area</label>
                      <div class="col-md-9">
                        <h4 class="white ">Malad</h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder">Phone</label>
                      <div class="col-md-9">
                        <h4 class="white ">9876543210</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder">Trans Type</label>
                      <div class="col-md-9">
                        <h4 class="white ">Whatsapp</h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder">Who</label>
                      <div class="col-md-9">
                        <h4 class="white ">Broker</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder">Trans Id</label>
                      <div class="col-md-9">
                        <h4 class="white ">1597864294316</h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder">Paid</label>
                      <div class="col-md-9">
                        <h4 class="white ">10,000</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="rechargeAmount">Amount</label>
                      <div class="col-md-9">
                        <input type="number" id="rechargeAmount" class="form-control border-pink "
                          placeholder="Recharge Amount" value="10000" name="rechargeAmount">
                      </div>
                    </div>
                  </div>
                </div>

                <div class=" pt-1 mb-4 border-top-black flex-wrap">
                  <button type="button"
                    class=" m-4px float-left border-black btn btn-warning black text-uppercase">&times;
                    Denied</button>
                  <button type="button" class="m-4px float-right btn bg-white pink darken-4 text-uppercase">
                    <i class=" font-medium-4 la la-plug"></i> Recharge</button>
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
