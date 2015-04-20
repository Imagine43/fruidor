
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
 
						$nom= array('name'=>'nom','id'=>'nom','placeholder'=>'Nom','value'=>set_value('nom'));
							echo form_input($nom);
						
						$prenom= array('name'=>'prenom','id'=>'prenom','placeholder'=>'Prenom','value'=>set_value('prenom'));
							echo form_input($prenom);
						    
						$mail= array('name'=>'mail','id'=>'mail','placeholder'=>'Email','value'=>set_value('mail'));
						    echo form_input($mail);
						    
						echo form_submit('envoi', 'Valider');
						 
						echo form_close();
						?>			
			</div>
			
	</div>
	</div>
	</div>
	
</div>