</!DOCTYPE html>
<html>
<head>
	<title>DataMahasiswa</title>
</head>
<body>
	<from method="POST" action="<?php echo base_url()."index.php/crud/do_insert"; ?>">
	<table>
		<tr>
			<td>No INDUK :</td>
			<td><input type="text" name="NIM" /></td>
		</tr>
		<tr>
			<td>Nama :</td>
			<td><input type="text" name="Nama" /></td>
		</tr>
		<tr>
			<td>Alamat :</td>
			<td><textarea name="Alamat"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btnSubmit" value="simpan" /></td>
		</tr>
	</table>
</from>
</body>
</html>