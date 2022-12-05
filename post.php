<!DOCTYPE html>
<html>
<body>

<?php
$db = new SQLite3('threads.db');
$stmt = $db->prepare("INSERT INTO threads(time, author, title, message)"
    . "VALUES(:time, :author, :title, :message)");
$stmt->bindValue(':time', time(), SQLITE3_INTEGER);
$stmt->bindValue(':author', filter_input(INPUT_POST, $_POST['author'], FILTER_SANITIZE_STRING));
$stmt->bindValue(':title', filter_input(INPUT_POST, $_POST['title'], FILTER_SANITIZE_STRING));
$stmt->bindValue(':message', filter_input(INPUT_POST, $_POST['message'], FILTER_SANITIZE_STRING));
$stmt->execute();

$res = $db->query("SELECT * FROM threads");
while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
    echo $row['author'] . ', ' . $row['title'] . ': ' . $row['message'] . '<br/>';
}
?>

</body>
</html>