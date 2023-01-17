<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
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



	<section class="form mt-6 pt-8">
		<div class="w-full">
			<div class="grid place-items-center">
				<div class="w-full max-w-2xl bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">

					<div class="flex flex-col items-center pb-10">

						<h1 class="mb-1 mt-6 text-xl font-medium text-gray-900 dark:text-white">Form Tambah Data Pemesanan Tiket</h1>

						<div class="mt-4 w-full">
							<form action="" method="POST">
								<div class="flex flex-col">



									<div class="relative z-0 w-full mb-6 group">
										<input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
										<label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
									</div>
									<div class="relative z-0 w-full mb-6 group">
										<input type="password" name="floating_password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
										<label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
									</div>
									<!-- Nama -->
									<div class="mb-6 mx-4 w-full  ">
										<label for="username-error" class="block mb-2 ml-20 text-sm font-medium text-green-700 dark:text-green-500">Nama</label>
										<div class="grid place-items-center">
											<input required name="nama" type="text" id="" class="w-[80%] bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block p-2.5 dark:bg-green-100 dark:border-green-400">
										</div>

									</div>


									<!-- NO HP -->
									<div class="mb-6 mx-4 w-full  ">
										<label class="block ml-20 mb-2 text-sm font-medium text-green-700 dark:text-green-500">Nomor Handphone</label>
										<div class="grid place-items-center">
											<input required name="no_hp" type="number" id="nohp" class=" w-[80%] bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 p-2.5 dark:bg-green-100 dark:border-green-400">
										</div>

									</div>

									<!-- Tempat -->
									<div class="mb-6 mx-4 w-full  ">
										<label for="username-error" class="block mb-2 ml-20 text-sm font-medium text-green-700 dark:text-green-500">Tujuan</label>
										<div class="grid place-items-center">
											<input required name="tujuan" type="text" id="" class="w-[80%] bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block p-2.5 dark:bg-green-100 dark:border-green-400">
										</div>

									</div>


									<!-- Tanggal Kunjungan -->
									<div class="mb-6 mx-4 w-full  ">
										<label class="block mb-2 ml-20 text-sm font-medium text-green-700 dark:text-green-500">Tanggal Keberangkatan</label>
										<div class="grid place-items-center">
											<input required name="tanggal" type="date" id="tanggal" class="w-[80%] bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block p-2.5 dark:bg-green-100 dark:border-green-400">
										</div>

									</div>



									<div class="flex flex-row items-center justify-center">

										<input class="bg-cyan-500 text-white rounded-md p-2 hover:bg-cyan-400" type="submit" name="submit" value="Tambah Data" />

									</div>





								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
</body>

</html>
<?php
if (isset($_POST['submit'])) { //jika button submit diklik maka panggil fungsi insert pada controller
	$main = new controller();
	$main->insert();
}
?>