@include('app.layouts.header')

    <style>.sf-menu li:nth-child(4) a {color: #fff;}
        .sf-menu li:first-child a {color:rgba(255, 255, 255, 0.5)}
    </style>

</head>

<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page" style="background-color: rgba(0, 0, 0, 0.04);">
        <div id="fh5co-header">

            
            <header id="fh5co-header-section">
                <div class="container">
                    <div class="nav-header">
                        <a href="solution.aspx.html#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                        <h1 id="fh5co-logo">
                            <a href="index.aspx.html">
                                <img src="/templates/main/images/iconfont-svg/logo.svg"/>
                            </a>
                        </h1>
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                               @include('app.widgets.navigation')
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
        </div>
        <!-- end:fh5co-header -->
        <div class="fh5co-parallax" style="background-image: url('/templates/main/images/home-image-10.jpg');" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                        <div class="fh5co-intro fh5co-table-cell animate-box">
                            <h1 class="text-center">云海政务舆情一站式解决方案</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: fh5co-parallax -->
        <!-- end:fh5co-hero -->
        <div id="fh5co-programs-section" class="fh5co-programs-height">
            <div id="divId" class="affet-left">
                <ul class="schedule meta metanav top_xxk">
                    <li>
                        <a href="solution.aspx.html#" class="active" data-sched="1">政务大数据解决方案</a>
                    </li>
                    <li>
                        <a href="solution.aspx.html#" data-sched="2">质监大数据解决方案</a>
                    </li>
                    <li>
                        <a href="solution.aspx.html#" data-sched="3">税务大数据解决方案</a>
                    </li>
                    <li>
                        <a href="solution.aspx.html#" data-sched="4">公安大数据解决方案</a>
                    </li>
                    <li>
                        <a href="solution.aspx.html#" data-sched="5">旅游大数据解决方案</a>
                    </li>
                    <li>
                        <a href="solution.aspx.html#" data-sched="6">环保大数据解决方案</a>
                    </li>
                    <li>
                        <a href="solution.aspx.html#" data-sched="7">教育大数据解决方案</a>
                    </li>
                    <li>
                        <a href="solution.aspx.html#" data-sched="8">人社大数据解决方案</a>
                    </li>
                    <li>
                        <a href="solution.aspx.html#" data-sched="9">司法大数据解决方案</a>
                    </li>
                </ul>
            </div>
            <div id="divClass" class="affet-left">
                <ul class="schedule meta top-xxk">
                    <li>
                        <a href="solution.aspx.html#" class="active" data-sched="1">政务</a>
                    </li>
                    <li>
                        <a href="solution.aspx.html#" data-sched="2">质监</a>
                    </li>
                    <li>
                        <a href="solution.aspx.html#" data-sched="3">税务</a>
                    </li>
                    <li>
                        <a href="solution.aspx.html#" data-sched="4">公安</a>
                    </li>
                    <li>
                        <a href="solution.aspx.html#" data-sched="5">旅游</a>
                    </li>
                    <li>
                        <a href="solution.aspx.html#" data-sched="6">环保</a>
                    </li>
                    <li>
                        <a href="solution.aspx.html#" data-sched="7">教育</a>
                    </li>
                    <li>
                        <a href="solution.aspx.html#" data-sched="8">人社</a>
                    </li>
                    <li>
                        <a href="solution.aspx.html#" data-sched="9">司法</a>
                    </li>
                </ul>
            </div>
            <div id="container_body" class="container bottom_xxk">
                @include('app.solutions.zhengwu')

                @include('app.solutions.zhijian')



                @include('app.solutions.shuiwu')

                @include('app.solutions.gongan')

                @include('app.solutions.lvyou')

                @include('app.solutions.huanbao')


                @include('app.solutions.jiaoyu')


                @include('app.solutions.renshe')
                @include('app.solutions.sifa')



            </div>
        </div>

        <!-- fh5co-blog-section -->
        @include('app.layouts.footer')


    </div>
    <!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->

<!-- jQuery -->

<script src="/templates/main/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="/templates/main/js/jquery.easing.1.3.js"></script>
<script src="/templates/main/js/jquery.hovertreescroll.js"></script>

<!-- Bootstrap -->
<script src="/templates/main/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="/templates/main/js/jquery.waypoints.min.js"></script>
<!-- Stellar -->
<script src="/templates/main/js/jquery.stellar.min.js"></script>
<!-- Superfish -->
<script src="/templates/main/js/hoverIntent.js"></script>
<script src="/templates/main/js/superfish.js"></script>

<script src="/templates/main/js/old_js/common.js"></script>
<!-- Main JS (Do not remove) -->
<script src="/templates/main/js/main.js"></script>

<script>
  $(function() {
    $(window).scroll(function() {
      if($(this).scrollTop() > 600) {

        $('#divClass').fadeIn();
      } else {
        $('#divClass').fadeOut();
      }
    });
  });
</script>

<script>
  $(function(){
    $(".top_xxk li a").removeClass("active")
    $(".top_xxk li").eq(0).children("a").addClass("active")
    $(".bottom_xxk .rowactive").hide()
    $(".bottom_xxk .rowactive").eq(0).show()
    $('.top_xxk li').click(function(){
      $(".top_xxk li a").removeClass("active")
      $(this).children("a").addClass("active")
      n = $(".top_xxk li").index(this)
      $(".bottom_xxk .rowactive").hide()
      $(".bottom_xxk .rowactive").eq(n).show()
      $("#container_body").HoverTreeScroll(1000);

    });
  });
</script>

<script>
  $(function(){
    $(".top-xxk li a").removeClass("active")
    $(".top-xxk li").eq(0).children("a").addClass("active")
    $(".bottom_xxk .rowactive").hide()
    $(".bottom_xxk .rowactive").eq(0).show()
    $('.top-xxk li').click(function(){
      $(".top-xxk li a").removeClass("active")
      $(this).children("a").addClass("active")
      n = $(".top-xxk li").index(this)
      $(".bottom_xxk .rowactive").hide()
      $(".bottom_xxk .rowactive").eq(n).show()
      $("#container_body").HoverTreeScroll(1000);
    });
  });
</script>

</body>

</html>