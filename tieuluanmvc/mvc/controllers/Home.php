<?php 
class Home extends Controller{
    function Main()
    {
        $data = $this->model("HomeModel");
        $data1 = $this->model("ProductModel");
            $a = $data->GetDanhmuc();
            $b = $data->GetThuonghieu();
            $c = $data1->Chiso();
            $n1 = $data->Noibat1();
            $n2 = $data->Noibat2();
            $n3 = $data->Noibat3();
            $n4 = $data->Noibat4();
            
        $this->view("Home",[
            "Content1"=>"homepd",
            "danhmuc"=> $a,
            "thuonghieu"=> $b,
            "chiso"=> $c,
            "noibat1"=> $n1,
            "noibat2"=> $n2,
            "noibat3"=> $n3,
            "noibat4"=> $n4
        ]);
    }
    function Product(){
        $data = $this->model("ProductModel");
        $cr_page = (isset($_GET['page']) ? $_GET['page'] : 1);
        $limit = 9;
        $start = ($cr_page - 1) * $limit;
        $id = $_GET['id'];
        if($cr_page > 0){
            $a = $data->Phansanpham($start,$limit);
            $page = $data->Phantrang($limit);
        }
        if($id > 0){
            $a = $data -> LocDanhmuc($id, $start, $limit);
            $page =$data->PhantrangDM($id, $limit);
        }
        $th = $_GET['th'];
        if($th > 0){
            $a = $data -> LocThuonghieu($th, $start, $limit);
            $page = $data->PhantrangTH($th, $limit);
        }
        $start = $_GET['start'];
        $stop = $_GET['stop'];
        if($stop > 0){
            $a = $data -> LocGiatien($start,$stop);
            $page = $data -> PhantrangGia($limit);
        }
        echo $start;
        $this->view("Home",[
            "Content1"=>"header",
            "Content2"=>"sanpham",
            "Content3"=>"footer",
            "sanpham"=>$a,
            "danhmuc"=>$data->GetDanhmuc(),
            "thuonghieu"=>$data->GetThuonghieu(),
            "chiso" =>$data->Chiso(),
            "phantrang"=>$page
        ]);
    }
    
