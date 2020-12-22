<?php
require_once "pdo.php";
session_start();


if (  isset($_SESSION['pass'])){
    die("ACCESS DENIED");
}

if ( isset($_POST['make']) && isset($_POST['model'])
     && isset($_POST['year']) && isset($_POST['mileage'])) {

    // Data validation
    if ( strlen($_POST['make']) < 1 || strlen($_POST['model']) < 1 || strlen($_POST['year']) < 1 || strlen($_POST['mileage']) < 1) {
        $_SESSION['error'] = 'All fields are required';
        header("Location: add.php");
        return;
    }


    if ( is_numeric($_POST['mileage'])  === FALSE){
        $_SESSION['error'] = "Mileage must be an integer";
        header("Location: add.php");
        return;
    }

    if ( is_numeric($_POST['year'])  === FALSE){
        $_SESSION['error'] = "Year must be an integer";
        header("Location: add.php");
        return;
    }
    


    $sql = "INSERT INTO autos (make, model, year, mileage)
              VALUES (:make, :model, :year, :mileage)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':make' => $_POST['make'],
        ':model' => $_POST['model'],
        ':year' => $_POST['year'],
        ':mileage' => $_POST['mileage']));
    $_SESSION['success'] = 'Record Added';
    header( 'Location: index.php' ) ;
    return;
}



// Flash pattern
if ( isset($_SESSION['error']) ) {
    echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
    unset($_SESSION['error']);
}
?>

<html><head><title>Dylan Mitchells Adding Page</title><head>
<p>Add A New Automobile</p>
<form method="post">
<p>Make:
<input type="text" name="make"></p>
<p>Model:
<input type="text" name="model"></p>
<p>Year:
<input type="text" name="year"></p>
<p>Mileage:
<input type="text" name="mileage"></p>
<input type="submit" name="Add" value="Add"/>
<a href="index.php">Cancel</a></p>
</form>
</html>