<?php
//start a session so that the user can be tracked on the computer
session_start(); 

// store session data
$_SESSION['views']= $_SESSION['views'] + 1;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="oscars.css" />
	<title>Oscars 2014</title>
</head>

<body>


<div id="container">	
	
	<a href="index.php">Back To The Main Page<br><br></a>
	<?php 
	// Set the debug level
	$debug = true;

	if (true === $debug) {
		ini_set('display_errors', 2);
		error_reporting(E_ALL);
	}
	
	// Print the person whos user session it is to the screen
	$name = $_SESSION['name']; 
	echo $name;
	?>'s Nominations Page<?php
	
	//retrieve session data
	echo "<p>Pageviews=". $_SESSION['views'] ."</p>";
	
	//
	?>

<hr>
<?php
	$list1 = 0;
?>
<form>
Best Picture:<br>
<select id="myList1" name="noms1">
	<option value=0 selected>(Choose Best Picture)</option>
	<option value=1>American Hustle</option>
	<option value=2>Captain Phillips</option>
	<option value=3>Dallas Buyers Club</option>
	<option value=4>Her</option>
	<option value=5>Nebraska</option>
	<option value=6>Philomena</option>
	<option value=7>12 Years a Slave</option>
	<option value=8>The Wolf of Wall Street</option>
</select>
<input type="submit" value="Choose This Option">
<?php
	// GET the noms1 value and place it into a variable
	$got1 = $_GET['noms1'];
	$list1 = $got1;
	//echo $list1;
	switch ($list1){
		case 1:
			$noms1 = "American Hustle";
			break;
		case 2:
			$noms1 = "Captain Phillips";
			break;
		case 3:
			$noms1 = "Dallas Buyers Club";
			break;
		case 4:
			$noms1 = "Her";
			break;
		case 5:
			$noms1 = "Nebraska";
			break;
		case 6:
			$noms1 = "Philomena";
			break;
		case 7:
			$noms1 = "12 Years a Slave";
			break;
		case 8:
			$noms1 = "The Wolf of Wall Street";
			break;
		default:
			break;
	}
	
	// Connect to the database.
	//*********If on Localhost******************
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	/*****************************************/	

	/********* If on live *********************
	$dbhost = 'mysql1713int.cp.blacknight.com';
	$dbuser = 'u1286261_alpha';
	$dbpass = 'ha15dod272';
	******************************************/

	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn ) { die('Could not connect: ' . mysql_error()); }

	//mysql_select_db( 'db1286261_alpha' );
	mysql_select_db( 'oscars' );
	
	// Now that we have the choice for List1 insert it into the database.
	
	// This query worked: UPDATE users SET nom1='3' WHERE name='Linda';
	$sql = "UPDATE users SET nom1='".$got1."' WHERE name='".$name."'";
	
	mysql_select_db('oscars');
	$retval = mysql_query( $sql, $conn );
	
	mysql_close($conn);
?>
<input type="text" value="<?php echo $noms1; ?>" size="40">
</form>
<hr>

		

<?php
	$list2 = 0;
?>
<form>
Best Actor in a Leading Role:<br>
<select id="myList2" name="noms2">
	<option value=0 selected>(Best Actor in a Leading Role)</option>
	<option value=1>Christian Bale (American Hustle)</option>
	<option value=2>Bruce Dern (Nebraska)</option>
	<option value=3>Leonardo DiCaprio (The Wolf of Wall Street)</option>
	<option value=4>Chiwetel Ejiofor (12 Years a Slave)</option>
	<option value=5>Matthew McConaughey (Dallas Buyers Club)</option>
