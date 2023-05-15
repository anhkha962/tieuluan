<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="header-info-left">
                        <p>MIỄN PHÍ GIAO HÀNG TOÀN QUỐC</p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 sm-pl-0 xs-pl-15 header-top-right">
                    <div class="header-info">
                    <div class="col-12">
                    <div class="row">                    
                        <div class="col-9">

                        
                        <a href="tel://+00123456789"><i class='bx bx-phone'></i> 09092222223</a>
                        <a href="mailto://demo@example.com"><i class='bx bx-mail-send'></i> huynhde.saffron@gmail.com</a></div>
                        <div class="col-3">
                        <li class="has-submenu1" style="list-style: none; font-weight: 900;"><?php
                                if(isset($_SESSION['username'])){?>
                            <i class='bx bx-user-circle'></i><?php echo strtoupper($_SESSION['username']);?>
                            
                                    <ul class="submenu-nav1" style="list-style: none">
                                       
                                            
                                            <?php 
                                        if($_SESSION['quyen'] == 1 ){
                                        ?><li><a href="./Admin/Main">Quản lý</a></li>
                                        <?php }elseif($_SESSION['quyen'] == 2){ ?>
                                            <li><a href="./Admin/Main">Quản lý</a></li>
                                            <li><a href="./Home/Profile&id=<?php echo ($_SESSION['username']);?>">Cá nhân</a></li>
                                        <?php }else{ ?>
                                            <li><a href="./Home/Profile&id=<?php echo ($_SESSION['username']);?>">Cá nhân</a></li>
                                            <?php }?>
                                            <li>
                                            <a href="./Home/Dangxuat" style="font-size: 22px; padding-top:10px;"><i class='bx bx-log-in'></i></a>
                                            </li>
                                            <?php 
                                    
                                    ?>
                                    <?php
                                }else{?>

                                <a href="./Home/Account"><i class='bx bx-user-circle'></i> Tài khoản</a>
                                <?php }
                                ?>
                                    </ul>
                                </li>
                                </div>
                                </div>
                                
                        <!-- <?php
                                if(isset($_SESSION['username'])){?>
                            <a><i class='bx bx-user-circle'></i><?php echo strtoupper($_SESSION['username']);?></a>
                            <?php 
                                        
                                        if($_SESSION['username'] == 'admin' or $_SESSION['username'] == 'nhanvien1'){
                                        ?>
                            <a href="./Admin/Main">Quản lý</a>
                            <?php }else{ ?>
                            <a href="./Home/Profile&id=<?php echo ($_SESSION['username']);?>">Cá nhân</a>
                            <?php } ?>
                            <a href="./Home/Dangxuat" style="font-size: 22px; padding-top:10px;"><i class='bx bx-log-in'></i></a>
                            <?php
                                }else{?>

                                <a href="./Home/Account"><i class='bx bx-user-circle'></i> Tài khoản</a>
                                <?php }
                                ?> -->


                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="header-align">
                            <div class="header-align-left">
                                <div class="header-logo-area">
                                    <a href="">
                                        <img class="logo-main" src="/tieuluanmvc/mvc/public/img/logo2.png" alt="Logo" />
                                    </a>
                                </div>
                            </div>
                            <div class="header-align-center">
                                <div class="header-search-box">
                                    <form action="/tieuluanmvc/home/timkiem" method="POST">
                                        <div class="form-input-item">
                                            <label for="search" class="sr-only">Tìm kiếm</label>
                                            <input type="text" id="search" name="key_search" placeholder="Nhập sản phẩm muốn tìm">
                                            <button name="search"><a href="./home/timkiem" class="btn-src" name="search" style="padding: 8px 25px;"><i class='bx bx-search'></i></a></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="header-align-right">
                                <div class="header-action-area">
                                    <div class="header-action-search d-md-none">
                                        <button class="btn-chat" onclick="window.location.href='#'">
                                            <i class='bx bx-search'></i>
                                        </button>
                                    </div>
                                    <div class="header-action-cart">
                                        <button class="btn-cart cart-icon" onclick="window.location.href='./Home/Giohang'">
                                        
                                            <span class="cart-count"><?php echo $data1["chiso"] ?>
                                            </span>
                                            <i class='bx bx-shopping-bag'></i>
                                        </button>
                                    </div>
                                    <button class="btn-menu d-md-none" onclick="OpenMenu('menu-mobile')">
                                        <i class='bx bx-menu'></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-area header-default sticky-header">
            <div class="container">
                <div class="row row-gutter-0 align-items-center">
                    <div class="col-lg-12 sticky-md-none">
                        <div class="header-navigation-area">
                            <ul class="main-menu nav position-relative" id="menu-mobile">
                                <li><a href="#"><i class='bx bx-home'></i>Trang chủ</a></li>
                                <li class="has-submenu"><a href="./Home/Product&id=0"><i class='bx bx-package' ></i>Sản phẩm<i class='bx bx-chevron-down'
                                            id="chevron-down"></i></a>
                                    <ul class="submenu-nav" style="list-style: none">
                                        <?php
                                    foreach($data["danhmuc"] as $dm){
                                    ?>
                                            <li>
                                                <a href="./home/Product&id=<?php echo $dm["nhom_id"]; ?>">
                                                    <?php echo $dm["nhom_ten"] ?>
                                                </a>
                                            </li>
                                            <?php 
                                    }
                                    ?>
                                    </ul>
                                </li>
                                <li class="has-submenu"><a href="./Home/Product&id=0"><i class='bx bx-package' ></i>Thương hiệu<i class='bx bx-chevron-down'
                                            id="chevron-down"></i></a>
                                    <ul class="submenu-nav" style="list-style: none">
                                        <?php
                                    foreach($data["thuonghieu"] as $th){
                                    ?>
                                            <li>
                                                <a href="./home/Product&th=<?php echo $th["th_id"]; ?>">
                                                    <?php echo $th["th_ten"] ?>
                                                </a>
                                            </li>
                                            <?php 
                                    }
                                    ?>
                                    </ul>
                                </li>
                                <li><a href="#"><i class='bx bx-news' ></i>Tin tức</a></li>
                                <li><a href="#"><i class='bx bx-info-circle' ></i>Giới thiệu</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-bg-top"></div>
