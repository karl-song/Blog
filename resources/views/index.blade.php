@extends('layouts.app')

@section('head')
<link href="/css/index.css" rel="stylesheet">
@endsection

@section('content')
<!-- banner model -->
<!-- Deleted class 'header-filter' from element that under this passage -->
<div class="page-header clear-filter" data-parallax="true" style="background-image: url('/assets/img/bg0.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="brand">
          <h1>Writing Our Story
            <span class="pro-badge">
              1.0.0 Alpha
            </span>
          </h1>
          <h3 class="title">关于猹球的故事 </h3>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- banner model end -->

<div class="main" style="border-radius: 0.6rem 0.6rem 0 0;">
  <div class="cd-section" id="blogs">
    <div class="blogs-4">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <!-- <h2 class="title">News</h2> -->
            <h4 class="category">瞧瞧有啥新鲜事</h4>

            <!-- blogs -->
            <hr/>
            <div class="card card-plain card-blog">
              <div class="card-header card-header-image">
                <a href="#pablo">
                  <img class="img img-raised" src="/assets/img/bg5.jpg">
                </a>
              </div>
              <div class="card-body pb-0">
                <h3 class="card-title">
                  <a href="#pablo">Autodesk展望3D的未来</a>
                </h3>
                <h5 class="card-description mb-0">
                  不要害怕真相，因为我们需要重新启动人类基础的真相，我爱你就像Kanye爱Kaye我爱Rick Owens的床设计，但背部太高的光束和角度的天花板，我也想指出，这是第一张专辑走1号流…
                </h5>

                <a href="#pablo" class="btn btn-link btn-chaq"><i class="material-icons mr-1">anchor</i>去瞧瞧</a>

                <p class="author">
                  by
                  <a href="#pablo">
                    <b>猹球</b>
                  </a>, 1 days ago
                </p>

                <a href="#pablo" class="btn btn-link"><i class="material-icons mr-1">thumb_up_off_alt</i>12</a>
                <a href="#pablo" class="btn btn-link"><i class="material-icons mr-1">star_border</i>12</a>
              </div>
            </div>
            <!-- blogs end -->

            <!-- blogs -->
            <hr/>
            <div class="card card-plain card-blog">
              <div class="card-header card-header-image">
                <a href="#pablo">
                  <img class="img img-raised" src="/assets/img/examples/blog6.jpg">
                </a>
              </div>
              <div class="card-body pb-0">
                <h3 class="card-title">
                  <a href="#pablo">我们将呼吸干净的空气和锻炼身体</a>
                </h3>
                <h5 class="card-description mb-0">
                  不要害怕真相，因为我们需要重新启动人类基础的真相，我爱你就像Kanye爱Kaye我爱Rick Owens的床设计，但背部太高的光束和角度的天花板，我也想指出，这是第一张专辑走1号流…
                </h5>

                <a href="#pablo" class="btn btn-link btn-chaq"><i class="material-icons mr-1">anchor</i>去瞧瞧</a>

                <p class="author">
                  by
                  <a href="#pablo">
                    <b>Zoe</b>
                  </a>, 2 days ago
                </p>

                <a href="#pablo" class="btn btn-link btn-chaq"><i class="material-icons mr-1">thumb_up_alt</i>12</a>
                <a href="#pablo" class="btn btn-link btn-chaq"><i class="material-icons mr-1">star</i>12</a>

              </div>
            </div>
            <!-- blogs end -->

            <!-- share files -->
            <hr/>
            <div class="card card-plain card-blog">
              <div class="row">
                <div class="col-md-5">
                  <div class="card-header card-header-image">
                    <img class="img img-raised" src="/assets/img/examples/card-blog-jlbhd.jpg">
                  </div>
                </div>
                <div class="col-md-7">
                  <h6 class="card-category text-info"><i class="material-icons mr-1">cloud_upload</i>
                    <a href="#pablo">
                      <b>Mike Butcher</b>
                    </a>
                    分享了新资源！</h6>
                  <h3 class="card-title">
                    <a href="#pablo">加勒比海盗1-5部全中文字幕</a>
                  </h3>
                  <p class="card-description">
                    共5个文件，总大小12G
                    <a href="#pablo"> 立即下载 </a>
                  </p>
                  <p class="author">
                    by
                    <a href="#pablo">
                      <b>Mike Butcher</b>
                    </a>, 2 days ago
                  </p>
                  <a href="#pablo" class="btn btn-link"><i class="material-icons mr-1">thumb_up_off_alt</i>182</a>
                  <a href="#pablo" class="btn btn-link btn-chaq"><i class="material-icons mr-1">star</i>233</a>
                </div>
              </div>
            </div>
            <!-- share files end -->
            
            <!-- photos -->
            <hr/>
            <div class="card card-plain card-blog">
              <div class="card-header card-header-bg-img" style="background-image: url('/assets/img/people-card/pc1.gif');">
                  <h6 class="card-category text-info">
                    <a href="#pablo">
                      <b>Mike Butcher</b>
                    </a>
                    上传了7张照片到
                    <a href="#pablo" class="color-white">
                      <b>《夏末出行》</b>
                    </a>
                  </h6>

              </div>
              <div class="card-body pb-0">
                
                <!-- 取模3，余2用photo-card-05，余1用photo-card，均放在首位 -->
                <div class="photo-box">
                  <div class="photo-card p-1">
                    <a href="/assets/img/bg0.jpg" target="_blank"><div class="photo" style="background-image: url('/assets/img/bg0.jpg');"></div></a>
                  </div>
                  <div class="photo-card-03 p-1">
                    <a href="/assets/img/bg2.jpg" target="_blank"><div class="photo" style="background-image: url('/assets/img/bg2.jpg');"></div></a>
                  </div>
                  <div class="photo-card-03 p-1">
                    <a href="/assets/img/bg3.jpg" target="_blank"><div class="photo" style="background-image: url('/assets/img/bg3.jpg');"></div></a>
                  </div>
                  <div class="photo-card-03 p-1">
                    <a href="/assets/img/bg5.jpg" target="_blank"><div class="photo" style="background-image: url('/assets/img/bg5.jpg');"></div></a>
                  </div>
                  <div class="photo-card-03 p-1">
                    <a href="/assets/img/bg6.jpg" target="_blank"><div class="photo" style="background-image: url('/assets/img/bg6.jpg');"></div></a>
                  </div>
                  <div class="photo-card-03 p-1">
                    <a href="/assets/img/bg7.jpg" target="_blank"><div class="photo" style="background-image: url('/assets/img/bg7.jpg');"></div></a>
                  </div>
                  <div class="photo-card-03 p-1">
                    <a href="/assets/img/bg8.jpg" target="_blank"><div class="photo" style="background-image: url('/assets/img/bg8.jpg');"></div></a>
                  </div>
                </div>

                <h5 class="card-description mb-0">
                  夏秋之交，就应该来一场说走就走的旅行不是吗？
                </h5>

                <a href="#pablo" class="btn btn-link btn-chaq"><i class="material-icons mr-1">anchor</i>去瞧瞧</a>

                <p class="author">
                  by
                  <a href="#pablo">
                    <b>Mike Butcher</b>
                  </a>, 2 days ago
                </p>

                <a href="#pablo" class="btn btn-link btn-chaq"><i class="material-icons mr-1">thumb_up_alt</i>12</a>
                <a href="#pablo" class="btn btn-link btn-chaq"><i class="material-icons mr-1">star</i>12</a>

              </div>
            </div>
            <!-- photos -->

            <!-- photos -->
            <hr/>
            <div class="card card-plain card-blog">
              <div class="card-header card-header-bg-img" style="background-image: url('/assets/img/people-card/pc1.gif');">
                  <h6 class="card-category text-info">
                    <a href="#pablo">
                      <b>Mike Butcher</b>
                    </a>
                    上传了7张照片到
                    <a href="#pablo" class="color-white">
                      <b>《夏末出行》</b>
                    </a>
                  </h6>

              </div>
              <div class="card-body pb-0">
                

                <div class="photo-box">
                  <div class="photo-card-05 p-1">
                    <a href="/assets/img/bg3.jpg" target="_blank"><div class="photo" style="background-image: url('/assets/img/bg3.jpg');"></div></a>
                  </div>
                  <div class="photo-card-05 p-1">
                    <a href="/assets/img/bg5.jpg" target="_blank"><div class="photo" style="background-image: url('/assets/img/bg5.jpg');"></div></a>
                  </div>
                  <div class="photo-card-03 p-1">
                    <a href="/assets/img/bg6.jpg" target="_blank"><div class="photo" style="background-image: url('/assets/img/bg6.jpg');"></div></a>
                  </div>
                  <div class="photo-card-03 p-1">
                    <a href="/assets/img/bg7.jpg" target="_blank"><div class="photo" style="background-image: url('/assets/img/bg7.jpg');"></div></a>
                  </div>
                  <div class="photo-card-03 p-1">
                    <a href="/assets/img/bg8.jpg" target="_blank"><div class="photo" style="background-image: url('/assets/img/bg8.jpg');"></div></a>
                  </div>
                </div>

                <h5 class="card-description mb-0">
                  夏秋之交，就应该来一场说走就走的旅行不是吗？
                </h5>

                <a href="#pablo" class="btn btn-link btn-chaq"><i class="material-icons mr-1">anchor</i>去瞧瞧</a>

                <p class="author">
                  by
                  <a href="#pablo">
                    <b>Mike Butcher</b>
                  </a>, 2 days ago
                </p>

                <a href="#pablo" class="btn btn-link"><i class="material-icons mr-1">thumb_up_off_alt</i>12</a>
                <a href="#pablo" class="btn btn-link"><i class="material-icons mr-1">star_border</i>12</a>

              </div>
            </div>
            <!-- photos -->

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')

@endsection