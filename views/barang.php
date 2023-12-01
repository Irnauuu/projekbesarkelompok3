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


        <a href="tambah_barang.php" class="d-none d-sm-inline-block btn btn-sm btn-primary
        shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Pegawai</a>

</div>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Barang</h6>
    </div>


    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    

                    <tr>
                        <td>No</td>
                        <td>Nip</td>
                        <td>Nama</td>
                        <td>Mata Pelajaran</td>
                        <td>Action</td>
                    </tr>
                    
</head>
<tbody>

                                    <?php
                                    if (empty($barang->tampil())) { ?>
                                        <tr>
                                            <td colspan="6">
                                                <h1>
                                                    <center>Tidak Ada Data</center>
                                                </h1>
                                            </td>
                                        </tr>
                                    <?php
                                     } else {
                                     $nomor = 1;
                                     foreach($barang->tampil() as $b){

                                  ?>
                                  <tr>
                                        <td><?= $nomor++ ?></td>
                                        <td><?= $b->nip ?></td>
                                        <td><?= $b->nama_pegawai ?></td>
                                        <td><?= $b->mata_pelajaran ?></td>
                                        
                                     <td>
                                        <center>
                                            <a href="edit_barang.php?nip=<?= $b->nip ?>"><button 
                                        type="button" class="btn btn-round btn-primary">Edit</button></a>

                                        <a onlick="return confirm('Apakah yakin data akan di hapus')"
                                        href="../routers/r_barang.php?nip=<?= $b->nip ?>&aksi=hapus"><button type="button" name="hapus" class="btn btn-round btn-danger">hapus</button></a></td>
                                     </center>
                                     </td>
                                      </tr>

                                    <?php }
                                    
                                        }   ?>
                                     
                 </tbody>               
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->


<?php
include_once 'template/footer.php';
?>