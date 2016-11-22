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
		<div 'header'>
			<?php echo $header; ?>
		</div>
		
		<div class='userpanel'>
			<?php echo $userpanel; ?>
		</div>
		
		<div class='content'>
			<?php echo $content; ?>
		</div>
		
		<div class="footer">
			<?php echo $footer; ?>
		</div>
	</body>
</html>