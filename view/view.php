<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Store Management</title>

	<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css">




	<script src="https://cdn.tailwindcss.com"></script>

	<style>

	</style>
</head>

<body>



	<div class="relative shadow bg-white">
		<div class="absolute inset-0 bg-cover bg-center bg-no-repeat bg-fixed bg-sky-500" style=""></div>

		<div class="w-full backdrop-blur-sm">
			<div class="relative z-1 h-16 mx-auto px-5 max-w-7xl flex items-center justify-between text-white">
				<a class="text-2xl hover:text-cyan-400 transition-colors" href="">Store Management</a>

				<ul class="flex items-center gap-5">
					<li><a class="hover:text-cyan-400 transition-colors" href='index.php'>Home</a></li>
					<li><a class="hover:text-cyan-400 transition-colors" href='index.php?p=peminjaman'>Peminjaman</a></li>
					<li><a class="hover:text-cyan-400 transition-colors" href='index.php?a=anggota'>Anggota</a></li>
					<li><a class="hover:text-cyan-400 transition-colors" href='index.php?t=penerbit'>Penerbit</a></li>
					<li><a class="hover:text-cyan-400 transition-colors" href='index.php?g=pengarang'>Pengarang</a></li>
				</ul>
			</div>
		</div>
	</div>



	<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10 mx-6">
		<div>

			<a href='index.php?i=add'><button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Tambah</button></a>


		</div>
		<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
			<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
				<tr>

					<th scope="col" class="px-6 py-3">
						Kode Buku
					</th>
					<th scope="col" class="px-6 py-3">
						Nama Buku
					</th>
					<th scope="col" class="px-6 py-3">
						Tahun
					</th>
					<th scope="col" class="px-6 py-3">
						Quantity
					</th>
					<th scope="col" class="px-6 py-3">
						Harga Pinjam
					</th>

					<th scope="col" class="px-6 py-3">
						Action
					</th>
				</tr>
			</thead>
			<tbody>

				<?php while ($row = $this->model->fetch($data)) {
					echo "
						<tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600'>

							<th scope='row' class='px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white'>
								$row[0]
							</th>
							<td class='px-6 py-4'>
								$row[1]
							</td>
							<td class='px-6 py-4'>
							$row[2]
							</td>
							<td class='px-6 py-4'>
							$row[6]
							</td>
							<td class='px-6 py-4'>
							$row[7]
							</td>
							<td class='flex items-center px-6 py-4 space-x-3'>
								<a href='index.php?e=$row[0]' class='font-medium text-blue-600 dark:text-blue-500 hover:underline'>Edit</a>
								<a href='index.php?d=$row[0]' onClick=\"return confirm('Hapus Data?')\" class='font-medium text-red-600 dark:text-red-500 hover:underline'>Remove</a>
							</td>
						</tr>
					
					";
				} ?>


			</tbody>
		</table>
	</div>



	<!-- <div>
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
	</div> -->


	<!-- <div>
		<div>
			<a href='index.php'><button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out btn">Home</button></a>
			<a href='index.php?p=peminjaman'><button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out btn">Peminjaman</button></a>
			<a href='index.php?a=anggota'><button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out btn">Anggota</button></a>
			<a href='index.php?t=penerbit'><button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out btn">Penerbit</button></a>
			<a href='index.php?g=pengarang'><button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out btn">Pengarang</button></a>


		</div>
	</div> -->



	<!-- <div>
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
	</div> -->

	<!-- <div class="mx-8">
		<div class="flex flex-col">
			<div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
				<div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
					<div class="overflow-hidden">


					
						<table class="min-w-full text-center">
							<thead class="border-b bg-sky-500">
								<tr>
									<th scope="col" class="text-sm font-medium text-white px-6 py-4">
										Kode Buku
									</th>
									<th scope="col" class="text-sm font-medium text-white px-6 py-4">
										Nama Buku
									</th>
									<th scope="col" class="text-sm font-medium text-white px-6 py-4">
										Tahun
									</th>
									<th scope="col" class="text-sm font-medium text-white px-6 py-4">
										Quantity
									</th>
									<th scope="col" class="text-sm font-medium text-white px-6 py-4">
										Harga Pinjam
									</th>
									<th scope="col" class="text-sm font-medium text-white px-6 py-4">
										Aksi
									</th>
									<th scope="col" class="text-sm font-medium text-white px-6 py-4">

									</th>
								</tr>
							</thead class="border-b">
							<tbody>

								<?php while ($row = $this->model->fetch($data)) {
									echo "
                                        <tr class='bg-white border-b'>
                                            <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900'>$row[0]</td>
                                            <td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'>$row[1]</td>
                                            <td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'>$row[2]</td>
                                            <td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'>$row[6]</td>
                                            <td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'>$row[7]</td>
                                            <td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'><a href='index.php?e=$row[0]'>   <button type='button' class='inline-block px-6 py-2.5 bg-yellow-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-yellow-600 hover:shadow-lg focus:bg-yellow-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-700 active:shadow-lg transition duration-150 ease-in-out btn-edit'>edit</button></a></td>
                                            <td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'><a href='index.php?d=$row[0]' onClick=\"return confirm('Hapus Data?')\"\><button type='button' class='inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out btn-hapus'>Delete</button></a></td>
                                        </tr>
                                    ";
								} ?>





							</tbody>
						</table>

						<center></center>
					</div>
				</div>
			</div>
		</div>
	</div> -->
</body>

</html>