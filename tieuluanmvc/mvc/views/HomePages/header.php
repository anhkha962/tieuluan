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
                                       
                                            <li>
                                            <?php 
                                        if($_SESSION['quyen'] == 1 ){
                                        ?><li><a href="./Admin/Main">Quản lý</a></li>
                                        <li>
                                            <a href="../Home/Dangxuat" style="font-size: 22px; padding-top:10px;"><i class='bx bx-log-in'></i></a>
                                            </li>
                                        <?php }elseif($_SESSION['quyen'] == 2){ ?>
                                            <li><a href="../Admin/Main">Quản lý</a></li>
                                            <li><a href="../Home/Profile&id=<?php echo ($_SESSION['username']);?>">Cá nhân</a></li>
                                            <li>
                                            <a href="../Home/Dangxuat" style="font-size: 22px; padding-top:10px;"><i class='bx bx-log-in'></i></a>
                                            </li>
                                        <?php }elseif($_SESSION['quyen'] == 0){ ?>
                                            <li><a href="../Home/Profile&id=<?php echo ($_SESSION['username']);?>">Cá nhân</a></li>
                                            <li>
                                            <a href="../Home/Dangxuat" style="font-size: 22px; padding-top:10px;"><i class='bx bx-log-in'></i></a>
                                            </li>
                                            <?php }?>
                                            
                                            <?php 
                                }else{?>

                                <a href="../Home/Account"><i class='bx bx-user-circle'></i> Tài khoản</a>
                                <?php }
                                ?>
                                    </ul>
                                </li>
                                </div>
                            
                            
                            
                    </div>
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
                                <a href="../Home">
                                    <img class="logo-main" src="/tieuluanmvc/mvc/public/img/logo2.png" alt="Logo" />
                                </a>
                            </div>
                        </div>
                        <div class="header-align-center">
                            <div class="header-search-box">
                                <form action="/tieuluanmvc/home/timkiem" method="POST">
                                    <div class="form-input-item">
                                        <label for="search" class="sr-only"></label>
                                        <input type="text" id="search" name="key_search" placeholder="Nhập sản phẩm muốn tìm">
                                        <button name="search"><a href="/tieuluanmvc/home/timkiem/<?php echo $_POST['key_search']?>" class="btn-src" name="search" style="padding: 8px 25px;"><i class='bx bx-search'></i></a></button>
                                        
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
                                    <button class="btn-cart cart-icon" onclick="window.location.href='/tieuluanmvc/home/giohang'">
                                            <span class="cart-count"><?php
                                             if(isset($_SESSION['username'])){
                                                foreach ($data['chiso'] as $tt)
                                                    echo $tt['total'];
                                                }
                                                else{
                                                    foreach($_SESSION['cart'] as $item){
                                                        $chiso += $item['soluong'];
                                                    }
                                                        echo $chiso;
                                                }
                                             ?></span>
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
                            <li><a href="/tieuluanmvc/Main"><i class='bx bx-home'></i>Trang chủ</a></li>
                            <li class="has-submenu"><a href="/tieuluanmvc/home/Product"><i class='bx bx-package' ></i>Sản phẩm<i class='bx bx-chevron-down'
                                            id="chevron-down"></i></a>
                                    <ul class="submenu-nav" style="list-style: none">
                                        <?php
                                    foreach($data["danhmuc"] as $dm){
                                    ?>
                                            <li>
                                                <a href="/tieuluanmvc/home/Product&id=<?php echo $dm["nhom_id"]; ?>">
                                                    <?php echo $dm["nhom_ten"] ?>
                                                </a>
                                            </li>
                                            <?php 
                                    }
                                    ?>
                                    </ul>
                                </li>
                                <li class="has-submenu"><a href="/tieuluanmvc/home/Product&id=0"><i class='bx bx-package' ></i>Thương hiệu<i class='bx bx-chevron-down'
                                            id="chevron-down"></i></a>
                                    <ul class="submenu-nav" style="list-style: none">
                                        <?php
                                    foreach($data["thuonghieu"] as $th){
                                    ?>
                                            <li>
                                                <a href="/tieuluanmvc/home/Product&th=<?php echo $th["th_id"]; ?>">
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