<?php
	
	include "controller/controller.php";
	
	
	$main = new controller();
	
	
	if(isset($_GET['e'])){ 
		$kodebuku = $_GET['e'];
		$main->viewEdit($kodebuku);
	}else if(isset($_GET['d'])){ 
		$kodebuku = $_GET['d'];
		$main->delete($kodebuku);
	}else if(isset($_GET['i'])){
		$main->viewInsert(); 
	}else if(isset($_GET['p'])){
		$main->viewPeminjaman(); 
	}else if(isset($_GET['a'])){
		$main->viewAnggota(); 
	}else if(isset($_GET['t'])){
		$main->viewPenerbit(); 
	}else if(isset($_GET['g'])){
		$main->viewPengarang(); 
	}else{
		$main->index(); 
	}
?>