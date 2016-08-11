<?php

foreach ($data as $value) {
    $row['value'] = $value['products']['id'].'|'.$value['products']['nama_produk'];
    $row_set[] = $row;
}
echo json_encode($row_set);
?>