</select>
<input type="submit" value="Choose This Option">
<?php
	// GET the noms1 value and place it into a variable
	$got2 = $_GET['noms2'];
	$list2 = $got2;
	//echo $list1;
	switch ($list2){
		case 1:
			$noms2 = "Christian Bale (American Hustle)";
			break;
		case 2:
			$noms2 = "Bruce Dern (Nebraska)";
			break;
		case 3:
			$noms2 = "Leonardo DiCaprio (The Wolf of Wall Street)";
			break;
		case 4:
			$noms2 = "Chiwetel Ejiofor (12 Years a Slave)";
			break;
		case 5:
			$noms2 = "Matthew McConaughey (Dallas Buyers Club)";
			break;
		default:
			break;
	}
	
	// Connect to the database.
	//*********If on Localhost******************
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	/*****************************************/	

	/********* If on live *********************
	$dbhost = 'mysql1713int.cp.blacknight.com';
	$dbuser = 'u1286261_alpha';
	$dbpass = 'ha15dod272';
	******************************************/

	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn ) { die('Could not connect: ' . mysql_error()); }

	//mysql_select_db( 'db1286261_alpha' );
	mysql_select_db( 'oscars' );
	
	// Now that we have the choice for List1 insert it into the database.
	
	// This query worked: UPDATE users SET nom1='3' WHERE name='Linda';
	$sql = "UPDATE users SET nom2='".$got2."' WHERE name='".$name."'";

	mysql_select_db('oscars');
	$retval = mysql_query( $sql, $conn );
	
	mysql_close($conn);
?>
<input type="text" value="<?php echo $noms2; ?>" size="40">
</form>

<hr>



<form>
Best Actress in a Leading Role:<br>
<select id="myList3" name="noms3">
	<option value=0 selected>(Best Actress in a Leading Role)</option>
	<option value=1>Amy Adams (American Hustle)</option>
	<option value=2>Cate Blanchett (Blue Jasmine)</option>
	<option value=3>Sandra Bullock (Gravity)</option>
	<option value=4>Judi Dench (Philomena)</option>
	<option value=5>Meryl Streep (August: Osage County)</option>
</select>
<input type="submit" value="Choose This Option">
<?php
	// GET the noms1 value and place it into a variable
	$got3 = $_GET['noms3'];
	$list3 = $got3;
	//echo $list1;
	switch ($list3){
		case 1:
			$noms3 = "Amy Adams (American Hustle)";
			break;
		case 2:
			$noms3 = "Cate Blanchett (Blue Jasmine)";
			break;
		case 3:
			$noms3 = "Sandra Bullock (Gravity)";
			break;
		case 4:
			$noms3 = "Judi Dench (Philomena)";
			break;
		case 5:
			$noms3 = "Meryl Streep (August: Osage County)";
			break;
		default:
			break;
	}
	// Connect to the database.
	//*********If on Localhost******************
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	/*****************************************/	

	/********* If on live *********************
	$dbhost = 'mysql1713int.cp.blacknight.com';
	$dbuser = 'u1286261_alpha';
	$dbpass = 'ha15dod272';
	******************************************/

	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn ) { die('Could not connect: ' . mysql_error()); }

	//mysql_select_db( 'db1286261_alpha' );
	mysql_select_db( 'oscars' );
	
	// Now that we have the choice for List1 insert it into the database.
	
	// This query worked: UPDATE users SET nom1='3' WHERE name='Linda';
	$sql = "UPDATE users SET nom3='".$got3."' WHERE name='".$name."'";

	mysql_select_db('oscars');
	$retval = mysql_query( $sql, $conn );
	
	mysql_close($conn);
?>
<input type="text" value="<?php echo $noms3; ?>" size="40">
</form>
<hr>
<?php
	$list4 = 0;
?>
<form>
Best Actor in a Supporting Role:<br>
<select id="myList4" name="noms4">
	<option value=0 selected>(Best Actor in a Supporting Role)</option>
	<option value=1>Barkhad Abdi (Captain Phillips)</option>
	<option value=2>Bradley Cooper (American Hustle)</option>
	<option value=3>Michael Fassbender (12 Years a Slave)</option>
	<option value=4>Jonah Hill (The Wolf of Wall Street)</option>
	<option value=5>Jared Leto (Dallas Buyers Club)</option>
</select>
<input type="submit" value="Choose This Option">
<?php
	// GET the noms1 value and place it into a variable
	$got4 = $_GET['noms4'];
	$list4 = $got4;
	//echo $list1;
	switch ($list4){
		case 1:
			$noms4 = "Barkhad Abdi (Captain Phillips)";
			break;
		case 2:
			$noms4 = "Bradley Cooper (American Hustle)";
			break;
		case 3:
			$noms4 = "Michael Fassbender (12 Years a Slave)";
			break;
		case 4:
			$noms4 = "Jonah Hill (The Wolf of Wall Street)";
			break;
		case 5:
			$noms4 = "Jared Leto (Dallas Buyers Club)";
			break;
		default:
			break;
	}
	// Connect to the database.
	//*********If on Localhost******************
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	/*****************************************/	

	/********* If on live *********************
	$dbhost = 'mysql1713int.cp.blacknight.com';
	$dbuser = 'u1286261_alpha';
	$dbpass = 'ha15dod272';
	******************************************/

	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn ) { die('Could not connect: ' . mysql_error()); }

	//mysql_select_db( 'db1286261_alpha' );
	mysql_select_db( 'oscars' );
	
	// Now that we have the choice for List1 insert it into the database.
	
	// This query worked: UPDATE users SET nom1='3' WHERE name='Linda';
	$sql = "UPDATE users SET nom4='".$got4."' WHERE name='".$name."'";
		
	mysql_select_db('oscars');
	$retval = mysql_query( $sql, $conn );
	
	mysql_close($conn);
