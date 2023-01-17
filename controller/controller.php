<?php

include "model/model.php";

class controller
{

	public $model;


	function __construct()
	{
		$this->model = new model();
	}

	function index()
	{
		$data = $this->model->selectAll();
		$totalBuku = $this->model->sumBuku();
		$totalAnggota =  $this->model->sumAnggota();
		$totalPeminjaman = $this->model->sumPeminjaman();
		$totalPenerbit = $this->model->sumPenerbit();
		$totalPengarang = $this->model->sumPengarang();

		include "view/view.php";
	}


	function delete($id)
	{
		$delete = $this->model->deletePemesanan($id);
		header("location:index.php");
	}

	function viewInsert()
	{
		include "view/view_add.php";
	}

	function viewPeminjaman()
	{
		$data = $this->model->selectPeminjaman();
		include "view/view_peminjaman.php";
	}

	function viewAnggota()
	{
		$data = $this->model->selectAnggota();
		include "view/view_anggota.php";
	}
	function viewPenerbit()
	{
		$data = $this->model->selectPenerbit();
		include "view/view_penerbit.php";
	}
	function viewPengarang()
	{
		$data = $this->model->selectPengarang();
		include "view/view_pengarang.php";
	}

	function insert()
	{

		$nama = $_POST['nama'];
		$no_hp = $_POST['no_hp'];
		$tujuan = $_POST['tujuan'];
		$tanggal = $_POST['tanggal'];
		$insert = $this->model->insertPemesanan($nama, $no_hp, $tujuan, $tanggal);
		header("location:index.php");
	}


	function viewEdit($id)
	{
		$data = $this->model->selectPemesanan($id);
		$row = $this->model->fetch($data);
		include "view/view_edit.php";
	}


	function update()
	{
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$no_hp = $_POST['no_hp'];
		$tujuan = $_POST['tujuan'];
		$tanggal = $_POST['tanggal'];
		
		$update = $this->model->updatePemesanan($id, $nama, $no_hp, $tujuan, $tanggal);
		echo "<script> location.replace('index.php'); </script>";
	}

	function __destruct()
	{
	}
}
?>