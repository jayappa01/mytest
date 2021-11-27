@include('header.nav_bar_head') 
@include('header.nav_bar_toe')
<link rel="stylesheet" type="text/css" href="{{ asset('public/css/custom.css')}}">

<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="content-wrapper">
  <div class="content-body">


    <!-- Row grouping -->
    <section id="row-grouping">
      <div class="row">
        <div class="col-12">
          <div class="card badge-theme-black">
            <div class="card-header p-4-b">
              <h4 class="card-title white">Add Result Advance</h4>
              <h5 class="text-uppercase font-weight-bolder line-height-1 text-warning pt-1">
                <?= date("d/m/Y ⇢ D") ?>
              </h5>
              <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                  <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-content collapse show">
              <div class="card-body card-dashboard p-4px">
                <div class="table-responsive">
                  <table
                    class="table w-100 table-xs table-responsive-xs table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl table-theme-dark table-hover table-striped  table-bordered default-ordering text-center p-0">
                    <thead>
                      <tr>
                        <th>Edit</th>
                        <th>No</th>
                        <th>Game Name</th>
                        <th>Open Time</th>
                        <th>Result</th>
                        <th>Close Time</th>
                        <th>Date</th>
                        <th>Clear</th>
                        <th>Updated</th>
                        <th>Company</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>1</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team1</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>2</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team1</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>3</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team1</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>4</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team1</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>5</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team1</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>6</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b class="red">230_55_780</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team1</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>7</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team1</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>8</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team1</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>9</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team1</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>10</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team1</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>11</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team1</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>12</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team1</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>13</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team1</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>14</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team1</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>15</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team1</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>16</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team1</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>17</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team1</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>18</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team1</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>19</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team1</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>20</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team1</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>21</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team1</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>22</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team1</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>23</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team1</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>24</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team1</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>25</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team2</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>26</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team2</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>27</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team2</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>28</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team2</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>29</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team2</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>30</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team2</td>
                      </tr>
                      <tr>
                        <td><button class="btn btn-sm btn-success text-black p-4px" data-toggle="modal"
                            data-target="#AddResultModel"><i class=" font-medium-4 la la-edit"></i></button></td>
                        <td>31</td>
                        <td>Game Name</td>
                        <td>02:00 Am</td>
                        <td><b>123_<b class="warning">63</b>_580</b></td>
                        <td>04:00 Am</td>
                        <td><?= date("d/m/Y D") ?></td>
                        <td><button class="btn btn-sm btn-danger text-black p-4px"><i
                              class=" font-medium-4 la la-eraser"></i></button></td>
                        <td>04:04_Am</td>
                        <td>Team2</td>
                      </tr>

                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Edit</th>
                        <th>No</th>
                        <th>Game Name</th>
                        <th>Open Time</th>
                        <th>Result</th>
                        <th>Close Time</th>
                        <th>Date</th>
                        <th>Clear</th>
                        <th>Updated</th>
                        <th>Company</th>
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
    <div class="modal fade" id="AddResultModel" tabindex="-1" role="dialog" aria-labelledby="AddResultModelTitle"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl w-100 justify-content-center" role="document">
        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-9 p-0 modal-content badge-theme-black border ">
          <div class="modal-header">
            <h5 class="modal-title text-white" id="exampleModalLongTitle">Declare Open Result</h5>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body px-0 px-md-1 px-lg-2">


            <div class=" pb-1">
              <div class="w-100 text-white text-uppercase flex text-center pb-1">
                <div class="game-chart-name font-large-1 font-weight-bolder resulttexttheme">Game Name</div>
                <div class=" game-chart-time-text ">Time - <b
                    class="resulttexttheme game-chart-time font-weight-bolder">03:00
                    PM</b> /
                  <b class="resulttexttheme game-chart-time font-weight-bolder">04:00 PM</b>
                </div>
              </div>

              <div class=" border border-black rounded overflow-hidden">
                <div class="d-flex bg-black text-white">
                  <div class="days-bar-date d-flex justify-content-center align-items-center">
                    <div class="">Date</div>
                  </div>
                  <div class="days-bar-day d-flex justify-content-center align-items-center">
                    <div class="">Mon</div>
                  </div>
                  <div class="days-bar-day d-flex justify-content-center align-items-center">
                    <div class="">Tue</div>
                  </div>
                  <div class="days-bar-day d-flex justify-content-center align-items-center">
                    <div class="">Wed</div>
                  </div>
                  <div class="days-bar-day d-flex justify-content-center align-items-center">
                    <div class="">Thu</div>
                  </div>
                  <div class="days-bar-day d-flex justify-content-center align-items-center">
                    <div class="">Fri</div>
                  </div>
                  <div class="days-bar-day d-flex justify-content-center align-items-center">
                    <div class="">Sat</div>
                  </div>
                  <div class="days-bar-day d-flex justify-content-center align-items-center">
                    <div class="">Sun</div>
                  </div>
                </div>


                <div class="d-flex row-striped text-white">
                  <div class="Chart-col-date d-flex justify-content-around align-items-center">
                    <div class="text-center ">28/05/2021 <br>To<br> 05/06/2021 </div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                </div>
                <div class="d-flex row-striped text-white">
                  <div class="Chart-col-date d-flex justify-content-around align-items-center">
                    <div class=" text-center ">28/05/2021 <br>To<br> 05/06/2021 </div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col the-red-result d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                </div>
                <div class="d-flex row-striped text-white">
                  <div class="Chart-col-date d-flex justify-content-around align-items-center">
                    <div class=" text-center ">28/05/2021 <br>To<br> 05/06/2021 </div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                </div>
                <div class="d-flex row-striped text-white">
                  <div class="Chart-col-date d-flex justify-content-around align-items-center">
                    <div class=" text-center ">28/05/2021 <br>To<br> 05/06/2021 </div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col the-red-result d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                </div>
                <div class="d-flex row-striped text-white">
                  <div class="Chart-col-date d-flex justify-content-around align-items-center">
                    <div class=" text-center ">28/05/2021 <br>To<br> 05/06/2021 </div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                </div>
                <div class="d-flex row-striped text-white">
                  <div class="Chart-col-date d-flex justify-content-around align-items-center">
                    <div class=" text-center ">28/05/2021 <br>To<br> 05/06/2021 </div>
                  </div>
                  <div class="Chart-col the-red-result d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                </div>
                <div class="d-flex row-striped text-white">
                  <div class="Chart-col-date d-flex justify-content-around align-items-center">
                    <div class=" text-center ">28/05/2021 <br>To<br> 05/06/2021 </div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana">123</div>
                    <div class="">66</div>
                    <div class=" vertical-pana">123</div>
                  </div>
                  <div class="Chart-col charttodaysbox d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana"></div>
                    <div class=""></div>
                    <div class=" vertical-pana"></div>
                  </div>
                  <div class="Chart-col d-flex justify-content-around align-items-center">
                    <div class=" vertical-pana"></div>
                    <div class=""></div>
                    <div class=" vertical-pana"></div>
                  </div>
                </div>
                <div class="d-flex bg-black text-white">
                  <div class="days-bar-date d-flex justify-content-center align-items-center">
                    <div class="">Date</div>
                  </div>
                  <div class="days-bar-day d-flex justify-content-center align-items-center">
                    <div class="">Mon</div>
                  </div>
                  <div class="days-bar-day d-flex justify-content-center align-items-center">
                    <div class="">Tue</div>
                  </div>
                  <div class="days-bar-day d-flex justify-content-center align-items-center">
                    <div class="">Wed</div>
                  </div>
                  <div class="days-bar-day d-flex justify-content-center align-items-center">
                    <div class="">Thu</div>
                  </div>
                  <div class="days-bar-day d-flex justify-content-center align-items-center">
                    <div class="">Fri</div>
                  </div>
                  <div class="days-bar-day d-flex justify-content-center align-items-center">
                    <div class="">Sat</div>
                  </div>
                  <div class="days-bar-day d-flex justify-content-center align-items-center">
                    <div class="">Sun</div>
                  </div>
                </div>
              </div>
            </div>



            <div class="card bg-blue-grey bg-darken-4 border-blue-grey border-darken-1">
              <div class="card-header" id="heading-links">
                <h4 class="card-title white">Select The Result</h4>
              </div>
              <div class="card-body pt-0 p-4-x">

                <div class="d-flex flex-wrap">

                  <div class="col-12 line-height-1 p-4-t pb-1 font-medium-4 text-center">
                    <b class="bg-light text-black px-1 p-4-y font-weight-bolder rounded"><?= date("d/m/Y ⇢ D") ?></b>
                  </div>

                  <div class="col-12 line-height-1 p-4-t pb-1 font-large-1 text-center">
                    <b class="bg-success bg-darken-4 text-white px-1 p-4-y font-weight-bolder text-uppercase rounded">Game
                      Name</b>
                  </div>

                  <div class="col-12 line-height-1 py-1 font-large-2 text-center font-weight-bolder">
                    <b class="info">450-9</b><b class="warning">4-220</b>
                  </div>

                  <div class=" col-12 col-md-12 col-lg-6 px-1">
                    <div class="form-group d-flex justify-content-center bg-info py-1 rounded ">
                      <label class="label-control font-weight-bolder font-large-1 line-height-1 px-1 p-4-t "
                        for="Open-result">OPEN</label>
                      <select id="Open-result" for="Open-panna"
                        class="input-text-area rounded border border-dark badge-black font-medium-3 text-center"
                        required>
                        <option value="" disabled selected>Figure</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="0">0</option>
                        <option value="*">*</option>
                      </select>
                      <select id="Open-pana"
                        class="m-4-x input-text-area rounded border border-dark badge-black font-medium-3 text-center"
                        required>
                        <option value="" disabled selected>Set Pana</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="***">***</option>
                      </select>
                    </div>
                  </div>

                  <div class=" col-12 col-md-12 col-lg-6 px-1">
                    <div class="form-group d-flex justify-content-center bg-warning py-1 rounded ">
                      <label class="label-control font-weight-bolder font-large-1 line-height-1 px-1 p-4-t "
                        for="Close-result">CLOSE</label>
                      <select id="Close-result" for="Close-panna"
                        class="input-text-area rounded border border-dark badge-black font-medium-3 text-center"
                        required>
                        <option value="" disabled selected>Figure</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="0">0</option>
                        <option value="*">*</option>
                      </select>

                      <select id="Close-panna"
                        class="m-4-x input-text-area rounded border border-dark badge-black font-medium-3 text-center"
                        required>
                        <option value="" disabled selected>Set Pana</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="230">230</option>
                        <option value="***">***</option>
                      </select>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn bg-cyan bg-accent-2 text-black text-uppercase">Declare</button>
            </div>

          </div>
        </div>
      </div>
      <!-- Ends Model Of This Page  -->

    </div>
  </div>
</div>
</div>

@include('header.footer_head')
@include('header.footer_toe')