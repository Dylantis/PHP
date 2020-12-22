<!DOCTYPE html>
<html lang= EN
[object Object]
>
<head>
<meta charset= utf8
[object Object]
 />
<title>Party</title>
</head>

<?php

class PartyAnimal{
    function __construct(){
        echo("Constructed\n");
    }
    function something(){
        echo("Something\n");
    }
    function __destruct(){
        echo("Destructed\n");
    }
}

echo ("--One\n");
$x = new PartyAnimal();
echo("--Two\n");
$y = new PartyAnimal();
echo("--Three\n");
$x->something();
echo("--The End?\n");

?>

<body>

</body>

</html>