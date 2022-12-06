<!DOCTYPE html>
<html>
<head>
	<title>Welcome to swagtopia!</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="title">
		<h1>swagtopia</h1>
		<p>the only correct opinion is my own.</p>
	</div>

	<div class="main">
        <div class="text">
            <?php
            $db = new SQLite3('threads.db');
            $stmt = $db->prepare("SELECT time, author, title, message FROM threads WHERE id=:id");
            $stmt->bindValue(":id", $_GET["id"]);
            $res = $stmt->execute();

            while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
                echo '<h2>' . $row['title'] . '</h2><p>' . $row['message' . '</p>'];
            }
            ?>
        </div>
	</div>

	<div class="footer">
		Copyright &copy; 2005-2022, John Swagington.
	</div>
</body>
</html>