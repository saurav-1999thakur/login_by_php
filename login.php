<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"></script>
    <title>login Details</title>
</head>
<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat  container">
    <div class="card mb-5 mb-xl-8">
        <div class="card-body py-3">
            <form action="app_page/login/login_query.php" method="POST">
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="email" name="email" id="form6Example1" class="form-control" placeholder= "ex-saurav@gmail.com">
                            <label for="form6Example1" class="form-label">Email</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="password" name="password" id="form6Example1" class="form-control" placeholder= "12#@hasysn^">
                            <label for="form6Example1" class="form-label">Password</label>
                        </div>
                    </div>
                    <div>
                        <a href="app_page/forget_pass.php">forget password</a>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <button type="submit" class="btn btn-primary btn-block mb-4">login</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="col">
                <div class="form-outline">
                    <a href="index.php">
                        <button type="btn" class="btn btn-primary btn-block mb-4">Registration</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>