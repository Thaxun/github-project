<?php
    session_start();
    require '../connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = $conn->prepare("SELECT * FROM user WHERE username = ?");
    $sql->execute([$username]);
    if($sql->rowCount() > 0){
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        $password_hash = $row['password'];
        if(password_verify($password,$password_hash)){
           $_SESSION['me_id'] = $row['user_id'];
           $_SESSION['me_name'] = $row['fname'];
           $_SESSION['me_name2'] = $row['lname'];
           $_SESSION['me_profile'] = $row['image'];
           $_SESSION['log_me_in'] = 1;
           echo "<script>location='../menu/menu_admin.php'</script>";
        }
    }else{
        echo "<script>alert('ຊື່ ຫຼື ລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ');window.history.back();</script>";
    }
?>