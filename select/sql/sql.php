<?php 
    require '../connect.php';
   
    $select = $conn->prepare("SELECT * FROM list ORDER BY id DESC");
    $select->execute();
    $fet = $select->fetchAll(PDO::FETCH_ASSOC);

    $select_today = $conn->prepare("SELECT * FROM list WHERE date=curdate()");
    $select_today->execute();
    $select_sum_today = $conn->prepare("SELECT sum(price) FROM list WHERE date=curdate()");
    $select_sum_today->execute();
    $sum_today = $select_sum_today->fetch(PDO::FETCH_NUM);
    $show_today = $select_today->fetchAll(PDO::FETCH_ASSOC);

    $select_month = $conn->prepare("SELECT * FROM list WHERE month(date)=month(curdate())");
    $select_month->execute();
    $select_sum_month = $conn->prepare("SELECT sum(price) FROM list WHERE month(date)=month(curdate())");
    $select_sum_month->execute();
    $sum_month = $select_sum_month->fetch(PDO::FETCH_NUM);
    $show_month = $select_month->fetchAll(PDO::FETCH_ASSOC);

    $select_year = $conn->prepare("SELECT * FROM list WHERE year(date)=year(curdate())");
    $select_year->execute();
    $select_sum_year = $conn->prepare("SELECT sum(price) FROM list WHERE year(date)=year(curdate())");
    $select_sum_year->execute();
    $sum_year = $select_sum_year->fetch(PDO::FETCH_NUM);
    $show_year = $select_year->fetchAll(PDO::FETCH_ASSOC);

    $number = 1;
?>