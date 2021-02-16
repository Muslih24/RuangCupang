<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">


    <title>Table - Sleek Admin Dashboard Template</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />


    <!-- PLUGINS CSS STYLE -->
    <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />



    <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />



    <link href="assets/plugins/data-tables/datatables.bootstrap4.min.css" rel="stylesheet" />



    <link href="assets/plugins/data-tables/jquery.datatables.min.css" rel="stylesheet" />



    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

    <!-- FAVICON -->
    <link href="assets/img/favicon.png" rel="shortcut icon" />



    <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>


<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">

    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>



    <div class="wrapper">


        <aside class="left-sidebar bg-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
                <div class="app-brand">
                    <a href="/index.html" title="Ruang Cupang">
                        <span class="brand-name">Ruang Cupang</span>
                    </a>
                </div>
                <div class="sidebar-scrollbar">
                    <ul class="nav sidebar-inner" id="sidebar-menu">
                        <li class="active">
                            <a class="sidenav-item-link" href="index.html" aria-expanded="false" aria-controls="dashboard">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span class="nav-text">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a class="sidenav-item-link" href="index.html" aria-expanded="false" aria-controls="dashboard">
                                <i class="mdi mdi-account"></i>
                                <span class="nav-text">Admin</span>
                            </a>
                        </li>

                        <li>
                            <a class="sidenav-item-link" href="index.html" aria-expanded="false" aria-controls="dashboard">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span class="nav-text">Ikan Cupang</span>
                            </a>
                        </li>

                        <li>
                            <a class="sidenav-item-link" href="index.html" aria-expanded="false" aria-controls="dashboard">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span class="nav-text">Jenis</span>
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

                    <div class="col-sm-4 col-sm-offset-8" style="position: relative; margin-left: 550px;">
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

                    <div class="row">
                        <div class="col-12">
                            <div class="card card-default">
                                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                                    <h2>Jenis Ikan</h2>

                                    <a href="<?= base_url('Backend/Jenis/AddJenis') ?>" target="_blank" class="btn btn-outline-primary btn-sm text-uppercase">
                                        <i class=" mdi mdi-link mr-1"></i> Tambah Data
                                    </a>
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
                                                            <a href="<?= base_url('Backend/Jenis/DetailJenis/' . $key->id_jenis); ?>">Detail</a> |
                                                            <a href="<?= base_url('Backend/Jenis/EditJenis/' . $key->id_jenis); ?>">Edit</a> |
                                                            <a href="<?= base_url('Backend/Jenis/DeleteJenis/' . $key->id_jenis); ?>">Delete</a>
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



            </div>
        </div>

        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/jekyll-search.min.js"></script>



        <script src="assets/plugins/daterangepicker/moment.min.js"></script>
        <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
        <script>
            jQuery(document).ready(function() {
                jQuery('input[name="dateRange"]').daterangepicker({
                    autoUpdateInput: false,
                    singleDatePicker: true,
                    locale: {
                        cancelLabel: 'Clear'
                    }
                });
                jQuery('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
                    jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
                });
                jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
                    jQuery(this).val('');
                });
            });
        </script>



        <script src="assets/plugins/data-tables/jquery.datatables.min.js"></script>
        <script src="assets/plugins/data-tables/datatables.bootstrap4.min.js"></script>



        <script>
            /* Formatting function for row details - modify as you need */
            function format() {
                // `d` is the original data object for the row
                return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
                    '<tr>' +
                    '<td>Full name:</td>' +
                    '<td>Name...</td>' +
                    '</tr>' +
                    '<tr>' +
                    '<td>Extension number:</td>' +
                    '<td>123</td>' +
                    '</tr>' +
                    '<tr>' +
                    '<td>Extra info:</td>' +
                    '<td>And any further details here (images etc)...</td>' +
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



        <script src="assets/js/sleek.bundle.js"></script>
</body>

</html>