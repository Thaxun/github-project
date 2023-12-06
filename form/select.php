<?php
    require '../connect.php';
    $select = $conn->prepare("SELECT * FROM list ORDER BY id DESC");
    $select->execute();
    $fet = $select->fetchAll(PDO::FETCH_ASSOC);
    $number = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select</title>
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
            <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>ລາຍການ</th>
                    <th>ລາຄາ</th>
                    <th>ວັນທີ່ເດືອນປີ</th>
                    <th>ແກ້ໄຂ</th>
                    <th>ລົບ</th>
                </tr>
                <?php foreach($fet as $row): ?>
                <tr>
                    <td><?= $number++; ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= number_format($row['price']) ?> ກີບ</td>
                    <td><?= $row['date'] ?></td>
                    <td><a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-info">ແກ້ໄຂ</a></td>
                    <td><a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('ທ່ານຕ້ອງການລົບ ຫຼື ບໍ່')" class="btn btn-danger">ລົບ</a></td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
</body>
</html>