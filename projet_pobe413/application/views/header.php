<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">

	<?php
    if(isset($titre_page) && $titre_page != "") {
        $titre_page = $titre_page;
    }else{
        $titre_page = "Accueil";
    } ?>

        <title><?=$titre_page;?></title>
       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/tuto1.css">
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
        
</head>

<body style="background:#eee;" >
<div class="container span12">

