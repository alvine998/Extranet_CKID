<?php
    include 'koneksi.php';

    $nama_manager = $_POST['manager'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $jenis_kelamin = $_POST['jeniskelamin'];

    $sql = mysqli_query($koneksi, "insert into manager (id,nama_manager,password,email,jenis_kelamin) 
                        values('','$nama_manager','$password','$email','$jenis_kelamin') ");

    if($sql){
        $message = 'Berhasil daftar';
        echo "<script type='text/javascript'>alert('$message'); window.location.href='index.php?pesan=berhasil'</script>";
        exit;
    } else {
        $message2 = 'Gagal daftar';
        echo "<script type='text/javascript'>alert('$message2');</script>";
        header("location:daftar.php?pesan=gagal");
    }
?>