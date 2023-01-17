<?php
	class model{
		
		function __construct(){
			$this->connect = mysqli_connect("localhost", "root","","perpustakaan-management");
		}
		
		
		function execute($query){
			return mysqli_query($this->connect,$query);
		}
		
		
		function selectAll(){
			$query = "SELECT * FROM buku";
			return $this->execute($query);
		}

		function selectAnggota(){
			$query = "SELECT * FROM anggota";
			return $this->execute($query);
		}

		function selectPenerbit(){
			$query = "SELECT * FROM penerbit";
			return $this->execute($query);
		}

		function selectPengarang(){
			$query = "SELECT * FROM pengarang";
			return $this->execute($query);
		}

		function selectPeminjaman(){
			$query = "SELECT * FROM peminjaman";
			return $this->execute($query);
		}
		
		
		function selectBuku($kodebuku){
			$query = "SELECT * FROM buku where isbn='$kodebuku'";
			return $this->execute($query);
		}


		function sumBuku(){
			$query = "SELECT SUM(qty_stok) FROM buku";
			return $this->execute($query);
		}

		function sumAnggota(){
			$query = "SELECT count(id_anggota) FROM anggota";
			return $this->execute($query);
		}

		function sumPeminjaman(){
			$query = "SELECT count(id_pinjam) FROM peminjaman";
			return $this->execute($query);
		}

		function sumPenerbit(){
			$query = "SELECT count(id_penerbit) FROM penerbit";
			return $this->execute($query);
		}

		function sumPengarang(){
			$query = "SELECT count(id_pengarang) FROM pengarang";
			return $this->execute($query);
		}

		
		function selectIdPenerbit(){
			$query = "SELECT id_penerbit FROM penerbit";
			return $this->execute($query);
		}

		function selectIdPengarang(){
			$query = "SELECT id_pengarang FROM pengarang";
			return $this->execute($query);
		}

		
		function selectIdKatalog(){
			$query = "SELECT id_katalog FROM katalog";
			return $this->execute($query);
		}
		
		function deleteBuku($kodebuku){
			$query = "DELETE FROM buku WHERE isbn ='$kodebuku'";
			return $this->execute($query);
		}
		
		
		function insertBuku($kodebuku, $namabuku, $tahun, $idpenerbit, $idpengarang, $idkatalog, $quantity, $hargapinjam){
			$query = "INSERT INTO buku values( '$kodebuku', '$namabuku', '$tahun', '$idpenerbit', '$idpengarang', '$idkatalog', '$quantity', '$hargapinjam')";
			
			return $this->execute($query);
		}


		function updateBuku($kodebuku, $namabuku, $tahun, $idpenerbit, $idpengarang, $idkatalog, $quantity, $hargapinjam) {
			$query = "UPDATE buku SET isbn='$kodebuku', judul='$namabuku', tahun='$tahun', id_penerbit='$idpenerbit', id_pengarang='$idpengarang', id_katalog='$idkatalog', qty_stok='$quantity', harga_pinjam='$hargapinjam' WHERE isbn = '$kodebuku'";
			
			return $this->execute($query);
		}


		
		
		
		function fetch($var){
			return mysqli_fetch_array($var);
		}
		
		
		function __destruct(){
		}
	}
?>