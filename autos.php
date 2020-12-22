<?php
require_once "pdo.php";

// Demand a GET parameter
if ( ! isset($_GET['name']) || strlen($_GET['name']) < 1  ) {
    die('Name parameter missing');
}

// If the user requested logout go back to index.php
if ( isset($_POST['logout']) ) {
    header('Location: index.php');
    return;
}

if ( isset($_POST['make']) && isset($_POST['year']) 
     && isset($_POST['mileage'])) {
    $sql = "INSERT INTO autos (make, year, mileage) 
              VALUES (:make, :year, :mileage)";
    echo("<pre>\n".$sql."\n</pre>\n");
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':make' => $_POST['make'],
        ':year' => $_POST['year'],
        ':mileage' => $_POST['mileage']));
        


    if ( strlen($_POST['make']) < 1  ) {
        echo ("Make is required");
    } else{
        if (((is_numeric($_POST['year'])) ==False || (is_numeric($_POST['mileage'])))==FALSE ){
            echo("Year and Mileage must be numeric");
        }
    }
}   

if ( isset($_POST['delete']) && isset($_POST['user_id']) ) {
    $sql = "DELETE FROM autos WHERE user_id = :zip";
    echo "<pre>\n$sql\n</pre>\n";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':zip' => $_POST['user_id']));
}


    

$stmt = $pdo->query("SELECT make, year, mileage, user_id FROM autos");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<html>
<head></head><body><table border="1">
<?php
foreach ( $rows as $row ) {
    echo "<tr><td>";
    echo($row['make']);
    echo("</td><td>");
    echo($row['year']);
    echo("</td><td>");
    echo($row['mileage']);
    echo("</td><td>");
    echo('<form method="post"><input type="hidden" ');
    echo('name="user_id" value="'.$row['user_id'].'">'."\n");
    echo('<input type="submit" value="Del" name="delete">');
    echo("\n</form>\n");
    echo("</td></tr>\n");
}
?>
</table>
<p>Add A New Car</p>
<form method="post">
<p>Make:
<input type="text" name="make" size="40"></p>
<p>Year:
<input type="text" name="year"></p>
<p>Mileage:
<input type="text" name="mileage"></p>
<p><input type="submit" value="Add New"/>
<input type="submit" name="logout" value="Logout"></p>
</form>
</body>
