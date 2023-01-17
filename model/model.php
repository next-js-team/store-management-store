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
		
		
		function selectPemesanan($id){
			$query = "SELECT * FROM pemesanan where id_pemesanan='$id'";
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
		
		
		function deletePemesanan($id){
			$query = "DELETE FROM pemesanan WHERE id_pemesanan ='$id'";
			return $this->execute($query);
		}
		
		
		function insertPemesanan($nama_pemesan, $no_hp, $tujuan, $Tanggal){
			$query = "INSERT INTO pemesanan values( NULL, '$nama_pemesan', '$no_hp', '$tujuan', '$Tanggal')";
			
			return $this->execute($query);
		}


		function updatePemesanan($id_pemesenanan, $nama_pemesan, $no_hp, $tujuan, $Tanggal) {
			$query = "UPDATE pemesanan SET id_pemesanan='$id_pemesenanan', nama_pemesan='$nama_pemesan', no_hp='$no_hp', tujuan='$tujuan', Tanggal='$Tanggal' WHERE id_pemesanan = '$id_pemesenanan'";
			
			return $this->execute($query);
		}


		
		
		
		function fetch($var){
			return mysqli_fetch_array($var);
		}
		
		
		function __destruct(){
		}
	}
?>