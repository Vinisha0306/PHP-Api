<?php
    include('../conn.php');
    header('Content-Type: application/json');
    @$id = $_POST['id'];

    if($id != null){
        $query = "DELETE FROM `staff` WHERE s_id = '$id'";

        $res = mysqli_query($conn, $query);

        if($res){
            echo 'staff delete successfully!';
           http_response_code(200);

        }else{
           echo'staff delete failed!';
           http_response_code(400);
        }
    }else{
        echo "All fields are required!";
    }

?>