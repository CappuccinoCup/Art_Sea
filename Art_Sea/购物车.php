<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>购物车</title>
    <!-- Bootstrap核心css文件 -->
    <link href="bootstrap-3.0.0/dist/css/bootstrap.css" rel="stylesheet">
    <!-- 其它css样式 -->
    <link href="css/公用.css" rel="stylesheet">
    <link href="css/购物车.css" rel="stylesheet">

    <script src="javascript/公用.js"></script>
    <script src="javascript/购物车.js"></script>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['admin']) || $_SESSION['admin'] === FALSE) {
        ?>
        <div class="jumbotron">
            <div class="container">
                <p class="text-center">用户已登出，请前往<a href="首页.php">首页</a>登录！</p>
            </div>
        </div>
    <?php
} else {
    ?>
        <header>
            <div class="container">
                <nav class="navbar navbar-inverse">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="navbar-text">Welcome to <strong>Art Sea</strong>, enjoy yourself in the sea of masterpieces!</p>
                        </div>
                        <div class="col-md-7">
                            <ul class="nav navbar-nav pull-right">
                                <li><a href="首页.php"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
                                <li><a href="搜索.php"><span class="glyphicon glyphicon-search"></span> 搜索</a></li>
                                <li><a href="个人中心.php"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['name']; ?></a></li>
                                <li><a href="购物车.php"><span class="glyphicon glyphicon-shopping-cart"></span> 购物车</a></li>
                                <li><a href="登出.php"><span class="glyphicon glyphicon-log-out"></span> 登出</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="logoRow">
                    <h1><strong>Art Sea </strong><small>swim in the sea of masterpieces</small></h1>
                    <div id="footPath"><span class="glyphicon glyphicon-time"></span> 您的足迹：
                        <a href="首页.html">首页 </a>
                        <span class="glyphicon glyphicon-arrow-right"></span>
                        <a href="购物车.html" class="currentPage">购物车 </a>
                    </div>
                </div>
                <hr class="featurette-divider">
            </div>
        </header>

        <main class="shoppingCart">
            <div class="container">
                <h2 class="highLight">购物车</h2>
                <hr class="featurette-divider">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">我的购物车</h3>
                    </div>
                    <div class="panel-body container">
                        <div id="cartWorks" class="row">
                            <div class="col-md-3"><img src="073010.jpg" class="cartImg pull-left"></div>
                            <div class="col-md-3">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">商品信息</h4>
                                    </div>
                                    <table class="table">
                                        <tr>
                                            <td>名称：</td>
                                            <td>这里是艺术品名称</td>
                                        </tr>
                                        <tr>
                                            <td>作家：</td>
                                            <td>这里是作家名字</td>
                                        </tr>
                                        <tr>
                                            <td>价格：</td>
                                            <td>这里是艺术品价格</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">商品简介</h4>
                                    </div>
                                    <div class="panel-body">
                                        这里是商品简介<br>这里是商品简介<br>这里是商品简介<br>这里是商品简介<br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <form action="详情.html" method="GET" target="_blank">
                                    <input type="text" class="invisibleInput" name="workID" id="workID" value="000001">
                                    <div class="btn-group pull-right" role="group">
                                        <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-chevron-right"></span> 详情</button>
                                        <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> 删除</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <hr class="featurette-divider">
                        <div id="cartWorks" class="row">
                            <div class="col-md-3"><img src="073010.jpg" class="cartImg pull-left"></div>
                            <div class="col-md-3">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">商品信息</h4>
                                    </div>
                                    <table class="table">
                                        <tr>
                                            <td>名称：</td>
                                            <td>这里是艺术品名称</td>
                                        </tr>
                                        <tr>
                                            <td>作家：</td>
                                            <td>这里是作家名字</td>
                                        </tr>
                                        <tr>
                                            <td>价格：</td>
                                            <td>这里是艺术品价格</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">商品简介</h4>
                                    </div>
                                    <div class="panel-body">
                                        这里是商品简介<br>这里是商品简介<br>这里是商品简介<br>这里是商品简介<br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <form action="详情.html" method="GET" target="_blank">
                                    <input type="text" class="invisibleInput" name="workID" id="workID" value="000001">
                                    <div class="btn-group pull-right" role="group">
                                        <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-chevron-right"></span> 详情</button>
                                        <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> 删除</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <hr class="featurette-divider">
                        <div class="row">
                            <div class="col-md-2 col-md-offset-8">
                                <p class="highLight pull-right">总计：$100000</p>
                            </div>
                            <div class="col-md-2"><button type="button" class="btn btn-default purchase pull-right"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;下单</button></div>
                        </div>
                    </div>
                </div>
                <hr class="featurette-divider">
            </div>
        </main>

        <footer>
            <div class="container">
                <p>2019©Art&nbsp;Sea&nbsp;&nbsp;&nbsp;&nbsp;@CappuccinoCup</p>
            </div>
        </footer>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="bootstrap-3.0.0/assets/js/jquery.js"></script>
        <script src="bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>
    <?php } ?>
</body>

</html>