<?php
//start a session so that the user can be tracked on the computer
session_start(); 

// store session data
$_SESSION['views']=1;

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
	<IMG class="displayed" src="oscars-2014-nominees.png" alt="Oscars!">
	<p>Welcome to your personal oscar nominations page! Here you can choose to nominate your choice of nominations and see how you compare with your friends on the night and especially with the actual oscar winners!</p>
	<p>When are the Oscars? They are on Sunday March 2nd! So pick now (as no nominations will be accepted after the show begins!) </p>
	<p>What do I do? Well the following, fill in the small form below, click [Next] to go onto the nominations page... select from what ever category you want, then press submit! That simple!</p>
	<p>The winner is the person who gets the most points. Each correct nomination is a point! So you might as well throw you hat into all of the choices :)</p>
	<p>Good luck judge... best regards, Hammerhead!</p>
	
	<?php
		//retrieve session data
		echo "<p>Pageviews=". $_SESSION['views'] ."</p>";
	?>

	<a href="nominations.php">To The Nominations Page</a>	
<form>
<?php
//If the user has clicked the Submit button then we can carry on this code
//$submit = $_GET['submit'];

// Include file that holds all database info.
	include("oscarFunctions.php");

if ($_GET['submit'])
{
	echo "LOG: Inside the main PHP section<br>";

	$firstname = strip_tags($_GET['nameField']);
	$_SESSION['name'] = $firstname;
	echo "LOG: value of name is is ". $firstname ."<br>";

	$email = strip_tags($_GET['emailField']);
	echo "LOG: value of email is ". $email ."<br>";

	$debug = false;

	if (true === $debug) {
		ini_set('display_errors', 0);
		error_reporting(E_ALL);
	}
		
	echo "<h1>Registration</h1>";
	
	// Establish connection to the database. 
	//dbConnect();
	
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
	else { echo 'Connected successfully'; }

	//mysql_select_db( 'db1286261_alpha' );
	mysql_select_db( 'oscars' );
	
	// LIVE
	//$namecheck = mysql_query("SELECT name FROM oscars_users WHERE name='$firstname'"); 

	// LOCALHOST
	$namecheck = mysql_query("SELECT name FROM users WHERE name='$firstname'"); 

	
	$count = mysql_num_rows($namecheck);
	if($count!=0)
	{
		echo "The name " . $firstname . " already exists, please choose another one.";
		//die("Username already exists...");
	}
	else
	{
		//Finally!!!! we are going to input data to the db
		//$sql = "INSERT INTO oscars_users VALUES ('','$firstname','$email','0','0','0','0','0','0','0','0','0','0')"; // LIVE
		$sql = "INSERT INTO users VALUES ('','$firstname','$email','0','0','0','0','0','0','0','0','0','0')"; // LOCALHOST
	}
	
	//var_dump($namecheck);
	//var_dump($sql);
	
	mysql_select_db('oscars');
	$retval = mysql_query( $sql, $conn );
	//var_dump($conn);
	mysql_close($conn);
}
?>
<p>New User:</p>

<div id="formcontainer">
	<form name="contactForm" action='index.php' method='GET'>
		Name:<input type="text" size="20" value="Enter Your Name" onClick="if(this.value == 'Enter Your Name'){ this.value = '';}" name="nameField">
		
		E-Mail:
		<input type="text" size="20" value="Enter Your Email" onClick="if(this.value == 'Enter Your Email'){ this.value = '';}" name="emailField">
		
		<div class="clear"></div>
		
		<input type='submit' name='submit' value='Register'></input>
		<div class="clear">
		</div>
	</form>
</div>

</div>
</body>
</html>