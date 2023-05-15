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
                        <a href="../home/Product&id=0">Tất cả</a>
                        <ul>
                            <?php foreach($data["danhmuc"] as $dm){ ?>
                            <li><a href="../home/Product&id=<?php echo $dm["nhom_id"]; ?>"><?php echo $dm['nhom_ten'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
        
                    <div class="product-title brand">
                        <h4>THƯƠNG HIỆU</h4>
                        <a href="../home/Product&id=0">Tất cả</a>
                        <ul>
                            <?php foreach($data["thuonghieu"] as $th){ ?>
                            <li><a href="../home/Product&th=<?php echo $th["th_id"]; ?>"><?php echo $th['th_ten'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="product-title price">
                        <h4>MỨC GIÁ</h4>
                        <a href="../home/Product&id=0">Tất cả</a>
                        <ul>
                            <p>Chưa hoàn thiện</p>
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
                        
                    </div>
                    <hr style="margin-top: 10px; margin-bottom: 40px;">
                    <div class="row product-right-mid">
                    <?php
            foreach($data["sanpham"] as $sp){
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
                                    <?php echo number_format($sp["sp_gia"])  ?>
                                    </p>
                                    
                                    <div class="col-12 card-add">
                                        <div class="row">
                                        <div class="col-4">
                                            <a href="./AddGiohang&id=<?php echo $sp["sp_id"]?>&tk=<?php 
                                            if(isset($_SESSION['username'])){echo $_SESSION['username'];}else{echo "khach";}?>"><button class="btn-card" type="submit" name="addcart" >
                                            <i class='bx bxs-cart-add'></i></button></a>
                                        </div>
                                        <div class="col-4">
                                            <a href="./DetailProduct&id=<?php echo $sp['sp_id'] ?>"><button class="btn-card" type="submit" name="detail" >
                                            <i class='bx bxs-detail' ></i></button></a>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn-card" type="submit" name="fav" >
                                            <i class='bx bxs-heart-circle' ></i></button>
                                        </div>
                                        

                                    <style>
                                        .btn-card{
                                            padding: 5px 15px; border: none; margin-top: 10px; font-size: 26px; border-radius: 35px; margin-left: -5px;
                                        }
                                        .btn-card:hover{
                                            background-color: orange;
                                            transition: .5s;
                                            box-shadow: 0 4px 10px 0 gray;
                                        }
                                    </style>
                                    </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                        <?php } ?>
                        
                    </div>
                    <div class="page-control"> 
                        
                        <?php
                        $cr_page=(isset($_GET['page']) ? $_GET['page'] : 1);
                         for($i=1; $i<=$data['phantrang']; $i++){
                            ?>
                            <li class="<?php echo ($cr_page == $i) ? 'active' : ''  ?>"><a href="../Home/Product&page=<?php echo $i ?>"><?php echo $i ?> </a></li>
                        <?php } ?>
                        <?php if($cr_page +1 <= $data['phantrang']){?>
                        <li><a href="../Home/Product&page=<?php echo $cr_page + 1 ?>"><i class='bx bx-right-arrow-alt' ></i></a></li>
                        <?php }?>
                        <style>
                                        .page-control{
                                            position: relative;
                                            justify-content: center;
                                            display: flex;
                                        }
                                        .page-control li{
                                            box-shadow: 0 2px 5px 0 gray;
                                            border-radius: 10px;
                                            margin: 6px 2px;
                                            border: 1px solid gray;
                                            padding: 5px 10px;
                                            list-style: none;
                                        }
                                        .page-control li:hover{
                                            color: white;
                                            background-color:orange
                                        }
                                        .page-control .active{
                                            color: white;
                                            background-color:orange;
                                        }
                                        .page-control a{
                                            color: black;
                                        }
                                        .page-control a:hover{
                                            color:white
                                        }
                                        .page-control .active a{
                                            color: white
                                        }
                                    </style>
                    </div>
                </div>
            </div>
        </div>
    </div>
