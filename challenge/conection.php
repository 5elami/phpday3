
<?php 

$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "restaurant";

// create connection
$connect = mysqli_connect($localhost, $username, $password, $dbname);
// check connection
if (!$connect) {
   die("Connection failed: " . mysqli_connect_error());
}else {

    // echo "Connected successfully";

}

$sql = "SELECT * FROM dishes";

$result = mysqli_query($connect, $sql);

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>