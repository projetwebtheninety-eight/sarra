

<?php
session_start();
if(isset($_SESSION['login_user']) and $_SESSION['login_user']=="sarra"){
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product - Dashboard Admin Template</title>
    <script src="add-product.js">
</script>
    <!--

    Template 2108 Dashboard

    http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
</head>

<body class="bg02">
	<style>

	

</style>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-xl navbar-light bg-light">
                    <a class="navbar-brand" href="index.html">
                        <i class=""></i>
                        <img src="img/logocaverne.jpg">
                        
                    </a>
                    <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                 <a class="nav-link" href="add/views/home2.php">Front
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="index.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Reports
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Daily Report</a>
                                    <a class="dropdown-item" href="#">Weekly Report</a>
                                    <a class="dropdown-item" href="index.html">Yearly Report</a>
                                </div>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="products.php">Products</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="accounts.html">Accounts</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Settings
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="#">Billing</a>
                                    <a class="dropdown-item" href="#">Customize</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link d-flex" href="login.html">
                                    <i class="far fa-user mr-2 tm-logout-icon"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- row -->
        <div class="row tm-mt-big">
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="tm-block-title d-inline-block">Ajouter produit</h3>
                        </div>
                    </div>
                    <div class="row mt-4 tm-edit-product-row">
                        <div class="col-xl-7 col-lg-7 col-md-12">

                            <form name="f"  action="ajoutproduit.php" class="tm-edit-product-form"  method="post"  enctype="multipart/form-data" onsubmit="return verifForm(this);">
                                <div class="input-group mb-3">
                                    <label for="exampleInputEmail3" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label ">Nom Produit 
                                    </label>
                                    <input  type="text" name="nom" id="exampleInputEmail3" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7 "  onclick="verifname(this);">
                                </div>

                                <div class="input-group mb-3">
                                    <label for="exampleInputName1"  class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Reference
                                    </label>
                                    <input type="text" name="reference" id="exampleInputName1" class="form-control validate col-xl-9 col-lg-8 col-md-7 col-sm-7" onclick="verifref(this);" >
                                    </div>
                                                                <div class="input-group mb-3">
<label class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Categorie</label>
 <input type="text" name="categorie" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" >
<select class="" id="exampleSelectGender" name="categorie"  >



	<?php
$db = mysql_connect('localhost', 'root', '') or exit(mysql_error());
 
// on sélectionne la base
mysql_select_db('test1',$db) or exit(mysql_error());
 
 
$sql = "SELECT nomcat FROM categorie";
$res = mysql_query($sql) or exit(mysql_error());
while($data=mysql_fetch_array($res)) {
   echo '<option>'.$data["nomcat"].'</option><br/>'; //Attention à ne pas oublier le . qui sert à concaténer ton expression
}
 
// on ferme la connexion à mysql
mysql_close(); //Facultatif, source de bug sur certaines versions de Wamp
?>

</select>
</div>


                               

                                <div class="input-group mb-3">
                                    <label for="exampleInputCity1" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Prix
                                    </label>
                                    <input type="text" id="exampleInputCity1" name="prix" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                                </div>
                                
                                   
                                   
                               <div class="input-group mb-3">
                                    <label for="description" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">Description</label>
                                    <textarea type="text" name="description" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" rows="3" required></textarea>
                                </div>


                                 

 
                                <div>
                                     <label for="image" class="inputfile">Image
                                    </label>

                     <input type="file" name="image" id="image"  class="inputfile" />   
                        </div> 
                                <div class="input-group mb-3">
                                    <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                        <br>
                                        <br>
                                        
                                      <tr>
 
<td><input type="submit" name="add"  id="add" value="add" class="btn btn-info" ></td>
</tr>
                                    </div>
                                </div>
                            </form>
                        </div>
                      
                           
                    </div>
                </div>
            </option>
       

        <footer class="row tm-mt-big">
            <div class="col-12 font-weight-light">

                <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                    Copyright &copy; 2019 
                </p>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    
</body>

<?php
}
else{
    header("location: login.php"); 
}
?>

</html>