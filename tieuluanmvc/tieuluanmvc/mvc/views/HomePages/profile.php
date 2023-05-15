<style>
    .account .avatar {
        border-right: 1px dashed rgba(0, 0, 0, 0.3);
    }
    
    .account .content {
        padding-left: 25px;
    }
    
    .account .tab-content {
        border: 1px solid rgba(0, 0, 0, 0.3);
        border-radius: 5px;
        padding: 30px;
    }
    
    .account p {
        font-weight: 700;
        font-size: 18px;
        text-align: justify;
        margin: 10px 0;
    }
    
    .account p span {
        font-weight: 400;
    }
    
    .account .button-function {
        margin-top: 30px;
    }
    
    .account .button-function .btndangky {
        background-color: #7274f8;
        font-size: 14px;
        font-weight: 900;
        color: white;
        border: 1px solid black;
        height: 50px;
        width: 150px;
        border-radius: 10px;
        float: right;
    }
    
    .account .button-function .btnnhaplai {
        background-color: white;
        color: black;
        border: 1px solid black;
        margin-right: 15px;
    }
    
    .account label {
        font-size: 20px;
    }
    
    .account .gioitinh {
        margin-right: 20px;
    }
    
    .account .tab-lable {
        font-size: 18px;
        font-weight: 500;
    }
    
    .account .list-group-item.active {
        background-color: #7274f8;
        border-color: #7274f8;
    }
    
    .account .input-text input {
        width: 100%;
        padding: 10px;
        outline-color: #7274f8;
        border: 2px solid rgba(0, 0, 0, 0.3);
        border-radius: 5px;
    }
</style>
<section style="background-color: black;">
    <div class="container" style="height: 160px;">
        <div><img src="" alt=""></div>
        <h1 style="font-weight: 700; color: #fff; text-align: center; margin-top: 40px">THÔNG TIN CÁ NHÂN</h1>
    </div>
