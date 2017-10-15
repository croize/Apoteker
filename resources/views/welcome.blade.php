<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.2.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.2.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/new_template/assets/images/3180-1269x1290.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="/new_template/assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="/new_template/assets/tether/tether.min.css">
  <link rel="stylesheet" href="/new_template/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/new_template/assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="/new_template/assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="/new_template/assets/dropdown/css/style.css">
  <link rel="stylesheet" href="/new_template/assets/theme/css/style.css">
  <link rel="stylesheet" href="/new_template/assets/mobirise/css/mbr-additional.css" type="text/css">



</head>
<body>
<section class="menu cid-qy5ZtFVehZ" once="menu" id="menu1-l" data-rv-view="31">



    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="/">
                         <img src="/new_template/assets/images/3180-1269x1290.png" alt="APOTEKER SMKN 13 Bandung" title="" media-simple="true" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="/">
                        APOTEKER</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="/">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>&nbsp;HOME</a>
                </li></ul>

                @if (Route::has('login'))
                    @if (Auth::check())
                    <div class="btn-group">
                      <button style="cursor:pointer" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" style="padding:0px;margin-right:12px;">
                        <button style="cursor:pointer;" class="dropdown-item" type="button" onclick="window.location.href='{{ route('logout') }}';event.preventDefault();
                                 document.getElementById('logout-form').submit();">Logout</button>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     {{ csrf_field() }}
                                 </form>
                      </div>
                    </div>
                    @else
                    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                            <a class="nav-link link text-white display-4" href="/register">
                                <span class=""></span>&nbsp;REGISTER</a>
                        </li></ul>
                    <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="/login"><span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span>
                            LOGIN&nbsp;</a></div>
                    @endif
                  @endif
        </div>
    </nav>
</section>

<section class="engine"></section><section class="header10 cid-qy64nFvk1N mbr-fullscreen mbr-parallax-background" id="header10-o" data-rv-view="33">



    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);">
    </div>

    <div class="container">
        <div class="media-container-column mbr-white col-lg-8 col-md-10 ml-auto">
            <h1 class="mbr-section-title align-right mbr-bold pb-3 mbr-fonts-style display-1">
                APOTEK SMKN 13</h1>
            <h3 class="mbr-section-subtitle align-right mbr-light pb-3 mbr-fonts-style display-2">
                Kesehatan mu lebih utama!</h3>
            <p class="mbr-text align-right pb-3 mbr-fonts-style display-5">Apotek SMKN 13 Bandung merupakan pusat pengobatan<br>dan juga perawatan beberapa pasien.</p>

        </div>
    </div>


</section>


  <script src="/new_template/assets/web/assets/jquery/jquery.min.js"></script>
  <script src="/new_template/assets/popper/popper.min.js"></script>
  <script src="/new_template/assets/tether/tether.min.js"></script>
  <script src="/new_template/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="/new_template/assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="/new_template/assets/dropdown/js/script.min.js"></script>
  <script src="/new_template/assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="/new_template/assets/jarallax/jarallax.min.js"></script>
  <script src="/new_template/assets/theme/js/script.js"></script>


</body>
</html>
