<style>
    .formhd {
        box-shadow: 0 4px 8px 0 gray;
        color: aliceblue;
        border-radius: 15px;
        margin: 35px 0;
        padding: 20px;
        width: 40%;
        background-color: orange;
        position: relative;
        left: 40%;
        transform: translateX(-20%)
    }
    
    .formhd h3 {
        text-align: center;
        font-weight: 900;
        font-size: 30px;
    }
    
    .formhd p {
        margin-left: 10%;
        font-size: 19px;
    }
    
    .formhd table {
        color:black;
        background-color: whitesmoke;
        margin-left: 4%;
        width: 94%;
    }
    
    .formhd table thead {
        text-align: center;
        width: 100%;
        border: 1px solid rgb(0, 0, 0);
    }
    
    .formhd table td {
        font-size: 19px;
        font-weight: 500;
    }
    
    .formhd table tr {
        font-size: 15px;
        font-weight: 900;
    }
    
    .formhd table tbody {
        width: 100%;
        border: 1px solid rgb(0, 0, 0);
    }
    
    .formhd a {
        color: black;
    }
    
    .formhd a:hover {
        color: orange;
    }
    .hoadon{
        padding: 10px 0px;
        border-radius: 4px;
        margin-left: 10%;
        width: 80%;
        background-color: white;
        color: black;
    }
    h2{
        border-radius: 10px;
        padding:20px 0;
        color: white;
        text-align: center;
        width: 40%;
        background-color: green;
        margin-top: 40px;
        margin-left: 32%;
    }
    h2 i{
        margin-top:20px
        font-size: 40px;
        margin-right: 20px;
    }
</style>

<section>
    <h2><i class='bx bx-check-circle'></i>Đặt hàng thành công</h2>
    <form class="formhd">
        <h3>Thông tin hóa đơn</h3>
        <?php $row = mysqli_fetch_array($data['hoadon'])?>
        <br><div class="hoadon">
        <p>Họ tên:
            <?=$row['tenkh']?>
        </p>
        <p>Số điện thoại:
            <?=$row['phone']?>
        </p>
        <p>Địa chỉ:
            <?=$row['diachi']?>
        </p>
        <p>Email:
            <?=$row['email']?>
        </p>
        <p>Tổng tiền:
            <?=number_format($row['tongtien'])?> VNĐ
        </p>
        <p>Thời gian:
            <?=$row['ngaylap']?>
        </p></div>
        <hr>
        <p style="margin-left:35%; font-size:20px">DANH SÁCH SẢN PHẨM</p>
        

        <table>
            <thead>
                <td>Tên sản phẩm</td>
                <td>Đơn giá</td>
                <td>Số lượng</td>
                <td>Tổng</td>
            </thead><?php foreach($data['chitiethd'] as $item){ ?>
            <tbody>
                <tr>
                    <td style="text-align: center;">
                        <a href="/tieuluanmvc/home/DetailProduct&id=<?=$item[" sp_id "]?>">
                            <?=$item["sp_ten"]?>
                        </a>
                    </td>
                    <td style="text-align: center;">
                        <?=$item["dongia"]?>
                    </td>
                    <td style="text-align: center;">
                        <?=$item["soluong"]?>
                    </td>
                    <td style="text-align: center;">
                        <?=$item["dongia"]*$item["soluong"]?>
                    </td>
                </tr>
            </tbody><?php };?>
        </table>
    </form>
    
</section>