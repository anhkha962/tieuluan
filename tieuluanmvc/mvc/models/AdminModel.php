<?php
class AdminModel extends DB
{

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
    
    public function AddDanhmuc($nhom_ten)
    {
        if ( isset($_POST["themdm"]) ){
        $sql = "INSERT INTO nhomsanpham(`nhom_ten`) VALUES ('$nhom_ten')";
        if(mysqli_query($this->con, $sql)){
            echo'<script language="javascript">alert("Thêm danh mục thành công!"); window.location="./XemDanhmuc";</script>';
        }else{
            echo'<script language="javascript">alert("Thêm danh mục thất bại!"); window.location="./XemDanhmuc";</script>';
        }
    }

    } 
    public function DelDanhmuc($id){
        if(isset($_GET['id'])){
            $sqlDel = "DELETE FROM nhomsanpham WHERE nhom_id =".$_GET['id']."";
            mysqli_query($this->con, $sqlDel);
            if(mysqli_query($this->con, $sqlDel)){
                echo'<script language="javascript">alert("Xóa danh mục thành công!"); window.location="./XemDanhmuc";</script>';
            }else{
                echo'<script language="javascript">alert("Xóa danh mục thất bại!");alert("Có sản phẩm đang thuộc danh mục này!"); window.location="./XemDanhmuc";</script>';
            }
        }
        

    }
    public function NameDanhmuc($id){
        if(isset($_GET['id'])){
            $sql = "SELECT nhom_ten FROM nhomsanpham WHERE nhom_id = '$id'";
            $kq = mysqli_query($this->con, $sql) or die("Lỗi");
            return $kq;
        }
    }
    public function UpdateDanhmuc($id,$nhom_ten)
    {
        if ( isset($_POST["themdm"]) && isset($_GET['id'])){
        $sql = "UPDATE `nhomsanpham` SET `nhom_ten`='$nhom_ten' WHERE `nhom_id`=".$_GET['id']."";
        $query = mysqli_query($this->con, $sql) or die("Lỗi");   
        echo '<script language="javascript">alert("Thêm danh mục thành công !"); window.location="./XemDanhmuc";</script>';   
        }

    } 
    public function AddThuonghieu($th_ten)
    {
        if ( isset($_POST["themth"]) ){
        $th_ten = $_POST["tenth"];
        $sql = "INSERT INTO thuonghieu(`th_ten`) VALUES ('$th_ten')";
        mysqli_query($this->con, $sql) or die("Lỗi");        
        header('Location: ./XemThuonghieu');   
        }

    } 
    public function NameThuonghieu($id){
        if(isset($_GET['id'])){
            $sql = "SELECT th_ten FROM thuonghieu WHERE th_id = '$id'";
            $kq = mysqli_query($this->con, $sql) or die("Lỗi");
            return $kq;
        }
    }
    public function UpdateThuonghieu($id,$th_ten)
    {
        if ( isset($_POST["themth"]) && isset($_GET['id'])){
        $th_ten = $_POST["tenth"];
        $sql = "UPDATE `thuonghieu` SET `th_ten`='$th_ten' WHERE `th_id`=".$_GET['id']."";
        mysqli_query($this->con, $sql) or die("Lỗi");        
        header('Location: ./XemThuonghieu');   
        }

    } 
    public function DelThuonghieu($id){
        if(isset($_GET['id'])){
            $sqlDel = "DELETE FROM thuonghieu WHERE th_id =".$_GET['id']."";
            echo $sqlDel;
            mysqli_query($this->con, $sqlDel);
            header('Location: ./XemThuonghieu');   
        }

    }
    public function GetTaikhoanKH(){
        $sql = "SELECT * FROM user";
        $result = mysqli_query($this->con, $sql) or die("Lỗi truy vấn");
        return $result;
    }
    public function GetTaikhoanNV(){
        $sql = "SELECT * FROM nhanvien";
        $result = mysqli_query($this->con, $sql) or die("Lỗi truy vấn");
        return $result;
    }
    public function AddSanpham($tensp,$giasp,$tendm,$tenth,$tonkho,$noibat,$mota,$ha1)
    {
        $path = "/tieuluanmvc/mvc/public/product/";
        
            
        if(isset($_POST["themsp"])){
            
            $sql = "INSERT INTO `sanpham`(`sp_ten`, `nhom_id`, `sp_gia`, `sp_hinh`, `sp_mota`, `sp_trangthai`, `noibat`, `thuonghieu`)
             VALUES ('$tensp','$tendm','$giasp','$path$ha1','$mota','$tonkho','$noibat','$tenth')";
            if(mysqli_query($this->con,$sql)){
                echo'<script language="javascript">alert("Thêm sản phẩm thành công!"); window.location="./XemSanpham";</script>';
            }
            else{
                // echo $sql;
                echo '<script language="javascript">alert("Thêm sản phẩm không thành công!"); window.location="./XemSanpham";</script>';
            }
        }

    }
    public function DelSanpham($id){
        if(isset($_GET['id'])){
            $sqlDel = "DELETE FROM sanpham WHERE sp_id =".$_GET['id']."";
            mysqli_query($this->con, $sqlDel);
            header('Location: ./XemSanpham');   
        }
    }
    public function InfSanpham($id){
        if(isset($_GET['id'])){
            $sqlDel = "SELECT * FROM sanpham WHERE sp_id = $id";
            $kq = mysqli_query($this->con, $sqlDel);
            return $kq;
        }
    }

