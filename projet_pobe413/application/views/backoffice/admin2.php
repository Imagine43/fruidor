<div class="row">


<?php
	$idconn = mysqli_connect('localhost','root','');
	mysqli_select_db($idconn,'fruidor');
	$usr = $_POST['id'];
	$pwd = $_POST['password'];
	$sql = "SELECT count(*) from tbl_usrs where var_username='".$usr."' AND var_password='".$pwd."'";
	$result = mysqli_query($idconn,$sql) or die('Erreur SQL ! <br/>'.$sql.'<br/>'.mysql_error());
	var_dump($result);
	if ($result)
	{	
		echo '<div class="container span4">
				<div class="container-fluid col-md-4">	
				<ul class="nav  nav-pills nav-tabs nav-stacked">
			  		<li role="presentation" class="active"><a href="accueil">Home</a></li>
			  		<li role="presentation"><a href="login">Profil</a></li>
			  		
				</ul>
				<ul class="nav  nav-pills nav-tabs nav-stacked">
			  		<li role="presentation"  class="active"><a href="#">Devis</a></li>
			  		<li role="presentation"><a href="gestioncli">Liste des clients</a></li>
			  		<li role="presentation"><a href="gestionprod">Liste des produits</a></li>
				</ul>
				</div>
			</div>
			</div>';
		echo '<div class="span8" style="float:right; text-align:center;">';
		echo 'Connexion réussie';
		echo '</div>';
	}
	else
	{
				header('admin');
  				exit();
	}
	mysqli_close($idconn);
?>
</div>

