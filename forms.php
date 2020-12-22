<!DOCTYPE html>
<html lang=EN>
<head>
<meta charset=UTF-8 />
<title></title>
</head>

<?php
$oldguess = isset($_POST['guess']) ? $_POST['guess'] : '';
//keep last text on text box
?>

<p> Guessing Game...</p>
<form method="post">
    <p><label for="guess">Input Guess</label>
    <input type="text" name="guess" value="<?= htmlentities($oldguess) ?>" size="40" id="guess"/></p>
    


<p>Preferred Time:<br/>

<input type ="radio" name="when" value="am" id="time">AM<br>
<input type="radio" name="when" value="pm" checked >PM</p>
<input type="submit"/>
</form>
<pre>





$_POST:  
<?php
print_r($_POST); // POST - The URL is retrieved and parameters are appended to the request in the HTTP connection
?>
$_GET:
<?php
print_r($_GET); // GET - Parameters are placed on the URL which is retrieved
?>
<?php
// POST is used when data is being created or modified
//GET is used when you are reading or searhing things
//Web search spiders will follow GET URLs but generally not POST URLs
//GET URLs should be "idempotent" - the same URL should give "same thing" each time you access it
//GET has an upper limit of the number of bytes of parameters values
?>
</pre>
<body>
<!--this is my body section-->
</body>

</html>