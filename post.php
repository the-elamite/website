<!DOCTYPE html>
<html>
<body>

<?php
$db = new SQLite3('threads.db');
$statement = $db->prepare('INSERT INTO threads(id, time, author, title, message) VALUES (null, :time, :author, :title, :message)');
$statement->bindValue(':time', time(), SQLITE3_INTEGER);
$statement->bindValue(':author', $_POST['author']);
$statement->bindValue(':title', $_POST['title']);
$statement->bindValue(':message', $_POST['message']);

echo $statement->getSQL();
//$statement->execute();
?>

</body>
</html>