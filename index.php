<?php
	
	include "controller/controller.php";
	
	
	$main = new controller();
	
	
	if(isset($_GET['e'])){ 
		$id = $_GET['e'];
		$main->viewEdit($id);
	}else if(isset($_GET['d'])){ 
		$id = $_GET['d'];
		$main->delete($id);
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