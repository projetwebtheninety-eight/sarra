


 <!DOCTYPE html> 


<html>
<head>
	<link rel="stylesheet" href="affich.css" />
</head>
<body>
<form method="post" action="ajoutproduit.php" enctype="multipart/form-data">
<table>
<caption>Ajouter Employe</caption>
<tr>
<td>Reference</td>
<td><input type="text" name="reference"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom"></td>
</tr>
<tr>
<td>Categorie</td>
<td><input type="text" name="categorie"></td>
</tr>
<tr>
<td>Prix</td>
<td><input type="text" name="prix"></td>
</tr>
<tr>
<td>Description</td>
<td><input type="text" name="description"></td>
</tr>
<tr>
<td>image</td>

<td>   
                     <input type="file" name="image" id="image" />        
                 </td>
</tr>
<tr>
<td></td>

 
<td><input type="submit" name="insert"  id="insert" value="Insert" class="btn btn-info"></td>
</tr>
</table>
</form>

  
</body>
</html>
 