<?php
    include('../conn.php');
    header('Content-Type: application/json');

    @$name = $_POST['name'];
    @$first_dest = $_POST['first_dest'];
    @$last_dest = $_POST['last_dest'];
    @$time = $_POST['time'];
    @$paas = $_POST['paasengers'];

    if($name != null && $first_dest != null && $last_dest != null && $time != null && $paas != null){
        $query = "INSERT INTO train (`name`, `first_dest`, `last_dest`, `time`, `paasengers`) VALUES ('$name', '$first_dest', '$last_dest', '$time', '$paas')";

        $res = mysqli_query($conn, $query);

        if($res){
            echo 'train added successfully!';
           http_response_code(200);

        }else{
           echo'train failed!';
           http_response_code(400);

        }
    }else{
        echo "All fields are required!";
    }

?>