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
        <form action="" method="post">
            <div class="row">
                <div class="col-lg-7">
                    <div class="billing-info-wrap">
                        <h3>Khách hàng</h3>
                        <div class="row">
                            <div class="col coldk">
                                <div class="input-text">
                                    <p>Họ tên:</p>
                                    <input required type="text" name="hoten" value="Họ tên">
                                </div>
                                <div class="input-text">
                                    <p>Số điện thoại:</p>
                                    <input required type="text" name="sdt" value="0123456789">
                                </div>
                                <div class="input-text">
                                    <p>Địa chỉ:</p>
                                    <input required type="text" name="diachi" value="Cần Thơ">
                                </div>
                                <div class="input-text">
                                    <p>Email:</p>
                                    <input required type="email" name="email" value="email@email.com">
                                </div>
                            </div>
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
                                        <li>Sản phẩm × 10
                                            <span>
                                                    999đ
                                                </span>
                                        </li>
                                        <li>Sản phẩm × 10
                                            <span>
                                                    999đ
                                                </span>
                                        </li>
                                        <li>Sản phẩm × 10
                                            <span>
                                                    999đ
                                                </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="your-order-subtotal">
                                    <h3>Tổng số tiền hàng
                                        <span>999đ</span>
                                        <input type="hidden" name="tongtienhang" value="">
                                    </h3>
                                </div>
                                <div class="your-order-subtotal">
                                    <h3>Ship <span>999đ</span></h3>
                                    <input type="hidden" name="ship" value="">
                                    <h3 style="margin-top: 10px;">Giảm giá
                                        <span>999đ</span></h3>
                                    <input type="hidden" name="giamgia" value="">
                                </div>
                                <div class="your-order-total">
                                    <h3>Tổng thanh toán
                                        <span>999đ</span>
                                        <input type="hidden" name="tongthanhtoan" value="">
                                    </h3>
                                </div>
                            </div>
                            <div class="payment-method">
                                <h3>Phương thức thanh toán</h3>
                                <div class="pay-top sin-payment">
                                    <input id="payment_method_1" class="input-radio" type="radio" value="cheque" checked="checked" name="payment_method">
                                    <label for="payment_method_1"> Thanh toán tiền mặt </label>
                                </div>
                            </div>
                        </div>
                        <div class="place-order">
                            <button type="submit">Đặt Hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>