</header>

<section class="home-poster section-1">
    <div class="home-content">
        <div class="container-fluid" style="padding: 0">
            <div id="carouselExampleIndicators" class="carousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/tieuluanmvc/mvc/public/img/banner2.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/tieuluanmvc/mvc/public/img/banner2.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/tieuluanmvc/mvc/public/img/banner3.jpg">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="section-2">
    <div class="container-fluid">
        <div class="py-5">
            <div class="row">
                <!-- DEMO 1 Item-->
                <div class="col-lg-3 mb-3 mb-lg-0">
                    <a href="./Home/Product&id=1">
                        <div class="hover hover-1 text-white rounded">
                            <img src="./mvc/public/img/cate1.jpg" alt="">
                            <div class="hover-overlay"></div>
                            <div class="hover-1-content px-5 py-4">
                                <h3 class="hover-1-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light"></span>saffron salam</h3>
                                <p class="hover-1-description font-weight-light mb-0"><br></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-3 mb-lg-0">
                    <a href="./Home/Product&id=12">
                        <div class="hover hover-1 text-white rounded">
                            <img src="./mvc/public/img/cate2.jpg" alt="">
                            <div class="hover-overlay"></div>
                            <div class="hover-1-content px-5 py-4">
                                <h3 class="hover-1-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light"></span>saffron shyam</h3>
                                <p class="hover-1-description font-weight-light mb-0"><br></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-3 mb-lg-0">
                    <a href="./Home/Product&id=11">
                        <div class="hover hover-1 text-white rounded">
                            <img src="./mvc/public/img/cate3.jpg" alt="">
                            <div class="hover-overlay"></div>
                            <div class="hover-1-content px-5 py-4">
                                <h3 class="hover-1-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light"></span>saffron jahan</h3>
                                <p class="hover-1-description font-weight-light mb-0"><br></p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- DEMO 1 Item-->
                <div class="col-lg-3">
                    <a href="./Home/Product&id=15">
                        <div class="hover hover-1 text-white rounded">
                            <img src="./mvc/public/img/cate4.jpg" alt="">
                            <div class="hover-overlay"></div>
                            <div class="hover-1-content px-5 py-4">
                                <h3 class="hover-1-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light"></span>saffon bahraman</h3>
                                <p class="hover-1-description font-weight-light mb-0"><br></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section >
        <div class="container" style="height: 160px;">
            <div><img src="" alt=""></div>
            <h1 style="font-weight: 700; color: black; text-align: center; margin-top:20px;font-size: 50px; ">SẢN PHẨM NỔI BẬT</h1>
            
        </div>
    </section><hr style="margin-bottom: 50px;">
