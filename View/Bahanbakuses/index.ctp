<div class="widget-header block-header clearfix">
    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus')) . "&nbsp;<span>Tambah Item</span>", array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-success')); ?> 
</div>
<div class="widget-container">
	<table class="table data-tbl">
	<thead>
	<tr>
			<th>Kategori</th>
			<th>Nama</th>
			<th>Qty</th>
			<th>Harga</th>
			<th>Subtotal</th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($bahanbakuses as $bahanbakus): ?>
	<tr>
		<td><?php echo h($bahanbakus['Bahanbakus']['id']); ?>&nbsp;</td>
		<td><?php echo h($bahanbakus['Bahanbakus']['product_id']); ?>&nbsp;</td>
		<td><?php echo h($bahanbakus['Bahanbakus']['id_teknisi']); ?>&nbsp;</td>
                <td><?php echo h($bahanbakus['Bahanbakus']['penjualan_id']); ?>&nbsp;</td>
                <td><?php echo h($bahanbakus['Bahanbakus']['subtotal']); ?>&nbsp;</td>
		
		<td class="actions">
                <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-edit')) . "", array('action' => 'edit', $bahanbakus['Bahanbakus']['id']), array('title'=>'edit','escape' => false, 'class' => 'btn btn-primary btn-xs')); ?> 
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Bahanbakus'), array('action' => 'add')); ?></li>
	</ul>
</div>
