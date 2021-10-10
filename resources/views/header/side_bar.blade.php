  <div style="" class="main-menu menu-fixed menu-dark menu-accordion bg-gradient-x-real-dark sidebar-bg " data-scroll-to-active="true">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row position-relative">
        <li class="nav-item mr-auto"><a class="navbar-brand" href="index.php"><img class="brand-logo"
              alt="Chameleon admin logo" src="{{asset('public/app-assets/images/logo/logo.png')}}" />
            <h3 class="brand-text" style="color:#62f0fa !important;">big-N Games</h3>
          </a></li>
        <li class="nav-item d-none d-md-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0"
            data-toggle="collapse"><i class="toggle-icon ft-disc font-medium-3" data-ticon="ft-disc"></i></a></li>
        <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
      </ul>
    </div>
    <div class="navigation-background"></div>
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item active "><a href="{{route('Add-Game-Result')}}"><i
              class="la la-plus-square"></i><span class="menu-title" data-i18n="">Add Result</span></a></li>
        <li class=" nav-item active "><a href="{{route('Add-Game')}}"><i class="la la-gamepad"></i><span
              class="menu-title" data-i18n="">Add Game</span></a></li>
        <li class=" nav-item active "><a href="{{route('Recharge')}}"><i
              class="la la-plug"></i><span class="menu-title" data-i18n="">Recharge</span></a></li>
        <li class=" nav-item active "><a href="{{route('Withdrawal')}}"><i
              class="la la-credit-card"></i><span class="menu-title" data-i18n="">Withdrawal</span></a></li>
        <li class=" nav-item active "><a href="{{route('Add-User')}}"><i class="la la-user-plus"></i><span
              class="menu-title" data-i18n="">Add User</span></a></li>
        <li class=" nav-item active "><a href="{{route('Message')}}"><i
              class="la la-comment"></i><span class="menu-title" data-i18n="">Message</span></a>
        </li>
        <li class=" nav-item active"><a href="{{route('See-Hisab')}}"><i
              class="la la-calculator"></i><span class="menu-title" data-i18n="">See Hisab</span></a>
        </li>
       

       <li class=" nav-item active "><a href="{{route('User-Dashboard')}}"><i class="icon-home"></i><span
      class="menu-title" data-i18n="">Dashboard</span></a></li>
     <li class=" nav-item active"><a href="{{route('Game-Results')}}"><i class="icon-eye"></i><span
        class="menu-title" data-i18n="">See Result</span></a></li>
     <li class=" nav-item active"><a href="{{route('Play-Game')}}"><i
        class="icon-game-controller"></i><span class="menu-title" data-i18n="">Play Game</span></a></li>
     <li class=" nav-item active"><a href="{{route('My-Balance')}}"><i class="icon-wallet"></i><span
        class="menu-title" data-i18n="">See Bag</span></a></li>
     <li class=" nav-item active"><a href="{{route('Message')}}"><i class="icon-envelope"></i><span
        class="menu-title" data-i18n="">Message</span></a>
      <ul class="menu-content">
       <li class="active"><a class="menu-item" href="{{route('Admin-Message')}}">Admin Message</a>
       </li>
       <li class="active"><a class="menu-item" href="{{route('Guessing')}}">Get Guessing</a>
       </li>
      </ul>
     </li>
     <li class=" nav-item active"><a href="{{route('See-History')}}"><i
        class="icon-calculator"></i><span class="menu-title" data-i18n="">See Hisab</span></a></li>
     <li class=" nav-item active"><a href="{{route('User-Account')}}"><i class="icon-users"></i><span
        class="menu-title" data-i18n="">User Setting</span></a></li>


      </ul>
    </div>
  </div>
