@include('header.nav_bar_head') 
@include('header.nav_bar_toe')
<div class="content-wrapper">
  <div class="content-body m-0 p-0">

    <section>

      <!-- Start Double Result Game  -->


      <div class=" col-12  p-2 ">
        <div class=" rotate-180 text-white font-20px float-left " onclick="history.back()">➔</div>
      </div>

      <div class=" col-12 d-flex justify-content-center align-content-center pt-1 p-4-x">

        <div class="col-3 col-sm-3 col-md-3 col-lg-2 col-xl-2 py-1 pl-0 pr-0 nav flex-column nav-tabs " id="v-pills-tab"
          role="tablist" aria-orientation="vertical">
          <button class=" payment-type-btn px-0 btn active" id="v-method-Paytm-tab" data-toggle="pill"
            href="#v-method-Paytm" role="tab" aria-controls="v-method-Paytm" aria-selected="true">Paytm</button>
          <button class=" payment-type-btn px-0 btn" id="v-method-Google-play-tab" data-toggle="pill"
            href="#v-method-Google-play" role="tab" aria-controls="v-method-Google-play" aria-selected="false">Google
            pay</button>
          <button class=" payment-type-btn px-0 btn" id="v-method-WhatsApp-play-tab" data-toggle="pill"
            href="#v-method-WhatsApp-play" role="tab" aria-controls="v-method-WhatsApp-play"
            aria-selected="false">WhatsApp
            Pay</button>
          <button class=" payment-type-btn px-0 btn" id="v-method-PhonePe-tab" data-toggle="pill"
            href="#v-method-PhonePe" role="tab" aria-controls="v-method-PhonePe" aria-selected="false">PhonePe</button>
        </div>
        <div class="col-9 col-sm-9 col-md-9 col-lg-10 col-xl-10 tab-content p-0" id="v-pills-tabContent">



          <div class="tabs-contantStyle h-100 rounded-lg tab-pane fade show active" id="v-method-Paytm" role="tabpanel"
            aria-labelledby="v-method-Paytm-tab">
            <div class="w-100 d-flex align-content-center justify-content-center">
              <div
                class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-5 p-0 pt-1 px-sm-0 pb-sm-0 p-md-1 border border-light rounded border-2">
                <div class="col-12 text-white d-flex align-content-center justify-content-center">
                  <img class=" width-auto height-50 bg-transparent img-fluid " src="{{asset('public/payment-QR/Paytm-pay-logo.png')}}">
                  &nbsp;&nbsp;<b class=" font-large-2 line-height-1 p-4-t"> Paytm</b>
                </div>
                <form method="post" action="{{route('Paytm-Gateway')}}" class="d-flex justify-content-around flex-wrap">

                  <div class="col-12 ">
                    <h6 class="text-center text-white mt-1"> ⇣ Phone Number Attached to<br>your Paytm Account ⇣</h6>
                    <div class="input-group p-4-x pt-1">
                      <div class="input-group-prepend">
                        <span class="input-group-text font-20px py-0 p-4-x"><i class="icon-screen-smartphone"></i>
                          ⇢</span>
                      </div>
                      <input placeholder="Phone Number" type="tel"
                        class=" font-20px py-2 px-0 form-control text-center font-weight-bold" required>
                    </div>
                    <h6 class="text-center text-white mt-1"> ⇣ You Can Edit The Ammount ⇣</h6>
                    <div class="input-group p-4-x pt-1">
                      <div class="input-group-prepend">
                        <span class="input-group-text font-20px py-0 p-4-x"> &nbsp; ₹ ⇢</span>
                      </div>
                      <input placeholder="Enter Amount" type="tel"
                        class="font-20px py-2 px-0 form-control text-center font-weight-bold" value="5000" required>
                    </div>
                  </div>

                  <div class="col-12 py-2 d-flex justify-content-around">
                    <button type="submit" class=" font-20px w-100 btn btn-black text-white">Pay</button>
                  </div>

                </form>
              </div>
            </div>

          </div>
          <div class="tabs-contantStyle h-100 rounded-lg tab-pane fade show" id="v-method-Google-play" role="tabpanel"
            aria-labelledby="v-method-Google-play-tab">
            <div class="w-100 d-flex align-content-center justify-content-center">
              <div
                class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-5 p-0 pt-1 px-sm-0 pb-sm-0 p-md-1 border border-light rounded border-2">
                <div class="col-12 text-white d-flex align-content-center justify-content-center">
                  <img class=" width-50 height-50 bg-transparent img-fluid " src="{{asset('public/payment-QR/google-pay-logo.png')}}">
                  &nbsp;&nbsp;<b class="font-large-1 line-height-2 "> Google pay</b>
                </div>
                <form method="post" action="{{route('G-pay-Gateway')}}" class="d-flex justify-content-around flex-wrap">

                  <div class="col-12 ">
                    <h6 class="text-center text-white mt-1"> ⇣ Phone Number Attached to<br>your Google pay Account ⇣
                    </h6>
                    <div class="input-group p-4-x pt-1">
                      <div class="input-group-prepend">
                        <span class="input-group-text font-20px py-0 p-4-x"><i class="icon-screen-smartphone"></i>
                          ⇢</span>
                      </div>
                      <input placeholder="Phone Number" type="tel"
                        class=" font-20px py-2 px-0 form-control text-center font-weight-bold" required>
                    </div>
                    <h6 class="text-center text-white mt-1"> ⇣ You Can Edit The Ammount ⇣</h6>
                    <div class="input-group p-4-x pt-1">
                      <div class="input-group-prepend">
                        <span class="input-group-text font-20px py-0 p-4-x"> &nbsp; ₹ ⇢</span>
                      </div>
                      <input placeholder="Enter Amount" type="tel"
                        class="font-20px py-2 px-0 form-control text-center font-weight-bold" value="5000" required>
                    </div>
                  </div>

                  <div class="col-12 py-2 d-flex justify-content-around">
                    <button type="submit" class=" font-20px w-100 btn btn-black text-white">Pay</button>
                  </div>

                </form>
              </div>



            </div>
          </div>
          <div class="tabs-contantStyle h-100 rounded-lg tab-pane fade show" id="v-method-WhatsApp-play" role="tabpanel"
            aria-labelledby="v-method-WhatsApp-play-tab">
            <div class="w-100 d-flex align-content-center justify-content-center">
              <div
                class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-5 p-0 pt-1 px-sm-0 pb-sm-0 p-md-1 border border-light rounded border-2">
                <div class="col-12 text-white d-flex align-content-center justify-content-center">
                  <img class=" width-50 height-50 bg-transparent rounded-lg img-fluid "
                    src="{{asset('public/payment-QR/whatsapp-pay-logo.png')}}">
                  &nbsp;&nbsp;<b class=" font-large-1 line-height-2 "> WhatsApp Pay</b>
                </div>
                <form method="post" action="{{route('Whatsapp-pay-Gateway')}}" class="d-flex justify-content-around flex-wrap">

                  <div class="col-12 ">
                    <h6 class="text-center text-white mt-1"> ⇣ Phone Number Attached to<br>your WhatsApp Pay Account ⇣
                    </h6>
                    <div class="input-group p-4-x pt-1">
                      <div class="input-group-prepend">
                        <span class="input-group-text font-20px py-0 p-4-x"><i class="icon-screen-smartphone"></i>
                          ⇢</span>
                      </div>
                      <input placeholder="Phone Number" type="tel"
                        class=" font-20px py-2 px-0 form-control text-center font-weight-bold" required>
                    </div>
                    <h6 class="text-center text-white mt-1"> ⇣ You Can Edit The Ammount ⇣</h6>
                    <div class="input-group p-4-x pt-1">
                      <div class="input-group-prepend">
                        <span class="input-group-text font-20px py-0 p-4-x"> &nbsp; ₹ ⇢</span>
                      </div>
                      <input placeholder="Enter Amount" type="tel"
                        class="font-20px py-2 px-0 form-control text-center font-weight-bold" value="5000" required>
                    </div>
                  </div>

                  <div class="col-12 py-2 d-flex justify-content-around">
                    <button type="submit" class=" font-20px w-100 btn btn-black text-white">Pay</button>
                  </div>

                </form>
              </div>

            </div>
          </div>
          <div class="tabs-contantStyle h-100 rounded-lg tab-pane fade show" id="v-method-PhonePe" role="tabpanel"
            aria-labelledby="v-method-PhonePe-tab">
            <div class="w-100 d-flex align-content-center justify-content-center">
              <div
                class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-5 p-0 pt-1 px-sm-0 pb-sm-0 p-md-1 border border-light rounded border-2">
                <div class="col-12 text-white d-flex align-content-center justify-content-center">
                  <img class=" width-50 height-50 bg-transparent img-fluid " src="{{asset('public/payment-QR/phonepe-logo.png')}}">
                  &nbsp;&nbsp;<b class=" font-large-2 line-height-1 p-4-t"> Phonepe</b>
                </div>
                <form method="post" action="{{route('Phonepe-Gateway')}}" class="d-flex justify-content-around flex-wrap">

                  <div class="col-12 ">
                    <h6 class="text-center text-white mt-1"> ⇣ Phone Number Attached to<br>your Phonepe Account ⇣</h6>
                    <div class="input-group p-4-x pt-1">
                      <div class="input-group-prepend">
                        <span class="input-group-text font-20px py-0 p-4-x"><i class="icon-screen-smartphone"></i>
                          ⇢</span>
                      </div>
                      <input placeholder="Phone Number" type="tel"
                        class=" font-20px py-2 px-0 form-control text-center font-weight-bold" required>
                    </div>
                    <h6 class="text-center text-white mt-1"> ⇣ You Can Edit The Ammount ⇣</h6>
                    <div class="input-group p-4-x pt-1">
                      <div class="input-group-prepend">
                        <span class="input-group-text font-20px py-0 p-4-x"> &nbsp; ₹ ⇢</span>
                      </div>
                      <input placeholder="Enter Amount" type="tel"
                        class="font-20px py-2 px-0 form-control text-center font-weight-bold" value="5000" required>
                    </div>
                  </div>

                  <div class="col-12 py-2 d-flex justify-content-around">
                    <button type="submit" class=" font-20px w-100 btn btn-black text-white">Pay</button>
                  </div>

                </form>
              </div>
            </div>
          </div>

        </div>
      </div>

    </section>
  </div>
</div>

@include('header.footer_head')
@include('header.footer_toe')