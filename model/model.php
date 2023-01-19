<?php
	class model{
		
		function __construct(){
			$this->connect = mysqli_connect("localhost", "root","","store-manajemen");
		}
		
		
		function execute($query){
			return mysqli_query($this->connect,$query);
		}
		
		
		function selectAll(){
			$query = "SELECT * FROM products";
			return $this->execute($query);
		}

		// function selectAnggota(){
		// 	$query = "SELECT * FROM anggota";
		// 	return $this->execute($query);
		// }

		// function selectPenerbit(){
		// 	$query = "SELECT * FROM penerbit";
		// 	return $this->execute($query);
		// }

		// function selectPengarang(){
		// 	$query = "SELECT * FROM pengarang";
		// 	return $this->execute($query);
		// }

		// function selectPeminjaman(){
		// 	$query = "SELECT * FROM peminjaman";
		// 	return $this->execute($query);
		// }
		
		
		function selectProducts($kodeproduct){
			$query = "SELECT * FROM products where id_product='$kodeproduct'";
			return $this->execute($query);
		}


		// function sumBuku(){
		// 	$query = "SELECT SUM(qty_stok) FROM buku";
		// 	return $this->execute($query);
		// }

		// function sumAnggota(){
		// 	$query = "SELECT count(id_anggota) FROM anggota";
		// 	return $this->execute($query);
		// }

		// function sumPeminjaman(){
		// 	$query = "SELECT count(id_pinjam) FROM peminjaman";
		// 	return $this->execute($query);
		// }

		// function sumPenerbit(){
		// 	$query = "SELECT count(id_penerbit) FROM penerbit";
		// 	return $this->execute($query);
		// }

		// function sumPengarang(){
		// 	$query = "SELECT count(id_pengarang) FROM pengarang";
		// 	return $this->execute($query);
		// }

		
		function selectIdSupplier(){
			$query = "SELECT id_supplier FROM supplier";
			return $this->execute($query);
		}

		function selectIdCategory(){
			$query = "SELECT id_category FROM category";
			return $this->execute($query);
		}

		// function selectIdPengarang(){
		// 	$query = "SELECT id_pengarang FROM pengarang";
		// 	return $this->execute($query);
		// }

		
		// function selectIdKatalog(){
		// 	$query = "SELECT id_katalog FROM katalog";
		// 	return $this->execute($query);
		// }
		
		function deleteProducts($kodeproduct){
			$query = "DELETE FROM products WHERE id_product ='$kodeproduct'";
			return $this->execute($query);
		}
		
		
		function insertProducts($id_product, $nama_product, $id_supplier, $price, $quantity, $id_category){
			$query = "INSERT INTO products values( '$id_product', '$nama_product', '$id_supplier', '$price', '$quantity', '$id_category')";
			
			return $this->execute($query);
		}


		function updateProducts($id_product, $nama_product, $id_supplier, $price, $quantity, $id_category) {
			$query = "UPDATE products SET id_product='$id_product', nama_product='$nama_product', id_supplier='$id_supplier', price='$price', quantity='$quantity', id_category='$id_category' WHERE id_product='$id_product'";
			
			return $this->execute($query);
		}


		
		
		
		function fetch($var){
			return mysqli_fetch_array($var);
		}
		
		
		function __destruct(){
		}
	}
?>