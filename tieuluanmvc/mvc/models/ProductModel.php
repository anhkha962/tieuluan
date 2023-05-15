<?php 

class ProductModel extends DB{
    public function GetSanpham(){
        $sql = "SELECT * FROM sanpham";
        $result = mysqli_query($this->con, $sql) or die("Lỗi truy vấn");
        return $result;
    }
    public function GetCTSanpham($id){
        $sql = "SELECT * FROM sanpham WHERE sp_id = $id";
        $result = mysqli_query($this->con, $sql) or die("Lỗi truy vấn");
        return $result;
    }
    public function GetDanhmuc()
    {
        $sql = "SELECT * FROM nhomsanpham";
        $result = mysqli_query($this->con, $sql) or die("Lỗi truy vấn");
        return $result;
    }

    public function GetThuonghieu()
    {
        $sql = "SELECT * FROM thuonghieu";
        $result = mysqli_query($this->con, $sql) or die("Lỗi truy vấn");
        return $result;
    }
    public function LocDanhmuc($id, $start, $limit){
        $sql = "SELECT * FROM sanpham WHERE nhom_id = $id LIMIT $start, $limit";
        $result = mysqli_query($this->con, $sql) or die("Lỗi truy vấn");
        return $result;

    }
    public function LocThuonghieu($th, $start, $limit){
        $sql = "SELECT * FROM sanpham WHERE thuonghieu = $th LIMIT $start, $limit";
        $result = mysqli_query($this->con, $sql) or die("Lỗi truy vấn");
        return $result;

    }
    public function Giohang($tk){
        if(isset($_SESSION['username'])){
            $tk = $_SESSION['username'];
            $sql ="SELECT * FROM giohang WHERE taikhoan = '$tk' or taikhoan = 'khach'";
            $result = mysqli_query($this->con, $sql) or die("Lỗi truy vấn");
            return $result;
        }else{
            if(isset($_SESSION['cart'])){
                return $_SESSION['cart'];
            }else{
                return null;
            }
        }
        

    }
    public function Chiso(){
        if(isset($_SESSION['username'])){
            $tk = $_SESSION['username'];
            $sql = "SELECT SUM(soluong) AS total FROM giohang WHERE taikhoan = '$tk'";
        $rs = mysqli_query($this->con, $sql);
        return $rs;
        }else{
            $chiso = 0;
            if(isset($_SESSION['cart'])){
            foreach($_SESSION['cart'] as $item){
                $chiso += $item['soluong'];
            }
            return $chiso;
        }
    }
        
        
    }
    
