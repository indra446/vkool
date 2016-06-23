<?php

foreach ($data as $value) {
//    print_r($value);
    $row['value'] = $value['customers']['nama'];
    $row['hp'] = $value['customers']['hp'];
    $row['alamat'] = $value['customers']['alamat'];
    $row_set[] = $row;
}
echo json_encode($row_set);
?>