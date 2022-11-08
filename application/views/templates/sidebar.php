<aside class="main-sidebar sidebar-light-success elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
		<img src="<?php echo base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Smart Garden</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block"><?php echo $this->session->userdata("nama"); ?></a>
				<a href="<?php echo base_url('login/logout'); ?>">Logout</a>
			</div>
		</div>

		<!-- SidebarSearch Form -->
		<div class="form-inline">
			<div class="input-group" data-widget="sidebar-search">
				<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-sidebar">
						<i class="fas fa-search fa-fw"></i>
					</button>
				</div>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
				<li class="nav-item  menu-open">
					<a href="<?php echo base_url(); ?>" class="nav-link">
						<i class="nav-icon fa fa-solid fa-users"></i>
						<p>
							Daftar Akun

						</p>
					</a>
				</li>
				<li class="nav-item menu-open">
					<a href="<?php echo site_url('dashboard/pengaturan'); ?>" class="nav-link">
						<i class="nav-icon fa fa-duotone fa-gears"></i>
						<p>
							Pengaturan

						</p>
					</a>
				</li>
				<li class="nav-item menu-open">
					<a href="<?php echo site_url('dashboard/grafik'); ?>" class="nav-link">
						<i class="nav-icon fas fa-solid fa-chart-simple"></i>
						<p>
							Data Grafik

						</p>
					</a>
				</li>
				<li class="nav-item menu-open">
					<a href="<?php echo site_url('dashboard/table'); ?>" class="nav-link">
						<i class="nav-icon fas fa-regular fa-table"></i>
						<p>
							Data Table

						</p>
					</a>
				</li>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
