<?php 
class Home extends Controller{
    function Main()
    {
        $data = $this->model("HomeModel");
        $data1 = $this->model("ProductModel");
        $a = $data->GetDanhmuc();
        $b = $data->GetThuonghieu();
        $c = $data1->Chiso();
        $this->view("Home",[
            "Content1"=>"header",
            "Content2"=>"homepd",
            "Content3"=>"footer",
            "danhmuc"=> $a,
            "thuonghieu"=> $b,
            "chiso"=> $c
        ]);
    }
    function Product(){
        $data = $this->model("ProductModel");
        
        $id = $_GET['id'];
        if($id==0){
            $a = $data->GetSanpham();
        }else{
            $a = $data -> LocDanhmuc($id);
        }
        $th = $_GET['th'];
        if($th > 0){
            $a = $data -> LocThuonghieu($th);
        }
        $b = $data->GetDanhmuc();
        $c = $data->GetThuonghieu();
        $d = $data->Chiso();
        $this->view("Home",[
            "Content1"=>"header",
            "Content2"=>"sanpham",
            "Content3"=>"footer",
            "sanpham"=>$a,
            "danhmuc"=>$b,
            "thuonghieu"=>$c,
            "chiso" => $d
        ]);
    }
    
    function DetailProduct(){
        $data=$this->model("ProductModel");
        $a = $data ->GetDanhmuc();
        $b = $data -> GetThuonghieu();
        $id = $_GET['id'];
        $c = $data -> GetCTSanpham($id);
        $this->view("Home",[
            "Content1"=>"header",
            "Content2"=>"ctsanpham",
            "Content3"=>"footer",
            "danhmuc"=>$a,
            "thuonghieu"=>$b,
            "chitiet"=>$c
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
        $id = $_GET['id'];
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
        $this->view("Home",[
            "Content1"=>"header",
            "Content2"=>"profile",
            "Content3"=>"footer",
            "profile"=>$a,
            "update"=>$b
        ]);
    }
    function AddGiohang(){
        $data=$this->model("ProductModel");
        if(isset($_POST['submit'])){
            $id= $_POST['id'];
        }
        $data -> AddGiohang($id,1);
        echo "<Script>history.back()</Script>";
    }
    function DelGiohang(){
        $data =$this->model("ProductModel");
        $id=$_GET['id'];
        $data -> DelGiohang($id);
    }
    function ThemSoluong(){
        $data = $this->model("ProductModel");
        $id=$_GET['id'];
        $data->SoluongTang($id);
    }
    function GiamSoluong(){
        $data = $this->model("ProductModel");
        $id= $_GET['id'];
        $data->SoluongGiam($id);
        
    }
    function Giohang(){
        $data=$this->model("ProductModel");
        $this->view("Home",[
            "Content1"=>"header",
            "Content2"=>"giohang",
            "Content3"=>"footer",
            "giohang" => $data->Giohang(),
            "danhmuc"=>$data->GetDanhmuc(),
            "thuonghieu"=>$data->GetThuonghieu(),
            "tongtien"=>$data->TongTien(),
            "chiso"=>$data->Chiso()
        ]);
    }
    // function Giohang(){
    //     $data=$this->model("ProductModel");
    //     if(isset($_GET['id'])){$id=$_GET['id'];}
    //     if(isset($_GET['tk'])){$tk = $_GET['tk'];}
    //     $a= $data->Giohang($id,$tk);
    //     $b = $data->tongtien();
    //     $c = $data ->GetDanhmuc();
    //     $e =$data ->GetThuonghieu(); 
    //     $f = $data ->Chiso();
    //     $this->view("Home",[
    //         "Content1"=>"header",
    //         "Content2"=>"giohang",
    //         "Content3"=>"footer",
    //         "giohang" => $a,
    //         "tongtien"=>$b,
    //         "danhmuc"=>$c,
    //         "thuonghieu"=>$e,
    //         "chiso"=>$f
    //     ]);
    // }
    function Thanhtoan(){
        $this->view("Home",[
            "Content1"=>"header",
            "Content2"=>"thanhtoan",
            "Content3"=>"footer",
            // "sanpham"=>$a
        ]);
    }
}
?>