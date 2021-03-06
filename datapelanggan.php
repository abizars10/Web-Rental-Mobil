<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Rental Mobil
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
         Rental Mobil
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="datamobil.php">
              <i class="material-icons">commute</i>
              <p>Data Mobil</p>
            </a>
          </li>
		  <li class="nav-item active ">
            <a class="nav-link" href="pelanggan.php">
              <i class="material-icons">groups</i>
              <p>Data Pelanggan</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="datasewa.php">
              <i class="material-icons">swap_horiz</i>
              <p>Data Transaksi</p>
            </a>
          </li>
		   <li class="nav-item ">
            <a class="nav-link" href="laporan.php">
              <i class="material-icons">text_snippet</i>
              <p>Laporan</p>
            </a>
          </li>
		  <li class="nav-item ">
            <a class="nav-link" href="logout.php" onclick="return confirm('Anda yakin ingin keluar aplikasi ini?')">
              <i class="material-icons"></i>
				<p></p>
			</button></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
			<!--- tambah data -->
			<form class="form-horizontal" action="tambah1.php" method="post">
			 <div class="form-row">
			<tr>
				<td class="td-actions">
						<a href="tambahdp.php">
							<button type="button" rel="tooltip" class="btn btn-success">
								 <i class="material-icons">add</i> Tambah Data Pelanggan
							</button></a>
				</td>
			</tr>			  
			</form>
	
			<div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Pelanggan</h4>
                  <p class="card-category"> --</p>
                </div>
                <div class="card-body">
					<div class="table-responsive">
                    <table class="table">
						<thead class=" text-primary">
						<th>KODE</th>
						<th>NAMA</th>
						<th>KONTAK</th>
						<th>ALAMAT</th>
						<th>AKSI</th>
						</thead>
					<tbody>
                    <?php
						include 'koneksi.php';
						$stid = oci_parse($koneksi, 'SELECT * from pelanggan order by KODEP');
						oci_execute($stid);
						while (($d = oci_fetch_array($stid, OCI_BOTH)) != false) {
					?>
						<tr>
						<td><?php echo $d['KODEP']; ?></td>
						<td><?php echo $d['NAMA']; ?></td>
						<td><?php echo $d['KONTAK']; ?></td>
						<td><?php echo $d['ALAMAT']; ?></td>
			
						<td class="td-actions">
						<a href="editdp.php?KODEP=<?= $d['KODEP'] ?>">
							<button type="button" rel="tooltip" class="btn btn-success">
								 <i class="material-icons">edit</i>
							</button></a>
						<a href="hapus1.php?KODEP=<?= $d['KODEP'] ?>" 
							onclick="return confirm('Anda yakin akan menghapus data ini?')">
							<button type="button" rel="tooltip" class="btn btn-danger">
								<i class="material-icons">delete_forever</i>
							</button></a>
						</td>
						</tr>
					</tbody>
			<?php
		}
		?>
					</table>
					</div>
                </div>
             </div>
			 
            </div>

          </div>
        </div>
      </div>
	  
	<footer class="footer">

      </footer>
    </div>
  </div>
</body>

</html>
