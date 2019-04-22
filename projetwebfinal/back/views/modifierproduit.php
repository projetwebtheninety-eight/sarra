<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/produit.php";
include "../core/produitC.php";
if (isset($_GET['reference'])){
	$produitC=new ProduitC();
    $result=$produitC->recupererproduit($_GET['reference']);
	foreach($result as $row){
		$reference=$row['reference'];
		$nom=$row['nom'];
		$categorie=$row['categorie'];
		$prix=$row['prix'];
		$description=$row['description'];
?>
<form method="POST">
<table>
<caption>Modifier produit</caption>
<tr>
<td>reference</td> 
<td><input type="text" name="reference" value="<?PHP echo $_GET['reference'];  ?>" disabled></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>categorie</td>
<td><input type="text" name="categorie" value="<?PHP echo $categorie ?>"></td>
</tr>
<tr>
<td>prix</td>
<td><input type="text" name="prix" value="<?PHP echo $prix ?>"></td>
</tr>
<tr>
<td>description</td>
<td><input type="text" name="description" value="<?PHP echo $description ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="reference_ini" value="<?PHP echo $_GET['reference'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$produit=new produit($_POST['reference'],$_POST['nom'],$_POST['categorie'],$_POST['prix'],$_POST['description']);
	$produitC->modifierproduit($produit,$_POST['reference_ini']);
	echo $_POST['reference_ini'];
	header('Location: afficherproduit.php');
}
?>
</body>
</HTMl>