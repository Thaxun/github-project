<?php 
    require '../connect.php';
    $sql = $conn->prepare("SELECT * FROM list WHERE id = '".$_GET['id']."'");
    $sql->execute();
    $show = $sql->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link rel="icon" href="../logo/tx.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    *{
        font-family:Noto sans lao;
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="update.php" method="post">
                    <div class="card">
                        <div class="card-header text-center bg-success">
                            <h4>ຟອມແກ້ໄຂຂໍ້ມູນ</h4>
                        </div>
                        <div class="card-body">
                            <div class="fom-group mt-3">
                            <div class="fom-group mt-3">
                                <label for="">ວັນທີ່ເດືອນປີ</label>
                                <input type="hidden" name="id" value="<?= $show['id'] ?>">
                                <input type="date" name="date" class="form-control" value="<?= $show['date'] ?>" required>
                            </div>
                                <label for="">ລາຍການ</label>
                                <input type="text" name="name" class="form-control" value="<?= $show['name'] ?>" autocomplete="off" required>
                            </div>
                            <div class="fom-group mt-3">
                                <label for="">ລາຄາ</label>
                                <input type="number" name="price" class="form-control" value="<?= $show['price'] ?>" required>
                            </div>
                            <div class="fom-group mt-3 text-center">
                                <input type="submit" id="sumbit" class="btn btn-success" value="ແກ້ໄຂ">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>
