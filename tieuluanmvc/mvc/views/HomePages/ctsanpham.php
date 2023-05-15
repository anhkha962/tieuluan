<section style="background-color: black;">
        <div class="container" style="height: 160px;">
            <div><img src="" alt=""></div>
            <h1 style="font-weight: 700; color: #fff; text-align: center; margin-top: 40px; text-transform: uppercase">
                CHI TIẾT SẢN PHẨM </h1>
        </div>
    </section>

    <div id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#" class="not-active">Home</a></li>
                <span class="kitu"> / </span>
                <li><a href="#" class="not-active">Sản phẩm</a></li>
                <span class="kitu"> / </span>
                <li class="active"><span>Tên sản phẩm</span></li>
            </ol>
        </div>
    </div>
<?php $data['chitiet'] ?>
    <section>
        <?php foreach($data['chitiet'] as $ct){ ?>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="<?php echo $ct['sp_hinh']; ?>" class="d-block w-100" alt="...">
                </div>
                <div class="col-6">
                    <div class="product-details-wrapper">
                        
                        <h2 class="product-name">
                            <?php echo $ct['sp_ten']; ?>
                        </h2><!-- /.product-name -->

                        
                        <div class="product-description">
                            <p style="justify-content: center;"><?php echo $ct['mota']; ?></p>
                        </div>

                        <div class="product-features">
                            <h3>Mô tả sản phẩm:</h3>
                            <p><?php echo $ct['sp_mota']; ?></p>
                        </div>

                        <div class="product-actions-wrapper">
                                <div class="row">
                                    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="p_qty">Số lượng</label>
                                            <input
                                                style="outline: none; border-radius: 0; width: 80px; font-size: 13px; font-weight: 600;"
                                                class="form-control" type="number" value="1" max="10"
                                                min="0" name="soluong" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-list-actions">
                                    <span class="product-price">
                                        <span class="amount">
                                            <?php echo number_format($ct['sp_gia']);  }?> VNĐ
                                        </span>
                                    </span>
                                    
                                    <a href="./AddGiohang&id=<?php echo $ct["sp_id"]?>&tk=<?php 
                                            if(isset($_SESSION['username'])){echo $_SESSION['username'];}else{echo "khach";}?>"><button class="btn-card" type="submit" name="addcart" >
                                            <i class='bx bxs-cart-add'></i></button></a>
                                   
                                </div>
                        </div>
                        
                    </div>

                    <style>
                        .accordion {
                            margin-left: 50px;
                            margin-top: 30px;
                            border-top: 1px solid rgba(0, 0, 0, 0.1);
                        }
                    </style>

                    <div id="accordionExample" class="accordion">
                        <!-- Accordion item 1 -->
                        <div class="card">
                            <div id="headingOne" class="card-header bg-white">
                                <h5 class="mb-0">
                                    CHÍNH
                                        SÁCH CỬA HÀNG
                                    
                                </h5>
                            </div>
                            <div >
                                
                                <div class="card-body p-5">
                                    <p class="font-weight-light m-0" style="text-align: justify"
                                        style="justify-content: center;">Chính sách bảo mật này nhằm giúp Quý khách
                                        hiểu về cách website thu thập và sử dụng thông tin cá nhân của mình thông
                                        qua việc sử dụng trang web, bao gồm mọi thông tin có thể cung cấp thông qua
                                        trang web khi Quý khách đăng ký tài khoản, đăng ký nhận thông tin liên lạc
                                        từ chúng tôi, hoặc khi Quý khách mua sản phẩm, dịch vụ, yêu cầu thêm thông
                                        tin dịch vụ từ chúng tôi.</p>
                                </div>
                            </div>
                        </div><!-- End -->

                        <!-- Accordion item 3 -->
                        <div class="card">
                            <div id="headingThree" class="card-header bg-white">
                                <h5 class="mb-0">
                                    
                                        VẬN
                                        CHUYỂN
                                   
                                </h5>
                            </div>
                            <div >
                                
                                <div class="card-body p-5">
                                    <p class="font-weight-light m-0">
                                        Dịch vụ giao hàng của cửa hàng Saffron Huỳnh Đề sẽ được miễn phí toàn quốc, với hình thức thanh toán thông qua ví Momo và hình thức thanh toán khi nhận được hàng !
                                    </p>
                                </div>
                            </div>
                        </div><!-- End -->

                    </div><!-- End -->

                </div>
            </div>
        </div>
    </section>

    <section style="margin-top: 60px;">
        <div>
            <div class="container">
                <hr>
                <div style="margin: 40px 0;">
                    <h3 style="font-weight: 700; font-size: 24px;">SẢN PHẨM MỚI</h3>
                </div>
                <div class="row" style="margin-bottom: 60px;">
                <?php foreach($data['spmoi'] as $new) {?>
                    <div class="col-3">
                        <div class="card-than">
                            <div id="card-img">
                                <img class="d-block w-100" src="<?php echo $new['sp_hinh'] ?>" alt="">
                            </div>
                            <div class="card-bot">
                                <p class="card-name"><a href="../Home/DetailProduct&id=<?php echo $new['sp_id'] ?>"><?php echo $new['sp_ten'] ?></a>
                                </p>
                                <p class="card-price">Giá: 
                                <?php echo $new['sp_gia'] ?>
                                </p>
                            </div>
                        </div>
                    </div><?php } ?>
                    
                </div>
            </div>
        </div>
    </section>