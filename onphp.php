<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'combine_db';
$db_port = 8889;

$connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );

if(mysqli_connect_errno()):
  printf("Connect failed: %s\n", mysqli_connect_errno());
  exit();
endif;

if(isset($_POST['on'])) {
    echo "<br>";

    $my_query = "";

    $my_query = "select * from combine_table WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO combine_table (on_value) VALUES (1)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

$v1 = $_POST['v1'];
$v2 = $_POST['v2'];
$v3 = $_POST['v3'];
$v4 = $_POST['v4'];
$v5 = $_POST['v5'];
$v6 = $_POST['v6'];

if(isset($_POST['go'])){

    $my_query = "";

    $my_query = "select * from Motors WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO Motors (motor1, motor2, motor3, motor4, motor5, motor6) 
	              VALUES ('$v1', '$v2', '$v3', '$v4', '$v5', '$v6')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}

?>