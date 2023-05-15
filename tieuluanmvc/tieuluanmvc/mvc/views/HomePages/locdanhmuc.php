<section style="background-color: black;">
        <div class="container" style="height: 160px;">
            <div><img src="" alt=""></div>
            <h1 style="font-weight: 700; color: #fff; text-align: center; margin-top: 40px">SẢN PHẨM</h1>
        </div>
    </section>

    <div id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#" class="not-active">Home</a></li>
                <span class="kitu"> / </span>
                <li class="active"><span>Sản phẩm</span></li>
            </ol>
        </div>
    </div>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 product-left">
                    <div class="product-title category">
                        <h4>DANH MỤC</h4>
                        <a href="#">Tất cả</a>
                        <ul>
                            <?php foreach($data["danhmuc"] as $dm){ ?>
                            <li><a href=""><?php echo $dm['nhom_ten'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
        
                    <div class="product-title brand">
                        <h4>THƯƠNG HIỆU</h4>
                        <a href="">Tất cả</a>
                        <ul>
                            <?php foreach($data["thuonghieu"] as $th){ ?>
                            <li><a href=""><?php echo $th['th_ten'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="product-title price">
                        <h4>MỨC GIÁ</h4>
                        <a href="">Tất cả</a>
                        <ul>
                            <li><a href="">Dưới 1.000.000đ</a></li>
                            <li><a href="">1.000.000đ - 2.000.000đ </a></li>
                            <li><a href="">2.000.000đ - 3.000.000đ</a></li>
                            <li><a href="">3.000.000đ - 5.000.000đ</a></li>
                            <li><a href="">Trên 5.000.000đ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="row product-right-top">
                        <div class="col">
                            <a href=""><i class="fi-rr-grid"></i></a>
                            <span style="margin-left: 45px;">Sản phẩm 1 đến 9</span>
                        </div>
                        <div class="col">
                            <p>
                                <strong>Hiển thị 9</strong>
                                <strong>sản phẩm mỗi trang</strong>
                            </p>
                        </div>
                        <div class="col">
                            <p style="float: right;">
                                <strong>Sắp xếp:</strong>
                                <select name="" id="">
                                    <option value="0">Mới nhất</option>
                                    <option value="1">Giá thấp</option>
                                    <option value="2">Giá cao</option>
                                </select>
                            </p>
                        </div>
                    </div>
                    <hr style="margin-top: 10px; margin-bottom: 40px;">
                    <div class="row product-right-mid">
                    <?php
            foreach($data["locdanhmuc"] as $sp){
                ?>
                        <div class="col-4">
                            <div class="card-than">
                                <div id="card-img">
                                    <img class="d-block w-100" src="<? echo $sp["sp_hinh"]?>" alt="">
                                </div>
                                <div class="card-bot">
                                    <p class="card-name"><a href="#"><? echo $sp["sp_ten"] ?></a>
                                    </p>
                                    <p class="card-price">
                                    <? echo $sp["sp_gia"] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
