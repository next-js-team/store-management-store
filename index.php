<?php
	
	include "controller/controller.php";
	
	
	$main = new controller();
	
	
	if(isset($_GET['e'])){ 
		$kodeproducts = $_GET['e'];
		$main->viewEdit($kodeproducts);
	}else if(isset($_GET['d'])){ 
		$kodeproducts = $_GET['d'];
		$main->delete($kodeproducts);
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