<!-- Top Toolbar -->
    <div class="navbar navbar-light bg-white px-3 px-sm-5 py-3">
      <div class="d-inline-block mr-3">
        <a href="#" data-target="#sidebar-left" data-toggle="collapse-width" class="btn btn-dark btn-icon rounded-circle shadow-00">
          <i class="fa fa-navicon"></i>
        </a>
      </div>

      <ul class="nav ml-auto">
        <li class="m-sm-1 m-md-2 position-relative">
          <a data-toggle="dropdown" href="#" aria-expanded="false">
            <div class="d-inline-block mr-2">
              <i class="fa fa-user"></i>
            </div>
            <div class="d-none d-lg-inline-block">
              <span class="d-block"><?= $this->session->userdata('user')->name?></span>
            </div>
          </a>

          <div class="dropdown-menu dropdown-menu-right">
            <!--a class="dropdown-item" href="#">
              <i class="fa fa-user-circle-o" aria-hidden="true"></i> Profile
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-address-card-o" aria-hidden="true"></i> Contacts
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-envelope-o" aria-hidden="true"></i> Mailbox
            </a>
            <div class="dropdown-divider"></div-->
            <a class="dropdown-item" href="<?= site_url('home/logout') ?>">
              <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
            </a>
          </div>

        </li>

      </ul>

    </div>