<?php
$conn = mysqli_connect("localhost", "root", "", "uts"); // "mysqli_connect" itu function bawaan untuk mengkoneksikan database kita. Dia menerima 4 parameter ("namahost", "username_database", "password", "nama_dataase") 

function query($query) {
    global $conn;   // Kenapa kok dikasih global, karena variabel yang ada di dalam fungsi berbeda dengan variabel di luar fungsi (Scope Variabel). Maka agar variabel diluar fungsi itu nyambung, maka dikasih global.
    $result = mysqli_query($conn, $query);
    $tampung = [];
    while ($row = mysqli_fetch_row($result)) {
        $tampung[] = $row;
    }
    return $tampung;
}

function tambah($data){

    global $conn;
    $fakultas = $data["fakultas"];
    $keuangan_inspektorat = $data["keuangan_inspektorat"];
    $keuangan_bpk = $data["keuangan_bpk"];
    $administrasi_inspektorat = $data["administrasi_inspektorat"];
    $administrasi_bpk = $data["administrasi_bpk"];
    $dokumen_lpj = $data["dokumen_lpj"];
    $revisi_pengawas = $data["revisi_pengawas"];
    $hukuman_disiplin = $data["hukuman_disiplin"];
    $ruangan_dir = $data["ruangan_dir"];
    $bmn_kib = $data["bmn_kib"];
    $catatan_bmn = $data["catatan_bmn"];
    $catatan_atk = $data["catatan_atk"];
    $stok_opname = $data["stok_opname"];

    $na = na($keuangan_inspektorat, $keuangan_bpk, $administrasi_inspektorat, $administrasi_bpk, $dokumen_lpj, $revisi_pengawas, $hukuman_disiplin, $ruangan_dir, $bmn_kib, $catatan_bmn, $catatan_atk, $stok_opname);
    $query = "INSERT INTO penilaian
                VALUES
                ('', '$fakultas', '$keuangan_inspektorat', '$keuangan_bpk', '$administrasi_inspektorat', '$administrasi_bpk', '$dokumen_lpj', '$revisi_pengawas', '$hukuman_disiplin', '$ruangan_dir', '$bmn_kib', '$catatan_bmn', '$catatan_atk', '$stok_opname', '$na')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id){

    global $conn;
    mysqli_query($conn, "DELETE FROM penilaian WHERE id = $id");

    return mysqli_affected_rows($conn);
}
function na($keuangan_inspektorat, $keuangan_bpk, $administrasi_inspektorat, $administrasi_bpk, $dokumen_lpj, $revisi_pengawas, $hukuman_disiplin, $ruangan_dir, $bmn_kib, $catatan_bmn, $catatan_atk, $stok_opname){
    {
        $na=(($keuangan_inspektorat + $keuangan_bpk + $administrasi_inspektorat + $administrasi_bpk + $dokumen_lpj + $revisi_pengawas + $hukuman_disiplin + $ruangan_dir + $bmn_kib + $catatan_bmn + $catatan_atk + $stok_opname)/12);
        return $na;
    }
}

function rank(){
    global $conn;
    $query = "SELECT MAX(na) as max_items FROM penilaian";

    mysqli_query($conn, $query);

    return rank($conn);
}
?>