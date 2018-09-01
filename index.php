<html>
<head>
	<title>Regnum Comic</title>
	<style>
		html, body {
			background-color: black;
			color: white;
			margin: 0;
			padding: 1em;
			text-align:center;
		}
	</style>
</head>
<body>
	<p>
		<a href="../..">&lt;-- cor-forum.de</a>
	</p>
	<?php foreach( glob("./img/comic/0*.jpg") as $s ): ?>
		<p><img src="<?= $s ?>" /></p>
	<?php endforeach; ?>
</body>
</html>