<?php
    include('../conn.php');
    header('Content-Type: application/json');

    $query = "SELECT * FROM passenger";
    $res = mysqli_query($conn, $query);

    $arr = array();

        if($res){
            while($row = mysqli_fetch_assoc($res)){
                $arr[] = $row;
            }       
            echo json_encode($arr);
           http_response_code(200);

        }else{
           echo'paasenger failed!';
           http_response_code(400);

        }

?>