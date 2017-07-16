@include('app.layouts.header')

<style>.team-section-grid {
        height: 100%;
    }

    .fh5co-cover .desc .animi-dn {
        display: none;
    }

    .fh5co-cover .desc .animi-btn span {
        display: block;
    }

    .col-md-7 .animi-btn img {
        width: 100%;
        height: 100px;
    }

    .col-md-7 .animi-btn {
        margin-top: 9vw;
    }

    @media (min-width: 992px) {
        .col-md-4 {
            width: 23%;
            padding: 2%;
            margin: 1%;
        }

        .col-md-7 {
            width: 100%;
            text-align: center;
        }
    }

    @media screen and (max-width: 768px) {
        .fh5co-table, .fh5co-table-cell {
            height: 100%;
        }

        .fh5co-cover, .fh5co-hero {
            height: 800px;
        }

        .fh5co-cover video {
            display: none;
        }

        .col-md-7 .animi-dn {
            margin-top: 9em;
        }

        .fh5co-cover .desc .animi-dn {
            display: block;
        }

        .fh5co-cover .desc .animi-btn {
            display: none;
        }

        .col-md-7 .animi-dn img {
            width: 40px;
            height: 40px;
        }
    }

    @media screen and (max-width: 1366px) {
        .fh5co-cover, .fh5co-hero {
            height: 800px;
        }
    }

    @media screen and (max-width: 320px) {
        .fh5co-cover, .fh5co-hero {
            height: 650px;
        }

        .col-md-7 .animi-dn {
            margin-top: 5em;
        }
    }

    /*@media screen and (max-width: 375px){
        .col-md-7 .animi-dn {margin-top: 6em;}
        .fh5co-cover, .fh5co-hero {height: 700px;}
    }*/
</style>

