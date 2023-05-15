<section class="product-area cart-page-area" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-table-wrap">
                    <div class="cart-table table-responsive">
                        <table>
                            <thead>
                                <tr style="text-align: center">
                                    <th class="width-id">ID</th>
                                    <th class="width-thumbnail">Hình</th>
                                    <th class="width-name">Sản phẩm</th>
                                    <th class="width-price">Đơn giá</th>
                                    <th class="width-quantity">Số lượng</th>
                                    <th class="width-subtotal">Số tiền</th>
                                    <th class="width-remove"></th>
                                </tr>
                            </thead>
                            <?php foreach($data['giohang'] as $cart){ ?>
                            <tbody>
                                <tr>
                                    <td class="product-id">
                                        <?php echo $cart["sp_id"]?>
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="<?php echo $cart["sp_hinh"] ?>" alt="Image"></a>
                                    </td>
                                    <td class="product-name">
                                        <h5><a href="#"><?php echo $cart['sp_ten'] ?></a></h5>
                                    </td>
                                    <td class="product-price"><span class="amount"><?php echo $cart['sp_gia'] ?></span></td>
                                    <td class="cart-quality">
                                        <div class="product-details-quality">
                                            <form method="POST">
                                            <button type="submit" name="down" onclick="window.location.href='/tieuluanmvc/home/GiamSoluong&id=<?php echo $cart['sp_id']?>'" style="padding: 10px; border: none;">-</button>
                                            <input style="text-align: center" disabled type="number" class="input-text qty text" name="quantity" value=<?php echo $cart["soluong"]; ?> title="Qty" placeholder="">
                                            <button type="submit" name="up" onclick="window.location.href='/tieuluanmvc/home/ThemSoluong&id=<?php echo $cart['sp_id']?>'" style="padding: 10px; border: none;">+</button>
                                        </form>
                                        </div>
                                    </td>
                                    <td class="product-total">
                                        <input type="hidden" name="total" value="<?php echo $cart['sp_gia']*$cart['soluong']?>"><?php echo $cart['sp_gia']*$cart['soluong'] ?>
                                    </td>
                                    <td class="product-remove">
                                        <a href="./DelGiohang&id=<?php echo $cart["sp_id"] ?>">
                                            <i class='bx bx-trash'></i></a>
                                    </td>
                                </tr>
                            </tbody> 
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin: 50px 0;">
            <div class="row">
                <div class="col-lg-3">
                    <div class="cart-shiping-update-wrapper">
                        <div class="cart-shiping-btn continure-btn">
                            <a class="btn btn-link" href="#" ><i class='bx bx-left-arrow-alt'></i> Trở về</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="cart-calculate-discount-wrap mb-40">
                        <h4>Mã giảm giá </h4>
                        <div class="calculate-discount-content">
                            <p>Nhập mã giảm giá (nếu có)!</p>
                            <div class="input-style">
                                <input type="text" placeholder="Mã giảm giá">
                            </div>
                            <div class="calculate-discount-btn">
                                <a class="btn btn-link" href="#">Áp dụng</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-md-12 col-lg-5">
                    <div class="grand-total-wrap" style="float: right; width: 100%;">
                        <form action="" method="get">
                            <div class="grand-total-content">
                                
                                <h3>Tổng tiền hàng <span><?php echo number_format($data['tongtien'])?>đ</span></h3>
                                <input type="hidden" name="tongtienhang" value="">
                                <div class="grand-shipping-1">
                                    <p>Phí vận chuyển
                                        <span>30.000đ</span>
                                    </p>
                                    <input type="hidden" name="ship" value="">
                                </div>
                                <div class="grand-shipping-2">
                                    <p>Giảm giá<span>Không</span></p>
                                    <input type="hidden" name="giamgia" value="">
                                </div>
                                <!-- <div class="shipping-country">
                                        <p>Vận chuyển đến Cần Thơ</p>
                                    </div> -->
                                <div class="grand-total">
                                    <h4>Tổng thanh toán <span>9999đ</span>
                                    </h4>
                                    <input type="hidden" name="tongthanhtoan" value="">
                                </div>
                            </div>
                            <div class="grand-total-btn">
                                <button class="btn btn-link" type="submit">
                                        <a href="../home/Thanhtoan" style="color: white;"> Thanh Toán</a>
                                    </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>