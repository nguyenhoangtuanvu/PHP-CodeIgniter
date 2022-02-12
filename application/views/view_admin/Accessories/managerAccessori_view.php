<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="<?php echo base_url() ?>assets/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php include "headerAd.php" ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <a href="<?php echo base_url() ?>index.php/Admin_Controller/managerAccessori_Controller/LoadFormAdd">Add New Accessory</a>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Size</th>
                                                <th>Count</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Size</th>
                                                <th>Count</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                        <tbody>   

                                        <?php foreach ($metadata as  $data): ?>
                                            <tr>
                                                <td><img width="60" src="<?php echo $data['image'] ?>"/></td>
                                                <td><?php echo $data['name'] ?></td>
                                                <td><?php echo $data['price'] ?></td>
                                                <td><?php echo $data['size'] ?></td>
                                                <td><?php echo $data['count'] ?></td>
                                                <td>
                                                    <div class="btn btn-outline-success"><a href="managerAccessori_Controller/loadFormEdit/<?php echo $data['id'] ?>">edit</a></div>
                                                    <div class="btn btn-outline-danger"><a href="managerAccessori_Controller/deleProduct/<?php echo $data['id'] ?>">delete</a></div>                                                   
                                                </td>                                               
                                            </tr>
                                        <?php endforeach ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_urḷ̣̣̣̣̣̣̣̣() ?>assets/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_urḷ̣̣̣̣̣̣̣̣() ?>assets/demo/chart-area-demo.js"></script>
        <script src="<?php echo base_urḷ̣̣̣̣̣̣̣̣() ?>assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_urḷ̣̣̣̣̣̣̣̣() ?>assets/demo/datatables-demo.js"></script>
    </body>
</html>
