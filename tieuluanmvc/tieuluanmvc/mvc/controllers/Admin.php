<?php
class Admin extends Controller{


    function Main()
    {

        $this->view("Admin", [
            "Header"=>"header",
            "Menu"=>"menu",
            "Content"=>"content"
        ]);

    }
    function XemDanhmuc()
        {
            $data = $this->model("AdminModel");
            $a = $data->GetDanhmuc();
            $nhom_ten = $_POST["nhom_ten"];
            $b = $data->AddDanhmuc($nhom_ten);
            $id = $_GET["id"];
            $c = $data->DelDanhmuc($id);
            $this->view("Admin", [
                "Header"=>"header",
                "Menu"=>"menu",
                "Content"=>"DanhMuc/xem",
                "danhmuc"=> $a,
                "themdm"=>$b,
                "xoadm"=>$c,
            ]);

        }
    function XoaDanhmuc($id)
        {
            $data = $this->model("AdminModel");
            $data->DelDanhmuc($id);

        }

        function SuaDanhmuc()
        {
            $data = $this->model("AdminModel");
            $id = $_GET["id"];
            $nhom_ten = $_POST["tendm"];
            $a = $data->UpdateDanhmuc($id,$nhom_ten);
            $b = $data->GetDanhmuc();
            $c = $data->NameDanhmuc($id);
            $this->view("Admin", [
                "Header"=>"header",
                "Menu"=>"menu",
                "Content"=>"DanhMuc/sua",
                "danhmuc"=> $b,
                "updateDM"=>$a,
                "name"=>$c
            ]);

        }
    
    function XemThuonghieu()
        {
            $data = $this->model("AdminModel");
            $a = $data->GetThuonghieu();
            $th_ten = $_POST["tenth"];
            
            $b = $data->AddThuonghieu($th_ten);
            $this->view("Admin", [
                "Header"=>"header",
                "Menu"=>"menu",
                "Content"=>"ThuongHieu/xem",
                "thuonghieu"=>$a,
                "themth"=> $b
            ]);

        }

        function SuaThuonghieu()
        {
            $data = $this->model("AdminModel");
            $id = $_GET["id"];
            $th_ten = $_POST["tenth"];
            $a = $data->GetThuonghieu();
            $b = $data->UpdateThuonghieu($id,$th_ten);
            $c = $data->NameThuonghieu($id);
            $this->view("Admin", [
                "Header"=>"header",
                "Menu"=>"menu",
                "Content"=>"ThuongHieu/sua",
                "updateTH"=>$b,
                "thuonghieu"=>$a,
                "name"=>$c
            ]);

        }
        function XoaThuonghieu($id)
        {
            $data = $this->model("AdminModel");
            $data->DelThuonghieu($id);

        }
    
        function  XemTaikhoanKH(){
            $data = $this->model("AdminModel");
            $a = $data->GetTaikhoanKH();
            $this->view("Admin", [
                "Header"=>"header",
                "Menu"=>"menu",
                "Content"=>"TaiKhoan/xem",
                "tkkh" => $a,
            ]);

        }
        function  XemTaikhoanNV(){
            $data = $this->model("AdminModel");
            $a = $data->GetTaikhoanNV();
            $name = $_POST['tennv'];
            $username = $_POST['taikhoannv'];
            $date = $_POST['ngaysinhnv'];
            $email = $_POST['emailnv'];
            $tel = $_POST['telnv'];
            $pass = md5($_POST['passnv']);
            $b = $data->AddNhanvien($name,$username,$date,$email,$tel,$pass);

            $this->view("Admin", [
                "Header"=>"header",
                "Menu"=>"menu",
                "Content"=>"TaiKhoan/xem1",
                "tknv" => $a,
                "themnv"=> $b
            ]);
        }
        
        function ThemSanpham(){
            $data = $this->model("AdminModel");
            $tensp = $_POST["tensp"];
            $giasp = $_POST["giasp"];
            $tendm = $_POST["tendm"];
            $tenth = $_POST["tenth"];
            $tonkho = $_POST["tonkho"];
            $noibat = $_POST["noibat"];
            $mota = $_POST["motasp"];
            $ha1 = $_FILES["hinhsp"]["name"];            
            $a = $data -> AddSanpham($tensp,$giasp,$tendm,$tenth,$tonkho,$noibat,$mota,$ha1);
            $b = $data -> GetThuonghieu();
            $c = $data -> GetDanhmuc();
            $this->view("Admin",[
                "Header"=>"header",
                "Menu"=>"menu",
                "Content"=>"SanPham/them",
                "addsp" => $a,
                "thuonghieu" => $b,
                "danhmuc" => $c
            ]);
        }
        function SuaSanpham(){
            $data = $this->model('AdminModel');
            $id = $_GET['id'];
            $a = $data->InfSanpham($id);
            $b = $data -> GetThuonghieu();
            $c = $data -> GetDanhmuc();
            $id = $_GET['nhom'];
            $d = $data -> NameDanhmuc($id);
            $id = $_GET['th'];
            $f = $data -> NameThuonghieu($id);
            $this->view("Admin",[
                "Header"=>"header",
                "Menu"=>"menu",
                "Content"=>"SanPham/sua",
                "name"=>$a,
                "thuonghieu" => $b,
                "danhmuc" => $c,
                "namedm"=>$d,
                "nameth"=>$f
            ]);
        }
        function XoaSanpham($id){
            $data = $this->model("AdminModel");
            $data -> DelSanpham($id);
        }
        function Dangnhap(){
            $data = $this->model("AdminModel");
            $username = addslashes($_POST['Username']);
            $password = addslashes($_POST['Pass']);

            $login = $data->Dangnhap($username, $password);
            $this->view("LoginAdmin",[
                "login"=>$login
            ]
            );

        }
        function Dangxuat(){
            $data = $this->model("AdminModel");
            $data->Dangxuat();
        }
        function XemSanpham()
        {
            $data = $this->model("AdminModel");
            $a = $data->GetSanpham();
            $this->view("Admin", [
                "Header"=>"header",
                "Menu"=>"menu",
                "Content"=>"SanPham/xem",
                "sanpham"=>$a
            ]);

        }
}
?>