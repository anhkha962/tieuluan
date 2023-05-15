<div class="container mt-6">
<?php $data["suasp"] ?>
    <h2 class="form-danhmuc">THÊM SẢN PHẨM</h2>
    <form class="form-content" method="Post" action="/tieuluanmvc/admin/suasanpham" enctype="multipart/form-data">
        <div class="col">

            <div class="row">
                <?php foreach($data["sp"] as $sp){ ?>
                <div class="col-6">
                    <input type="hidden" value='<?php echo $sp['sp_id']; ?>' name = 'id'>
                    <div class="form-items">
                        <label class="label">Tên sản phẩm</label><br>
                        <input class="form-control" name="tensp" type="text" placeholder="Nhập tên sản phẩm" value="<?php echo $sp['sp_ten']; ?>">
                    </div>
                    <div class="form-items">
                        <label class="label">Giá</label><br>
                        <input class="form-control" name="giasp" type="text" placeholder="Nhập giá sản phẩm" value="<?php echo $sp['sp_gia']; ?>">
                    </div>

                    <div class="form-items">
                        <label class="label">Thuộc danh mục</label><br>
                        <select name="tendm">
                        <option value="<?php $dm =  $sp['nhom_id'];
                                if($dm == '1'){
                                    echo '1';
                                }elseif($dm == '11'){
                                    echo '11';}
                                    elseif($dm == '12'){
                                        echo '12';} 
                                         
                                        else{
                                            echo '15';
                                        } 
                            ?>">
                            <?php $dm =  $sp['nhom_id'];
                                if($dm == '1'){
                                    echo 'Salam';
                                }elseif($dm == '11'){
                                    echo 'Jahan';}
                                    elseif($dm == '12'){
                                        echo 'Shyam';} 
                                         
                                        else{
                                            echo 'Bahraman';
                                        } 
                            ?>
                   
                    
                        </option>
                        <option value="1">Salam</option>
                        <option value="11">Jahan</option>
                        <option value="12">Shyam</option>
                        <option value="15">Bahraman</option>
                        
                        
                    </select>
                    </div>
                    <div class="form-items">
                        <label class="label">Thuộc thương hiệu</label><br>
                        <select name="tenth">
                
                    
                        <option value="<?php $th =  $sp['thuonghieu'];
                                if($th == '1'){
                                    echo 1;
                                }elseif($th == '4'){
                                    echo 4;}
                                    elseif($th == '6'){
                                        echo 6;} 
                                        elseif($th == '7'){
                                            echo 7;} 
                                        else{
                                            echo 8;
                                        } 
                            ?>">
                        <?php $th =  $sp['thuonghieu'];
                                if($th == '1'){
                                    echo 'Việt Nam';
                                }elseif($th == '4'){
                                    echo 'Nhật Bản';}
                                    elseif($th == '6'){
                                        echo 'Saharkhiz';} 
                                        elseif($th == '7'){
                                            echo 'Gohar Company';} 
                                        else{
                                            echo 'Bahraman';
                                        } 
                            ?>
                        </option>
                        <option value="1">Việt Nam</option>
                        <option value="4">Nhật Bản</option>
                        <option value="6">Saharkhiz</option>
                        <option value="7">Gohar Company</option>
                        <option value="8">Bahraman</option>
                        
                    </select>
                    </div>
                    <div class="form-items">
                        <label class="label">Hình ảnh sản phẩm</label><br>
                        <input class="form-control" name="hinhsp" type="file">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-items">
                        <label class="label">Mô tả sản phẩm</label><br>
                        <input name="motasp" rows="7" value="<?php echo $sp["sp_mota"]?>">
                    </div>
                    <div class="form-items">
                        <label class="label">Tồn kho</label><br>
                        <select name="tonkho">
                        <option value="<?php $tt =  $sp['sp_trangthai'];
                                if($tt == '1'){
                                    echo 1;
                                }else{
                                    echo 0;
                                }
                            ?>">
                        <?php $tt =  $sp['sp_trangthai'];
                                if($tt == '1'){
                                    echo 'Hết hàng';
                                }else{
                                    echo 'Còn hàng';
                                }
                            ?>
                        </option>
                        <option value="0">Còn hàng</option>
                        <option value="1">Hết hàng</option>
                    </select>
                    </div>
                    <div class="form-items">
                        <label class="label">Nổi bật</label><br>
                        <select name="noibat">
                        <option value="<?php $nb =  $sp['noibat'];
                                if($nb == '1'){
                                    echo 1;
                                }else{
                                    echo 0;
                                }
                            ?>">
                        <?php $nb =  $sp['noibat'];
                                if($nb == '1'){
                                    echo 'Nổi bật';
                                }else{
                                    echo 'Không';
                                }
                            ?>
                        </option>
                        <option value="1">Nổi bật</option>
                        <option value="0">Không</option>
                    </select>
                    </div>
                </div>
                    <?php } ?>
            </div>
        </div>


        <div class="form-button">
            <button id="submit" type="submit" class="btn btn-primary" name="suasp">Cập nhật sản phẩm</button>
        </div>
    </form>

</div>
<style>
@import url('https://fonts.googleapis.com/css2?family=Play&display=swap');    body {
font-family: 'Play', sans-serif;        margin-top: 30px;
    }
    
    .mt-3 {
        margin-top: 30px;
        max-width: 50%;
    }
    
    .form-danhmuc {
        font-weight: bolder;
        padding: 30px 0px;
        text-align: center;
    }
    
    .form-content {
        background-color: rgb(255, 255, 255);
        border-radius: 5px;
        padding: 30px 20px;
        border: .2px solid gainsboro;
        box-shadow: 0 5px 8px 0 rgb(126, 116, 116);
    }
    
    .label {
        margin-left: 8px;
        font-size: 18px;
        font-weight: bolder;
    }
    
    select {
        border-radius: 5px;
        padding: 6px 0;
        border: 1px solid gainsboro;
        width: 100%;
        background-color: white;
        transition: .3s;
    }
    
    textarea {
        border-radius: 5px;
        border: 1px solid gainsboro;
        width: 100%;
        background-color: while;
        transition: .3s;
    }
    
    .form-control {
        width: 100%;
        background-color: while;
        transition: .3s;
    }
    
    .btn-primary {
        margin-left: 10px;
        margin-top: 20px;
        border: none;
        box-shadow: 0 2px 4px 0 rgb(126, 116, 116);
        background-color: orange;
        text-decoration: none;
        border-radius: 5px;
        padding: 10px 20px;
        transition: .3s;
    }
    
    .btn-primary:hover {
        background-color: rgb(102, 102, 255);
        box-shadow: 0 4px 8px 0 rgb(126, 116, 116);
    }
    
    .btn-primary a {
        color: white;
        text-decoration: none;
        font-weight: bolder;
    }
</style>