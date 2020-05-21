<!-- Jako, że nie miałem bazy danych, zrobiłem test struktury tabeli w PHP dla tabeli o 6 kolumnach -->
<!DOCTYPE html>
<html lang = "pl">
<head>

	<meta charset = "utf-8">
	<title>Prognoza pogody Poznań</title>
	<link rel = "stylesheet" href = "styl4.css">
	
</head>
<body>
<?php
echo <<< END
				<table>
				<tr><th>Lp.</th><th>DATA</th><th>NOC - TEMPERATURA</th><th>DZIEŃ - TEMPERATURA</th>
				<th>OPADY [mm/h]</th> <th> CISNIENIE [hPa]</th></tr>
END;
				$lp = 1;
				for($i = 0; $i < 5; $i++){
					echo "<tr>"."<td>".$lp."</td>"."<td>".$i."</td>"."<td>".$i."</td>"."<td>".$i."</td>".
					"<td>".$i."</td>"."<td>".$i."</td>"."</tr>";
					$lp++;
				}
?>
</body>
</html>