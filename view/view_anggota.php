<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Perpustakaan Management</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

<div class="relative shadow bg-white">
		<div class="absolute inset-0 bg-cover bg-center bg-no-repeat bg-fixed bg-sky-500" style=""></div>

		<div class="w-full backdrop-blur-sm">
			<div class="relative z-1 h-16 mx-auto px-5 max-w-7xl flex items-center justify-between text-white">
				<a class="text-2xl hover:text-cyan-400 transition-colors" href="">Perpustakaan Management</a>

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
		<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 overflow-x-scroll">
			<thead class="overflow-x-scroll text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
				<tr>

					<th scope="col" class="px-6 py-3">
						ID Anggota
					</th>
					<th scope="col" class="px-6 py-3">
						Nama
					</th>
					<th scope="col" class="px-6 py-3">
						username
					</th>
					<th scope="col" class="px-6 py-3">
						Password
					</th>
					
					<th scope="col" class="px-6 py-3">
						Jenis Kelamin
					</th>
					<th scope="col" class="px-6 py-3">
						No Telepon
					</th>
					<th scope="col" class="px-6 py-3">
						Alamat
					</th>
					<th scope="col" class="px-6 py-3">
						Email
					</th>
					<th scope="col" class="px-6 py-3">
						Tanggal Entry
					</th>
					<th scope="col" class="px-6 py-3">
						Role
					</th>
					

					<th scope="col" class="px-6 py-3">
						Action
					</th>
				</tr>
			</thead>
			<tbody class="overflow-y-scroll w-full" style="height: 20vh;">

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
							$row[3]
							</td>
							<td class='px-6 py-4'>
							$row[4]
							</td>
							<td class='px-6 py-4'>
							$row[5]
							</td>
							<td class='px-6 py-4'>
							$row[6]
							</td>
							<td class='px-6 py-4'>
							$row[7]
							</td>
							<td class='px-6 py-4'>
							$row[8]
							</td>
							<td class='px-6 py-4'>
							$row[9]
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
</body>

</html>