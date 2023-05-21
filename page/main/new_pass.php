<?php require_once "page/main/xuly/xuly.php"; ?>

<div class="main_sanpham">
            
            <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-md-4 form login-form">
                        <form action="" method="POST" autocomplete="off">
                            <h2 class="text-center">Tạo Mật Khẩu Mới</h2>
                            
                            <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                              
                            <div class="form-group">
                                <input id="pwdmoi" class="form-control" type="password" name="password"  placeholder="Tạo mật khẩu mới..." required>
                                <span class="mat">
                                    <i class="fa fa-eye" aria-hidden="true"  type="button" id="eyemoi"></i>
                                  </span>
                            </div>
                            <div class="form-group">
                                <input id="pwdcu" class="form-control" type="password" name="cpassword"  placeholder="Nhập lại mật khẩu..." required>
                                <span class="mat">
                                    <i class="fa fa-eye" aria-hidden="true"  type="button" id="eyecu"></i>
                                  </span>
                            </div>
                            

                            <div class="form-group">
                                <input class="form-control button" type="submit" name="change-password" value="Thay Đổi">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>