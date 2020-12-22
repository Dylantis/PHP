<!DOCTYPE html>
<html lang=EN>
<head>
<meta charset=UTF-8 />
<title>PLAYGROUND</title>
</head>
<pre>
<?php

//array_key_exists example


$za = array();
$za["name"] = "Chuck";
$za["course"] = "WA4E";

if (array_key_exists('course', $za)){
    echo("Course Exists\n");
} else {
    echo("course does not exist\n");
}

echo isset($za['name']) ? "name is set\n" : "name is not set\n";
echo isset($za['addr']) ? "addr is set\n" : "addr is not set\n";

?>

<br>
<br>

<?php

//Null Coalesce
$za = array();
$za["name"] = "Chuck";
$za["course"] = "WA4E";

//PHP >= 7.0.0 only
$name = $za['name'] ?? 'not found';
$addr = $za['addr'] ?? 'not found';

echo("Name=$name\n");
echo("Addr=$addr\n");


?>

<br> 
<br>

<?php

//Sorting Arrays
$za = array();
$za["name"] = "Chuck";
$za["course"] = "WA4E";
$za["topic"] = "PHP";

print_r($za);
ksort($za);  //sorts the array by key
print_r($za);
asort($za);  //sorts array by value, keeping key association
print_r($za);
count($za);  //how many elements in an array
print_r($za);
shuffle($za);  //shuffles the array into random order
print_r($za);


?>

<?php

//Request Response Cycle and PHP Arrays



print_r($_GET);



?>

<?php
var_dump($_GET);
?>
</pre>
<body>
<!--this is my body section-->
</body>

</html>