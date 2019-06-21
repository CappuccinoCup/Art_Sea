<header>
    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="row">
                <div class="col-md-5">
                    <p class="navbar-text">Welcome to <strong>Art Sea</strong>, enjoy yourself in the sea of masterpieces!</p>
                </div>
                <div class="col-md-7">
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="首页.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href="搜索.php"><span class="glyphicon glyphicon-search"></span> Search</a></li>
                        <?php
                        if (!isset($_SESSION['admin']) || $_SESSION['admin'] === FALSE) {
                            ?>
                            <li><a href="#" data-toggle="modal" data-target="#signIn"><span class="glyphicon glyphicon-log-in"></span> Sign in</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#signUp"><span class="glyphicon glyphicon-list-alt"></span> Sign up</a></li>
                        <?php
                    } else {
                        ?>
                            <li><a href="个人中心.php"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['name']; ?></a></li>
                            <li><a href="购物车.php" data-toggle="popover" data-placement="bottom" title="<?php echo $_SESSION['name']; ?>'sShoppingCart" data-content="商品1名称&lt;br&gt;商品1价格&lt;br&gt;商品2名称&lt;br&gt;商品2价格"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a></li>
                            <li><a href="./php/登出.php"><span class="glyphicon glyphicon-log-out"></span> Sign out</a></li>
                        <?php
                    } ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="logoRow">
            <div class="row">
                <div class="col-md-6">
                    <h1><strong>Art Sea </strong><small>swim in the sea of masterpieces</small></h1>
                </div>
                <div class="col-md-4 col-md-offset-2">
                    <form id="formOfSearch" action="搜索.php" method="GET" autocomplete="off">
                        <div class="input-group">
                            <input type="text" name="search" id="search" class="form-control">
                            <span class="input-group-btn"><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button></span>
                        </div>
                    </form>
                </div>
            </div>
            <div id="footPath"><span class="glyphicon glyphicon-time"></span> Your FootPrint:
            <?php showFootprint(); ?>
            </div>
        </div>
        <hr class="featurette-divider">
    </div>
</header>