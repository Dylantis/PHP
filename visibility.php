<!DOCTYPE html>
<html lang=
[object Object]
>
<head>
<meta charset=
[object Object]
 />
<title>Visibility</title>
</head>

<?php

class MyClass
{
    public $pub = 'Public';
    protected $pro = 'Protected';
    private $priv = 'Private';

    function printHello()
    {
        echo $this->pub. "\n";
        echo $this->pro. "\n";
        echo $this->priv. "\n";
    }
}

class MyClass2 extends MyClass
{
    function printHello()
    {
        echo $this->pub. "\n";
        echo $this->pro. "\n";
        echo $this->priv. "\n";
    }
}

$obj = new MyClass();
echo $obj->pub. "\n"; //Works
echo $obj->pro. "\n"; //Fatal Error
echo $obj->priv. "\n"; //Fatal Error
$obj->printHello(); //Shows Public, Protected and Private 


echo ("---MyClass2---\n");
$obj2 = new MyClass2();
echo $obj2->pub. "\n"; //Works
$obj2->printHello(); //shows public, protected, undefined
?>


<body>
<!--this is my body section-->
</body>

</html>