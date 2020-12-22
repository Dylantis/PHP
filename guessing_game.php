<?php


$guess = '';
$message = false;

if ( isset($_POST['guess'])) {
    $guess = $_POST['guess'] + 0;
    if ($guess == 42) {
        $message = "Great Job!";
    }else if ($guess < 42){
        $message = "Too Low";
    }else{
        $message = "Too High...";
    }
}


?>
<html>
<html lang=EN>
<head>
<meta charset=UTF-8 />
<title> Dylan Mitchells Guessing Game</title>
</head>
<body style = "font-family: sans-serif;">
<p>Guessing Game...</p>
<?php
if ($message !== false){
    echo("<p>$message</p>\n");
}
?>

<form method="post">
<p><label for="guess">Input Guess</label>
<input type="text" name="guess" id="guess" size="40"
<?php
echo 'value="' . htmlentities($guess) . '"';
?>
/></p>
<input type="submit"/>
</form>
</body>
</html>










</html>