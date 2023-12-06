<?php 
    require '../connect.php';
    $name = $_POST['name'];
    $price = $_POST['price'];
    $date  = $_POST['date'];
    $insert = $conn->prepare("INSERT INTO list(name,price,date) VALUES(?,?,?)");
    if($insert->execute([$name,$price,$date])){
        echo "<script>alert('ບັນທືກຂໍ້ມູນສຳເລັດ');location='form.php'</script>";
    }
    
?>