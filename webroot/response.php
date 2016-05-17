<?php
$hostmysql = "localhost";
$username = "root";
$password = "";
$database = "dbklinik";

$conn = mysql_connect("$hostmysql", "$username", "$password");
if (!$conn)
	die("Gagal Melakukan Koneksi");
mysql_select_db($database, $conn) or die("Database Tidak Diketemukan di Server");
$thn = mysql_query("select * from daftars where created='".date('Y-m-d')."'");
$d = mysql_num_rows($thn);
echo $d;
?>
