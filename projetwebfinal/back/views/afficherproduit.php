<?PHP
include "../core/produitC.php";
$produit1C=new produitC();
$listeproduits=$produit1C->afficherproduits();

//var_dump($listeproduits->fetchAll());
?>
<table border="1">
<tr>
<td>Reference</td>
<td>Nom</td>
<td>Categorie</td>
<td>Prix</td>
<td>Description</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeproduits as $row){
	?>
	<tr>
	<td><?PHP echo $row['reference']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['categorie']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
	<td><?PHP echo $row['description']; ?></td>
	<td><form method="POST" action="supprimerproduit.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['reference']; ?>" name="reference">
	</form>
	</td>
	<td><a href="modifierproduit.php?reference=<?PHP echo $row['reference']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


