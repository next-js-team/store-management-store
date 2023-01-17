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
	<section class="form mt-6 pt-8">
		<div class="w-full">
			<div class="grid place-items-center">
				<div class="w-full max-w-2xl bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">

					<div class="flex flex-col items-center pb-10">

						<h1 class="mb-1 mt-6 text-xl font-medium text-gray-900 dark:text-white">Form Tambah Data Mahasiswa</h1>

						<div class="mt-4 w-full">
							<form action="" method="POST">
								<div class="flex flex-col">
								<!-- id -->
								<div class="mb-6 mx-4 w-full  ">
										<label for="username-success" class="block ml-20 mb-2 text-sm font-medium text-green-700 dark:text-green-500">ID</label>
										<div class="grid place-items-center">
											<input value="<?= $row[0] ?>" readonly name="id" type="text" id="" class=" w-[80%] bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 p-2.5 dark:bg-green-100 dark:border-green-400">
										</div>

									</div>

									<!-- Nama -->
									<div class="mb-6 mx-4 w-full  ">
										<label for="username-error" class="block mb-2 ml-20 text-sm font-medium text-green-700 dark:text-green-500">Nama</label>
										<div class="grid place-items-center">
											<input  value="<?= $row[1] ?>" required name="nama" type="text" id="" class="w-[80%] bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block p-2.5 dark:bg-green-100 dark:border-green-400">
										</div>

									</div>


									<!-- NO HP -->
                                    <div class="mb-6 mx-4 w-full  ">
                                        <label class="block ml-20 mb-2 text-sm font-medium text-green-700 dark:text-green-500">Nomor Handphone</label>
                                        <div class="grid place-items-center">
                                            <input value="<?= $row[2] ?>"  required name="no_hp" type="text" id="nohp" class=" w-[80%] bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 p-2.5 dark:bg-green-100 dark:border-green-400" >
                                        </div>
                                        
                                    </div>

									<!-- Tempat -->
									<div class="mb-6 mx-4 w-full  ">
										<label for="username-error" class="block mb-2 ml-20 text-sm font-medium text-green-700 dark:text-green-500">Tujuan</label>
										<div class="grid place-items-center">
											<input value="<?= $row[3] ?>" required name="tujuan" type="text" id="" class="w-[80%] bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block p-2.5 dark:bg-green-100 dark:border-green-400">
										</div>

									</div>


									<!-- Tanggal Kunjungan -->
                                    <div class="mb-6 mx-4 w-full  ">
                                        <label class="block mb-2 ml-20 text-sm font-medium text-green-700 dark:text-green-500">Tanggal Keberangkatan</label>
                                        <div class="grid place-items-center">
                                            <input value="<?= $row[4] ?>" required  name="tanggal" type="date" id="tanggal" class="w-[80%] bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block p-2.5 dark:bg-green-100 dark:border-green-400" >
                                        </div>
                                       
                                    </div> 



									<div class="flex flex-row items-center justify-center">

										<input class="bg-cyan-500 text-white rounded-md p-2 hover:bg-cyan-400" type="submit" name="submit" value="Update Data" />

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
	$main->update();
}
?>