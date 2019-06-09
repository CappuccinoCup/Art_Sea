<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>详情</title>
    <!-- Bootstrap核心css文件 -->
    <link href="bootstrap-3.0.0/dist/css/bootstrap.css" rel="stylesheet">
    <!-- 其它css样式 -->
    <link href="css/公用.css" rel="stylesheet">
    <link href="css/详情.css" rel="stylesheet">

    <script src="javascript/公用.js"></script>
    <script src="javascript/详情.js"></script>
    <script>
        window.onload = function() {
            setSign();
        }
    </script>
    <?php session_start(); ?>
</head>

<body>

    <!-- 登录 -->
    <div class="modal fade" id="signIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form autocomplete="off" id="formOfSignIn">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title">用户登录</h3>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="signInUsername">用户名</label>
                            <input type="text" class="form-control" id="signInUsername" name="signInUsername">
                        </div>
                        <p class="invisible" id="signInError1">用户名为空！</p>
                        <div class="form-group">
                            <label for="signInPassword">密码</label>
                            <input type="password" class="form-control" id="signInPassword" name="signInPassword">
                        </div>
                        <p class="invisible" id="signInError2">密码为空!</p>
                        <p class="invisible" id="signInError3">用户名或密码错误！</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" id="signInCancel">取消</button>
                        <button type="button" class="btn btn-primary" id="signInBtn">登录</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- 注册 -->
    <div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <form class="form-horizontal" autocomplete="off" id="formOfSignUp">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title">用户注册</h3>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="signUpUsername" class="col-md-3">用户名</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="signUpUsername" name="signUpUsername" placeholder="请输入用户名">
                                <p class="signUpError" id="signUpError1"><br></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="signUpEmail" class="col-md-3">邮箱</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" id="signUpEmail" name="signUpEmail" placeholder="请输入正确的邮箱">
                                <p class="signUpError" id="signUpError2"><br></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="signUpPassword" class="col-md-3">密码</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" id="signUpPassword" name="signUpPassword" placeholder="请输入大于等于六位的非纯数字">
                                <p class="signUpError" id="signUpError3"><br></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="signUpPassword" class="col-md-3">确认密码</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" id="signUpRePassword" name="signUpRePassword" placeholder="请再次输入密码">
                                <p class="signUpError" id="signUpError4"><br></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="signUpTel" class="col-md-3">电话</label>
                            <div class="col-md-9">
                                <input type="tel" class="form-control" id="signUpTel" name="signUpTel" placeholder="请输入正确的电话">
                                <p class="signUpError" id="signUpError5"><br></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="signUpAddress" class="col-md-3">地址</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="signUpAddress" name="signUpAddress" placeholder="请输入正确的邮寄地址">
                                <p class="signUpError" id="signUpError6"><br></p>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" id="signUpCancel">取消</button>
                        <button type="button" class="btn btn-primary" id="signUpBtn">注册</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
                            <?php
                            if (!isset($_SESSION['admin']) || $_SESSION['admin'] === FALSE) {
                                ?>
                                <li><a href="#" data-toggle="modal" data-target="#signIn"><span class="glyphicon glyphicon-log-in"></span> 登录</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#signUp"><span class="glyphicon glyphicon-list-alt"></span> 注册</a></li>
                            <?php
                        } else {
                            ?>
                                <li><a href="个人中心.php"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['name']; ?></a></li>
                                <li><a href="购物车.php" data-toggle="popover" data-placement="bottom" title="<?php echo $_SESSION['name']; ?>'sShoppingCart" data-content="商品1名称&lt;br&gt;商品1价格&lt;br&gt;商品2名称&lt;br&gt;商品2价格"><span class="glyphicon glyphicon-shopping-cart"></span> 购物车</a></li>
                                <li><a href="登出.php"><span class="glyphicon glyphicon-log-out"></span> 登出</a></li>
                            <?php
                        } ?></ul>
                    </div>
                </div>
            </nav>
            <div class="logoRow">
                <div class="row">
                    <div class="col-md-6">
                        <h1><strong>Art Sea </strong><small>swim in the sea of masterpieces</small></h1>
                    </div>
                    <div class="col-md-4 col-md-offset-2">
                        <form id="formOfSearch" action="#" method="GET" autocomplete="off">
                            <div class="input-group">
                                <input type="text" name="search" id="search" class="form-control">
                                <span class="input-group-btn"><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button></span>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="footPath"><span class="glyphicon glyphicon-time"></span> 您的足迹：
                    <a href="首页.html">首页 </a>
                    <span class="glyphicon glyphicon-arrow-right"></span>
                    <a href="详情.html" class="currentPage">详情 </a>
                </div>
            </div>
            <hr class="featurette-divider">
        </div>
    </header>

    <section id="work">
        <div class="container">
        <h2>Self-portrait in a Straw Hat</h2>
        <p>By <a href="#">Louise Elisabeth Lebrun</a></p>
            <div class="row">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="113010.jpg" class="img-thumbnail img-responsive" alt="Self-portrait in a Straw Hat">
                        </div>
                        <div class="col-md-7">
                            <p>
                                The painting appears, after cleaning, to be an autograph replica of a picture, the original of which was painted in Brussels in 1782 in free imitation of Rubens's 'Chapeau de Paille', which LeBrun had seen in Antwerp. It was exhibited in Paris in 1782 at the Salon de la Correspondance. LeBrun's original is recorded in a private collection in France.
                            </p>
                            <p class="highLight">$700</p>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">
                                    <a href="#"><span class="glyphicon glyphicon-usd"></span> 立即购买</a>
                                </button>
                                <button type="button" class="btn btn-default">
                                    <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> 加入购物车</a>
                                </button>
                            </div>
                            <p>&nbsp;</p>
                            <div class="panel panel-default">
                                <div class="panel-heading">Product Details</div>
                                <table class="table">
                                    <tr>
                                        <th>Date:</th>
                                        <td>1782</td>
                                    </tr>
                                    <tr>
                                        <th>Medium:</th>
                                        <td>Oil on canvas</td>
                                    </tr>
                                    <tr>
                                        <th>Dimensions:</th>
                                        <td>98cm x 71cm</td>
                                    </tr>
                                    <tr>
                                        <th>Home:</th>
                                        <td><a href="#">National Gallery, London</a></td>
                                    </tr>
                                    <tr>
                                        <th>Genres:</th>
                                        <td><a href="#">Realism</a>, <a href="#">Rococo</a></td>
                                    </tr>
                                    <tr>
                                        <th>Subjects:</th>
                                        <td><a href="#">People</a>, <a href="#">Arts</a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                </div>
                <div class="col-md-2">
                    <div class="panel panel-info">
                        <h3 class="panel-heading">热门艺术家</h3>
                        <ul class="panel-body list-group">
                            <li class="list-group-item"><a href="#">Michelangelo</a></li>
                            <li class="list-group-item"><a href="#">Picasso</a></li>
                            <li class="list-group-item"><a href="#">Raphael</a></li>
                            <li class="list-group-item"><a href="#">Van Gogh</a></li>
                        </ul>
                    </div>
                    <div class="panel panel-info">
                        <h3 class="panel-heading">热门作品</h3>
                        <ul class="panel-body list-group">
                            <li class="list-group-item"><a href="#">work1</a></li>
                            <li class="list-group-item"><a href="#">work2</a></li>
                            <li class="list-group-item"><a href="#">work3</a></li>
                            <li class="list-group-item"><a href="#">work4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        <hr class="featurette-divider">
        </div>
    </section>

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

    <script>
        $(function() {
            $('[data-toggle="popover"]').popover({
                html: true,
                trigger:'hover'
            })
        });//设置弹出框
    </script>
    
</body>

</html>