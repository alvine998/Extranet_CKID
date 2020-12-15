<?php
    include 'koneksi.php';

    $nama_manager = $_POST['manager'];
    $nama_hotel = $_POST['namahotel'];
    $password = $_POST['password'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $jenis_kelamin = $_POST['jeniskelamin'];

    $sql = mysqli_query($koneksi, "insert into manager (id,nama_manager,nama_hotel,password,alamat,email,jenis_kelamin) 
                        values('','$nama_manager','$nama_hotel','$password','$alamat','$email','$jenis_kelamin') ");

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