<section style="background-color: black;">
        <div class="container" style="height: 160px;">
            <div><img src="" alt=""></div>
            <h1 style="font-weight: 700; color: #fff; text-align: center; margin-top: 40px">TÌM KIẾM</h1>
        </div>
    </section>

    <div id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#" class="not-active">Home</a></li>
                <span class="kitu"> / </span>
                <li class="active"><span>Tìm kiếm</span></li>
            </ol>
        </div>
    </div>
    
    <div>
        <div class="container">
            <div class="row">
                
                <div class="col-12 col-lg-12">
                   
                    <hr style="margin-top: 10px; margin-bottom: 40px;">
                    <div class="row product-right-mid">
                    <?php
            foreach($data["timkiem"] as $sp){
                ?>
                        <div class="col-4">
                            <div class="card-than">
                                <div id="card-img">
                                    <img class="d-block w-100" src="<?php echo $sp["sp_hinh"]?>" alt="">
                                </div>
                                <div class="card-bot">
                                    <p class="card-name"><a href="#"><?php echo $sp["sp_ten"] ?></a>
                                    </p>
                                    <p class="card-price">
                                    <?php echo number_format($sp["sp_gia"]) ?>VNĐ
                                    </p>
                                    
                                    <div class="col-12 card-add">
                                        <div class="row">
                                        <div class="col-4">
                                            <a href="/tieuluanmvc/home/AddGiohang&id=<?php echo $sp["sp_id"]?>&tk=<?php 
                                            if(isset($_SESSION['username'])){echo $_SESSION['username'];}else{echo "khach";}?>"><button class="btn-card" type="submit" name="addcart" >
                                            <i class='bx bxs-cart-add'></i></button></a>
                                        </div>
                                        <div class="col-4">
                                            <a href="/tieuluanmvc/home/DetailProduct&id=<?php echo $sp['sp_id'] ?>"><button class="btn-card" type="submit" name="detail" >
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
                </div>
            </div>
        </div>
    </div>
