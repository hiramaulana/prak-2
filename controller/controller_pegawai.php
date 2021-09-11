<?php

include "model/model_pegawai.php";

class controller
{

	public $model;

	function __construct()
	{
		$this->model = new model();
	}

	function view_post()
	{
		include "view/view_post_pegawai.php";
	}

	function view_put($id)
	{
		$data = $this->model->select($id);
		include "view/view_put_pegawai.php";
	}

	function view_index()
	{
		$data = $this->model->selectAll();
		include "view/view_pegawai.php";
	}

	//Function Insert Data
	function insert()
	{
		$id = NULL;
		$nip = $_POST['nip'];
		$nama = $_POST['nama'];
		$jns_kel =  $_POST['jns_kel'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$status =  $_POST['status'];
		$mulai_kerja = $_POST['mulai_kerja'];

		$this->model->insert($id, $nip, $nama, $jns_kel, $tgl_lahir, $status, $mulai_kerja);
		header("location:index.php");
	}

	//Function Update Data
	function update($id)
	{
		$nip =  $_POST['nip'];
		$nama = $_POST['nama'];
		$jns_kel =  $_POST['jns_kel'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$status =  $_POST['status'];
		$mulai_kerja = $_POST['mulai_kerja'];

		$this->model->update($id, $nip, $nama, $jns_kel, $tgl_lahir, $status, $mulai_kerja);
		header("location:index.php");
	}


	function __destruct()
	{
	}
}
