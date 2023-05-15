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

    <div class="container mt-3">
        <button class="btn-them" type="button"><a href="./XemTaikhoanNV">Danh sách nhân viên</a></button>
        <h2 class="form-table-danhmuc">DANH SÁCH KHÁCH HÀNG</h2>
        <table class="table table">
            <tr class="tr-head">
                <th id="stt">ID</th>
                <th id="ten">Họ tên</th>
                <th id="date">Ngày sinh</th>
                <th id="mail">Email</th>
                <th id="phone">Phone</th>
                <th id="diachi">Địa chỉ</th>
                <th>Tài khoản</th>
            </tr>
            <?php
                foreach($data["tkkh"] as $tk){
                ?>
                <tr class="tr-body">

                    <td>
                        <p>
                            <?php echo $tk["u_id"] ?>
                        </p>
                    </td>
                    <td>
                        <p>
                            <?php echo $tk["u_ten"] ?>
                        </p>
                    </td>
                    <td>
                        <p>
                            <?php echo $tk["u_ngaysinh"] ?>
                        </p>
                    </td>
                    <td>
                        <p>
                            <?php echo $tk["u_email"] ?>
                        </p>
                    </td>
                    <td>
                        <p>
                            <?php echo $tk["u_phone"] ?>
                        </p>
                    </td>
                    <td>
                        <p>
                            <?php echo $tk["u_diachi"] ?>
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
    
    .tr-head #date,
    .tr-head #phone {
        width: 8%;
    }
    
    .tr-head #ten,
    .tr-head #mail {
        width: 22%;
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
    
    .btn-them {
        margin-top: 20px;
        border: none;
        box-shadow: 0 2px 4px 0 rgb(126, 116, 116);
        background-color: rgb(255, 253, 248);
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
        color: rgb(24, 23, 23);
        text-decoration: none;
        font-weight: bolder;
    }
</style>
</html>