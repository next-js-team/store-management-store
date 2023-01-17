<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Buku | Perpustakaan Management</title>

	<?php echo "<link rel='stylesheet' href='css/style.css'>" ?>
	<!-- <script src="https://cdn.tailwindcss.com"></script> -->

	<style>

	</style>
</head>

<body>

	<section class="judul">
		<div class="w-full h-20 pt-8 pb-8 title-second judul-container" style="position: relative;">
			<div class="grid place-content-center" style="margin: 0rem 4rem; position: absolute;  left: 2px;">
				<h1 class="font-bold text-2xl text-gray-700 uppercase">Perpustakaan Management</h1>
			</div>

			<div style="position: absolute;  right: 2rem;""> 
				<div>
					<a href='index.php'><button type=" button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out btn">Home</button></a>
				<a href='index.php?p=peminjaman'><button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out btn">Peminjaman</button></a>
				<a href='index.php?a=anggota'><button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out btn">Anggota</button></a>
				<a href='index.php?t=penerbit'><button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out btn">Penerbit</button></a>
				<a href='index.php?g=pengarang'><button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out btn">Pengarang</button></a>


			</div>
		</div>

		</div>
	</section>


	<div>
		<div class="container-card">
			<div class="card">
				<div class="card-content">
					<div class="card-total">
						<?php while ($myData = $this->model->fetch($totalBuku)) {
							echo $myData[0];
						} ?>
					</div>

					<div>
						<h5>Total Buku</h5>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-content">
					<div class="card-total">
						<?php while ($anggota = $this->model->fetch($totalAnggota)) {
							echo $anggota[0];
						} ?>
					</div>
					<div>
						<h5>Total Anggota</h5>
					</div>

				</div>
			</div>

			<div class="card">
				<div class="card-content">
					<div class="card-total">
						<?php while ($peminjaman = $this->model->fetch($totalPeminjaman)) {
							echo $peminjaman[0];
						} ?>
					</div>
					<div>
						<h5>Total Peminjaman</h5>
					</div>

				</div>
			</div>

			<div class="card">
				<div class="card-content">
					<div class="card-total">
						<?php while ($penerbit = $this->model->fetch($totalPenerbit)) {
							echo $penerbit[0];
						} ?>
					</div>
					<div>
						<h5>Total Penerbit</h5>
					</div>

				</div>
			</div>

			<div class="card">
				<div class="card-content">
					<div class="card-total">
						<?php while ($pengarang = $this->model->fetch($totalPengarang)) {
							echo $pengarang[0];
						} ?>
					</div>
					<div>
						<h5>Total Pengarang</h5>
					</div>

				</div>
			</div>







		</div>
	</div>


	



	<div>
		<div style="width: 90%; margin:auto; height: 2rem;">

			<a href='index.php?i=add'><button type="button" class="btn-tambah">Tambah Data</button></a>


		</div>
		<div class="container-table">

			<div class="table">

				<div class="table-title">
					<div class="row">
						<div class="col col-1">
							<h5>Kode Buku</h5>
						</div>
						<div class="col col-4">
							<h5>Nama Buku</h5>
						</div>
						<div class="col col-1">
							<h5>Tahun</h5>
						</div>
						<div class="col col-1">
							<h5>Quantity</h5>
						</div>
						<div class="col col-1">
							<h5>Harga Pinjam</h5>
						</div>
						<div class="col col-3">
							<h5>Aksi</h5>

						</div>
					</div>
					<div class="content-table">

						<?php while ($row = $this->model->fetch($data)) {
							echo "
														<div class='column'>
															<div class='col col-1'>
																<h5>$row[0]</h5>
															</div>
															<div class='column-2 col col-4'>
																<h5>$row[1]</h5>
															</div>
															<div class='col col-1'>
																<h5>$row[2]</h5>
															</div>
															<div class='col col-1'>
																<h5>$row[6]</h5>
															</div>
															<div class='col col-1'>
																<h5>$row[7]</h5>
															</div>
															<div class='col col-3'>
																<a href='index.php?e=$row[0]'><button class='btn-edit'>Edit</button></a>
																<a href='index.php?d=$row[0]' onClick=\"return confirm('Hapus Data?')\"\><button class='btn-hapus'>Hapus</button></a>
															</div> 
														</div>
														
													";
						} ?>


					</div>
				</div>
			</div>
		</div>
	</div>


</body>

</html>