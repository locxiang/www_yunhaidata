@include('app.layouts.header')
    <style>@media screen and (max-width: 768px) {
            .row-left ul li,.row-left ul li,.row-right ul li,.row-right ul li {margin: 20px auto;}
            .row-left,.row-right {float: none;}
            .col-md-18 {width: 100%;}
        }
        .sf-menu li:last-child a {color: #fff;}
        .sf-menu li:first-child a {color:rgba(255, 255, 255, 0.5)}
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
        <div class="fh5co-parallax" style="background-image: url('/templates/main/images/home-image-04.jpg');" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                        <div class="fh5co-intro fh5co-table-cell animate-box">
                            <h1 class="text-center">政务大数据服务商</h1>
                            <p class="btn btn-primary">开始导航</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: fh5co-parallax -->
        <!-- end:fh5co-hero -->
        <div id="fh5co-team-section">
            <div class="container">
                <div class="row about">
                    <div class="col-md-12 col-md-offset-0 animate-box">
                        <div class="heading-section text-center animate-box h2-font">
                            <h2>关于我们</h2>
                        </div>

                        <span style="margin-left: 2em;">陕西云海大数据科技有限公司是一家基于hadoop生态大数据技术矩阵的专业政企大数据服务商。我们专注于政企舆情、数据采集、数据管理和报告分析等，并根据不同需求为各行业提供精准的大数据解决方案。</p>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="heading-section text-center animate-box h2-font">
                            <h2>企业文化</h2>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-18 col-md-4 col-sm-6">
                        <div class="program animate-box">
                            <img src="/templates/main/images/iconfont-svg/yj-icon.svg">
                            <h3>企业愿景</h3>
                            <p>数据激活核心价值</p>
                        </div>
                    </div>
                    <div class="col-md-18 col-md-4 col-sm-6">
                        <div class="program animate-box">
                            <img src="/templates/main/images/iconfont-svg/sm-icon.svg">
                            <h3>企业使命</h3>
                            <p>探索数据智慧，创造无限可能</p>
                        </div>
                    </div>
                    <div class="col-md-18 col-md-4 col-sm-6">
                        <div class="program animate-box">
                            <img src="/templates/main/images/iconfont-svg/sl-icon.svg">
                            <h3>企业SLOGAN</h3>
                            <p>成为中国政务大数据专家</p>
                        </div>
                    </div>
                    <div class="col-md-18 col-md-4 col-sm-6">
                        <div class="program animate-box">
                            <img src="/templates/main/images/iconfont-svg/jz-icon.svg">
                            <h3>核心价值观</h3>
                            <p>创新求变、务实进取、开放包容、互利共赢</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="fh5co-programs-section" class="fh5co-lightgray-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="heading-section text-center animate-box">
                            <h2>联系方式</h2>
                        </div>
                    </div>
                </div>
                <div class="row text-center mg-tb">
                    <div class="row-left">
                        <ul>
                            <li>
                                <div class="hz animate-box">
                                    <i class="fa fa-phone"></i><span>合作电话：400-222-5555</span>
                                </div>
                            </li>
                            <li>
                                <div class="jm animate-box">
                                    <i class="fa fa-phone"></i><span>加盟电话：400-222-5555</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="row-right">
                        <ul>
                            <li>
                                <div class="hz animate-box">
                                    <i class="fa fa-envelope"></i><span>合作邮箱：112333@yunhiadata.com</span>
                                </div>
                            </li>
                            <li>
                                <div class="jm animate-box">
                                    <i class="fa fa-envelope"></i><span>加盟邮箱：112333@yunhiadata.com</span>
                                </div>
                            </li>
                        </ul>
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

</body>

</html>