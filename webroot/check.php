<?php
$hostmysql = "localhost";
$username = "root";
$password = "";
$database = "dbklinik";

$conn = mysql_connect("$hostmysql", "$username", "$password");
if (!$conn)
	die("Gagal Melakukan Koneksi");
mysql_select_db($database, $conn) or die("Database Tidak Diketemukan di Server");
$thn = mysql_query("select * from obats where id='".$_POST['id']."'");
$d = mysql_fetch_array($thn);
$sisa= $d['jumlah']-($_POST['qty']);
echo $sisa;
?>
