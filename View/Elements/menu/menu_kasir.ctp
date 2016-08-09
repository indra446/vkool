<ul class="list-accordion">
    <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'zmdi zmdi-home zmdi-hc-fw')) . "<span class='list-label'>Home</span>", array('controller' => 'pages', 'action' => 'home'), array('escape' => false)); ?>  </li>
    <li>
        <a href="#"><i class="zmdi zmdi-shopping-cart zmdi-hc-fw"></i><span class="list-label">Transaksi</span></a>
        <ul>
            <li> <?php echo $this->Html->link("Penjualan", array('controller' => 'Penjualans', 'action' => 'index'), array('escape' => false)); ?></li>
            <li> <?php echo $this->Html->link("Penjualan Outstanding", array('controller' => 'bahanbakuses', 'action' => 'index'), array('escape' => false)); ?></li>
            <li> <?php echo $this->Html->link("History Penjualan", array('controller' => 'Penjualans', 'action' => 'histori'), array('escape' => false)); ?></li>
        </ul>
    </li>
</ul>