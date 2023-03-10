<?php 
include_once("../functions.php");
$title = 'nilai';

?>

    <title>Siswa</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

      <!-- Custom styles for this page -->
    <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
<!-- sidebar -->
       <?php include_once("../layout/sidebar.php") ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <!-- top bar -->
            <?php include_once("../layout/topbar.php") ?>
              

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Tampil Nilai</h1>

                    <!-- data table siswa -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="nilai-tambah.php"><button type="button" class="btn btn-outline-primary rounded">Input</button></a>
                        </div>
                        <div class="card-body">
                            <?php
                            $db=dbConnect();
                            if($db->connect_errno==0){
                            $sql="SELECT * FROM siswa";
                            $res=$db->query($sql);
                            if($res){
                            ?>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Tanggal Lahir</th>
                                            <th>J K </th>
                                            <th>Agama</th>
                                            <th>Orang Tua</th>
                                            <th>Asal Sekolah</th>
                                            <th>Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $data = $res->fetch_all(MYSQLI_ASSOC);
                                        foreach($data as $row){
                                        ?>
                                        <tr>
                                            <td><?= $row['nis']; ?></td>
                                            <td><?= $row['nama']; ?></td>
                                            <td><?= $row['kelas']; ?></td>
                                            <td><?= $row['tanggal_lahir'];?></td>
                                            <td><?= $row['jenis_kelamin']; ?></td>
                                            <td><?= $row['agama']; ?></td>
                                            <td><?= $row['orang_tua']; ?></td>
                                            <td><?= $row['asal_sekolah'] ?></td>
                                            <td>
                                                 <a href="tampil-nilai.php?nis=<?= $row['nis']?>" class="btn btn-info btn-circle btn-sm">
                                                <i class="fas fa-edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                            <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                	<?php
		$res->free();
	}else
		echo "Gagal Eksekusi SQL".(DEVELOPMENT?" : ".$db->error:"")."<br>";
}
else
	echo "Gagal koneksi".(DEVELOPMENT?" : ".$db->connect_error:"")."<br>";
?>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

    
    <!-- Page level plugins -->
    <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assets/js/demo/datatables-demo.js"></script>
    <script src="../assets/js/script.js"></script>