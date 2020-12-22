<!DOCTYPE html>
<html lang=EN>
<head>
<meta charset=UTF-8 />
<title>PLAYGROUND</title>
</head>

<?php

//key value
$stuff = array("name" => "Chuck",
                "course" => "WA4E");

echo $stuff["course"], "\n";


//Array Dumps

//the function print_r() shows PHP data- it is good for debugging
$things = array("name" => "Chuck",
                "course" => "WA4E");

    echo("<pre>\n");
    print_r($things);
    echo("\n</pre>\n");

//var_dump
$dumps = array("name" => "Chuck",
            "course" => "SI664");
            var_dump($dumps);

?>

 <br>
 
 <br>

<?php

//var_dump can print 'false'

$false = FALSE;
echo("One\n");
print_r($false);
echo("Two\n");
var_dump($false);

?>


<br>
<br>


<?php

//Building up an Array
//you can also add new items in an array using a key
$za = array();
$za["name"] = "Chuck";
$za["course"] = "WA4E";
print_r($za);

?>

<br>
<br>

<?php

//Looping through an array
$loop = array("name" => "Chuck",
            "course" => "SI664");
foreach($loop as $k => $v) {
    echo "Key= ",$k," Val= ",$v,"\n";
}

?>

<br>
<br>

<?php
//Counted Loop
$count = array("Chuck", "SI663");
for($i=0; $i < count($count); $i++) {
    echo "I= " ,$i," Val= ", $count[$i],"\n";
}

?>

<br>
<br>

<?php

//array of arrays
$products = array(
    'paper' => array(
        'copier' => "Copier & Multipurpose",
        'injet' => "Inkjet Printer",
        'laser' => "Laser Printer",
        'photo' => "Photographic Paper"
    ),
    'pens' => array(
        'ball' => "Ball Point",
        'hilite' =>"Highlighters",
        'marker' => "Markers"
    ),
    'misc' => array(
        'tape' => "Sticky Tape",
        'glue' => "Adhesives",
        'clips' => "Paperclips"
    )

);

echo $products["pens"]["marker"];
?>

<body>
<!--this is my body section-->
</body>

</html>