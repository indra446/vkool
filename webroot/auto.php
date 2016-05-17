<?php
$hostmysql = "localhost";
$username = "root";
$password = "";
$conn_mysql = new mysqli($hostmysql, $username, $password);
if ($conn_mysql->connect_error) {
    die("Connection mysql failed: " . $conn_mysql->connect_error);
} else {
//    echo "Connected to mysql2 successfully";
}
$selectmysql_db = mysqli_select_db($conn_mysql, "vkool");

$q = $_GET['term']; // variabel $q untuk mengambil inputan user
$sql = ("SELECT * FROM `customers` WHERE nama LIKE '%" . $q . "%' ");

$result = mysqli_query($conn_mysql, $sql);
while ($data = $result->fetch_assoc()) {
    $row['value'] = $data['nama'];
    $row['hp'] = $data['hp'];
    $row['alamat'] = $data['alamat'];
    $row_set[]        =$row;
}

//echo json_encode($result);
echo json_encode($row_set);
?>