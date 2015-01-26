<?php
//start a session so that the user can be tracked on the computer
session_start(); 

// store session data
//$_SESSION['views']=1;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="oscars.css" />
	<title>Oscars 2015</title>
</head>

<body>
<div id="container">	
	<IMG class="displayed" src="oscars-2014-nominees.png" alt="Oscars!">
	<h1>Welcome to your personal Oscar nominations page!</h1> 
	<p>Enter your name (so we can refer to you) and your email (so we can tell you who won) and continue onto the next page!</p>
	<p>The Oscars are on the 22nd February this year. Do you have what it takes to be a judge? When the result are given out the winning results will be compared to yours and you can see how you did!</p>
	<p>Good luck Oscar Judge,</p>
	<p>Hammerhead!</p>
	
	<?php
		//retrieve session data
		//echo "<p>Pageviews=". $_SESSION['views'] ."</p>";
	?>

		
<form>
<?php
//If the user has clicked the Submit button then we can carry on this code
//$submit = $_GET['submit'];

// Include file that holds all database info.
	//include("oscarFunctions.php");

if (isset($_GET['submit']))
{
	//echo "LOG: Inside the main PHP section<br>";

	$firstname = strip_tags($_GET['nameField']);
	$_SESSION['name'] = $firstname;
	//echo "LOG: value of name is is ". $firstname ."<br>";

	$email = strip_tags($_GET['emailField']);
	//echo "LOG: value of email is ". $email ."<br>";

	$debug = true;

	if (true === $debug) {
		ini_set('display_errors', 0);
		error_reporting(E_ALL);
	}
		
	echo "<h2><a href='nominations.php'>" . $_SESSION['name'] . ", Click here to Nominate!</a></h2>";
	
	// Establish connection to the database. 
	//dbConnect(); - I do not know enough about this dbConnect at the moment, but it breaks everything!
	
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
	
	// LIVE
	//$namecheck = mysql_query("SELECT name FROM oscars_users WHERE name='$firstname'"); 

	// LOCALHOST
	$namecheck = mysql_query("SELECT name FROM users WHERE name='$firstname'"); 

	
	$count = mysql_num_rows($namecheck);
	if($count!=0)
	{
		echo "<h2>The name " . $firstname . " already exists, please choose another one.</h2>";
		//die("Username already exists...");
	}
	else
	{
		$date = date("Y-m-d");
		//echo $date;
		//Finally!!!! we are going to input data to the db
		//$sql = "INSERT INTO oscars_users VALUES ('','$firstname','$email','0','0','0','0','0','0','0','0','0','0','$date')"; // LIVE
		$sql = "INSERT INTO users VALUES ('','$firstname','$email','0','0','0','0','0','0','0','0','0','0','$date')"; // LOCALHOST
	}
	
	//var_dump($namecheck);
	var_dump($sql);
	
	mysql_select_db('oscars');
	//mysql_select_db( 'db1286261_alpha' );
	$retval = mysql_query( $sql, $conn );
	var_dump($conn);
	mysql_close($conn);
	
	
}
echo "Index page : ". $GLOBALS['list1'],$GLOBALS['list2'],$GLOBALS['list3'],$GLOBALS['list4'],$GLOBALS['list5'],$GLOBALS['list6'],$GLOBALS['list7'],$GLOBALS['list8'],$GLOBALS['list9'];
?>
<h1>Enter Your Name:</h1>

<div id="formcontainer">
	<form name="contactForm" action='nominations.php' method='GET'>
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