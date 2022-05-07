<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>
    Writing Our Story
  </title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

  <!-- CSS Files -->
  <link href="/assets/css/material-kit.css?v=2.1.1" rel="stylesheet" />

  <!-- CSS for common -->
  <link href="/assets/common/common.css" rel="stylesheet" />
  <link href="/assets/common/vertical-nav.css" rel="stylesheet" />

  <!-- CSS for this page -->

  <style>
    .tip-box>.font-medium{
      font-size: 10px;
      text-align: center;
    }

    .tip-box>.list-disc{
      font-size: 12px;
      color: #ec407a;
    }
  </style>
</head>

<body class="login-page sidebar-collapse">
  <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="/">Writing Our Story</a>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" style="background-image: url('/assets/img/bg7.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">

          <form class="form" method="post" action="{{ route('login') }}">
            @csrf
            <div class="card card-login card-hidden">
              <div class="card-header card-header-rose text-center">
                <h4 class="card-title">Login</h4>
                <text class="card-title">书写关于我们的故事</text>
              </div>
              <div class="card-body ">
                <p class="card-description text-center">填写信息以进入空间</p>
                <span class="bmd-form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">face</i>
                      </span>
                    </div>
                    <input type="text" id="email" type="email" name="email" :value="old('email')" class="form-control" required placeholder="用户名...">
                  </div>
                </span>
                <span class="bmd-form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                      </span>
                    </div>
                    <input type="password" class="form-control" placeholder="密码..." id="password" type="password" name="password" required autocomplete="current-password">
                  </div>
                </span>
<!-- Session Status -->
<x-auth-session-status class="mb-4" style="text-align:center;" :status="session('status')" />

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4 tip-box" :errors="$errors" />
              </div>

              <div class="card-footer justify-content-center">
                <button href="#pablo" class="btn btn-rose btn-link btn-lg">Lets Go</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <!-- bottom left navbar -->
        <!-- <nav class="float-left">
          <ul>
            <li>
              <a href="https://www.creative-tim.com">
                Creative Tim
              </a>
            </li>
          </ul>
        </nav> -->
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>, made by Zoe <i class="material-icons">favorite</i> with material-kit PRO.
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="/assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="/assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->

  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="/assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="/assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
  <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="/assets/js/plugins/jasny-bootstrap.min.js" type="text/javascript"></script>
  <!--	Plugin for Small Gallery in Product Page -->
  <script src="/assets/js/plugins/jquery.flexisel.js" type="text/javascript"></script>
  <!-- Plugins for presentation and navigation  -->
  <script src="/assets/common/modernizr.js" type="text/javascript"></script>
  <script src="/assets/common/vertical-nav.js" type="text/javascript"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Js With initialisations For common Purpose, Don't Include it in Your Project -->
  <script src="/assets/common/common.js" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="/assets/js/material-kit.js?v=2.1.1" type="text/javascript"></script>
</body>

</html>