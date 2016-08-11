

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<table class="table">
    <tr>
        <th>Nomo Nota</th>
        <th>Nama</th>
        <th>Jumlah</th>
        <th>Harga</th>
    </tr>
    <?php foreach ($data as $da): 
   
        ?>
    <tr>
        <td><?php echo $da['penjualans']['nomor'];?></td>
        <td><?php echo $da['products']['nama_produk'];?></td>
        <td><?php echo $da['detail_penjualans']['qty'];?></td>
        <td><?php echo $da['detail_penjualans']['harga'];?></td>
    </tr>
    <?php     endforeach;?>
</table>