?>
<input type="text" value="<?php echo $noms4; ?>" size="40">
</form>
<hr>
<?php
	$list5 = 0;
?>
<form>
Best Actress in a Supporting Role:<br>
<select id="myList5" name="noms5">
	<option value=0 selected>(Best Actress in a Supporting Role)</option>
	<option value=1>Sally Hawkins (Blue Jasmine)</option>
	<option value=2>Jennifer Lawrence (American Hustle)</option>
	<option value=3>Lupita Nyong'o (12 Years a Slave)</option>
	<option value=4>Julia Roberts (August: Osage County)</option>
	<option value=5>June Squibb (Nebraska)</option>
</select>
<input type="submit" value="Choose This Option">
<?php
	// GET the noms1 value and place it into a variable
	$got5 = $_GET['noms5'];
	$list5 = $got5;
	//echo $list1;
	switch ($list5){
		case 1:
			$noms5 = "Sally Hawkins (Blue Jasmine)";
			break;
		case 2:
			$noms5 = "Jennifer Lawrence (American Hustle)";
			break;
		case 3:
			$noms5 = "Lupita Nyong'o (12 Years a Slave)";
			break;
		case 4:
			$noms5 = "Julia Roberts (August: Osage County)";
			break;
		case 5:
			$noms5 = "June Squibb (Nebraska)";
			break;
		default:
			break;
	}
	// Connect to the database.
	//*********If on Localhost******************
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	/*****************************************/	

	/********* If on live *********************
	$dbhost = 'mysql1713int.cp.blacknight.com';
	$dbuser = 'u1286261_alpha';
	$dbpass = 'ha15dod272';
	******************************************/

	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn ) { die('Could not connect: ' . mysql_error()); }

	//mysql_select_db( 'db1286261_alpha' );
	mysql_select_db( 'oscars' );
	
	// Now that we have the choice for List1 insert it into the database.
	
	// This query worked: UPDATE users SET nom1='3' WHERE name='Linda';
	$sql = "UPDATE users SET nom5='".$got5."' WHERE name='".$name."'";
	
	mysql_select_db('oscars');
	$retval = mysql_query( $sql, $conn );
	
	mysql_close($conn);
?>
<input type="text" value="<?php echo $noms5; ?>" size="40">
</form>
<hr>




<?php
	$list6 = 0;
?>
<form>
Best Animated Feature:<br>
<select id="myList6" name="noms6">
	<option value=0 selected>(Best Animated Feature)</option>
	<option value=1>The Croods</option>
	<option value=2>Despicable Me 2</option>
	<option value=3>Ernest & Celestine</option>
	<option value=4>Frozen</option>
	<option value=5>The Wind Rises</option>
</select>
<input type="submit" value="Choose This Option">
<?php
	// GET the noms1 value and place it into a variable
	$got6 = $_GET['noms6'];
	$list6 = $got6;
	//echo $list1;
	switch ($list6){
		case 1:
			$noms6 = "The Croods";
			break;
		case 2:
			$noms6 = "Despicable Me 2";
			break;
		case 3:
			$noms6 = "Ernest & Celestine";
			break;
		case 4:
			$noms6 = "Frozen";
			break;
		case 5:
			$noms6 = "The Wind Rises";
			break;
		default:
			break;
	}
	// Connect to the database.
	//*********If on Localhost******************
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	/*****************************************/	

	/********* If on live *********************
	$dbhost = 'mysql1713int.cp.blacknight.com';
	$dbuser = 'u1286261_alpha';
	$dbpass = 'ha15dod272';
	******************************************/

	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn ) { die('Could not connect: ' . mysql_error()); }

	//mysql_select_db( 'db1286261_alpha' );
	mysql_select_db( 'oscars' );
	
	// Now that we have the choice for List1 insert it into the database.
	
	// This query worked: UPDATE users SET nom1='3' WHERE name='Linda';
	$sql = "UPDATE users SET nom6='".$got6."' WHERE name='".$name."'";
	
	mysql_select_db('oscars');
	$retval = mysql_query( $sql, $conn );
	
	mysql_close($conn);
