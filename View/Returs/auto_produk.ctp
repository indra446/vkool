<?php
$this->layout=false;
echo '[';
foreach ($data as $value) {
//    print_r($value);
    echo '"'.$value['bahanbakus']['id'].'|'.$value['products']['nama_produk'] .' ( '.$value['bahanbakus']['dm1'].' x '.$value['bahanbakus']['dm2'].' ) mm",';
    // $row['hp'] = $value['customers']['hp'];
    // $row['alamat'] = $value['customers']['alamat'];
    // $row_set[] = $row;
}
echo '""]';
// echo json_encode($row_set);
?>