<?php
$db = mysqli_connect("localhost", "root", "", "db_papaninformasi");

$stokdarah = mysqli_query($db, "SELECT * FROM tbl_stokdarah");
$pengumuman = mysqli_query($db, "SELECT * FROM tbl_pengumuman WHERE curdate() <= tanggal ORDER BY tanggal ASC");
$kegiatan = mysqli_query($db, "SELECT * FROM tbl_kegiatan WHERE curdate() <= tgl_selesai ORDER BY tgl_selesai ASC");
$jadwalmu = mysqli_query($db, "SELECT * FROM tbl_jadwalmu WHERE curdate() <= tgl_kegiatan ORDER BY tgl_kegiatan ASC");
?>