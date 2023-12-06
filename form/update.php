<?php 
    require '../connect.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $date = $_POST['date'];
    $update = $conn->prepare("UPDATE list SET name = :name,price =:price,date = :date WHERE id = :id");
    $update->bindParam(':id',$id,PDO::PARAM_INT);
    $update->bindParam(':name',$name,PDO::PARAM_STR);
    $update->bindParam(':price',$price,PDO::PARAM_STR);
    $update->bindParam(':date',$date,PDO::PARAM_STR);
    if($update->execute()){
        echo "<script>alert('ແກ້ໄຂຂໍ້ມູນສຳເລັດ');location='select.php'</script>";
    }
    
?>