<form action=" " method="post">
	
	Hobi : <input type="checkbox" name="data[]" value="Sepak Bola">Sepak Bola
	<input type="checkbox" name="data[]" value="Basket">Basket
	<input type="checkbox" name="data[]" value="Bobo Cantik">Bobo Cantik
	<input type="checkbox" name="data[]" value="Keluyuran">Keluyuran<br>
	Upload Foto : <input type="file" name="foto[]">
	<br><input type="submit" name="submit" value="Kirim">
</form>
<?php
	if (isset($_POST['submit'])) {
		$gambar = $_POST['foto'];
		$hobi = $_POST['data'];
	}
	?>
<?php	
	if (isset($_POST['submit'])) {
		for ($i=0; $i < count($hobi); $i++) { 
			echo "$hobi[$i]".",";
		}
		
		echo "<br>".$gambar[0];
		
	}
	?>
