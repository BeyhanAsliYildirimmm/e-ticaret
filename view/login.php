<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="../assets/css/footer.css"> 
    <link rel="stylesheet" href="../assets/css/header.css">
    <!-- Bootstrap CSS dosyası bağlantısı -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <title>Giriş Yap</title>

    <!-- Custom styles for this template -->
    <style>
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .container {
            z-index: 1;
        }
    </style>
</head>

<body>

    <video playsinline autoplay muted loop poster="video2.mp4" id="bgvid">
        <source src="../assets/videos/video2.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="container mt-5">
        <div class="row justify-content-center  ">
        <form class="col-md-6 col-lg-4 col-xl-3 p-5 rounded-1 border bg-light" method="post" action="../controller/loginControl.php">
                <h1 class="h3 mb-3 font-weight-normal text-center">Giriş Yap</h1>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" name="email" class="form-control mb-3" placeholder="Email address" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword"  name="password" class="form-control mb-3" placeholder="Password" required>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>

                <button class="btn btn-lg btn btn-success btn-block" type="submit">Giriş Yap</button>
                <a class="btn btn-lg btn btn-light btn-block" href="register.php">Kayıt Ol</a>

            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>

    <script src="../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script scr="../assets/js/custom.js"></script>
</body>

</html>
