<section style="background-color: black;">
        <div class="container" style="height: 160px;">
            <div><img src="" alt=""></div>
            <h1 style="font-weight: 700; color: #fff; text-align: center; margin-top: 40px">GIỎ HÀNG</h1>
        </div>
    </section>
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
                            <?php 
                            if(isset($_SESSION['username'])){
                            foreach($data['giohang'] as $cart){ ?>
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
                                            <button type="submit" name="down" onclick="window.location.href='../home/GiamSoluong&id=<?php echo $cart['sp_id']?>'" style="padding: 10px; border: none;">-</button>
                                            <input style="text-align: center" disabled type="number" class="input-text qty text" name="quantity" value=<?php echo $cart["soluong"]; ?> title="Qty" placeholder="">
                                            <button type="submit" name="up" onclick="window.location.href='../home/ThemSoluong&id=<?php echo $cart['sp_id']?>'" style="padding: 10px; border: none;">+</button>
                                        </form>
                                        </div>
                                    </td>
                                    <td class="product-total">
                                        <input type="hidden" name="total" value=""><?php echo $cart['sp_gia']*$cart['soluong'] ?>
                                    </td>
                                    <td class="product-remove">
                                        <a href="./DelGiohang&id=<?php echo $cart["sp_id"] ?>">
                                            <i class='bx bx-trash'></i></a>
                                    </td>
                                </tr>
                            </tbody> 
                            <?php }
                            }elseif(isset($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $item){?>
                            <tbody>
                                <tr>
                                    <td class="product-id">
                                        <?php echo $item["sp_id"]?>
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="<?php echo $item["sp_hinh"] ?>" alt="Image"></a>
                                    </td>
                                    <td class="product-name">
                                        <h5><a href="#"><?php echo $item['sp_ten'] ?></a></h5>
                                    </td>
                                    <td class="product-price"><span class="amount"><?php echo number_format($item['sp_gia'])  ?>  VNĐ</span></td>
                                    <td class="cart-quality">
                                        <div class="product-details-quality">
                                            <form method="POST">
                                                
                                            <button type="submit" name="down" onclick="window.location.href='../home/GiamSoluong&id=<?php echo $item['sp_id']?>'" style="padding: 10px; border: none;">-</button>
                                            <input style="text-align: center" disabled type="number" class="input-text qty text" name="quantity" value=<?php echo $item["soluong"]; ?> title="Qty" placeholder="">
                                            <button type="submit" name="up" onclick="window.location.href='../home/ThemSoluong&id=<?php echo $item['sp_id']?>'" style="padding: 10px; border: none;">+</button>
                                        </form>
                                        </div>
                                    </td>
                                    <td class="product-total">
                                        <input type="hidden" name="total" value=""><?php echo number_format($item['sp_gia']*$item['soluong'])  ?>  VNĐ
                                    </td>
                                    <td class="product-remove">
                                        <a href="./DelGiohang&id=<?php echo $item["sp_id"] ?>">
                                            <i class='bx bx-trash'></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <?php } } ?>
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
                            <a class="btn btn-link" href="../Home/Product" ><i class='bx bx-left-arrow-alt'></i> Trở về</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="cart-calculate-discount-wrap mb-40">
                        <h4>Mã giảm giá </h4>
                        <div class="calculate-discount-content">
                            <p>Nhập mã giảm giá (nếu có)!</p>
                            <form action="/tieuluanmvc/home/giohang" method="POST">
                                <div class="input-style">
                                <input type="text" name="code" placeholder="Mã giảm giá">
                            </div>
                            <div class="calculate-discount-btn">
                                <input type="submit" name="giamgia" value="Áp dụng">
                            </div>
                        </form>
                            
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-md-12 col-lg-5">
                    <div class="grand-total-wrap" style="float: right; width: 100%;">
                        
                            <div class="grand-total-content">
                                
                                <h3>Tổng tiền hàng <span><?php 
                                if(isset($_SESSION['username'])){
                                foreach ($data['tongtien'] as $tt){
                                    $tt = number_format($tt['total']);
                                    
                                }echo $tt;
                                }
                                else{
                                    $tongtien = 0;
                                    foreach($_SESSION['cart'] as $item)
                                        {
                                            
                                            $tongtien += $item['sp_gia'] * $item['soluong'];
                                            
                                        }
                                        $tongtien = number_format($tongtien);
                                        echo $tongtien;
                                }
                                 ?>  VNĐ</span></h3>
                            <div class="grand-shipping-1">
                                <p>Phí vận chuyển
                                    <span>Miễn phí</span>
                                </p>
                                <!-- <input type="hidden" name="ship" value="0"> -->
                            </div>
                            <div class="grand-shipping-1">
                                <p>Giảm giá
                                    <span><?php foreach ($data["giamgia"] as $gg) {
                                       echo $gg['giamgia'];
                                    }  ?>VNĐ</span>
                                </p>
                                <!-- <input type="hidden" name="ship" value="0"> -->
                            </div>
                            <h3>Tổng thanh toán <span><?php 
                                if(isset($_SESSION['username'])){
                                foreach ($data['tongtien'] as $tt){
                                    $tt = number_format($tt['total']-$gg['giamgia']);
                                    
                                }echo $tt;
                                }
                                else{
                                    $tongtien = 0;
                                    foreach($_SESSION['cart'] as $item)
                                        {
                                            
                                            $tongtien += $item['sp_gia'] * $item['soluong'] - $gg['giamgia'];
                                            
                                        }
                                        $tongtien = number_format($tongtien);
                                        echo $tongtien;
                                }
                                 ?>  VNĐ</span></h3>
                            </div>
                            <div class="grand-total-btn">
                                <button class="btn btn-link" type="submit">
                                <a style="color:white" href="/tieuluanmvc/home/Thanhtoan&tongtien=<?php 
                                if(isset($_SESSION['username'])){
                                foreach ($data['tongtien'] as $tt)
                                    $tt = ($tt['total']);
                                    echo $tt;
                                    
                                }
                                else{
                                    foreach($_SESSION['cart'] as $item)
                                        {
                                            $tongtien = $item['sp_gia'] * $item['soluong'];
                                            echo $tongtien;
                                        }
                                       
                                        
                                } ?>&gg=<?php echo $gg['giamgia'] ?>">
                                    Thanh Toán
                                </a>
                                </button>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>