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
	<body><p><?php echo 6 + 2;?></p>
		Welcome <?php echo $username[2][0] + $username[2][2];?>
	</body>
</html>