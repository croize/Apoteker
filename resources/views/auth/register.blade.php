
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
  <link rel="stylesheet" href="/new_template/assets/theme_reg/css/style.css">
  <link rel="stylesheet" href="/new_template/assets/mobirise/css/mbr-additional1.css" type="text/css">

</head>
<body>
<section class="menu cid-qy5ZtFVehZ" once="menu" id="menu1-l" data-rv-view="20">



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
                    <a href="/home">
                         <img src="new_template/assets/images/3180-1269x1290.png" alt="APOTEKER SMKN 13 Bandung" title="" media-simple="true" style="height: 3.8rem;">
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

<section class="engine"></section><section class="features8 cid-qy616ZALAT mbr-parallax-background" id="features8-m" data-rv-view="22">



    <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(85, 180, 212);">
    </div>

    <div class="container">
        <div class="media-container-row">

            <div class="card  col-12 col-md-6">
                <div class="card-img">
                    <span class="mbr-iconfont mbri-user" media-simple="true"></span>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7">
                        DOKTER</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                       Jika anda merupakan bagian dokter dari APOTEKER <br>SMKN 13 Bandung</p>
                    <div class="mbr-section-btn text-center"><a href="/dokter/register" class="btn btn-secondary display-4"><span class="mbri-lock mbr-iconfont mbr-iconfont-btn"></span>
                            REGISTER</a></div>
                </div>
            </div>

            <div class="card  col-12 col-md-6">
                <div class="card-img">
                    <span class="mbr-iconfont mbri-users" media-simple="true"></span>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7">
                        PASIEN</h4>
                    <p class="mbr-text mbr-fonts-style display-7">Jika anda merupakan bagian dari pasien kami, untuk penebusan obat ,dll.</p>
                    <div class="mbr-section-btn text-center"><a href="/pasien/register" class="btn btn-secondary display-4"><span class="mbri-lock mbr-iconfont mbr-iconfont-btn"></span>
                            REGISTER</a></div>
                </div>
            </div>
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
  <script src="/new_template/assets/theme_reg/js/script.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#myModal').modal(options)
});
  </script>
</body>
</html>
