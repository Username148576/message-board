<?php //建立資料庫
/*$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE member_db";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();*/
?>
<?php //建立資料表
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "member_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE User (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(50) NOT NULL,
passwd VARCHAR(30) NOT NULL,
account VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();*/
?>
<?php //建立資料表
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "member_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Notes (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
account VARCHAR(30) NOT NULL,
notes VARCHAR(50) NOT NULL,
note_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();*/
?>
<?php //刪除資料庫
/*$servername = 'localhost';  
$username = 'root';            
$password = '';          
$conn = mysqli_connect($servername, $username, $password);
if(! $conn )
{
    die('連線失敗: ' . mysqli_error($conn));
}
echo '連線成功<br />';
$sql = 'DROP DATABASE member_db';
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
    die('刪除資料庫失敗: ' . mysqli_error($conn));
}
echo "資料庫 ITREAD01 刪除成功\n";
mysqli_close($conn);*/
?>

