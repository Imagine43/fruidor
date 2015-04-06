<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<?php
    if(isset($titre_page) && $titre_page != "") {
        $titre_page = $titre_page;
    }else{
        $titre_page = "Accueil";
    } ?>

        <title><?=$titre_page;?></title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet"type="text/css">
		<link href="assets/css/tuto1.css" rel="stylesheet" type="text/css">

</head>


<body>

