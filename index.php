<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <link rel="icon" href="logo/tx.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    *{
        font-family:Noto sans lao;
    }
    .container{
        margin-top:150px;
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="check_login/check_login.php" method="post">
                    <div class="card">
                        <div class="card-header bg-dark text-center text-white">
                            <h4>Form Login</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group mt-2">
                                <label for="">Username:</label>
                                <input type="text" name='username' autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Password:</label>
                                <input type="password" name='password' class="form-control">
                            </div>
                            <div class="form-group text-end mt-2">
                                <input type="submit" value="LOGIN" name='submit' class="btn btn-outline-success">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>