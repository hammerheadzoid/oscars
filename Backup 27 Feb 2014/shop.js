/*
	Filename: shop.js
	Author: Donal O Domhnaill
	Lab Assisgnment: 4
*/
/* When the mouse hovers over an image a contextually valid piece of text is entered.
   imgValue is entered into the offersMouseOver() function from the offers.shtml page*/
function offersMouseOver(imgValue)
{
	if (imgValue == "comp1"){ row1text.innerHTML = "Quick... Get this Dell today!";	} /* if imgValue value is comp1 enter the text in the row1text div */
	else if (imgValue == "comp2") {	row1text.innerHTML = "Dell Gaming Rig"; }
	else if (imgValue == "comp3") {	row1text.innerHTML = "Sleek Black Dell"; }
	else if (imgValue == "comp4") {	row2text.innerHTML = "Bamboo case!"; }
	else if (imgValue == "comp5") {	row2text.innerHTML = "Beautiful Apple!"; }
	else if (imgValue == "comp6") {	row2text.innerHTML = "Dell or Apple"; }
	else if (imgValue == "comp7") {	row3text.innerHTML = "Apple Computer for under €5000!"; }
	else if (imgValue == "comp8") { row3text.innerHTML = "Cool Dell Case"; }
	else if (imgValue == "comp9") {	row3text.innerHTML = "RAM RAM RAM! Speed up your computer for the low price!"; }
}
/* When the mouse leaves the image the following function is called*/
function offersMouseOut()
{
	/* simplest way to made sure that the text in the rowXtext divs returns to the standard text. */
	row1text.innerHTML = "Hover over some images for information on them.";
	row2text.innerHTML = "Hover over some images for information on them.";
	row3text.innerHTML = "Hover over some images for information on them.";
}
/*
 * validate() checks to see if the data in the fields are valid.
 */
function validate()
{
	//window.alert("test");
	
	var commentLenght = contactForm.commentsField.value.length;	
	var comment = contactForm.commentsField.value;	
	var nameLenght = contactForm.nameField.value.length;	
	var userName = contactForm.nameField.value;	
	var emailLenght = contactForm.emailField.value.length;
	var emailAddress = contactForm.emailField.value;
	var selectType = contactForm.querytype.value;
	var RegEx = /\S+@\S+\.\S+/;
	var matchEmail = contactForm.emailField.value.search(RegEx);
	
	if((contactForm.commentsField.value == "") || (contactForm.nameField.value == "") || (contactForm.emailField.value == ""))
	{
		window.alert("Fill in all fields."); 
	}
	else if (commentLenght < 25)
	{
		window.alert("Comment should be 25 characters or more."); 
	}
	else if (nameLenght < 10)
	{
		window.alert("Name should be 10 characters or more."); 
	}
	else if ((emailLenght < 10) || (matchEmail == -1))
	{
		window.alert("Email is invalid. Ensure it has text followed by an @ symbol, followed by text and a period and text, and that it is 10 characters or more.");
	}
	else
	{
	window.alert("Dear " + userName + "\n\nCategory: " + selectType + "\n\nThank you for your comment:\n" + comment + "\n\nWe will mail you back at:\n" + emailAddress);
	}
}

/*
 * animate1() rotates the image in the banner.
 */
var compImage = "images/header1.png";
function animate1() 
{
	/* if the compImage is header1.png change the image to header2.png */
	if (compImage=="images/header1.png") 
	{
		compImage="images/header2.png";
	}
	/* however if compImage is header3.png change the image to header3.png */
	else if (compImage=="images/header2.png")
	{
		compImage="images/header3.png";
	}
	/* but if compImage is header3.png change the image to header1.png and the cycle begin again*/
	else
	{
		compImage="images/header1.png";
	}
	document.getElementById("compIdImage").src = compImage;
	window.setTimeout("animate1()", 3000); /* every 3 seconds call the animate1 function - this is a recursive call */
	
}

/*
 * theTime() reads off the operating system clock 
 * using the Date() object. 
 */
function theTime()
{
	var myDate = new Date(); /*myDate is instance of the Date() object*/
	/* these variables are assigned the methods of the Date object instnace myDate*/
	var myHours = myDate.getHours();
	var myMinutes = myDate.getMinutes();
	var mySeconds = myDate.getSeconds();
	
	/* Add zero so that the seconds will look like 12:43:04 not 12:43:4*/
	if (mySeconds < 10){
		mySeconds = mySeconds.toString();
		mySeconds = "0" + mySeconds;
	}
	/* Add zero so that the minutes will look like 12:43:04 not 12:3:45*/
	if (myMinutes < 10){
		myMinutes = myMinutes.toString();
		myMinutes = "0" + myMinutes;
	} 
	
	/* Add the time into this div */
	currentTime.innerHTML = myHours + ":" + myMinutes + ":" + mySeconds;
}

/*
 * countDown() was created to test that all the javascript 
 * on the page works. This function is only used on 
 * http://danu2.it.nuigalway.ie/hammerhead/bug.html
 */
function countDown() 
{
var v = document.aForm.currValue.value;
if (v>=1) {
v--;
document.aForm.currValue.value = v;
window.setTimeout("countDown()", 1000);
}
if (v<=0) {
document.aForm.currValue.value = "Lift off!";
}
}
