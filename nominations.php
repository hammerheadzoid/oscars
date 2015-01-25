<?php
//start a session so that the user can be tracked on the computer
session_start(); 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="oscars.css" />
	<title>Oscars 2015 - Nominations Page!</title>
</head>

<body>
<?php
if(isset($_SESSION['name']))
{
	?>
	<div id="container">	
	
	<?php 
		// Set the debug level
		$debug = true;

		if (true === $debug) {
			ini_set('display_errors', 0);
			error_reporting(E_ALL);
		}
		
		// Print the person whos user session it is to the screen
		$name = $_SESSION['name']; 
		echo "<h1>" .$name ."'s Nominations Page";
	?>

	<hr>
	<?php
		// This might be a good place to make sure that the place names are remembered. 
		if ($flagMe == "see")
		{
			echo "nice buns doll";
			$list1 = 99;
		}
		else
		{
			$list1 = 88;
		}
		$list2 = 0;
		$list3 = 0;
		$list4 = 0;
		$list5 = 0;
		$list6 = 0;
		$list7 = 0;
		$list8 = 0;
		$list9 = 0;
		echo "We are at the beginning $list1,$list2,$list3,$list4,$list5,$list6,$list7,$list8,$list9";
	?>
	<form>
	<h3>Best Picture:</h3>
	<select id="myList1" name="noms1">
		<option value=0 selected>(Choose Best Picture)</option>
		<option value=1>American Sniper (Clint Eastwood)</option>
		<option value=2>Boyhood (Richard Linklater)</option>
		<option value=3>Birdman (Alejandro González Iñárritu) </option>
		<option value=4>The Grand Budapest Hotel (Wes Anderson)</option>
		<option value=5>The Imitation Game (Morten Tyldum)</option>
		<option value=6>Selma (Ava DuVernay)</option>
		<option value=7>The Theory of Everything (James Marsh)</option>
		<option value=8>Whiplash (Damien Chazelle)</option>
	</select>
	</br></br>
	<h3>Best Directing:</h3>
	<select id="myList2" name="noms2">
		<option value=0 selected>(Choose Best Directing)</option>
		<option value=1>Wes Anderson (The Grand Budapest Hotel)</option>
		<option value=2>Alejandro Gonzalez Inarritu (Birdman)</option>
		<option value=3>Richard Linklater (Boyhood)</option>
		<option value=4>Bennett Miller (Foxcatcher)</option>
		<option value=5>Morten Tyldum (The Imitation Game)</option>
	</select>
	</br></br>
	<h3>Best Actor:</h3>
	<select id="myList3" name="noms3">
		<option value=0 selected>(Best Actor)</option>
		<option value=1>Steve Carell (Foxcatcher)</option>
		<option value=2>Bradley Cooper (American Sniper)</option>
		<option value=3>Benedict Cumberbatch (The Imitation Game)</option>
		<option value=4>Michael Keaton (Birdman)</option>
		<option value=5>Eddie Redmayne (The Theory of Everything)</option>
	</select>
	</br></br>
	<h3>Best Actress:</h3>
	<select id="myList4" name="noms4">
		<option value=0 selected>(Choose Best Actress)</option>
		<option value=1>Marion Cotillard (Two Days, One Night)</option>
		<option value=2>Felicity Jones (The Theory Of Everything)</option>
		<option value=3>Julianne Moore (Still Alice)</option>
		<option value=4>Rosamund Pike (Gone Girl)</option>
		<option value=5>Reese Witherspoon (Wild)</option>
	</select>
	</br></br>
	<h3>Best Supporting Actor:</h3>
	<select id="myList5" name="noms5">
		<option value=0 selected>(Choose Best Actor)</option>
		<option value=1>Robert Duvall (The Judge)</option>
		<option value=2>Ethan Hawke (Boyhood)</option>
		<option value=3>Edward Norton (Birdman)</option>
		<option value=4>Mark Ruffalo (Foxcatcher)</option>
		<option value=5>JK Simmons (Whiplash)</option>
	</select>
	</br></br>
	<h3>Best Supporting Actress:</h3>
	<select id="myList6" name="noms6">
		<option value=0 selected>(Choose Best Actress)</option>
		<option value=1>Patricia Arquette (Boyhood)</option>
		<option value=2>Keira Knightley (The Imitation Game)</option>
		<option value=3>Emma Stone (Birdman)</option>
		<option value=4>Meryl Streep (Into The Woods)</option>
		<option value=5>Laura Dern (Wild)</option>
	</select>
	</br></br>
	<h3>Best Animated Feature Film:</h3>
	<select id="myList7" name="noms7">
		<option value=0 selected>(Choose Best Animated Feature Film)</option>
		<option value=1>Big Hero 6</option>
		<option value=2>The Box Trolls</option>
		<option value=3>How To Train Your Dragon 2</option>
		<option value=4>Song of the Sea</option>
		<option value=5>The Tale Of Princess Kaguya</option>
	</select>
	</br></br>
	<h3>Best Original Song:</h3>
	<select id="myList8" name="noms8">
		<option value=0 selected>(Choose Best Song)</option>
		<option value=1>Everything is Awesome (The Lego Movie)</option>
		<option value=2>Glory (Selma)</option>
		<option value=3>Grateful (Beyond the Lights)</option>
		<option value=4>I'm not Gonna Miss You (Glenn Campbell: I’ll Be Me)</option>
		<option value=5>Lost Stars (Begin Again)</option>
	</select>
	</br></br>
	<h3>Best Visual Effects:</h3>
	<select id="myList9" name="noms9">
		<option value=0 selected>(Choose Best Visual Effects)</option>
		<option value=1>Captain America</option>
		<option value=2>The Winter Soldier</option>
		<option value=3>Dawn of the Planet of the Apes</option>
		<option value=4>Guardians of the Galaxy</option>
		<option value=5>Interstellar</option>
		<option value=6>X-Men: DOFP</option>
	</select>
	</br></br>
	
	</br>
	<?php
		echo "before button $list1,$list2,$list3,$list4,$list5,$list6,$list7,$list8,$list9</br>";
		echo '<input type="submit" value="Choose These Options"></br>';
		echo "after button $list1,$list2,$list3,$list4,$list5,$list6,$list7,$list8,$list9";
	
		if ($_GET['noms1']) 
		{
			$got1 = $_GET['noms1'];
			$list1 = $got1;
			switch ($list1)
			{
				case 1:
					$noms1 = "American Sniper (Clint Eastwood)";
					break;
				case 2:
					$noms1 = "Boyhood (Richard Linklater)";
					break;
				case 3:
					$noms1 = "Birdman (Alejandro González Iñárritu)";
					break;
				case 4:
					$noms1 = "The Grand Budapest Hotel (Wes Anderson)";
					break;
				case 5:
					$noms1 = "The Imitation Game (Morten Tyldum)";
					break;
				case 6:
					$noms1 = "Selma (Ava DuVernay)";
					break;
				case 7:
					$noms1 = "The Theory of Everything (James Marsh)";
					break;
				case 8:
					$noms1 = "Whiplash (Damien Chazelle)";
					break;
				default:
					break;
			}
		}
		if ($_GET['noms2']) 
		{
			$got2 = $_GET['noms2'];
			$list2 = $got2;
			switch ($list2)
			{
				case 1:
					$noms2 = "Wes Anderson (The Grand Budapest Hotel)";
					break;
				case 2:
					$noms2 = "Alejandro Gonzalez Inarritu (Birdman)";
					break;
				case 3:
					$noms2 = "Richard Linklater (Boyhood)";
					break;
				case 4:
					$noms2 = "Bennett Miller (Foxcatcher)";
					break;
				case 5:
					$noms2 = "Morten Tyldum (The Imitation Game)";
					break;
				default:
					break;
			}
		}
		if ($_GET['noms3']) 
		{
			$got3 = $_GET['noms3'];
			$list3 = $got3;
			switch ($list3)
			{
				case 1:
					$noms3 = "Steve Carell (Foxcatcher)";
					break;
				case 2:
					$noms3 = "Bradley Cooper (American Sniper)";
					break;
				case 3:
					$noms3 = "Benedict Cumberbatch (The Imitation Game)";
					break;
				case 4:
					$noms3 = "Michael Keaton (Birdman)";
					break;
				case 5:
					$noms3 = "Eddie Redmayne (The Theory of Everything)";
					break;
				default:
					break;
			}
		}
		if ($_GET['noms4']) 
		{
			$got4 = $_GET['noms4'];
			$list4 = $got4;
			switch ($list4)
			{
				case 1:
					$noms4 = "Marion Cotillard (Two Days, One Night)";
					break;
				case 2:
					$noms4 = "Felicity Jones (The Theory Of Everything)";
					break;
				case 3:
					$noms4 = "Julianne Moore (Still Alice)";
					break;
				case 4:
					$noms4 = "Rosamund Pike (Gone Girl)";
					break;
				case 5:
					$noms4 = "Reese Witherspoon (Wild)";
					break;
				default:
					break;
			}
		}
		if ($_GET['noms5']) 
		{
			$got5 = $_GET['noms5'];
			$list5 = $got5;
			switch ($list5)
			{
				case 1:
					$noms5 = "Robert Duvall (The Judge)";
					break;
				case 2:
					$noms5 = "Ethan Hawke (Boyhood)";
					break;
				case 3:
					$noms5 = "Edward Norton (Birdman)";
					break;
				case 4:
					$noms5 = "Mark Ruffalo (Foxcatcher)";
					break;
				case 5:
					$noms5 = "JK Simmons (Whiplash)";
					break;
				default:
					break;
			}
		}
		if ($_GET['noms6']) 
		{
			$got6 = $_GET['noms6'];
			$list6 = $got6;
			switch ($list6)
			{
				case 1:
					$noms6 = "Patricia Arquette (Boyhood)";
					break;
				case 2:
					$noms6 = "Keira Knightley (The Imitation Game)";
					break;
				case 3:
					$noms6 = "Emma Stone (Birdman)";
					break;
				case 4:
					$noms6 = "Meryl Streep (Into The Woods)";
					break;
				case 5:
					$noms6 = "Laura Dern (Wild)";
					break;
				default:
					break;
			}
		}
		if ($_GET['noms7']) 
		{
			$got7 = $_GET['noms7'];
			$list7 = $got7;
			switch ($list7)
			{
				case 1:
					$noms7 = "Big Hero 6";
					break;
				case 2:
					$noms7 = "EthThe Box Trolls";
					break;
				case 3:
					$noms7 = "How To Train Your Dragon 2";
					break;
				case 4:
					$noms7 = "Song of the Sea";
					break;
				case 5:
					$noms7 = "The Tale Of Princess Kaguya";
					break;
				default:
					break;
			}
		}
		if ($_GET['noms8']) 
		{
			$got8 = $_GET['noms8'];
			$list8 = $got8;
			switch ($list8)
			{
				case 1:
					$noms8 = "Everything is Awesome (The Lego Movie)";
					break;
				case 2:
					$noms8 = "Glory (Selma)";
					break;
				case 3:
					$noms8 = "Grateful (Beyond the Lights)";
					break;
				case 4:
					$noms8 = "I'm not Gonna Miss You (Glenn Campbell: I’ll Be Me)";
					break;
				case 5:
					$noms8 = "Lost Stars (Begin Again)";
					break;
				default:
					break;
			}
		}
		if ($_GET['noms9']) 
		{
			$got9 = $_GET['noms9'];
			$list9 = $got9;
			switch ($list9)
			{
				case 1:
					$noms9 = "Captain America";
					break;
				case 2:
					$noms9 = "The Winter Soldier";
					break;
				case 3:
					$noms9 = "Dawn of the Planet of the Apes";
					break;
				case 4:
					$noms9 = "MGuardians of the Galaxy";
					break;
				case 5:
					$noms9 = "Interstellar";
					break;
				case 6:
					$noms9 = "X-Men: DOFP";
					break;
				default:
					break;
			}
		}
		/*
		var_dump($got1);
		var_dump($got2);
		var_dump($list1);
		var_dump($list2);
		*/
		// Connect to the database.
		//*********If on Localhost******************
		$dbhost = 'localhost';
		$dbuser = 'root';
		$dbpass = '';
		$dbselect = 'oscars';
		/*****************************************/	
		$flagMe = "see";
		/********* If on live *********************
		$dbhost = 'mysql1713int.cp.blacknight.com';
		$dbuser = 'u1286261_alpha';
		$dbpass = 'ha15dod272';
		//******************************************/
		
		$conn = mysql_connect($dbhost, $dbuser, $dbpass);
		if(! $conn ) 
		{ 
			die('Could not connect: ' . mysql_error()); 
		}

		//mysql_select_db( 'db1286261_alpha' );
		mysql_select_db( $dbselect );
		
		$sql = "UPDATE users SET nom1='".$got1."', nom2='".$got2."', nom3='".$got3."', nom4='".$got4."', nom5='".$got5."', nom6='".$got6."', nom7='".$got7."', nom8='".$got8."', nom9='".$got9."' WHERE name='".$name."'";
		//mysql_select_db( 'db1286261_alpha' );
		mysql_select_db( $dbselect );
		
		$retval = mysql_query( $sql, $conn );
		
		mysql_close($conn);

		?>
		<?php /*<input type="text" value="<?php echo $noms1; ?>" size="40">    */    ?>
		</form>
		<hr>		
		<h2>
			<a href="index.php">I am finished. Log me out.</a>
		</h2>
		</div>
		<?php
		
		echo $flagMe;
		echo "total end $list1,$list2,$list3,$list4,$list5,$list6,$list7,$list8,$list9";
}		
else{
	echo"<h2>To Nominate, Please Register <a href='index.php'>Here</a> First.</h2>";
}
?>

</body>
</html>