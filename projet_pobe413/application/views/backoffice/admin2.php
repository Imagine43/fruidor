<div class="row">


<?php
	$idconn = mysqli_connect('localhost','root','');
	mysqli_select_db($idconn,'fruidor');
	$usr = $_POST['id'];
	$pwd = $_POST['password'];
	$sql = "select * from tbl_usrs where 'var_username' like '".$usr."' && 'var_password' like '".$pwd."'";
	$result = mysqli_query($idconn,$sql);
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
			  		<li role="presentation"><a href="#">Listes des clients</a></li>
			  		<li role="presentation"><a href="#">Listes des produits</a></li>
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

?>
