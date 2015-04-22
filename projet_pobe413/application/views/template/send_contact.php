
<?php
if(isset($_POST['submit'])) {
	$msg = 'Name: ' .$_POST['nom'] . "\n"
			'Prenom' .$_POST['prenom'] . "\n"
			.'Email: ' .$_POST['email']	. "\n"
			.'Subject:  ' .$_POST['subject']	. "\n"
			.'Budjet: ' .$_POST['budjet']	. "\n"
			.'message' .$_POST['message'];
	mail('yahan973@gmail.com', 'prise de contact', $msg);
	header('location: contact-ty.php');

} else {
	header('location: contacts.php ');
	exit(0);
?>