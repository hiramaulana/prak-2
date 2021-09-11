<?php

include 'database.php';

class model
{

	function __construct()
	{
		$this->dbh = Database::getInstance();
	}

	function select($id)
	{
		$data = $this->dbh->query("SELECT * FROM pbo_pegawai WHERE id =" . $id);
		return $data->fetch();
	}

	function selectAll()
	{
		return $this->dbh->query("SELECT * FROM pbo_pegawai");
	}

	function insert($id, $nip, $nama, $jns_kel, $tgl_lahir, $status, $mulai_bekerja)
	{
		return $this->dbh->query("INSERT INTO pbo_pegawai VALUES ('" . $id . "','" . $nip . "','" . $nama . "','" . $jns_kel . "','" . $tgl_lahir . "','" . $status . "','" . $mulai_bekerja . "')");
	}

	function update($id, $nip, $nama, $jns_kel, $tgl_lahir, $status, $mulai_bekerja)
	{
		return $this->dbh->query("UPDATE pbo_pegawai SET nip='$nip', nama='$nama', jns_kel='$jns_kel', tgl_lahir='$tgl_lahir', status='$status', mulai_kerja='$mulai_bekerja' where id = $id");
	}

	function __destruct()
	{
	}
}
