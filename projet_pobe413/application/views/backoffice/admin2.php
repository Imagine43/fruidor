<?php

	$usr = $_POST['id'];
	$pwd = $_POST['password'];

?>

<div class="container">
	<div class="row">
		<?php
		echo 'Bonjour : Le username est :'.$usr.' !';
		echo '<br/>Tandis que son mot de passe est :'.$pwd.' ! :)';


		?>
	</div>
</div>