</!DOCTYPE html>
<html>
<head>
	<title>DataMahasiswa</title>
</head>
<body>
	<table border ="1" style="border-collapse:collapse; width:50%;">
		<tr style="background:gray">
			<th>No induk</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Action</th>
		</tr>
		<?php foreach($data as $d){ ?>
		<tr>
			<td><?php echo $d['NIM']; ?></td>
			<td><?php echo $d['Nama']; ?></td>
			<td><?php echo $d['Alamat']; ?></td>
			<td>
				<a href="#">Edit</a>||
				<a href="#">Delete</a>
			</td>
		</tr>
		<?php }?>
	</table>
	<a href="<?php echo base_url()."index.php/crud/add_data"; ?>">Tambah Data</a>
</body>
</html>