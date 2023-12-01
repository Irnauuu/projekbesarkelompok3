<?php
$halaman ="barang";
session_start();
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';

include_once '../controllers/C_barang.php';

$barang= new C_barang();
?>


<!-- Begin Page Content -->
<div class="container-fluid">

	<div class="d-sm-flex align-items-center justify-content-between mb-4">

	</div>

<!-- Page Heading -->
<h1 class="h1 mb-3 text-gray-800">Tabel Pegawai Sekolah</h1>
	<!-- /.card-header -->
	<div class="card shadow mb-4">
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>NIP</th>
						<th>Nama</th>
						<th>Mata Pelajaran</th>
					</tr>
				</thead>
				<tbody>

									<?php
                                     $nomor = 1;
                                     foreach($barang->tampil() as $b){

                                  ?>
                                  <tr>
						<td><?= $nomor++; ?></td>
						<td><?= $b->nip ?></td>
						<td><?= $b->nama_pegawai ?></td>
						<td><?= $b->mata_pelajaran ?></td>
					</tr>

					<?php  } ?>
				</tbody>
			</table>
		</div>
	 </div>
			</div>
	</div>
	<!-- /.container -->


<?php
include_once 'template/footer.php';
?>