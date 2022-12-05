<!DOCTYPE html>
<html>
<body>

<?php
$db = new SQLite3('threads.db');
$query = 'INSERT INTO threads(id, time, author, title, message) VALUES (null, 123, "' . $_POST['author'] . '", "' . $_POST['title'] . '", "' . $_POST['message'] . '")';
echo $query;
$db->query($query);
?>

</body>
</html>