<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Tambah Data</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css" rel="stylesheet" /> -->

</head>

<body>


	<div class="relative shadow bg-white">
		<div class="absolute inset-0 bg-cover bg-center bg-no-repeat bg-fixed bg-sky-500" style=""></div>

		<div class="w-full backdrop-blur-sm">
			<div class="relative z-1 h-16 mx-auto px-5 max-w-7xl flex items-center justify-between text-white">
				<a class="text-2xl hover:text-cyan-400 transition-colors" href="">Store Management</a>

				<ul class="flex items-center gap-5">
					<li><a class="hover:text-cyan-400 transition-colors" href='index.php'>Home</a></li>
					<!-- <li><a class="hover:text-cyan-400 transition-colors" href='index.php?p=peminjaman'>Peminjaman</a></li>
					<li><a class="hover:text-cyan-400 transition-colors" href='index.php?a=anggota'>Anggota</a></li>
					<li><a class="hover:text-cyan-400 transition-colors" href='index.php?t=penerbit'>Penerbit</a></li>
					<li><a class="hover:text-cyan-400 transition-colors" href='index.php?g=pengarang'>Pengarang</a></li> -->
				</ul>
			</div>
		</div>
	</div>



	<section class="form mt-6 pt-8">
		<div class="w-full">
			<div class="grid place-items-center">
				<div class="w-full max-w-2xl bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">

					<div class="flex flex-col items-center pb-10">

						<h1 class="mb-1 mt-6 text-xl font-medium text-gray-900 dark:text-white">Form Tambah Data Products</h1>

						<div class="mt-4 w-full">
							<form action="" method="POST">
								<div class="flex flex-col mx-20">



									<!-- <div class="relative z-0 w-full mb-6 group">
										<input type="text" name="id" id="" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
										<label class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kode Buku</label>
									</div> -->
									<div class="relative z-0 w-full mb-6 group">
										<input type="text" name="namaproducts" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
										<label class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Products</label>
									</div>

									
									<div class="relative z-0 w-full mb-6 group">
										<select name="idsupplier" id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
											<option selected>ID Supplier</option>
											<?php while ($data = $this->model->fetch($idSupplier)) {
												echo "<option value='$data[0]'>$data[0]</option>";
											} ?>
										</select>
									</div>
									
									<div class="relative z-0 w-full mb-6 group">
										<input type="number" min="1" max="1000000" name="price" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
										<label class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Price</label>
									</div>
									<div class="relative z-0 w-full mb-6 group">
										<input type="number" min="1" max="1000" name="quantity" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
										<label class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Quantity</label>
									</div>
									<div class="relative z-0 w-full mb-6 group">
										<select name="idcatgory" id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
											<option selected>ID Category</option>
											<?php while ($datacategory = $this->model->fetch($idCategory)) {
												echo "<option value='$datacategory[0]'>$datacategory[0]</option>";
											} ?>
										</select>
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

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script> -->

</body>

</html>
<?php
if (isset($_POST['submit'])) { //jika button submit diklik maka panggil fungsi insert pada controller
	$main = new controller();
	$main->insert();
}
?>