<div class="widget-header block-header clearfix">
    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus')) . "&nbsp;<span>Tambah Merk</span>", array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-success')); ?> 
</div>
<div class="widget-container">
    <table class="table data-tbl">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('parent_id'); ?></th>
                <th><?php echo $this->Paginator->sort('lft'); ?></th>
                <th><?php echo $this->Paginator->sort('rght'); ?></th>
                <th><?php echo $this->Paginator->sort('nama'); ?></th>
                <th><?php echo $this->Paginator->sort('aktif'); ?></th>
                <th><?php echo $this->Paginator->sort('created'); ?></th>
                <th><?php echo $this->Paginator->sort('modified'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($submerk as $merk): ?>
                <tr>
                    <td><?php echo h($merk['Merk']['id']); ?>&nbsp;</td>
                    <td>
                        <?php echo $this->Html->link($merk['ParentMerk']['id'], array('controller' => 'merks', 'action' => 'view', $merk['ParentMerk']['id'])); ?>
                    </td>
                    <td><?php echo h($merk['Merk']['lft']); ?>&nbsp;</td>
                    <td><?php echo h($merk['Merk']['rght']); ?>&nbsp;</td>
                    <td><?php echo h($merk['Merk']['nama']); ?>&nbsp;</td>
                    <td><?php
                        if ($merk['Merk']['aktif'] == 1) {
                            echo "<button class='btn btn-success  btn-xs'><i class='zmdi zmdi-check zmdi-hc-fw'></i></button>";
                        } else {
                            echo "<button class='btn btn-danger  btn-xs'><i class='zmdi zmdi-minus-circle-outline zmdi-hc-fw'></i></button>";
                        }
                        ?>&nbsp;</td>
                    <td><?php echo h($merk['Merk']['created']); ?>&nbsp;</td>
                    <td><?php echo h($merk['Merk']['modified']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-edit')) . "", array('action' => 'edit', $merk['Merk']['id']), array('escape' => false, 'class' => 'btn btn-primary btn-xs')); ?> 
                        <?php echo $this->Form->postLink(__('<i class="fa fa-trash-o"></i>'), array('action' => 'delete', $merk['Merk']['id']), array('escape' => false, 'class' => 'btn btn-danger btn-xs'), __('Are you sure you want to delete # %s?', $merk['Merk']['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>