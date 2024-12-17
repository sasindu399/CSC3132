
<?php
define('SERVERNAME', '127.0.0.1:3306');
define('USERNAME', 'root');
define('PASSWORD', 'mariadb');
define('DBNAME', 'school');

try {
    $connection = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
} catch (Exception $e) {
    die($e->getMessage());
}
?>
