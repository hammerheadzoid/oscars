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
	
	<script>
	function bestPicture()
	{	
		//alert("Hi"); donal
		console.log('In bestPicture function.');
		/*
		console.log('Best Picture Selected : ' + mylist.options[mylist.selectedIndex].text); // To Console: Informing selection
		document.getElementById("myChoice1").value=mylist.options[mylist.selectedIndex].text;
		console.log(one.myList1.options[one.myList1.options.selectedIndex].value ); // To Console: This gives the number
		*/
	}
	
	function bestActorInALeadingRole()
	{
		var mylist=document.getElementById("myList2");
		console.log('Best Picture Selected : ' + mylist.options[mylist.selectedIndex].text); // To Console: Informing selection
		document.getElementById("myChoice2").value=mylist.options[mylist.selectedIndex].text;
		console.log(one.myList1.options[one.myList1.options.selectedIndex].value ); // To Console: This gives the number
	}
	
	function bestActressInALeadingRole()
	{
		var mylist=document.getElementById("myList3");
		document.getElementById("myChoice3").value=mylist.options[mylist.selectedIndex].text;
	}
	
	function bestActorInASupportingRole()
	{
		var mylist=document.getElementById("myList4");
		document.getElementById("myChoice4").value=mylist.options[mylist.selectedIndex].text;
	}
	
	function bestActressInASupportingRole()
	{
		var mylist=document.getElementById("myList5");
		document.getElementById("myChoice5").value=mylist.options[mylist.selectedIndex].text;
	}
	
	function bestAnimatedFeature()
	{
		var mylist=document.getElementById("myList6");
		document.getElementById("myChoice6").value=mylist.options[mylist.selectedIndex].text;
	}
	
	function bestDirecting()
	{
		var mylist=document.getElementById("myList7");
		document.getElementById("myChoice7").value=mylist.options[mylist.selectedIndex].text;
	}
	
	function bestOriginalScore()
	{
		var mylist=document.getElementById("myList8");
		document.getElementById("myChoice8").value=mylist.options[mylist.selectedIndex].text;
	}
	
	function bestOriginalSong()
	{
		var mylist=document.getElementById("myList9");
		document.getElementById("myChoice9").value=mylist.options[mylist.selectedIndex].text;
	}
	
	function bestVisualEffects()
	{
		var mylist=document.getElementById("myList10");
		document.getElementById("myChoice10").value=mylist.options[mylist.selectedIndex].text;
	}
	
	</script>
</head>

<body>
<div id="container">	
	<a href="index.php">Back To The Main Page<br><br></a>
	<?php 
	
	$debug = true;

	if (true === $debug) {
		ini_set('display_errors', 2);
		error_reporting(E_ALL);
	}
	
	
	// Check if the db has Zero in it, if not fill in correct entry.
	function dbChecker(){
		echo "hello this is the dbChecker function";
	}
	
	// Print the person whos user session it is to the screen
	echo $_SESSION['name']; 
	?>'s Member Page
	
	
	<?php
		//retrieve session data
		echo "<p>Pageviews=". $_SESSION['views'] ."</p>";
	?>


<?php
	$list1 = 0;
?>
<form action="dbChecker()">
Best Picture:
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
	$list1 = $_GET['noms1'];
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
?>
<input type="text" value="<?php echo $noms1; ?>" size="40">
</form>

		

<?php
	$list2 = 0;
?>
<form>
Best Actor in a Leading Role:
<select id="myList2" name="noms2">
	<option></option>
	<option value=1>Christian Bale (American Hustle)</option>
	<option value=2>Bruce Dern (Nebraska)</option>
	<option value=3>Leonardo DiCaprio (The Wolf of Wall Street)</option>
	<option value=4>Chiwetel Ejiofor (12 Years a Slave)</option>
	<option value=5>Matthew McConaughey (Dallas Buyers Club)</option>
</select>
<input type="submit" value="Choose This Option">
<?php
	// GET the noms1 value and place it into a variable
	$list2 = $_GET['noms2'];
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
?>
<input type="text" value="<?php echo $noms2; ?>" size="40">
</form>

<?php
	echo $list1;
	echo $list2;
	echo $list3;
?>
<form>
Best Actress in a Leading Role:
<select id="myList3" name="noms3">
	<option></option>
	<option value=1>Amy Adams (American Hustle)</option>
	<option value=2>Cate Blanchett (Blue Jasmine)</option>
	<option value=3>Sandra Bullock (Gravity)</option>
	<option value=4>Judi Dench (Philomena)</option>
	<option value=5>Meryl Streep (August: Osage County)</option>
