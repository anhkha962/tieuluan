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
    public function LocDanhmuc($id){
        $sql = "SELECT * FROM sanpham WHERE nhom_id = $id";
        $result = mysqli_query($this->con, $sql) or die("Lỗi truy vấn");
        return $result;

    }
    public function LocThuonghieu($th){
        $sql = "SELECT * FROM sanpham WHERE thuonghieu = $th";
        $result = mysqli_query($this->con, $sql) or die("Lỗi truy vấn");
        return $result;

    }
    public function Giohang(){
        if(isset($_SESSION['cart'])){
            return $_SESSION['cart'];
        }else{
            return null;
        }
    }
    // public function Giohang($id,$tk){
    //     $sql ="SELECT * FROM giohang WHERE tk_id = '$tk'";
    //     $result = mysqli_query($this->con, $sql) or die("Lỗi truy vấn");
    //     return $result;
    // }
    public function Chiso(){
        $chiso = 0;
        if(isset($_SESSION['cart'])){
            foreach($_SESSION['cart'] as $item){
                $chiso += $item['soluong'];
            }
        }
        return $chiso;
    }
    public function AddGiohang($id,$soluong){
        $query = mysqli_query($this->con,"SELECT * FROM sanpham WHERE sp_id=$id");
        $row=mysqli_fetch_assoc($query);
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
    // public function AddGiohang($id ,$tk ){
    //     $tk = $_GET['tk'];
    //     $sqlcheck="SELECT * FROM giohang WHERE sp_id = $id AND tk_id = '$tk'";
    //     $resultcheck = mysqli_query($this->con, $sqlcheck);
    //     if(mysqli_fetch_row($resultcheck)>0){
    //         $sql = "UPDATE `giohang` SET `soluong`= `soluong` + 1, `tongtien` = `soluong` * `sp_gia` WHERE `sp_id`= $id AND tk_id = '$tk'";
    //             $result = mysqli_query($this->con, $sql) or die("Lỗi Truy vấn");
    //     }
    //     if(mysqli_query($this->con, "INSERT INTO giohang(`sp_ten`, `sp_hinh`,`sp_id`,`sp_gia`) SELECT `sp_ten`,`sp_hinh`,`sp_id`,`sp_gia` FROM sanpham WHERE sp_id= $id") or die("Lỗi truy vấn")){
    //         mysqli_query($this->con, "INSERT INTO giohang(`id_tk`) VALUES ('$tk') WHERE sp_id=$id"); 
    //     }
        
    //     return $result;
    // }
    public function DelGiohang($id){
        unset($_SESSION['cart'][$id]);
    }
    public function SoluongTang($id){
        if(isset($_SESSION['cart'])){
            $_SESSION['cart'][$id]['soluong']+=1;
        }
    }
    public function SoluongGiam($id){
        if(isset($_SESSION['cart'])){
            $_SESSION['cart'][$id]['soluong']-=1;
        }
        if($_SESSION['cart'][$id]['soluong'] < 1){
            unset($_SESSION['cart'][$id]);
        }
    }
    public function TongTien(){
        $tongtien = 0;
        if(isset($_SESSION['cart'])){
            foreach($_SESSION['cart'] as $item){
                $tongtien += $item['sp_gia'] * $item['soluong'];
            }
        }
        return $tongtien;
    }
}

?>