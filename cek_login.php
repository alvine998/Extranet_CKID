<?php
    include 'koneksi.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "select * from manager where email='$email' and password='$password'");
    $cek = mysqli_num_rows($query);

    if($cek > 0){
        while($r = mysqli_fetch_array($query)){
            session_start();
            $nama = $_SESSION['nama_manager'];
            $emailku = $_SESSION['email'];
        }
        $message = 'Login Berhasil';
        echo "<script>alert($message); window.location.href='index.php?pesan=berhasil'";
    } else{
        $message2 = 'Login Gagal';
        echo "<script>alert($message2); window.location.href='index.php?pesan=gagal'";
    }
?>