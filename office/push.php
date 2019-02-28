<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Notificaciones web</title>
	<script src="assets/js/plugins/pushjs/push.min.js"></script>
	
	<script src="js/push.min.js"></script>
</head>
<body>
	<?php
	$msg ="admin Says Hellow";
		echo '<script>
		Push.create("Hi",{
			body: "Welcome to Notifation",
			icon: "img/logo.png",
			timeout: 4000,
			onClick: function () {
				window.location="https://nickersoft.github.io/push.js/";
				this.close();
			}
		});
	</script>';
	?>
</body>
</html>