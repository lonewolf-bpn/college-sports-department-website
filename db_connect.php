<?PHP
$server = "localhost";
$username = "root";
$password = "";
$database = "entry";
$sql = mysqli_connect($server,$username,$password) or die("error400 somting went wrong,Could not connect to database");
$db_connect = mysqli_select_db($sql,$database);

?>
