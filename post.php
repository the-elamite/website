<!DOCTYPE html>
<html>
<body>

<?php
$db = new SQLite3('threads.db');
$stmt = $db->prepare("INSERT INTO threads(time, author, title, message)"
    . "VALUES(:time, :author, :title, :message)");
$stmt->bindValue(':time', time(), SQLITE3_INTEGER);
$stmt->bindValue(':author', strip_tags($_POST['author']));
$stmt->bindValue(':title', strip_tags($_POST['title']));
$stmt->bindValue(':message', strip_tags($_POST['message']));
$stmt->execute();

header("Location: index.php");
?>

</body>
</html>