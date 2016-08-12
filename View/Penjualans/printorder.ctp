Order Yang Harus dikerjakan
<table>
    <tr>
        <td>Order Yang Harus dikerjakan</td>
        <td>:</td>
    </tr>
</table>
<table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?php echo $data[0]['merks']['nama'];?></td>
    </tr>
    <tr>
        <td>Merk/Tipe Mobil</td>
        <td>:</td>
        <td><?php echo $data[0]['merks']['nama'];?></td>
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
        <td>Yang Mengerjakan</td>
        <td>:</td>
        <td><?php echo $data[0]['karyawans']['nama'];?></td>
    </tr>
    <tr>
        <td>Tanggal Pengerjaan</td>
        <td>:</td>
        <td><?php echo $data[0]['bahanbakus']['created'];?></td>
    </tr>
</table>
<table class="table">
    <tr>
        <th>Bagian</th>
        <th>Nama Barang</th>
        
    </tr>
    <?php foreach ($data as $value): 
//     print_r($value);
        ?>
     
    <tr>
        <td><?php echo $value['categories']['kategori'];?></td>
        <td><?php echo $value['products']['nama_produk'];?></td>
       
    </tr>
    <?php endforeach;?>
</table>
<a href="#">Kembali</a>