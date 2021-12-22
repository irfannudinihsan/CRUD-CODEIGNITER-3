<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Halaman Home</title>
	<style>
		body {
			background-color: black;
		}
		td {
			color: whitesmoke;
		}
		h1 {
			display: flex;
			justify-content: center;
			align-items: center;
			color: black;
			animation: glow 1s ease-in-out infinite alternate;
		}
		@keyframes glow {
			from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
		}
		tbody :hover {
			color: brown;
		}
	</style>
</head>
<body>

<div class="container w-75 mt-5">
	<h1 >Data Mahasiswa</h1>
<a href="<?php echo base_url('/home/halaman_tambah') ?>" class="btn btn-primary btn-lg active " role="button" aria-pressed="true">tambah</a>
<table class="table table-hover table-bordered border-danger">
<br>
  <thead class="">
	  <tr>
		  <td>No</td>
		  <td>NIM</td>
		  <td>Nama </td>
		  <td>Jurusan</td>
		  <td>Aksi</td>
	  </tr>
  </thead>
  <tbody>
	  <?php
	  $count = 0;
	  	foreach($queryAllMhs as $row) {
			  $count = $count + 1;

	  ?>
	  <tr>
		  <td><?php echo $count ?></td>
		  <td><?php echo $row->nama ?></td>
		  <td><?php echo $row->nim ?></td>
		  <td><?php echo $row->jurusan ?> </td>
		  <td><a href="<?php echo base_url('/home/halaman_edit') ?>/<?php echo $row->nim ?> " class="btn btn-primary btn-lg active" role="button" aria-pressed="true">edit</a> | <a href="<?php echo base_url('/home/fungsiDelete') ?>/<?php echo $row->nim ?>" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</a></td>
	  </tr>
	  <?php } ?>
  </tbody>
</table>
</div>

</body>
</html>