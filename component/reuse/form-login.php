<div class="container">
    <div class="box">
        <div class="row">
            <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12 col-xs-12 ">
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 mb20">
                            <h3 class="mb10">Đăng nhập</h3>
                        </div>
                        <!-- form -->
                        <form>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label sr-only" for="email"></label>
                                    <div class="login-input">
                                        <input id="email" name="emaol" type="text" class="form-control" placeholder="Địa chỉ email" required>
                                        <div class="login-icon"><i class="fa fa-user"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label sr-only"></label>
                                    <div class="login-input">
                                        <input name="password" type="password" class="form-control" placeholder="Mật khẩu" required>
                                        <div class="login-icon"><i class="fa fa-lock"></i></div>
                                        <div class="eye-icon"><i class="fa fa-eye"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb20 ">
                                <button class="btn btn-primary btn-block mb10">Đăng nhập</button>
                                <div style="margin: 0 auto; width: 50%">
                                    <a href=<?php echo $level . PAGES_PATH . 'signup-form-post.php' ?> style="margin-right: 40px;" class="text-blue">Đăng ký</a>
                                    <a href="forgot-password.html" class="text-blue">Quên mật khẩu </a>
                                </div>
                            </div>
                        </form>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            <h4 class="mb20">Hoặc đăng nhập với</h4>
                            <div class="social-media">
                                <a href="#" class="btn-social-rectangle btn-facebook"><i class="fa fa-facebook"></i><span class="social-text">Facebook</span></a>
                                <a href="#" class="btn-social-rectangle btn-twitter"><i class="fa fa-twitter"></i><span class="social-text">Twitter</span> </a>
                                <a href="#" class="btn-social-rectangle btn-googleplus"><i class="fa fa-google-plus"></i><span class="social-text">Google
                                        Plus</span></a>
                            </div>
                        </div>
                        <!-- /.form -->
                    </div>
                </div>
            </div>