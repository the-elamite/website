<!DOCTYPE html>
<html>
<body>

<?php
//$db = new SQLite3('threads.db');
echo "Hi!";
?>

<form action="new_post.php" method="POST">
    <input type="text" name="author"><br>
    <input type="text" name="title"><br>
    <textarea cols="60" rows="5" name="message"></textarea><br>
    <input type="submit" value="Post Thread">
</form>

</body>
</html>