    public function UpdateSanpham($id,$tensp,$giasp,$tendm,$tenth,$tonkho,$noibat,$mota,$ha1){
        $path = "/tieuluanmvc/mvc/public/product/";
        if(isset($_POST['suasp'])){
            $idsp =  $_POST["id"];
            $tensp = $_POST["tensp"];
            $giasp = $_POST["giasp"];
            $tendm = $_POST["tendm"];
            $tenth = $_POST["tenth"];
            $tonkho = $_POST["tonkho"];
            $noibat = $_POST["noibat"];
            $mota = $_POST["motasp"];
            $ha1 = $_FILES["hinhsp"]["name"]; 
            $sqlDel = "UPDATE `sanpham` SET `sp_ten`='$tensp',`nhom_id`='$tendm',`sp_gia`='$giasp',`sp_hinh`='$path$ha1',`sp_mota`='$mota',`sp_trangthai`='$tonkho',`noibat`='$noibat',`thuonghieu`='$tenth' WHERE sp_id =$idsp";
            if(mysqli_query($this->con,$sqlDel)){
                echo '<script language="javascript">alert("Cập nhật sản phẩm thành công !"); window.location="./XemSanpham";</script>';
            }
            else{
                // echo $sql;
                echo '<script language="javascript">alert("Cập nhật sản phẩm thất bại !"); window.location="./XemSanpham";</script>';
            }
        }
    }
    public function AddNhanvien($name,$username,$date,$email,$tel,$pass){
       
        if(isset($_POST['themnv'])){
            
            $sql1 = "INSERT INTO `taikhoan`(`taikhoan`, `matkhau`, `quyen`) VALUES ('$username','$pass',2)";
            $sql2 ="INSERT INTO `nhanvien`(`nv_ten`, `nv_email`, `nv_ngaysinh`, `nv_phone`, `tk` ) VALUES ('$name','$email','$date','$tel','$username')";

            if (mysqli_num_rows(mysqli_query($this->con, "SELECT taikhoan FROM taikhoan WHERE taikhoan='$username' AND quyen='2'")) > 0) {
                echo '<script language="javascript">alert("Tài khoản đã tồn tại!");window.location="./XemTaikhoanNV";</script>';
            }
            elseif(mysqli_query($this->con,$sql1)){
               mysqli_query($this->con,$sql2);
               echo'<script language="javascript">alert("Thêm nhân viên thành công!"); window.location="./XemTaikhoanNV";</script>';
            }else{
                echo'<script language="javascript">alert("Thêm nhân viên không thành công!"); window.location="./XemTaikhoanNV";</script>';
            }
        }
    }
    public function Dangnhap($username, $password)
    {
        session_start();
        if (isset($_POST["Signin"])) 
    {
    //Lấy dữ liệu nhập vào

     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
        echo '<script language="javascript">alert("Vui lòng nhập đủ thông tin!");  window.history.back(-1);</script>';
        exit;
    }
     
    // mã hóa pasword
    $password = md5($password);
     
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($this->con,"SELECT taikhoan, matkhau FROM taikhoan WHERE taikhoan= '$username' AND quyen = '1' OR quyen = '2'");
    if (mysqli_num_rows($query) == 0) {
        echo '<script language="javascript">alert("Tài khoản không tồn tại");  window.history.back(-1);</script>';
        exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['matkhau']) {
        echo '<script language="javascript">alert("Mật khẩu không đúng!");  window.history.back(-1);</script>';
        exit;
    }else{
        header('location:./Admin');
    }

    //Lưu tên đăng nhập
    $_SESSION['username'] = $username;

    die();
    }
    }
    public function Dangxuat(){
            session_destroy();
            header('location:./Dangnhap');
    }
    public function GetSanpham(){
        $sql = "SELECT * FROM sanpham";
        $result = mysqli_query($this->con, $sql) or die("Lỗi truy vấn");
        return $result;
    }
    public function GetDonhang(){
        $sql = "SELECT * FROM hoadon";
        $result = mysqli_query($this->con, $sql);
        return $result;
    }
    public function GetKH(){
        $sql = "SELECT u_ten FROM user WHERE ";
        $result = mysqli_query($this->con, $sql);
        return $result;
    }
}

?>