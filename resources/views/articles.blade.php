@extends('layouts.app')

@section('head')
<link href="/css/articles.css" rel="stylesheet">
@endsection

@section('content')
<!-- banner model -->
<!-- Deleted class 'header-filter' from element that under this passage -->
<div class="page-header clear-filter" data-parallax="true" style="background-image: url('/assets/img/bg10.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="brand">
          <h1>Our Story</h1>
          <h3 class="title">猹球的故事</h3>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- banner model end -->

<div class="main" style="border-radius: 0.6rem 0.6rem 0 0;">
  <div class="container">

    <div class="section">

      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h3>来看点什么？</h3>
        </div>
      </div>

      <div class="row mt-1">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <button class="btn btn-round btn-sm ml-2 mr-2">随便看看</button>
          <button class="btn btn-primary btn-round btn-sm ml-2 mr-2">日常</button>
          <button class="btn btn-info btn-round btn-sm ml-2 mr-2">PHP</button>
          <button class="btn btn-success btn-round btn-sm ml-2 mr-2">Python</button>
          <button class="btn btn-warning btn-round btn-sm ml-2 mr-2">C#</button>
          <button class="btn btn-danger btn-round btn-sm ml-2 mr-2">VUE</button>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-md-12 ml-auto mr-auto text-center">

          <div class="row mt-3 row-article" style="background: url('/assets/img/bg8.jpg');">
            <!-- <div class="col-md-4 ml-auto mr-auto text-center">
              <div class="card">
                <img class="img img-raised" src="/assets/img/bg7.jpg">
              </div>
            </div> -->
            <div class="col-md-8 ml-auto mr-auto text-center">
              <h3 class="card-title">
                <!-- <a class="text-muted" href="#pablo" style="color:rgb(255, 255, 255)">骚操作</a> -->
                <a class="text" href="#pablo" style="color:rgb(225, 225, 225)">骚操作</a>
              </h3>
              <p class="card-description" style="color:rgb(205, 205, 205)">
                一些日常生活中的小妙招耶13213211111111dsadsadsadsaaaaaaaaaaaaaaaaa321321321321。
              </p>
              <h6 class="card-category text-info"><i class="material-icons mr-1">cloud_upload</i></h6>
              <button class="btn btn-rose btn-round btn-sm ml-2 mr-2">瞧瞧</button>
              <p class="author">
                by
                <a href="#pablo">
                  <b>ChaQ</b>
                </a>, 2 days ago
              </p>
              <p class="author text-rose">
                <i class="material-icons mr-2">visibility</i>
                <b>232</b>
              </p>

            </div>
          </div>

          <div class="row mt-3 row-article">
            <div class="col-md-4 ml-auto mr-auto text-center">
              <div class="card">
                <img class="img img-raised" src="/assets/img/examples/card-blog-jlbhd.jpg">
              </div>
            </div>
            <div class="col-md-8 ml-auto mr-auto text-center">
              <h3 class="card-title">
                <a class="text-muted" href="#pablo">骚操作</a>
              </h3>
              <p class="card-description">
                一些日常生活中的小妙招耶13213211111111dsadsadsadsaaaaaaaaaaaaaaaaa321321321321。
              </p>
              <h6 class="card-category text-info"><i class="material-icons mr-1">cloud_upload</i></h6>
              <button class="btn btn-rose btn-round btn-sm ml-2 mr-2">瞧瞧</button>
              <p class="author">
                by
                <a href="#pablo">
                  <b>ChaQ</b>
                </a>, 2 days ago
              </p>
              <p class="author text-rose">
                <i class="material-icons mr-2">visibility</i>
                <b>232</b>
              </p>
            </div>
          </div>

        </div>
      </div>

    </div>

  </div>
</div>

@endsection

@section('script')

@endsection