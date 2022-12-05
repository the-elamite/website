<!DOCTYPE html>
<html>
<body>

<?php
$db = new SQLite3('threads.db');
$result = $db->query("SELECT * FROM threads");
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    echo $row['author'] . ', ' . $row['title'] . ': ' . $row['message'] . '<br/>';
}
?>

<form action="post.php" method="post">
    <input type="text" name="author"><br>
    <input type="text" name="title"><br>
    <textarea cols="60" rows="5" name="message"></textarea><br>
    <input type="submit" value="Post Thread">
</form>

</body>
</html>