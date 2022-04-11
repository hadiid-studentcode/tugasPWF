<?php

require '../function.php';

if ($_SESSION['level'] == "") {
    header("Location:../index.php");
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

    <title>Halaman Home</title>
</head>

<body class="container">

    <!-- navbar -->
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link fw-bold text-light" aria-current="page" href="#">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fw-bold text-light" href="../logout.php">Logout</a>
        </li>

    </ul>
    <!-- end navbar -->


    <!-- header -->
    <div class="head-title">
        Selamat Datang <?php echo $_SESSION['username'] ?>
    </div>












    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- script js -->
    <script src="../dir/js/script.js"></script>



</body>

</html>