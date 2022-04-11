<?php
// session
session_start();
// koneksi
$conn = mysqli_connect('localhost','root','','login');

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)){
        $row[] = $row;
    }

    return $row;
}


function registrasi($data){
    global $conn;
    $nama = ($data['nama']);
    $email = ($data['email']);
    $username = ($data['username']);
    $password = ($data['password']);

    $query = "INSERT INTO users VALUES ('','$nama','$email','$username','$password')";
    mysqli_query($conn, $query);
 

    return mysqli_affected_rows($conn);

}

function login($login){
    global $conn;

    $username = ($login['username']);
    $password = ($login['password']);

    $log = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username' AND password = '$password'");
    $cek = mysqli_num_rows($log);

    // cek apakah ditemukan pada database

    if ($cek > 0) {
        $data = mysqli_num_rows($log);

        // buat session log dan username

        $_SESSION['username'] = $username;
        $_SESSION['level'] = 'admin';

        // pergi ke home
        header("Location:../Home/");

    } else {
        header("Location:index.php?pesan=gagal");
    }
}
