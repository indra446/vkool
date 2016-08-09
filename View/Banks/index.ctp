<div class="widget-header block-header margin-bottom-0 clearfix">
    <div class="pull-left">
        <h3>Bank</h3>
    </div>
</div>
<br>
<div class="widget-header block-header clearfix">
    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus')) . "&nbsp;<span>Tambah Bank</span>", array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-success')); ?> 
</div>
<div class="widget-container">

    <table class="table data-tbl">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('nama bank'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($banks as $bank):?>
            
                <tr>
                    <td><?php echo h($bank['Bank']['id']); ?>&nbsp;</td>
                    <td><?php echo h($bank['Bank']['nama']); ?>&nbsp;</td>
                    <td><?php if ($bank['Bank']['aktif'] == 1) {
                        echo "<button class='btn btn-success  btn-xs'><i class='zmdi zmdi-check zmdi-hc-fw'></i></button>";
                    } else {
                        echo "<button class='btn btn-danger  btn-xs'><i class='zmdi zmdi-minus-circle-outline zmdi-hc-fw'></i></button>";
                    } ?>&nbsp;</td>
                    <td class="actions">
                <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-edit')) . "", array('action' => 'edit', $bank['Bank']['id']), array('escape' => false, 'class' => 'btn btn-primary btn-xs')); ?> 
    <?php echo $this->Form->postLink(__('<i class="fa fa-trash-o"></i>'), array('action' => 'delete', $bank['Bank']['id']), array('escape' => false, 'class' => 'btn btn-danger btn-xs'), __('Are you sure you want to delete # %s?', $bank['Bank']['id'])); ?>
                    </td>
                </tr>
<?php endforeach; ?>
        </tbody>
    </table>
</div>