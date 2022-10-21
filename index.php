<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body style="background-color: #47B5FF;" class="container">
    <div class="card w-25 position-absolute top-50 start-50 translate-middle shadow">
        <div class="card-body">
            <div class="card-header text-center h-5">
                PENDAFTARAN AKUN SISWA BARU
            </div>
            <form class="card-text" action="register.php" method="POST">
                <div class="mb-1">
                    <!--NAMA LENGKAP-->
                    <label for="exampleInputName" class="form-label"></label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" name="fullname"
                        placeholder="Masukkan nama lengkap">
                </div>
                <div class="mb-1">
                    <!--USERNAME-->
                    <label for="exampleInputName" class="form-label"></label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" name="username"
                        placeholder="Masukkan username">
                </div>
                <div class="mb-4">
                    <!--PASSWORD-->
                    <label for="exampleInputPassword1" class="form-label"></label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                        placeholder="Password">
                </div>
                <button class="btn btn-dark d-grid gap-2" style="background-color: #06283D;">Daftar</button>
            </form>
        </div>
        <p class="text-center"><small>Silahkan <a href="login.php" class="text-decoration-none">login</a> bagi yang sudah punya
                akun</small>
        </p>
    </div>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>