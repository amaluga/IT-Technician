<!DOCTYPE html>
<html lang = "pl">
<head>

	<meta charset = "utf-8">
	<title>Prognoza pogody Poznań</title>
	<link rel = "stylesheet" href = "styl4.css">
	
</head>
<body>
	
	<div class = "bcontainer"> 
		<div class = "bleft"><p> maj, 2019 r.</p></div>
		<div class = "bmid"><h2>Prognoza dla Poznania</h2></div>
		<div class = "bright"><img src = "logo.png" alt = "prognoza"></div>
	</div>
	
	<div class = "mcontainer">
		<div class = "mleft"><a href = "kwerendy.txt">Kwerendy</a></div>
		<div class = "mright"> <img src = "obraz.jpg" alt = "Polska, Poznań"> </div>
	</div>
	<div class = "content">
		
		<?php
			require_once "dbconnect.php";
			
			$conn = mysqli_connect($host, $user, $password, $prognoza) or die ("Błąd połączenia z bazą danych");
			$q = "SELECT * FROM pogoda WHERE id = 2 ORDER BY data_prognozy DESC";
			
			$result = mysqli_query($conn, $q) or die ("Błąd zapytania");
			
			$howMany = mysqli_num_rows($result);
			if ($howMany != 0){
				
				echo <<< END
				<table>
				<tr><th>Lp.</th><th>DATA</th><th>NOC - TEMPERATURA</th><th>DZIEŃ - TEMPERATURA</th>
				<th>OPADY [mm/h]</th> <th> CISNIENIE [hPa]</th></tr>
END;
				$lp = 1;
				while($row = mysqli_fetch_array($result)){
					echo "<tr>"."<td>".$lp."</td>"."<td>".$row[0]."</td>"."<td>".$row[1]."</td>"."<td>".$row[2]."</td>".
					"<td>".$row[3]."</td>"."<td>".$row[4]."</td>"."</tr>";
					$lp++;
				}
				echo "</table>";
				
							
			} else {
				echo "Tabela ma zero rekordów";
			}
			
			
			
			
			mysqli_close($conn);
	
		?>
	
	</div>
	<div class = "footer"> <p> Stronę wykonał: Amadeusz Maluga </p> </div>
	
</body>
</html>