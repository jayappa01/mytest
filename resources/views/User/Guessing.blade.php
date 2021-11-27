@include('header.nav_bar_head') 
@include('header.nav_bar_toe')


<link rel="stylesheet" type="text/css" href="{{asset('public/custom/css/chat-application.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/custom/css/Guessing.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="row">

  <div class="col-12 ">
    <div class="card-dark py-0 py-lg-1 py-xl-2 px-0 px-lg-1 px-xl-2">
      <div class="card-header WhatsAppbar-color p-0 p-4px d-flex">
        <div class="card-title p-4-x py-0">

          <h2 class="text-white rotate-180 font-weight-bold" onclick="history.back()">➔</h2>
        </div>
        <a class="avatar p-0 m-4-x" style="width: 38px" data-toggle="tooltip" href="#" data-placement="left" title=""
          data-original-title="">
          <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
        </a>
        <h4 class="card-title text-white p-4-x py-0">
          Chat
          <p class="text-white p-0 m-0 p-4-l font-small-3">online</p>
        </h4>

      </div>
      <div class="card-content pb-0">
        <div class="card-body  chat-application mb-0 p-0">
          <div class="chats ps p-4-x chat-height chat-app-window ">
            <div class="chats">

              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>How can we help? We're here for you!</p>
                  </div>
                </div>
              </div>



              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Hey Jacob, Could you please help me to find it out?</p>
                  </div>
                </div>
              </div>


              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Absolutely!</p>
                  </div>
                </div>
              </div>


              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>I am looking for the best Angular admin template.</p>
                    <p>It should be Bootstrap 4 compatible.</p>
                  </div>
                </div>
              </div>


              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Crest admin is the responsive Angular 5 bootstrap 4 admin template.</p>
                  </div>
                </div>
              </div>


              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Looks clean and fresh UI.</p>
                  </div>
                  <div class="chat-content">
                    <p>It's perfect for my next project.</p>
                  </div>
                </div>
              </div>


              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Thanks a lot!</p>
                  </div>
                </div>
              </div>


              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>How can I purchase it?</p>
                  </div>
                </div>
              </div>


              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>From Wrapbootstrap.</p>
                  </div>
                </div>
              </div>


              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>I will purchase it for sure.</p>
                  </div>
                  <div class="chat-content">
                    <p>Thanks.</p>
                  </div>
                </div>
              </div>

              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Great!!</p>
                  </div>
                </div>
              </div>

              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>How can we help? We're here for you!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Hey Jacob, Could you please help me to find it out?</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Absolutely!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>I am looking for the best Angular admin template.</p>
                    <p>It should be Bootstrap 4 compatible.</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Crest admin is the responsive Angular 5 bootstrap 4 admin template.</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Looks clean and fresh UI.</p>
                  </div>
                  <div class="chat-content">
                    <p>It's perfect for my next project.</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Thanks a lot!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>How can I purchase it?</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>From Wrapbootstrap.</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>I will purchase it for sure.</p>
                  </div>
                  <div class="chat-content">
                    <p>Thanks.</p>
                  </div>
                </div>
              </div>

              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Great!!</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>How can we help? We're here for you!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Hey Jacob, Could you please help me to find it out?</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Absolutely!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>I am looking for the best Angular admin template.</p>
                    <p>It should be Bootstrap 4 compatible.</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Crest admin is the responsive Angular 5 bootstrap 4 admin template.</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Looks clean and fresh UI.</p>
                  </div>
                  <div class="chat-content">
                    <p>It's perfect for my next project.</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Thanks a lot!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>How can I purchase it?</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>From Wrapbootstrap.</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>I will purchase it for sure.</p>
                  </div>
                  <div class="chat-content">
                    <p>Thanks.</p>
                  </div>
                </div>
              </div>

              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Great!!</p>
                  </div>
                </div>
              </div>

              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>How can we help? We're here for you!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Hey Jacob, Could you please help me to find it out?</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Absolutely!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>I am looking for the best Angular admin template.</p>
                    <p>It should be Bootstrap 4 compatible.</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Crest admin is the responsive Angular 5 bootstrap 4 admin template.</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Looks clean and fresh UI.</p>
                  </div>
                  <div class="chat-content">
                    <p>It's perfect for my next project.</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Thanks a lot!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>How can I purchase it?</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>From Wrapbootstrap.</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>I will purchase it for sure.</p>
                  </div>
                  <div class="chat-content">
                    <p>Thanks.</p>
                  </div>
                </div>
              </div>

              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Great!!</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>How can we help? We're here for you!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Hey Jacob, Could you please help me to find it out?</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Absolutely!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>I am looking for the best Angular admin template.</p>
                    <p>It should be Bootstrap 4 compatible.</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Crest admin is the responsive Angular 5 bootstrap 4 admin template.</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Looks clean and fresh UI.</p>
                  </div>
                  <div class="chat-content">
                    <p>It's perfect for my next project.</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Thanks a lot!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>How can I purchase it?</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>From Wrapbootstrap.</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>I will purchase it for sure.</p>
                  </div>
                  <div class="chat-content">
                    <p>Thanks.</p>
                  </div>
                </div>
              </div>

              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Great!!</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>How can we help? We're here for you!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Hey Jacob, Could you please help me to find it out?</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Absolutely!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>I am looking for the best Angular admin template.</p>
                    <p>It should be Bootstrap 4 compatible.</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Crest admin is the responsive Angular 5 bootstrap 4 admin template.</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Looks clean and fresh UI.</p>
                  </div>
                  <div class="chat-content">
                    <p>It's perfect for my next project.</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Thanks a lot!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>How can I purchase it?</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>From Wrapbootstrap.</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>I will purchase it for sure.</p>
                  </div>
                  <div class="chat-content">
                    <p>Thanks.</p>
                  </div>
                </div>
              </div>

              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Great!!</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>How can we help? We're here for you!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Hey Jacob, Could you please help me to find it out?</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Absolutely!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>I am looking for the best Angular admin template.</p>
                    <p>It should be Bootstrap 4 compatible.</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Crest admin is the responsive Angular 5 bootstrap 4 admin template.</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Looks clean and fresh UI.</p>
                  </div>
                  <div class="chat-content">
                    <p>It's perfect for my next project.</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Thanks a lot!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>How can I purchase it?</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>From Wrapbootstrap.</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>I will purchase it for sure.</p>
                  </div>
                  <div class="chat-content">
                    <p>Thanks.</p>
                  </div>
                </div>
              </div>

              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Great!!</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>How can we help? We're here for you!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Hey Jacob, Could you please help me to find it out?</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Absolutely!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>I am looking for the best Angular admin template.</p>
                    <p>It should be Bootstrap 4 compatible.</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Crest admin is the responsive Angular 5 bootstrap 4 admin template.</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Looks clean and fresh UI.</p>
                  </div>
                  <div class="chat-content">
                    <p>It's perfect for my next project.</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Thanks a lot!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>How can I purchase it?</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>From Wrapbootstrap.</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>I will purchase it for sure.</p>
                  </div>
                  <div class="chat-content">
                    <p>Thanks.</p>
                  </div>
                </div>
              </div>

              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Great!!</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>How can we help? We're here for you!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Hey Jacob, Could you please help me to find it out?</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Absolutely!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>I am looking for the best Angular admin template.</p>
                    <p>It should be Bootstrap 4 compatible.</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Crest admin is the responsive Angular 5 bootstrap 4 admin template.</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Looks clean and fresh UI.</p>
                  </div>
                  <div class="chat-content">
                    <p>It's perfect for my next project.</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Thanks a lot!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>How can I purchase it?</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>From Wrapbootstrap.</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>I will purchase it for sure.</p>
                  </div>
                  <div class="chat-content">
                    <p>Thanks.</p>
                  </div>
                </div>
              </div>

              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Great!!</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>How can we help? We're here for you!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Hey Jacob, Could you please help me to find it out?</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Absolutely!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>I am looking for the best Angular admin template.</p>
                    <p>It should be Bootstrap 4 compatible.</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Crest admin is the responsive Angular 5 bootstrap 4 admin template.</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Looks clean and fresh UI.</p>
                  </div>
                  <div class="chat-content">
                    <p>It's perfect for my next project.</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Thanks a lot!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>How can I purchase it?</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>From Wrapbootstrap.</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>I will purchase it for sure.</p>
                  </div>
                  <div class="chat-content">
                    <p>Thanks.</p>
                  </div>
                </div>
              </div>

              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Great!!</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>How can we help? We're here for you!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Hey Jacob, Could you please help me to find it out?</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Absolutely!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>I am looking for the best Angular admin template.</p>
                    <p>It should be Bootstrap 4 compatible.</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Crest admin is the responsive Angular 5 bootstrap 4 admin template.</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Looks clean and fresh UI.</p>
                  </div>
                  <div class="chat-content">
                    <p>It's perfect for my next project.</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Thanks a lot!</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>How can I purchase it?</p>
                  </div>
                </div>
              </div>
              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>From Wrapbootstrap.</p>
                  </div>
                </div>
              </div>
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatar-s-19.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>I will purchase it for sure.</p>
                  </div>
                  <div class="chat-content">
                    <p>Thanks.</p>
                  </div>
                </div>
              </div>

              <div class="chat">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title=""
                    data-original-title="">
                    <img src="{{asset('public/app-assets/images/portrait/small/avatavatar-s-15.jpg')}}" alt="avatar">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p>Great!!</p>
                  </div>
                </div>
              </div>








            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 635px; right: 0px;">
              <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
          </div>
          <form class="chat-app-input  m-0 p-0 p-4-y chat-app-window overflow-hidden bg-warning row"
            style="height:95px !important;">
            <div class="col-12">
              <fieldset>
                <div class="input-group position-relative has-icon-left">
                  <input type="text" class="form-control rounded-pill" placeholder="Send message"
                    aria-describedby="button-addon2">
                  <div class="form-control-position text-dark align-center ">
                    <i class="ft-image font-medium-1"></i>
                  </div>
                  <div class="input-group-append pl-1">
                    <button class="btn WhatsAppbtn-color rounded-pill text-white m-0" type="button">
                      <i class="icon-paper-plane d-xl-none"></i>
                      <span class="d-none d-lg-none d-xl-block">send</span></button>
                  </div>
                </div>
              </fieldset>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
window.onload = maxWindow;

function maxWindow() {
  window.moveTo(0, 0);

  if (document.all) {
    top.window.resizeTo(screen.availWidth, screen.availHeight);
  } else if (document.layers || document.getElementById) {
    if (top.window.outerHeight < screen.availHeight || top.window.outerWidth < screen.availWidth) {
      top.window.outerHeight = screen.availHeight;
      top.window.outerWidth = screen.availWidth;
    }
  }
}
</script>
@include('header.footer_head')
@include('header.footer_toe')