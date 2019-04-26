<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/categorie.php";
include "../core/categorieC.php";
if (isset($_GET['reference'])){
	$categorieC=new categorieC();
    $result=$produitC->recuperercategorie($_GET['referencee']);
	foreach($result as $row){
		$referencee=$row['referencee'];
		$nom=$row['nomcat'];
		
?>
<form method="POST">
<table>
<caption>Modifier categorie</caption>
<tr>
<td>reference</td>
<td><input type="text" name="referencee" value="<?PHP echo $referencee ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nomcat" value="<?PHP echo $nomcat ?>"></td>
</tr>

<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="reference_ini" value="<?PHP echo $_GET['referencee'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$categorie=new categorie($_POST['referencee'],$_POST['nom']);
	$categorieC->modifierEmploye($produit,$_POST['reference_ini']);
	echo $_POST['reference_ini'];
	header('Location: affichcat.php');
}
?>
</body>
</HTMl>