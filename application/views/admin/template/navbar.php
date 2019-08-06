<ul class="sidebar-menu">
  <li class="header">MAIN NAVIGATION</li>

  <li class="<?php if($this->uri->segment(2) == ""){echo "active";} ?> treeview">
    <a href="<?php echo base_url(); ?>admin/user">
    <i class="fa fa-folder-open"></i> <span>Menejemen Admin</span>
    </a>
  </li>

  <li class="<?php if($this->uri->segment(2) == ""){echo "active";} ?> treeview">
    <a href="<?php echo base_url(); ?>admin/siswa">
    <i class="fa fa-book"></i> <span>Menejemen Siswa</span>
    </a>
  </li>

    <li class="<?php if($this->uri->segment(2) == ""){echo "active";} ?> treeview">
    <a href="<?php echo base_url(); ?>admin/siswa/registrasi">
    <i class="fa fa-book"></i> <span>Menejemen Registrasi</span>
    </a>
  </li>

  <li class="<?php if($this->uri->segment(2) == ""){echo "active";} ?> treeview">
    <a href="<?php echo base_url(); ?>admin/kelas">
    <i class="fa fa-book"></i> <span>Menejemen Kelas</span>
    </a>
  </li>
  <br>
</ul>

