<?php //echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-cart-plus')) . "&nbsp;<span>Cetak</span>", array('action' => ''), array('escape' => false, 'class' => 'btn btn-xs btn-success','id'=>'btnPrint')); 
		echo $this -> Html -> script(array('lib/min/jquery-min'));

?> 
<?php $this->layout=false;?>
<script>
    window.print();
</script>
<style>
    p{
        font-size: 21px;
    }
</style>
<!--<button id="btnPrint" class="btn btn-xs btn-success"><i class="fa fa-print"></i>&nbsp;Cetak</button>-->
<div id="print">
<div class="section-header" align="right">
    <h2>Order Yang Harus Dikerjakan</h2>
</div>
    <?php // print_r($data); ?>
    <table class="table" align="right">
        <tr>
            <td><p>No Order</p></td>
            <td>:</td>
            <td><?php echo $data[0]['penjualans']['noorder'];?></td>
        </tr>
        <tr>
            <td><p>Tanggal Order</p></td>
            <td>:</td>
            <td><?php echo $data[0]['penjualans']['created'];?></td>
        </tr>
        <tr>
            <td><p>Pemberi Order</p></td>
            <td>:</td>
            <td><?php echo $data[0]['karyawans']['nama'];?></td>
        </tr>
    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <table class="table">
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?php echo $data[0]['merks']['nama'];?></td>
    </tr>
    <tr>
        <td>Merk/Tipe Mobil</td>
        <td>:</td>
        <td><?php echo $data[0]['merks']['nama'];?>/<?php echo $data[0]['modele']['nama'];?></td>
    </tr>
    <tr>
        <td>No Polisi/Rangka/Mesin</td>
        <td>:</td>
        <td><?php echo $data[0]['penjualans']['nopol'];?>/<?php echo $data[0]['penjualans']['norangka'];?>/<?php echo $data[0]['penjualans']['nomesin'];?></td>
    </tr>
    <tr>
        <td>Nama Pemilik</td>
        <td>:</td>
        <td><?php echo $data[0]['customers']['nama'];?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $data[0]['customers']['alamat'];?></td>
    </tr>
    <tr>
        <td>No Telepon</td>
        <td>:</td>
        <td><?php echo $data[0]['customers']['hp'];?></td>
    </tr>
    <tr>
        <td>Sales</td>
        <td>:</td>
        <td><?php echo $data[0]['karyawans']['nama'];?></td>
    </tr>
    <tr>
        <td>Informasi Tambahan</td>
        <td>:</td>
        <td><?php echo $data[0]['detail_penjualans']['ket'];?></td>
    </tr>
    
</table>
    <table class="table table-striped" style="width: 500px; border: 1px solid gray;" id="order">
        <tr style="    background-color: gray;">
        <th>Bagian</th>
        <th>Nama Barang</th>
        
    </tr>
    <?php foreach ($data as $value): 
//     print_r($value);
        ?>
     
    <tr >
        <td><?php echo $value['categories']['kategori'];?></td>
        <td><?php echo $value['products']['nama_produk'];?></td>
       
    </tr>
    <?php endforeach;?>
</table>
</div>
<!--<a href="<?php echo $this->webroot;?>penjualans/add">Kembali</a>-->
<?php
		echo $this -> Html -> script(array('lib/jquery.printElement.min'));
	?>
<script type="text/javascript">
       $(document).ready(function() {
         $("#btnPrint").click(function() {
             printElem({});
         });

     });
 function printElem(options){
     $('#print').printElement(options);
 }

    </script>
 <style>
@media print 
{
  @page { margin: 0; }
  body  { margin: 1.6cm;font-size:10px; }
  table{ background-color: red;}
}
 </style>