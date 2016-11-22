<?php
	require_once(VIEW."layout/header.php");
	require_once(VIEW."layout/userpanel.php");
	require_once(VIEW."layout/footer.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo CSS.$this->layout.".css" ?>">
		<meta charset="utf-8">
		<title></title>
	</head>
	
	<body>
		<div id='header'>
			<?php echo $header; ?>
			<div id='userpanel'>
				<?php echo $userpanel; ?>
			</div>
		</div>
		
		<div id='content'>
			<?php echo $content; ?>
		</div>
		
		<div id="footer">
			<?php echo $footer; ?>
		</div>
	</body>
</html>