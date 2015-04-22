
<div id="container">
		
	<div class="container">
	<div class="col-md-4"></div>	
	<div class="row">
	<div class="col-md-4">
		
			<div>	
				
				<h1 class="title">FruitDor</h1>

			
					<h2>Formulaire de Contact</h2>

						<?php 
 						echo form_open('form/valid_form');
 						echo '<table>';
 						echo '<tr><th colspan="2"></th></tr>';
 						echo '<tr>';
 							echo '<td colspan="2">';
						$nom= array('name'=>'nom','id'=>'nom','placeholder'=>'Nom','value'=>set_value('nom'));
							echo form_input($nom);
							echo '</td>';
						echo '</tr>';
						echo '<tr><td></td></tr>';
						echo '<tr>';
							echo '<td>';
						$prenom= array('name'=>'prenom','id'=>'prenom','placeholder'=>'Prenom','value'=>set_value('prenom'));
							echo form_input($prenom);
							echo '</td>';
						echo '</tr>';
						echo '<tr>';
							echo '<td>';   
						$mail= array('name'=>'mail','id'=>'mail','placeholder'=>'Email','value'=>set_value('mail'));
						    echo form_input($mail);
							echo '</td>';
						echo '</tr>';
						echo '<tr>';

						
							echo '<td style="text-align:center;">';
						echo form_submit('envoi', 'Valider');
						 	echo '<td>';
						echo '</tr>';
						echo form_close();
						echo '</table>';
						?>			
			</div>
			
	</div>
	</div>
	</div>
	
</div>