<!doctype html>
<html lang="pt-BR">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=BASE_URL?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?=BASE_URL?>assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/style.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Fintech | Dashboard</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="<?=BASE_URL?>">Fintech</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                </div>
            </nav>
        </div>
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?=BASE_URL?>">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Cadastros</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?=BASE_URL?>financa/">Receitas / Despesas<span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?=BASE_URL?>tipoentrada/">Tipo de entrada</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?=BASE_URL?>categoria/">Categorias</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?=BASE_URL?>usuario/">Usuarios</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Relatórios</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Receitas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Despesas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Receitas / Despesas - Mês</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=BASE_URL?>login/sair">Sair</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
                <div class="container-fluid dashboard-content ">
                     <div class="container">
        	            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
    	             </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2019 Fintech. Todos os direitos reservados <a href="https://localhost/fintech/">Fintech</a>.
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="<?=BASE_URL?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="<?=BASE_URL?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="<?=BASE_URL?>assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="<?=BASE_URL?>assets/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="<?=BASE_URL?>assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="<?=BASE_URL?>assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="<?=BASE_URL?>assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="<?=BASE_URL?>assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="<?=BASE_URL?>assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="<?=BASE_URL?>assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="<?=BASE_URL?>assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="<?=BASE_URL?>assets/js/dashboard-ecommerce.js"></script>
</body>
 
</html>