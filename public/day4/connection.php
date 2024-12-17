
<?php
    $servername = getenv('DB_HOST');
    $username = getenv('DB_USER');
    $password = getenv('DB_PASS');
    $database = getenv('DB_NAME');

    try {
        $connection = mysqli_connect($servername,$username,$password,$database);

        if (!$connection) {
            die("connection failed" .mysqli_connect_error());
        } 
        else {
            echo "Database is connected successfully <br><br>";
        }
    } 
    catch (Exception $e) {
        die($e->getMessage());
    }
?>
