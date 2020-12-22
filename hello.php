<!DOCTYPE html>
<html lang= EN
[object Object]
>
<head>
<meta charset= UTF8
[object Object]
 />
<title>Hello Object Oriented</title>
</head>
<?php
class Hello{
    protected $lang; //only accessible in the class
    function __construct($lang){
        $this->lang = $lang;
    }
    function greet(){
        if ($this->lang == "fr") return "Bonjour";
        if ($this->lang == "es") return "Hola";
        return "Hello";
    }
}

$hi = new Hello('es');
echo $hi->greet()."\n";


?>


<body>
<!--this is my body section-->
</body>

</html>