<!DOCTYPE html>
<html>
<body>

<?php
$ver = SQLite3::version();

echo $ver['versionString'] . "\n";
echo $ver['versionNumber'] . "\n";

var_dump($ver);
?>

<form action="new_post.php" method="POST">
    <input type="text" name="author"><br>
    <input type="text" name="title"><br>
    <textarea cols="60" rows="5" name="message"></textarea><br>
    <input type="submit" value="Post Thread">
</form>

</body>
</html>