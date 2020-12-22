<?php
require_once "pdo.php";

if ( isset($_POST['auto_id']) ) {
    $sql = "DELETE FROM autos WHERE user_id = :zip";
    echo "<pre>\n$sql\n</pre>\n";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':zip' => $_POST['auto_id']));
}
?>
<p>Delete A User</p>
<form method="post">
<p>ID TO DELETE:
<input type="text" name="auto_id"></p>
<p><input type="submit" value="Delete"/></p>
</form>