<a href="index.php?i=add">Tambah Pegawai</a>
<hr size="5" color="black">

<h1>Daftar Pegawai</h1>

<table border="1">
    <tr>
        <td>NO</td>
        <td>NIP</td>
        <td>Nama Pegawai</td>
        <td>Jenis Kelamin</td>
        <td>Tanggal Lahir</td>
        <td>Status</td>
        <td>Mulai Kerja</td>
        <td>Aksi</td>
    </tr>

    <?php foreach ($data as $data_pegawai) : ?>
        <tr>
            <td><?php echo $data_pegawai['id']; ?></td>
            <td><?php echo $data_pegawai['nip']; ?></td>
            <td><?php echo $data_pegawai['nama']; ?></td>
            <td><?php echo $data_pegawai['jns_kel']; ?></td>
            <td><?php echo $data_pegawai['tgl_lahir']; ?></td>
            <td><?php
                if ($data_pegawai['status'] == '0') {
                    echo "menikah";
                } else {
                    echo "belum menikah";
                } ?>
            </td>
            <td><?php echo $data_pegawai['mulai_kerja']; ?></td>
            <td>
                <a href="index.php?e=<?php echo $data_pegawai['id']; ?>">Edit</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>