<?php
    include('../conn.php');
    header('Content-Type: application/json');

    @$name = $_POST['name'];
    @$id = $_POST['id'];

    if($name != null && $id != null){
        $query = "UPDATE `staff` SET `s_name` = '$name' where `s_id` = $id";

        $res = mysqli_query($conn, $query);

        if($res){
            echo 'staff updated successfully!';
           http_response_code(200);

        }else{
           echo'staff update failed!';
           http_response_code(400);
        }
    }else{
        echo "All fields are required!";
    }

?>