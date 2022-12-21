<?php
// (Step 1) Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "uts"); // "mysqli_connect" itu function bawaan untuk mengkoneksikan database kita. Dia menerima 4 parameter ("namahost", "username_database", "password", "nama_dataase") 

// (Step 2) Kita amil data dari tabel kita. Nama lainnya adalah "query data"
$result = mysqli_query($conn, "SELECT * FROM penilaian"); // "mysqli_query" adalah functon untuk meng query data. Dia menerima 2 parameter (koneksi, "sintaks query-nya")
    // var_dump($result);

// (Step 3). Ambil data dari object result. Nama lain dari langkah ini adalah "Fetch data". Ada 4 cara dari fetch :
    // 1. mysqli_fetch_row();

        // $data = mysqli_fetch_row($result);
        // var_dump($data);

            // Dia mengembalikan array number. misal mau menampilkan data dari nama fakultas, maka gunakan indexnya => 
                // $data = mysqli_fetch_row($result);
                // var_dump($data[1]);

    // 2. mysqli_fetch_assoc();

        // $data = mysqli_fetch_assoc($result);
        // var_dump($data);

            // Dia mengembalikan array assosiatif. misal kita mau menampilkan data dari nama fakultas, maka gunakan nama dari fieldnya =>
                // $data = mysqli_fetch_assoc($result);
                // var_dump($data["fakultas"]);


    // 3. mysqli_fetch_array();

        // $data = mysqli_fetch_array($result);
        // var_dump($data);

            // Dia mengembalikan array assosiatif dan juga number (jadi dia mengembalikan data dobel). misal kita mau menampilkan data dari nama fakultas, maka =>
                // $data = mysqli_fetch_array($result);
                // var_dump($data["fakultas"]);

                // atau

                //$data = mysqli_fetch_array($result);
                // var_dump($data[1]);


    // 4. mysqli_fetch_object();

        // $data = mysqli_fetch_object($result);
        // var_dump($data);

            // Dia mengembalikan objectnya. misal kita ingin menamilkan data dari nama fakultas, maka caranya =>
                // $data = mysqli_fetch_object($result);
                // var_dump($data->fakultas);

// while ( $data = mysqli_fetch_assoc($result) ) {
//     var_dump($data);
// }

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
                            <h4 class="m-0 font-weight-bold text-primary text-center">List Awarding UIN Sunan Kalijaga</h4>
                            <a href="index.php" class="btn btn-primary btn-sm">Dashboard</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Fakultas</th>
                                            <th>Temuan Keuangan Inspektorat</th>
                                            <th>Temuan Keuangan BPK</th>
                                            <th>Temuan Administrasi Inspektorat</th>
                                            <th>Temuan Administrasi BPK</th>
                                            <th>Jumlah Dokumen LPJ dan SPJ</th>
                                            <th>Jumlah Tindak Lanjut</th>
                                            <th>Jumlah Pegawai Dihukum</th>
                                            <th>Jumlah Ruangan Memiliki DIR</th>
                                            <th>Jumlah BMN Yang Memiliki KIB</th>
                                            <th>Mencatat BMN</th>
                                            <th>Memiliki catatan Persediaan ATK</th>
                                            <th>Melakukan Stock Opname</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1; ?>
                                    <?php while ($row = mysqli_fetch_row($result)) : ?>
                                        <tr>
                                            <td> <?php echo $i ?> </td>
                                            <td> <?php echo $row[1]; ?> </td>
                                            <td> <?php echo $row[2]; ?> </td>
                                            <td> <?php echo $row[3]; ?> </td>
                                            <td> <?php echo $row[4]; ?> </td>
                                            <td> <?php echo $row[5]; ?> </td>
                                            <td> <?php echo $row[6]; ?> </td>
                                            <td> <?php echo $row[7]; ?> </td>
                                            <td> <?php echo $row[8]; ?> </td>
                                            <td> <?php echo $row[9]; ?> </td>
                                            <td> <?php echo $row[10]; ?> </td>
                                            <td> <?php echo $row[11]; ?> </td>
                                            <td> <?php echo $row[12]; ?> </td>
                                            <td> <?php echo $row[13]; ?> </td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-sm mb-1">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    <?php $i++; ?>
                                    <?php endwhile; ?>
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
