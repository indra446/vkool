<?php
$this->layout=false;
// debug($data)
foreach ($data as $d){
	echo "<option value='".$d['Category']['id']."'>".$d['Category']['kategori']."</option>";
}
?>