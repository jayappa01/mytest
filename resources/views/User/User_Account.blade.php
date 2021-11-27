@include('header.nav_bar_head')
@include('header.nav_bar_toe')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="w-100 d-flex flex-wrap pt-1">

  <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 p-0">
    <div class="col-12 d-flex flex-wrap justify-content-md-center ">
      <div class="w-100 card bg-blue-grey bg-darken-3">
        <div class="card-head">
          <div class="align-self-center halfway-fab text-center p-1">
            <span class="avatar avatar-lg avatar-online rounded-circle">
              <img src="app-assets/images/portrait/small/avatar-s-15.png" alt="avatar">
            </span>
          </div>
          <div class="text-center">
            <span class="font-medium-2 text-uppercase text-white">User Name</span>
            <p class="text-light font-small-2">Direct Player</p>
          </div>
        </div>
        <div class="card-body border-top-blue-grey border-top-lighten-1">
          <!-- contacts view -->
          <div class="card-body ">
            <div class="list-group">
              <div class="badge-black rounded-lg text-center p-1 border border-secondary border-1  ">
                # Refral code
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="w-100 card bg-blue-grey bg-darken-3">
        <div class="card-header">
          <h4 class="card-title text-light" id="horz-layout-card-center">Update Your Password</h4>
        </div>
        <div class="card-content collpase show">
          <div class="card-body">

            <form class="form form-horizontal">
              <div class="form-body">


                <div class="form-group row">
                  <label class="col-md-12 label-control text-white" for="projectinput5">Old Password</label>
                  <div class="col-md-12">
                    <input type="password" id="projectinput5" class="input-text-area border border-dark badge-black"
                      placeholder="Old Password" name="oldpass">
                  </div>
                </div>


                <div class="form-group row">
                  <label class="col-md-12 label-control text-white" for="eventRegInput1">New Password</label>
                  <div class="col-md-12">
                    <input type="password" minlength="8" id="eventRegInput1"
                      class="input-text-area border border-dark badge-black" placeholder="Minimum 8 Letters"
                      name="newpass">
                  </div>
                </div>

                <div class="form-actions center border-top-blue-grey border-top-lighten-1">
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
  </div>

</div>
<div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 p-0 ">
  <div class="col-12 d-flex justify-content-md-center">
    <div class="w-100 card bg-blue-grey bg-darken-3">
      <div class="card-header">
        <h4 class="card-title text-light" id="horz-layout-card-center">Edit Your Profile</h4>
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
        <div class="card-body">

          <form class="form form-horizontal">
            <div class="form-body">



              <div class="form-group row">
                <label class="col-md-3 label-control text-white" for="eventRegInput1">User Name</label>
                <div class="col-md-9">
                  <input type="text" id="eventRegInput1" class="input-text-area border border-dark badge-black"
                    value="UserName" readonly name="userName">
                </div>
              </div>


              <div class="form-group row">
                <label class="col-md-3 label-control text-white" for="projectinput5">First Name</label>
                <div class="col-md-9">
                  <input type="text" id="projectinput5" class="input-text-area border border-dark badge-black"
                    placeholder="First Name" name="firstname">
                </div>
              </div>


              <div class="form-group row">
                <label class="col-md-3 label-control text-white" for="eventRegInput1">Last Name</label>
                <div class="col-md-9">
                  <input type="text" id="eventRegInput1" class="input-text-area border border-dark badge-black"
                    placeholder="Last Name" name="lastname">
                </div>
              </div>



              <div class="form-group row">
                <label class="col-md-3 label-control text-white" for="eventRegInput4">State</label>
                <div class="col-md-9">
                  <select class="input-text-area border border-dark badge-black" name="STATE" id="user_area" required>
                    <option value="" disabled selected>Select Your State</option>
                    <option value="AN">Andaman and Nicobar Islands</option>
                    <option value="AP">Andhra Pradesh</option>
                    <option value="AR">Arunachal Pradesh</option>
                    <option value="AS">Assam</option>
                    <option value="BR">Bihar</option>
                    <option value="CH">Chandigarh</option>
                    <option value="CT">Chhattisgarh</option>
                    <option value="DN">Dadra and Nagar Haveli</option>
                    <option value="DD">Daman and Diu</option>
                    <option value="DL">Delhi</option>
                    <option value="GA">Goa</option>
                    <option value="GJ">Gujarat</option>
                    <option value="HR">Haryana</option>
                    <option value="HP">Himachal Pradesh</option>
                    <option value="JK">Jammu and Kashmir</option>
                    <option value="JH">Jharkhand</option>
                    <option value="KA">Karnataka</option>
                    <option value="KL">Kerala</option>
                    <option value="LD">Lakshadweep</option>
                    <option value="MP">Madhya Pradesh</option>
                    <option value="MH">Maharashtra</option>
                    <option value="MN">Manipur</option>
                    <option value="ML">Meghalaya</option>
                    <option value="MZ">Mizoram</option>
                    <option value="NL">Nagaland</option>
                    <option value="OR">Odisha</option>
                    <option value="PY">Puducherry</option>
                    <option value="PB">Punjab</option>
                    <option value="RJ">Rajasthan</option>
                    <option value="SK">Sikkim</option>
                    <option value="TN">Tamil Nadu</option>
                    <option value="TG">Telangana</option>
                    <option value="TR">Tripura</option>
                    <option value="UP">Uttar Pradesh</option>
                    <option value="UT">Uttarakhand</option>
                    <option value="WB">West Bengal</option>
                  </select>

                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-3 label-control text-white" for="eventRegInput5">Contact Number</label>
                <div class="col-md-9">
                  <input type="tel" id="eventRegInput5" class="input-text-area border border-dark badge-black"
                    name="contact" placeholder="contact number">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-3 label-control text-white">Membership Type</label>
                <div class="col-md-9">
                  <select class="input-text-area border border-dark badge-black" name="membership_type"
                    id="user_membership" required>
                    <option value="" disabled selected>Select Type Of Membership</option>
                    <option value="AN">X 10</option>
                    <option value="AP">X 9</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-actions center border-top-blue-grey border-top-lighten-1">
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




</div>
</div>
@include('header.footer_head')
@include('header.footer_toe')