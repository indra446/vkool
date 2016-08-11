<table class="table-bordered">
    <tr>
        <td>Total</td>
        <td>:</td>
        <td><?php echo $totals[0][0]['total'];?></td>
    </tr>
    <tr>
        <td>Discount</td>
        <td>:</td>
        <td><?php echo $disc[0]['detail_penjualans']['disc'];?></td>
    </tr>
    <tr>
        <td>Hidden Discount</td>
        <td>:</td>
        <td><?php echo $disc[0]['detail_penjualans']['hidden_disc'];?></td>
    </tr>
     <tr>
        <td>Total Tagihan</td>
        <td>:</td>
        <td></td>
    </tr>
    <tr>
        <td>Pembayaran</td>
        <td>:</td>
        <td></td>
    </tr>
    <tr>
        <td>Sisa Tagihan</td>
        <td>:</td>
        <td></td>
    </tr>
    <tr>
        <td>Metode Pembayaran</td>
        <!--<td>:</td>-->
        <td><?php echo $this->Form->create('Bayar', array('class' => 'form-horizontal j-forms')); ?>
            <?php echo $this->Form->input('tipe_bayar',array('id'=>'tipebayar','options' => array('Tunai'=>'Tunai','Debit'=>'Debit','Kartu Kredit'=>'Kartu Kredit'),'class' => 'form-control','label'=>false)); ?>
        
        </td>
    </tr>
    <tr>
        <td>Keterangan</td>
        <td> <?php echo $this->Form->input('ket',array('class'=>'form-control','label'=>false,'type'=>'textarea')); ?></td>
    </tr>
    <tr>
        <td>Bayar</td>
        <td>
 <?php echo $this->Form->input('bayar',array('class'=>'form-control','label'=>false)); ?>
 <?php echo $this->Form->input('id_penjualan',array('class'=>'form-control','label'=>false,'value'=>$id,'type'=>'hidden')); ?>
        </td>
    </tr>
    <tr>
        <td>Kurang Bayar</td>
        <td> <?php echo $this->Form->input('kubayar',array('class'=>'form-control','label'=>false)); ?></td>
    </tr>
    <tr>
        <td></td>
        <td><?php echo $this->Form->button('Simpan', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>

    <?php echo $this->Form->end(); ?></td>
    </tr>
</table>