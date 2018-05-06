<ul class="sidebar-menu">
  <li class="header">MAIN NAVIGATION</li>
  <li class="<?php if($this->uri->segment(2) == "dashboard"){echo "active ";} ?>treeview">
    <a href="<?php echo base_url(); ?>admin/dashboard">
    <i class="fa fa-dashboard"></i> <span>Home</span>
    </a>
  </li>

  <li class="<?php if($this->uri->segment(2) == ""){echo "active";} ?> treeview">
    <a href="<?php echo base_url(); ?>admin/user">
    <i class="fa fa-folder-open"></i> <span>Menejemen User</span>
    </a>
  </li>

  <li class="<?php if($this->uri->segment(2) == ""){echo "active";} ?> treeview">
    <a href="<?php echo base_url(); ?>admin/buku">
    <i class="fa fa-book"></i> <span>Menejemen Buku</span>
    </a>
  </li>
  <br>
  <li class="seesite" style="background-color:#1A2226;" class="<?php if($this->uri->segment(2) == ""){echo "active";} ?> treeview">
    <a target="_blank" href="<?php echo base_url(); ?>home">
    <h5>LIHAT SITUS</h5></a>
  </li>
</ul>

