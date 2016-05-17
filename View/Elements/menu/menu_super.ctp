<ul class="list-accordion">
    <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'zmdi zmdi-home zmdi-hc-fw')) . "<span class='list-label'>Home</span>", array('controller' => 'pages', 'action' => 'home'), array('escape' => false)); ?>  </li>

    <li>
        <a href="#"><i class="zmdi zmdi-truck zmdi-hc-fw"></i><span class="list-label">Produk</span></a>
        <ul>
            <li> <?php echo $this->Html->link("Kategori Produk", array('controller' => 'Categories', 'action' => 'index'), array('escape' => false)); ?></li>
            <li> <?php echo $this->Html->link("Produk", array('controller' => 'Products', 'action' => 'index'), array('escape' => false)); ?></li>

        </ul>
    </li>
<!--    <li>
        <a href="#"><i class="zmdi zmdi-truck zmdi-account"></i><span class="list-label">Role</span></a>
        <ul>
            <li> <?php echo $this->Html->link("Role List", array('controller' => 'roles', 'action' => 'index'), array('escape' => false)); ?></li>           
        </ul>
    </li>-->
    <li>
        <a href="#"><i class="zmdi zmdi-truck zmdi-accounts-alt"></i><span class="list-label">Karyawan</span></a>
        <ul>
            <li> <?php echo $this->Html->link("Daftar Karyawan", array('controller' => 'karyawans', 'action' => 'index'), array('escape' => false)); ?></li>
            <!--<li> <?php // echo $this->Html->link("List", array('controller' => 'Products', 'action' => 'index'), array('escape' => false)); ?></li>-->

        </ul>
    </li>
    <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'zmdi zmdi-store zmdi-hc-fw')) . "<span class='list-label'>Vendor</span>", array('controller' => 'Vendors', 'action' => 'index'), array('escape' => false)); ?>  </li>
    <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'zmdi zmdi-shopping-cart zmdi-hc-fw')) . "<span class='list-label'>Pembelian</span>", array('controller' => 'Pembelians', 'action' => 'index'), array('escape' => false)); ?>  </li>
    <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'zmdi zmdi-shopping-cart zmdi-hc-fw')) . "<span class='list-label'>Penjualan</span>", array('controller' => 'Penjualans', 'action' => 'index'), array('escape' => false)); ?>  </li>
    <li>
        <a href="#"><i class="zmdi zmdi-settings zmdi-hc-fw"></i><span class="list-label">Setting</span></a>
        <ul>
            <li> <?php echo $this->Html->link("Role", array('controller' => 'Groups', 'action' => 'index'), array('escape' => false)); ?></li>
            <li> <?php echo $this->Html->link("User", array('controller' => 'Users', 'action' => 'index'), array('escape' => false)); ?></li>
            <li> <?php echo $this->Html->link("Merk", array('controller' => 'Merks', 'action' => 'index'), array('escape' => false)); ?></li>
            <li> <?php echo $this->Html->link("Model", array('controller' => 'Submerks', 'action' => 'index'), array('escape' => false)); ?></li>

        </ul>
    </li>

</ul>