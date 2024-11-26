<?php
    include('../conn.php');
    header('Content-Type: application/json');

    @$name = $_POST['name'];
    @$train = $_POST['train'];
    @$sheet = $_POST['sheet'];
    @$id = $_POST['id'];

    if($name != null && $train != null && $sheet != null && $id != null){
        $query = "UPDATE `passenger` SET `p_name` = '$name' , `p_train` = '$train' , `sheet` = '$sheet' where `p_id` = $id";

        $res = mysqli_query($conn, $query);

        if($res){
            echo 'paasenger updated successfully!';
           http_response_code(200);

        }else{
           echo'paasenger update failed!';
           http_response_code(400);
        }
    }else{
        echo "All fields are required!";
    }

?>