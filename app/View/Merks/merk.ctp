<?php
$this->layout=false;
// debug($data)
foreach ($data as $d){
	echo "<option value='".$d['Merk']['id']."'>".$d['Merk']['nama']."</option>";
}
?>