    public function AddGiohang($id, $soluong){
        if(isset($_SESSION['username'])){
            $tk = $_SESSION['username'];
            $sqlcheck="SELECT * FROM giohang WHERE sp_id = $id AND taikhoan = '$tk'";
            $resultcheck = mysqli_query($this->con, $sqlcheck);
            if(mysqli_fetch_row($resultcheck)>0){
                $sql = "UPDATE `giohang` 
                        SET `soluong`= `soluong` + 1, `tongtien` = `soluong` * `sp_gia` 
                        WHERE `sp_id`= $id AND taikhoan = '$tk'";
                    $result = mysqli_query($this->con, $sql) or die("Lỗi Truy vấn");
            }else{
                mysqli_query($this->con, "INSERT INTO giohang(sp_ten, sp_hinh, sp_id, sp_gia, taikhoan, tongtien) 
                                          SELECT  a.sp_ten, a.sp_hinh, a.sp_id, a.sp_gia, b.taikhoan, a.sp_gia
                                          FROM sanpham as a, taikhoan as b
                                          WHERE a.sp_id= $id and b.taikhoan = '$tk'");
            }
        }elseif($id = $_GET['id']){
            $query = mysqli_query($this->con,"SELECT * FROM sanpham WHERE sp_id=$id");
            $row=mysqli_fetch_array($query);
            if(isset($_SESSION['cart'][$id])){
                $_SESSION['cart'][$id]['soluong'] += $soluong;
            }else{
                $item = [
                    'sp_id' => $row['sp_id'],
                    'sp_hinh' => $row['sp_hinh'],
                    'sp_ten' => $row['sp_ten'],
                    'sp_gia' => $row['sp_gia'],
                    'soluong' => $soluong,
                ];
                $_SESSION['cart'][$id] = $item;
            }
        }
    }
    public function DelGiohang($id){
        if(isset($_SESSION['username'])){
            $tk = $_SESSION['username'];
            $sql = "DELETE FROM giohang WHERE sp_id= $id AND `taikhoan` = '$tk'";
            $result = mysqli_query($this->con, $sql) or die("Lỗi truy vấn");
            return $result;
        }else{
            unset($_SESSION['cart'][$id]);
        }
        
        
    }
    public function SoluongTang($id){
        if(isset($_SESSION['username'])){
            $tk = $_SESSION['username'];
            $sql = "UPDATE `giohang` SET `soluong`= `soluong` + 1, `tongtien` = `soluong` * `sp_gia` WHERE `sp_id`= $id AND `taikhoan` = '$tk'";
            mysqli_query($this->con, $sql);
        }else{
            if(isset($_SESSION['cart'])){
                $_SESSION['cart'][$id]['soluong']+=1;
            }
        }
    }
    public function SoluongGiam($id){
        if(isset($_SESSION['username'])){
            $tk = $_SESSION['username'];
            $sqlcheck = "SELECT soluong FROM giohang WHERE sp_id = $id AND taikhoan = '$tk'";
            $rs = mysqli_query($this->con, $sqlcheck);
            $row = mysqli_fetch_array($rs);
            if($row['soluong'] == 1 ){
                mysqli_query($this->con, "DELETE FROM giohang WHERE sp_id = $id AND taikhoan = '$tk'");
            }else{
                $sql = "UPDATE `giohang` SET `soluong`= `soluong` -1, `tongtien` = `soluong` * `sp_gia` 
                WHERE `sp_id`= $id AND `taikhoan` = '$tk'";
                mysqli_query($this->con, $sql);
            }
            

        }else{
            if(isset($_SESSION['cart'])){
                echo 
                $_SESSION['cart'][$id]['soluong']-=1;
            }
            if($_SESSION['cart'][$id]['soluong']<1){
                
                unset($_SESSION['cart'][$id]);
            }
        }
        
        
        
    }
    public function Tongtien(){
        if(isset($_SESSION['username'])){
            $tk = $_SESSION['username'];
            $sql = "SELECT SUM(tongtien) AS total FROM giohang WHERE taikhoan = '$tk'";
            $tongtien = mysqli_query($this->con, $sql);
            return $tongtien;
        }else{
            $tongtien = 0;
            if(isset($_SESSION['cart'])){
            foreach($_SESSION['cart'] as $item){
                $tongtien += $item['sp_gia'] * $item['soluong'];
             }
            }
        return $tongtien;
        }
        
    }

    public function Timkiem($key){
        $sql = "SELECT * FROM sanpham WHERE sp_ten LIKE '%$key%' ";
        $rs = mysqli_query($this->con, $sql);
        return $rs;
    }
    public function Spmoi(){
        $sql = "SELECT * FROM sanpham ORDER BY cr_time DESC LIMIT 4";
        $rs = mysqli_query($this->con, $sql);
        return $rs;
    }
    public function AddHoaDon($tongtien,$hoten,$sdt,$diachi1,$diachi2,$diachi3,$diachi4,$email,$payment_method){
        
        if(isset($_SESSION['username'])){
           $tk =$_SESSION['username']; 
           $ngaylap = date('Y-m-d H:i:s');
            $u_id = mysqli_query($this->con,"SELECT u_id FROM user WHERE tk = '$tk'");
            $ar=mysqli_fetch_array($u_id);
                $ru_id = $ar['u_id'];
            $sql = "INSERT INTO hoadon(ngaylap, tongtien, tinhtrang, thanhtoan, tenkh, diachi, phone, email, u_id)
                VALUES ('$ngaylap','$tongtien','Chờ xử lý','tiền mặt','$hoten','$diachi4-$diachi3-$diachi2-$diachi1','$sdt','$email', $ru_id)";
            // echo $sql;
            // die();
            if(mysqli_query($this->con, $sql)){
            $hd_id = $this->con->insert_id;
            } 
            $giohang = $this-> Giohang($tk);
            foreach($giohang as $item){
                $sp_id = $item["sp_id"];
                $soluong = $item["soluong"];
                $sp_gia = $item["sp_gia"];
                $sql = "INSERT INTO chitiethd(hd_id, sp_id, soluong, dongia) VALUES ('$hd_id','$sp_id','$soluong','$sp_gia')";
                mysqli_query($this->con, $sql);
            }
        }
        elseif(isset($_SESSION['cart'])){
            
            $ngaylap = date('Y-m-d H:i:s');
             
             $sql = "INSERT INTO hoadon(ngaylap, tongtien, tinhtrang, thanhtoan, tenkh, diachi, phone, email)
                 VALUES ('$ngaylap','$tongtien','Chờ xử lý','$payment_method','$hoten','$diachi4-$diachi3-$diachi2-$diachi1','$sdt','$email')";
             if(mysqli_query($this->con, $sql)){
             $hd_id = $this->con->insert_id;
             }
             $tk='NULL';
             $giohang = $this-> Giohang($tk);
             foreach($giohang as $item){
                $sp_id = $item["sp_id"];
                $soluong = $item["soluong"];
                $sp_gia = $item["sp_gia"];
                $sql = "INSERT INTO chitiethd(hd_id, sp_id, soluong, dongia) VALUES ('$hd_id','$sp_id','$soluong','$sp_gia')";
                mysqli_query($this->con, $sql);
            }
         }
         
         echo '<script language="javascript">alert("Đặt hàng thành công!"); location.href = "/tieuluanmvc/home/hoadon&hd_id='.$hd_id.'";</script>';
    }
    public function HoaDon($hd_id){
        $sql = "SELECT * FROM hoadon WHERE hd_id='$hd_id'";
        $result = mysqli_query($this->con, $sql) or die("Lỗi truy vấn");
        return $result;
    }
    
    public function HoaDonTK($id){
        $sql = "SELECT * FROM hoadon WHERE u_id = (SELECT u_id FROM user WHERE tk = '$id')";
        $result = mysqli_query($this->con, $sql) or die("Lỗi truy vấn");
        return $result;
    }
    public function ChiTietHoaDon($hd_id){
        $sql = "SELECT * FROM chitiethd as cthd, sanpham as sp WHERE cthd.hd_id='$hd_id' AND cthd.sp_id=sp.sp_id";
        $result = mysqli_query($this->con, $sql) or die("Lỗi truy vấn");
        return $result;
    }
    public function Phantrang($limit){
        $sql = mysqli_query($this->con,"SELECT * FROM `sanpham`");
        $total = mysqli_num_rows($sql);
        $page = ceil($total/$limit);
        return $page;
    }
    public function PhantrangDM($limit, $id){
        $sql = mysqli_query($this->con,"SELECT * FROM `sanpham` WHERE nhom_id = $id");
        $total = mysqli_num_rows($sql);
        $page = ceil($total/$limit);
        return $page;
    }
    public function PhantrangTH($limit, $th){
        $sql = mysqli_query($this->con,"SELECT * FROM `sanpham` WHERE thuonghieu = $th");
        $total = mysqli_num_rows($sql);
        $page = ceil($total/$limit);
        return $page;
    }
    public function Phansanpham($start, $limit){
        $sql ="SELECT * FROM `sanpham` LIMIT $start,$limit";
        $rs = mysqli_query($this->con,"SELECT * FROM `sanpham` LIMIT $start,$limit");
        return $rs;
    }
    public function Giamgia($code){
        if(isset($_POST['giamgia'])){
            $code = $_POST['code'];
        $sql = "SELECT giamgia FROM `giamgia` WHERE code = '$code'";
        $result = mysqli_query($this->con, $sql);
        }
        return $result;
        
    }
    public function TaoGiamgia($tengg, $giatri,$id){
        if(isset($_POST['themgg'])){
        
            $sql = "INSERT INTO `giamgia`(`code`, `giamgia`) VALUES ('$tengg','$giatri')";
           mysqli_query($this->con, $sql);
        }
        elseif(isset($id))
        {
            $sql = "DELETE FROM `giamgia` WHERE `giam_id` = '$id'";
           mysqli_query($this->con, $sql);
        }
    }
    public function XemGiamgia(){
        
        $sql = "SELECT * FROM `giamgia`";
        $result = mysqli_query($this->con, $sql);
        return $result;
        
    }
    public function LocGiatien($start, $stop){
        $start = $_GET['start'];
        $stop = $_GET['stop'];
        $sql = "SELECT * FROM sanpham WHERE sp_gia > $start AND sp_gia < $stop";
        $result = mysqli_query($this->con, $sql);
        return $result;
    }
    public function PhantrangGia($start, $stop, $limit){
        
        $sql = mysqli_query($this->con,"SELECT * FROM `sanpham` WHERE sp_gia > $start AND sp_gia < $stop");
        $total = mysqli_num_rows($sql);
        $page = ceil($total/$limit);
        return $page;
    }
    public function ThongtinKH(){
        $tk = $_SESSION['username'];
        if(isset($tk)){
            $sql = "SELECT * FROM user WHERE tk = '$tk'";
            $result = mysqli_query($this->con, $sql);
            return $result;
        }
    }
}

?>