?>
<input type="text" value="<?php echo $noms6; ?>" size="40">
</form>
<hr>
<?php
	$list7 = 0;
?>
<form>
Best Directing:<br>
<select id="myList7" name="noms7">
	<option value=0 selected>(Best Directing)</option>
	<option value=1>American Hustle (David O. Russell)</option>
	<option value=2>Gravity (Alfonso Cuarón)</option>
	<option value=3>Nebraska (Alexander Payne)</option>
	<option value=4>12 Years a Slave (Steve McQueen)</option>
	<option value=5>The Wolf of Wall Street (Martin Scorsese)</option>
</select>
<input type="submit" value="Choose This Option">
<?php
	// GET the noms1 value and place it into a variable
	$got7 = $_GET['noms7'];
	$list7 = $got7;
	//echo $list1;
	switch ($list7){
		case 1:
			$noms7 = "American Hustle (David O. Russell)";
			break;
		case 2:
			$noms7 = "Gravity (Alfonso Cuarón)";
			break;
		case 3:
			$noms7 = "Nebraska (Alexander Payne)";
			break;
		case 4:
			$noms7 = "12 Years a Slave (Steve McQueen)";
			break;
		case 5:
			$noms7 = "The Wolf of Wall Street (Martin Scorsese)";
			break;
		default:
			break;
	}
	// Connect to the database.
	//*********If on Localhost******************
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	/*****************************************/	

	/********* If on live *********************
	$dbhost = 'mysql1713int.cp.blacknight.com';
	$dbuser = 'u1286261_alpha';
	$dbpass = 'ha15dod272';
	******************************************/

	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn ) { die('Could not connect: ' . mysql_error()); }

	//mysql_select_db( 'db1286261_alpha' );
	mysql_select_db( 'oscars' );
	
	// Now that we have the choice for List1 insert it into the database.
	
	// This query worked: UPDATE users SET nom1='3' WHERE name='Linda';
	$sql = "UPDATE users SET nom7='".$got7."' WHERE name='".$name."'";
	
	mysql_select_db('oscars');
	$retval = mysql_query( $sql, $conn );
	
	mysql_close($conn);
?>
<input type="text" value="<?php echo $noms7; ?>" size="40">
</form>

<hr>

<?php
	$list8 = 0;
?>
<form>
Best Original Score:<br>
<select id="myList8" name="noms8">
	<option value=0 selected>(Best Original Score)</option>
	<option value=1>The Book Thief (John Williams)</option>
	<option value=2>Gravity (Steven Price)</option>
	<option value=3>Her (William Butler, Owen Pallett)</option>
	<option value=4>Philomena (Alexandre Desplat)</option>
	<option value=5>Saving Mr. Banks (Thomas Newman)</option>
</select>
<input type="submit" value="Choose This Option">
<?php
	// GET the noms1 value and place it into a variable
	$got8 = $_GET['noms8'];
	$list8 = $got8;
	//echo $list1;
	switch ($list8){
		case 1:
			$noms8 = "The Book Thief (John Williams)";
			break;
		case 2:
			$noms8 = "Gravity (Steven Price)";
			break;
		case 3:
			$noms8 = "Her (William Butler, Owen Pallett)";
			break;
		case 4:
			$noms8 = "Philomena (Alexandre Desplat)";
			break;
		case 5:
			$noms8 = "Saving Mr. Banks (Thomas Newman)";
			break;
		default:
			break;
	}
	// Connect to the database.
	//*********If on Localhost******************
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	/*****************************************/	

	/********* If on live *********************
	$dbhost = 'mysql1713int.cp.blacknight.com';
	$dbuser = 'u1286261_alpha';
	$dbpass = 'ha15dod272';
	******************************************/

	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn ) { die('Could not connect: ' . mysql_error()); }

	//mysql_select_db( 'db1286261_alpha' );
	mysql_select_db( 'oscars' );
	
	// Now that we have the choice for List1 insert it into the database.
	
	// This query worked: UPDATE users SET nom1='3' WHERE name='Linda';
	$sql = "UPDATE users SET nom8='".$got8."' WHERE name='".$name."'";
	
	mysql_select_db('oscars');
	$retval = mysql_query( $sql, $conn );
	
	mysql_close($conn);
