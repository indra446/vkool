<div class="widget-header block-header clearfix">
    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus')) . "&nbsp;<span>Tambah Merk</span>", array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-success')); ?> 
</div>
<div class="widget-container">
    <table class="table data-tbl">
        <thead>
            <tr>
                <th>ID</th>
                <th>Merk</th>
                <th>Merk/Model</th>
                <th>Aktif</th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($merks as $merk): ?>
                <tr>
                    <td><?php echo h($merk['Merk']['id']); ?>&nbsp;</td>
					<td><?php echo h($merk['ParentMerk']['nama']); ?>&nbsp;</td>
                    <td><?php echo h($merk['Merk']['nama']); ?>&nbsp;</td>
                    <td><?php
                        if ($merk['Merk']['aktif'] == 1) {
                            echo "<button class='btn btn-success  btn-xs'><i class='zmdi zmdi-check zmdi-hc-fw'></i></button>";
                        } else {
                            echo "<button class='btn btn-danger  btn-xs'><i class='zmdi zmdi-minus-circle-outline zmdi-hc-fw'></i></button>";
                        }
                        ?>&nbsp;</td>

                    <td class="actions">
                        <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-edit')) . "", array('action' => 'edit', $merk['Merk']['id']), array('escape' => false, 'class' => 'btn btn-primary btn-xs')); ?> 
                        <?php echo $this->Form->postLink(__('<i class="fa fa-trash-o"></i>'), array('action' => 'delete', $merk['Merk']['id']), array('escape' => false, 'class' => 'btn btn-danger btn-xs'), __('Are you sure you want to delete # %s?', $merk['Merk']['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>