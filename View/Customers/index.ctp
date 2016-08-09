<div class="widget-header block-header clearfix">
    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus')) . "&nbsp;<span>Tambah Customers</span>", array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-success')); ?> 
</div>
<div class="widget-container">

    <table class="table data-tbl">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('nama'); ?></th>
                <th><?php echo $this->Paginator->sort('alamat'); ?></th>
                <th><?php echo $this->Paginator->sort('telp'); ?></th>
                <th><?php echo $this->Paginator->sort('hp'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
			<td><?php echo h($customer['Customer']['id']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['nama']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['alamat']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['telp']); ?>&nbsp;</td>
			<td><?php echo h($customer['Customer']['hp']); ?>&nbsp;</td>
                    <td class="actions">
                <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-edit')) . "", array('action' => 'edit', $customer['Customer']['id']), array('title'=>'edit','escape' => false, 'class' => 'btn btn-primary btn-xs')); ?> 
    			<?php echo $this->Form->postLink(__('<i class="fa fa-trash-o"></i>'), array('action' => 'delete', $customer['Customer']['id']), array('title'=>'hapus','escape' => false, 'class' => 'btn btn-danger btn-xs'), __('Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?>
                    </td>
                </tr>
<?php endforeach; ?>
        </tbody>
    </table>
</div>