</head>
<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">
        <div id="fh5co-header">

            <header id="fh5co-header-section">
                <div class="container">
                    <div class="nav-header">
                        <a href="/" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                        <h1 id="fh5co-logo">
                            <a href="/">
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
        <div class="fh5co-hero">
            <div class="fh5co-overlay" style="background: rgba(51, 122, 183, 0.5);"></div>
            <div class="fh5co-cover" data-stellar-background-ratio="0.5"
                 style="background-image: url('/templates/main/images/home-image-1.jpg');">
                <video src="//img0.yunhaidata.com/banner.mp4" autoplay="" loop="" preload="auto"
                       style="width:100%; height:100%; object-fit:fill;"></video>
                <div class="desc animate-box">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <h2>政企大数据服务商</h2>
                                <p>基于hadoop生态的大数据技术矩阵</p>
                                <!--<span class="animi-btn"><a class="btn btn-primary" href="#">继续了解</a><span>或</span><a class="btn btn-primary" href="#">领取方案</a></span>-->
                                <span class="animi-btn">
									<img src="/templates/main/images/iconfont-svg/xl-icon.svg"/>
								</span>
                                <span class="animi-dn">
									<img src="/templates/main/images/iconfont-svg/dn-icon.svg"/>
								</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:fh5co-hero -->
        <div id="fh5co-schedule-section" class="fh5co-lightgray-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="heading-section text-center animate-box">
                            <h2>产品服务</h2>
                            <p>为客户定制化提供大数据产品与服务</p>
                        </div>
                    </div>
                </div>
                <div class="row animate-box">
                    <div class="row text-center">
                        <div class="col-md-12 schedule-container">
                            <div class="schedule-content active" data-day="sunday">
                                <div class="col-md-3 col-sm-6">
                                    <div class="program program-schedule">
                                        <img src="/templates/main/images/iconfont-40px/fx-icon.png">
                                        <h3>云海舆情</h3>
                                        <span>一站式政企舆情服务</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="program program-schedule">
                                        <img src="/templates/main/images/iconfont-40px/cj-icon.png">
                                        <h3>云海采集</h3>
                                        <span>按需定制化数据采集服务</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="program program-schedule">
                                        <img src="/templates/main/images/iconfont-40px/sj-icon.png">
                                        <h3>大数据一体机</h3>
                                        <span>软硬件结合数据管理一体机</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="program program-schedule">
                                        <img src="/templates/main/images/iconfont-40px/yq-icon.png">
                                        <h3>数据报告</h3>
                                        <span>定制化数据报告分析服务</span>
                                    </div>
                                </div>
                            </div>
                            <!-- END sched-content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fh5co-parallax" style="background-image: url('/templates/main/images/home-image-6.jpg');"
             data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                        <div class="fh5co-intro fh5co-table-cell animate-box">
                            <h1 class="text-center">基于hadoop生态的大数据技术矩阵</h1>
                            <p>充分利用集群的威力进行高速运算和存储</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end: fh5co-parallax -->
        <div id="fh5co-programs-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="heading-section text-center animate-box">
                            <h2>核心技术</h2>
                            <p>完善的大数据能力</p>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="program animate-box">
                            <img src="/templates/main/images/iconfont-70px/cj2-icon.png">
                            <h3>数据采集</h3>
                            <p>专注于互联网文本数据采集，所见即所得</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="program animate-box">
                            <img src="/templates/main/images/iconfont-70px/qx-icon.png">
                            <h3>数据清洗</h3>
                            <p>确保无法辨认的数据不会进入数据仓库</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="program animate-box">
                            <img src="/templates/main/images/iconfont-70px/ck-icon.png">
                            <h3>文本分析</h3>
                            <p>利用前沿的深度学习技术，帮助客户深入理解文字背后的含义</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="program animate-box">
                            <img src="/templates/main/images/iconfont-70px/yy-icon.png">
                            <h3>语义分析</h3>
                            <p>独有多层语义算法融合模型，实现最佳文本处理效果</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="program animate-box">
                            <img src="/templates/main/images/iconfont-70px/js-icon.png">
                            <h3>算法分析</h3>
                            <p>大数据挖掘算法 可视化数据分析的利器</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="program animate-box">
                            <img src="/templates/main/images/iconfont-70px/jm-icon.png">
                            <h3>数据建模</h3>
                            <p>集成上千套数据模型，让决策有理有据</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="program animate-box">
                            <img src="/templates/main/images/iconfont-70px/ksh-icon.png">
                            <h3>数据可视化</h3>
                            <p>化抽象为直观，然数据更有趣，更具魅力</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="program animate-box">
                            <img src="/templates/main/images/iconfont-70px/aq-icon.png">
                            <h3>数据安全</h3>
                            <p>完善的数据保护机制与安全体系</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="fh5co-pricing-section" class="fh5co-pricing fh5co-lightgray-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="heading-section text-center animate-box">
                            <h2>我们的客户</h2>
                            <p>按需定制各行业解决方案</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="pricing row-card text-center">
                        <ul>

                            <li class="col-md-14 col-md-3 animate-box">
                                <div>
                                    <a href="solution_show.aspx-id=70.html">
                                        <img src="upload/201705/11/201705110939452546.jpg"/>
                                        <!--width:343px height:182px-->
                                        <i class="iconfont icon-jinru"><p
                                                    style="color: #fff;padding: 0;margin-top: -20px;font-size: 14px;">
                                                继续了解</p></i>
                                    </a>
                                </div>
                                <h1>政务大数据解决方案</h1>
                            </li>

                            <li class="col-md-14 col-md-3 animate-box">
                                <div>
                                    <a href="solution_show.aspx-id=69.html">
                                        <img src="upload/201705/11/201705110939547234.jpg"/>
                                        <!--width:343px height:182px-->
                                        <i class="iconfont icon-jinru"><p
                                                    style="color: #fff;padding: 0;margin-top: -20px;font-size: 14px;">
                                                继续了解</p></i>
                                    </a>
                                </div>
                                <h1>质监大数据解决方案</h1>
                            </li>

                            <li class="col-md-14 col-md-3 animate-box">
                                <div>
                                    <a href="solution_show.aspx-id=68.html">
                                        <img src="upload/201705/11/201705110940062078.jpg"/>
                                        <!--width:343px height:182px-->
                                        <i class="iconfont icon-jinru"><p
                                                    style="color: #fff;padding: 0;margin-top: -20px;font-size: 14px;">
                                                继续了解</p></i>
                                    </a>
                                </div>
                                <h1>地税大数据解决方案</h1>
                            </li>

                            <li class="col-md-14 col-md-3 animate-box">
                                <div>
                                    <a href="solution_show.aspx-id=67.html">
                                        <img src="upload/201705/11/201705110940170359.jpg"/>
                                        <!--width:343px height:182px-->
                                        <i class="iconfont icon-jinru"><p
                                                    style="color: #fff;padding: 0;margin-top: -20px;font-size: 14px;">
                                                继续了解</p></i>
                                    </a>
                                </div>
                                <h1>公安大数据解决方案</h1>
                            </li>

                            <li class="col-md-14 col-md-3 animate-box">
                                <div>
                                    <a href="solution_show.aspx-id=66.html">
                                        <img src="upload/201705/11/201705110940259265.jpg"/>
                                        <!--width:343px height:182px-->
                                        <i class="iconfont icon-jinru"><p
                                                    style="color: #fff;padding: 0;margin-top: -20px;font-size: 14px;">
                                                继续了解</p></i>
                                    </a>
                                </div>
                                <h1>旅游大数据解决方案</h1>
                            </li>

                            <li class="col-md-14 col-md-3 animate-box">
                                <div>
                                    <a href="solution_show.aspx-id=65.html">
                                        <img src="upload/201705/11/201705110940365828.jpg"/>
                                        <!--width:343px height:182px-->
                                        <i class="iconfont icon-jinru"><p
                                                    style="color: #fff;padding: 0;margin-top: -20px;font-size: 14px;">
                                                继续了解</p></i>
                                    </a>
                                </div>
                                <h1>招商大数据解决方案</h1>
                            </li>

                            <li class="col-md-14 col-md-3 animate-box">
                                <div>
                                    <a href="solution_show.aspx-id=64.html">
                                        <img src="upload/201705/11/201705110940466296.jpg"/>
                                        <!--width:343px height:182px-->
                                        <i class="iconfont icon-jinru"><p
                                                    style="color: #fff;padding: 0;margin-top: -20px;font-size: 14px;">
                                                继续了解</p></i>
                                    </a>
                                </div>
                                <h1>教育大数据解决方案</h1>
                            </li>

                            <li class="col-md-14 col-md-3 animate-box">
                                <div>
                                    <a href="solution_show.aspx-id=63.html">
                                        <img src="upload/201705/11/201705110940553484.jpg"/>
                                        <!--width:343px height:182px-->
                                        <i class="iconfont icon-jinru"><p
                                                    style="color: #fff;padding: 0;margin-top: -20px;font-size: 14px;">
                                                继续了解</p></i>
                                    </a>
                                </div>
                                <h1>科技大数据解决方案</h1>
                            </li>

                            <li class="col-md-14 col-md-3 animate-box">
                                <div>
                                    <a href="solution_show.aspx-id=62.html">
                                        <img src="upload/201705/11/201705110928082546.jpg"/>
                                        <!--width:343px height:182px-->
                                        <i class="iconfont icon-jinru"><p
                                                    style="color: #fff;padding: 0;margin-top: -20px;font-size: 14px;">
                                                继续了解</p></i>
                                    </a>
                                </div>
                                <h1>宣传大数据解决方案</h1>
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-13 col-sm-6 col-mx-2" style="height: 100%;">
                        <a href="/templates/main/trainer.html">浏览更多>></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="fh5co-parallax" style="background-image: url('/templates/main/images/home-image-02.jpg');padding:0;"
             data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-3 col-md-pull-3col-sm-offset-0 col-xs-offset-0" style="margin-left: 0%;">
                        <div id="fh5co-top" class="fh5co-top fh5co-intro fh5co-table-cell box-area">
                            <div class="animate-box height-auto">
                                <h1>{{ bloginfo('site_name') }}&nbsp;·&nbsp;企业动态</h1>
                                <div class="fh5co-height">
                                    <ul>
                                        @foreach($posts as $post)
                                            <li>
                                                <a href="{{ route('post',[$post->flag]) }}">
                                                    <h1>{{ $post->title }}</h1>


                                                    <span>{{ @$post->categories->category_name ?? '默认'}}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end: fh5co-parallax -->
        <div id="fh5co-pricing-section" class="fh5co-pricing fh5co-lightgray-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="heading-section text-center animate-box">
                            <h2>我们的客户</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="pricing">

                        <div class="col-md-14 col-md-3 animate-box" style="padding-left: 15px;padding-right: 15px;">
                            <img src="upload/201705/09/201705091123078660.png"/><!--width:204px height:133px-->
                        </div>

                        <div class="col-md-14 col-md-3 animate-box" style="padding-left: 15px;padding-right: 15px;">
                            <img src="upload/201705/09/201705091122284910.png"/><!--width:204px height:133px-->
                        </div>

                        <div class="col-md-14 col-md-3 animate-box" style="padding-left: 15px;padding-right: 15px;">
                            <img src="upload/201705/09/201705091122222878.png"/><!--width:204px height:133px-->
                        </div>

                        <div class="col-md-14 col-md-3 animate-box" style="padding-left: 15px;padding-right: 15px;">
                            <img src="upload/201705/09/201705091121545847.png"/><!--width:204px height:133px-->
                        </div>

                        <div class="col-md-14 col-md-3 animate-box" style="padding-left: 15px;padding-right: 15px;">
                            <img src="upload/201705/09/201705091121466941.png"/><!--width:204px height:133px-->
                        </div>

                        <div class="col-md-14 col-md-3 animate-box" style="padding-left: 15px;padding-right: 15px;">
                            <img src="upload/201705/09/201705091123024285.png"/><!--width:204px height:133px-->
                        </div>

                        <div class="col-md-14 col-md-3 animate-box" style="padding-left: 15px;padding-right: 15px;">
                            <img src="upload/201705/09/201705091121356785.png"/><!--width:204px height:133px-->
                        </div>

                        <div class="col-md-14 col-md-3 animate-box" style="padding-left: 15px;padding-right: 15px;">
                            <img src="upload/201705/09/201705091121232097.png"/><!--width:204px height:133px-->
                        </div>

                        <div class="col-md-14 col-md-3 animate-box" style="padding-left: 15px;padding-right: 15px;">
                            <img src="upload/201705/09/201705091121175222.png"/><!--width:204px height:133px-->
                        </div>

                        <div class="col-md-14 col-md-3 animate-box" style="padding-left: 15px;padding-right: 15px;">
                            <img src="upload/201705/09/201705091121113503.png"/><!--width:204px height:133px-->
                        </div>

                    </div>
                </div>
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
  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 200) {   //scrollTop() 方法返回或设置匹配元素的滚动条的垂直位置。
        $('.col-md-7 span img').fadeOut();
//		            $('#divId').fadeOut();
      } else {
//		            $('#divId').fadeIn();
        $('.col-md-7 span img').fadeIn();
      }
    });
  });
</script>

</body>
</html>