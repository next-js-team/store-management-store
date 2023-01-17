<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Perpustakaan Management</title>
	<!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>

<body>

	<div class="w-full h-20 pt-8 pb-8">
		<div class="grid place-content-center">
			<h1 class="font-bold text-2xl text-gray-700 uppercase">Perpustakaan Management</h1>
		</div>

	</div>


	<div>
		<div>
        <a href='index.php'><button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Home</button></a>
			<a href='index.php?p=peminjaman'><button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Peminjaman</button></a>
			<a href='index.php?a=anggota'><button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Anggota</button></a>
			<a href='index.php?t=penerbit'><button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Penerbit</button></a>
			<a href='index.php?g=pengarang'><button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Pengarang</button></a>


		</div>
	</div>

	<div class="mx-8">
		<div class="flex flex-col">
			<div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
				<div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
					<div class="overflow-hidden">
						<table class="min-w-full text-center">
							<thead class="border-b bg-sky-500">
								<tr>
									<th scope="col" class="text-sm font-medium text-white px-6 py-4">
										ID Penerbit
									</th>
									<th scope="col" class="text-sm font-medium text-white px-6 py-4">
										Nama Penerbit
									</th>
									<th scope="col" class="text-sm font-medium text-white px-6 py-4">
										Email
									</th>
									<th scope="col" class="text-sm font-medium text-white px-6 py-4">
										No Telepon
									</th>
									<th scope="col" class="text-sm font-medium text-white px-6 py-4">
										Alamat
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
                                            <td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'>$row[3]</td>
                                            <td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'>$row[4]</td>
                                            <td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'><a href='index.php?e=$row[0]'>   <button type='button' class='inline-block px-6 py-2.5 bg-yellow-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-yellow-600 hover:shadow-lg focus:bg-yellow-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-700 active:shadow-lg transition duration-150 ease-in-out'>edit</button></a></td>
                                            <td class='text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap'><a href='index.php?d=$row[0]' onClick=\"return confirm('Hapus Data?')\"\><button type='button' class='inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out'>Delete</button></a></td>
                                        </tr>
                                    ";
								} ?>





							</tbody>
						</table>
						<div class="my-2 ">
							<div class="flex space-x-2 justify-center">
								<a href='index.php?i=add'><button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Tambah Data</button></a>

							</div>
						</div>
						<center></center>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>