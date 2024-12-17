
<?php
    $servername = getenv('DB_HOST');
    $username = getenv('DB_USER');
    $password = getenv('DB_PASS');
    $database = getenv('DB_NAME');
    
    try {
        //connect with database
        $connect = mysqli_connect($servername,$username,$password,$database);
        if (!$connect) {
            die("connection failed".mysqli_connect_error());
        } 
        else {
            //echo "Connected successfully";
        }
    } 
    catch (Exception $e) {
        die($e->getMessage());
    }
?>
