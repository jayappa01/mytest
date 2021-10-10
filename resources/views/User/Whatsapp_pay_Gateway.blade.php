@include('header.nav_bar_head') 
@include('header.nav_bar_toe')
<div class="content-wrapper">
  <div class="content-body m-0 p-0">

    <section>

      <!-- Start Double Result Game  -->

      <div class="row">
        <div class="col-12 ">

          <div class="tabs-contant-whatsapp-pay w-100 h-100 rounded-lg p-1 tab-pane fade show active d-flex flex-wrap"
            id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">


            <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center display-block ">
              <div class="rotate-180 text-left float-left">
                <a class="text-white text-left font-20px " onclick="history.back()">➔</a>
              </div>
              <div class="col-12 text-white d-flex align-content-center justify-content-center">
                <img class=" width-50 height-50 bg-transparent img-fluid " src="{{asset('public/payment-QR/whatsapp-pay-logo.png')}}">
                &nbsp;&nbsp;<b class=" font-large-1 line-height-2 "> WhatsApp Pay</b>
              </div>
              <h6 class="text-center text-white my-1">Qr Code & Phone Number</h6>
              <h3 class="text-center text-white mb-1">Please Pay</h3>
              <h2 class="mb-1"><b
                  class="text-black font-weight-bolder font-large-1 px-1 pt-1 p-4-b bg-white rounded-lg"> ₹
                  5000 </b></h2>

              <img class="img-thumbnail img-fluid rounded-lg" src="{{asset('public/payment-QR/1.png')}}">
              <h3 class="text-center text-white my-1"><i class="icon-screen-smartphone"></i> 8928793369</h3>
              <h6 class="text-center text-white mt-1"> ⇣ Please type Bellow Transaction Id ⇣</h6>
              <form action="index.php">

                <input name="Payment-Amount" value="5000" hidden>

                <input name="Payment-PhoneNumber" value="9876543210" hidden>

                <div class="input-group p-4-b p-4-x mb-1 ">
                  <div class="input-group-prepend">
                    <span class="input-group-text font-20px py-0 p-4-x">ID ⇢</span>
                  </div>
                  <input placeholder="Transaction Id" type="text"
                    class=" font-20px py-2 px-0 form-control text-center font-weight-bold" value="" required>
                </div>

                <button type="submit" class="mb-2 btn btn-white text-black">Done</button>

              </form>
            </div>

            <div
              class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-xs-12 p-1 text-center bg-white text-black rounded-sm display-block ">
              <h1 class=" text-black text-capitalize">the place to Write the title</h1>
              <h3 class=" text-black text-capitalize">the place to write sub title</h3>
              <p>here all the information will come in the long formate or you can say the information will be detaile
              </p>
            </div>

          </div>
        </div>
      </div>
      <!-- End Double Result Game  -->
    </section>
  </div>
</div>

@include('header.footer_head')
@include('header.footer_toe')