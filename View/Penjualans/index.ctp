<div class="widget-header block-header margin-bottom-0 clearfix">
    <div class="pull-left">
        <h3>Penjualan</h3>
    </div>
</div>
<br>
<div class="widget-header block-header clearfix">
	<div class="btn-group btn-group-justified">
    <?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-cart-plus')) . "&nbsp;<span>Tambah Penjualan</span>", array('controller' => 'Penjualans','action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
    <?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-shopping-cart','aria-hidden'=>true)) . "&nbsp;<span>Daftar Penjualan Outstanding</span>", array('controller' => 'bahanbakuses'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
    <?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-file-text-o')) . "&nbsp;<span>History Penjualan</span>", array('controller' => 'Penjualans','action' => 'histori'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
     </div>
</div>
<div class="widget-container">
    <table class="table data-tbl">
        <thead>
            <tr>
                <th><?php echo $this -> Paginator -> sort('id'); ?></th>
                <th><?php echo $this -> Paginator -> sort('customer_id'); ?></th>
                <th><?php echo $this -> Paginator -> sort('merk_id'); ?></th>
                <th><?php echo $this -> Paginator -> sort('thn'); ?></th>
                <th><?php echo $this -> Paginator -> sort('nopol'); ?></th>
                <th><?php echo $this -> Paginator -> sort('nomesin'); ?></th>
                <th><?php echo $this -> Paginator -> sort('norangka'); ?></th>
                <th><?php echo $this -> Paginator -> sort('user_id'); ?></th>
                <th><?php echo $this -> Paginator -> sort('created'); ?></th>
                <th><?php echo $this -> Paginator -> sort('modified'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($penjualans as $penjualan):
//                print_r($penjualan);exit;?>
                <tr>
                    <td><?php echo h($penjualan['Penjualan']['id']); ?>&nbsp;</td>
                    <td>
                        <?php echo $penjualan['Customer']['nama']; ?>
                    </td>
                    <td>
                        <?php echo $penjualan['Merk']['nama']; ?>
                    </td>
                    <td><?php echo h($penjualan['Penjualan']['thn']); ?>&nbsp;</td>
                    <td><?php echo h($penjualan['Penjualan']['nopol']); ?>&nbsp;</td>
                    <td><?php echo h($penjualan['Penjualan']['nomesin']); ?>&nbsp;</td>
                    <td><?php echo h($penjualan['Penjualan']['norangka']); ?>&nbsp;</td>
                    <td>
                        <?php echo $this -> Html -> link($penjualan['User']['nama_admin'], array('controller' => 'users', 'action' => 'view', $penjualan['User']['id'])); ?>
                    </td>
                    <td><?php echo h($penjualan['Penjualan']['created']); ?>&nbsp;</td>
                    <td><?php echo h($penjualan['Penjualan']['modified']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this -> Html -> link($this -> Html -> tag('i', '', array('class' => 'fa fa-edit')) . "", array('action' => 'edit', $penjualan['Penjualan']['id']), array('escape' => false, 'class' => 'btn btn-primary btn-xs')); ?> 
                        <?php echo $this -> Form -> postLink(__('<i class="fa fa-trash-o"></i>'), array('action' => 'delete', $penjualan['Penjualan']['id']), array('escape' => false, 'class' => 'btn btn-danger btn-xs'), __('Are you sure you want to delete # %s?', $penjualan['Customer']['nama'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>