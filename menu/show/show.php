<?php 
    require_once "../connect.php";
    $sql = $conn->prepare("SELECT count(id) FROM list");
    $sql->execute();
    $co = $sql->fetch();
    $sql1 = $conn->prepare("SELECT sum(price) FROM list");
    $sql1->execute();
    $co1 = $sql1->fetch();

    $sql2 = $conn->prepare("SELECT sum(price) FROM list WHERE date = curdate()");
    $sql2->execute();
    $show_amount = $sql2->fetch();

    $sql3 = $conn->prepare("SELECT sum(price) FROM list WHERE month(date) = month(curdate())");
    $sql3->execute();
    $show_month = $sql3->fetch();

    $sql4 = $conn->prepare("SELECT sum(price) FROM list WHERE year(date) = year(curdate())");
    $sql4->execute();
    $show_year = $sql4->fetch();

    // $sql5 = $conn->prepare("SELECT count(oid) FROM order_cafe WHERE odate = curdate()");
    // $sql5->execute();
    // $show_sell_today = $sql5->fetch();

?>