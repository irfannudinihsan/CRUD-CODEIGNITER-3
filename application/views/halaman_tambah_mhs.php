<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style>
		body {
			background-color: black;
		}
		td {
			color: whitesmoke;
		}
		.form {
			display: flex;
			justify-content: center;
			align-items: center;
			width: 50%;
		}
		.container {
			display: flex;
			justify-content: center;
			align-items: center;
			margin: 100px auto;
		}
		form {
			border: 1px solid red;
			padding: 10px;
			border-radius: 10px;
		}

	</style>
</head>
<body>
	<div class="container">
	<div class="form">
	<form class="w-75" action="<?php echo base_url('home/fungsiTambah') ?>" method="POST" di>
			 <div class="item form-group  mt-2 pt-2">
				<label style="color:white">nim</label>
				<div>
					<input type="text" name="nim" class="form-control" placeholder="nim " required>
				</div>
			</div>
			<div class="item form-group  mt-2 pt-2">
				<label style="color:white">nama</label>
				<div>
					<input type="text" name="nama" class="form-control" placeholder="nama kamu " required>
				</div>
			</div>
			<div class="item form-group  mt-2 pt-2">
				<label style="color:white">Jurusan</label>
				<div>
					<input type="text" name="jurusan" class="form-control" placeholder="jurusan " required>
				</div>
			</div>

			<div class="item form-group mt-2 pb-2">
				<div>
					<input type="submit" name="submit" class="btn btn-primary" value="simpan">
			</div>
            </div>

		</form>
	</div>
    
    
	</div>
   
</body>
</html>