<section class="section-3" style="margin-bottom: 50px">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <a href="./Home/Product&id=1">
                    <div class="hover hover-1 text-white rounded" style="height: 421px !important;">
                        <img src="./mvc/public/img/noibat1.jpg" alt="">
                        <div class="hover-overlay"></div>
                        <div class="hover-1-content px-5 py-4 section-3-nike">
                            <a href="./Home/Product&id=1" style="color: white;">
                                <h3 class="hover-1-title text-uppercase font-weight-bold mb-0">SAFFRON SALAM</h3>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-9" style="height: 421px;">
                <div class="row">
                    <?php $data["noibat1"] ?>
                    <?php foreach($data["noibat1"] as $nb1){ ?>
                    <div class="col">
                        <div class="card-than" style="padding: 0 20px">
                            <div id="card-img">
                                <img class="d-block w-100" src="<?php echo $nb1["sp_hinh"]; ?>" alt="" style="width: 40%">
                            </div>
                            <div class="card-bot">
                                <p class="card-name"><a href="./Home/DetailProduct&id=<?php echo $nb1['sp_id'] ?>"><?php echo $nb1['sp_ten']; ?></a></p>
                                <p class="card-price">Giá: <?php echo $nb1['sp_gia']; ?></p>
                            </div>
                        </div>
                    </div><?php } ?>
                    
                </div>
            </div>
        </div>
        <hr style="margin-top: 50px">
    </div>
</section>

<section class="section-5" style="margin-bottom: 50px">
    <div class="container">
        <div class="row">
            <div class="col-9" style="height: 421px;">
                <div class="row">
                    <?php foreach($data["noibat2"] as $nb1){ ?>
                    <div class="col">
                        <div class="card-than" style="padding: 0 20px">
                            <div id="card-img">
                                <img class="d-block w-100" src="<?php echo $nb1["sp_hinh"]; ?>" alt="" style="width: 40%">
                            </div>
                            <div class="card-bot">
                                <p class="card-name"><a href="./Home/DetailProduct&id=<?php echo $nb1['sp_id'] ?>"><?php echo $nb1['sp_ten']; ?></a></p>
                                <p class="card-price">Giá: <?php echo $nb1['sp_gia']; ?></p>
                            </div>
                        </div>
                    </div><?php } ?>
                    
                
                </div>
            </div>
            <div class="col-3">
                <a href="./Home/Product&id=11">
                    <div class="hover hover-1 text-white rounded" style="height: 421px !important;"><img src="./mvc/public/img/noibat2.jpg" alt="">
                        <div class="hover-overlay"></div>
                        <div class="hover-1-content px-5 py-4 section-5-adidas">
                            <a href="./Home/Product&id=11" style="color: white;">
                                <h3 class="hover-1-title text-uppercase font-weight-bold mb-0">SAFFRON JAHAN
                                </h3>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <hr style="margin-top: 50px">
    </div>
