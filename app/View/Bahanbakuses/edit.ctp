<div class="bahanbakuses form">
<?php echo $this->Form->create('Bahanbakus'); ?>
	<fieldset>
		<legend><?php echo __('Edit Bahanbakus'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('depan');
		echo $this->Form->input('samping');
		echo $this->Form->input('blkg');
		echo $this->Form->input('sisa');
		echo $this->Form->input('id_teknisi');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Bahanbakus.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Bahanbakus.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Bahanbakuses'), array('action' => 'index')); ?></li>
	</ul>
</div>
