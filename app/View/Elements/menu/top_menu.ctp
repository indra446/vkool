                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Setup User <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    <li><?php echo $this->Html->link(__('Group User'), array('controller' => 'groups', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('User'), array('controller' => 'users', 'action' => 'index')); ?></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Setup Data <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    <li><?php echo $this->Html->link(__('Golongan Obat'), array('controller' => 'golongan_obats', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('Obat'), array('controller' => 'obats', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('Tindakan'), array('controller' => 'tindakans', 'action' => 'index')); ?></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Transaksi <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    <li><?php echo $this->Html->link(__('Pendaftaran Pasien'), array('controller' => 'pendaftarans', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('Pembayaran'), array('controller' => 'pembayarans', 'action' => 'index')); ?></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pasien <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    <li><?php echo $this->Html->link(__('Tambah Data Pasien'), array('controller' => 'pasiens', 'action' => 'add')); ?></li>
                    <li><?php echo $this->Html->link(__('Catatan Medik Pasien'), array('controller' => 'pasiens', 'action' => 'catatanmedik')); ?></li>
                    <li><?php echo $this->Html->link(__('Pemeriksaan Pasien'), array('controller' => 'periksas', 'action' => 'index')); ?></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Jadwal Dokter <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link(__('Tambah Jadwal Dokter'), array('controller' => 'jadwal_dokters', 'action' => 'add')); ?></li>
                        <li><?php echo $this->Html->link(__('Daftar Jadwal Dokter'), array('controller' => 'jadwal_dokters', 'action' => 'index')); ?></li>
                    </ul>
                </li>

              