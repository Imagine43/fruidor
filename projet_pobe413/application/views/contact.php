		
<h1 class="title">FruiDor</h1>

<div>

	<h3 align='center' >Formulaire de Contact</h3>

	<div class="account-wall" style='margin-left: 400px'>
		<?php echo form_open('success'); ?>

		<label for="nom"> Nom :</label>
		<br><input type="text" name="nom" value="<?php set_value('nom');?>" /></br>
		<?php echo form_error('nom', '<div class="error">','</div>');?>

		<label for="email"> Votre Email :</label>
		<br><input type="text" name="email" value="<?php set_value('email');?>" /></br>
		<?php echo form_error('email', '<div class="error">','</div>');?>

		<label for="demande"> Votre demande :</label>
		<br><textarea name="demande" ><?php echo set_value('demande');?></textarea></br>
		<?php echo form_error('demande', '<div class="error">','</div>');?>


		<br><input type="submit"  value="Envoyer" /></br>

		<?php form_close();?>
	</div>
</div>


<form class="form-signin" action="admingranted" method="post">
</div>