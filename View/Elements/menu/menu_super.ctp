<ul class="list-accordion">
    <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'zmdi zmdi-home zmdi-hc-fw')) . "<span class='list-label'>Home</span>", array('controller' => 'pages', 'action' => 'home'), array('escape' => false)); ?>  </li>

    <li>
        <a href="#"><i class="zmdi zmdi-dropbox"></i><span class="list-label">Produk</span></a>
        <ul>
            <li> <?php echo $this->Html->link("Kategori Produk", array('controller' => 'Categories', 'action' => 'index'), array('escape' => false)); ?></li>
            <li> <?php echo $this->Html->link("Produk", array('controller' => 'Products', 'action' => 'index'), array('escape' => false)); ?></li>

        </ul>
    </li>
    <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'zmdi zmdi-truck zmdi-accounts-alt')) . "<span class='list-label'>Karyawan</span>", array('controller' => 'karyawans', 'action' => 'index'), array('escape' => false)); ?>  </li>
    <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'zmdi zmdi-store zmdi-hc-fw')) . "<span class='list-label'>Vendor</span>", array('controller' => 'Vendors', 'action' => 'index'), array('escape' => false)); ?>  </li>
    <li>
        <a href="#"><i class="zmdi zmdi-shopping-cart zmdi-hc-fw"></i><span class="list-label">Transaksi</span></a>
        <ul>
            <li> <?php echo $this->Html->link("Pembelian", array('controller' => 'Pembelians', 'action' => 'index'), array('escape' => false)); ?></li>
            <li> <?php echo $this->Html->link("Penjualan", array('controller' => 'Penjualans', 'action' => 'index'), array('escape' => false)); ?></li>
        </ul>
    </li>
    <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'zmdi zmdi-truck')) . "<span class='list-label'>Inventory</span>", array('controller' => 'Products', 'action' => 'stock'), array('escape' => false)); ?>  </li>
    <!-- <li>
        <a href="#"><i class="zmdi zmdi-file-text"></i><span class="list-label">Laporan</span></a>
        <ul>
            <li> <?php echo $this->Html->link("Laba Rugi", array('controller' => 'Products', 'action' => 'LabaRugi'), array('escape' => false)); ?></li>
        </ul>
    </li> -->
    <li>
        <a href="#"><i class="zmdi zmdi-settings zmdi-hc-fw"></i><span class="list-label">Pengaturan</span></a>
        <ul>
            <li> <?php echo $this->Html->link("Role", array('controller' => 'Groups', 'action' => 'index'), array('escape' => false)); ?></li>
            <li> <?php echo $this->Html->link("User", array('controller' => 'Users', 'action' => 'index'), array('escape' => false)); ?></li>
            <li> <?php echo $this->Html->link("Merk", array('controller' => 'Merks', 'action' => 'index'), array('escape' => false)); ?></li>
            <li> <?php echo $this->Html->link("Bank", array('controller' => 'Banks', 'action' => 'index'), array('escape' => false)); ?></li>

        </ul>
    </li>

</ul>