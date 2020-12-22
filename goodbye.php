<!DOCTYPE html>
<html lang=
[object Object]
>
<head>
<meta charset=
[object Object]
 />
<title>Goodbye Object Oriented</title>
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

class Social extends Hello{
    function bye(){
        if ($this->lang == 'fr') return 'Au Revoir';
        if ($this->lang == 'es') return 'Adios';
        return 'Goodbye';
    }
}

$hi = new Social('es');
echo $hi->greet()."\n";
echo $hi->bye()."\n";


?>


<body>
<!--this is my body section-->
</body>

</html>