</section>
<section class="section-3" style="margin-bottom: 50px">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <a href="./Home/Product&id=12">
                    <div class="hover hover-1 text-white rounded" style="height: 421px !important;">
                        <img src="./mvc/public/img/noibat3.jpg" alt="">
                        <div class="hover-overlay"></div>
                        <div class="hover-1-content px-5 py-4 section-3-nike">
                            <a href="./Home/Product&id=12" style="color: white;">
                                <h3 class="hover-1-title text-uppercase font-weight-bold mb-0">SAFFRON SHYAM</h3>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-9" style="height: 421px;">
                <div class="row">
                <?php foreach($data["noibat3"] as $nb1){ ?>
                    <div class="col">
                        <div class="card-than" style="padding: 0 20px">
                            <div id="card-img">
                                <img class="d-block w-100" src="<?php echo $nb1["sp_hinh"]; ?>" alt="" style="width: 40%">
                            </div>
                            <div class="card-bot">
                                <p class="card-name"><a href="./Home/DetailProduct&id=<?php echo $nb1['sp_id'] ?>"><?php echo $nb1['sp_ten']; ?></a></p>
                                <p class="card-price">Giá: <?php echo $nb1['sp_gia']; ?></p>
                            </div>
                        </div>
                    </div><?php } ?>
                    
                </div>
            </div>
        </div>
        <hr style="margin-top: 50px">
    </div>
</section>

<section class="section-5" style="margin-bottom: 50px">
    <div class="container">
        <div class="row">
            <div class="col-9" style="height: 421px;">
                <div class="row">
                <?php foreach($data["noibat4"] as $nb1){ ?>
                    <div class="col">
                        <div class="card-than" style="padding: 0 20px">
                            <div id="card-img">
                                <img class="d-block w-100" src="<?php echo $nb1["sp_hinh"]; ?>" alt="" style="width: 40%">
                            </div>
                            <div class="card-bot">
                                <p class="card-name"><a href="./Home/DetailProduct&id=<?php echo $nb1['sp_id'] ?>"><?php echo $nb1['sp_ten']; ?></a></p>
                                <p class="card-price">Giá: <?php echo $nb1['sp_gia']; ?></p>
                            </div>
                        </div>
                    </div><?php } ?>
                </div>
            </div>
            <div class="col-3">
                <a href="./Home/Product&id=15">
                    <div class="hover hover-1 text-white rounded" style="height: 421px !important;"><img src="./mvc/public/img/noibat4.jpg" alt="">
                        <div class="hover-overlay"></div>
                        <div class="hover-1-content px-5 py-4 section-5-adidas">
                            <a href="./Home/Product&id=15" style="color: white;">
                                <h3 class="hover-1-title text-uppercase font-weight-bold mb-0">SAFFRON BAHRAMAN
                                </h3>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <hr style="margin-top: 50px">
    </div>
</section>
<footer>
        <div class="container">
            <div class="footer-logo">
                <a href="./Main">
                    <img src="/tieuluanmvc/mvc/public/img/logo2.png" alt="" style="margin-bottom: 10px;">
                </a>
            </div>
            <div class="footer-info" style="padding-top: 150px; padding-left: 100px; padding-right: 100px;">
                <ul style="margin-top: 30px; padding-left: 0">
                    <li><a href="./Main">TRANG CHỦ</a></li>
                    <li><a href="./Home/Product&id=0">SẢN PHẨM</a></li>
                    <li><a href="./Home/Account">TÀI KHOẢN</a></li>
                    <li><a href="#">TIN TỨC</a></li>
                    <li><a href="#">GIỚI THIỆU</a></li>
                </ul>
            </div>
        </div>
    </footer>
<script src="/tieuluanmvc/mvc/public/jquery-3.5.1.min.js"></script>
<script src=/tieuluanmvc/mvc/public/bootstrap.js "></script>