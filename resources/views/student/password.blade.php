<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>教务管理系统</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="/assets/js/gritter/css/jquery.gritter.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/lineicons/style.css">

    <!-- Custom styles for this template -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/to-do.css">

    <script src="/assets/js/chart-master/Chart.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container">
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo"><b>教务管理</b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
        </div>
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="/student/logout">退出</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">

                <p class="centered"><a href="profile.html"><img src="/assets/img/ui-sam.jpg" class="img-circle"
                                                                width="60"></a></p>
                <h5 class="centered">{{$_SESSION['student_name']}}</h5>
                <li class="mt">
                    <a href="/student/index">
                        <i class="fa fa-dashboard"></i>
                        <span>成绩</span>
                    </a>
                </li>

                <li class="mt">
                    <a  href="/student/question">
                        <i class="fa fa-dashboard"></i>
                        <span>答疑板</span>
                    </a>
                </li>
                <li class="mt">
                    <a class="active" href="/student/password">
                        <i class="fa fa-dashboard"></i>
                        <span>修改密码</span>
                    </a>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- COMPLEX TO DO LIST -->
            <div class="row mt">
                <div class="col-md-12">
                    <div class="row mt">
                        <div class="col-lg-12">
                            <div class="form-panel">
                                <h4 class="mb"><i class="fa fa-angle-right"></i> 修改密码</h4>
                                <form class="form-horizontal tasi-form" method="post" action="/student/modifyPwd">
                                    <input id="user_id" type="text" name="id" class="form-control hidden">
                                    <div class="form-group has-success">
                                        <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">原密码</label>
                                        <div class="col-lg-10">
                                            <input id="user_name" type="password" name="password" class="form-control"
                                                   required>
                                        </div>
                                    </div>

                                    <div class="form-group has-success">
                                        <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">密码</label>
                                        <div class="col-lg-10">
                                            <input id="user_name" type="password" name="pwd" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group has-success">
                                        <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">再次确认</label>
                                        <div class="col-lg-10">
                                            <input id="user_name" type="password" name="pwd_repeat" class="form-control"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="form-group has-error">
                                        <label class="col-sm-2 control-label col-lg-2" for="inputError"></label>
                                        <div class="col-lg-10 add-task-row">
                                            <button type="submit" class="btn btn-success btn-sm pull-left"
                                                    href="todo_list.html#">确定
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- /form-panel -->
                        </div><!-- /col-lg-12 -->
                    </div><!-- /row -->
                </div><!-- /col-md-12-->
            </div><!-- /row -->


            <!-- SORTABLE TO DO LIST -->
        </section>
    </section>

    <!--main content end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/jquery-1.8.3.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="/assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="/assets/js/jquery.scrollTo.min.js"></script>
<script src="/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="/assets/js/jquery.sparkline.js"></script>


<!--common script for all pages-->
<script src="/assets/js/common-scripts.js"></script>

<script type="text/javascript" src="/assets/js/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="/assets/js/gritter-conf.js"></script>

<!--script for this page-->
<script src="/assets/js/sparkline-chart.js"></script>
<script src="/assets/js/zabuto_calendar.js"></script>

<script type="text/javascript">
</script>

<script type="application/javascript">
</script>
</body>
</html>