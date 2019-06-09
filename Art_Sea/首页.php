<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首页</title>
    <!-- Bootstrap核心css文件 -->
    <link href="bootstrap-3.0.0/dist/css/bootstrap.css" rel="stylesheet">
    <!-- 其它css样式 -->
    <link href="css/公用.css" rel="stylesheet">
    <link href="css/首页.css" rel="stylesheet">

    <script src="javascript/公用.js"></script>
    <script src="javascript/首页.js"></script>
    <script>
        window.onload = function() {
            setImageChange();
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
        <nav class="self-nav">
            <div class="self-container">
                <a class="self-brand" href="#">Art Sea </a>swim in the sea of masterpieces
                <div class="pull-right self-linkGroup">
                    <a href="#" class="currentPage">首页</a>
                    <a href="搜索.php" target="_blank">搜索</a>
                    <!-- 以下的代码结构很有用 -->
                    <?php
                    if (!isset($_SESSION['admin']) || $_SESSION['admin'] === FALSE) {
                        ?>
                        <a href="#" data-toggle="modal" data-target="#signIn">登录</a>
                        <a href="#" data-toggle="modal" data-target="#signUp">注册</a>
                    <?php
                } else {
                    ?>
                        <a href="个人中心.php" target="_blank"><?php echo $_SESSION['name']; ?></a>
                        <a href="购物车.php" target="_blank">购物车</a>
                        <a href="登出.php">登出</a>
                    <?php
                } ?>
                </div>
            </div>
        </nav>
    </header>

    <section class="self-scrollScreen">
        <img src="137010ex.jpg" alt="作品1" class="onShow">
        <img src="137020ex.jpg" alt="作品2">
        <img src="137030ex.jpg" alt="作品3">
        <p class="self-introduction invisibleP">热门艺术品简介1<br>作者<br>作者简介<br>其他说明<br>其他说明</p>
        <p class="self-introduction invisibleP">热门艺术品简介2<br>作者<br>作者简介<br>其他说明<br>其他说明</p>
        <p class="self-introduction invisibleP">热门艺术品简介3<br>作者<br>作者简介<br>其他说明<br>其他说明</p>
        <p class="self-workID invisibleP">000001</p>
        <p class="self-workID invisibleP">000002</p>
        <p class="self-workID invisibleP">000003</p>
        <div class="self-container">
            <div class="self-details">
                <p class="text-center self-introduction">热门艺术品简介1<br>作者<br>作者简介<br>其他说明<br>其他说明</p>
                <form action="详情.php" method="GET" target="_blank">
                    <input type="text" class="invisibleInput" name="workID" id="workID" value="000001">
                    <button class="btn btn-default" type="submit"><a>查看详情</a></button>
                </form>
            </div>
        </div>
        <div class="self-container">
            <div class="self-iconButton">
                <button class="active"></button>
                <button></button>
                <button></button>
            </div>
        </div>
    </section>

    <section id="newestWorks">
        <div class="container">
            <h2>最新艺术品</h2>
            <hr class="featurette-divider">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="thumbnail">
                            <img src="137010ex.jpg" class="artWorks" alt="最新艺术品1">
                            <div class="caption">
                                <h3>艺术品标题</h3>
                                <p>这里是简介这里是简介<br>这里是简介这里是简介<br>这里是简介这里是简介<br></p>
                                <div class="container">
                                    <form action="详情.php" method="GET" target="_blank">
                                        <input type="text" class="invisibleInput" name="workID" id="workID" value="000001">
                                        <button class="btn btn-default pull-right" type="submit"><a><span class="glyphicon glyphicon-chevron-right"></span> 查看详情</a></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="thumbnail">
                            <img src="073010.jpg" class="artWorks" alt="最新艺术品3">
                            <div class="caption">
                                <h3>艺术品标题</h3>
                                <p>这里是简介这里是简介<br>这里是简介这里是简介<br>这里是简介这里是简介<br></p>
                                <div class="container">
                                    <form action="详情.php" method="GET" target="_blank">
                                        <input type="text" class="invisibleInput" name="workID" id="workID" value="000001">
                                        <button class="btn btn-default pull-right" type="submit"><a><span class="glyphicon glyphicon-chevron-right"></span> 查看详情</a></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="thumbnail">
                            <img src="001020.jpg" class="artWorks" alt="最新艺术品2">
                            <div class="caption">
                                <h3>艺术品标题</h3>
                                <p>这里是简介这里是简介<br>这里是简介这里是简介<br>这里是简介这里是简介<br></p>
                                <div class="container">
                                    <form action="详情.php" method="GET" target="_blank">
                                        <input type="text" class="invisibleInput" name="workID" id="workID" value="000001">
                                        <button class="btn btn-default pull-right" type="submit"><a><span class="glyphicon glyphicon-chevron-right"></span> 查看详情</a></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="thumbnail">
                            <img src="137010ex.jpg" class="artWorks" alt="最新艺术品1">
                            <div class="caption">
                                <h3>艺术品标题</h3>
                                <p>这里是简介这里是简介<br>这里是简介这里是简介<br>这里是简介这里是简介<br></p>
                                <div class="container">
                                    <form action="详情.php" method="GET" target="_blank">
                                        <input type="text" class="invisibleInput" name="workID" id="workID" value="000001">
                                        <button class="btn btn-default pull-right" type="submit"><a><span class="glyphicon glyphicon-chevron-right"></span> 查看详情</a></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="thumbnail">
                            <img src="073010.jpg" class="artWorks" alt="最新艺术品3">
                            <div class="caption">
                                <h3>艺术品标题</h3>
                                <p>这里是简介这里是简介<br>这里是简介这里是简介<br>这里是简介这里是简介<br></p>
                                <div class="container">
                                    <form action="详情.php" method="GET" target="_blank">
                                        <input type="text" class="invisibleInput" name="workID" id="workID" value="000001">
                                        <button class="btn btn-default pull-right" type="submit"><a><span class="glyphicon glyphicon-chevron-right"></span> 查看详情</a></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="thumbnail">
                            <img src="001020.jpg" class="artWorks" alt="最新艺术品2">
                            <div class="caption">
                                <h3>艺术品标题</h3>
                                <p>这里是简介这里是简介<br>这里是简介这里是简介<br>这里是简介这里是简介<br></p>
                                <div class="container">
                                    <form action="详情.php" method="GET" target="_blank">
                                        <input type="text" class="invisibleInput" name="workID" id="workID" value="000001">
                                        <button class="btn btn-default pull-right" type="submit"><a><span class="glyphicon glyphicon-chevron-right"></span> 查看详情</a></button>
                                    </form>
                                </div>
                            </div>
                        </div>
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

</body>

</html>