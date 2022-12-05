<!DOCTYPE html>
<html>
<body>

<?php
$db = new SQLite3('threads.db');
$stmt = $db->prepare('INSERT INTO threads(time, author, title, message)'
    . 'VALUES(:time, :author, :title, :message)');
$stmt->bindValue(':time', time(), SQLITE3_INTEGER);
$stmt->bindValue(':author', $_POST['author']);
$stmt->bindValue(':title', $_POST['title']);
$stmt->bindValue(':message', $_POST['message']);
$stmt->execute();

$res = $db->query("SELECT * FROM threads");
while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
    echo $row['author'] . ', ' . $row['title'] . ': ' . $row['message'] . '<br/>';
}
?>

</body>
</html>