    function DetailProduct(){
        $data=$this->model("ProductModel");
        $a = $data ->GetDanhmuc();
        $b = $data -> GetThuonghieu();
        $id = $_GET['id'];
        $c = $data -> GetCTSanpham($id);
        $new = $data-> Spmoi();
        $this->view("Home",[
            "Content1"=>"header",
            "Content2"=>"ctsanpham",
            "Content3"=>"footer",
            "danhmuc"=>$a,
            "thuonghieu"=>$b,
            "chitiet"=>$c,
            "spmoi"=> $new,
            "chiso" =>$data->Chiso()
        ]);
    }
    function Account(){
        $data = $this->model("HomeModel");
            $username = addslashes($_POST['Username']);
            $password = addslashes($_POST['Pass']);
        $signin = $data->Dangnhap($username, $password);
            $username = $_POST["Username"];
            $email = $_POST["Email"];
            $tel = $_POST["Tel"];
            $pass = md5($_POST["Pass"]);
            $repass = md5($_POST["rePass"]);
        $signup = $data->Dangky($username, $email, $tel, $pass, $repass);
        
        $this->view("Home",[
            "Content1"=>"taikhoan",
            "Signup"=>$signup,
            "Signin"=>$signin
        ]);
    }
    function Dangxuat(){
        $data = $this->model("HomeModel");
        $data->Dangxuat();
    }
    function Profile(){
        $data = $this->model("HomeModel");
        $id = $_SESSION['username'];
        $a = $data->GetProfile($id);
        $hoten = $_POST['u_ten'];
        $ngaysinh = $_POST['u_ngaysinh'];
        $email = $_POST['u_email'];
        $phone = $_POST['u_phone'];
        $tinh = $_POST['tinh'];
        $huyen = $_POST['huyen'];
        $xa = $_POST['xa'];
        $duong = $_POST['duong'];
        $b = $data->UpdataProfile($id,$hoten,$ngaysinh,$email,$phone,$tinh,$huyen,$xa,$duong);
        
            $newPass = md5($_POST['mk_moi']);
            $renewPass = md5($_POST['re_mk_moi']);
            $Pass = md5($_POST['mk_cu']);
        
        $c = $data->ChangePass($newPass, $renewPass,$id, $Pass);
        $this->view("Home",[
            "Content1"=>"header",
            "Content2"=>"profile",
            "Content3"=>"footer",
            "profile"=>$a,
            "update"=>$b,
            "doimk"=> $c,
            "hd"=> $this->model("ProductModel")->HoaDonTK($id),
            "danhmuc"=>$this->model("ProductModel")->GetDanhmuc(),
            "thuonghieu"=>$this->model("ProductModel")->GetThuonghieu(),
            "chiso"=>$this->model("ProductModel")->chiso()
        ]);
    }
    function AddGiohang (){
        $data=$this->model("ProductModel");
        $id= $_GET['id'];
        $tk = $_SESSION['username'];
        $data -> AddGiohang($id,1);
        echo "<Script>history.back(-1)</Script>";
    }
    function DelGiohang(){
        $data =$this->model("ProductModel");
        $id=$_GET['id'];
        $tk = $_GET['tk'];

        $data -> DelGiohang($id,$tk);
        header('Location:../Home/Giohang');
    }
    function ThemSoluong(){
        $data = $this->model("ProductModel");
        $id=$_GET['id'];
        $tk = $_GET['tk'];

        $data->SoluongTang($id,$tk);
        
    }
    function GiamSoluong(){
        $data = $this->model("ProductModel");
        $id= $_GET['id'];
        $tk = $_GET['tk'];
        $data->SoluongGiam($id,$tk);
        
    }
    function Giohang(){
        $data = $this->model("ProductModel");
        $id = $_GET['id'];
        $tk = $_GET['tk'];
        if(isset($_POST['giamgia'])){
            $code = $_POST['code'];
        }
        
        $this->view("Home",[
            "Content1"=>"header",
            "Content2"=>"giohang",
            "Content3"=>"footer",
            "giohang" => $data->Giohang($id,$tk),
            "tongtien"=>$data->Tongtien(),
            "danhmuc"=>$data ->GetDanhmuc(),
            "thuonghieu"=>$data ->GetThuonghieu(),
            "chiso"=>$data ->Chiso(),
            "giamgia"=> $data->Giamgia($code)
        ]);
    }
    function Thanhtoan(){
        
        $id = $_GET['id'];
        $tk = $_GET['tk'];
        $data=$this->model("ProductModel");
        
        $this->view("Home",[
            "Content1"=>"header",
            "Content2"=>"thanhtoan",
            "Content3"=>"footer",
            "tongtien"=>$data->Tongtien(),
            "giohang"=>$data->Giohang($id,$tk),
            "chiso"=>$data->Chiso(),
            "danhmuc"=>$data->GetDanhmuc(),
            "thuonghieu"=>$data->GetThuonghieu(),
            "thongtin"=>$data->ThongtinKH()
        ]);
    }
    function AddHoaDon(){
        $data=$this->model("ProductModel");
       

      
        if($_POST['pt'] == 'vnpay'){
            // echo '123';
            if(isset($_POST["tongtien"])){
                $tt = $_POST["tongtien"];
            require_once('.././tieuluanmvc/vnpay_php/vnpay_create_payment.php');
            }
        }
        if($_POST['pt'] == 'tien'){
            $tongtien = $_POST['tongtien'];
            $hoten = $_POST['hoten'];
            $sdt = $_POST['sdt'];
            $diachi1 = $_POST['diachi1'];
            $diachi2 = $_POST['diachi2'];
            $diachi3 = $_POST['diachi3'];
            $diachi4 = $_POST['diachi4'];
            $email = $_POST['email'];
            $payment_method = 'Tiền mặt';
            $this->model("ProductModel")->AddHoaDon($tongtien,$hoten,$sdt,$diachi1,$diachi2,$diachi3,$diachi4,$email,$payment_method);
        }
    }
    function HoaDon(){
        $data = $this->model("ProductModel");
        if(isset($_GET['hd_id']))
        {
            $hd_id=$_GET['hd_id'];
        }
        
        $this->view("Home",[
                    "Content1"=>"header",
                    "Content2"=>"chitiethd",
                    "Content3"=>"footer",
                    "hoadon" => $data->HoaDon($hd_id),
                    "chitiethd"=>$data->ChiTietHoaDon($hd_id),
                    "danhmuc"=>$data->GetDanhmuc(),
                    "thuonghieu"=>$data->GetThuonghieu(),
                    "chiso"=>$data->chiso()
                ]);
    }
    function Trove(){
        
        header('Location:../home/sanpham');
    }
    function Timkiem(){
        $data = $this->model('ProductModel');
        if(isset($_POST['search'])){
            $key = $_POST['key_search'];
        }

        $this->view("Home",[
            "Content1"=>"header",
            "Content2"=>"timkiem",
            "Content3"=>"footer",
            "timkiem" => $data->Timkiem($key),
            "danhmuc"=>$data->GetDanhmuc(),
            "thuonghieu"=>$data->GetThuonghieu(),
            "chiso"=>$data->chiso()
        ]);
    }
}
?>