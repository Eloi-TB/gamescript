<?php
	session_start();

	echo "<h2>Hall of Fame ".$_SESSION['size']." (temps)</h2>";
	//HALL OF FAME (mínim temps)
	//select nom, min(temps) from minesweeper where template='8x8' and victoria=1 group by nom order by min(temps);

	include("open_db.php");
	

	$sql = "select nom, min(temps) as min_temps from minesweeper where template='".$_SESSION['size']."' and victoria=1 group by nom order by min(temps)";
	//echo $sql;

	$result=mysqli_query($conn,$sql);

	if (!$result) {
	    $message  = 'Invalid query: ' . mysqli_error() . "\n";
	    die($message);
	}

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    echo "<ul>";
	    while($row = mysqli_fetch_assoc($result)) {
	        echo "<li>" . $row["nom"].": " . $row["min_temps"]." seg</li>";
    	}
	    echo "</ul>";
	} else {
		echo "De moment ningú ha aconseguit acabar!";
	}

	echo "<h2>Hall of Fame ".$_SESSION['size']." (victòries / totals)</h2>";
	//llista tots els participants i posar-los en un array
	//l'array té quatre camps: nom, victòries, total partides, ratio:victories
	//ordenar l'array per ratio victòries
	//imprimir l'array 
	//https://www.jose-aguilar.com/blog/multidimensional-array-sort/

	$sql = "select distinct nom from minesweeper where template='".$_SESSION['size']."'";
	$result=mysqli_query($conn,$sql);

	if (!$result) {
	    $message  = 'Invalid query: ' . mysqli_error() . "\n";
	    die($message);
	}

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $usuaris[] = array('nom' => $row["nom"], 'victories' => 0, 'total_partides' => 0, 'ratio' => 0);
    	}

		foreach ($usuaris as $key => $fila) {

		    $sql = "select count(*) as num from minesweeper where template='".$_SESSION['size']."' and victoria=1 and nom='".$fila['nom']."'";
			//echo $sql;
			$result=mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			$usuaris[$key]['victories'] = $row["num"];

		    $sql = "select count(*) as num from minesweeper where template='".$_SESSION['size']."' and nom='".$fila['nom']."'";
			//echo $sql;
			$result=mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			$usuaris[$key]['total_partides'] = $row["num"];

			$usuaris[$key]['ratio'] = round($usuaris[$key]['victories'] / $usuaris[$key]['total_partides'], 2);

		}


		foreach ($usuaris as $key => $row) {
		    $aux[$key] = $row['ratio'];
		}

		array_multisort($aux, SORT_DESC, $usuaris);

		echo "<ul>";
		foreach ($usuaris as $key => $row) {
		    echo "<li>" . $row['nom']." (".$row['victories']." / ".$row['total_partides']." = ".$row['ratio'].")</li>";
		}
		echo "</ul>";
		
	} else {
		echo "De moment ningú ha jugat a ".$_SESSION['size'];
	}


	echo "<h2>Hall of Fame ".$_SESSION['size']." (victòries totals)</h2>";
	$sql = "select nom, count(*) as num from minesweeper where template='".$_SESSION['size']."' and victoria=1 group by nom order by num desc";
	//echo $sql;

	$result=mysqli_query($conn,$sql);

	if (!$result) {
	    $message  = 'Invalid query: ' . mysqli_error() . "\n";
	    die($message);
	}

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    echo "<ul>";
	    while($row = mysqli_fetch_assoc($result)) {
	        echo "<li>" . $row["nom"]." (" . $row["num"].")</li>";
    	}
	    echo "</ul>";
	} else {
		echo "De moment ningú ha aconseguit acabar!";
	}

	include("close_db.php");
?>