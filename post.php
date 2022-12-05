<!DOCTYPE html>
<html>
<body>

<?php
$db = new SQLite3('threads.db');
$db->query('INSERT INTO threads(id, time, author, title, message) VALUES (null, 123, ' . $_POST['author'] . ', ' . $_POST['title'] . ', ' . $_POST['message'] . ')');
?>

</body>
</html>