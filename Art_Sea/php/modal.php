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
                    <p class="invisible" id="signInError2">密码为空！</p>
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