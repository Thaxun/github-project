<?php 
    session_start();
    if(!$_SESSION['log_me_in']){
        header("location:../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_user</title>
    <link rel="icon" href="../logo/tx.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    *{
        font-family:Noto sans lao;
    }
    #image{
        width:150px;
        height:150px;
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="insert_user.php" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header text-center bg-primary">
                            <h4>ຟອມບັນທືກຂໍ້ມູນຜູ້ນຳໃຊ້</h4>
                        </div>
                        <div class="card-body">
                            <div class="fom-group text-center">
                               <img src="" id="image" alt=""><br>
                               <input type="file" name="profile" id="input-file" class="form-control">
                            </div>
                            <div class="fom-group mt-3">
                                <label for="">ຊື່</label>
                                <input type="text" name="fname" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="fom-group mt-3">
                                <label for="">ນາມສະກຸນ</label>
                                <input type="text" name="lname" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="fom-group mt-3">
                                <label for="">ວັນທີ່ເດືອນປີເກີດ</label>
                                <input type="date" name="dob" class="form-control" required>
                            </div>
                            <div class="fom-group mt-3">
                                <label for="">ຊື່ຜູ້ນຳໃຊ້</label>
                                <input type="text" name="username" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="fom-group mt-3">
                                <label for="">ລະຫັດຜ່ານ</label>
                                <input type="password" name="password_1" class="form-control" required>
                            </div>
                            <div class="fom-group mt-3">
                                <label for="">ຢືນຢັນລະຫັດຜ່ານ</label>
                                <input type="password" name="password_2" class="form-control" required>
                            </div>
                            <div class="fom-group mt-3 text-center">
                                <input type="submit" id="sumbit" class="btn btn-success" value="ບັນທືກ">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <script>
        let input = document.getElementById("input-file");
        let showImage = document.getElementById("image");
        input.addEventListener("change", () =>{
            showImage.src = URL.createObjectURL(input.files[0]);
        })
    </script>
</body>
</html>