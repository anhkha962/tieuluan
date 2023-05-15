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

                        <div class="product-status">
                            <span style="font-size: 16px;">
                                Còn hàng
                            </span>
                            <span>-</span>
                            <small style="font-size: 14px;">Kho: 10</small>
                        </div>
                        <div class="product-description">
                            <p style="justify-content: center;"><?php echo $ct['sp_mota']; ?></p>
                        </div>

                        <div class="product-features">
                            <h3>Nổi bật: </h3>
                            <ul>
                                <li><i class="fi-rr-check"></i> 1914 translation by H. Rackham</li>
                                <li><i class="fi-rr-check"></i> The standard Lorem Ipsum passage,
                                    used since the 1500s
                                </li>
                                <li><i class="fi-rr-check"></i> Section 1.10.33 of "de Finibus
                                    Bonorum et Malorum
                                </li>
                            </ul>
                        </div>

                        <div class="product-actions-wrapper">
                            <form action="/tieuluanmvc/home/addgiohang" method="POST">
                                <input type="hidden" name="id" value="<?=$ct['sp_id']?>">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="p_size">Khối lượng</label>
                                            <select name="p_size" id="p_size" class="form-control">
                                                <option value="">100 Gram</option>
                                                <option value="">50 Gram</option>
                                            </select>
                                        </div>
                                    </div>
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
                                            <?php echo $ct['sp_gia'];} ?>
                                        </span>
                                    </span>
                                    <button type="submit" name="submit" class="btn btn-lg btn-primary product-detail-add">
                                        THÊM VÀO GIỎ HÀNG
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="product-meta">
                            <span class="product-category">
                                <span>Vị: Tên vị</span>
                                <a href="#" title=""></a>
                            </span>
                            <span>-</span>
                            <span class="product-tags">
                                <span>Phân loại:</span>
                                <a href="#" title="">Tên loại</a>
                            </span>
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
                                <h2 class="mb-0">
                                    <button type="button" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne"
                                        class="btn btn-link text-dark font-weight-bold text-uppercase">CHÍNH
                                        SÁCH CỬA HÀNG
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample"
                                class="collapse show">
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

                        <div class="card">
                            <div id="headingTwo" class="card-header bg-white">
                                <h2 class="mb-0">
                                    <button type="button" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo"
                                        class="btn btn-link collapsed text-dark font-weight-bold text-uppercase">
                                        BẢNG SIZE
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample"
                                class="collapse">
                                <div class="card-body p-5">
                                    <img src="" class="d-block w-100" alt="bangsize">
                                </div>
                            </div>
                        </div>

                        <!-- Accordion item 3 -->
                        <div class="card">
                            <div id="headingThree" class="card-header bg-white">
                                <h2 class="mb-0">
                                    <button type="button" data-toggle="collapse" data-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree"
                                        class="btn btn-link collapsed text-dark font-weight-bold text-uppercase">
                                        VẬN
                                        CHUYỂN
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample"
                                class="collapse">
                                <div class="card-body p-5">
                                    <p class="font-weight-light m-0">
                                        Hồ Chí Minh và Hà Nội phí ship là: 15.000đ
                                        <br>
                                        Tỉnh khác phí ship là: 30.000đ
                                        <br>
                                        Miễn phí vận chuyển đơn hàng từ 500.000đ
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
                    <div class="col-3">
                        <div class="card-than">
                            <div id="card-img">
                                <img class="d-block w-100" src="assets/img/product.png" alt="">
                            </div>
                            <div class="card-bot">
                                <p class="card-name"><a href="#">Sản phẩm 1</a>
                                </p>
                                <p class="card-price">
                                    99đ
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card-than">
                            <div id="card-img">
                                <img class="d-block w-100" src="assets/img/product.png" alt="">
                            </div>
                            <div class="card-bot">
                                <p class="card-name"><a href="#">Sản phẩm 1</a>
                                </p>
                                <p class="card-price">
                                    99đ
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card-than">
                            <div id="card-img">
                                <img class="d-block w-100" src="assets/img/product.png" alt="">
                            </div>
                            <div class="card-bot">
                                <p class="card-name"><a href="#">Sản phẩm 1</a>
                                </p>
                                <p class="card-price">
                                    99đ
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card-than">
                            <div id="card-img">
                                <img class="d-block w-100" src="assets/img/product.png" alt="">
                            </div>
                            <div class="card-bot">
                                <p class="card-name"><a href="#">Sản phẩm 1</a>
                                </p>
                                <p class="card-price">
                                    99đ
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>