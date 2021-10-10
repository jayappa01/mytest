

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
              <h5 class="card-title info">All Double Result Game</h5>
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
                        <th>Updated</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddDoubleGameModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>1</td>
                        <td>Welcome Broker</td>
                        <td>Broker</td>
                        <td>Yes</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-close"></i></button></td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddDoubleGameModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>2</td>
                        <td>Welcome User</td>
                        <td>User</td>
                        <td>no</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-close"></i></button></td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddDoubleGameModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>3</td>
                        <td>Welcome Broker</td>
                        <td>Broker</td>
                        <td>Yes</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-close"></i></button></td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddDoubleGameModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>4</td>
                        <td>Welcome User</td>
                        <td>User</td>
                        <td>no</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-close"></i></button></td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddDoubleGameModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>5</td>
                        <td>Welcome Broker</td>
                        <td>Broker</td>
                        <td>Yes</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-close"></i></button></td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddDoubleGameModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>6</td>
                        <td>Welcome User</td>
                        <td>User</td>
                        <td>no</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-close"></i></button></td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddDoubleGameModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>7</td>
                        <td>Welcome Broker</td>
                        <td>Broker</td>
                        <td>Yes</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-close"></i></button></td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddDoubleGameModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>8</td>
                        <td>Welcome User</td>
                        <td>User</td>
                        <td>no</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-close"></i></button></td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddDoubleGameModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>9</td>
                        <td>Welcome Broker</td>
                        <td>Broker</td>
                        <td>Yes</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-close"></i></button></td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddDoubleGameModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>10</td>
                        <td>Welcome User</td>
                        <td>User</td>
                        <td>no</td>
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
                        <th>Updated</th>
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
          class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 p-0 modal-content border bg-gradient-directional-success">
          <div class="modal-header">
            <h5 class="modal-title white font-weight-bolder" id="exampleModalLongTitle">Message By Admin</h5>
            <button type="button" class="close black font-weight-bolder" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body p-8-x px-0 px-md-1 px-lg-2">
            <form class="form form-horizontal">
              <div class="form-body">
                <h4 class="form-section label-control white font-weight-bolder"><i class="la la-comment"></i> Write The
                  Message</h4>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="TitleName">Title Name</label>
                      <div class="col-md-9">
                        <input type="text" id="TitleName" class="form-control border-primary" placeholder="Title Name"
                          name="TitleName">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="Sn">SN.</label>
                      <div class="col-md-9">
                        <input type="number" id="Sn" class="form-control border-primary" placeholder="SN" name="Sn">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-3 label-control dark font-weight-bolder" for="MsgActive">Active ?</label>
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
                      <label class="col-md-3 label-control dark font-weight-bolder" for="Team">Team</label>
                      <div class="col-md-9">
                        <select id="Team" name="Team" class="form-control">
                          <option value="Admin" selected>Admin</option>
                          <option value="User">User</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>





                <div class="form-actions right">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn bg-white blue darken-4 text-uppercase">+ Add</button>
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