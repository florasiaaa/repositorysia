<?php
// Memeriksa apakah HTTPS digunakan
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
	$uri = 'https://';
} else {
	$uri = 'http://';
}

// Menyusun URL dengan HTTP_HOST
$uri .= $_SERVER['HTTP_HOST'];

// Mengarahkan ke halaman dashboard
header('Location: ' . $uri . '/dashboard/');
exit;

// Menampilkan pesan jika terjadi masalah dengan instalasi XAMPP
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Error</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100vh;
			margin: 0;
		}

		.container {
			text-align: center;
			background-color: white;
			padding: 20px;
			border-radius: 8px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
		}

		h1 {
			color: #ff0000;
		}
	</style>
</head>

<body>
	<div class="container">
		<h1>Something is wrong with the XAMPP installation :-(</h1>
		<p>Cek terlebih dahulu <a href="https://www.apachefriends.org/index.html" target="_blank">XAMPP website</a> for
			support.</p>
	</div>
</body>

</html>