</section>
<section class="mb-5 account" style="min-height: 500px; margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action tab-lable active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Thông tin tài khoản</a>
                    <a class="list-group-item list-group-item-action tab-lable" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Cập nhật tài
                            khoản</a>
                    <a class="list-group-item list-group-item-action tab-lable" id="list-profile-list" data-toggle="list" href="#list-order" role="tab" aria-controls="profile">Đơn hàng</a>
                    <a class="list-group-item list-group-item-action tab-lable" id="list-profile-list" data-toggle="list" href="#list-dmk" role="tab" aria-controls="profile">Đổi mật khẩu</a>
                </div>
            </div>
            <div class="col-9">
                
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="row">
                            <div class="col coldk">
                                <div class="row">
                                    
                                    <div class="col-10 content">
                                        
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="input-text">
                                                    <p>Họ tên:<span> <?php foreach($data["profile"] as $pf){echo $pf['u_ten'];}?></span></p>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                            <div class="input-text">
                                                    <p>Tỉnh/Thành phố: <span><?php foreach($data["profile"] as $pf){echo $pf['tinh'];}?></span></p>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="input-text">
                                                    <p>Ngày sinh: <span><?php foreach($data["profile"] as $pf){echo $pf['u_ngaysinh'];}?></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                            <div class="input-text">
                                                    <p>Quận/Huyện: <span><?php foreach($data["profile"] as $pf){echo $pf['huyen'];}?></span></p>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="input-text">
                                                    <p>Số điện thoại: <span><?php foreach($data["profile"] as $pf){echo $pf['u_phone'];}?></span></p>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                            <div class="input-text">
                                                    <p>Xã/Phường: <span><?php foreach($data["profile"] as $pf){echo $pf['xa'];}?></span></p>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="input-text">
                                                    <p>Email: <span><?php foreach($data["profile"] as $pf){echo $pf['u_email'];}?></span></p>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                            <div class="input-text">
                                                    <p>Đường/Số nhà: <span><?php foreach($data["profile"] as $pf){echo $pf['duong'];}?></span></p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="row">
                            <div class="col coldk">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                    <div class="col-6 content">
                                            <div class="input-text">
                                                <p>Họ tên:</p>
                                                <input required type="text" name="u_ten" placeholder="Nhập họ tên" value="<?php foreach($data["profile"] as $pf){echo $pf['u_ten'];}?>">
                                            </div>
                                            
                                            <div class="input-text">
                                                <p>Ngày sinh:</p>
                                                <input type="date" name="u_ngaysinh"  value="<?php foreach($data["profile"] as $pf){echo $pf['u_ngaysinh'];}?>">
                                            </div>
                                            <div class="input-text">
                                                <p>Số điện thoại:</p>
                                                <input required type="text" name="u_phone" placeholder="Nhập số điện thoại" value="<?php foreach($data["profile"] as $pf){echo $pf['u_phone'];}?>">
                                            </div>
                                            <div class="input-text">
                                                <p>Email:</p>
                                                <input required type="text" name="u_email" placeholder="Nhập email" value="<?php foreach($data["profile"] as $pf){echo $pf['u_email'];}?>">
                                            </div>
                                            <div class="input-text">
                                                <p>Tỉnh/Thành phố:</p>
                                                <input required type="text" name="tinh" placeholder="" value="<?php foreach($data["profile"] as $pf){echo $pf['tinh'];}?>">
                                            </div>
                                            </div>
                                        <div class="col-6 content">
                                            <div class="input-text">
                                                <p>Quận/Huyện:</p>
                                                <input required type="text" name="huyen" value="<?php foreach($data["profile"] as $pf){echo $pf['huyen'];}?>">
                                            </div>
                                            
                                            <div class="input-text">
                                                <p>Xã/Phường:</p>
                                                <input type="text" name="xa" value="<?php foreach($data["profile"] as $pf){echo $pf['xa'];}?>">
                                            </div>
                                            <div class="input-text">
                                                <p>Đường/Số nhà:</p>
                                                <input required type="text" name="duong" value="<?php foreach($data["profile"] as $pf){echo $pf['duong'];}?>">
                                            </div>

                                            <div class="button-function">
                                                <button type="submit" name="update" class="btn btn-outline-dark btndangky">CẬP NHẬT
                                                    </button>
                                                <button type="reset" name="dangky" class="btn btn-outline-dark btndangky btnnhaplai">NHẬP LẠI
                                                    </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-order" role="tabpanel" aria-labelledby="list-profile-list">
                        <ul style="list-style: none; padding: 0">
                            <li style="margin: 5px 0; border-bottom: 1px solid rgba(0, 0, 0, 0.2); padding: 10px 10px">
                                <div class="row">
                                    <div class="col">
                                        <span>Mã đơn hàng: 001</span>
                                        <br>
                                        <span>Ngày đặt: 01/01/2000</span>
                                    </div>
                                    <div class="col">
                                        Tổng thanh toán: 999999đ
                                        <br>
                                        <a style="color: #f379a7; font-weight: 700" href="">Xem chi tiết</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="list-dmk" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="row">
                            <div class="col coldk">
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-12 content">
                                            <div class="input-text">
                                                <p>Mật khẩu cũ:</p>
                                                <input required type="password" name="mk_cu">
                                            </div>
                                            <div class="input-text">
                                                <p>Mật khẩu mới:</p>
                                                <input required type="password" name="mk_moi">
                                            </div>
                                            <div class="input-text">
                                                <p>Nhập lại mật khẩu mới:</p>
                                                <input required type="password" name="re_mk_moi">
                                            </div>
                                            <div class="button-function">
                                                <button type="submit" class="btn btn-outline-dark btndangky">
                                                        XÁC NHẬN
                                                    </button>
                                                <button type="reset" class="btn btn-outline-dark btndangky btnnhaplai">
                                                        NHẬP LẠI
                                                    </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="/tieuluanmvc/mvc/public/main.js"></script>
<script src="/tieuluanmvc/mvc/public/jquery-3.5.1.min.js"></script>
<script src=/tieuluanmvc/mvc/public/bootstrap.js "></script>