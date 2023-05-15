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
        font-weight: 600;
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
        background-color: #f379a7;
        border-color: #f379a7;
    }
    
    .account .input-text input {
        width: 100%;
        padding: 10px;
        outline-color: #f379a7;
        border: 2px solid rgba(0, 0, 0, 0.3);
        border-radius: 5px;
    }
    
    .account .coldk {
        padding-right: 40px !important;
    }
</style>
<section style="background-color: black;">
    <div class="container" style="height: 160px;">
        <div><img src="" alt=""></div>
        <h1 style="font-weight: 700; color: #fff; text-align: center; margin-top: 40px">THANH TOÁN</h1>
    </div>
</section>


<!--== Start Checkout Area Wrapper ==-->
<section class="product-area shop-checkout-area account" style="margin-top: 50px;">
    <div class="container">
    <form action="/tieuluanmvc/home/addhoadon" method="post">
            <div class="row">
                <div class="col-lg-7">
                    <div class="billing-info-wrap">
                        <h3>Khách hàng</h3>
                        <div class="row">
                            <div class="col coldk"><?php foreach($data["thongtin"] as $ttin){?>
                                <div class="input-text">
                                    <p>Họ tên:</p>
                                    <input required type="text" name="hoten" value="<?php echo $ttin['u_ten']; ?>">
                                </div>
                                <div class="input-text">
                                    <p>Số điện thoại:</p>
                                    <input required type="text" name="sdt" value="<?php echo $ttin['u_phone']; ?>">
                                </div>
                                <div class="input-text">
                                    <p>Tỉnh / Thành phố:</p>
                                    <input required type="text" name="diachi1" value="<?php echo $ttin['tinh']; ?>">
                                </div>
                                <div class="input-text">
                                    <p>Quận / Huyện:</p>
                                    <input required type="text" name="diachi2" value="<?php echo $ttin['huyen']; ?>">
                                </div>
                                <div class="input-text">
                                    <p>Xã Phường:</p>
                                    <input required type="text" name="diachi3" value="<?php echo $ttin['xa']; ?>">
                                </div>
                                <div class="input-text">
                                    <p>Địa chỉ (tên đường/số nhà):</p>
                                    <input required type="text" name="diachi4" value="<?php echo $ttin['duong']; ?>">
                                </div>
                                <div class="input-text">
                                    <p>Email:</p>
                                    <input required type="email" name="email" value="<?php echo $ttin['u_email']; ?>">
                                </div>
                                
                            </div><?php }?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="your-order-area">
                        <h3>Đơn hàng</h3>
                        <div class="your-order-wrap">
                            <div class="your-order-info-wrap">
                                <div class="your-order-title">
                                    <h4>Sản phẩm <span>Số tiền hàng</span></h4>
                                </div>
                                <div class="your-order-product">
                                    <ul>
                                    <?php foreach($data['giohang'] as $cart){ ?>
                                        <li>
                                            <?php echo $cart['sp_ten']?> x <?php echo $cart["soluong"]?>
                                            <span><?php echo $cart['sp_gia']*$cart['soluong']?>đ</span>
                                        </li>
                                    <?php } ?>
                                    </ul>
                                </div>
                                <div class="your-order-subtotal">
                                    <h3>Tổng số tiền hàng
                                        <span><?php 
                                        if(isset($_SESSION['username'])){
                                    foreach ($data['tongtien'] as $tt){
                                    $tt = number_format($tt['total']);}
                                    echo $tt;
                                    
                                }
                                else{
                                    $tongtien = 0;
                                    foreach($_SESSION['cart'] as $item)
                                        {
                                            
                                            $tongtien += $item['sp_gia'] * $item['soluong'];
                                            
                                        }
                                        $tongtien = number_format($tongtien);
                                        echo $tongtien;
                                } ?>đ</span>
                                    </h3>
                                </div>
                                <div class="your-order-subtotal">
                                    <h3>Ship <span>Miễn phí</span></h3>
                                    <input type="hidden" name="ship" value="0">
                                </div>
                                <div class="your-order-subtotal">
                                <h3>Giảm giá
                                    <span>- <?php if(isset($_GET['gg'])== ''){echo '0';}
                                       else{echo number_format($_GET['gg']);}
                                      ?>VNĐ</span>
                                </h3>
                                <!-- <input type="hidden" name="ship" value="0"> -->
                            </div>
                                <div class="your-order-total">
                                    <h3>Tổng thanh toán
                                        <span><?php if(isset($_SESSION['username'])){
                                    foreach ($data['tongtien'] as $tt){
                                    $tt = number_format($tt['total'] - $_GET['gg']);
                                    }
                                    echo $tt;
                                    
                                }
                                else{
                                    $tt = 0;
                                    foreach($_SESSION['cart'] as $item)
                                        {
                                            
                                            $tt += $item['sp_gia'] * $item['soluong'] - $_GET['gg'];
                                            
                                        }
                                        $tt = number_format($tt);
                                        echo $tt;
                                }?>đ</span>
                                        <input type="hidden" name="tongtien" value="<?php 
                                        if(isset($_SESSION['username'])){
                                    foreach ($data['tongtien'] as $tt){
                                    $tt = ($tt['total'] - $_GET['gg']);   
                                }
                                    echo $tt;
                                    $_SESSION['tongtien'] = $tt;


                                }
                                else{
                                    $tt = 0;
                                    foreach($_SESSION['cart'] as $item)
                                        {
                                            
                                            $tt += $item['sp_gia'] * $item['soluong'] - $_GET['gg'];
                                            
                                        }
                                        
                                        echo $tt;
                                        $_SESSION['tongtien']=$tt;
                                }?>">
                                    </h3>
                                </div>
                            </div>
                            
                        </div>
                        <div class="input-text" >
                                <select class="form-select" aria-label="Default select example" required name="pt" style="margin-left: 30px;padding: 10px 40px; margin-top: 20px; border-radius: 20px">
                                <option selected>Chọn hình thức thanh toán</option>
                                <option value="vnpay">Thanh toán VNPAY</option>
                                <option value="tien">Tiền mặt</option>
                                </select>
                                </div>
                        <input type="hidden" value="<?php echo $tt ?>" name='tongtien'>
                        <div class="place-order">
                   
                          <button class="btn-pay" type="submit" name="xacnhan" value="Xác nhận">Xác nhận</button>
                          <!-- <input class="btn-pay" type="submit" name="submit" value="tm"> -->
                    
                       

                            <style>
                                .btn-pay{
                                    margin-left: 5%;
                                    width: 400px;
                                    padding: 10px 35%;
                                    display: flex;
                                    margin-top: 10px ;
                                    font-size: 20px;
                                    font-weight: 900;
                                    background-color: blueviolet;
                                    color: white;
                                    border:none;
                                    border-radius: 10px;
                                    box-shadow: 0 2px 4px 0 gray;
                                    transition: .5s;
                                }
                                .btn-pay:hover{
                                    color: black;
                                    background-color: white;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
    </div>
</section>
