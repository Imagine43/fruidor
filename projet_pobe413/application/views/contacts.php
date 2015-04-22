<link class="cssdeck" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.2.2/css/bootstrap.min.css">


<div class="container">

<form class="well span8" action="send_contact.php" method="post">
  <div class="row">
		<div class="span4">
		<h6>Veuillez renseigner tous les champs obligatoires (*).</h6>
			<label for="nom" >*Noms</label>
			<input name="nom" id="nom" type="text"class="span3" placeholder="Dujar">
			<label for="prenom">Prénoms</label>
			<input name="prenom" id="prenom" type="text" class="span3" placeholder="Jean">
			<label for="email">*Email </label>
			<input name="email" id="email" type="text" class="span3" placeholder="email@exemple.com">
			<label for="sujet">Sujet
			<select id="subject" name="subject" class="span3">
				<option value="na" selected="">Choisir</option>
				<option value="achat">Achat</option>
				<option value="suggestions">Suggestions</option>
				<option value="product">Product Support</option>
			</select>
			<label for="budjet">Budget 
			<select id="subject" name="subject" class="span3">
				<option value="na" selected="">Moins de 3000 euros</option>
				<option value="prix_moy">3000 euros / 7000 euros</option>
				<option value="prix_fort">7000 euros / 15000 euros</option>
		
			</select>
			</label>
			</label>
		</div>
		<div class="span5">
			<label for="message">Demande du projet</label>
			<textarea name="message" id="message" class="input-xlarge span5" rows="10"></textarea>
		</div>
	
		<button type="submit" class="btn btn-primary pull-right">Send</button>
	</div>
</form>
</div>