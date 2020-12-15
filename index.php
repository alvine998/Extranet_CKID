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
            height: 420px;
            width: 350px;
            position: absolute;
            margin-top: 50px;
            margin-left: 37%;
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

        .vertical-center {
            margin-top: 10px;
        }

        .foot-box{
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <h1 style="margin-top: 5%; text-align: center;color: azure;">Welcome to Extranet Carikamar</h1>
    <div class="box">
        <h5 style="text-align: center; margin-top: 50px;">LOGIN</h5>
        <form style="margin: 10px;" method="POST" action="">
            <label>Email: </label>
            <input class="form-control" type="text" placeholder="email@domain.com" name="email">
            <label style="margin-top: 10px;">Password: </label>
            <input class="form-control" type="password" placeholder="*********" name="password">
            <div class="vertical-center">
                <center><input type="submit" class="btn btn-primary" style="width: 200px;"></center>
            </div>
        </form>
        <div class="foot-box">
            <p style="margin-top: 10px;">Belum punya akun ?</p>
            <center><a href="daftar.php">Daftar Disini</a></center>
        </div>
    </div>
</body>

</html>