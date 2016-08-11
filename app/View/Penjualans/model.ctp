<?php
foreach ($data as $value) {
    $row['value']=$value['models']['nama'];
    $row_set[] = $row;
}
echo json_encode($row_set);
?>