?>
<input type="text" value="<?php echo $noms8; ?>" size="40">
</form>

<hr>

<?php
	$list9 = 0;
?>
<form>
Best Original Song:<br>
<select id="myList9" name="noms9">
	<option value=0 selected>(Best Original Song)</option>
	<option value=1>Happy (Despicable Me 2)</option>
	<option value=2>Let It Go (Frozen)</option>
	<option value=3>The Moon Song (Her)</option>
	<option value=4>Ordinary Love (Mandela: Long Walk to Freedom)</option>
</select>
<input type="submit" value="Choose This Option">
<?php
	// GET the noms1 value and place it into a variable
	$got9 = $_GET['noms9'];
	$list9 = $got9;
	//echo $list1;
	switch ($list9){
		case 1:
			$noms9 = "Happy (Despicable Me 2)";
			break;
		case 2:
			$noms9 = "Let It Go (Frozen)";
			break;
		case 3:
			$noms9 = "The Moon Song (Her)";
			break;
		case 4:
			$noms9 = "Ordinary Love (Mandela: Long Walk to Freedom)";
			break;
		default:
			break;
	}
	
	// Connect to the database.
	//*********If on Localhost******************
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	/*****************************************/	

	/********* If on live *********************
	$dbhost = 'mysql1713int.cp.blacknight.com';
	$dbuser = 'u1286261_alpha';
	$dbpass = 'ha15dod272';
	******************************************/

	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn ) { die('Could not connect: ' . mysql_error()); }

	//mysql_select_db( 'db1286261_alpha' );
	mysql_select_db( 'oscars' );
	
	// Now that we have the choice for List1 insert it into the database.
	
	// This query worked: UPDATE users SET nom1='3' WHERE name='Linda';
	$sql = "UPDATE users SET nom9='".$got9."' WHERE name='".$name."'";
	
	mysql_select_db('oscars');
	$retval = mysql_query( $sql, $conn );
	
	mysql_close($conn);
?>
<input type="text" value="<?php echo $noms9; ?>" size="40">
</form>

<hr>

<?php
	$list10 = 0;
?>
<form>
Best Visual Effects:<br>
<select id="myList10" name="noms10">
	<option value=0 selected>(Best Visual Effects)</option>
	<option value=1>Gravity</option>
	<option value=2>The Hobbit: The Desolation of Smaug</option>
	<option value=3>Iron Man 3</option>
	<option value=4>The Lone Ranger</option>
	<option value=5>Star Trek Into Darkness</option>
</select>
<input type="submit" value="Choose This Option">
<?php
	// GET the noms1 value and place it into a variable
	$got10 = $_GET['noms10'];
	$list10 = $got10;
	//echo $list1;
	switch ($list10){
		case 1:
			$noms10 = "Gravity";
			break;
		case 2:
			$noms10 = "The Hobbit: The Desolation of Smaug";
			break;
		case 3:
			$noms10 = "Iron Man 3";
			break;
		case 4:
			$noms10 = "The Lone Ranger";
			break;
		case 5:
			$noms10 = "Star Trek Into Darkness";
			break;
		default:
			break;
	}
	
	// Connect to the database.
	//*********If on Localhost******************
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	/*****************************************/	

	/********* If on live *********************
	$dbhost = 'mysql1713int.cp.blacknight.com';
	$dbuser = 'u1286261_alpha';
	$dbpass = 'ha15dod272';
	******************************************/

	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn ) { die('Could not connect: ' . mysql_error()); }

	//mysql_select_db( 'db1286261_alpha' );
	mysql_select_db( 'oscars' );
	
	// Now that we have the choice for List1 insert it into the database.
	
	// This query worked: UPDATE users SET nom1='3' WHERE name='Linda';
	$sql = "UPDATE users SET nom10='".$got10."' WHERE name='".$name."'";
		
	mysql_select_db('oscars');
	$retval = mysql_query( $sql, $conn );
	
	mysql_close($conn);
?>
<input type="text" value="<?php echo $noms10; ?>" size="40">
</form>
<hr>
</div>
</body>
</html>