<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>N R Shagor</title>
</head>
<body>
    <div class="container">
        <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left">
                <h2>Login Hear</h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <lable>User Name</lable>
                            <input type="text" name="user" class="form-control" require>
                        </div>
                        <div class="form-group">
                            <lable>Password</lable>
                            <input type="password" name="password" class="form-control" require>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                
            </div>
            <div class="col-md-6 login-right">
                <h2>Registation</h2>
                    <form action="registation.php" method="post">
                        <div class="form-group">
                            <lable>User Name</lable>
                            <input type="text" name="user" class="form-control" require>
                        </div>
                        <div class="form-group">
                            <lable>Password</lable>
                            <input type="password" name="password" class="form-control" require>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>             
            </div>
        </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>