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
if(isset($_SESSION['name'])){
?>
	<div id="container">	
		
		<h2>
		<a href="index.php">I am finished. Log me out.</a>
		</h2>
		
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
		
		//retrieve session data
		//echo "<p>Pageviews=". $_SESSION['views'] ."</p>";
		
		//
		?>

	<hr>
	<?php
		$list1 = 0;
	?>
	<form><h3>Best Picture:</h3>
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
		if ($_GET['noms1']) 
		{
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
			
			var_dump($got1);
			var_dump($list1);
			
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
			//******************************************/

			$conn = mysql_connect($dbhost, $dbuser, $dbpass);
			if(! $conn ) { die('Could not connect: ' . mysql_error()); }

			//mysql_select_db( 'db1286261_alpha' );
			mysql_select_db( 'oscars' );
			
			// Now that we have the choice for List1 insert it into the database.
			
			// This query worked: UPDATE oscars_users SET nom1='3' WHERE name='Linda';
			//$sql = "UPDATE oscars_users SET nom1='".$got1."' WHERE name='".$name."'";
			$sql = "UPDATE users SET nom1='".$got1."' WHERE name='".$name."'";
			var_dump($sql);
			//mysql_select_db( 'db1286261_alpha' );
			mysql_select_db( 'oscars' );
			
			$retval = mysql_query( $sql, $conn );
			
			mysql_close($conn);
			
			//echo "Choice 1 is number ". $got1;
		}	
	?>
	<input type="text" value="<?php echo $noms1; ?>" size="40">
	</form>
	<hr>

		

	<hr>

	</FORM>
	
	<h2>
		<a href="index.php">I am finished. Log me out.</a>
	</h2>
	</div>
<?php
}
else
{
	echo"<h2>To Nominate, Please Register <a href='index.php'>Here</a> First.</h2>";
}
?>

</body>
</html>