<?php 
    require '../connect.php';
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $username = $_POST['username'];
    $password = $_POST['password_1'];
    $confirmPassword = $_POST['password_2'];

    if($password != $confirmPassword){
        echo "
                <script src='https://code.jquery.com/jquery-3.6.1.min.js'></script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.1/sweetalert-dev.min.js'></script>
                <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.1/sweetalert.min.css'>
            ";
            echo "
            <script>
                setTimeout(function(){
                    swal({
                        title: 'ລະຫັດຜ່ານບໍ່ຕົງກັນ',
                        text: 'ກະລຸນາປ້ອນໃໝ່',
                        type: 'error'
                    },function(){
                        window.history.back();
                    })
                },500);
            </script>";
    }else{
        $password_hash = password_hash($password,PASSWORD_DEFAULT);
        $date = date('Ymd_His');
        $random = (mt_rand());
        $file_upload = "../upload/";
        $file_name = strrchr($_FILES['profile']['name'],".");
        $new_name = $random.$date.$file_name;
        $new_name_copy = $file_upload.$new_name;
        if(move_uploaded_file($_FILES['profile']['tmp_name'],$new_name_copy)){
            $stmt = $conn->prepare("INSERT INTO user(fname,lname,dob,username,password,image) VALUES(:fname,:lname,:dob,:username,:password_1,:profile)");
            $stmt->bindParam(":fname",$fname,PDO::PARAM_STR);
            $stmt->bindParam(":lname",$lname,PDO::PARAM_STR);
            $stmt->bindParam(":dob",$dob,PDO::PARAM_STR);
            $stmt->bindParam(":username",$username,PDO::PARAM_STR);
            $stmt->bindParam(":password_1",$password_hash,PDO::PARAM_STR);
            $stmt->bindParam(":profile",$new_name,PDO::PARAM_STR);
            if($stmt->execute()){
                echo "
                <script src='https://code.jquery.com/jquery-3.6.1.min.js'></script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.1/sweetalert-dev.min.js'></script>
                <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.1/sweetalert.min.css'>
            ";
            echo "
            <script>
                setTimeout(function(){
                    swal({
                        title: 'ບັນທືກຂໍ້ມູນສຳເລັດ',
                        type: 'success'
                    },function(){
                        window.loaction ='form_user.php';
                    })
                },500);
            </script>";
            }
        }
    }
?>

<style>
    *{
        font-family:Noto sans lao;
    }
</style>