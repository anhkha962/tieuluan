<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>


<body>
<button class="btn-them" type="button"><a href="./ThemSanpham">Thêm sản phẩm</a></button>
    <div class="container mt-3">
        <h2 class="form-table-danhmuc">DANH SÁCH SẢN PHẨM</h2>
        <table class="table table">

            <tr class="tr-head">
                <th id="id">ID</th>
                <th id="th-3">Tên sản phẩm</th>
                <th id="th-2">Nhóm</th>
                <th id="th-3">Giá</th>
                <th id="th-3">Hình</th>
                <th>Mô tả</th>
                <th id="th-2">Tồn kho</th>
                <th id="th-2">Nổi bật</th>
                <th id="th-2">Thương hiệu</th>
                <th id="th-3">Tùy chỉnh</th>
            </tr>
            <?php
            foreach($data["sanpham"] as $dm){
                ?>
                <tr class="tr-body">
                    <td>
                        <p>
                            <?php echo $dm["sp_id"] ?>
                        </p>
                    </td>
                    <td>
                        <p>
                            <?php echo $dm["sp_ten"] ?>
                        </p>
                    </td>
                    <td>
                        <p>
                            <?php echo $dm["nhom_id"] ?>
                        </p>
                    </td>
                    <td>
                        <p>
                            <?php echo $dm["sp_gia"] ?>
                        </p>
                    </td>
                    <td>
                        <img src="<?php echo $dm["sp_hinh"] ?>" alt="" srcset="" style="max-width: 300px;">
                        
                    </td>
                    <td>
                        <p>
                            <?php echo $dm["sp_mota"] ?>
                        </p>
                    </td>
                    <td>
                        <p>
                            <?php if($dm["sp_trangthai"] == 0){
                        echo "Còn hàng";
                    }else{
                        echo "Hết hàng";
                    } ?>
                        </p>
                    </td>
                    <td>
                        <p>
                            <?php if($dm["noibat"] == 0){
                        echo "Không";
                    }else{
                        echo "Có";
                    } ?>
                        </p>
                    </td>
                    <td>
                        <p>
                            <?php echo $dm["thuonghieu"] ?>
                        </p>
                    </td>
                    <td id="td-ct">
                        <a href="./SuaSanpham&id=<?php echo $dm["sp_id"]?>">
                            <i class='bx bx-edit icon'></i>Sửa</a>
                        <a href="./XoaSanpham&id=<?php echo $dm["sp_id"]?>" name="xoasp">
                            <i class='bx bxs-trash-alt icon'></i> Xóa
                        </a>
                    </td>

                </tr>
                <?php } ?>

        </table>
        
    </div>

</body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Play&display=swap');    body {
font-family: 'Play', sans-serif;        margin-top: 30px;
    }
    
    .mt-3 {
        margin-top: 30px;
        max-width: 100%;
    }
    
    .form-table-danhmuc {
        font-weight: bolder;
        padding: 30px 0px;
        text-align: center;
    }
    
    .table {
        box-shadow: 0 4px 8px 0 rgb(126, 116, 116);
        font-size: 20px;
    }
    
    .tr-head {
        max-width: 100%;
    }
    
    .tr-head #id {
        width: 1%;
    }
    
    .tr-head #th-2 {
        width: 4%;
    }
    
    .tr-head #th-3 {
        width: 14%;
    }
    
    .tr-head th {
        color: white;
        background-color: rgb(70, 70, 70);
        text-align: center;
        border: 1px solid rgb(136, 117, 117);
    }
    
    .tr-body td {
        min-height: 10px;
        background-color: aliceblue;
        border: 1px solid rgb(136, 117, 117);
    }
    
    .tr-body #td-ct {
        text-align: center;
    }
    
    .tr-body #td-ct a {
        font-size: 18px;
        margin: 3px;
        border-radius: 5px;
        padding: 5px 10px;
        text-decoration: none;
        color: rgb(255, 255, 255);
        background-color: orange;
        transition: .3s;
    }
    
    .tr-body #td-ct a:hover {
        box-shadow: 0 4px 8px 0 rgb(126, 116, 116);
        background-color: rgb(102, 102, 255);
    }
    
    .tr-body #td-ct i {
        text-align: center;
        font-size: 20px;
        padding: 10px 5px;
    }
    
    .btn-them {
        margin-top: 20px;
        border: none;
        box-shadow: 0 2px 4px 0 rgb(126, 116, 116);
        background-color: orange;
        text-decoration: none;
        border-radius: 5px;
        padding: 10px 20px;
        transition: .3s;
    }
    
    .btn-them:hover {
        background-color: rgb(102, 102, 255);
        box-shadow: 0 4px 8px 0 rgb(126, 116, 116);
    }
    
    .btn-them a {
        color: white;
        text-decoration: none;
        font-weight: bolder;
    }
</style>

</html>