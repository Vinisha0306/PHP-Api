<?php
    include('../conn.php');
    header('Content-Type: application/json');

    @$name = $_POST['name'];
    @$first_dest = $_POST['first_dest'];
    @$last_dest = $_POST['last_dest'];
    @$time = $_POST['time'];
    @$paas = $_POST['paasengers'];
    @$id = $_POST['id'];

    if($name != null && $first_dest != null && $last_dest != null && $time != null && $paas != null && $id != null){
        $query = "UPDATE `train` SET `name` = '$name' , `first_dest` = '$first_dest' , `last_dest` = '$last_dest' , `time` = '$time' , `paasengers` = '$paas' where `id` = $id";

        $res = mysqli_query($conn, $query);

        if($res){
            echo 'train updated successfully!';
           http_response_code(200);

        }else{
           echo'train update failed!';
           http_response_code(400);
        }
    }else{
        echo "All fields are required!";
    }

?>