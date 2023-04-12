<?php require_once 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>My Blog</title>
</head>
<body>
	<h1>My Blog</h1>
	
	<ul>
		<?php foreach(get_posts() as $post): ?>
			<li>
				<a href="post.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>
