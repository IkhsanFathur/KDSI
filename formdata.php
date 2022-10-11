<?php
require 'functions.php';
    
    if( isset($_POST["submit"])) {

        if( tambah($_POST) > 0){
            echo "
                    <script>
                    alert('Data berhasil ditambah');
                    document.location.href = 'hasil.php';
                    </script>
                ";
        }
        else{
            echo "
                <script>
                alert('Data berhasil dihapus');
                document.location.href = 'hasil.php';
                </script>
                ";
        }

    }
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
                            <h4 class="m-0 font-weight-bold text-primary text-center">Rating Form</h4>
                            <a href="index.php" class="btn btn-primary btn-sm">Dashboard</a>
                            <a href="hasil.php" class="btn btn-info btn-sm">Result</a>
                        </div>
                        <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="fakultas">Faculty</label>
                                <select class="custom-select" id="fakultas" name="fakultas">
                                    <option selected>Enter Name Faculty</option>
                                    <option value="FAKULTAS ILMU TARBIYAH DAN KEGURUAN">FAKULTAS ILMU TARBIYAH DAN KEGURUAN</option>
                                    <option value="FAKULTAS ADAB DAN ILMU BUDAYA">FAKULTAS ADAB DAN ILMU BUDAYA</option>
                                    <option value="FAKULTAS EKONOMI DAN BISNIS ISLAM">FAKULTAS EKONOMI DAN BISNIS ISLAM</option>
                                    <option value="FAKULTAS SAINS DAN TEKNOLOGI">FAKULTAS SAINS DAN TEKNOLOGI</option>
                                    <option value="FAKULTAS USHULUDDIN DAN PEMIKIRAN ISLAM">FAKULTAS USHULUDDIN DAN PEMIKIRAN ISLAM</option>
                                    <option value="FAKULTAS DAKWAH DAN KOMUNIKASI">FAKULTAS DAKWAH DAN KOMUNIKASI</option>
                                    <option value="FAKULTAS ILMU SOSIAL DAN HUMANIORA">FAKULTAS ILMU SOSIAL DAN HUMANIORA</option>
                                    <option value="FAKULTAS SYARIAH DAN HUKUM">FAKULTAS SYARIAH DAN HUKUM</option>
                                    <option value="PASCASARJANA">PASCASARJANA</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="keuangan_inspektorat">Financial Findings of The Inspectorate General</label>
                                <input type="number" class="form-control" id="keuangan_inspektorat" placeholder="Give The Rate ..." name="keuangan_inspektorat">
                            </div>
                            <div class="form-group">
                                <label for="keuangan_bpk">Financial Findings of the Supreme Audit Agency</label>
                                <input type="number" class="form-control" id="keuangan_bpk" placeholder="Give The Rate ..." name="keuangan_bpk">
                            </div>
                            <div class="form-group">
                                <label for="administrasi_inspektorat">Inspectorate General Administration Findings</label>
                                <input type="number" class="form-control" id="administrasi_inspektorat" placeholder="Give The Rate ..." name="administrasi_inspektorat">
                            </div>
                            <div class="form-group">
                                <label for="administrasi_bpk">Administrative Findings of the Supreme Audit Agency</label>
                                <input type="number" class="form-control" id="administrasi_bpk" placeholder="Give The Rate ..." name="administrasi_bpk">
                            </div>
                            <div class="form-group">
                                <label for="dokumen_lpj">Number of Completely Compiled LPJ and SPJ Documents</label>
                                <input type="number" class="form-control" id="dokumen_lpj" placeholder="Give The Rate ..." name="dokumen_lpj">
                            </div>
                            <div class="form-group">
                                <label for="revisi_pengawas">Number of Follow-up on Supervisory Review Results</label>
                                <input type="number" class="form-control" id="revisi_pengawas" placeholder="Give The Rate ..." name="revisi_pengawas">
                            </div>
                            <div class="form-group">
                                <label for="hukuman_disiplin">Number of Employees Affected by Discipline (Each SK)</label>
                                <input type="number" class="form-control" id="hukuman_disiplin" placeholder="Give The Rate ..." name="hukuman_disiplin">
                            </div>
                            <div class="form-group">
                                <label for="ruangan_dir">Number of rooms that already have DIR/DBR</label>
                                <input type="number" class="form-control" id="ruangan_dir" placeholder="Give The Rate ..." name="ruangan_dir">
                            </div>
                            <div class="form-group">
                                <label for="bmn_kib">Number of BMNs that already have KIB/DBL</label>
                                <input type="number" class="form-control" id="bmn_kib" placeholder="Give The Rate ..." name="bmn_kib">
                            </div>
                            <div class="form-group">
                                <label for="catatan_bmn">Recording State-Owned Goods at BMN View</label>
                                <input type="number" class="form-control" id="catatan_bmn" placeholder="Give The Rate ..." name="catatan_bmn">
                            </div>
                            <div class="form-group">
                                <label for="catatan_atk">Have an inventory of goods/ATK</label>
                                <input type="number" class="form-control" id="catatan_atk" placeholder="Give The Rate ..." name="catatan_atk">
                            </div>
                            <div class="form-group">
                                <label for="stok_opname">Have Conducted Stock Taking Periodically</label>
                                <input type="number" class="form-control" id="stok_opname" placeholder="Give The Rate ..." name="stok_opname">
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success" name="submit">Submit</button>
                            </div>
                        </form>
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