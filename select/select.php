<?php 
    require '../connect.php';
    include('sql/sql.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select</title>
    <link rel="icon" href="../logo/tx.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
</head>
<style>
* {
    font-family: Noto sans lao;
}
</style>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">
                <a href="select.php?p=today" class="btn btn-outline-secondary">ມື້ນີ້</a>
                <a href="select.php?p=month" class="btn btn-outline-success">ເດືອນນີ້</a>
                <a href="select.php?p=year" class="btn btn-outline-info">ປີນີ້</a>
                <a href="select.php?p=all" class="btn btn-outline-primary">ສະແດງທັງໝົດ</a>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered mt-3" id="mytable">
                   <thead>
                   <tr>
                        <th>#</th>
                        <th>ລາຍການ</th>
                        <th>ລາຄາ</th>
                        <th>ວັນທີ່ເດືອນປີ</th>
                    </tr>
                   </thead>
                   <tbody>
                   <?php 
                        $p = (isset($_GET['p']) ? $_GET['p'] : '');
                        if($p == "today"){
                            include('select_today.php');
                        }elseif($p == "month"){
                            include("select_month.php");
                        }elseif($p == "year"){
                            include("select_year.php");
                        }elseif($p == "all"){
                            include("select_all.php");
                        }else{
                            include("select_all.php");
                        }
                    ?>
                   </tbody>
                </table>
                
            </div>
        </div>
    </div>
</body>

</html>