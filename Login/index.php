<?php

require '../function.php';

if (isset($_POST["login"])) {
    if (login($_POST) > 0) {
        "<script>
        alert('Sukses Login !');
        </script>";
    } else{
        echo mysqli_error($conn);
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

    <title>Halaman Login</title>
</head>

<body class="container">

    <!-- navbar -->
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link fw-bold text-light" aria-current="page" href="#">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fw-bold text-light" href="../Registrasi/">Register</a>
        </li>

    </ul>
    <!-- end navbar -->


    <!-- header -->
    <div class="head-title">
        Selamat Datang
    </div>

    <!-- end header -->

    <!-- kotak login -->
    <div class="kotak-login border mt-3 col-5 container text-center">
        <div class="title-login text-center mt-3 fs-2 fw-bold">Login</div>
        <form action="" method="POST">
            <div class="mb-3 mt-3">
                <label for="Username" class="form-label fw-bold">Username</label>
                <input type="text" class="form-control" id="username" required autofocus name="username">

            </div>
            <div class="mb-3">
                <label for="password" class="form-label fw-bold">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <button type="submit" class="btn btn-dark text-center" name="login">Login</button>
        </form>

        <div class="register-now mt-3">
            <p class="text-muted">Belum Punya Akun ?
            <a href="../Registrasi/">Registrasi</a>
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