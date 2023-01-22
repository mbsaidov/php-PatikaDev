<?php
function tree($sayi){
	$row = 0;
	while ($row <= $sayi) {
		
		for ($i=0; $i <= $row; $i++) { 
			echo "O";
		}
		$row++;
		echo "<br>";
	}
}
tree(15);
