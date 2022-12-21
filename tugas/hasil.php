<?php
require 'functions.php';
$data = query("SELECT * FROM penilaian ORDER BY na DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary text-center">RATING AWARDING UIN SUNAN KALIJAGA</h4>
                            <a href="index.php" class="btn btn-primary btn-sm">Dashboard</a>
                            <a href="formdata.php" class="btn btn-info btn-sm">Add Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered border-left-dark" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Faculty</th>
                                            <th>Financial Findings of The Inspectorate General</th>
                                            <th>Financial Findings of the Supreme Audit Agency</th>
                                            <th>Inspectorate General Administration Findings</th>
                                            <th>Administrative Findings of the Supreme Audit Agency</th>
                                            <th>Number of Completely Compiled LPJ and SPJ Documents</th>
                                            <th>Number of Follow-up on Supervisory Review Results</th>
                                            <th>Number of Employees Affected by Discipline (Each SK)</th>
                                            <th>Number of rooms that already have DIR/DBR</th>
                                            <th>Number of BMNs that already have KIB/DBL</th>
                                            <th>Recording State-Owned Goods at BMN View</th>
                                            <th>Have an inventory of goods/ATK</th>
                                            <th>Have Conducted Stock Taking Periodically</th>
                                            <th>Total Score</th>
                                            <th>Ranking</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1; $r = 1; ?>
                                    <?php foreach ( $data as $item ) : ?>
                                        <tr>
                                            <td> <?php echo $i ?> </td>
                                            <td> <?php echo $item[1]; ?> </td>
                                            <td> <?php echo $item[2]; ?> </td>
                                            <td> <?php echo $item[3]; ?> </td>
                                            <td> <?php echo $item[4]; ?> </td>
                                            <td> <?php echo $item[5]; ?> </td>
                                            <td> <?php echo $item[6]; ?> </td>
                                            <td> <?php echo $item[7]; ?> </td>
                                            <td> <?php echo $item[8]; ?> </td>
                                            <td> <?php echo $item[9]; ?> </td>
                                            <td> <?php echo $item[10]; ?> </td>
                                            <td> <?php echo $item[11]; ?> </td>
                                            <td> <?php echo $item[12]; ?> </td>
                                            <td> <?php echo $item[13]; ?> </td>
                                            <td> <?php echo $item[14]; ?> </td>
                                            <td> <?php echo $r; ?> </td>
                                            <td>
                                                <a href="hapus.php?id= <?php echo $item[0]; ?>" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    <?php $i++; $r++; ?>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
