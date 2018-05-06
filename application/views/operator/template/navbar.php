<ul class="sidebar-menu">
  <li class="header">MAIN NAVIGATION</li>
  <li class="<?php if($this->uri->segment(2) == "dashboard"){echo "active ";} ?>treeview">
    <a href="#">
    <i class="fa fa-dashboard"></i> <span>Menu 1</span>
    </a>
  </li>

  <li class="<?php if($this->uri->segment(2) == "skp"){echo "active";} ?> treeview">
    <a href="#">
    <i class="fa fa-folder-open"></i> <span>Menu 2</span>
    </a>
  </li>

  <li class="<?php if($this->uri->segment(2) == "penilai_skp"){echo "active";} ?> treeview">
    <a href="#">
    <i class="fa fa-flash"></i> <span>Menu 3</span>
    </a>
  </li>

  <li class="<?php if($this->uri->segment(2) == "report"){echo "active";} ?> treeview">
    <a href="#">
    <i class="fa fa-edit"></i> <span>Menu 4</span>
    </a>
  </li>
</ul>