<?php
    include('../conn.php');
    header('Content-Type: application/json');

    @$name = $_POST['name'];

    if($name != null ){
        $query = "INSERT INTO `staff` (`s_name`) VALUES ('$name')";

        $res = mysqli_query($conn, $query);

        if($res){
            echo 'staff added successfully!';
           http_response_code(200);

        }else{
           echo'staff add failed!'.$res;
           http_response_code(400);

        }
    }else{
        echo "All fields are required!";
    }

?>