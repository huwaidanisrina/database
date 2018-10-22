<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data dari database</h2>

	</div>

	<br/>

	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Input data baru</h3>
	<form action="input.php" method="post">
		<table>
      <tr>
        <td>Id</td>
        <td><input type="text" name="Id"></td>
      </tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="Username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="Password"></td>
			</tr>
			<tr>
				<td>Level</td>
				<td><input type="text" name="Level"></td>
			</tr>
      <tr>
				<td>Fullname</td>
				<td><input type="text" name="Fullname"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>