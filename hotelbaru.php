<!DOCTYPE html>
<html>

<head>
    <title>Extranet | Carikamar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="content-language" content="en" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        h5,
        p {
            color: aliceblue;
        }
    </style>
</head>

<body>
    <!-- Ini Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light justify-content-center" style="background-color: #229BD7; height: 100px;">
        <img src="images/Putih_Full_Horizontal.png" width="190px" height="50px">
    </nav>
    <br />
    <!-- Ini Form Registrasi Hotel -->
    <div class="container">
        <div class="content">
            <h1 style="text-align: center;">Daftarkan Akomodasi Anda Disini</h1>
            <br />
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama Akomodasi:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="staticEmail" placeholder="Hotel ... / Homestay ... /">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputState" class="col-sm-2 col-form-label">Jenis Akomodasi:</label>
                    <div class="col-sm-2">
                        <select id="inputState" class="form-control">
                            <option selected>Pilihan</option>
                            <option>Hotel</option>
                            <option>Villa</option>
                            <option>Homestay</option>
                            <option>Penginapan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Alamat:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="staticEmail" placeholder="Jl.Brahmana ...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputState" class="col-sm-2 col-form-label">Provinsi:</label>
                    <div class="col-sm-2">
                        <select id="inputState" class="form-control">
                            <option selected>Pilihan</option>
                            <option>DKI Jakarta</option>
                        </select>
                    </div>

                    <label for="inputState" class="col-sm-1 col-form-label">Kota:</label>
                    <div class="col-sm-2">
                        <select id="inputState" class="form-control">
                            <option selected>Pilihan</option>
                            <option>DKI Jakarta</option>
                        </select>
                    </div>

                    <label for="inputState" class="col-sm-1 col-form-label">Kec:</label>
                    <div class="col-sm-2">
                        <select id="inputState" class="form-control">
                            <option selected>Pilihan</option>
                            <option>DKI Jakarta</option>
                        </select>
                    </div>

                </div>
                <div class="form-group row">
                    <label for="inputState" class="col-sm-2 col-form-label">Kel:</label>
                    <div class="col-sm-2">
                        <select id="inputState" class="form-control">
                            <option selected>Pilihan</option>
                            <option>DKI Jakarta</option>
                        </select>
                    </div>

                    <label for="inputState" class="col-sm-1 col-form-label">Kode Pos</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="staticEmail" placeholder="  ">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Fasilitas:</label>
                    <div class="col-sm-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Wifi
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Parkir Mobil
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Parkir Motor
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Restaurant
                            </label>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Kolam Renang
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Bar
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Meeting Room
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Ball Room
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Deskripsi:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="fotoutama" class="col-sm-2 col-form-label">Foto Utama:</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" id="fotoutama">
                        <script type="text/javascript">
                            $("#fotoutama").change(function() {
                                readImage(this)
                            })
                        </script>
                        <img src="#" id="foto1" width="300px" alt="preview gambar">
                        <script type="text/javascript">
                            function readImage(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        $('#foto1').attr('src', e.target.result);
                                    }
                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                        </script>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="fotofoto" class="col-sm-2 col-form-label">Foto-foto:</label>
                    <div class="col-sm-4">
                        <input type="file" class="form-control-file" id="fotofoto">
                        <script type="text/javascript">
                            $("#fotofoto").change(function() {
                                readImage2(this)
                            })
                        </script>
                        <img src="#" id="foto2" width="300px" alt="preview gambar">
                        <script type="text/javascript">
                            function readImage2(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        $('#foto2').attr('src', e.target.result);
                                    }
                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                        </script>
                    </div>
                    <div class="col-sm-3">
                        <input type="file" class="form-control-file" id="fotofoto2">
                        <script type="text/javascript">
                            $("#fotofoto2").change(function() {
                                readImage3(this)
                            })
                        </script>
                        <img src="#" id="foto3" width="300px" alt="preview gambar">
                        <script type="text/javascript">
                            function readImage3(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        $('#foto3').attr('src', e.target.result);
                                    }
                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                        </script>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="fotofoto3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-4">
                        <input type="file" class="form-control-file" id="fotofoto3">
                        <script type="text/javascript">
                            $("#fotofoto3").change(function() {
                                readImage4(this)
                            })
                        </script>
                        <img src="#" id="foto4" width="300px" alt="preview gambar">
                        <script type="text/javascript">
                            function readImage4(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        $('#foto4').attr('src', e.target.result);
                                    }
                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                        </script>
                    </div>
                    <div class="col-sm-3">
                        <input type="file" class="form-control-file" id="fotofoto4">
                        <script type="text/javascript">
                            $("#fotofoto4").change(function() {
                                readImage5(this)
                            })
                        </script>
                        <img src="#" id="foto5" width="300px" alt="preview gambar">
                        <script type="text/javascript">
                            function readImage5(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        $('#foto5').attr('src', e.target.result);
                                    }
                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                        </script>
                    </div>
                </div>

                <br />
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Jika setuju dengan <a href="">Syarat dan Ketentuan yang berlaku</a>, klik checkbox disamping *
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div style="text-align: center;" class="col-sm-6">
                        <input type="submit" class="btn btn-primary" value="Daftar" style="width: 200px;">
                    </div>
                </div>
                <div class="form-group">
                    <div style="text-align: center;" class="col-sm-6">
                        <input type="button" class="btn btn-danger" value="Kembali" onclick="location.href='dashboard.html'" style="width: 200px;">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>