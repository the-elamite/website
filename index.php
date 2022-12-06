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

	<div class="menu">
		<p><a href="index.php">home</a></p>
		<ul class="posts">
            <?php
            $db = new SQLite3('threads.db');
            $res = $db->query('SELECT * FROM threads');

            while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
                echo '<li><a href="threads.php?id=' . $row['id'] . '">' . $row['title'] . '</a></li>';
            }
            ?>
			<li><a href="12-4-22.html">a post</a></li>
		</ul>
	</div>

	<div class="main">
        <form action="post.php" method="post">
            <h2>create a thread</h2>
            <input type="text" name="author" value="Anonymous">
            <input type="text" name="title" placeholder="Title" minlength="3" maxlength="24" required><br><br>
            <textarea cols="50" rows="8" placeholder="Lorem ipsum dolor sit amet..." name="message" minlength="32" required></textarea><br>
            <input type="submit" value="Post Thread">
        </form>
	</div>

	<div class="footer">
		Copyright &copy; 2005-2022, John Swagington.
	</div>
</body>
</html>