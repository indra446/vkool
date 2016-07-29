<?php
$this->layout=false;
// debug($data)
foreach ($data as $d){
//    print_r($d);
	echo "<option value='".$d['Product']['id']."'>".$d['Product']['nama_produk']."</option>";
}
?>