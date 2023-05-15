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
    <?php
    $data["themnv"];
?>
        <button class="btn-them1" type="button"><a href="./XemTaikhoanKH">Danh sách khách hàng</a></button>

        <div class="container mt-5">
            <h2 class="form-danhmuc">THÊM NHÂN VIÊN</h2>
            <form class="form-content" method="POST">
                <div class="form-items">
                    <div class="col">
                        <div class="row">
                            <div class="col-6">
                                <input class="form-control" type="text" name="tennv" placeholder="Nhập họ tên" required>
                                <input class="form-control" type="text" name="taikhoannv" placeholder="Nhập tài khoản " required>
                                <input class="form-control" type="date" name="ngaysinhnv" placeholder="Nhập ngày sinh" required>
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="email" name="emailnv" placeholder="Nhập email" required>
                                <input class="form-control" type="tel" name="telnv" placeholder="Nhập phone" required>
                                <input class="form-control" type="password" name="passnv" placeholder="Nhập mật khẩu" required>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="form-button">
                    <button id="submit" type="submit" class="btn-them" name="themnv">Thêm nhân viên</button>
                </div>
            </form>

        </div>
        <div class="container mt-6">
            <h2 class="form-table-danhmuc">DANH SÁCH NHÂN VIÊN</h2>
            <table class="table table">
                <tr class="tr-head">
                    <th id="stt">ID</th>
                    <th id="ten">Họ tên</th>
                    <th id="date">Ngày sinh</th>
                    <th id="mail">Email</th>
                    <th id="phone">Phone</th>
                    <th>Tài khoản</th>
                </tr>
                <?php
                foreach($data["tknv"] as $tk){
                ?>
                    <tr class="tr-body">

                        <td>
                            <p>
                                <?php echo $tk["nv_id"] ?>
                            </p>
                        </td>
                        <td>
                            <p>
                                <?php echo $tk["nv_ten"] ?>
                            </p>
                        </td>
                        <td>
                            <p>
                                <?php echo $tk["nv_ngaysinh"] ?>
                            </p>
                        </td>
                        <td>
                            <p>
                                <?php echo $tk["nv_email"] ?>
                            </p>
                        </td>
                        <td>
                            <p>
                                <?php echo $tk["nv_phone"] ?>
                            </p>
                        </td>
                        <td>
                            <p>
                                <?php echo $tk["tk"] ?>
                            </p>
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
    
    .mt-6 {
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
    
    .tr-head #date {
        width: 13%;
    }
    
    .tr-head #phone {
        width: 22%;
    }
    
    .tr-head #ten,
    .tr-head #mail {
        width: 25%;
    }
    
    .tr-head {
        max-width: 100%;
    }
    
    .tr-head #stt {
        width: 1%;
    }
    
    .tr-head th {
        width: 49.5%;
        color: white;
        background-color: rgb(70, 70, 70);
        text-align: center;
        border: 1px solid rgb(136, 117, 117);
    }
    
    .tr-body td {
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
    
    .btn-them1 {
        margin-top: 20px;
        border: none;
        box-shadow: 0 2px 4px 0 rgb(126, 116, 116);
        background-color: rgb(255, 253, 248);
        text-decoration: none;
        border-radius: 5px;
        padding: 10px 20px;
        transition: .3s;
    }
    
    .btn-them1:hover {
        background-color: rgb(102, 102, 255);
        box-shadow: 0 4px 8px 0 rgb(126, 116, 116);
    }
    
    .btn-them1 a {
        color: rgb(24, 23, 23);
        text-decoration: none;
        font-weight: bolder;
    }
    
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
    
    .form-button {
        padding: 20px 0;
    }
    
    .label {
        margin-left: 8px;
        font-size: 18px;
        font-weight: bolder;
    }
    
    .form-control {
        margin-top: 10px;
        width: 100%;
        background-color: white;
        transition: .3s;
    }
    
    select {
        border-radius: 5px;
        padding: 6px 0;
        border: 1px solid gainsboro;
        width: 100%;
        background-color: white;
        transition: .3s;
    }
    
    .btn-them {
        margin-left: 10px;
        color: white;
        margin-top: 20px;
        border: none;
        box-shadow: 0 2px 4px 0 rgb(126, 116, 116);
        background-color: orange;
        text-decoration: none;
        border-radius: 5px;
        padding: 10px 30px;
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