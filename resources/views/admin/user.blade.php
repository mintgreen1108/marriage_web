<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>后台管理</title>

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
        <a href="index.html" class="logo"><b>后台管理</b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
        </div>
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="/admin/logout">退出</a></li>
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
                <h5 class="centered">{{session('admin_name')}}</h5>

                <li class="mt">
                    <a href="/admin/account">
                        <i class="fa fa-dashboard"></i>
                        <span>管理员管理</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a class="active" href="/admin/user">
                        <i class="fa fa-desktop"></i>
                        <span>用户管理</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-cogs"></i>
                        <span>用户分类管理</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>用户评价</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>推荐相亲对象</span>
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
                    <section class="task-panel tasks-widget">
                        <div class="panel-heading">
                            <div class="pull-left"><h5><i class="fa fa-tasks"></i>管理员列表</h5></div>
                            <br>
                        </div>
                        <div class="panel-body">
                            <div class="task-content">

                                <ul class="task-list">
                                    <li >
                                        <div class="task-title">
                                            <span class="task-title-sp">姓名</span>
                                            <span class="task-title-sp">手机号</span>
                                            <span class="task-title-sp">性别</span>
                                            <span class="task-title-sp">年龄</span>
                                            <span class="task-title-sp">类型</span>
                                            <span class="task-title-sp">地区</span>
                                            <span class="task-title-sp">工作</span>
                                            <span class="task-title-sp">意向</span>
                                        </div>
                                    </li>
                                    @foreach($data as $user)
                                        <li id="admin_{{$user->id}}">
                                            <div class="task-title">
                                                <span class="task-title-sp">{{$user->name}}</span>
                                                <span class="task-title-sp">{{$user->mobile}}</span>
                                                <span class="task-title-sp">{{($user->sex==1)?'男':'女'}}</span>
                                                <span class="task-title-sp">{{$user->age}}</span>
                                                <span class="task-title-sp">{{$user->type}}</span>
                                                <span class="task-title-sp">{{$user->area}}</span>
                                                <span class="task-title-sp">{{$user->job}}</span>
                                                <span class="task-title-sp">{{$user->want}}</span>
                                                <div class="pull-right hidden-phone">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button name="{{$user->id}}"
                                                            class="btn_delete btn btn-danger btn-xs"><i
                                                                class="fa fa-trash-o "></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </section>
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
    $('.btn_delete').onclick(function ($this) {

    });
</script>
</body>
</html>