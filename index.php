<?php 
include 'sw-function.php';
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMI Prov</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Header -->
    <div class="all">
        <div class="header cf">

            <img src="PMI.png" alt="Logo PMI">
            <div class="judul">
                <h1>PAPAN INFORMASI PMI PROVINSI JAWA TENGAH</h1>
                <p>Jl. Arumsari Rt. 11 Rw. 02 Sambiroto - Semarang</p>
            </div>
        </div>

    <!-- Stok Darah -->

        <div class="barisdua cf">
            <div class="stokdarah">
                <p>STOK DARAH</p>
                <div class="isistokdarah">

                    <table class="tableisidarah" border="1" cellspacing="0" cellpadding="5">

                        <?php while($row = mysqli_fetch_assoc($stokdarah)): ?>
                        <tr>
                            <td colspan="2" class="tabeltidarah"><?php echo tgl_indo($row["tanggal_input"]); ?></td>
                        </tr>

                        <tr>
                            <td class="tabelgoldar tabelduadua">A</td>
                            <td class="tabelduadua"><?php echo $row["golda_a"]; ?></td>
                        </tr>
                        <tr>
                            <td class="tabelgoldar tabelduadua">B</td>
                            <td class="tabelduadua"><?php echo $row["golda_b"]; ?></td>
                        </tr>
                        <tr>
                            <td class="tabelgoldar tabelduadua">AB</td>
                            <td class="tabelduadua"><?php echo $row["golda_ab"]; ?></td>
                        </tr>
                        <tr>
                            <td class="tabelgoldar tabelduadua">O</td>
                            <td class="tabelduadua"><?php echo $row["golda_o"]; ?></td>
                        </tr>
                        <?php endwhile; ?>

                    </table>

                </div>
            </div>

        <!-- Menampilkan Video Youtube -->

            <div class="video">
                <iframe width="581" height="342" src="https://www.youtube.com/embed/m7EAMKpNaQc?rel=0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>

        <!-- Menampilkan Sosmed Twitter -->

            <div class="medsospmi">
                <p>MEDSOS PMI</p>
                <div class="isimedsospmi">
                    <blockquote width="292" height="300" class="twitter-tweet" class="twitter-tweet">
                        <p lang="in" dir="ltr">Ketua PMI Provinsi Jawa Tengah, Sarwa Pramana hadiri acara Serah Terima
                            Bulan Danan Tahun 2022 dan Musyawarah Keja Tahun Anggaran 2023 PMI Kabupaten Kebumen di
                            Pendopo Kabupaten Kebumen (30/1) <a
                                href="https://twitter.com/sarwapramana?ref_src=twsrc%5Etfw">@sarwapramana</a> <a
                                href="https://twitter.com/ganjarpranowo?ref_src=twsrc%5Etfw">@ganjarpranowo</a> <a
                                href="https://twitter.com/TajYasinMZ?ref_src=twsrc%5Etfw">@tajyasinmz</a> <a
                                href="https://twitter.com/palangmerah?ref_src=twsrc%5Etfw">@palangmerah</a> <a
                                href="https://twitter.com/ifrc?ref_src=twsrc%5Etfw">@ifrc</a> <a
                                href="https://twitter.com/PMIkebumen?ref_src=twsrc%5Etfw">@pmikebumen</a> @bergascp <a
                                href="https://t.co/oi9yDXwyI3">pic.twitter.com/oi9yDXwyI3</a></p>&mdash; PMI Jawa Tengah
                        (@PMIJawaTengah) <a
                            href="https://twitter.com/PMIJawaTengah/status/1619939164933484545?ref_src=twsrc%5Etfw">January
                            30, 2023</a>
                    </blockquote>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>

        <!-- Jadwal MU -->

        <div class="baristiga">
            <div class="jadwalmu">
                <p>JADWAL MU</p>

                <div class="tabel1">
                    <table class="tabell1" border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <td class="no">NO</td>
                            <td class="tempat">TEMPAT</td>
                            <td class="peruntukan">PERUNTUKAN</td>
                            <td class="tglkeg">TGL KEG</td>
                            <td class="jammulai">JAM MULAI</td>
                            <td class="jamselesai">JAM SELESAI</td>
                            <td class="pic">PIC</td>
                        </tr>

                        <?php $i = 1; ?>
                        <?php while($row1 = mysqli_fetch_assoc($jadwalmu)): ?>
                        <tr>
                            <td class="no_"><?php echo $i; ?></td>
                            <td><?php echo $row1["tempat"]; ?></td>
                            <td><?php echo $row1["peruntukan"]; ?></td>
                            <td align = "center"><?php echo tanggal_ind($row1["tgl_kegiatan"]); ?></td>
                            <td align = "center"><?php echo jam($row1["jam_mulai"]);?></td>
                            <td align = "center"><?php echo jam($row1["jam_selesai"]);?></td>
                            <td><?php echo $row1["pic"];?></td>
                        </tr>
                        <?php $i++; ?>
                        <?php endwhile; ?>


                    </table>
                </div>

            </div>

            <!-- Kegiatan -->

            <div class="kegiatan">
                <p>KEGIATAN PMI PROVINSI</p>
                <div class="tabel2">
                    <table class="tabell2" border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <td class="no">NO</td>
                            <td class="kegiatan_">KEGIATAN</td>
                            <td class="tglmulai">TGL MULAI</td>
                            <td class="tglselesai">TGL SELESAI</td>
                            <td class="tempat">TEMPAT</td>
                            <td class="personil">PERSONIL</td>
                        </tr>

                        <?php $i = 1; ?>
                        <?php while($row2 = mysqli_fetch_assoc($kegiatan)): ?>
                        <tr>
                            <td class="no_"><?php echo $i; ?></td>
                            <td><?php echo $row2["kegiatan"]; ?></td>
                            <td align="center"><?php echo tanggal_ind($row2["tgl_mulai"]); ?></td>
                            <td align="center"><?php echo tanggal_ind($row2["tgl_selesai"]); ?></td>
                            <td><?php echo $row2["kegiatan"]; ?></td>
                            <td><?php echo $row2["personil"]; ?></td>
                        </tr>
                        <?php $i++; ?>
                        <?php endwhile; ?>

                    </table>
                </div>
            </div>
        </div>

        <!-- Running Text -->

        <div class="rtp">
            <marquee direction="left" scrollamount="2" align="center">
                <table>
                    <tr>
                    <?php while($row3 = mysqli_fetch_assoc($pengumuman)): ?>
                        <td><?php echo $row3["pengumuan"]; ?></td>
                        <td>(<?php echo tanggal_ind($row3 ["tanggal"]); ?>)</td>
                        <td> &nbsp | &nbsp </td>
                    <?php endwhile; ?>
                    </tr>
                </table>

            </marquee>
        </div>
    </div>
</body>

</html>