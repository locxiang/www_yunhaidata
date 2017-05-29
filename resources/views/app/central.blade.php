@include('app.layouts.header')

    <style>@media screen and (max-width: 768px) {
            #fh5co-programs-section {
                padding: 4em 2em;
            }
        }

        .sf-menu li:nth-child(3) a {
            color: #fff;
        }

        .sf-menu li:first-child a {
            color: rgba(255, 255, 255, 0.5)
        }
    </style>

</head>
<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">
        <div id="fh5co-header">

            <header id="fh5co-header-section">
                <div class="container">
                    <div class="nav-header">
                        <a href="central.aspx.html#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
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
        <div class="fh5co-parallax" style="background-image: url('/templates/main/images/home-image-6.jpg');"
             data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                        <div class="fh5co-intro fh5co-table-cell animate-box">
                            <h1 class="text-center">基于hadoop生态的大数据技术矩阵</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end: fh5co-parallax -->
        <div id="dots-1"></div>
        <div id="fh5co-programs-section">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="media768 heading-section text-left animate-box float-left">
                        <h2>数据采集</h2>
                        <p class="h2-p">专注于互联网文本数据采集，所见即所得</p>
                        <p class="txt-floatl">云海采集系统，专业的智能采集工具，可进行多任务配置，日采集两高达数百万条</p>
                    </div>
                    <div class="media768-img animate-box float-right">
                        <img src="/templates/main/images/img-1.png"/>
                    </div>
                </div>
            </div>
        </div>
        <div id="dots-2"></div>
        <div id="fh5co-programs-section" style="background-color:#f5f5f5;">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="media768 heading-section text-right animate-box float-right">
                        <h2>数据清洗</h2>
                        <p class="h2-p">确保无法辨认的数据不会进入数据仓库</p>
                        <p class="txt-floatr">发现并纠正数据中可识别的错误，检查数据一致性,处理无效值和缺失值等，提高数据规范性和准确率</p>
                    </div>
                    <div class="media768-img animate-box float-left">
                        <img src="/templates/main/images/img-2.png"/>
                    </div>
                </div>
            </div>
        </div>
        <div id="dots-3"></div>
        <div id="fh5co-programs-section">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="media768 heading-section text-left animate-box float-left">
                        <h2>文本分析</h2>
                        <p class="h2-p">利用前沿的深度学习技术，帮助客户深入理解文字背后的含义</p>
                        <p class="txt-floatl">基于自然语言处理、情感判断、机器学习等技术，提取海量文本数据的潜在特征，实现文本挖掘、信息检索，量化表达文本信息</p>
                    </div>
                    <div class="media768-img animate-box float-right">
                        <img src="/templates/main/images/img-3.png"/>
                    </div>
                </div>
            </div>
        </div>
        <div id="dots-4"></div>
        <div id="fh5co-programs-section" style="background-color:#f5f5f5;">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="media768 heading-section text-right animate-box float-right">
                        <h2>语义分析</h2>
                        <p class="h2-p">独有多层语义算法融合模型，实现最佳文本处理效果</p>
                        <p class="txt-floatr">针对中英文语言特点，针对性开发词汇级、短串级、篇章级三级语义模型，构建行业专属语义模型，自动提取专有词汇和核心语义，确保语义挖掘效果</p>
                    </div>
                    <div class="media768-img animate-box float-left">
                        <img src="/templates/main/images/img-4.png"/>
                    </div>
                </div>
            </div>
        </div>
        <div id="dots-5"></div>
        <div id="fh5co-programs-section">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="media768 heading-section text-left animate-box float-left">
                        <h2>算法分析</h2>
                        <p class="h2-p">大数据挖掘算法 可视化数据分析的利器</p>
                        <p class="txt-floatl">让数据洞察更具前瞻性，随时随地获取分析结果，帮助客户更好低查看与理解数据</p>
                    </div>
                    <div class="media768-img animate-box float-right">
                        <img src="/templates/main/images/img-5.png"/>
                    </div>
                </div>
            </div>
        </div>
        <div id="dots-6"></div>
        <div id="fh5co-programs-section" style="background-color:#f5f5f5;">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="media768 heading-section text-right animate-box float-right">
                        <h2>数据建模</h2>
                        <p class="h2-p">集成上千套数据模型，让决策有理有据</p>
                        <p class="txt-floatr">基于政府与企业各类业务模式，创建针对性的预警、预测、决策等各类模型</p>
                    </div>
                    <div class="media768-img animate-box float-left">
                        <img src="/templates/main/images/img-6.png"/>
                    </div>
                </div>
            </div>
        </div>
        <div id="dots-7"></div>
        <div id="fh5co-programs-section">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="media768 heading-section text-left animate-box float-left">
                        <h2>数据可视化</h2>
                        <p class="h2-p">化抽象为直观，然数据更有趣，更具魅力</p>
                        <p class="txt-floatl">灵活多维报表与图表分析，数据分析结果直观呈现，一目了然</p>
                    </div>
                    <div class="media768-img animate-box float-right">
                        <img src="/templates/main/images/img-7.png"/>
                    </div>
                </div>
            </div>
        </div>
        <div id="dots-8"></div>
        <div id="fh5co-programs-section" style="background-color:#f5f5f5;">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="media768 heading-section text-right animate-box float-right">
                        <h2>数据安全</h2>
                        <p class="h2-p">完善的数据保护机制与安全体系</p>
                        <p class="txt-floatr">建立可靠的数据保护机制与技术安全体系，保障数据外部安全与内部安全，防范数据威胁</p>
                    </div>
                    <div class="media768-img animate-box float-left">
                        <img src="/templates/main/images/img-8.png"/>
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

<!-- Main JS (Do not remove) -->
<script src="/templates/main/js/main.js"></script>

<script src="/templates/main/js/old_js/common.js"></script>

</body>
</html>