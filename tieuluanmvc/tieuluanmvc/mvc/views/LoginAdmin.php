<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Play&display=swap');    body {
font-family: 'Play', sans-serif;        display: flex;
        justify-content: center;
    }
    
    form {
        padding: 20px;
        box-shadow: 0 4px 8px 0 gray;
        position: relative;
        width: 20%;
        top: 5rem;
    }
    
    form h3 {
        text-align: center;
        font-weight: bolder;
    }
    
    form .btn-primary {
        padding: 10px 10px;
        border: none;
        background-color: orange;
        position: relative;
        left: 33%;
    }
</style>

<body>
    <form method="POST">
        <h3>ĐĂNG NHẬP</h3>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tài khoản</label>
            <input name="Username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
            <input name="Pass" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button name="Signin" type="submit" class="btn btn-primary">Đăng nhập</button>
    </form>

</body>

</html>