<?php
$username = array(array('james', 'clif', 'tammy'),
	array('peter','jane','mary'),
	array('dean','william','tiana'));
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Page Title</title>
	</head>
	<body>
		Welcome <?php echo $username[3][3];?>
	</body>
</html>