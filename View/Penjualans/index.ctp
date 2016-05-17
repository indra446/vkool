<div class="widget-header block-header clearfix">
    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-cart-plus')) . "&nbsp;<span>Tambah Penjualan</span>", array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-success')); ?> 
</div>
<div class="widget-container">
        <table class="table data-tbl">
               <thead>
               <tr>
               <th><?php echo $this->Paginator->sort('id'); ?></th>
               <th><?php echo $this->Paginator->sort('customer_id'); ?></th>
               <th><?php echo $this->Paginator->sort('merk_id'); ?></th>
               <th><?php echo $this->Paginator->sort('thn'); ?></th>
               <th><?php echo $this->Paginator->sort('nopol'); ?></th>
               <th><?php echo $this->Paginator->sort('nomesin'); ?></th>
               <th><?php echo $this->Paginator->sort('norangka'); ?></th>
               <th><?php echo $this->Paginator->sort('user_id'); ?></th>
               <th><?php echo $this->Paginator->sort('created'); ?></th>
               <th><?php echo $this->Paginator->sort('modified'); ?></th>
               <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($penjualans as $penjualan): ?>
                    <tr>
                        <td><?php echo h($penjualan['Penjualan']['id']); ?>&nbsp;</td>
                        <td>
                            <?php echo $this->Html->link($penjualan['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $penjualan['Customer']['id'])); ?>
                        </td>
                        <td>
                            <?php echo $this->Html->link($penjualan['Merk']['id'], array('controller' => 'merks', 'action' => 'view', $penjualan['Merk']['id'])); ?>
                        </td>
                        <td><?php echo h($penjualan['Penjualan']['thn']); ?>&nbsp;</td>
                        <td><?php echo h($penjualan['Penjualan']['nopol']); ?>&nbsp;</td>
                        <td><?php echo h($penjualan['Penjualan']['nomesin']); ?>&nbsp;</td>
                        <td><?php echo h($penjualan['Penjualan']['norangka']); ?>&nbsp;</td>
                        <td>
                            <?php echo $this->Html->link($penjualan['User']['tb_skpd_id'], array('controller' => 'users', 'action' => 'view', $penjualan['User']['id'])); ?>
                        </td>
                        <td><?php echo h($penjualan['Penjualan']['created']); ?>&nbsp;</td>
                        <td><?php echo h($penjualan['Penjualan']['modified']); ?>&nbsp;</td>
                        <td class="actions">
                            <?php echo $this->Html->link(__('View'), array('action' => 'view', $penjualan['Penjualan']['id'])); ?>
                            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $penjualan['Penjualan']['id'])); ?>
                            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $penjualan['Penjualan']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $penjualan['Penjualan']['id']))); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>