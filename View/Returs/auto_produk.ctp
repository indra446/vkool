<?php
$this->layout=false;
echo '[';
foreach ($data as $value) {
//    print_r($value);
    echo '"'.$value['products']['id'].'|'.$value['products']['nama_produk'].'",';
    // $row['hp'] = $value['customers']['hp'];
    // $row['alamat'] = $value['customers']['alamat'];
    // $row_set[] = $row;
}
echo '""]';
// echo json_encode($row_set);
?>