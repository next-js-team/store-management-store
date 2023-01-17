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


	function delete($kodebuku)
	{
		$delete = $this->model->deleteBuku($kodebuku);
		header("location:index.php");
	}

	function viewInsert()
	{
		$idPenerbit = $this->model->selectIdPenerbit();
		$idPengarang = $this->model->selectIdPengarang();
		$idKatalog = $this->model->selectIdKatalog();
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

		$kodebuku = $_POST['kodebuku'];
		$namabuku = $_POST['judulbuku'];
		$tahun = $_POST['tahun'];
		$idpenerbit = $_POST['idpenerbit'];
		$idpengarang = $_POST['idpengarang'];
		$idkatalog = $_POST['idkatalog'];
		$quantity = $_POST['quantity'];
		$hargapinjam = $_POST['harga'];

		$insert = $this->model->insertBuku($kodebuku, $namabuku, $tahun, $idpenerbit, $idpengarang, $idkatalog, $quantity, $hargapinjam);
		echo "<script> location.replace('index.php'); </script>";
	}


	function viewEdit($kodebuku)
	{
		$idPenerbit = $this->model->selectIdPenerbit();
		$idPengarang = $this->model->selectIdPengarang();
		$idKatalog = $this->model->selectIdKatalog();
		$data = $this->model->selectBuku($kodebuku);
		$row = $this->model->fetch($data);
		include "view/view_edit.php";
	}


	function update()
	{
		$kodebuku = $_POST['kodebuku'];
		$namabuku = $_POST['judulbuku'];
		$tahun = $_POST['tahun'];
		$idpenerbit = $_POST['idpenerbit'];
		$idpengarang = $_POST['idpengarang'];
		$idkatalog = $_POST['idkatalog'];
		$quantity = $_POST['quantity'];
		$hargapinjam = $_POST['harga'];
		
		$update = $this->model->updateBuku($kodebuku, $namabuku, $tahun, $idpenerbit, $idpengarang, $idkatalog, $quantity, $hargapinjam);
		echo "<script> location.replace('index.php'); </script>";
	}

	function __destruct()
	{
	}
}
?>