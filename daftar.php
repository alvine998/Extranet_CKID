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
        .box {
            background-color: rgb(254, 255, 255);
            height: 500px;
            width: 500px;
            position: absolute;
            margin-top: 30px;
            margin-left: 33%;
            border-radius: 40px;
        }

        body {
            background-color: #229BD7;
        }

        h1,
        p,
        a {

            font-family: Arial, Helvetica, sans-serif;
        }

        h5 {
            font-family: Arial, Helvetica, sans-serif;
        }

        form {
            margin: 30px;
        }

        label {
            font-size: 12pt;
        }

        #status {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center; color: azure; margin-top: 7%;">Registrasi Mitra Hotel</h1>
    <div class="box">
        <div class="container" style="margin: 30px;">
            <form method="POST" action="cek_daftar.php">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-4 col-form-label">Nama Manager</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="manager" placeholder="John Doe">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" placeholder="email@example.com">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" id="pass" class="form-control" name="password" placeholder="********" onkeyup="passwordStrength(this.Value)">
                        <span style="float: right;" id="status"></span>
                        <a href="#" onclick="passToggle()" id="show">Lihat Password</a>
                    </div>
                </div>
                <script>
                    //fungsi kekuatan password
                    function passwordStrength(p) {
                        var status = document.getElementById('status');

                        var regex = new Array();
                        regex.push("[A-Z]");
                        regex.push("[a-z]");
                        regex.push("[0-9]");
                        regex.push("[!@#$%^&*]");

                        var passed = 0;
                        for (var x = 0; x < regex.length; x++) {
                            if (new RegExp(regex[x]).test(p)) {
                                console.log(passed++);
                            }
                        }
                    }

                    var strength = null;
                    var color = null;

                    switch (passed) {
                        case 0:
                        case 1:
                        case 2:
                            strength = "Lemah";
                            color = "#FF3232";
                            break;
                        case 3:
                            strength = "Sedang";
                            color = "#E1D441";
                            break;
                        case 4:
                            strength = "Kuat";
                            color = "#27D644";
                            break;
                    }
                    status.innerHTML = strength;
                    status.style.color = color;

                    //fungsi lihat password
                    function passToggle() {
                        var pass = document.getElementById('pass');
                        var showBtn = document.getElementById('show');
                        if (pass.type == "password") {
                            pass.type = 'text';
                            showBtn.innerHTML = 'Sembunyikan';
                        } else {
                            pass.type = 'password';
                            showBtn.innerHTML = 'Lihat Password';
                        }
                    }
                </script>

                <div class="form-group" style="margin-top: 10px;">
                    <label>Jenis Kelamin:</label>
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="gridRadios1" value="L" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Laki-laki
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="gridRadios2" value="P">
                                <label class="form-check-label" for="gridRadios2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <input type="button" value="Batal" class="btn btn-danger" onclick="location.href='index.php';">
                        <input type="submit" value="Daftar" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>