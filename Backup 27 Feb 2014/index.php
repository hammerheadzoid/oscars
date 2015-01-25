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
	<p>Welcome to your personal oscar nominations page! Here you can choose to nominate your choice of nominations and see how you compare with your friends on the night and espically with the actual oscar winners!</p>
	<p>When are the oscars? They are on Sunday March 2nd! So pick now (as no nominations will be accepted after the show begins!) </p>
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

if ($_GET['submit'])
{
	echo "LOG: Inside the main PHP section<br>";

	$firstname = strip_tags($_GET['nameField']);
	$_SESSION['name'] = $firstname;
	echo "LOG: value of name is is ". $firstname ."<br>";

	$email = strip_tags($_GET['emailField']);
	echo "LOG: value of email is ". $email ."<br>";

	$debug = true;

	if (true === $debug) {
		ini_set('display_errors', 2);
		error_reporting(E_ALL);
	}
		
	echo "<h1>Registeration</h1>";
	
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
	if(! $conn )
	{
	  die('Could not connect: ' . mysql_error());
	}
	echo 'Connected successfully';
	
	//mysql_select_db( 'db1286261_alpha' );
	mysql_select_db( 'oscars' );
	
	//mysql_close($conn);

	
	
	// Check if the username already exists
	//$namecheck = mysql_query("SELECT name FROM oscars_users WHERE name='$firstname'"); // LIVE
	$namecheck = mysql_query("SELECT name FROM users WHERE name='$firstname'"); // LOCALHOST
	
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
	
	mysql_select_db('oscars');
	$retval = mysql_query( $sql, $conn );
}


?>
<p>Please Fill in your details here:</p>

<div id="formcontainer">
	<form name="contactForm" action='index.php' method='GET'>
		<div id="myFormLabel"><p>Name:</p></div>
		<div id="myFormForm"><input type="text" size="20" value="Enter Your Name" onClick="if(this.value == 'Enter Your Name'){ this.value = '';}" name="nameField"></div>
		<div id="myFormLabel"><p>E-Mail:</p></div>
		<div id="myFormForm"><input type="text" size="20" value="Enter Your Email" onClick="if(this.value == 'Enter Your Email'){ this.value = '';}" name="emailField"></div>
		<div class="clear"></div>
		<!--<input type='submit' name='submit' value='Register' onClick="validate()"></input>-->
		<input type='submit' name='submit' value='Register'></input>
		<div class="clear"></div>
	</form>
</div>
<!-- FORMS END HERE -->

</div>
</body>
</html>