</select>
<input type="submit" value="Choose This Option">
<?php
	// GET the noms1 value and place it into a variable
	$list3 = $_GET['noms3'];
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
?>
<input type="text" value="<?php echo $noms3; ?>" size="40">
</form>

<?php
	$list4 = 0;
?>
<form>
Best Actor in a Supporting Role:
<select id="myList4" name="noms4">
	<option></option>
	<option value=1>Barkhad Abdi (Captain Phillips)</option>
	<option value=2>Bradley Cooper (American Hustle)</option>
	<option value=3>Michael Fassbender (12 Years a Slave)</option>
	<option value=4>Jonah Hill (The Wolf of Wall Street)</option>
	<option value=5>Jared Leto (Dallas Buyers Club)</option>
</select>
<p>Your Best Actor in a Supporting Role is: <input type="text" id="myChoice4" size="40"></p>
</form>

<?php
	$list5 = 0;
?>
<form>
Best Actress in a Supporting Role:
<select id="myList5" name="noms5">
	<option></option>
	<option value=1>Sally Hawkins (Blue Jasmine)</option>
	<option value=2>Jennifer Lawrence (American Hustle)</option>
	<option value=3>Lupita Nyong'o (12 Years a Slave)</option>
	<option value=4>Julia Roberts (August: Osage County)</option>
	<option value=5>June Squibb (Nebraska)</option>
</select>
<p>Your Best Actress in a Supporting Role is: <input type="text" id="myChoice5" size="40"></p>
</form>

<?php
	$list6 = 0;
?>
<form>
Best Animated Feature:
<select id="myList6" name="noms6">
	<option></option>
	<option value=1>The Croods (Chris Sanders, Kirk DeMicco, Kristine Belson)</option>
	<option value=2>Despicable Me 2 (Chris Renaud, Pierre Coffin, Chris Meledandri)</option>
	<option value=3>Ernest & Celestine (Benjamin Renner, Didier Brunner)</option>
	<option value=4>Frozen (Chris Buck, Jennifer Lee, Peter Del Vecho)</option>
	<option value=5>The Wind Rises (Hayao Miyazaki, Toshio Suzuki)</option>
</select>
<p>Your Best Animated Feature is: <input type="text" id="myChoice6" size="40"></p>
</form>

<?php
	$list7 = 0;
?>
<form>
Best Directing:
<select id="myList7" name="noms7">
	<option></option>
	<option value=1>American Hustle (David O. Russell)</option>
	<option value=2>Gravity (Alfonso Cuarón)</option>
	<option value=3>Nebraska (Alexander Payne)</option>
	<option value=4>12 Years a Slave (Steve McQueen)</option>
	<option value=5>The Wolf of Wall Street (Martin Scorsese)</option>
</select>
<p>Your Best Directing is: <input type="text" id="myChoice7" size="40"></p>
</form>

<?php
	$list8 = 0;
?>
<form>
Best Original Score:
<select id="myList8" name="noms8">
	<option></option>
	<option value=1>The Book Thief (John Williams)</option>
	<option value=2>Gravity (Steven Price)</option>
	<option value=3>Her (William Butler, Owen Pallett)</option>
	<option value=4>Philomena (Alexandre Desplat)</option>
	<option value=5>Saving Mr. Banks (Thomas Newman)</option>
</select>
<p>Your Best Original Score is: <input type="text" id="myChoice8" size="40"></p>
</form>

<?php
	$list9 = 0;
?>
<form>
Best Original Song:
<select id="myList9" name="noms9">
	<option></option>
	<option value=1>Happy (Despicable Me 2)</option>
	<option value=2>Let It Go (Frozen)</option>
	<option value=3>The Moon Song (Her)</option>
	<option value=4>Ordinary Love (Mandela: Long Walk to Freedom)</option>
</select>
<p>Your Best Original Song is: <input type="text" id="myChoice9" size="40"></p>
</form>

<?php
	$list10 = 0;
?>
<form>
Best Visual Effects:
<select id="myList10" name="noms10">
	<option></option>
	<option value=1>Gravity (Tim Webber, Chris Lawrence, Dave Shirk, Neil Corbould)</option>
	<option value=2>The Hobbit: The Desolation of Smaug (Joe Letteri, Eric Saindon, David Clayton, Eric Reynolds)</option>
	<option value=3>Iron Man 3 (Christopher Townsend, Guy Williams, Erik Nash, Dan Sudick)</option>
	<option value=4>The Lone Ranger (Tim Alexander, Gary Brozenich, Edson Williams, John Frazier)</option>
	<option value=5>Star Trek Into Darkness (Roger Guyett, Patrick Tubach, Ben Grossmann, Burt Dalton)</option>
</select>
<p>Your Best Visual Effects is: <input type="text" id="myChoice10" size="40"></p>
</form>

</div>
</body>
</html>