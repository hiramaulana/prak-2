<h1>Update Pegawai</h1>
<form action="" method="POST">
    <input type="text" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
    <table>
        <tr>
            <td>Nomor Induk pegawai</td>
            <td>
                <Input type="text" name="nip" value="<?php echo $data['nip'] ?>">
            </td>
        </tr>
        <tr>
            <td>Nama Pegawai</td>
            <td>
                <Input type="text" name="nama" value="<?php echo $data['nama'] ?>">
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <input type="radio" name="jns_kel" <?php if (isset($jns_kel) && $jns_kel == "L" || $data['jns_kel'] == 'L') : ?> checked="checked" <?php endif ?>value="L">Laki-laki
                <input type="radio" name="jns_kel" <?php if (isset($jns_kel) && $jns_kel == "P" || $data['jns_kel'] == 'P') : ?> checked="checked" <?php endif ?>value="P">Perempuan
            </td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>
                <input type="date" name="tgl_lahir" value="<?php echo $data['tgl_lahir'] ?>">
            </td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
                <input type="radio" name="status" <?php if (isset($status) && $status == "0" || $data['status'] == '0') : ?> checked="checked" <?php endif ?>value="0">Menikah
                <input type="radio" name="status" <?php if (isset($status) && $status == "1" || $data['status'] == '1') : ?> checked="checked" <?php endif ?>value="1">Belum Menikah
            </td>
        </tr>
        <tr>
            <td>Tanggal Masuk</td>
            <td>
                <input type="date" name="mulai_kerja" value="<?php echo $data['mulai_kerja'] ?>">
            </td>
        </tr>
    </table>
    <input type="submit" name="proses" value="Simpan">
</form>

<?php
if (isset($_POST['proses'])) {
    
    $main = new controller();

    $main->update($data['id']);
}
?>