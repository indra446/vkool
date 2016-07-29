<div class="widget-header block-header clearfix">
    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus')) . "&nbsp;<span>Tambah Karyawan</span>", array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-success')); ?> 
</div>
<div class="widget-container">

    <table class="table data-tbl">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('no_ktp'); ?></th>
                <th><?php echo $this->Paginator->sort('nama'); ?></th>
                <th><?php echo $this->Paginator->sort('alamat'); ?></th>
                <?php if ($grup == 1) { ?> <th><?php echo $this->Paginator->sort('Keterangan'); ?></th><?php } ?>
                <th><?php echo $this->Paginator->sort('aktif'); ?></th>
                <th><?php echo $this->Paginator->sort('Tanggal join'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($karyawans as $karyawan): ?>
                <tr>
                    <td><?php echo h($karyawan['Karyawan']['id']); ?>&nbsp;</td>
                    <td><?php echo h($karyawan['Karyawan']['no_ktp']); ?>&nbsp;</td>
                    <td><?php echo h($karyawan['Karyawan']['nama']); ?>&nbsp;</td>
                    <td><?php echo h($karyawan['Karyawan']['alamat']); ?>&nbsp;</td>
                    <?php if ($grup == 1) { ?> <td><?php echo h($karyawan['Karyawan']['ket']); ?>&nbsp;</td></th><?php } ?>
                    <td><?php if ($karyawan['Karyawan']['aktif'] == 1) {
                        echo "<button class='btn btn-success  btn-xs'><i class='zmdi zmdi-check zmdi-hc-fw'></i></button>";
                    } else {
                        echo "<button class='btn btn-danger  btn-xs'><i class='zmdi zmdi-minus-circle-outline zmdi-hc-fw'></i></button>";
                    } ?>&nbsp;</td>
                    <td><?php echo h($karyawan['Karyawan']['date_join']); ?>&nbsp;</td>
                    <td class="actions">
                <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-edit')) . "", array('action' => 'edit', $karyawan['Karyawan']['id']), array('title'=>'edit','escape' => false, 'class' => 'btn btn-primary btn-xs')); ?> 
    			<?php echo $this->Form->postLink(__('<i class="fa fa-trash-o"></i>'), array('action' => 'delete', $karyawan['Karyawan']['id']), array('title'=>'hapus','escape' => false, 'class' => 'btn btn-danger btn-xs'), __('Are you sure you want to delete # %s?', $karyawan['Karyawan']['id'])); ?>
                    </td>
                </tr>
<?php endforeach; ?>
        </tbody>
    </table>
</div>