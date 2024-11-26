<?php
    include('../conn.php');
    header('Content-Type: application/json');

    @$name = $_POST['name'];
    @$train = $_POST['train'];
    @$sheet = $_POST['sheet'];

    if($name != null && $train != null && $sheet != null){
        $query = "INSERT INTO `passenger` (`p_name`, `p_train`, `sheet`) VALUES ('$name', '$train', '$sheet')";

        $res = mysqli_query($conn, $query);

        if($res){
            echo 'paasenger added successfully!';
           http_response_code(200);

        }else{
           echo'paasenger add failed!'.$res;
           http_response_code(400);

        }
    }else{
        echo "All fields are required!";
    }

?>