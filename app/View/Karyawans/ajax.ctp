<?php 
foreach ($karyawans as $karyawan) {
//    print_r($karyawan);
 $row['value']=$karyawan['Karyawan']['nama'].'-'.$karyawan['Karyawan']['id'];
 $row['id']=(int)$karyawan['Karyawan']['id'];
 $row_set[] = $row;
}
//data hasil query yang dikirim kembali dalam format json
echo json_encode($row_set);
?>