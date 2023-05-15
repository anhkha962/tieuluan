
<?php $data["addsp"]?>;




    <div class="container mt-6">

        <h2 class="form-danhmuc">THÊM SẢN PHẨM</h2>
        <form class="form-content" method="Post" action="" enctype="multipart/form-data">
            <div class="col">
                <div class="row">
                    <div class="col-6">
                        <div class="form-items">
                            <label class="label">Tên sản phẩm</label><br>
                            <input class="form-control" name="tensp" type="text" placeholder="Nhập tên sản phẩm">
                        </div>
                        <div class="form-items">
                            <label class="label">Giá</label><br>
                            <input class="form-control" name="giasp" type="text" placeholder="Nhập giá sản phẩm">
                        </div>
                        <div class="form-items">
                            <label class="label">Thuộc danh mục</label><br>
                            <select name="tendm">
                        <option>Chọn danh mục</option>
                        <?php foreach($data["danhmuc"] as $dm){ ?>
                            <option value="<?php echo $dm["nhom_id"]?>"><?php echo $dm["nhom_ten"] ?></option>
        
                            <?php } ?> 
                        </select>
                        </div>
                        <div class="form-items">
                            <label class="label">Thuộc thương hiệu</label><br>
                            <select name="tenth">
                        <option>Chọn thương hiệu</option>
                        <?php foreach($data["thuonghieu"] as $th){
                            ?>
                            <option value="<?php echo $th["th_id"]?>"><?php echo $th["th_ten"] ?></option>
                            <?php } ?> 
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
                            <textarea name="motasp" rows="7"></textarea>
                        </div>
                        <div class="form-items">
                            <label class="label">Tồn kho</label><br>
                            <select name="tonkho">
                        <option>Chọn</option>
                            <option value="0">Còn hàng</option>
                            <option value="1">Hết hàng</option>
                        </select>
                        </div>
                        <div class="form-items">
                            <label class="label">Nổi bật</label><br>
                            <select name="noibat">
                        <option>Chọn</option>
                            <option value="0">Có</option>
                            <option value="1">Không</option>
                        </select>
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-button">
                <button id="submit" type="submit" class="btn btn-primary" name="themsp">Thêm sản phẩm</button>
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