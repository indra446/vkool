                <li>
                    <?php echo $this->Html->link(__('Berita'), array('controller' => 'TbNews', 'action' => 'index')); ?>
                    
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Rekap <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    <li><?php echo $this->Html->link(__('Usulan MUSRENBANG'), array('controller' => 'TbMusrenbangs', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('Rencana Kegiatan'), array('controller' => 'TbRenjas', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('KUA-PPAS'), array('controller' => 'tindakans', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('Evaluasi RKPD'), array('controller' => 'tindakans', 'action' => 'index')); ?></li>
                    
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pengaturan <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    <li><?php echo $this->Html->link(__('User/Pengguna'), array('controller' => 'Users', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('Atur Tahun Anggaran'), array('controller' => 'TbBatasAnggarans', 'action' => 'index')); ?></li>
                    
                    </ul>
                </li>
                