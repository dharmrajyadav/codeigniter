
<html>
<head>
	<title>User View</title>
</head>
<body>
	<h1>User :-</h1>


		<?php 


		 foreach ($loginData as $loginData ) {
						echo $loginData['id'];
		}


		 ?>


</body>
</html>