<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description">


    <title>Jenis Cupang</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />


    <!-- PLUGINS CSS STYLE -->
    <link href="<?= base_url("assets/assets/plugins/nprogress/nprogress.css"); ?>" rel="stylesheet" />
    <link href="<?= base_url("assets/assets/plugins/daterangepicker/daterangepicker.css"); ?>" rel="stylesheet" />
    <link href="<?= base_url("assets/assets/plugins/data-tables/datatables.bootstrap4.min.css"); ?>" rel="stylesheet" />
    <link href="<?= base_url("assets/assets/plugins/data-tables/jquery.datatables.min.css"); ?> " rel="stylesheet" />
    <link id="sleek-css" rel="stylesheet" href="<?= base_url("assets/assets/css/sleek.css"); ?> " />

    <script src="<?= base_url("assets/assets/plugins/nprogress/nprogress.js"); ?>"></script>
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">

    <div class="wrapper">
        <aside class="left-sidebar bg-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
                <div class="app-brand">
                    <a href="#" title="Ruang Cupang">
                        <span class="brand-name">Ruang Cupang</span>
                    </a>
                </div>
                <div class="sidebar-scrollbar">
                    <ul class="nav sidebar-inner" id="sidebar-menu">
                        <li>
                            <a class="sidenav-item-link" href="<?= base_url('Backend/SU/Admin/Dashboard'); ?>" aria-expanded="false" aria-controls="dashboard">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span class="nav-text">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a class="sidenav-item-link" href="<?= base_url('Backend/SU/Admin'); ?>" aria-expanded="false" aria-controls="dashboard">
                                <i class="mdi mdi-account"></i>
                                <span class="nav-text">Admin</span>
                            </a>
                        </li>

                        <li>
                            <a class="sidenav-item-link" href="<?= base_url('Backend/SU/Cupang'); ?>" aria-expanded="false" aria-controls="dashboard">
                                <i class="mdi mdi-fish"></i>
                                <span class="nav-text">Ikan Cupang</span>
                            </a>
                        </li>

                        <li class="active">
                            <a class="sidenav-item-link" href="<?= base_url('Backend/SU/Jenis'); ?>" aria-expanded="false" aria-controls="dashboard">
                                <i class="mdi mdi-format-list-bulleted"></i>
                                <span class="nav-text">Jenis Cupang</span>
                            </a>
                        </li>

                    </ul>
        </aside>


        <div class="page-wrapper">
            <header class="main-header " id="header">
                <nav class="navbar navbar-static-top navbar-expand-lg">
                    <!-- Sidebar toggle button -->
                    <button id="sidebar-toggler" class="sidebar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                    </button>

                    <div class="col-sm-4 col-sm-offset-8" style="position: relative; margin-left: 860px;">
                        <a href="">
                            <button class="btn btn-danger">
                                <i class="mdi mdi-logout"></i>
                                <span class="d-none d-lg-inline-block">Log Out</span>
                            </button>
                        </a>
                    </div>
                </nav>
            </header>


            <div class="content-wrapper">
                <div class="content">
                    <?php if ($this->session->flashdata('flash')) : ?>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Jenis Cupang<strong> Berhasil </strong> <?= $this->session->flashdata('flash'); ?>.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="card card-default">
                                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                                    <h2>Jenis Cupang</h2>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalForm">
                                        Tambah Jenis
                                    </button>
                                </div>

                                <div class="card-body">
                                    <div class="expendable-data-table">
                                        <table id="expendable-data-table" class="table display nowrap" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>No</th>
                                                    <th>Jenis</th>
                                                    <th>Total</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($jenis as $key) {
                                                ?>
                                                    <tr>
                                                        <td class="details-control"></td>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $key->jenis ?></td>
                                                        <td><?= $key->total ?></td>
                                                        <td>
                                                          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModalForm2<?php echo $key->id_jenis;?>">
                                                            Ubah
                                                          </button>
                                                            <a class="btn btn-danger btn-sm" href="<?= base_url('Backend/SU/Jenis/DeleteJenis/' . $key->id_jenis); ?>">Hapus</a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Tambah Jenis -->
                <div class="modal fade" id="exampleModalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
        					<div class="modal-dialog" role="document">
        						<div class="modal-content">
        							<div class="modal-header">
        								<h5 class="modal-title" id="exampleModalFormTitle">Tambah Jenis Cupang</h5>
        								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        									<span aria-hidden="true">&times;</span>
        								</button>
        							</div>
        							<div class="modal-body">
        								<form action="<?= site_url("Backend/SU/Jenis/ProsesAddJenis");?>" method="post">
        									<div class="form-group">
        										</div>
                            <label for="jenis">Jenis</label>
                            <input type="text" name="jenis" class="form-control" id="jenis">


        							</div>
        							<div class="modal-footer">

        								<button type="button" class="btn btn-secondary btn-pill" data-dismiss="modal">Batal</button>
        								<button class="btn btn-primary btn-pill" type="submit"> Simpan</button>

        							</div>
        						</form>
        						</div>
        					</div>
        				</div>
        				<!-- Akhir Tambah -->

        				<!-- Edit -->
        				<?php
        				$no=0;
        				foreach ($jenis as $key) :
        					$no++;?>

        				<div class="modal fade" id="exampleModalForm2<?php echo $key->id_jenis;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
        					<div class="modal-dialog" role="document">
        						<div class="modal-content">
        							<div class="modal-header">
        								<h5 class="modal-title" id="exampleModalFormTitle">Ubah Jenis</h5>
        								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        									<span aria-hidden="true">&times;</span>
        								</button>
        							</div>
        							<div class="modal-body">
        								<?= form_open_multipart("Backend/SU/Jenis/ProsesEditJenis")?>
        								<!-- <form action="<?= site_url("Backend/SU/Admin/ProsesEditAdmin");?>"> -->
        									<input type="hidden" name="id_jenis" value="<?= $key->id_jenis ?>">
        									<div class="form-group">
        											<label for="jenis">Jenis</label>
        											<input type="text" name="jenis" class="form-control" id="jenis" value="<?= $key->jenis?>">
        										</div>

        							</div>
        							<div class="modal-footer">

        								<button type="button" class="btn btn-secondary btn-pill" data-dismiss="modal">Batal</button>
        								<button class="btn btn-primary btn-pill" type="submit"> Simpan</button>

        							</div>
        						</form>
        						</div>
        					</div>
        				</div>
        			<?php endforeach;?>

        				<!-- Akhir Edit -->
            </div>


        </div>
    </div>

    <script src="<?= base_url("assets/assets/plugins/jquery/jquery.min.js"); ?>"></script>
    <script src="<?= base_url("assets/assets/plugins/slimscrollbar/jquery.slimscroll.min.js"); ?>"></script>
    <script src="<?= base_url("assets/assets/plugins/jekyll-search.min.js"); ?>"></script>



    <script src="<?= base_url("assets/assets/plugins/daterangepicker/moment.min.js"); ?>"></script>
    <script src="<?= base_url("assets/assets/plugins/daterangepicker/daterangepicker.js"); ?>"></script>
    <script src="<?= base_url("assets/assets/plugins/data-tables/jquery.datatables.min.js"); ?>"></script>
    <script src="<?= base_url("assets/assets/plugins/data-tables/datatables.bootstrap4.min.js"); ?>"></script>



    <script>
        function format() {
            return '<table cellpadding=0" cellspacing="0" border="0">' +
                '<tr>' +
                '<td>Jenis Ikan  </td>' +
                '<td>:</td>' +
                '</tr>' +

                '<tr>' +
                '<td>Total</td>' +
                '<td>:</td>' +
                '</tr>' +
                '</table>';
        }

        $(document).ready(function() {
            var table = $('#expendable-data-table').DataTable({
                "className": 'details-control',
                "order": [
                    [0, 'asc']
                ],
                "aLengthMenu": [
                    [20, 30, 50, 75, -1],
                    [20, 30, 50, 75, "All"]
                ],
                "pageLength": 20,
                "dom": '<"row align-items-center justify-content-between top-information"lf>rt<"row align-items-center justify-content-between bottom-information"ip><"clear">'
            });

            // Add event listener for opening and closing details
            $('#expendable-data-table tbody').on('click', 'td.details-control', function() {
                var tr = $(this).closest('tr');
                var row = table.row(tr);

                if (row.child.isShown()) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                } else {
                    // Open this row
                    row.child(format(row.data())).show();
                    tr.addClass('shown');
                }
            });
        });
    </script>
    <script src="<?= base_url('assets/assets/js/sleek.bundle.js'); ?>"> </script>
    <script src="<?= base_url('assets/assets/js/sweetalert2.all.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets/js/swit.js'); ?>"></script>
</body>

</html>
