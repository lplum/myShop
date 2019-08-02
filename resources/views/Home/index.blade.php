<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link href="/home/css/bootstrap.css" rel="stylesheet" />
    <link href="/home/css/base.css" rel="stylesheet" />
</head>
<body style="min-height:800px; height: auto">
<div class="container-fluid">

    <nav class="navbar navbar-default row no-yj  navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-list-left" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">大内总管</a>
            </div>

            <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-bell"><i class="label label-warning label-nav">66</i></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">脑壳打个包</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-envelope"><i class="label label-success label-nav">6</i></i></a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">真香</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="height: 50px">
                            <img class="img-circle pull-left img-responsive nav-user-img" src="img/user/user.jpg" /><span class="pull-left nav-username">管理员</span></a>

                        <ul class="dropdown-menu dropdown-menu-right clearfix" style="padding-top: 0px">
                            <li class="user-li-head"><span>
                                    <img class="img-circle nav-user-img-xiala center-block" src="/home/img/user/user.jpg" /></span>
                                <p></p>
                                <p class="text-center"><span>扑盖的猿</span></p>
                                <p class="text-center"><span>BOSS</span> </p>
                                <p class="text-center"><small><span> 公元2019年6月21日 </span></small></p>
                            </li>
                            <li style="padding: 10px 20px; padding-bottom: 20px">

                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat no-yj">资料</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat no-yj">注销</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>


            </div>



        </div>
    </nav>


    <div class="row" style="margin-top:70px">
        <div class="  nav-left col-md-2 no-padding" id="nav-list-left">
            <div class="user-panel">
                <img src="/home/img/user/user.jpg" class="img-circle center-block" />
            </div>

            <div class="nav-list" >
                <ul>
                    <li>
                        <a href="#">首页</a>

                    </li>
                    <li class="nav-left-dropdown">
                        <a href="#">管理员</a>
                    </li>
                    <li class="nav-left-dropdown">
                        <a href="/home/goods/index">商品管理</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-right  col-md-10 col-md-offset-2">
            @yield('content');
        </div>
    </div>


</div>
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $(".dropdownMenu").dropdown();
        $(".nav-left-dropdown>a").click(function () {


            if ($(this).attr("d") != 1 && $(this).attr("d") != undefined) {
                $(this).removeClass("nav-left-dropdown-a");
                $this = $(this);
                $(this).next("ul").slideUp(300, function () { $this.removeClass("nav-left-bottrom-border"); $this.removeClass("nav-left-dropdown-ul") });

                $(this).attr("d", "1");

            } else {
                $(this).addClass("nav-left-dropdown-a");
                $(this).addClass("nav-left-bottrom-border");
                $(this).next("ul").addClass("nav-left-dropdown-ul").slideDown(300);
                $(this).attr("d", "2");

            }


        })
    });

</script>
</body>
</html>

