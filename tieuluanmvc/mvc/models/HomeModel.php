<?php

class HomeModel extends DB
{
    //Lấy thông tin danh mục
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
    public function Noibat1(){
        $sql = "SELECT * FROM sanpham WHERE nhom_id = 1 AND  noibat = 1 LIMIT 3";
        $rs = mysqli_query($this->con, $sql);
        return $rs;
    }
    public function Noibat2(){
        $sql = "SELECT * FROM sanpham WHERE nhom_id = 11 AND  noibat = 1 LIMIT 3";
        $rs = mysqli_query($this->con, $sql);
        return $rs;
    }
    public function Noibat3(){
        $sql = "SELECT * FROM sanpham WHERE nhom_id = 12 AND  noibat = 1 LIMIT 3";
        $rs = mysqli_query($this->con, $sql);
        return $rs;
    }
    public function Noibat4(){
        $sql = "SELECT * FROM sanpham WHERE nhom_id = 15 AND  noibat = 1 LIMIT 3";
        $rs = mysqli_query($this->con, $sql);
        return $rs;
    }
    
    //Đăng ký
    public function Dangky($username, $email, $tel, $pass, $repass)
    {
        if (isset($_POST["Signup"])) {
            
            if (!$username || !$email || !$tel || !$pass || !$repass) {
                echo '<script language="javascript">alert("Thông tin chưa đầy đủ!"); window.history.back(-1);</script>';
                exit;
            }

            if (mysqli_num_rows(mysqli_query($this->con, "SELECT taikhoan FROM taikhoan WHERE taikhoan='$username'")) > 0) {
                echo '<script language="javascript">alert("Tài khoản đã tồn tại!"); window.history.back(-1);</script>';
                exit;
            }

            if ($pass != $repass) {
                echo '<script language="javascript">alert("Mật khẩu không trùng khớp!"); window.history.back(-1);</script>';
                exit;
            }

            if (preg_match('/^0(1\d{9}|9\d{8})$/', $tel)) {
                echo '<script language="javascript">alert("Số điện thoại không hợp lệ!");  window.history.back(-1)</script>';
                exit;
            }
            if (mysqli_query($this->con, "INSERT INTO `taikhoan`(`taikhoan`, `matkhau`) VALUES ('$username','$pass')")) {
                mysqli_query($this->con, "INSERT INTO `user`(`u_email`, `u_phone`, `tk` ) VALUES ('$email','$tel','$username')");
                echo '<script language="javascript">alert("Đăng ký thành công!");  window.history.back(-1);</script>';
            }
            else {
                echo '<script language="javascript">alert("Đăng ký thất bại!");  window.history.back(-1);</script>';

            }

        }
    }

    //Đăng nhập
    public function Dangnhap($username, $password)
    {
        session_start();
        if (isset($_POST["Signin"])) 
    {
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
        echo '<script language="javascript">alert("Vui lòng nhập đủ thông tin!");  window.history.back(-1);</script>';
        exit;
    }
     
    // mã hóa pasword
    $password = md5($password);
     
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($this->con,"SELECT taikhoan, matkhau, quyen FROM taikhoan WHERE taikhoan= '$username'");
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
        header('Location:../');
    }
    
        $_SESSION['username'] = $row[0];
        $_SESSION['quyen'] = $row[2];
        
    }
    }

    //Đăng xuất
    public function Dangxuat(){
        session_destroy();
        echo '<script language="javascript">alert("Đã đăng xuất tài khoản !"); window.location="/tieuluanmvc/Main";</script>';
        exit;
}

    //Lấy thông tin tài khoản
    public function GetProfile($id){
        if(isset($id)){
        $sql = "SELECT * FROM user WHERE tk = '$id'";
        $result = mysqli_query($this->con, $sql) or die("Lỗi truy vấn");
        return $result;
        }
    }
    public function UpdataProfile($id,$hoten,$ngaysinh,$email,$phone,$tinh,$huyen,$xa,$duong){
        if(isset($_POST['update']) && isset($id)){
            $sql = "UPDATE `user` SET `u_ten`='$hoten',`u_ngaysinh`='$ngaysinh',`u_email`='$email',`u_phone`='$phone',`tinh`='$tinh',`huyen`='$huyen',`xa`='$xa',`duong`='$duong' WHERE `tk`='$id'";
            if(mysqli_query($this->con,$sql)){
                echo '<script language="javascript">alert("Cập nhật thông tin thành công!"); window.history.back();</script>';
            }else{
                echo '<script language="javascript">alert("Cập nhật thông tin thất bại!"); window.history.back();</script>';
            }
        }
    }
    public function ChangePass($newPass,$renewPass, $id, $Pass){
        if(isset($_POST['doimk'])){
            $newPass = md5($_POST['mk_moi']);
            $renewPass = md5($_POST['re_mk_moi']);
            $Pass = md5($_POST['mk_cu']);
            if($newPass == $renewPass){
                $sql = "UPDATE taikhoan SET matkhau = '$newPass' WHERE taikhoan = '$id' AND matkhau = '$Pass'";
                if (mysqli_query($this->con,$sql)) {
            echo '<script language="javascript">alert("Đổi mật khẩu thành công!"); window.history.back();</script>';
            }else{
            echo "Cập nhật thất bại";
            }
            }
        }
            
        
    }
    

    // public funtion ChangePass()
    
}

?>