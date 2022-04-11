<?php

require '../function.php';

if(isset($_POST['submit'])){
    
    if (registrasi($_POST) > 0) {
        echo 
        "<script>
        alert('Berhasil Registrasi !');
        document.location.href = '../Login/';
        </script>";
    } else {
        echo
        "<script>
        alert('Gagal Registrasi !');
        document.location.href = '../Registrasi';
        </script>";
    }
}



?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- link css -->
    <link rel="stylesheet" href="../dir/css/style.css">

    <title>Halaman Registrasi</title>
</head>

<body class="container">

    <!-- navbar -->
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link fw-bold text-light" aria-current="page" href="#">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fw-bold text-light" href="../Login/">Login</a>
        </li>

    </ul>
    <!-- end navbar -->


    <!-- header -->
    <div class="head-title">
        Silahkan Registrasi
    </div>

    <!-- end header -->

    <!-- kotak login -->
    <div class="kotak-registrasi border mt-3 col-5 container">
        <div class="title-login text-center mt-3 fs-2 fw-bold">Registrasi</div>
        <form class="row g-3 mt-2" action="" method="POST">
            <div class="col-12">
                <label for="nama" class="form-label">Nama Depan</label>
                <input type="text" class="form-control" id="nama" name="nama" required autofocus>
            </div>

            <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-12">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>

            <div class="col-12">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>




            <div class="col-12">
                <button type="submit" class="btn btn-dark" name="submit">Register</button>
            </div>
        </form>

        <div class="register-now mt-3">
            <p class="text-muted">Sudah Punya Akun ?
                <a href="../Login/">Login</a>
            </p>
        </div>

    </div>
    <!-- end kotak login -->


    <!-- footer -->

    <!-- end footer -->










    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- script js -->
    <script src="../dir/js/script.js"></script>



</body>

</html>