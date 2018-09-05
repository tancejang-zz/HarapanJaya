<div id="sidebar-left" class="sidebar-left bg-dark text-light pl-0 pr-0">
      <div class="collapse-wrapper">
        <!-- Logo -->
        <div class="logo px-4 pt-5 pb-2">
          <a href="<?= site_url() ?>">
            <div class="text-center text-nowrap">
              <i class="fa fa-spin fa-play-circle rounded-circle" aria-hidden="true"></i>
              <h6 class="logo-title text-uppercase mt-3">Harapan <br>Jaya Kaca</h6>
              <p class="text-muted">
                <small>Halaman Admin</small>
              </p>
            </div>
          </a>
        </div>
        <!-- /Logo -->

        <!-- Logo mobile -->
        <div class="logo-mobile pt-4 pb-4 w-100">
          <a href="index.html">
            <div class="text-center text-nowrap">
              <i class="fa fa-spin fa-play-circle rounded-circle" aria-hidden="true"></i>
            </div>
          </a>
        </div>
        <!-- /Logo mobile -->

        <nav class="sidebar-nav">
          <!-- Sidebar Menu -->
          <div class="mb-1 text-uppercase d-none d-lg-block text-muted">
            <small>General</small>
          </div>
          <ul id="sidebarNav" class="nav nav-dark flex-column">
            <li class="nav-item">
              <a href="#cNavItem1" class="nav-link collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="cNavItem1">
                <i class="fa fa-database" aria-hidden="true"></i>
                <span class="d-none d-lg-inline">Master Data</span>
              </a>
              <ul id="cNavItem1" class="nav flex-column collapse bg-dark" data-parent="#sidebarNav">
                <li class="nav-item">
                  <a class="nav-link nav-level-1" href="<?= site_url() ?>/item">Barang</a>
                  <a class="nav-link nav-level-1" href="<?= site_url() ?>/employee">Pegawai</a>
                  <a class="nav-link nav-level-1" href="<?= site_url() ?>/store">Toko</a>
                  <a class="nav-link nav-level-1" href="<?= site_url() ?>/supplier">Supplier</a>
                </li>
                <!--<li class="nav-item">-->
                <!--<a class="nav-link nav-level-1" href="index-2.html">Dashboard 2</a>-->
                <!--</li>-->
              </ul>
            </li>
            <li class="nav-item">
              <a href="#cNavItem2" class="nav-link collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="cNavItem2">
                <i class="fa fa-archive" aria-hidden="true"></i>
                <span class="d-none d-lg-inline">Stok Barang</span>
              </a>
              <ul id="cNavItem2" class="nav flex-column collapse bg-dark" data-parent="#sidebarNav">
                <li class="nav-item">
                  <a class="nav-link nav-level-1" href="<?= site_url() ?>/supply">Lihat Stok</a>
                  <a class="nav-link nav-level-1" href="<?= site_url() ?>/supply/adjust">Penyesuaian Stok</a>
                </li>
                <!--<li class="nav-item">-->
                <!--<a class="nav-link nav-level-1" href="index-2.html">Dashboard 2</a>-->
                <!--</li>-->
              </ul>
            </li>
            <!--<li class="nav-item">-->
            <!--<a class="nav-link" href="#">-->
            <!--<i class="fa fa-film" aria-hidden="true"></i>-->
            <!--<span class="d-none d-lg-inline">Layouts</span>-->
            <!--</a>-->
            <!--</li>-->
            <!--li class="nav-item">
              <a class="nav-link" href="charts.html">
                <i class="fa fa-pie-chart" aria-hidden="true"></i>
                <span class="d-none d-lg-inline">Charts</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="widgets.html">
                <i class="fa fa-list" aria-hidden="true"></i>
                <span class="d-none d-lg-inline">Widgets</span>
                <span class="badge badge-success text-uppercase float-right d-none d-lg-block">New</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tables.html">
                <i class="fa fa-table" aria-hidden="true"></i>
                <span class="d-none d-lg-inline">Tables</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#cNavItem2" class="nav-link collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="cNavItem2">
                <i class="fa fa-sitemap" aria-hidden="true"></i>
                <span class="d-none d-lg-inline">Menu Levels</span>
              </a>
              <ul id="cNavItem2" class="nav flex-column collapse bg-dark" data-parent="#sidebarNav">
                <li class="nav-item">
                  <a class="nav-link nav-level-1" href="#">Level 1-1</a>
                </li>
                <li class="nav-item">
                  <a href="#cNavItem3" class="nav-link nav-level-1 collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="cNavItem3">
                    Level 1-2
                  </a>
                  <ul id="cNavItem3" class="nav flex-column collapse" data-parent="#cNavItem2">
                    <li class="nav-item">
                      <a class="nav-link nav-level-2" href="#">Level 2-1</a>
                    </li>
                    <li class="nav-item">
                      <a href="#cNavItem4" class="nav-link nav-level-2 collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="cNavItem4">
                        Level 2-2
                      </a>
                      <ul id="cNavItem4" class="nav flex-column collapse" data-parent="#cNavItem3">
                        <li class="nav-item">
                          <a class="nav-link nav-level-3" href="#">Level 3-1</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link nav-level-3" href="#">Level 3-2</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="grid.html">
                <i class="fa fa-th" aria-hidden="true"></i>
                <span class="d-none d-lg-inline">Grid</span>
                <span class="badge badge-danger text-uppercase float-right d-none d-lg-block">Hot</span>
              </a>
            </li>
          </ul>

          <div class="mt-4 mb-1 text-uppercase d-none d-lg-block text-muted">
            <small>Extras</small>
          </div>
          <ul id="sidebarNav2" class="nav nav-dark flex-column">
            <li class="nav-item">
              <a href="#cNavItem6" class="nav-link collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="cNavItem6">
                <i class="fa fa-files-o" aria-hidden="true"></i>
                <span class="d-none d-lg-inline">Pages</span>
              </a>
              <ul id="cNavItem6" class="nav flex-column collapse bg-dark" data-parent="#sidebarNav2">
                <li class="nav-item">
                  <a class="nav-link nav-level-1" href="login.html">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-level-1" href="404.html">404 Error</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#cNavItem5" class="nav-link collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="cNavItem5">
                <i class="fa fa-suitcase" aria-hidden="true"></i>
                <span class="d-none d-lg-inline">UI Elements</span>
              </a>
              <ul id="cNavItem5" class="nav flex-column collapse bg-dark" data-parent="#sidebarNav2">
                <li class="nav-item">
                  <a class="nav-link nav-level-1" href="buttons.html">Buttons</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-level-1" href="typography.html">Typography</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-level-1" href="icons.html">Icons</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-level-1" href="navs.html">Navs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-level-1" href="badges.html">Badges, Labels</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-level-1" href="progress.html">Progress</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="forms.html">
                <i class="fa fa-id-card" aria-hidden="true"></i>
                <span class="d-none d-lg-inline">Forms</span>
              </a>
            </li-->
            <!--<li class="nav-item">-->
            <!--<a class="nav-link" href="#">-->
            <!--<i class="fa fa-envelope" aria-hidden="true"></i>-->
            <!--<span class="d-none d-lg-inline">Mailbox</span>-->
            <!--</a>-->
            <!--</li>-->
            <!--<li class="nav-item">-->
            <!--<a class="nav-link" href="#">-->
            <!--<i class="fa fa-star" aria-hidden="true"></i>-->
            <!--<span class="d-none d-lg-inline">Miscellaneous</span>-->
            <!--</a>-->
            <!--</li>-->
          </ul>
          <!-- /Sidebar Menu -->
        </nav>

        <!-- Sidebar Widget -->

        <!--div class="mt-4 mx-4 d-none d-lg-block">
          <section class="widget widget-dark bg-gray-700 border-dark" id="widget-11">

            <div class="widget-block p-3">
              <div class="widget-content pt-2">
                <div class="mt-2">
                  <h6 class="widget-title">CPU Uasge</h6>
                  <div class="progress" style="height: 2px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="text-muted">
                    <small>459 Processes / 8 cores</small>
                  </p>
                </div>
                <div class="mt-3">
                  <h6 class="widget-title">Memory Utilization</h6>
                  <div class="progress" style="height: 2px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="text-muted">
                    <small>2.45Gb / 8Gb</small>
                  </p>
                </div>
                <div class="mt-3">
                  <h6 class="widget-title">HDD Usage</h6>
                  <div class="progress" style="height: 2px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="text-muted">
                    <small>23.6543Tb / 240Tb</small>
                  </p>
                </div>
              </div>
            </div>

          </section>
        </div-->
      </div>
      <!-- /Sidebar Widget -->
    </div>
    <!-- /Left Sidebar -->