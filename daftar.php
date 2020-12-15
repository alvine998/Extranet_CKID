<!DOCTYPE html>
<html>

<head>
    <title>Extranet | Carikamar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <style>
        .box {
            background-color: rgb(254, 255, 255);
            height: 500px;
            width: 800px;
            position: absolute;
            margin-top: 30px;
            margin-left: 21%;
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
        form{
            margin: 30px;
        }
        label{
            font-size: 12pt;
        }
        #status{
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center; color: azure; margin-top: 7%;">Registrasi Mitra Hotel</h1>
    <div class="box">
        <div class="container">
            <form method="POST" action="cek_daftar.php">
                <div class="row">
                    <div class="col-md-3">
                        <label>Nama Manager: </label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Fulan" name="manager">
                    </div>
                </div>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-3">
                        <label>Nama Hotel: </label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Hotel ..." name="namahotel">
                    </div>
                </div>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-3">
                        <label>Password: </label>
                    </div>
                    <div class="col-md-4">
                        <input type="password" class="form-control" placeholder="********" name="password" id="pass" onkeyup="passwordStrength(this.value)">
                        <span style="float: right;" id="status"></span>
                        <a href="#" onclick="passToggle()" id="show">Lihat Password</a>
                    </div>
                    <script>
                        //fungsi kekuatan password
                        function passwordStrength(p){
                            var status = document.getElementById('status');

                            var regex = new Array();
                            regex.push("[A-Z]");
                            regex.push("[a-z]");
                            regex.push("[0-9]");
                            regex.push("[!@#$%^&*]");

                            var passed = 0;
                            for(var x = 0; x < regex.length; x++){
                                if(new RegExp(regex[x]).test(p)){
                                    console.log(passed++);
                                }
                            }
                        }

                        var strength = null;
                        var color = null;

                        switch(passed){
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
                        function passToggle(){
                            var pass = document.getElementById('pass');
                            var showBtn = document.getElementById('show');
                            if(pass.type == "password"){
                                pass.type = 'text';
                                showBtn.innerHTML = 'Sembunyikan';
                            } else {
                                pass.type = 'password';
                                showBtn.innerHTML = 'Lihat Password';
                            }
                        }
                    </script>
                </div>
                <div class="form-group" style="margin-top: 10px;">
                    <label>Alamat:</label>
                    <input type="text" class="form-control" placeholder="Jl. Barata ...." name="alamat">
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label>Email: </label>
                    </div>
                    <div class="col-md-4">
                        <input type="email" class="form-control" placeholder="email@domain.com" name="email">
                    </div>
                </div>
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
                    <div class="form-group" style="margin-left: 80%;">
                        <input type="button" value="Batal" class="btn btn-danger" onclick="location.href='index.html';" >
                        <input type="submit" value="Daftar" class="btn btn-primary" >
                    </div>                    
                </div>
            </form>
        </div>
    </div>
</body>

</html>