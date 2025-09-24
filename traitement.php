!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<!-- ce DOCTYPE est nécessaire avec IE pour les marges automatiques -->
<html>
<!-- en-tete technique-->
<head>
<title>Formulaire</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <link href="style.css" type="text/css" rel="stylesheet" media="all">
</head>
<body>
<h4>Confirmation de commande</h4>

<?php

$nom=$_POST["fnom"];
$prenom=$_POST["fprenom"];
$numero=$_POST["fnum"];
$email=$_POST["femail"];


echo "<p>Cher $nom $prenom</p>";
echo "<p>Votre demande de contact ma bien été transmis je vous répond au plus vite </p>";
echo "<p>Cordialement Nuno Miguel De Caldas Gomes</p>";
?>


</body>
</html>
