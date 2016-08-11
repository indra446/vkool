<?php 
$this->layout=false;
// debug($d);
 echo $this->Html->link(__('Delete'), array('action' => 'delete', $data[0]['Pembelian']['nomor']),array('class'=>'btn btn-danger')); 
// echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $d['Gakin']['id']), array('class'=>'btn btn-danger', 'escape' => false), __('Are you sure you want to delete # %s?', $d['Gakin']['id'])); ?>
<button class="btn btn-info" data-dismiss="modal" aria-hidden="true" id="klose">Close</button>
