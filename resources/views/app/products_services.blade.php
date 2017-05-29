@include('app.layouts.header')

    <link type="text/css" rel="stylesheet" href="/templates/main/css/validate.css" />
    <link type="text/css" rel="stylesheet" href="/templates/main/css/pagination.css" />
    <link type="text/css" rel="stylesheet" href="/scripts/artdialog/ui-dialog.css" />
    <style>
        .img-none {
            display: none;
        }
        .img-block {
            display: block;
        }
        .img-none img {
            width: 100%;
        }
        .img-block img {
            width: 100%;
        }
        .Validform_checktip {
            margin-left: 8px;
            line-height: 20px;
            height: 20px;
            overflow: hidden;
            color: #999;
            font-size: 12px;
            position: absolute;
            right: 1%;
            top: 32%;
            position: absolute;
            text-indent: -9999px;
        }
        dd {
            margin-left: 0;
            position: relative;
        }
        .schedule {padding: 0;margin: 0;}
        #fh5co-programs-section .affet-left {margin: 0 0 40px 0;}
        input#btnSubmit:hover {background: #393e46 !important;}
        input#btnSubmit {width: 100%;background: #0eb3f0 !important;color: #fff !important;}
        @media screen and (max-width: 768px){
            #divClass .schedule {padding: 0 ;margin: 0;}
            #divClass ul {width: 100%;}
            #fh5co-programs-section .affet-left {margin: 0;}
            #fh5co-programs-section, #fh5co-schedule-section, #fh5co-team-section, #fh5co-blog-section, #fh5co-contact {padding: 3em 0;}
            .img-none {display: block;}
            .img-block {display: none;}
        }
        @media screen and (max-width: 320px){
            #divClass ul {width: 120%;}
            .txt-r ul li .tr-t h2 {width: 79.5%;}
        }
        .sf-menu li:nth-child(2) a {color: #fff;}
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
        <div class="fh5co-parallax" style="background-image: url(/templates/main/images/home-image-7.jpg);" data-stellar-background-ratio="0.5">
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

        <div id="fh5co-programs-section" class="fh5co-programs-height" style="background-color: #fafafa;">
            <div id="divId" class="affet-left">
                <ul class="schedule meta top_xxk">
                    <li><a href="#container_body" class="active" data-sched="1">云海舆情</a></li>
                    <li><a href="#container_body" data-sched="2">云海采集</a></li>
                    <li><a href="#container_body" data-sched="3">大数据一体机</a></li>
                    <li><a href="#container_body" data-sched="4">数据报告</a></li>

                </ul>
            </div>
            <div id="divClass" class="affet-left">
                <ul class="schedule meta top-xxk">
                    <li><a href="#container_body" class="active" data-sched="1">云海舆情</a></li>
                    <li><a href="#container_body" data-sched="2">云海采集</a></li>
                    <li><a href="#container_body" data-sched="3">大数据一体机</a></li>
                    <li><a href="#container_body" data-sched="4">数据报告</a></li>
                </ul>
            </div>
            <div id="container_body" class="container bottom_xxk">

                <!---------------------------------------------------云海舆情--------------------------------------------------->

                <div class="goods-container">
                    <div class="cpt_1 clearfix">
                        <div class="img-l">
                            <img src="/templates/main/images/500303746.jpg" />
                        </div>
                        <div class="txt-r">
                            <h1>舆情监测</h1>
                            <ul>

                                <li class="clearfix">
                                    <div class="tr-t clearfix">
                                        <img src="/upload/201705/11/201705111850444480.png" />
                                        <h2>泛网络监测</h2>
                                    </div>
                                    <div class="tr-b">
                                        支持境内外主流网站、新闻媒体、论坛、社交网站、客户端等泛网络级…
                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="tr-t clearfix">
                                        <img src="/upload/201705/11/201705111851576042.png" />
                                        <h2>定向监测</h2>
                                    </div>
                                    <div class="tr-b">
                                        定向监测指定网站、微博账号、微信公众号等舆情数据来源
                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="tr-t clearfix">
                                        <img src="/upload/201705/11/201705111853146511.png" />
                                        <h2>自定义筛选</h2>
                                    </div>
                                    <div class="tr-b">
                                        支持按时间段、内容属性和来源类型等多个条件筛选信息，保证数据准…
                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="tr-t clearfix">
                                        <img src="/upload/201705/11/201705111854113855.png" />
                                        <h2>统计分析</h2>
                                    </div>
                                    <div class="tr-b">
                                        支持关注度走势图、媒体关注度、网站来源明细、来源类型统计等多个…
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="cpt_1 clearfix">
                        <div class="img-r img-l">
                            <img src="/templates/main/images/500367665.jpg" />
                        </div>
                        <div class="txt-r">
                            <h1>舆情分析</h1>
                            <ul>

                                <li class="clearfix">
                                    <div class="tr-t clearfix">
                                        <img src="/upload/201705/11/201705111855258230.png" />
                                        <h2>舆情特征研判</h2>
                                    </div>
                                    <div class="tr-b">
                                        系统自动研判+人工二次校验，准确研判舆情正面、负面、中性特征
                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="tr-t clearfix">
                                        <img src="/upload/201705/11/201705111857214949.png" />
                                        <h2>事件分析</h2>
                                    </div>
                                    <div class="tr-b">
                                        智能化建立事件监测，自动完成全网、微博监测事件分析
                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="tr-t clearfix">
                                        <img src="/upload/201705/11/201705111859081980.png" />
                                        <h2>五重预警</h2>
                                    </div>
                                    <div class="tr-b">
                                        系统、APP、短信、微信公众号、邮件自动预警，重大舆情人工电话预…
                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="tr-t clearfix">
                                        <img src="/upload/201705/11/201705111859396824.png" />
                                        <h2>多维剖析</h2>
                                    </div>
                                    <div class="tr-b">
                                        支持事件溯源、趋势走向、载体分布、地域分布等多维度、数十个图表…
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="cpt_1 clearfix">
                        <div class="img-l">
                            <img src="/templates/main/images/500377191.jpg" />
                        </div>
                        <div class="txt-r">
                            <h1>舆情报告</h1>
                            <ul>

                                <li class="clearfix">
                                    <div class="tr-t clearfix">
                                        <img src="/upload/201705/11/201705111907312605.png" />
                                        <h2>图文并茂</h2>
                                    </div>
                                    <div class="tr-b">
                                        专业、详实、精炼文字解读分析，辅助精美图表分析，一目了然
                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="tr-t clearfix">
                                        <img src="/upload/201705/11/201705111903390105.png" />
                                        <h2>全系报告服务</h2>
                                    </div>
                                    <div class="tr-b">
                                        舆情日报、舆情周报、舆情月报、舆情季报周期性报告，专项事件报告…
                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="tr-t clearfix">
                                        <img src="/upload/201705/11/201705111900523386.png" />
                                        <h2>模板自定义</h2>
                                    </div>
                                    <div class="tr-b">
                                        任意组合添加为自定义简报维度，快速自动输出舆情简报
                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="tr-t clearfix">
                                        <img src="/upload/201705/11/201705111901376199.png" />
                                        <h2>专业人工报告团队…</h2>
                                    </div>
                                    <div class="tr-b">
                                        云海舆情分析师团队，为您量身打造专业的舆情报告
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="cpt_1 clearfix">
                        <div class="img-r img-l">
                            <img src="/templates/main/images/500144133.jpg" />
                        </div>
                        <div class="txt-r">
                            <h1>大屏指挥系统</h1>
                            <ul>

                                <li class="clearfix">
                                    <div class="tr-t clearfix">
                                        <img src="/upload/201705/11/201705111911054480.png" />
                                        <h2>全网数据</h2>
                                    </div>
                                    <div class="tr-b">
                                        展示全网数据的分析能力，数据采集能力
                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="tr-t clearfix">
                                        <img src="/upload/201705/11/201705111909060730.png" />
                                        <h2>实时监测展示</h2>
                                    </div>
                                    <div class="tr-b">
                                        实时显示新增负面信息，提供监测方案相关观点聚类。提供五种维度的…
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>


                <!---------------------------------------------------云海采集--------------------------------------------------->


                <div class="goods-container">
                    <div class="cpt_1 clearfix">

                        <div class="img-l">
                            <img src="/upload/201705/23/201705230859056611.jpg" />
                        </div>
                        <div class="txt-r">
                            <h1 style="margin: 0 0 10px 0;font-size: 25px;">全维度多媒体数据无缝采集</h1>
                            <p style="font-size: 15px;"><span style="color:;">多种类型和方案，适用于各种复杂场景数据采集的需求，涵盖图片、文本、语音、视频等全维度多媒体数据</span><br />
                                <strong><span>文本数据采集</span><span style="color:;"> &nbsp;</span></strong><span style="color:;">可包括广告、杂志、报纸、教材等多种形式的文本数据。采集灵活性高、速度快，能够根据需求定制文本采集方案</span><br />
                                <strong><span>图片数据采集</span><span style="color:;"> &nbsp;</span></strong><span style="color:;">根据实际需求提供特定场景的图片数据采集服务，包括实体图片、人物图片、场景图片、基于地理位置的图片采集，采集的图片针对性强、质量高</span><br />
                                <strong><span>语音视频数据采集</span><span style="color:;"> &nbsp;</span></strong><span style="color:;">提供各种特定条件下的语音视频采集服务，采集目标人群分散广、覆盖全，采集数据高度真实有效</span></p>
                        </div>

                    </div>
                    <div class="cpt_1 clearfix">

                        <div class="img-r img-l">
                            <img src="/upload/201705/23/201705230907329580.jpg" />
                        </div>
                        <div class="txt-r" style="margin: 9% 2.5%;">
                            <h1 style="margin: 0 0 10px 0;font-size: 25px;">境内外数据实时抓取</h1>
                            <p style="font-size: 15px;">适用于对互联网数据有需求的应用场景，通过自动化数据采集终端完成境内外海量互联网数据的自动化采集</p>
                        </div>

                    </div>
                    <div class="cpt_1 clearfix">

                        <div class="img-l">
                            <img src="/upload/201705/23/201705230907479111.jpg" />
                        </div>
                        <div class="txt-r" style="margin: 10% 2.5%;">
                            <h1 style="margin: 0 0 10px 0;font-size: 25px;">自动化智能云采集</h1>
                            <p style="font-size: 15px;">多台远端服务器同时采集，有效防封IP，支持定时启动，轻松获取百万数据</p>
                        </div>

                    </div>
                    <div class="cpt_1 clearfix">

                        <div class="img-r img-l">
                            <img src="/upload/201705/23/201705230909189736.jpg" />
                        </div>
                        <div class="txt-r" style="margin: 9% 2.5%;">
                            <h1 style="margin: 0 0 10px 0;font-size: 25px;">采集数据表格化</h1>
                            <p style="font-size: 15px;">采集数据表格化，自由配置列字段，支持数据库、网站、Excle、文本等多种导出方式，支持wordpress、discus、dede等多种论坛博客网站导入</p>
                        </div>

                    </div>
                </div>


                <!---------------------------------------------------大数据一体机--------------------------------------------------->


                <div class="goods-container">
                    <div class="cpt_1 clearfix">

                        <div class="img-l">
                            <img src="/upload/201705/22/201705221413022236.jpg" />
                        </div>
                        <div class="txt-r" style="margin: 10% 2.5%; display: -webkit-box;
-webkit-box-orient: vertical;
-webkit-line-clamp: 3;
overflow: hidden;">
                            <h1 style="margin: 0 0 10px 0;font-size: 25px;">软硬一体化，开箱即用</h1>
                            <p style="font-size: 15px;">快速构建TB到PB级大数据业务处理能力</p>
                        </div>

                    </div>
                    <div class="cpt_1 clearfix">

                        <div class="img-r img-l">
                            <img src="/upload/201705/22/201705221413442236.jpg" />
                        </div>
                        <div class="txt-r" style="margin: 9% 2.5%; display: -webkit-box;
-webkit-box-orient: vertical;
-webkit-line-clamp: 3;
overflow: hidden;">
                            <h1 style="margin: 0 0 10px 0;font-size: 25px;">一款产品化的大数据平台方案</h1>
                            <p style="font-size: 15px;">涵盖结构化、半结构化、非结构化数据的集成、存储、计算、展现</p>
                        </div>

                    </div>
                    <div class="cpt_1 clearfix">

                        <div class="img-l">
                            <img src="/upload/201705/22/201705221422204736.jpg" />
                        </div>
                        <div class="txt-r" style="margin: 8% 2.5%;">
                            <h1 style="margin: 0 0 10px 0;font-size: 25px;">融合高效</h1>
                            <p style="font-size: 15px;">新型分布式并行计算架构，可横向扩展达到4000个节点<br />
                                强大的计算和处理能力，资源利用率可提升40%<br />
                                整机柜服务器模式，节省75%的机房空间，整体功耗可降低66%<br />
                                统一的可视化管理监控模块，运维管理工作降低50%以上</p>
                        </div>

                    </div>
                    <div class="cpt_1 clearfix">

                        <div class="img-r img-l">
                            <img src="/upload/201705/22/201705221425233330.jpg" />
                        </div>
                        <div class="txt-r" style="margin: 8% 2.5%;">
                            <h1 style="margin: 0 0 10px 0;font-size: 25px;">敏捷易用</h1>
                            <p style="font-size: 15px;">组件化交付，将繁琐的环境搭建过程在生产线完成，易于部署<br />
                                只需插电、连网、启动等简单几步即可开始使用<br />
                                一体化运维，一站运维管理，无需频繁切换控制台<br />
                                建设周期缩短50%，运维效率提升40%</p>
                        </div>

                    </div>
                    <div class="cpt_1 clearfix">

                        <div class="img-l">
                            <img src="/upload/201705/22/201705221426423173.jpg" />
                        </div>
                        <div class="txt-r" style="margin: 6% 2.5%;">
                            <h1 style="margin: 0 0 10px 0;font-size: 25px;">企业级增强</h1>
                            <p style="font-size: 15px;">企业级RAS特性，关键部件N+N冗余，平台可靠性可达99.999%<br />
                                30项分布式文件系统特性优化，速度提高20%<br />
                                小文件存储优化、数据导入自动创建二级索引等数据特性进行优化<br />
                                整合20项关键组件，适配多种计算场景<br />
                                适配流式计算、离线处理、交互式分析、迭代预测、图计算等多种计算场景</p>
                        </div>

                    </div>
                    <div class="cpt_1 clearfix">

                        <div class="img-r img-l">
                            <img src="/upload/201705/22/201705221428205205.jpg" />
                        </div>
                        <div class="txt-r" style="margin: 8% 2.5%;">
                            <h1 style="margin: 0 0 10px 0;font-size: 25px;">强大的开发支持</h1>
                            <p style="font-size: 15px;">兼容SQL-92/99/2003、OLAP扩展，PL/SQL兼容度超过95%<br />
                                提供基于MADLib的高级机器学习和数据挖掘功能<br />
                                无需数据导入，即可直接访问关系数据库的数据，进行统一数据碰撞</p>
                        </div>

                    </div>
                </div>


                <!---------------------------------------------------数据报告--------------------------------------------------->


                <div class="goods-container">
                    <div class="cpt_1 clearfix">

                        <div class="img-l">
                            <img src="/upload/201705/22/201705221431507705.jpg" />
                        </div>
                        <div class="txt-r" style="margin: 9% 2.5%; display: -webkit-box;
-webkit-box-orient: vertical;
-webkit-line-clamp: 3;
overflow: hidden;">
                            <h1 style="margin: 0 0 10px 0;font-size: 25px;">所见即所得，让数据更懂你</h1>
                            <p style="font-size: 15px;">化抽象为具体，抽丝剥茧挖掘数据之间的关系，发现价值与规律，word、PPT多种形式报告形式，精炼详实，直观呈现</p>
                        </div>

                    </div>
                    <div class="cpt_1 clearfix">

                        <div class="img-r img-l">
                            <img src="/upload/201705/22/201705221432419580.jpg" />
                        </div>
                        <div class="txt-r" style="margin: 9% 2.5%; display: -webkit-box;
-webkit-box-orient: vertical;
-webkit-line-clamp: 3;
overflow: hidden;">
                            <h1 style="margin: 0 0 10px 0;font-size: 25px;">数据统计分析报告</h1>
                            <p style="font-size: 15px;">云海数据可对不同格式的电子数据进行统计处理，出具专业的数据统计与分析报告</p>
                        </div>

                    </div>
                    <div class="cpt_1 clearfix">

                        <div class="img-l">
                            <img src="/upload/201705/22/201705221441339736.jpg" />
                        </div>
                        <div class="txt-r" style="margin: 9% 2.5%; display: -webkit-box;
-webkit-box-orient: vertical;
-webkit-line-clamp: 3;
overflow: hidden;">
                            <h1 style="margin: 0 0 10px 0;font-size: 25px;">数据研究分析报告</h1>
                            <p style="font-size: 15px;">云海数据可根据数据统计，结合图表辅助制作可视化分析研究报告，为政府与企业决策提供数据支持</p>
                        </div>

                    </div>
                    <div class="cpt_1 clearfix">
                        <div class="txt-r">
                            <h1 style="margin: 0 0 10px 0;font-size: 25px;">数据报告定制服务流程</h1>
                        </div>
                        <div class="img-r img-l img-block" style="width: inherit;float: none !important;">
                            <img src="/templates/main/images/liucheng-1.png"/>
                        </div>
                        <div class="img-none">
                            <img src="/templates/main/images/liucheng-2.png"/>
                        </div>
                    </div>
                </div>
            </div>


            <!---------------------------------------------------申请表--------------------------------------------------->




            <div class="container block-liuyan">
                <div class="col-md-4 animate-box" style="width: 100%;text-align: center;">
                    <h3 class="section-title">马上申请试用</h3>
                    <form id="feedback_form" name="feedback_form" url="/customers" method="post">
                        <div class="form-box" style="border:0;">
                            {{ csrf_field() }}
                            <dl>
                                <dd>
                                    <input placeholder="姓名" name="name" type="text" class="input txt form-control" datatype="*" sucmsg=" " />
                                </dd>
                            </dl>
                            <dl>
                                <dd>
                                    <input placeholder="电话" name="phone" type="text" class="input txt form-control" datatype="*0-20" sucmsg=" " />
                                </dd>
                            </dl>
                            <dl>
                                <dd>
                                    <input placeholder="QQ"  name="qq" type="text" class="input txt form-control" datatype="*0-20" sucmsg=" " />
                                </dd>
                            </dl>
                            <dl>
                                  <dd>
                                    <input placeholder="邮箱" name="email" type="text" class="input txt form-control" />
                                  </dd>
                            </dl>
                            <dl>
                                <dd>
                                    <input placeholder="单位" name="company" class="input txt form-control" datatype="*" sucmsg="不能为空"></input>
                                </dd>
                            </dl>
                            <dl>
                                <dd>
                                    <input id="btnSubmit" name="btnSubmit" type="submit" value="立即提交" class="btn" />
                                </dd>
                            </dl>
                        </div>
                    </form>
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

<script type="text/javascript" src="/scripts/jquery/jquery.form.min.js"></script>
<script type="text/javascript" src="/scripts/jquery/Validform_v5.3.2_min.js"></script>
<script type="text/javascript" src="/scripts/artdialog/dialog-plus-min.js"></script>
<script type="text/javascript" src="/templates/main/js/old_js/common.js"></script>
<script type="text/javascript" src="/templates/main/js/jquery.hovertreescroll.js"></script>


<script>
  $(function(){
    $(window).scroll(function () {
      if ($(this).scrollTop() > 650) {   //scrollTop() 方法返回或设置匹配元素的滚动条的垂直位置。
        $('#divClass').fadeIn();
//		            $('#divId').fadeOut();
      } else {
//		            $('#divId').fadeIn();
        $('#divClass').fadeOut();
      }
    });
  });
</script>

<script>
  $(function(){
    $(".top_xxk li a").removeClass("active")
    $(".top_xxk li").eq(0).children("a").addClass("active")
    $(".bottom_xxk .goods-container").hide()
    $(".bottom_xxk .goods-container").eq(0).show()
    $('.top_xxk li').click(function(){
      $(".top_xxk li a").removeClass("active")
      $(this).children("a").addClass("active")
      n = $(".top_xxk li").index(this)
      $(".bottom_xxk .goods-container").hide()
      $(".bottom_xxk .goods-container").eq(n).show()
    });
  });
</script>

<script>
  $(function(){
    $(".top-xxk li a").removeClass("active")
    $(".top-xxk li").eq(0).children("a").addClass("active")
    $(".bottom_xxk .goods-container").hide()
    $(".bottom_xxk .goods-container").eq(0).show()
    $('.top-xxk li').click(function(){
      $(".top-xxk li a").removeClass("active")
      $(this).children("a").addClass("active")
      n = $(".top-xxk li").index(this)
      $(".bottom_xxk .goods-container").hide()
      $(".bottom_xxk .goods-container").eq(n).show()
      $("#container_body").HoverTreeScroll(1000);

    });
  });
</script>
<script type="text/javascript">
  $(function(){
    //初始化发表评论表单
    AjaxInitForm('#feedback_form', '#btnSubmit', 1);
  });
</script>

</body>
</html>

