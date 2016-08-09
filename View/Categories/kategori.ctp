<?php
$this->layout=false;
// debug($data)
	echo "<option value=''>Sub Kategori</option>";
foreach ($data as $d){
	echo "<option value='".$d['Category']['id']."'>".$d['Category']['kategori']."</option>";
}
?>